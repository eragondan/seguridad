<?php
//Cifrado simple

function cif ($str)
{
	$str=strrev($str);
	return $str;	
}


$str='316194099';
$str=cif($str);
echo $str;

?>