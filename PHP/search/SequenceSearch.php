<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/7/3
 * Time: 15:03
 */


//冒泡排序
$arr = array(3, 5, 8, 4, 9, 6, 1, 7, 2);
echo 'init = ' . implode(' ', $arr);

function SequenceSearch($arr, $searchData)
{
    $length = count($arr);
    for ($i = 0; $i < $length; $i++) {
        if($arr[$i] == $searchData){
            return $i;
        }
    }

    return -1;
}

$searchData = 9;

echo "\n";
echo 'result position = ' . SequenceSearch($arr,$searchData);