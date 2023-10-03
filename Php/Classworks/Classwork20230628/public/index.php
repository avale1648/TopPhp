<!DOCTYPE html>
<html>
<head>
<title>Homework 3</title>
<meta charset="utf-8" />
</head>
<body>
 <form action="index.php" method="post">
 <h1>Введите n:</h1> <input type="text" name="n"> <br>
 </form>
<?php
$n = $_POST["n"];
echo $n;
echo "<h1>1. Факториал от N:</h1>";
$f = 1;
for($i = 1; $i <= $n; $i++)
{
	$f = $f * $i;
}
echo "<p>$n ! = $f</p>";
echo "<h1>Вывести Hello, World $n раз</h1>";
for($i = 0; $i < $n; $i++)
{
	echo "<p>Hello, World!</p>";
}
echo "<h1>3. Увеличить $n в пять раз </h1>";
$n5 = 0;
for($i = 0; $i < 5; $i++)
{
	$n5 = $n5 + $n;
}
echo "<p>$n x 5 = $n5</p>";
?>
</body>
</html>
