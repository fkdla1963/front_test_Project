function changeTo(myImg)
{
    var myNum = document.getElementById("num");
    myNum.src = myImg;
}

var count = 0, count1=0.0, count2=0.0, count3=0.0;
            var score = 0.0, temp_atob=0.0, temp_btoc=0.0;
            max_score = 100;
            game_count = 0, sum_score = 0;
            var timerId = null;

function rand(min , max)
{   
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
}

function Start()
{
    
    count1 = Auto_change_img(rand(1,8),"num1");
    count2 = Auto_change_img(rand(1,8),"num2");
    count3 = Auto_change_img(rand(1,8),"num3");
    
    timerId = setTimeout(Start , 50);
    
}

function Stop()
{   
    
    if(count1 == count2  && count2 == count3)
    {
        score = 100;
    }
    else if(count1 == count2  || count2 == count3 || count3 == count1)
    {
        score = 60;
    }
    else
    {
        score = 0;
    }
    game_conut++;
    sum_score += score;
    $('#score').text('점수 : '+score+', 횟수 : '+game_conut+", 누적 점수 : "+sum_score);

    clearTimeout(timerId);
}

function Auto_change_img(count, id_value)
{
    var myNum1 = document.getElementById(id_value);
    
    str1 = count+".png";
    myNum1.src = str1;
    
    
    
    // switch(count)
    // {
    //     case 1 :
    //         str = count+".png";
    //         myNum.src = str;
    //         return rand();
            
    //     case 2 :
    //         str = count+".png";
    //         myNum.src = str;
    //         return rand();
    //     case 3 :
    //         str = count+".png";
    //         myNum.src = str;
    //         return rand();
    // }
}

