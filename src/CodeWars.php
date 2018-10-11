<?php
/**
 * Created by PHPProjectGen.
 * User: edeoleo@gmail.com
 * Date: 10/11/2018
 * Time: 12:29 AM
 */

namespace Elminson\CodeWars;

/**
 *
 *
 */
class CodeWars
{
    /**
     * PHPProjectGen constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        return "index";
    }

    public function squareSum($array)
    {
        return array_sum(array_map(array($this, 'square'), $array));
    }

    static private function square($n)
    {
        return pow($n, 2);
    }

}
