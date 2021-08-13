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
	preg_filter()	:	Kendisine parametre olarak verilen düzenli ifadeli değer / değerler doğrultusunda içeriği kontrol eder ve aranan değerin / değerlerin eşleşmesi durumunda, eşleşen değerin / değerlerin değişimini sağlayarak yeni bir içerik veya dizi oluşturarak, oluşturduğu içeriği veya diziyi geriye döndürür.
	preg_replace()	:	Kendisine parametre olarak verilen düzenli ifadeli değer / değerler doğrultusunda içeriği kontrol eder ve aranan değerin / değerlerin eşleşmesi durumunda, eşleşen değerin / değerlerin değişimini sağlayarak yeni bir içerik veya dizi oluşturarak, oluşturduğu içeriği veya diziyi geriye döndürür.
	*/
	
	$Icerik		=	array(22, 23.32, 42.009, "23:43:43");
	$Ara		=	array("/2/", "/\./", "/:/");
	$Degistir	=	array("1", ",", "-");
	$Sonuc		=	preg_replace($Ara, $Degistir, $Icerik);
	
	echo "Orjinal İçerik : <br />";
	echo "<pre>";
	print_r($Icerik);
	echo "</pre>";
	echo "<br /><br />";	
	
	echo "Değişen İçerik : <br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>