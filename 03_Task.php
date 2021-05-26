<!DOCTYPE html>
<html>
<body>
<?php
echo"Today date is".date("d/m/y")."<br>";
if((date("d")<3)||(date("d")>10))
echo "No Event|||";
else if ((date("d")>3)&&(date("d")<10))
echo "No Event|||";
else
{
    switch(date("d"))
    {
        case 3: echo "Dentist Appointment";
        break;
        case 10: echo "Go to conference";
        break;
    }
}
?>
</body>
</html>
