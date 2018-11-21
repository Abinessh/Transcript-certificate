<?php

$con= new mysqli("localhost","root","","transcripts");
/*hashing sha1*/

function hash_pass($string)
{
	$pepper = "thisisjustanewencyptww";
	$salt="thisismynewstringhowit";
	$string=$string.$salt.$pepper;
	return sha1($string);
}

/*function protect*/

function protect($string)
{
global $con;
$string=mysqli_real_escape_string($con,$string);
return $string;
}

/*URL ENCODE*/

function u($string)
{
	$string=urlencode($string);
	return $string;
}

/*html special chars*/
function h($string)
{
	$string=htmlspecialchars($string);
	return $string;
}

?>
