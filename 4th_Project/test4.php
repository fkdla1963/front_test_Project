<?php

    $food = array( 'fruits' => array('orange', 'banana', 'apple'),
                    'veggie' => array('carrot', 'collard', 'pea'));

// 재귀 count 수
echo count($food,COUNT_RECURSIVE);
// 결과 8                
echo "<br /><br />";
// 보통 count 수
echo count($food);
// 결과 2
echo "<br /><br />";
echo strlen($food['fruits'][0]);

for($i = 0; $i < 3; $i++)
{
    echo $food['fruits'][$i];
    echo " : <br>", strlen($food['fruits'][$i]);
}

echo "<br /><br /><br />";

var_dump($food);
echo "<pre><br>";
$str_test = var_export($food , true);
printf("<br>" , $str_test);
printf($str_test);

printf("<br>\r\n");
echo print_r($food);
printf("/<pre><br>\r\n");


?>