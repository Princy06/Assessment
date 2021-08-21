<?php 
session_start();
$con=mysqli_connect('localhost:3307','root','','intern');


//echo $_SESSION['name'];

?>
<html>
<head>
   <title>update</title>
   <link rel="stylesheet" href="css/getdetail.css">
  
    <link rel="stylesheet" href="css/header.css" >
	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
		<style>
body{
	background-image: url("img3.jfif")  ;

}
</style>
   
</head>


<body >


  <div class="topnav">
  
 <a href="index.php"> <i class="fa fa-home"></i>HOME</a>
 
 <a href="add_player.php">Add Player</a>
</div>

	<h1 style="color:black;text-shadow: 2px 2px white;">UPDATE SCORE</h1>

	<table class="table table-striped table-dark">
                        <?php
                        $s="select * from player ORDER BY score DESC,fullname";
                        $players=mysqli_query($con,$s);
                        if (mysqli_num_rows($players) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Player's Name</th>
                                    <th>Current Score</th>
                                    <th>Update Score</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 0;
                                while ($row = mysqli_fetch_array($players)) {
                                    $count++;
                                    $pname = $row["fullname"];
                                    $currscore = $row["score"];?>
                                    <tr>
                                    <form action="update.php" method="POST">
                                        <td> <?php echo $count?> </td>
                                        <td> <?php echo $pname?> </td>
                                        <td> <?php echo $currscore?> </td>
                                        <td><input type="text" name="new_score" required>
                                        <input type="hidden" name="oldscore" value="<?php echo $currscore ?>">
                                        <input type="hidden" name="fullname" value="<?php echo $pname ?>"></td>
                                        <td><input type="submit" value="Update"></td>
                                    </form>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        <?php
                        } else {?>
                        <div class="container-fluid" id="content">
                            No players to show
                        </div>
                           
                        <?php }
                        ?>
                    </table> 
</body>
</html>