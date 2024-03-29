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
	array_merge()			:	Birden fazla diziyi birleştirerek yeni bir dizi oluşturmak için kullanılır.
	array_merge_recursive()	:	Birden fazla diziyi birleştirerek yeni bir dizi oluşturmak için kullanılır. (GELİŞMİŞ)
	*/
	
	$Dizi1		=	array("Deger1" => "Volkan", "Deger2" => "Hakan", "Deger3" => "Onur");
	$Dizi2		=	array(0 => "Gökçe", "Deger2" => "Banu", 2 => "Aslı", 3 => "Derya", "Deger1" => "Hale");
	$YeniDizi	=	array_merge_recursive($Dizi1, $Dizi2);
	
	echo "<pre>";
	print_r($Dizi1);
	echo "</pre>";
	
	echo "<pre>";
	print_r($Dizi2);
	echo "</pre>";
	
	echo "<pre>";
	print_r($YeniDizi);
	echo "</pre>";
	
	?>
</body>
</html>