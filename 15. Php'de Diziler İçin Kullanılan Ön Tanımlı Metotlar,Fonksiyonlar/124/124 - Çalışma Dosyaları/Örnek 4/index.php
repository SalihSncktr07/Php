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
	current()	:	Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.
	pos()		:	Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.
	*/
	
	$Isimler	=	array(array("Hale", "Şule"), "Volkan", "Onur", "Hakan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	$Sonuc		=	current($Isimler);
	
	echo "Dizinin göstericisi konumundaki elemanın değeri : ";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>