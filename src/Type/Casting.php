<?php

declare(strict_types=1);

namespace THP\Type;

use THP\Type\Enums\BoolStrings;
use THP\Type\Enums\GettypeTypes;

class Casting
{
    public function toBool(mixed $value): bool
    {
        return (bool) $value;
    }

    public function boolToBoolString(bool $bool): string
    {
        return $bool ? BoolStrings::TRUE->value : BoolStrings::FALSE->value;
    }

    public function boolStringToBool(string $string): ?bool
    {
        return match ($string) {
            BoolStrings::TRUE->value => true,
            BoolStrings::FALSE->value => false,
            default => null,
        };
    }

    public function toInt(mixed $value): int
    {
        return match (gettype($value)) {
            GettypeTypes::INT->value => $value,
            GettypeTypes::BOOL->value, GettypeTypes::FLOAT->value, GettypeTypes::STRING->value => (int) $value,
            default => 0,
        };
    }

    public function toFloat(mixed $value): float
    {
        return match (gettype($value)) {
            GettypeTypes::FLOAT->value => $value,
            GettypeTypes::BOOL->value, GettypeTypes::INT->value, GettypeTypes::STRING->value => (int) $value,
            default => 0,
        };
    }

    public function toString(mixed $value): string
    {
        return match (gettype($value)) {
            GettypeTypes::STRING->value => $value,
            GettypeTypes::INT->value => (string) $value,
            default => '',
        };
    }

    public function toArray(mixed $value): array
    {
        return match (gettype($value)) {
            GettypeTypes::ARRAY->value => $value,
            default => [],
        };
    }
}