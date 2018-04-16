<?php
session_start();
?>
<html>
<head>
<script>
</script>
</head>
<body>
<div id="poll">
<h3>CR Selection</h3>

<form method="post">
<?php
$conn = new mysqli('localhost', 'root', 'tiger') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'vote') or die("databse error");
 //Selecting database
$cr="1";
 $query = mysqli_query($conn, "SELECT * FROM cr WHERE sec='".$_SESSION["sec"]."' ");
$voted="1";

else
{	
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
{	
	echo '<input type="radio" name="vote" value="'.$row['name'].'" id="r1" >' .$row['name'].'</input> <br />';


}


?>
<input type="submit" value="vote" name="submit"><br/>
<?php
}
?>

</form>
<?php

if(isset($_POST["submit"])){
$vote=$_POST['vote'];
$query = mysqli_query($conn, "UPDATE cr 
  SET vote = vote + 1 
  WHERE name = '$vote'");
$query = mysqli_query($conn, "UPDATE info 
  SET voted = voted+1 
  WHERE user = '".$_SESSION["user"]."'");
echo"voted";
unset($_SESSION['user']);
 unset($_SESSION['pass']);
  session_destroy();
 header('Location: login.php');
exit();
}

?>
<br />
<a href="logout.php">logout</a>
</div>



</body>
</html> 
