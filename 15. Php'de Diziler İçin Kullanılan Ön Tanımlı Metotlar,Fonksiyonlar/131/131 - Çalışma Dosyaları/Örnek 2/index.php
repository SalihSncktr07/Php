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
	array_combine()		:	İki farklı diziyi ilişkisel olarak birleştirerek yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Dizi1		=	array("Renk1" => "Mavi", "Renk2" => "Beyaz", "Renk3" => "Kirmizi");
	$Dizi2		=	array("Deger1" => "Araba", "Deger2" => "Perde", "Deger3" => "Bayrak");
	$Sonuc		=	array_combine($Dizi1, $Dizi2);
	
	echo "<pre>";
	print_r($Dizi1);
	echo "</pre><br />";
	
	echo "<pre>";
	print_r($Dizi2);
	echo "</pre><br />";
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>