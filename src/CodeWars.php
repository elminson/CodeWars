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

    private function square($n)
    {
        return pow($n, 2);
    }

    public function persistence(int $num, int $count = 0)
    {
        $sum = array_product(array_map('intval', str_split($num)));
        if ($num < 10 && $sum == $num) return 0;
        if ($sum < 10) return $count + 1;
        $count++;
        return $this->persistence($sum, $count);
    }
}
