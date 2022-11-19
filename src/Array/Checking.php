<?php

declare(strict_types=1);

namespace THP\Array;

class Checking
{
    public function issetAndBool(array $array, int|string $key): bool
    {
        return isset($array[$key]) && is_bool($array[$key]);
    }

    public function issetAndInt(array $array, int|string $key): bool
    {
        return isset($array[$key]) && is_int($array[$key]);
    }

    public function issetAndFloat(array $array, int|string $key): bool
    {
        return isset($array[$key]) && is_float($array[$key]);
    }

    public function issetAndNumeric(array $array, int|string $key): bool
    {
        return isset($array[$key]) && is_numeric($array[$key]);
    }

    public function issetAndString(array $array, int|string $key): bool
    {
        return isset($array[$key]) && is_string($array[$key]);
    }

    public function issetAndArray(array $array, int|string $key): bool
    {
        return isset($array[$key]) && is_array($array[$key]);
    }

    public function issetAndObject(array $array, int|string $key): bool
    {
        return isset($array[$key]) && is_object($array[$key]);
    }

    public function issetAndResource(array $array, int|string $key): bool
    {
        return isset($array[$key]) && is_resource($array[$key]);
    }
}