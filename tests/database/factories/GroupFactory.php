<?php

use Illuminate\Support\Str;
use KirschbaumDevelopment\EloquentJoins\Tests\Models\Group;

$factory->define(Group::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});
