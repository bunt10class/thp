<?php

declare(strict_types=1);

namespace THP\Array;

class Getting
{
    public function __construct(
        private readonly Checking $checking
    ) {}

    public function getBool(array $array, int|string $key): ?bool
    {
        return $this->checking->issetAndBool($array, $key) ? $array[$key] : null;
    }

    public function getInt(array $array, int|string $key): ?int
    {
        return $this->checking->issetAndInt($array, $key) ? $array[$key] : null;
    }

    public function getFloat(array $array, int|string $key): ?float
    {
        return $this->checking->issetAndFloat($array, $key) ? $array[$key] : null;
    }

    public function getNumeric(array $array, int|string $key): null|int|float|string
    {
        return $this->checking->issetAndNumeric($array, $key) ? $array[$key] : null;
    }

    public function getString(array $array, int|string $key): ?string
    {
        return $this->checking->issetAndString($array, $key) ? $array[$key] : null;
    }

    public function getArray(array $array, int|string $key): ?array
    {
        return $this->checking->issetAndArray($array, $key) ? $array[$key] : null;
    }

    public function getObject(array $array, int|string $key): ?array
    {
        return $this->checking->issetAndObject($array, $key) ? $array[$key] : null;
    }

    public function getResource(array $array, int|string $key): ?array
    {
        return $this->checking->issetAndResource($array, $key) ? $array[$key] : null;
    }
}