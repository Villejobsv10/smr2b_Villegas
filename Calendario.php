<?php
function meses($n){
	$meses=[
		[
			'mes'=>'enero',
			'estacion'=>'invierno',
			'dias'=>31,
		],
		[
			'mes'=>'febrero',
			'estacion'=>'invierno',
			'dias'=>28,
			
		],
		[ 
			'mes'=>'marzo',
			'estacion'=>'primavera',
			'dias'=>31,
		],		
		[
			'mes'=>'abril',
			'estacion'=>'primavera',
			'dias'=>30,
		],	
		[
			'mes'=>'mayo',
			'estacion'=>'primavera',
			'dias'=>31,
		],	
		[
			'mes'=>'junio',
			'estacion'=>'verano',
			'dias'=>30,
		],	
		[	
			'mes'=>'julio',
			'estacion'=>'verano',
			'dias'=>31,
		],	
		[
			'mes'=>'agosto',
			'estacion'=>'verano',
			'dias'=>31,
		],	
		[
			'mes'=>'septiembre',
			'estacion'=>'otoño',
			'dias'=>30,
		],	
		[
			'mes'=>'octubre',
			'estacion'=>'otoño',
			'dias'=>31,
		],	
		[
			'mes'=>'noviembre',
			'estacion'=>'otoño',
			'dias'=>30,
		],	
			'mes'=>'diciembre',
			'estacion'=>'invierno',
			'dias'=>31,
		];
	
		return $meses[$n-1];
}
echo '<pre>';
print_r( meses(1) );
echo '</pre>';