<?php

declare(strict_types=1);

namespace THP\Type\Enums;

enum GettypeTypes: string
{
    case NULL = 'NULL';
    case BOOL = 'boolean';
    case INT = 'integer';
    case FLOAT = 'double';
    case STRING = 'string';
    case ARRAY = 'array';
    case OBJECT = 'object';
    case RESOURCE = 'resource';
    case UNKNOWN_TYPE = 'unknown type';
}