import assert from 'node:assert/strict';
import { readFileSync } from 'node:fs';
import { test } from 'node:test';
import vm from 'node:vm';

/**
 * Runs the visit beacon script from the layout in a fake browser, so its timing can be
 * checked without a real one. Blade's @js(...) calls are swapped for test values.
 */
function loadBeacon({ visibilityState = 'visible', webdriver = false } = {}) {
    const layout = readFileSync(new URL('../../resources/views/layouts/app.blade.php', import.meta.url), 'utf8');
    const script = layout
        .match(/Anonymous visit count.*?<script>([\s\S]*?)<\/script>/s)[1]
        .replace(/@js\(route\('visits\.beacon'[^)]*\)\)/, "'/v'")
        .replace(/@js\(\\App\\Models\\PageVisit::issueBeaconToken\(\)\)/, "'test-token'");

    const listeners = { window: {}, document: {} };
    const listen = (target) => ({
        addEventListener: (event, listener) => {
            (listeners[target][event] ??= new Set()).add(listener);
        },
        removeEventListener: (event, listener) => listeners[target][event]?.delete(listener),
    });

    let now = 0;
    let timers = [];
    const beacons = [];

    const browser = {
        window: { ...listen('window'), location: { pathname: '/meet-the-owner' } },
        document: { ...listen('document'), visibilityState },
        navigator: {
            webdriver,
            sendBeacon: (url, body) => beacons.push({ url, body: Object.fromEntries(body) }),
        },
        setTimeout: (callback, delay) => {
            const timer = { callback, at: now + delay };
            timers.push(timer);

            return timer;
        },
        clearTimeout: (timer) => {
            timers = timers.filter((pending) => pending !== timer);
        },
        URLSearchParams,
    };

    vm.runInNewContext(script, browser);

    const dispatch = (target, event) => [...(listeners[target][event] ?? [])].forEach((listener) => listener());

    return {
        beacons,
        wait(milliseconds) {
            now += milliseconds;
            const due = timers.filter((timer) => timer.at <= now);
            timers = timers.filter((timer) => timer.at > now);
            due.forEach((timer) => timer.callback());
        },
        interact: (event = 'scroll') => dispatch('window', event),
        setVisibility(state) {
            browser.document.visibilityState = state;
            dispatch('document', 'visibilitychange');
        },
    };
}

test('sends nothing on page load alone', () => {
    const page = loadBeacon();

    page.wait(4999);

    assert.equal(page.beacons.length, 0);
});

test('sends one beacon after 5 seconds on a visible page', () => {
    const page = loadBeacon();

    page.wait(5000);
    page.wait(10000);
    page.interact();

    assert.deepEqual(page.beacons, [{ url: '/v', body: { token: 'test-token', path: '/meet-the-owner' } }]);
});

for (const event of ['scroll', 'pointermove', 'touchstart', 'keydown']) {
    test(`sends one beacon straight away on a ${event}`, () => {
        const page = loadBeacon();

        page.interact(event);
        page.interact(event);
        page.wait(5000);

        assert.equal(page.beacons.length, 1);
    });
}

test('waits until a hidden page is visible, then counts 5 visible seconds', () => {
    const page = loadBeacon({ visibilityState: 'hidden' });

    page.wait(60000);
    assert.equal(page.beacons.length, 0);

    page.setVisibility('visible');
    page.wait(3000);
    page.setVisibility('hidden');
    page.wait(60000);
    assert.equal(page.beacons.length, 0);

    page.setVisibility('visible');
    page.wait(5000);
    assert.equal(page.beacons.length, 1);
});

test('never sends when the browser is driven by automation', () => {
    const page = loadBeacon({ webdriver: true });

    page.interact();
    page.wait(5000);

    assert.equal(page.beacons.length, 0);
});
