<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/7/3
 * Time: 10:18
 */

//冒泡排序
$arr = array(3, 5, 8, 4, 9, 6, 1, 7, 2);
echo 'init = ' . implode(' ', $arr);

function BubbleSort($arr)
{
    $length = count($arr);
    if ($length <= 1) {
        return $arr;
    }
    for ($i = 0; $i < $length; $i++) {
        for ($j = $length - 1; $j > $i; $j--) {
            if ($arr[$j] < $arr[$j - 1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $tmp;
            }
        }
        echo "\n";
        echo 'temp = ' . implode(' ', $arr);
    }
    return $arr;
}

echo "\n";
echo 'result = ' . implode(' ', BubbleSort($arr));
