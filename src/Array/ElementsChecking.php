<?php

declare(strict_types=1);

namespace THP\Array;

class ElementsChecking
{
    public function hasNulls(array $array): bool
    {
        return $this->has($array, 'is_null');
    }

    public function hasBools(array $array): bool
    {
        return $this->has($array, 'is_bool');
    }

    public function hasBoolStrings(array $array): bool
    {
        return $this->has($array, 'in_array');
    }

    private function has(array $array, callable $checking): bool
    {
        foreach ($array as $value) {
            if (!$checking($value)) {
                return false;
            }
        }

        return true;
    }
}