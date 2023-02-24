<?php

use App\Models\Changelog;
use function Pest\Laravel\getJson;

test('get all changelogs', function () {
     Changelog::factory()
        ->for(createUser())
        ->count(5)
        ->create();

    $result = getJson(route('api.changelogs.index'))->json('data');

    expect($result)
        ->toHaveCount(5)
        ->and($result[0])
        ->slug->toBeString()
        ->title->toBeString();
});

test('get a specific changelog', function () {
    $changelog = Changelog::factory()
        ->for(createUser())
        ->create();

    $result = getJson(route('api.changelogs.show', ['changelog' => $changelog->id]))->json('data');

    expect($result)
        ->toHaveKeys(['id', 'slug', 'title', 'content'])
        ->and($result['title'])->toBeString()
        ->and($result['id'])->toBeInt();
});
