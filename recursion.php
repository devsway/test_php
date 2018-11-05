<?php
/**
 * 再帰関数のテスト
 *
 * @param null $num
 * @param array $array
 * @return array
 */
function myRecursiveFunction($num = null, $array = [])
{
    if ($num > 100) {
        return $array;
    }

    if (!isset($num)) {
        $num = 10;
        $array = [];
    } else {
        $array[$num] = "test";
        $num += 10;
    }

    return myRecursiveFunction($num, $array);

}

$data = myRecursiveFunction();

echo '<hr>' . basename(__FILE__) . ' :: ' . __LINE__;
echo '<pre>';
var_dump($data);
echo '</pre>';
exit;