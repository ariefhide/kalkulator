<!DOCTYPE html>
<html>
<head>
	<title>kalkulator</title>
</head>
<body>



<form method="post" action="index.php">
<input type="text" name="bil1" size="23" class="bil"><br></br>
<input type="text" name="bil2" size="23" class="bil"><br></br>
<input type="text" name="bil3" size="23" class="bil"><br></br>

<input type="submit" name="operasi" value="+">
<input type="submit" name="operasi" value="-">
<input type="submit" name="operasi" value="*">
<input type="submit" name="operasi" value="/">
<br></br>
Hasilnya adalah :

<br></br>

<?php
	$bil1 =$_POST['bil1'];
	$bil2 =$_POST['bil2'];
	$bil3 =$_POST['bil3'];
	$operator =$_POST['operasi'];
		if ($operator =='+') 
		{
		echo $bil1+$bil2+$bil3;
		}elseif ($operator =='-')
		{
		echo $bil1-$bil2-$bil3;
		}elseif ($operator =='*')
		{
		echo $bil1*$bil2*$bil3;
		}elseif ($operator =='/')
		{
		echo $bil1/$bil2/$bil3;
		}
		
?>

</form>

</body>
</html>