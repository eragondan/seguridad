<?php
//a mejorar (de hecho es inutil por ahora) y ademas crear su inversa.
function playfair ($str,$n)
{
	$s=strlen($str); 
	$dr=(int)(($s+$n)/$n);
	$art=str_split($str);
	var_dump($art);
	for($c=0;$c<=$dr;$c++)
		for($co=0;$co<=$n;$co++)
		{
			$arr[$c][$co]=$art[$co+$c];
			echo $art[$co+$c]."</br>";
		}
	echo "</br>";
	var_dump($arr);
}

$str='estaeslacadena';
$n=7;
echo $str.' '.$n;
playfair($str, $n);


?>