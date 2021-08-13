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
	
	$Isimler		=	array("PHP" => "Volkan", "Hakan", "JS" => "Onur");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br /><br />";
	
	$Degerler			=	$Isimler;
	$Degerler["CSS"]	=	"Levent";
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre>";
	
	?>
</body>
</html>