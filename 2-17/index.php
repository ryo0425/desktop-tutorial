<?php

$ct = 0;
$sum = 0;
do {
$ct++;
$num = rand(1, 6);
printf("%d回目 = %d<br>", $ct, $num);
$sum += $num;
} while ($sum < 40);
printf("合計%d回でゴールしました。<br>", $ct);



date_default_timezone_set('Asia/Tokyo');
$time = date('H');

if (6 <= $time && $time <= 12 ){
    echo "今{$time}時台です<br/>おはようございます";
} else if (13 <= $time && $time <= 18){
    echo "今{$time}時台です<br/>こんにちは";
} else if (19 <= $time && $time <= 24){
    echo "今{$time}時台です<br/>こんばんは";
}


?>