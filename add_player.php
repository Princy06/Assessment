<!DOCTYPE html>
<html>
<head>
  <title>Add Records in Database</title>
  <link rel="stylesheet" href="css/getdetail.css">
  
    <link rel="stylesheet" href="css/header.css" >
	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" href="css/style.css">
	<style>

</style>
</head>
<body>
<div class="topnav">
 <a href="score_update.php">SCORE_UPDATE</a>
  <a href="show_detail.php">Player details</a>
  
 <a href="index.php"> <i class="fa fa-home"></i>HOME</a>
</div>
<?php
include "dbCon.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $fullname = $_POST['fullname'];
    $score = $_POST['score'];

    $insert = mysqli_query($db,"INSERT INTO player(fullname,score) VALUES ('$fullname','$score')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db); // Close connection
?>

<h3>Fill the Form</h3>

<form method="POST">
  Full Name : <input type="text" name="fullname" placeholder="Enter Full Name" Required>
  <br/>
  <br/>
  <br/>
  Score : <input type="text" name="score" placeholder="Enter score" Required>
  <br/>
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>