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
        $this->assertEquals(9, $codewars->squareSum([1, 2, 2]));
    }

    public function testDescriptionExamples()
    {
        $codewars = new CodeWars();
        $this->assertEquals(0, $codewars->persistence(4));
        $this->assertEquals(3, $codewars->persistence(39));
        $this->assertEquals(4, $codewars->persistence(999));
    }

    public function testBasicsDuplicateEncode()
    {
        $codewars = new CodeWars();
        $this->assertEquals('(((', $codewars->duplicateEncode('din'));
        $this->assertEquals('()()()', $codewars->duplicateEncode('recede'));
        $this->assertEquals(')())())', $codewars->duplicateEncode('Success'), 'should ignore case');
        $this->assertEquals('))))))', $codewars->duplicateEncode('iiiiii'), 'duplicate-only-string');
        $this->assertEquals(')))))(', $codewars->duplicateEncode('a(a(a)'));
    }
}
