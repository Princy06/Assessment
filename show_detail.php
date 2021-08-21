<?php
session_start();
$con=mysqli_connect("localhost:3307",'root','','intern');
$s="select * from player ORDER BY score DESC,fullname";
$result=mysqli_query($con,$s);
$row_count=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transactions</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	<link rel="stylesheet" href="css/transaction_history.css">
	 <link rel="stylesheet" href="css/header.css" >
	
		
	<style>
body{
	background-image: url("img3.jfif")  ;

}
</style>
	
	</head>
	<body>
	
	  <div class="topnav">
 <a href="Player_detail.php">BACK</a>
 <a href="add_player.php">ADD_PLAYER</a>
  
 <a href="index.php"><i class="fa fa-home"></i>HOME</a>
</div>
	
	
	
	
		<br>
		<h2 style="color:black;text-shadow: 2px 2px white;"><?php echo "Player_detail"?></h2>
		<table>
	  <tr>
	    <td>id</td>
		<td>fullname</td>
		<td>score</td>
	  </tr>
			<?php
			$i=1;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $i ?></td>
		<td><?php echo $row["fullname"]; ?></td>
		<td><?php echo $row["score"]; ?></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
		<br>
		<br>
		
		
		
	</body>
</html>