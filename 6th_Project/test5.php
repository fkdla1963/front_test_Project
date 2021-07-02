<?php

$a = "<img src = '111.jpg'/>";
$b = "<img src = '222.jpg'/>";
$c = "<img src = '444.png'/>";
$d = "<img src = '555.png'/>";

$item_img = array($a , $b , $c , $d);

$user_profile_1 = $item_img[rand(0, count($item_img)-1)];
$user_profile_2 = $item_img[rand(0, count($item_img)-1)];
$user_profile_3 = $item_img[rand(0, count($item_img)-1)];
$user_profile_4 = $item_img[rand(0, count($item_img)-1)];

$profile = compact('user_profile_1', 'user_profile_2', 'user_profile_3', 'user_profile_4');
shuffle($profile);

for($i = 0; $i < 4; $i++)
{
    echo "니 프로필 ㅋㅋ 순서 " , $i + 1 , "<br>" , "사진 ㅋㅋ" , $profile[$i];
}
?>



