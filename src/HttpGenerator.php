<?php

declare(strict_types=1);

namespace Phonyland\HttpGenerator;

use Phonyland\Framework\Generator;

class HttpGenerator extends Generator
{
    protected array $attributes = [
        'status_code'               => 'http.status::$.*.*.code',
        'status_message'            => 'http.status::$.*.*.message',
        'status'                    => 'http.status::$.*.*',
    ];

    public function statusCodeWithMessage(): string
    {
        $status = $this->status;

        return "{$status['code']} {$status['message']}";
    }
    {
        return 'example-text-' . random_int(1, 9999);
    }
}
