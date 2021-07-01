<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>web cam connection test</title>

        <video id="video" width="0%" height="0%" autoplay></video>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <style>
            .video_a
            {
                position: absolute;
                top : 0px;
                left : 0px;
                z-index : 2;
                
            }
            .vivi
            {
                border : 3px  solid  red;
                padding : 20px;
                margin : 12px;
            }
            .img_test
            {
               
                max-width : 10%;
                height : auto;
            }
        </style>
        
        
        <script>

            
            if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
                    var video = document.getElementById('video');
                    video.srcObject = stream;
                    video.play();
                });
            }
          
           
 
  </script>
        

    </head>
    <body>
        
        <div class = "vivi" style = "text-align:center;" id = "div_1">
       <video id = "video_aa" width = "80%" height = "80%"
            controls = "true" autoplay></video>
        </div>
        <div>
    <p>안녕하세요. 데브쿠마입니다.</p>
  </div>
  <button>요소의 위치 정보</button>



        <?php
        
       

        $x_pos = rand(100 , 1024);
        $y_pos = rand(0 , 350);
        echo "<img class = \"img_test\" style=\"position:absolute; top:",$y_pos,"px",";left:",$x_pos,"px;\"src=\"./img/event_0.png\"width=\"100\"height=\"200\">";
        
        ?>
        
            
    </body>
</html>