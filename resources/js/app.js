import './bootstrap';

const scrollToHashTarget = () => {
    if (!window.location.hash) {
        return;
    }

    const targetId = decodeURIComponent(window.location.hash.slice(1));
    const target = document.getElementById(targetId);

    if (!target) {
        return;
    }

    requestAnimationFrame(() => {
        target.scrollIntoView({
            behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth',
            block: 'start',
        });
    });
};

window.addEventListener('load', scrollToHashTarget);
window.addEventListener('hashchange', scrollToHashTarget);
document.addEventListener('livewire:navigated', scrollToHashTarget);
