<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = 0; $j < count($nums); $j++) {
                $value = $nums[$i] + $nums[$j];

                if ($value === $target && $i !== $j) {
                    return [$i, $j];
                }
            }
        }
    }
}
