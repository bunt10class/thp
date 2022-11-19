<?php

declare(strict_types=1);

namespace THP\Type\Enums;

enum Types: string
{
    case NULL = 'null';
    case BOOL = 'bool';
    case INT = 'int';
    case FLOAT = 'float';
    case STRING = 'string';
    case ARRAY = 'array';
    case OBJECT = 'object';
    case RESOURCE = 'resource';
}