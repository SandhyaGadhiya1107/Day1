<?php
$connection=mysqli_connect("localhost","root","","db_internship");

$id=$_GET['deleteid'];
    $q=mysqli_query($connection,
           "delete  from tbl_user where user_id='{$id}'")or die(mysqli_error($connection));

if($q){

  echo "<script>window.location='table.php'</script>";
}



?>
© 2021 GitHub, Inc.