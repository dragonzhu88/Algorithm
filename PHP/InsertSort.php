<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/7/3
 * Time: 14:06
 */

$arr = array(3, 5, 8, 4, 9, 6, 1, 7, 2);
echo 'init = ' . implode(' ', $arr);

function InsertSort($arr)
{
    $length = count($arr);
    if ($length <= 1) {
        return $arr;
    }
    for ($i = 1; $i < $length; $i++) {

        $x = $arr[$i];
        $j = $i - 1;

        while ($x < $arr[$j] && $j >= 0) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $x;
    }
    return $arr;
}

echo "\n";
echo 'result = ' . implode(' ', InsertSort($arr));