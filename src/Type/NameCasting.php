<?php

declare(strict_types=1);

namespace THP\Type;

use THP\Type\Enums\GettypeTypes;
use THP\Type\Enums\LongTypes;
use THP\Type\Enums\Types;

class NameCasting
{
    public function toLong(Types $short): LongTypes
    {
        return LongTypes::from($this->mapToLong()[$short->value]);
    }

    public function fromLong(LongTypes $long): Types
    {
        return Types::from(array_flip($this->mapToLong())[$long->value]);
    }

    public function toGettypeType(Types $short): GettypeTypes
    {
        return GettypeTypes::from($this->mapToGettypeTypes()[$short->value]);
    }

    public function fromGettypeTypes(GettypeTypes $gettypeType): Types
    {
        return Types::from(array_flip($this->mapToGettypeTypes())[$gettypeType->value]);
    }

    private function mapToLong(): array
    {
        return [
            Types::NULL->value => LongTypes::NULL->value,
            Types::BOOL->value => LongTypes::BOOL->value,
            Types::INT->value => LongTypes::INT->value,
            Types::FLOAT->value => LongTypes::FLOAT->value,
            Types::STRING->value => LongTypes::STRING->value,
            Types::ARRAY->value => LongTypes::ARRAY->value,
            Types::OBJECT->value => LongTypes::OBJECT->value,
            Types::RESOURCE->value => LongTypes::RESOURCE->value,
        ];
    }

    private function mapToGettypeTypes(): array
    {
        return [
            Types::NULL->value => GettypeTypes::NULL->value,
            Types::BOOL->value => GettypeTypes::BOOL->value,
            Types::INT->value => GettypeTypes::INT->value,
            Types::FLOAT->value => GettypeTypes::FLOAT->value,
            Types::STRING->value => GettypeTypes::STRING->value,
            Types::ARRAY->value => GettypeTypes::ARRAY->value,
            Types::OBJECT->value => GettypeTypes::OBJECT->value,
            Types::RESOURCE->value => GettypeTypes::RESOURCE->value,
        ];
    }
}