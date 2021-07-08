<?php

        $db_hostname = '127.0.0.1'; // 102.168.126.78 방화벽
        $db_database = 'web_test';
        $db_username = 'pkh';
        $db_password = '1234';

        $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);
            if(!$db_server)
            {
                echo "DB Server connect Error<br>";
            }
            else
            {
                echo "DB Server connect <br>";
            }

            


        $insert = "insert into sign_up (s_id, s_pw, s_re_pw, s_name, s_brithday, s-gender, s_e_mail, s_adress)
                    values('$input_id', '$input_pw', '$input_repw', '$input_name','$input_bday', '$input_gender', '$input_email', '$input_adress')";
        $reult = mysqli_query($db_server, $select);

?>