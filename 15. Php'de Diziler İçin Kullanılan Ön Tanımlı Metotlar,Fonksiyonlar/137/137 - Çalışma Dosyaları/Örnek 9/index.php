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
	array_diff()		:	Birden fazla dizi içerisinde bulunan ve farklı eleman değerlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
	array_diff_key()	:	Birden fazla dizi içerisinde bulunan ve farklı anahtar isimlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
	array_diff_assoc()	:	Birden fazla dizi içerisinde bulunan ve farklı anahtar isimlerine ve farklı eleman değerlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$RenklerBir		=	array("A1" => "Siyah", "A2" => "Beyaz", "A3" => "Kırmızı", "A4" => "Pembe", "A5" => "Mavi", "A6" => "Gri", "A7" => "Bordo", "A8" => "Yeşil");
	$RenklerIki		=	array("A4" => "Pembe", "B2" => "Mavi", "B3" => "Eflatun", "B4" => "Beyaz", "B5" => "Lacivert");
	
	echo "<pre>";
	print_r($RenklerBir);
	echo "</pre><br />";
	
	echo "<pre>";
	print_r($RenklerIki);
	echo "</pre><br />";
	
	$Sonuc 		=	array_diff_assoc($RenklerIki, $RenklerBir);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>