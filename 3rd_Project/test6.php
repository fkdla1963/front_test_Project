<?php

$test = array('a' , 'b' , 'c' , 'd' , 'e' , 'f' , 'g'
                ,'h' , 'i' , 'j' , 'k' , 'l' ,
                'm' , 'n' , 'o' , 'p' , 'q' , 'r' ,
                's' , 't' , 'u' , 'v' , 'w' , 'x' , 'y' , 'z');



for($i = 0; $i <= count($test); $i++)
{
    if($i < count($test))
    {
    $test[$i] = $test[$i+3];
    echo $test[$i];
    }elseif($i == 26)
    {
        $test[23] = "a";
    }
    
}

?>