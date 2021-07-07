<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title></title>
    
    <style>
        .container
        {
            max-width: 786px;
            min-width: 460px;
            margin: 0 auto;
        }
        .content
        {
            width: 460px;
            margin: 0 auto;
        }
        .border
        {
            border: 1px solid lightpink;
            text-align: center;
            
        }
        .box_s
        {
            display: block;
            position: relative;
            width: 100%;
            height: 51px;
            border: solid 1px #dadada;
            padding: 10px 10px 10px 10px;
            background: #fff;
            box-sizing: border-box;
            
        }
        .box_s_big
        {
            display: block;
            position: relative;
            width: 100%;
            height: 500px;
            border: solid 1px #dadada;
            padding: 10px 10px 10px 10px;
            background: #fff;
            box-sizing: border-box;
            
        }
        .int {
            display: block;
            position: relative;
            width: 100%;
            height: 29px;
            padding-right: 25px;
            line-height: 29px;
            border: none;
            background: gray;
            font-size: 15px;
            box-sizing: border-box;
            z-index: 10;
        }
        .int_big {
            display: block;
            position: relative;
            width: 100%;
            height: 450px;
            padding-right: 25px;
            line-height: 29px;
            border: none;
            background: lightpink;
            font-size: 15px;
            box-sizing: border-box;
            z-index: 10;
        }
    </style>
    
    
    </head>
    <body>
    <form id="join_form" method="post" action="db.php">
        <div class="container">
            <div class="content">
                <div class="border">
                    
                    <span class="box_s">
                        <input type="text" id="title" name="title" class="int"/>
                    </span>
                </div>
                
                <div class="border">
                    
                    <span class="box_s">
                        <input type="text" id="like" name="like" class="int"/>
                    </span>
                    <input type="submit" name="submit" id="submit" value="ㅋㅋㅋ"/>
                </div>


            </div>
            

        </div>
        

    </form>


    </body>
</html>