
<html>
    <body>
        <form action="" method="post">
            <center>
				<h1>Marksheet</h1>
                <table border=0 cellpadding=10px>
                    <tr>
                        <td>
                            Student Name
                        </td>
                        <td>
                            <input type=text name="AA" required >
                        </td>
                    </tr>
					<br>
                    <tr>
                        <td>
                            Marks for Software engineering
                        </td>
                        <td>
                            <input type=text name="BB" required>
                        </td>
                    </tr>
					<br>
                    <tr>
                        <td>
                            Marks for Data Science
                        </td>
                        <td>
                            <input type=text name="CC" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Web Devlopment
                        </td>
                        <td>
                            <input type=text name="DD" required>
                        </td>
                    </tr>
					<br>
                </table>
                <br>
                <br>
                <input type=submit name="s" value="Result">
            </center>
            <?php
if(isset($_POST['s']))
{
    $a=$_POST['AA']; 
    $a1=$_POST['BB'];
    $a2=$_POST['CC']; 
    $a3=$_POST['DD'];
    $sum=$a1+$a2+$a3; 
    $avg=$sum/3;
    if($avg>=0&&$avg<=50)
        $grade="Fail";
    if($avg>50&&$avg<=70)
        $grade="C";
    if($avg>70&&$avg<=80)
        $grade="B";
    if($avg>80&&$avg<=90)
        $grade="A";
    if($avg>90)
        $grade="E";
    echo "<br>";
    echo "<font size=4><center>Student is:-".$a."</center><br>"; 
	 echo "<font size=4><center>Marks for Physics is:-".$a1."</center><br>"; 
	  echo "<font size=4><center>Marks for Chemistry  is:-".$a2."</center><br>"; 
	   echo "<font size=4><center>Marks for Math is:-".$a3."</center><br>";  
    echo "<font size=4><center>Total marks:-".$sum."</center><br>"; 
    echo "<font size=4><center>Grade is:-".$grade."</center>"; 
}
            ?>
        </form>
    </body>
</html>
