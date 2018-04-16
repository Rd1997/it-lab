	<?php
		echo "Your mark is :";
		echo $_POST['score'];
		if ($_POST['score']<=35)
{
		echo "Your grade is F";}
		if ($_POST['score']<=50 && $_POST['score']>35 )
{
		echo "Your grade is D";}

		if ($_POST['score']<=65 && $_POST['score']>50 )
{
		echo "Your grade is C";}

		if ($_POST['score']<=80 && $_POST['score']>65 )
{
		echo "Your grade is B";}

		if ($_POST['score']<=90 && $_POST['score']>80 )
{
		echo "Your grade is A";}

		if ($_POST['score']<=100 && $_POST['score']>90 )
{
		echo "Your grade is o";}
	?>
