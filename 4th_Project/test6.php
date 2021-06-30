<?php

    ini_set('date.timezone','Asia/Seoul');
    echo "현재 시간은" ,date("Y년, m월, d일, H시, i분, s초", time());


    echo "<br /><br /><br /><br />";

    $start_Time = mktime(22, 00, 00, 07, 07, 2020);
    $end_Time = mktime(22, 10, 00, 07, 07, 2020);

    if($start_Time <= time() && $end_Time > time())
    {
        echo "메이플 캐쉬 무료이벤트 시작 ㅋㅋ";
    }
    else
    {
        echo "메이플 캐쉬 무료이벤트 종료";
    }
    echo "<br /><br /><br /><br />";

    $int_test1 = time();
    echo $int_test1 , "<br />";
    echo date("년 : y ") , "<br>";
    echo date("월 : m ") , "<br>";
    echo date("일 : d ") , "<br>";
    echo date("시 : H ") , "<br>";
    echo date("분 : i ") , "<br>";
    echo date("초 : s ") , "<br>";

?>