<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword="tiger";
$dbname="vote";
/*
echo $dbhost."<br />";
echo $dbuser."<br />";
echo $dbpassword."<br />";
echo $dbname."<br />";
*/
$dbh = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname) or die("Error connecting to 		database");
echo "Successfully connected <br ?>";
$query="select * from cr";
$result=mysqli_query($dbh,$query) or die("Querying error");
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo"ID no : ".$row['id']."<br />";
echo"Name :".$row['name']."<br />";
echo"vote :".$row['vote']."<br />";
}
/*mysqli_fetch_assoc($result);*/
?>
