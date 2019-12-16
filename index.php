<?php

function countInNaturalNum($naturalNum)
{
    $count = 0;
    while ($naturalNum>0) {
        if ($naturalNum%10<5) {
            $count++;
        }
        $naturalNum = intval($naturalNum/10);
    }
    return $count;
}

echo countInNaturalNum(2725);