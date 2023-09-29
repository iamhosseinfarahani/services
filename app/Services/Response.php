<?php

namespace App\Services;

use App\Contracts\ResponseInterface;

class Response implements ResponseInterface
{

    public static function json(int $code = 200, bool $success = true, array $data = []): array
    {
        return [
            'code' => $code,
            'success' => $success,
            'data' => $data
        ];
    }
}
