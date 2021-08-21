<?php
include "dbCon.php";
$score=$_POST['new_score'];
$oldscore=$_POST['oldscore'];
$name=$_POST['fullname'];
$query="UPDATE player SET score = '".$score."' WHERE score='".$oldscore."' AND fullname='".$name."'";


$sql=mysqli_query($db,$query);
if($sql){
   header("location:show_detail.php");
}
else
    echo '<script>alert("Something went wrong, Please try again.")</script>'
?>

