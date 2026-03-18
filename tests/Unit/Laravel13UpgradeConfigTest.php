<?php

declare(strict_types=1);

use Tests\TestCase;

uses(TestCase::class);

it('disables arbitrary cache object unserialization by default', function () {
    expect(config('cache.serializable_classes'))->toBeFalse();
});
