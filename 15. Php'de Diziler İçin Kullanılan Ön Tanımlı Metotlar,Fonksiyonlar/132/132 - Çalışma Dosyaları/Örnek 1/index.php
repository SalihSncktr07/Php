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
	array_slice()	:	Dizinin belli bölümlerini alarak yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Isimler	=	array("Volkan", "Hakan", "Onur", "Serkan", "Levent", "Ümit", "Eray", "Özgür");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	$Sonuc		=	array_slice($Isimler, 3);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	
	
	?>
</body>
</html>