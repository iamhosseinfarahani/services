<?php

namespace App\Contracts;

interface ResponseInterface
{
    public static function json(int $code = 200, bool $success = true, array $data = []): array;
}
