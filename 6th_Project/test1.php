<?php

$test[] = "1st_test";
$test[] = "2nd_test";
$test[] = "3rd_test";
$test[] = "4th_test";
$test[] = "5th_test";

echo "<pre>";
print_r($test);
echo "<pre/>";

echo "<pre>";
var_dump($test);
echo "<pre/>";

echo "<br><br><br><br>";
echo "----------------";
echo "<br><br><br><br>";

for($i = 0; $i <= 4; $i++)
{
    echo "$i : $test[$i]<br />";
}




echo "<br><br><br><br>";
echo "----------------";
echo "<br><br><br><br>";

$test_2[0] = "1st_test_wow";
$test_2[1] = "2nd_test_wow";
$test_2[2] = "3rd_test_wow";
$test_2[3] = "4th_test_wow";
$test_2[4] = "5th_test_wow";

echo "<pre>";
print_r($test_2);
echo "<pre/>";

echo "<pre>";
var_dump($test_2);
echo "<pre/>";

echo "<br><br><br><br>";
echo "----------------";
echo "<br><br><br><br>";

for($j = 0; $j <= 4; $j++)
{
    echo "$j : $test[$j]<br />";
}

echo "<br><br><br><br>";
echo "----------------";
echo "<br><br><br><br>";

$test_3['Magic'] = "fire & ice";
$test_3['Knight'] = "sword & Arrow";
$test_3['zz'] = "ww & lol";


echo "<br><br><br><br>";
echo "----------------";
echo "<br><br><br><br>";


$p1 = array("Copier" , "Inkjet" , "Laser" , "Photo");

echo "p1 element : " , $p1[2] , "<br>";


echo "<br><br><br><br>";
echo "----------------";
echo "<br><br><br><br>";


$p2 = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");

echo "p2 element : " , $p2['inkjet'] , "<br>";

echo "<br><br><br><br>";
echo "----------------";
echo "<br><br><br><br>";

$j = 0;

foreach($p2 as $item)
{
    echo "$j : $item<br>";
    ++$j;
}

foreach($p2 as $item)
{
    echo "$item<br>";
}


echo "<br><br><br><br>";
echo "----------------";
echo "<br><br><br><br>";


foreach($p2 as $item => $description)
{
    echo "$item : $description<br>";
}

?>