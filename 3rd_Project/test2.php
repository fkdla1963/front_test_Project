<?php

//구구단 예제

$int_num1 = 1;
$int_num2 = 1;


while($int_num1 < 5)
{
    
    if($int_num2 == 1)
    {
        echo $int_num1 , "단<br>";
    }

    echo $int_num1 , "x" , $int_num2 , "=" ,$int_num1 * $int_num2 , "<br>";
    $int_num2++;

    if($int_num2 == 10)
    {    
        $int_num2 = 1;
        $int_num1++;
        echo "<br>";
    }
   
}


?>