<?php

declare(strict_types=1);

namespace THP\Array;

use THP\Type\Enums\DefaultValues;

class StrictGetting
{
    public function __construct(
        private readonly Getting $getting
    ) {}

    public function getBool(array $array, int|string $key): bool
    {
        return $this->getting->getBool($array, $key) ?? DefaultValues::BOOL;
    }

    public function getInt(array $array, int|string $key): int
    {
        return $this->getting->getInt($array, $key) ?? DefaultValues::INT;
    }

    public function getFloat(array $array, int|string $key): float
    {
        return $this->getting->getFloat($array, $key) ?? DefaultValues::FLOAT;
    }

    public function getNumeric(array $array, int|string $key): int
    {
        return $this->getting->getNumeric($array, $key) ?? DefaultValues::NUMERIC;
    }

    public function getString(array $array, int|string $key): ?string
    {
        return $this->getting->getString($array, $key) ?? DefaultValues::STRING;
    }

    public function getArray(array $array, int|string $key): ?array
    {
        return $this->getting->getArray($array, $key) ?? DefaultValues::ARRAY;
    }
}