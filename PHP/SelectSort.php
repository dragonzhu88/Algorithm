<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/7/3
 * Time: 13:04
 */

$arr = array(3, 5, 8, 4, 9, 6, 1, 7, 2);
echo 'init = ' . implode(' ', $arr);

function SelectSort($arr)
{
    if (count($arr) <= 1) {
        return $arr;
    }

    for ($i = 0; $i < count($arr); $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
        echo "\n";
        echo 'temp = ' . implode(' ', $arr);
    }

    return $arr;
}

echo "\n";
echo 'result = ' . implode(' ', SelectSort($arr));