<?php

namespace Tuyck\Voyager\Database\Types\Mysql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Tuyck\Voyager\Database\Types\Type;

class LongTextType extends Type
{
    public const NAME = 'longtext';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'longtext';
    }
}
