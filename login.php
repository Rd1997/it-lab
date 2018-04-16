<!doctype html>
<html>
<head>
<title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="" method="post">
<label>ID:</label><input type="text" name="user" required><br/>
<label>Password:</label><input type="password" name="pass" required><br/>
<input type="submit" value="Login" name="submit"><br/>
<!--New user Register Link -->
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 //DB Connection
 $conn = new mysqli('localhost', 'root', 'tiger') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'vote') or die("databse error");
 //Selecting database

 $query = mysqli_query($conn, "SELECT * FROM info WHERE user='".$user."' AND pass='".$pass."'");


 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 $sec=$row['sec'];
 $vote=$row['voted'];
 }
 if($user == $dbusername && $pass == $dbpassword)
 {
 session_start();
 $_SESSION['sec']="$sec";
$_SESSION['user']="$user";
$_SESSION['vote']="$vote";
 //Redirect Browser
 header("Location:vote.php");
 }
 }
 else
 {
 echo "Invalid Username or Password! or";
 }
 }
 else
 {
 echo "Required All fields!";
 }
}

?>
</body>
</html>






