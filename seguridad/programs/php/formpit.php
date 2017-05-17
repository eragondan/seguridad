<?php
	echo "<style> body{ text-align:center;}</style></body>";
	$inl=($_GET);
	include('formufun.php');
	$re=true;

	foreach ($_GET as $key => $value) 
	{

		$inl[($key)] = strtolower($value);
		if (empty($value)) 
				$re=false;
	}

	if($re)
	{
	$inl['nom']=lsht($inl['nom']);
	$curp[]=pricua($inl['nom']);
	$curp[]=fecse($inl['fechnac']);
	$curp[]=substr($inl['sexo'], 0, 1);
	$curp[]=($inl['lugnat']);
	$curp[]=cencon($inl['nom']);
	$fin=fin($curp,$inl['fechnac']);
	echo "TU CURP ES: ".$fin."</br> QUE TENGAS UN BUEN DIA ".strtoupper($inl['nom']);
	}
	else
		echo "El formulario esta incompleto";
	echo "</body>";
?>