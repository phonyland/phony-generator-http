<?php

declare(strict_types=1);

namespace Phonyland\HttpGenerator;

use Phonyland\Framework\Generator;

class HttpGenerator extends Generator
{
    public function text(): string
    {
        return 'example-text-' . random_int(1, 9999);
    }
}
