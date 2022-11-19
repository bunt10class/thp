<?php

declare(strict_types=1);

namespace THP\String;

class StringArray
{
    public function implode(string $separator, array $array): string
    {
        return implode($separator, $array);
    }
}