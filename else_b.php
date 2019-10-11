<?php
$nota=9;
$r='Pendiente';
if($nota>=5)
	$r='Aprobado';
if($nota>=7)
	$r='Notable';
if($nota>=8.5)
	$r='Sobresaliente';
if ($nota>=10)
	$r='error';
echo $r;
