<?php
$members = ["yamada", "sakamoto", "yanagida", "yoshida", "suzuki","murakami"];
echo count($members);

$members = ["yamada", "sakamoto", "yanagida", "yoshida", "suzuki","murakami"];
sort($members);
var_dump($members);

$numbers = [10, 20, 30, 40, 50];
sort($numbers);
var_dump($numbers);

$members = ["yamada", "sakamoto", "yanagida", "yoshida", "suzuki","murakami"];
var_dump(in_array("sakamoto", $members));

$members = ["yamada", "sakamoto", "yanagida", "yoshida", "suzuki","murakami"];
if (in_array("yamada", $members)) {
    echo "山田さんです";
} else {
    echo "山田さんではないです";
}

$members = ["yamada", "sakamoto", "yanagida", "yoshida", "suzuki","murakami"];
$atstr = implode("@", $members);
var_dump($atstr);

$members = ["yamada", "sakamoto", "yanagida", "yoshida", "suzuki","murakami"];
$atstr = implode("@", $members);
var_dump($atstr);

$re_members = explode("@", $atstr);
var_dump($re_members);

$str = "1,3,5,7,9";
$array = explode(",",$str);
var_dump($array);