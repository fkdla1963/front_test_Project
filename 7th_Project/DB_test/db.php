
    <?php
        $connect = mysqli_connect("localhost","pkh","1234","web_test") or die("fail");

        $input_title = $_POST['title'];
        $input_date = date("Y-m-d H:i:s");
        $input_like = $_POST['like'];
    
        $URL = './index.php';

        $query = "insert into ezvoca (B_Number, B_Name, B_Date, B_Like)
                    values(null, '$input_title', '$input_date', '$input_like')";

        $result = $connect->query($query);
        if($result)
        {
 ?>          <script>
                alert("<?php echo "글이 등록되었습니다."?>");
                location.replace("<?php echo $URL?>");
            </script>
<?php
        }
        else
        {
            echo "FAIL";
        }
        mysqli_close($connect);

    ?>
