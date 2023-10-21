<?php

declare(strict_types=1);

namespace Pekhov\Std;

class Std
{
    public static function json(): Json
    {
        return new Json();
    }
}