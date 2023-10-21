<?php

declare(strict_types=1);

namespace Pekhov\Std;

/**
 * Function in the Str class for strings, so the str prefix is not used.
 * strlen it`s len, and function using mb_ prefix (multiple byte)
 *
 * TODO: convert to mb_
 */
class Str
{
    public function addCSlashes(string $string, string $characters): string
    {
        return addcslashes($string, $characters);
    }

    public function addSlashes(string $string): string
    {
        return addslashes($string);
    }

    public function bin2hex(string $data): string
    {
        return bin2hex($data);
    }

    public function hex2bin(string $data): string|false
    {
        return hex2bin($data);
    }

    public function chop(string $string, string $character_mask = " \t\n\r\0\x0B"): string
    {
        return rtrim($string, $character_mask);
    }

    public function chr(int $ascii): string
    {
        return chr($ascii);
    }

    public function chunkSplit(string $string, int $length = 76, string $end = "\r\n"): string
    {
        return chunk_split($string, $length, $end);
    }

    public function convertUuDecode(string $data): string|false
    {
        return convert_uudecode($data);
    }

    public function convertUuencode(string $data): string|false
    {
        return convert_uuencode($data);
    }

    public function countChars(string $string, int $mode = 0): mixed
    {
        return count_chars($string, $mode);
    }

    public function explode(string $delimiter, string $string, int $limit = PHP_INT_MAX): array
    {
        return explode($delimiter, $string, $limit);
    }

    public function fPrintf($stream, string $format, ...$args): int|false
    {
        return fprintf($stream, $format, ...$args);
    }

    public function getHtmlTranslationTable(int $table = HTML_SPECIALCHARS, int $flags = ENT_COMPAT | ENT_HTML401): array
    {
        return get_html_translation_table($table, $flags);
    }

    public function hebRev(string $hebrew_text, int $max_chars_per_line = 0): string
    {
        return hebrev($hebrew_text, $max_chars_per_line);
    }

    public function htmlEntityDecode(string $string, int $flags = ENT_COMPAT | ENT_HTML401): string
    {
        return html_entity_decode($string, $flags);
    }

    public function htmlEntities(string $string, int $flags = ENT_COMPAT | ENT_HTML401, string $encoding = "UTF-8", bool $double_encode = true): string
    {
        return htmlentities($string, $flags, $encoding, $double_encode);
    }

    public function htmlSpecialCharsDecode(string $string, int $flags = ENT_COMPAT | ENT_HTML401): string
    {
        return htmlspecialchars_decode($string, $flags);
    }

    public function htmlSpecialChars(string $string, int $flags = ENT_COMPAT | ENT_HTML401, string $encoding = "UTF-8", bool $double_encode = true): string
    {
        return htmlspecialchars($string, $flags, $encoding, $double_encode);
    }

    public function implode(string $glue, array $pieces): string
    {
        return implode($glue, $pieces);
    }

    public function lcFirst(string $string): string
    {
        return lcfirst($string);
    }

    public function levenshtein(string $str1, string $str2, int $cost_ins = 1, int $cost_rep = 1, int $cost_del = 1): int
    {
        return levenshtein($str1, $str2, $cost_ins, $cost_rep, $cost_del);
    }

    public function localeConv(): array
    {
        return localeconv();
    }

    public function ltrim(string $string, string $character_mask = " \t\n\r\0\x0B"): string
    {
        return ltrim($string, $character_mask);
    }

    public function rtrim(string $string, string $character_mask = " \t\n\r\0\x0B"): string
    {
        return rtrim($string, $character_mask);
    }

    public function metaphone(string $string, int $phonemes = 0): string
    {
        return metaphone($string, $phonemes);
    }

    public function nlLangInfo(int $item): string
    {
        return nl_langinfo($item);
    }

    public function nl2br(string $string, bool $is_xhtml = true): string
    {
        return nl2br($string, $is_xhtml);
    }

    public function numberFormat(float $number, int $decimals = 0, string $decimal_point = ".", string $thousands_sep = ","): string
    {
        return number_format($number, $decimals, $decimal_point, $thousands_sep);
    }

    public function ord(string $string): int
    {
        return ord($string);
    }

    public function parseStr(string $str, array &$result = null): void
    {
        parse_str($str, $result);
    }

    public function printF(string $format, ...$args): int|false
    {
        return printf($format, ...$args);
    }

    public function quotedPrintableDecode(string $string): string|false
    {
        return quoted_printable_decode($string);
    }

    public function quotedPrintableEncode(string $string): string
    {
        return quoted_printable_encode($string);
    }

    public function quoteMeta(string $string): string
    {
        return quotemeta($string);
    }

    public function setLocale(int $category, string ...$locales): string|false
    {
        return setlocale($category, ...$locales);
    }

    public function similarText(string $first, string $second, float &$percent = 0.0): int
    {
        return similar_text($first, $second, $percent);
    }

    public function soundex(string $string): string
    {
        return soundex($string);
    }

    public function sprintf(string $format, ...$args): string
    {
        return sprintf($format, ...$args);
    }

    public function sScanF(string $string, string $format, mixed ...$args): array|int
    {
        return sscanf($string, $format, ...$args);
    }

    public function strContains(string $haystack, string $needle, int $offset = 0): bool
    {
        return str_contains($haystack, $needle, $offset);
    }

    public function strEndsWith(string $haystack, string $needle): bool
    {
        return str_ends_with($haystack, $needle);
    }

    public function strGetCsv(string $string, string $delimiter = ",", string $enclosure = '"', string $escape = "\\"): array|false
    {
        return str_getcsv($string, $delimiter, $enclosure, $escape);
    }

