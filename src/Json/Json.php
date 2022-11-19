<?php

declare(strict_types=1);

namespace THP\Json;

use THP\Type\Casting;

class Json
{
    public function __construct(
        private readonly Casting $casting,
    ) {}

    public function encode(array $data)
    {
        return $this->casting->toString(json_encode($data));
    }

    public function decode(string $json)
    {
        return $this->casting->toArray(json_decode($json, true));
    }
}