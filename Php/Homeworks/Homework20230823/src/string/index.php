<?php

//echo "string functions";

$text = $_GET["text"]?? '';

/*echo htmlspecialchars($text) . '<br>';
echo ($text) . '<br>';
echo "text";*/

/*$char = $_GET["char"]?? '';
$curren = substr_count($text, $char);
echo ($curren) . '<br>';*/

$str1='';
$str2='';

for ($i=0; $i<strlen($text); $i++){
	if($i%2==0){
	$str1 .=$text[$i];
	}
	else {
	$str2 .=$text[$i];
	}
}

echo "нечетные: $str1<br>";
echo "четные: $str2<br>";
