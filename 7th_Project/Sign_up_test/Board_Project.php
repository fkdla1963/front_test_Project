<html>
    <head>
        <meta charset = "utf-8">
            <title>ㅋㅋ</title>
                <style>
                    .header
                    {
                        width : 80%;
                        height : 60px;
                        background-color: lightpink;
                        display: inline-block;
                        
                    }
                    .container
                    {
                        max-width : 768px;
                        min-width : 460px;
                        margin : 0 auto;
                        border : 1px solid red;
                        text-align: center;
                    }
                    .content
                    {
                        width: 460px;
                        margin: 0 auto;
                    }
                    h2
                    {
                        text-align: left;
                    }
                    .box_s
                    {
                        background:lightpink;
                    }
                    .int
                    {
                        width: 100%;
                        height: 56px;
                    }
                    .row_group
                    {
                        width: 100%;
                    }
                </style>
    </head>
    <body>
        <form method="post" action="B_php_test.php">
            <div class = "container">
                <div class = "content">                
                    <div >
                        <h2>아이디</h2>
                        <span class="box-s">
                            <input type="text" name="input_id" id="input_id" class="int"/>
                        </span>
                    </div>
                    <div>
                        <div >
                            <h2>비밀번호</h2>
                            <span class="box-s">
                                <input type="password" name="input_pw" id="input_pw" class="int"/>
                            </span>
                        </div>
                        <div >
                            <h2>비밀번호확인</h2>
                            <span class="box-s">
                                <input type="password" name="input_repw" id="input_repw" class="int"/>
                            </span>
                        </div>
                    </div>
                    <div>
                        <div >
                            <h2>이름</h2>
                            <span class="box-s">
                                <input type="text" name="input_name" id="input_name" class="int"/>
                            </span>
                        </div>
                        <div >
                            <h2>생년월일</h2>
                            <span class="box-s">
                                <input type="text" name="input_bday" id="input_bday" class="int"/>
                            </span>
                        </div>                
                        <div >
                            <h2>성별</h2>
                            <span class="box-s">
                                <input type="text" name="input_gender" id="input_gender" class="int"/>
                            </span>
                        </div>                    
                        <div >
                            <h2>이메일</h2>
                            <span class="box-s">
                                <input type="text" name="input_email" id="input_email" class="int"/>
                            </span>
                        </div>
                        <div >
                            <h2>주소</h2>
                            <span class="box-s">
                                <input type="text" name="input_adress" id="input_adress" class="int"/>
                            </span>
                            <input type="submit" name="submit" value="제출"/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>