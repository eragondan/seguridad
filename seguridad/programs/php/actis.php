<?php
include("seguridad.php");
$manu=$_POST;
//var_dump($manu);
if(!empty($manu['modulode'])&&!empty($manu['moudil'])){//modulo
	echo "el modulo es".modulo($manu['modulode'],$manu['moudil']);
	echo "</br>";
}
else{
	echo "vacio";
	echo "</br>";
}
	
if(!empty($manu['codificacion'])){//codificacion
	echo "codificacion es ".codificacion($manu['codificacion']);
	echo "</br>";
}
else{
	echo "vacio";
	echo "</br>";
}

if(!empty($manu['plyfair'])&&!empty($manu['plykey'])){//palyfair
	echo "Playfair es ".playfair($manu['plyfair'],$manu['plykey']);
	echo "</br>";
}
else{
	echo "vacio";
	echo "</br>";
}
if(!empty($manu['cifnocue'])){//cif no de cuenta
	echo "el cifrado del numero de cuenta es ".cifnocue($manu['cifnocue']);
	echo "</br>";
}
else{
	echo "vacio";
	echo "</br>";
}
if(!empty($manu['hasho'])){//cif hash
	echo "el hash es ".hasho($manu['hasho']);
	echo "</br>";
}
else{
	echo "vacio";
	echo "</br>";
}
if(!empty($manu['vigen'])&&!empty($manu['vigenkey'])){//cif vigenere
	echo "el cifrado es ".vigen($manu['vigen'],$manu['vigenkey']);
	echo "</br>";
}
else{
	echo "vacio";
	echo "</br>";
}
if(!empty($manu['visa'])){//valid visa
	if(visa($manu['hasho']))
			echo "visa valida";
	else 
			echo "visa invalida";
			echo "</br>";
}
else{
	echo "vacio";
	echo "</br>";
}


?>