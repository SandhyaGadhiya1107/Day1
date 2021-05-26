<?php
$today = getdate();
switch($today['weekday'])
{
    case "Monday":print"today is Monday";
    break;
    case "Tuesday":print"today is Tuesday";
    break;
    case "Wednesday":print"today is Wednesday";
    break;
    case "Thursday":print"today is Thursday";
    break;
    case "Friday":print"today is Friday";
    break;
    case "Saturday":print"today is Saturday";
    break;
    case "Sunday":print"today is Sunday";
    break;
    defalut: print"Invalid input";
}
?>