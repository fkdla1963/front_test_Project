<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    
    
    </head>
    <body>
    <h2>데이터 입력</h2>
    <form method = "POST" action = "3nd_test.php">
    홍보를 하지 않았을 때 수입 : <input type = "text" name = "name1" /><br/>
    홍보를 했을 때 수입 : <input type = "text" name = "name2" /><br/>
    홍보 비용 : <input type = "text" name = "name3" /><br/>
    <input type = "submit" name = "submit"/>
    
    </form>

    <?php
    $input_name1 = $_POST['name1'];
    $input_name2 = $_POST['name2'];
    $input_name3 = $_POST['name3'];
    $Money_ad = $input_name2 - $input_name3;

    if($input_name1 < $input_name2 && ($Money_ad) > $input_name3 )
    {
        echo"홍보안할시 수입",$input_name1 , "<br>";
        echo"홍보할시 수입",$input_name2 , "<br>";
        echo"홍보비용",$input_name3 , "<br>";
        echo"홍보 차익" , $Money_ad , "<br>";
        echo "홍보하자";
    }
    elseif($input_name1 > $input_name2 || ($Money_ad) < $input_name3 )
    {
        echo"홍보안할시 수입",$input_name1 , "<br>";
        echo"홍보할시 수입",$input_name2 , "<br>";
        echo"홍보비용",$input_name3 , "<br>";
        echo"홍보 차익" , $Money_ad , "<br>";
        echo "홍보하지마";
    }
    else
    {
        echo "맘대로해";
    }


    ?>

    </body>



</html>
