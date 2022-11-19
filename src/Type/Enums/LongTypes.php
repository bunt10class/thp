<?php

declare(strict_types=1);

namespace THP\Type\Enums;

enum LongTypes: string
{
    case NULL = 'null';
    case BOOL = 'boolean';
    case INT = 'integer';
    case FLOAT = 'float';
    case STRING = 'string';
    case ARRAY = 'array';
    case OBJECT = 'object';
    case RESOURCE = 'resource';
}