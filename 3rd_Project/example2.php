<?php

ini_set('display_errors' , 0);
$num = $_GET["num"];
$count = $_GET["count"] + $num;
echo <<<_END
<html>
    <head>
        <meta charset = "utf-8" />
        <title>가챠 ㅋㅋ</title>
    </head>

    <body>
    
     <h2> 단일 뽀는 쥬렌 가챠 에라베 </h2>
     <button onclick = "window.location.href = 'example2.php?num=1&&count=$count'">단일</button>
     <button onclick = "window.location.href = 'example2.php?num=10&&count=$count'">10연</button>
     <button onclick = "window.location.href = 'example2.php?num=100&&count=$count'">100연</button>
    </body>
</html>
_END;

echo "<br>시도횟수 : " , $count;
if($num == 1)
{
    $select_num = rand(0 , 1000)/10000;
    select_char($select_num);
}
else
{
    for($i = 0; $i < $num; $i++)
    {
        $select_num = rand(0 , 1000000)/10000;
        select_char($select_num);
    }
}

function select_char($select_num)
{
    if($select_num >= 0 && $select_num <= 0.01)
    {
        echo "<br>초특급 레어 ㅋㅋ ";
    }
    else
    {
        echo "<br>꽝 ㅋㅋ ";
    }
}

?>