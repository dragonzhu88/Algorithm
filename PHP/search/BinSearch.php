<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/7/3
 * Time: 15:22
 */

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
echo 'init = ' . implode(' ', $arr);

function BinarySearch($arr, $low, $high, $key)
{
    while ($low <= $high) {
        $mid = intval(($low + $high) / 2);
        echo "\n";
        echo $mid;
        if ($key == $arr[$mid]) {
            return $mid + 1;
        } elseif ($key < $arr[$mid]) {
            $high = $mid - 1;
        } elseif ($key > $arr[$mid]) {
            $low = $mid + 1;
        }
    }
    return -1;
}

echo BinarySearch($arr, 0, 8, 6);
