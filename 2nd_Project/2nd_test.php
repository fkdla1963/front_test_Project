<?php

$test = rand(0 , 100);

echo $test , "<br>";


if(($test <= 70 && $test > 50) || ($test%6 == 0))
{
    echo "슬기 승리";
}
else
{
    echo "선생 승리";
}

?>