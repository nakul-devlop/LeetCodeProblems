<?php
class Solution
{

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        if ($x < 0 || ($x % 10 === 0 && $x !== 0)) {
            return false;
        }

        $reversedHalf = 0;
        while ($x > $reversedHalf) {
            $reversedHalf = $reversedHalf * 10 + $x % 10;
            $x = (int)($x / 10);
        }

        return $x === $reversedHalf || $x === (int)($reversedHalf / 10);
    }
}
