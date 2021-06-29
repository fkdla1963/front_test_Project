<html>
    <head>
        <meta charset = "utf-8"/>
        <title></title>
    </head>
    <body>
    
    <pre>
    
    <?php

for($int = 1; $int <= 10; $int++)
{
    echo "<br>";
    for($i = 0; $i < 10 - $int; $i++)
    {
        echo " ";
    }
    for($i = 0; $i < $int-1; $i++)
    {
        echo "*";
    }
    for($int_2 = 1; $int_2 <= $int; $int_2++)
    {
        echo "*";
        
    }
    
    
}


for($int = 0; $int <= 10; $int++)
{
    echo "<br>";
    for($i = 10; $i > 11 - $int; $i--)
    {
        echo " ";
    }
    for($i = 10; $i > $int; $i--)
    {
        echo "*";
    }
    for($int_2 = 10; $int_2 >= $int; $int_2--)
    {
        echo "*";
        
    }
    
}
echo "<br>";

for($int = 1; $int <= 10; $int++)
{
    echo "<br>";
    for($i = 10; $i > 10 - $int; $i--)
    {
        echo " ";
    }
    for($i = 10; $i > $int; $i--)
    {
        echo "*";
    }

}

?>
    
    </pre>
    
    
    </body>


</html>



