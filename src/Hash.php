<?php

declare(strict_types=1);

namespace Pekhov\Std;

class Hash
{
    public function md5File(string $filename, bool $raw_output = false): string|false
    {
        return md5_file($filename, $raw_output);
    }

    public function md5(string $string, bool $raw_output = false): string
    {
        return md5($string, $raw_output);
    }

    public function sha1File(string $filename, bool $raw_output = false): string|false
    {
        return sha1_file($filename, $raw_output);
    }

    public function sha1(string $string, bool $raw_output = false): string
    {
        return sha1($string, $raw_output);
    }

    public function crypt(string $string, string $salt = ""): string|false
    {
        return crypt($string, $salt);
    }

    public function crc32(string $data): int
    {
        return crc32($data);
    }
}