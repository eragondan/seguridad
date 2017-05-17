<?php
function vige($texto,$clave,$ty=true)
{   $alfabeto = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";	
	$texto=strtoupper($texto);
	$clave=strtoupper($clave);		
	$cla=$clave;		
	while(strlen($clave)<strlen($texto))$clave.=$cla;			
	$result= '';	
	for($i=0; $i< strlen($texto); $i++) 
	{	if($texto[$i]==' '){ $result.=$texto[$i]; continue; }
		$idx = strpos($alfabeto,$texto[$i]);
		if($idx < 0) $result .= $texto[$i];
		else {	
				$k = strpos($alfabeto,$clave[$i]);				
				$idx+=$ty?$k:strlen($alfabeto)-$k;
				$result.=$alfabeto[$idx % strlen($alfabeto)];
			}
		}
	return $result;
}
 
function cifrado($texto,$clave){ return vige($texto,$clave,true); }
function decifrado($texto,$clave){ return vige($texto,$clave,false); }
 
 
$str='wero';
$key='lima';
echo 'Texto cifrado: <strong>'.cifrado($str,$key).'</strong><HR>';
?>