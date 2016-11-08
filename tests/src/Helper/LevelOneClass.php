<?php

namespace Yaoi\Schema\Tests\Helper;

use Yaoi\Schema\ObjectFlavour\Properties;
use Yaoi\Schema\OldSchema;
use Yaoi\Schema\Structure\ClassStructure;

class LevelOneClass extends ClassStructure
{
    /**
     * @var LevelTwoClass
     */
    public $level1;

    /**
     * @param Properties|static $properties
     * @param OldSchema $ownerSchema
     */
    public static function setUpProperties($properties, OldSchema $ownerSchema)
    {
        $properties->level1 = LevelTwoClass::makeSchema();
    }


}