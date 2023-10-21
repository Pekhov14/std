<?php

declare(strict_types=1);

namespace Pekhov\Std;

class Std
{
    public static function json(): Json
    {
        return new Json();
    }

    public static function string(): Str
    {
        return new Str();
    }

    public static function array(): Arr
    {
        return new Arr();
    }

    public static function hash(): Hash
    {
        return new Hash();
    }

    public static function dump(): Dump
    {
        return new Dump();
    }

    public static function type(): Type
    {
        return new Type();
    }
}