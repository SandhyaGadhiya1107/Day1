<html>
<head>
<title> Fibonacci series</title>
</head>
<body>
<?php
$i=1;
$j=1;
print"<b>Fibonacci series</br>";
printf("%d,%d",$i,$j);
for($count=1;$count<9;$count++)
{
    $k=$i+$j;
    $i=$j;
    $j=$k;
    printf(",%d",$k);
}
?>
</body>
</html>