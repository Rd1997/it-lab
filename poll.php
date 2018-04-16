
<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$Avan = $array[0];
$Amit = $array[1];

if ($vote == 0) {
  $Avan = $Avan + 1;
}
if ($vote == 1) {
  $Amit = $Amit + 1;
}

//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Avan</td>
<td>

<?php echo(100*round($Avan/($Amit+$Avan),2)); ?>%
</td>
</tr>
<tr>
<td>Amit</td>
<td>

<?php echo(100*round($Amit/($Amit+$Avan),2)); ?>%
</td>
</tr>
</table> 
