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
    echo "성공함 ㅋㅋ <br>";
}else
{
    echo "실패함 ㅠㅠ";   
}

mysqli_set_charset($mysqli,"utf8");

// $r_num = $_POST['r_num'];
// $d_area = $_POST['d_area'];
// $a_area = $_POST['a_area'];
// $d_time = $_POST['d_time'];
// $a_time = $_POST['a_time'];
// $f_num = $_POST['f_num'];

$result = mysqli_query($mysqli, "select *from Profile");

while($row = mysqli_fetch_array($result))
{
    echo "티켓번호: " . $row["Reservation_number"]. " 출발지역:" . $row["Departure_area"]. " 도착지역:" . $row["Arrival_area"]. "<br>";
   
}


mysqli_close($mysqli);


?>