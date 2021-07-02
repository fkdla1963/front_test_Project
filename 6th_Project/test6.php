<h1>포커시작</h1>
<form  method="post">

    <input type = "submit" name = "btn_test" value = "click">
    
</form>




<?php

function test()
{
    global $a;
    for($j = 0; $j <= 2; $j++)
    {
        echo $a[$j];
    }
}

$a = array();

for($i = 1; $i <= 52; $i++)
{
    array_push($a , "<img src = 'img/a6f63deb277625ac80972aa0c05dcfaf ($i).png'/>");
}

shuffle($a);



if(array_key_exists('btn_test',$_POST))
{
    test();
}

?>
<form  method="post">

<input type = "submit" name = "btn_test2" value = "click2">
<input type = "submit" name = "btn_test3" value = "click3">
</form>