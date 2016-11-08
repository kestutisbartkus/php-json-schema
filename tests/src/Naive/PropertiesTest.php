<?php

namespace Yaoi\Schema\Tests\Naive;


use Yaoi\Schema\OldSchema;

class PropertiesTest extends \PHPUnit_Framework_TestCase
{
    public function testValid()
    {
        $schema = new OldSchema(array(
            'properties' => array(
                'one' => array('type' => 'string'),
                'two' => array(),
            )
        ));

        $data = array(
            'one' => 'aaa',
            'two' => 123,
        );
        $entity = $schema->import($data);
        $this->assertSame('aaa', $entity->one);
        $this->assertSame(123, $entity->two);
    }



}