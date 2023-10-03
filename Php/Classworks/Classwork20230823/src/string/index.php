<?php
echo "string/index.php is connected.<br>";
$text = $_GET['text'] ?? '';
$char = $_GET['char'] ?? '';
function countChar($c,$t)
{
 $count = 0;
 for($i = 0; $i < strlen($t); $i++)
 	if($t[$i] === $c)
 	{
 		$count++;
 	}
 return $count;
}
$count = countChar($char,$text);
echo "$count<br>";
$str1=''; $str2='';
for($i = 0,$c=strlen($text);$i <$c; $i++)
{
	if($i % 2)
		$str1 .= $text[$i];
	else
		$str2 .= $text[$i];
}
echo "$str1 <br>";
echo "$str2 <br>";
