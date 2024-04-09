<?php

declare(strict_types=1);

namespace Pekhov\Std;

class Json
{
    public function encode(mixed $value, int $flags = 0, int $depth = 512): string|false
    {
        return json_encode($value, JSON_THROW_ON_ERROR | $flags, $depth);
    }

    public function decode(string $json, ?bool $associative = null, int $depth = 512, int $flags = 0): mixed
    {
        return json_decode($json, $associative, $depth, JSON_THROW_ON_ERROR | $flags);
    }
}