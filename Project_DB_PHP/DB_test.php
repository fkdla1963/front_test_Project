<?php

// $host = 'Localhost';
// $user = 'w1004mesmg';
// $pw = 'sunmoons1s2s3!';
// $dbName = 'w1004mesmg';
$host = 'Localhost';
$user = 'pkh';
$pw = '1234';
$dbName = 'web_test';
$mysqli = mysqli_connect($host, $user, $pw);
mysqli_select_db($mysqli, $dbName);
if($mysqli)
{
    echo "성공함 ㅋㅋ";
}else
{
    echo "실패함 ㅠㅠ";   
}

// mysqli_set_charset($mysqli,"utf8");

$r_num = $_POST['r_num'];
$d_area = $_POST['d_area'];
$a_area = $_POST['a_area'];
$d_time = $_POST['d_time'];
$a_time = $_POST['a_time'];
$f_num = $_POST['f_num'];

mysqli_query($mysqli, "insert into profile(Reservation_number, Departure_area, Arrival_area, Departure_time, Arrival_time, Flight_number)
            value('$r_num', '$d_area', '$a_area', '$d_time', '$a_time', '$f_num')");

mysqli_close($mysqli);


?>