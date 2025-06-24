<?php

namespace Tuyck\Voyager\Database\Types\Postgresql;

use Tuyck\Voyager\Database\Types\Common\DoubleType;

class DoublePrecisionType extends DoubleType
{
    public const NAME = 'double precision';
    public const DBTYPE = 'float8';
}
