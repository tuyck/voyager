<?php

namespace Tuyck\Voyager\Database\Types\Postgresql;

use Tuyck\Voyager\Database\Types\Common\VarCharType;

class CharacterVaryingType extends VarCharType
{
    public const NAME = 'character varying';
    public const DBTYPE = 'varchar';
}
