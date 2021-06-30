<html>
    <head>
        <meta charset = "utf-8"/>
        <title></title>
    </head>
    <body>
        <h1>데이터 입력</h1>
        <form method = "POST" action = "test1.php">
        첫 번째 숫자 : <input type = "text" name = "name1" />
        두 번째 숫자 : <input type = "text" name = "name2" />
        세 번째 숫자 : <input type = "text" name = "name3" />
        네 번째 숫자 : <input type = "text" name = "name4" />
        다섯 번째 숫자 : <input type = "text" name = "name5" />
        여섯 번째 숫자 : <input type = "text" name = "name6" />
        <input type = "submit" name = "submit" />


        <?php
    $lotto = array{1,3,5,7,9,11};
    $input_lotto = array($_POST['name1'],$_POST['name2'],
                            $_POST['name3'],$_POST['name4'],
                                $_POST['name5'],$_POST['name6']);

    $count = 0;

    for($max_count = 0; $max_count <= 5; $max_count++)
    {
        $input_lotto[$max_count] == $lotto[$max_count] ? $count++ : $count;
    }


?>


    </body>

</html>





