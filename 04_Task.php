<html>
<head>
<title>CUBE DEMO</title>
</head>
<body>
<?php
print"<b>Cube Table</br>";
print"<table border ='1'>";
for($count=1;$count<=10;$count++)
{
    $result=$count*$count*$count;
    print"<tr>
    <td>$count</td>
    <td>$result</td>
    </tr>?";
}
print"</table>";
?>
</body>
</html>