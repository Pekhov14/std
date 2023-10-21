<?php

declare(strict_types=1);

namespace Pekhov\Std;

class Arr
{
    public function changeKeyCase(array $input, int $case = CASE_LOWER): array
    {
        return array_change_key_case($input, $case);
    }

    public function chunk(array $input, int $size, bool $preserveKeys = false): array
    {
        return array_chunk($input, $size, $preserveKeys);
    }

    public function column(array $input, mixed $columnKey, mixed $indexKey = null): array
    {
        return array_column($input, $columnKey, $indexKey);
    }

    public function combine(array $keys, array $values): array|false
    {
        return array_combine($keys, $values);
    }

    public function countValues(array $input): array|false
    {
        return array_count_values($input);
    }

    public function diffAssoc(array $array, array ...$arrays): array
    {
        return array_diff_assoc($array, ...$arrays);
    }

    public function diffKey(array $array, array ...$arrays): array
    {
        return array_diff_key($array, ...$arrays);
    }

    public function diffUAssoc(array $array, callable $keyComparisonFunction): array
    {
        return array_diff_uassoc($array, $keyComparisonFunction);
    }

    public function diffUKey(array $array1, array $array2, callable $keyComparisonFunction): array
    {
        return array_diff_ukey($array1, $array2, $keyComparisonFunction);
    }

    public function diff(array $array1, array $array2, array ...$arrays): array
    {
        return array_diff($array1, $array2, ...$arrays);
    }

    public function fillKeys(array $keys, mixed $value): array
    {
        return array_fill_keys($keys, $value);
    }

    public function fill(int $start, int $count, mixed $value): array
    {
        return array_fill($start, $count, $value);
    }

    public function filter(array $input, callable $callback = null, int $flag = 0): array|false
    {
        return array_filter($input, $callback, $flag);
    }

    public function flip(array $input): array|false
    {
        return array_flip($input);
    }

    public function intersectAssoc(array $array1, array $array2, array ...$arrays): array
    {
        return array_intersect_assoc($array1, $array2, ...$arrays);
    }

    public function intersectKey(array $array1, array $array2, array ...$arrays): array
    {
        return array_intersect_key($array1, $array2, ...$arrays);
    }

    public function intersectUAssoc(array $array1, array $array2, callable $keyComparisonFunction): array
    {
        return array_intersect_uassoc($array1, $array2, $keyComparisonFunction);
    }

    public function intersectUKey(array $array1, array $array2, callable $keyComparisonFunction): array
    {
        return array_intersect_ukey($array1, $array2, $keyComparisonFunction);
    }

    public function intersect(array $array1, array $array2, array ...$arrays): array
    {
        return array_intersect($array1, $array2, ...$arrays);
    }

    public function isList(array $array): bool
    {
        return array_is_list($array);
    }

    public function keyExists(mixed $key, array $array): bool
    {
        return array_key_exists($key, $array);
    }

    public function keyFirst(array $array): int|string|null
    {
        return array_key_first($array);
    }

    public function keyLast(array $array): int|string|null
    {
        return array_key_last($array);
    }

    public function keys(array $input): array
    {
        return array_keys($input);
    }

    public function map(callable $callback, array ...$arrays): array|false
    {
        return array_map($callback, ...$arrays);
    }

    public function mergeRecursive(array ...$arrays): array
    {
        return array_merge_recursive(...$arrays);
    }

    public function merge(array ...$arrays): array
    {
        return array_merge(...$arrays);
    }

    public function multiSort(array &$array, int $flags = SORT_REGULAR, mixed ...$args): bool
    {
        return array_multisort($array, $flags, ...$args);
    }

    public function pad(array $input, int $padSize, mixed $padValue): array|false
    {
        return array_pad($input, $padSize, $padValue);
    }

    public function pop(array &$array): mixed
    {
        return array_pop($array);
    }

    public function product(array $array): float
    {
        return array_product($array);
    }

    public function push(array &$array, mixed ...$values): int|false
    {
        return array_push($array, ...$values);
    }

    public function rand(array $array, int $num = 1): array|int|string
    {
        return array_rand($array, $num);
    }

    public function reduce(array $array, callable $callback, mixed $initial = null): mixed
    {
        return array_reduce($array, $callback, $initial);
    }

    public function replaceRecursive(array $array1, array $array2): array|false
    {
        return array_replace_recursive($array1, $array2);
    }

    public function replace(array $array1, array $array2): array|false
    {
        return array_replace($array1, $array2);
    }

    public function reverse(array $array, bool $preserveKeys = false): array|false
    {
        return array_reverse($array, $preserveKeys);
    }

    public function search(mixed $needle, array $haystack, bool $strict = false): false|int|string
    {
        return array_search($needle, $haystack, $strict);
    }

    public function shift(array &$array): mixed
    {
        return array_shift($array);
    }

    public function slice(array $array, int $offset, int $length = null, bool $preserveKeys = false): array|false
    {
        return array_slice($array, $offset, $length, $preserveKeys);
    }

    public function splice(array &$input, int $offset, int $length = null, mixed $replacement = []): array|false
    {
        return array_splice($input, $offset, $length, $replacement);
    }

    public function sum(array $array, int $flags = 0): mixed
    {
        return array_sum($array, $flags);
    }

    public function uDiffAssoc(array $array1, array $array2, callable $valueComparisonFunction): array|false
    {
        return array_udiff_assoc($array1, $array2, $valueComparisonFunction);
    }

    public function uDiffUAssoc(array $array1, array $array2, callable $valueComparisonFunction, callable $keyComparisonFunction): array|false
    {
        return array_udiff_uassoc($array1, $array2, $valueComparisonFunction, $keyComparisonFunction);
    }

    public function uDiff(array $array1, array $array2, callable $valueComparisonFunction): array|false
    {
        return array_udiff($array1, $array2, $valueComparisonFunction);
    }

    public function uIntersectAssoc(array $array1, array $array2, callable $valueComparisonFunction): array|false
    {
        return array_uintersect_assoc($array1, $array2, $valueComparisonFunction);
    }

    public function uIntersectUAssoc(array $array1, array $array2, callable $valueComparisonFunction, callable $keyComparisonFunction): array|false
    {
        return array_uintersect_uassoc($array1, $array2, $valueComparisonFunction, $keyComparisonFunction);
    }

    public function uIntersect(array $array1, array $array2, callable $valueComparisonFunction): array|false
    {
        return array_uintersect($array1, $array2, $valueComparisonFunction);
    }

    public function unique(array $input, int $flags = SORT_STRING): array
    {
        return array_unique($input, $flags);
    }

    public function unShift(array &$array, mixed ...$values): int
    {
        return array_unshift($array, ...$values);
    }

    public function values(array $input): array
    {
        return array_values($input);
    }

    public function walkRecursive(array &$array, callable $callback, mixed $userdata = null): true
    {
        return array_walk_recursive($array, $callback, $userdata);
    }

    public function walk(array &$array, callable $callback, mixed $userdata = null): true
    {
        return array_walk($array, $callback, $userdata);
    }

//    public function ChangeKeyCaseRecursive(array $input, int $case = CASE_LOWER): array
//    {
//        foreach ($input as &$value) {
//            if (is_array($value)) {
//                $value = $this->arrayChangeKeyCaseRecursive($value, $case);
//            }
//        }
//        unset($value);
//
//        return array_change_key_case($input, $case);
//    }

    public function key(mixed $key, array $array): bool
    {
        return array_key_exists($key, $array);
    }

    public function firstKey(array $array): mixed
    {
        return array_key_first($array);
    }

    public function lastKey(array $array): mixed
    {
        return array_key_last($array);
    }
}