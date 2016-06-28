<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 28/06/16
 * Time: 22:30
 */

namespace Hobby203\Meow;

class TestGetName extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function givenFoo_whenGettingName_thenGetMeow() {
        $meow = new GetName();
        $this->assertEquals("Meow!", $meow->getName());
    }

}
