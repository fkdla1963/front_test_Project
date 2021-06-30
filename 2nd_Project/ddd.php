<html>
    <head>
        <meta charset = "utf-8" />
        <title></title>
    <head>
    <body>
        <h2> 데이터 입력 </h2>
        <form method = "POST" action = "ddd.php">
            숫자1 : <input type="text" name="name1"/><br/>
            숫자2 : <input type="text" name="name2"/><br/>
            숫자3 : <input type="text" name="name3"/><br/>
            숫자4 : <input type="text" name="name4"/><br/>
            숫자5 : <input type="text" name="name5"/><br/>
            숫자6 : <input type="text" name="name6"/><br/>
            <input type= "submit" name = "submit"/>
        </form>
        
    <?php
    
    $lotto = array(1,3,5,7,9,11);

    $lotto2 = rand(0 , 6);

    $input_name1 = $_POST['name1'];
    $input_name2 = $_POST['name2'];
    $input_name3 = $_POST['name3'];
    $input_name4 = $_POST['name4'];
    $input_name5 = $_POST['name5'];
    $input_name6 = $_POST['name6'];

    $count = 0;


    if($input_name1 == $lotto[0])
    {
        $count++;
    }
    if($input_name2 == $lotto[1])
    {
        $count++;
    }
    if($input_name3 == $lotto[2])
    {
        $count++;
    }
    if($input_name4 == $lotto[3])
    {
        $count++;
    }
    if($input_name5 == $lotto[4])
    {
        $count++;
    }
    if($input_name6 == $lotto[5])
    {
        $count++;
    }
    
    switch($count)
    {
        case 6 : 
            echo "전부 맞춤 ㅋㅋ 1등";
            break;
        case 5 : 
            echo "5개 맞춤 ㅋㅋ 2등";
            break;
        case 4 : 
            echo "4개 맞춤 ㅋㅋ 3등";
            break;
        case 3 : 
            echo "3개 맞춤 ㅋㅋ 4등";
            break;
        case 2 : 
            echo "2개 맞춤 ㅋㅋ 5등";
            break;
        case 1 : 
            echo "1개 맞춤 ㅋㅋ 6등";
            break;
        case 0 : 
            echo "하나도 못맞춤ㅋㅋ";
            break;
    }

    ?>
    </body>

</html>