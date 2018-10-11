<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:52 PM
 */
namespace Elminson\CodeWars;

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class testCodeWars extends TestCase
{

    /**
     *
     */
    function testFirstTestCase()
    {
        $codewars = new CodeWars();
        $this->assertEquals("index", $codewars->index());
        $this->assertEquals(9, $codewars->squareSum([1,2,2]));
    }
}
