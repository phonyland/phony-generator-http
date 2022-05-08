<?php

declare(strict_types=1);

test('http->status_code')
    ->expect(🙃()->http->status_code)
    ->toBeNumeric();

test('http->status_message')
    ->expect(🙃()->http->status_message)
    ->toBeString();
