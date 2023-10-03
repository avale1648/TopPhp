<?php

/*$var ='abcdef';

echo '<pre>';
print_r($_GET);
echo '<pre>';

$var3 = $_GET['var3']?? '';
//$var3 =  isset($_GET['var3'])? $ GET['var3'] : '';

/*$strlen
if($strlen){
	echo '';
	}*/

/*$substr = $_GET['substr']?? '';

if($substr){
	echo 'substr => ' . substr($strlen) .'<br>';
}

$stripos = $_GET['stripos']?? '';

if($stripos){
	echo 'stripos=> ' . stripos($stripos, 'a') .'<br>';
}

/*$key = $_GET['key']?? '';

if($key){
	echo 'explode =>';
	echo '<pre>';
	print_r(explode(
*/

/*$letter = 'Привет,  %name%!  Как ты?';
$name = 'Иван';
echo strtr(
	$letter,
	['%name%'=>$name]);

echo '<br>';

//include 'function.php'; // подключение файла с функциями, если его нет продолжит работу
require 'function.php';

$list = scanFolder('.'); //вызов функции
echo '<pre>';
print_r($list);
echo '<pre>';

/*print_r(array_marge(
[1,2,3,],
[4,5,6,],
[15,18,20,]));*/

//echo getcwd() . '<br>';

/*echo '<pre>';
print_r($_SERVER);
echo '</pre>';*/

require('../vendor/autoload.php');

require('../src/main.php');
