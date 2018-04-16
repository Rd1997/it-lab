
<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword="tiger";
$dbname="vote";
$dbh = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname) or die("Error connecting to 		database");

$query="select * from cr";
$result=mysqli_query($dbh,$query) or die("Querying error");

	echo '<form id="list">';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{	
	echo '<input type="radio" name="vote" value="'.$row['name'].'" id="r1" >' .$row['name'].'</input> <br />';

}
	echo'</form>';

?>
	