    public function strIreplace(string $search, string $replace, string $subject, int &$count = 0): string
    {
        return str_ireplace($search, $replace, $subject, $count);
    }

    public function strPad(string $input, int $length, string $padString = " ", int $padType = STR_PAD_RIGHT): string
    {
        return str_pad($input, $length, $padString, $padType);
    }

    public function strRepeat(string $input, int $multiplier): string
    {
        return str_repeat($input, $multiplier);
    }

    public function strReplace(string $search, string $replace, string $subject, int &$count = null): string
    {
        return str_replace($search, $replace, $subject, $count);
    }

    public function strRot13(string $str): string
    {
        return str_rot13($str);
    }

    public function strShuffle(string $str): string|false
    {
        return str_shuffle($str);
    }

    public function strSplit(string $string, int $length = 1): array
    {
        return str_split($string, $length);
    }

    public function strStartsWith(string $haystack, string $needle): bool
    {
        return str_starts_with($haystack, $needle);
    }

    public function strWordCount(string $string, int $format = 0, string $charlist = null): mixed
    {
        return str_word_count($string, $format, $charlist);
    }

    public function strcasecmp(string $str1, string $str2): int
    {
        return strcasecmp($str1, $str2);
    }

    public function strchr(string $haystack, string $needle, bool $before_needle = false): string
    {
        return strstr($haystack, $needle, $before_needle);
    }

    public function strcmp(string $str1, string $str2): int
    {
        return strcmp($str1, $str2);
    }

    public function strcoll(string $str1, string $str2): int
    {
        return strcoll($str1, $str2);
    }

    public function strcspn(string $str, string $mask, int $start = 0, int $length = null): int
    {
        return strcspn($str, $mask, $start, $length);
    }

    public function stripTags(string $string, string $allowable_tags = null): string
    {
        return strip_tags($string, $allowable_tags);
    }

    public function stripcslashes(string $string): string
    {
        return stripcslashes($string);
    }

    public function stripos(string $haystack, string $needle, int $offset = 0): int|false
    {
        return stripos($haystack, $needle, $offset);
    }

    public function stripslashes(string $string): string
    {
        return stripslashes($string);
    }

    public function stristr(string $haystack, string $needle, bool $before_needle = false): string|false
    {
        return stristr($haystack, $needle, $before_needle);
    }

    public function strLen(string $string): int
    {
        return mb_strlen($string);
    }

    public function strNatCaseCmp(string $str1, string $str2): int
    {
        return strnatcasecmp($str1, $str2);
    }

    public function strNatCmp(string $str1, string $str2): int
    {
        return strnatcmp($str1, $str2);
    }

    public function strncasecmp(string $str1, string $str2, int $n): int
    {
        return strncasecmp($str1, $str2, $n);
    }

    public function strncmp(string $str1, string $str2, int $n): int
    {
        return strncmp($str1, $str2, $n);
    }

    public function strpbrk(string $haystack, string $char_list): string|false
    {
        return strpbrk($haystack, $char_list);
    }

    public function strPos(string $haystack, string $needle, int $offset = 0): int|false
    {
        return strpos($haystack, $needle, $offset);
    }

    public function strrChr(string $haystack, string $needle): string|false
    {
        return strrchr($haystack, $needle);
    }

    public function strRev(string $string): string
    {
        return strrev($string);
    }

    public function strriPos(string $haystack, string $needle, int $offset = 0): int|false
    {
        return strripos($haystack, $needle, $offset);
    }

    public function strrPos(string $haystack, string $needle, int $offset = 0): int|false
    {
        return strrpos($haystack, $needle, $offset);
    }

    public function strSpn(string $str, string $mask, int $start, int $length): int
    {
        return strspn($str, $mask, $start, $length);
    }

    public function strStr(string $haystack, string $needle, bool $before_needle = false): string|false
    {
        return strstr($haystack, $needle, $before_needle);
    }

    public function strTok(string $string, string $token): string|false
    {
        return strtok($string, $token);
    }

    public function strToLower(string $string): string
    {
        return strtolower($string);
    }

    public function strToUpper(string $string): string
    {
        return mb_strtoupper($string);
    }

    public function strtr(string $string, array|string $from, array|string $to): string
    {
        return strtr($string, $from, $to);
    }

    public function substrCompare(string $mainStr, string $str, int $offset, int $length, bool $caseInsensitivity = false): int
    {
        return substr_compare($mainStr, $str, $offset, $length, $caseInsensitivity);
    }

    public function substrCount(string $haystack, string $needle, string|null $encoding): int
    {
        return mb_substr_count($haystack, $needle, $encoding);
    }

    public function substrReplace(string $string, string $replacement, int $start, int $length = null): string
    {
        return substr_replace($string, $replacement, $start, $length);
    }

    public function substr(string $string, int $start, int $length = null): string
    {
        return mb_substr($string, $start, $length);
    }

    public function trim(string $string, string $character_mask = " \t\n\r\0\x0B"): string
    {
        return trim($string, $character_mask);
    }

    public function ucFirst(string $string): string
    {
        return ucfirst($string);
    }

    public function ucWords(string $string, string $delimiters = " \t\r\n\f\v"): string
    {
        return ucwords($string, $delimiters);
    }

    public function vfPrintF($stream, string $format, array $args): int|false
    {
        return vfprintf($stream, $format, ...$args);
    }

    public function vPrintF(string $format, array $args): int|false
    {
        return vprintf($format, ...$args);
    }

    public function vsPrintF(string $format, array $args): string
    {
        return vsprintf($format, ...$args);
    }

    public function wordwrap(string $string, int $width = 75, string $break = "\n", bool $cut = false): string
    {
        return wordwrap($string, $width, $break, $cut);
    }
}