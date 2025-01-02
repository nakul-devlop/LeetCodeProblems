<?php
class Solution
{

    /**
     * @param String[] $words
     * @param Integer[][] $queries
     * @return Integer[]
     */
    function vowelStrings($words, $queries)
    {
        $vowels = ["a", "e", "i", "o", "u"];
        $n = count($words);
        $prefix = array_fill(0, $n + 1, 0); 

        for ($i = 0; $i < $n; $i++) {
            if (in_array($words[$i][0], $vowels) && in_array($words[$i][strlen($words[$i]) - 1], $vowels)) {
                $prefix[$i + 1] = $prefix[$i] + 1;
            } else {
                $prefix[$i + 1] = $prefix[$i];
            }
        }

        $result = [];

        foreach ($queries as $query) {
            $li = $query[0];
            $ri = $query[1];

            $result[] = $prefix[$ri + 1] - $prefix[$li];
        }

        return $result;
    }
}
