var sum = 0;

for (var i = 1; i <= 10; ++i)
{
    if(i % 2 == 1)
    {
        continue;
    }
    
    sum += i;
    document.write(i + "------------------" + sum + "<br>");
}