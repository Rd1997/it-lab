<html>
<head>
</head>

<body>


<h1>	<?php
		define $score=$_POST['score'];
		if ($score<=35)
{echo "Your mark is :";echo $score;
		echo "Your grade is F";}
		if ($score<=50 && $score>35 )
{echo "Your mark is :";echo $score;
		echo "Your grade is D";}

		if ($score<=65 && $score>50 )
{echo "Your mark is :";echo $score;
		echo "Your grade is C";}

		if ($score<=80 &&$score>65 )
{echo "Your mark is :";echo $score;
		echo "Your grade is B";}

		if ($score<=90 &&$score>80 )
{echo "Your mark is :";echo $score;
		echo "Your grade is A";}

		if ($score<=100 && $score>90 )
{echo "Your mark is :";echo $score;
		echo "Your grade is o";}
	?>
	
</h1>
</body>
</html>
