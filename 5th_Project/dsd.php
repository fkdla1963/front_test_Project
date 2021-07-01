<!DOCTYPE html>
<html>
<head>
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
  $(function() {
    $("button").on("click", function(){
      var p = $("#video_aa").offset();
      $("span").text("top: " + p.top + "xp, left: " + p.left + "xp" + p.top);
    });
  });
  </script>
</head>
<body>
  
  <div class = "vivi" style = "text-align:center;" id = "div_1">
       <video id = "video_aa" width = "80%" height = "80%"
            controls = "true" autoplay></video>
        </div>

        <button>요소의 위치 정보</button>
  <span></span>

  <?php
        
       
        $x_pos = rand(100 , 1024);
        $y_pos = rand(0 , 350);
        echo "<img class = \"img_test\" style=\"position:absolute; top:",$y_pos,"px",";left:",$x_pos,"px;\"src=\"./img/event_0.png\"width=\"100\"height=\"200\">";
        
        ?>

</body>
</html>