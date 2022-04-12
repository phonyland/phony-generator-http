<?php

declare(strict_types=1);

test('http->text')
    ->expect(🙃()->http->text())
    ->toBeAWord()
    ->toContain('example-text-');
