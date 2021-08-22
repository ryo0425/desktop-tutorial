<?php
    $x = 8.4;
    echo ceil($x);

    $x = 8.4;
    echo floor($x);

    echo pi();
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    circleArea(4);

    echo mt_rand(1, 200);

    $str = "baseball";
    echo strlen($str);

    $str = "kaneko";
    echo strpos($str, "n");

    $str = "kaneko";
    echo substr($str, -3, 3);

    $str = "kaneko";
    echo str_replace("ne", "NE", $str);

    $str = "I am Kaneko";
    echo str_replace(" ", "", $str);

    $name = "金子さん";
    $limit_number = 20;

    echo $name."の残り時間はあと".$limit_number."です";
    printf("%sの残り時間はあと%dです", $name, $limit_number);

    $name = "金子さん"; $limit_time = 20; $price = 2000; printf("%sはあと%d時間で%dの罰金です。", $name, $limit_time, $price);


    $limit_hour = 100;
    $limit_minute = 200;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    
    $limit_hour = 8;
    $limit_minute = 8;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

    $limit_hour = 8;
    $limit_minute = 8;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    
    $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo $limit_time;



?>