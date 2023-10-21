<?php

declare(strict_types=1);

namespace Pekhov\Std;

use JetBrains\PhpStorm\NoReturn;

class Dump
{
    #[NoReturn]
    public function dd(mixed $arg, mixed ...$args): void
    {
        var_dump($arg, $args);
        die();
    }

    public function print(string ...$args): void
    {
        print(...$args);
    }
}