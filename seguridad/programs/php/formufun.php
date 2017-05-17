<?php
	function modulo ($a,$b){	//modulo
		if($a<0){
			$c=$a%$b;
		return $c+$b;
		}
	}
	function isvoc( $l )
	{
		$l=ord($l);
		if ($l==97||$l==101||$l==105||$l==111||$l==117)
				$l=true;
		else
				$l=false;
		return $l;
	}

	function lsht ( $s )
	{
		$s=str_ireplace('á','a',$s);
		$s=str_ireplace('é','e',$s);
		$s=str_ireplace('í','i',$s);
		$s=str_ireplace('ó','o',$s);
		$s=str_ireplace('ú','u',$s);
		$s=str_ireplace('Á','a',$s);
		$s=str_ireplace('É','e',$s);
		$s=str_ireplace('Í','i',$s);
		$s=str_ireplace('Ó','o',$s);
		$s=str_ireplace('Ú','u',$s);
		return $s;
	}

	function pricua ( $s )
	{
		$tm=explode(" ", $s);
		$tm[0]=str_split($tm[0]);
		$res[]=$tm[0][0];
		$n=1;
		while (!isvoc($tm[0][$n])) {
			$tm[0][$n];
			$n++;					}
		$res[]=$tm[0][$n];
		$res[]=substr($tm[1], 0, 1);
		$res[]=substr($tm[2], 0, 1);
		return $res;
	}

	function fecse ( $s )
	{
		$fec=explode('-', $s);
		$fec[0]=substr($fec[0], 2, 2);
		return $fec;
	}

	function cencon( $s )
	{
		$tm=explode(" ", $s);
		for ($i=0;$i<3;$i++) 
		{ 
			$tm[$i]=str_split($tm[$i]);
			$n=1;
			while (isvoc($tm[$i][$n]))
			 {
				$tm[1][$n];
				$n++;						
			 }
			$res[]=$tm[$i][$n];
		}
		return $res;
	}
	function homoclave($str,$fech){//Este codigo y el la visa, estan super sucios, mejorar.
		$digit=array('0','0');
		$fech=explode('-', $fech);
		$fech=$fech[0];
		$fech<2000 ? $digit[0]="0": $digit[0]="A";
		$w=18;
		$r=0;
		for($x=0;$x<16;$x++){
				$y=substr($str,$x,1);
				if(ord($y)>=65){
					if(ord($y)<=77)		//La Ñ  valio madres.
						$r+=$w*(ord($y)-55);
					if(ord($y)>=77)
						$r+=$w*(ord($y)-54);
				}
				else
					$r+=$w*(ord($y)-48);
					//echo $r.$y." ";
			$w--;
		}
		$fech<2000 ? $digit[1]=$r%10 : $digit[1]=modulo((10-$r),10);
		$digit=implode($digit);
		$str=$str.$digit;
		return $str;
	}
	function fin ($curp,$fech)
	{
	$re=array_merge($curp[0],$curp[1]);
	$re[]=$curp[2];
	$re[]=$curp[3];
	$re=array_merge($re,$curp[4]);
	$fin=strtoupper(str_replace(' ', '',implode('', $re)));
	$fin=homoclave($fin,$fech);
	return $fin;
	}
?>