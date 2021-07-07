<?php
        $connect = mysqli_connect("localhost","pkh","1234","web_test") or die("fail");

        $input_id = $_POST['input_id'];
        $input_pw = $_POST['input_pw'];
        $input_repw = $_POST['input_repw'];
        $input_name = $_POST['input_name'];
        $input_bday = $_POST['input_bday'];
        $input_gender = $_POST['input_gender'];
        $input_email = $_POST['input_email'];
        $input_adress = $_POST['input_adress'];      

        // $query = "insert into sign_up (s_id, s_pw, s_re_pw, s_name, s_brithday, s-gender, s_e_mail, s_adress)
        //             values('$input_id', '$input_pw', '$input_repw', '$input_name', 
        //                     '$input_bday', '$input_gender', '$input_email', '$input_adress')";
        if($input_pw != $input_repw)
        {
            echo "<script> alert(\"비번안맞음 ㅋㅋ\");</script>";
        }
        else
        {
            $query = "insert into sign_up
                        values('$input_id', '$input_pw', '$input_name', 
                                '$input_bday', '$input_gender', '$input_email', '$input_adress')";

            $result = $connect->query($query);
            if($result)
            {   
                echo "<script> alert(\"가입되셔어ㅗㅆ읍니다ㅋㅋ\");</script>";
            }
            else
            {
                echo "FAIL111";
            }
        }
        mysqli_close($connect);

?>

    