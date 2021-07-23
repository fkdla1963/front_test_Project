`<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>되거라~</title>
    <head>

    

    </head>

    <body>

        <script>

            function test11()
            {
                return 1;
            }

            function rand(min, max)
            {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min)) + min;
            }

            function test_1()
            {
            var aaa = rand(100000 , 999999);
                // const element = document.getElementById('ref');
                // element.innerText = aaa;
                return aaa;
            }
        </script>

        <?php

            $r_num = $_POST['f1'];
            $d_area = $_POST['f2'];
            $a_area = $_POST['f3'];
            $d_time = $_POST['f4'];
            $a_time = $_POST['f5'];
            $random_num = rand(10, 30);


        function db_test()
        {
           
            echo "$r_num , $d_area , $a_area , $d_time , $a_time , $random_num";
            global $r_num;
            global $d_area;
            global $a_area;
            global $d_time;
            global $a_time;
            global $random_num;
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
            
            mysqli_query($mysqli, "insert into profile(Reservation_number, Departure_area, Arrival_area, Departure_time, Arrival_time, Flight_number)
                        value('$random_num', '$r_num', '$d_area', '$a_area', '$d_time', '$a_time')");

            mysqli_close($mysqli);
        }
        ?>

        <button id="btn_1" value="ff" onclick='db_test()'>예메번호 발급</button>
    </body>
</html>