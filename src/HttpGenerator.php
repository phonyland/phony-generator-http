<?php

declare(strict_types=1);

namespace Phonyland\HttpGenerator;

use Phonyland\Framework\Generator;

/**
 * Class HttpGenerator.
 *
 * @property-read string $method
 * @property-read int    $status_code
 * @property-read string $status_message
 * @property-read array  $status
 */
class HttpGenerator extends Generator
{
    protected array $attributes = [
        'method'                    => 'http.method*',
        'status_code'               => 'http.status::$.*.*.code',
        'status_message'            => 'http.status::$.*.*.message',
        'status'                    => 'http.status::$.*.*',
    ];

    public function statusCodeWithMessage(): string
    {
        $status = $this->status;

        return "{$status['code']} {$status['message']}";
    }

    public function statusMessageFromCode(int $statusCode): string
    {
        return $this->fetch("http.status::$..[?(@.code=$statusCode)].message");
    }
}
