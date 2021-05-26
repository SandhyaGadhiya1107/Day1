<?php
$student=array("sandhya"=>10,"jinal"=>5,"rutvi"=>15,"sakina"=>11,"sanvi"=>7);
print"The roll number of rutvi is".$student['rutvi'];
print"<br/>The roll number in the array are";
foreach($student as $name=>$value)
print "<br/>".$name."".$value;
?>