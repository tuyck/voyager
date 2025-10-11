<?php

namespace Tuyck\Voyager\Database\Types\Postgresql;

use Tuyck\Voyager\Database\Types\Common\CharType;

class CharacterType extends CharType
{
    public const NAME = 'character';
    public const DBTYPE = 'bpchar';
}
