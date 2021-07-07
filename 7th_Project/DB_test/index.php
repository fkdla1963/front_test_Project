<html>
    <head>
        <meta charset="utf-8"/>
        <title>
        </title>
        <style>
            /* table
            {
                border-spacing: 10px;
                border-collapse: separate;
            }
            .border
            {
                border: 2px solid red;
            }
            .border1
            {
                border: 2px solid lightpink;
            } */
            .container
            {
                max-width: 786px;
                min-width: 460px;
                margin: 0 auto;
            }
            .content
            {
                width: 700px;
                margin: 0 auto;
            }
          


            table.type05 {
            border-collapse: separate;
            border-spacing: 1px;
            text-align: left;
            line-height: 1.5;
            border-top: 1px solid #ccc;
            margin: 20px 10px;
            }
            table.type05 th {
            width: 150px;
            padding: 10px;
            font-weight: bold;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
            background: #efefef;
            }
            table.type05 td {
            width: 350px;
            padding: 10px;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
            }
        .text{
                text-align:center;
                padding-top:20px;
                color:#000000
            }
        </style>
    </head>
    <body>
        <div class="container border">
            <div class="content">
                <table class="type05">
                    <thead>
                        <tr>
                            <th width = "100"  class="border1">게시물 번호</th>
                            <th width = "100" class="border1">게시물 이름</th>
                            <th width = "100" class="border1">게시물 등록시간</th>
                            <th width = "100" class="border1">게시물 추천개수</th>
                        </tr>
                    </thead>
                    <tbody>
        <?php
        // $title = $_POST['title'];
        // $contents = $_POST['contents'];
        // $like = $_POST['like'];
        // $date = date("Y-m-d");
        // login.php or db.php
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

        $select = "SELECT * FROM ezvoca";
        $reult = mysqli_query($db_server, $select);
        while($board = $reult->fetch_array())
        {
            $b_number = $board['B_Number'];
            $b_name = $board['B_Name'];
            $b_date = $board['B_Date'];
            $b_like = $board['B_Like'];
            
            echo <<<END
            <tbody>
                <tr>
                    <td width = "100">$b_number</td>
                    <td width = "100">$b_name</td>
                    <td width = "100">$b_date</td>
                    <td width = "100">$b_like</td>
                </tr>
            </tbody>
            
             
        END;
        }

    ?>
            </tbody>
    </table>
        </div>
    </div>
    <div class = text>

        <font style="cursor: hand"onClick="location.href='./index2.php'">글쓰기</font>
    </div>

            
          
    </body>
</html>