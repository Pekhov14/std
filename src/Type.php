<?php

namespace Pekhov\Std;

class Type
{
    public static function isArray(mixed $value): bool
    {
        return is_array($value);
    }
    public static function isBool(mixed $value): bool
    {
        return is_bool($value);
    }

    public static function isFloat(mixed $value): bool
    {
        return is_float($value);
    }

    public static function isInt(mixed $value): bool
    {
        return is_int($value);
    }

    public static function isNull(mixed $value): bool
    {
        return $value === null;
    }

    public static function isNumeric(mixed $value): bool
    {
        return is_numeric($value);
    }

    public static function isObject(mixed $value): bool
    {
        return is_object($value);
    }

    public static function isString(mixed $value): bool
    {
        return is_string($value);
    }

    public static function setType(mixed &$var, string $type): bool
    {
        return settype($var, $type);
    }

    public static function getType(mixed $value): string
    {
        return gettype($value);
    }

}