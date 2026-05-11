<?php

it('returns a successful response', function () {
    $this->get('/')->assertSuccessful();
});

it('links to the Meet the Owner page from the landing page', function () {
    $response = $this->get('/')
        ->assertSuccessful()
        ->assertSee('Meet the Owner', false);

    expect(substr_count($response->getContent(), route('meet-the-owner')))->toBe(2);
});

it('renders the Meet the Owner page with Dregozone blog link', function () {
    $this->get(route('meet-the-owner'))
        ->assertSuccessful()
        ->assertSee('The person behind', false)
        ->assertSee('href="https://dregozone.com" target="_blank" rel="noopener noreferrer"', false);
});
