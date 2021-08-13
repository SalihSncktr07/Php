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
	array_change_key_case()		:	Dizi içerisinde bulunan anahtar veya anahtarların büyük harf küçük harf dönüştürme işlemleri için kullanılır.
	CASE_LOWER					:	Küçük harf yapar.
	CASE_UPPER					:	Büyük harf yapar.
	*/
	
	$Isimler	=	array("IsimBir" => "Volkan", "IsimIki" => "Hakan", "IsimUc" => "Onur", "IsimDort" => "Levent", "IsimBes" => "Serkan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$Sonuc		=	array_change_key_case($Isimler, CASE_UPPER);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>