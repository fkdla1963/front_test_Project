<?php

    ini_set('display_errors' , '0');

    $input_data = $_GET["val"];
    $input_len = strlen($input_data);
    $input_value = substr($input_data, 1, ($input_len - 1));

    if($input_data == 0)
    {
        masic_1_page();
    }
    elseif(substr($input_data,0,1) == 1)
    {
        masic_2_page($input_value);
    }
    elseif(substr($input_data,0,1) == 2)
    {
        masic_3_page($input_value);
    }
    elseif(substr($input_data,0,1) == 3)
    {
        masic_4_page($input_value);
    }
    elseif(substr($input_data,0,1) == 4)
    {
        masic_5_page($input_value);
    }
    elseif(substr($input_data,0,1) == 5)
    {
        masic_6_page($input_value);
    }
    elseif(substr($input_data,0,1) == 6)
    {
        result_page($input_value);
    }

function masic_1_page()
{
    echo "1단계 하단의 숫자 중 생각하신 숫자가 있으십니까? <br/>";
    for($num = 1; $num < 50; $num++)
    {
        if($num%10 == 0)
        {
            echo "<br />";
        }

        if($num%2 == 1)
        {
            echo $num. "&nbsp;&nbsp;&nbsp;";
        }
    }
echo "<br />";
echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"masic_1.php?val=11\"'>있음</button>";
echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"masic_1.php?val=10\"'>없음</button>";
}

function masic_2_page($current_value)
{
    $in_count = 0;
    $line_count = 0;
    
    echo "2단계 하단의 숫자 중 생각하신 숫자가 있으십니까? <br/>";
    for($num = 2; $num < 50; $num++)
    {
        if($in_count == 2)
        {
            $num += 2;
            $in_count = 0;
            
        }
        
        echo $num. "&nbsp;&nbsp;&nbsp;&nbsp;";
        $in_count++;
        
        if($line_count != 0 && $line_count%5 == 0)
        {
            echo "<br />";
            // line_count = 0;
        }
        $line_count++;
        
    }

echo "<br />";
echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"masic_1.php?val=2".($current_value+2)."\"'>있음</button>";
echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"masic_1.php?val=2".($current_value+0)."\"'>없음</button>";
}

function masic_3_page($current_value)
{
    $in_count = 0;
    $line_count = 0;
    
    echo "3단계 하단의 숫자 중 생각하신 숫자가 있으십니까? <br/>";
    for($num = 4; $num < 50; $num++)
    {
        if($in_count == 4)
        {
            $num += 4;
            $in_count = 0;
        }
        
        echo $num. "&nbsp;&nbsp;&nbsp;&nbsp;";
        $in_count++;

        if($line_count != 0 && $line_count%5 == 0)
        {
            echo "<br />";
            // line_count = 0;
        }
        $line_count++;
    }

echo "<br />";
echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"masic_1.php?val=3".($current_value+4)."\"'>있음</button>";
echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"masic_1.php?val=3".($current_value+0)."\"'>없음</button>";
}

function masic_4_page($current_value)
{
    $in_count = 0;
    $line_count = 0;
    
    echo "4단계 하단의 숫자 중 생각하신 숫자가 있으십니까? <br/>";
    for($num = 8; $num < 50; $num++)
    {
        if($in_count == 8)
        {
            $num += 8;
            $in_count = 0;
        }
        
        echo $num. "&nbsp;&nbsp;&nbsp;&nbsp;";
        $in_count++;

        if($line_count != 0 && $line_count%5 == 0)
        {
            echo "<br />";
            // line_count = 0;
        }
        $line_count++;
    }

echo "<br />";
echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"masic_1.php?val=4".($current_value+8)."\"'>있음</button>";
echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"masic_1.php?val=4".($current_value+0)."\"'>없음</button>";
}

function masic_5_page($current_value)
{
    $in_count = 0;
    $line_count = 0;
    
    echo "5단계 하단의 숫자 중 생각하신 숫자가 있으십니까? <br/>";
    for($num = 16; $num < 50; $num++)
    {
        if($in_count == 16)
        {
            $num += 16;
            $in_count = 0;
        }
        
        echo $num. "&nbsp;&nbsp;&nbsp;&nbsp;";
        $in_count++;

        if($line_count != 0 && $line_count%5 == 0)
        {
            echo "<br />";
            // line_count = 0;
        }
        $line_count++;
    }

echo "<br />";
echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"masic_1.php?val=5".($current_value+16)."\"'>있음</button>";
echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"masic_1.php?val=5".($current_value+0)."\"'>없음</button>";
}

function masic_6_page($current_value)
{
    $in_count = 0;
    $line_count = 0;
    
    echo "6단계 하단의 숫자 중 생각하신 숫자가 있으십니까? <br/>";
    for($num = 32; $num < 50; $num++)
    {
        if($in_count == 32)
        {
            $num += 32;
            $in_count = 0;
        }
        
        echo $num. "&nbsp;&nbsp;&nbsp;&nbsp;";
        $in_count++;

        if($line_count != 0 && $line_count%5 == 0)
        {
            echo "<br />";
            // line_count = 0;
        }
        $line_count++;
    }

echo "<br />";
echo "<button id=\"btnfun1\" name=\"btnfun1\" onClick='location.href=\"masic_1.php?val=6".($current_value+32)."\"'>있음</button>";
echo "<button id=\"btnfun2\" name=\"btnfun2\" onClick='location.href=\"masic_1.php?val=6".($current_value+0)."\"'>없음</button>";
}

function result_page($input_value)
{
    echo "생각하신 값은 아마도 : " , $input_value;
}

?>