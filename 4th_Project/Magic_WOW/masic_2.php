<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Amazing~~~</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Magic</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1><?php
    echo "<br>";
    ini_set('display_errors', '0');

    $input_data = $_GET["val"];
    $input_len = strlen($input_data);
    $input_value = substr($input_data, 1, ($input_len - 1));
    $level = substr($input_data, 0, 1);
    switch($level)
    {
        case 0:
            masic_page($level,$input_value);
            break;
        case 1:
            masic_page($level,$input_value);
            break;
        case 2:
            masic_page($level,$input_value);
            break;
        case 3:
            masic_page($level,$input_value);
            break;
        case 4:
            masic_page($level,$input_value);
            break;
        case 5:
            masic_page($level,$input_value);
            break;
        case 6:
            result_page($input_value);
            break;
    }

    function masic_page($level, $current_value)
    {
        $in_count = 0;
        $line_count = 0;

        echo ($level+1),"단계 하단의 숫자 중 생각하신 숫자가 있으십니까? <br>";
        $point = pow(2,$level);

        for($num = $point; $num < 50; $num++)
        {
            if($in_count == $point)
            {
                $num += $point;
                $in_count = 0;
            }

            echo $num, "&nbsp;&nbsp;&nbsp;&nbsp;";
            $in_count++;
            
            if($line_count != 0 && $line_count % 5 == 0)
            {
                echo "<br>";
                //$line_count = 0;
            }
            $line_count++;
        }
        echo "<br>";
        echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"masic_2.php?val=",($level+1),($current_value +$point), "\"'>존재함</button>";
        echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"masic_2.php?val=",($level+1),($current_value), "\"'>존재하지 않음</button>";
    }

    function result_page($input_value)
    {
        echo "당신이 생각한 숫자는 ", $input_value, "입니다.";
    }
?></h1>
                        
                    </div>
                </div>
            </div>
        </header>
        
    </body>
</html>




