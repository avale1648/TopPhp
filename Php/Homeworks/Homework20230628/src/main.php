<?php

if ($_SERVER['REQUEST_URI'] === '/') 
{ 
	echo "Main page<br>" . PHP_EOL . "\n";
} 
if (substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '?')) === '/string') 
{
	require('string/index.php');
}
if(substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '?')) === '/homework0628')
{
	require('homework0628/index.php');
}
?>