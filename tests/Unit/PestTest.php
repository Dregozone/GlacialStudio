<?php

function sum(float $a, float $b): float
{
    return $a + $b;
}

it('performs sums', function () {
    $result = sum(1, 2);
  
    expect($result)->toBe(3.0);
});

it('has a homepage', function () {
    $response = $this->get('/');
  
    $response->assertStatus(200);
});
