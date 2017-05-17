<?php
//Proyecto final de seguridad
function modulo ($a,$b){	//modulo
	if($a<0){
		$c=$a%$b;
	return $c+$b;
	}
}
function codificacion($str){	//codificación super simple
	$str=str_split($str);
	$n=0;
	foreach ($str as $value){
		$str[$n]=chr((ord($value)+1));
		$n++;
	}
	$str=implode($str);
	return $str;
}
function playfair ($str,$key){	//cifrado de tipo simple
	$stringf=null;
	$length=strlen($str);
	$achain=str_split($str);
	$rows=(int)(($length+$key)/$key);
	$w=0;
	for($x=0;$x<$rows;$x++)
		for($y=0;$y<$key;$y++)
			if(isset($achain[$w])){
				$table[$y][$x]=$achain[$w];
				$w++;
			}
	for($y=0;$y<$key;$y++)
		for($x=0;$x<$rows;$x++){
			if(isset($table[$y][$x]))
				$stringf=$stringf.$table[$y][$x];
		}
	return $stringf;
}
function cifnocue($nocue){	//Este es el cifrado simple de un numero de cuenta
	$nocue=strrev($nocue);
	return $nocue;
}
 function strToBin($input){	//Esta funcion convierte una string a binario
if (!is_string($input))
  return false;
$value = unpack('H*', $input);
return bindec(base_convert($value[1], 16, 2));
}
function xori ($cad, $key){ //Esto es lo que se supone que hace el cifrado xor

	$x=$cad^$key;
	return $x;
}
function hasho ($str){	//Funcion que realiza un hash, se que es un poco trampa(ripemd160)
	$str=hash("ripemd160", $str);
	return $str;
}
function vigen($str,$key,$ty=true){//Este es algoritmo de vigenere, hice trampa
    $alfabeto = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";	
	$str=strtoupper($str);
	$key=strtoupper($key);		
	$cla=$key;		
	while(strlen($key)<strlen($str))$key.=$cla;			
	$result= '';	
	for($i=0; $i< strlen($str); $i++) 
	{	if($str[$i]==' '){ $result.=$str[$i]; continue; }
		$idx = strpos($alfabeto,$str[$i]);
		if($idx < 0) $result .= $str[$i];
		else {	
				$k = strpos($alfabeto,$key[$i]);				
				$idx+=$ty?$k:strlen($alfabeto)-$k;
				$result.=$alfabeto[$idx % strlen($alfabeto)];
			}
		}
	return $result;
}
/*function validavisa ($numero) { //El lunes sin falta krnal
	$suma = 0;
	for ($i = 0; $i < 16; $i++) {
		if ($i % 2) {
			$suma += $numero[$i]; //par
		}else{ //impar
			if ($numero[$i] != 9) {
				$suma += 2 * $numero[$i] % 9;
			}else{
			$suma += 9;
		}
		}
	}
	if ($suma % 10 == 0 && $suma < 150) {
	return true;
	}else{
	return false;
	}
}*/
//La funcion de verificador de curp (homoclave), se encuentra en el documento correspondiente.
function visa ($str){
	$res=preg_match('/^4/', $str);//Comienza con "4"
	return $res;
}
?>