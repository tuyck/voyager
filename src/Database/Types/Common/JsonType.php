<?php

namespace Tuyck\Voyager\Database\Types\Common;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Tuyck\Voyager\Database\Types\Type;

class JsonType extends Type
{
    public const NAME = 'json';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'json';
    }
}
