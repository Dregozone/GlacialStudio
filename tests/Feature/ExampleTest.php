<?php

it('returns a successful response', function () {
    $this->get('/')->assertSuccessful();
});

it('has subtle links to the meet the owner page on the landing page', function () {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee(route('meet-the-owner'), false)
        ->assertSee('Meet the owner', false)
        ->assertSee('Meet the Owner', false);
});

it('renders the meet the owner page with dregozone blog link', function () {
    $this->get(route('meet-the-owner'))
        ->assertSuccessful()
        ->assertSee('The person behind', false)
        ->assertSee('https://dregozone.com', false)
        ->assertSee('target="_blank"', false);
});
