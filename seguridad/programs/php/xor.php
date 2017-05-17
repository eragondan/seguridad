<?php

 function strToBin($input)
{
if (!is_string($input))
  return false;
$value = unpack('H*', $input);
return bindec(base_convert($value[1], 16, 2));
}

function xori ($cad, $key)
{
	$x=$cad^$key;
	return $x;
}

$f=strToBin("red");
if($f==false)
	echo "false ";
else echo $f." ";

//$key=10101010;
$key=10101011;

$plo=xori($f,$key);
echo $plo." ";

$fro=xori(15221878,$key);//este representa el resultado obtenido.
echo $fro;*/
?>