<?php
function tipo_lados($a,$b,$c){
	$r='escaleno';
	if($a==$b or $b==$c or $a==$c)
		$r='isoceles';
	if($a==$b and $b==$c)
		$r='equilatero';
	return $r;
}
echo tipo_lados(1,1,1).' ¿equilátero?<br>';
echo tipo_lados(1,2,1).' ¿isósceles?<br>';
echo tipo_lados(1,3,2).' ¿escaleno?<br>';
echo tipo_lados(3,1,1).' ¿isósceles?<br>';
echo tipo_lados(1,3,1).' ¿isósceles?<br>';
echo tipo_lados(3,1,2).' ¿escaleno?<br>';
echo tipo_lados(3,2,1).' ¿escaleno?<br>';
echo tipo_lados(2,1,3).' ¿escaleno?<br>';
echo tipo_lados(2,1,1).' ¿isósceles?<br>';
echo tipo_lados(1,1,3).' ¿isósceles?<br>';