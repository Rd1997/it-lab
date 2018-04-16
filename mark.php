<html>
<head>
</head>

<body>


<form method="post" >
Enter your marks<input type="number" min="0" max="100" name="score"><br />
<input type="submit" value="check your grade" name="enter">
</form>
	<?php
if ($_POST['score']==NULL)
{echo "its empty";
} else{		
		 $score=$_POST['score'];
		if ($score<=35)
{echo "Your mark is : ";echo $score;
		echo "Your grade is F";}
		elseif ($score<=50 && $score>35 )
{echo "Your mark is : ";echo $score;
	
		echo "Your grade is D";}

		elseif ($score<=65 && $score>50 )
{echo "Your mark is : ";echo $score;
		echo "Your grade is C";}

		elseif ($score<=80 &&$score>65 )
{echo "Your mark is : ";echo $score;
		echo "Your grade is B";}

		elseif ($score<=90 &&$score>80 )
{echo "Your mark is : ";echo $score;
		echo "Your grade is A";}

		elseif ($score<=100 && $score>90 )
{echo "Your mark is : ";echo $score;
		echo "Your grade is o";}
		

	}

?>
</body>
</html>
