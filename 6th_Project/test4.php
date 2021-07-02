<?php

$p1 = array(3,2,9,4,5,);
sort($p1);

$p2 = array(1,5,12,23,34,45,56,2,3,4,255,342,10,22);
rsort($p2);

$p3 = array(1,5,12,23,34,45,56,2,3,4,255,342,10,22);
shuffle($p3);

echo "ㅋㅋ 34가 나오면 1억드림 ㅋㅋ \t", $p3[0];

for($i = 0; $i < count($p1); $i++)
{
    echo "<br>", $p1[$i],"<br>";
}

echo "<br><br><br><br>";
echo "---------------------";
echo "<br><br><br><br>";

for($i = 0; $i < count($p1); $i++)
{
    echo $p2[$i],"<br>";
}

echo "<br><br><br><br>";
echo "---------------------";
echo "<br><br><br><br>";

for($i = 0; $i < count($p1); $i++)
{
    echo $p3[$i],"<br>";
    
}


?>