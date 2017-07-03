<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/7/3
 * Time: 10:46
 */

$arr = array(3, 5, 8, 4, 9, 6, 1, 7, 2);
echo 'init = ' . implode(' ', $arr);

function QuickSort($array)
{
    if (count($array) <= 1) return $array;

    $key = $array[0];
    $left_arr = array();
    $right_arr = array();

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] <= $key)
            $left_arr[] = $array[$i];
        else
            $right_arr[] = $array[$i];
    }

    $left_arr = QuickSort($left_arr);
    $right_arr = QuickSort($right_arr);

    return array_merge($left_arr, array($key), $right_arr);
}

echo "\n";
echo 'result = ' . implode(' ', QuickSort($arr));