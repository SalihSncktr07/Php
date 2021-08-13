<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
	<?php
	/*
	$Isimler	=	array("Volkan", "Hakan", "Onur");
	$Isimler	=	["Volkan", "Hakan", "Onur"];
	
	$Isimler	=	array("PHPEgitmeni" => "Volkan", "HTML5Egitmeni" => "Hakan", "CSS3Egitmeni" => "Onur");
	$Isimler	=	["PHPEgitmeni" => "Volkan", "HTML5Egitmeni" => "Hakan", "CSS3Egitmeni" => "Onur"];
	*/
	
	$Isimler["PHPEgitmeni"]		=	"Volkan";
	$Isimler["HTML5Egitmeni"]	=	"Hakan";
	$Isimler["CSS3Egitmeni"]	=	"Onur";
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	?>
</body>
</html>