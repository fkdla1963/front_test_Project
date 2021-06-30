<?php

    echo "<br /><br />";
    $str = "Hellow World";
    $change_world = str_replace("World" , "PHP World" , $str);
    echo $change_world;

    echo "<br /><br />";

$fileName = "backgraund.jpg";
$execute = substr($fileName, -4 , 4);
if($execute == ".jpg" || $execute == ".pnh")
{
    echo "업로드한 파일은 이미지 파일입니다.<br />";
}
else
{
    echo "업로드한 파일은 이미지 파일입니다.<br />";
}

echo "<br /><br /><br /><br />";

$email = "j1004me@naver.com";
$email_Array = explode("@", $email);
echo "<pre>"; // 시스템에 미리 지정된 공정폭 글꼴을 사용하여 표현
var_dump($email_Array);

echo "이메일 호스트 출력<br />";
echo $email_Array[1];


?>