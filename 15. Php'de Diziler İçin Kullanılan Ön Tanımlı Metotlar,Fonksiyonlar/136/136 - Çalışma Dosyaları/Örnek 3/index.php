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
	array_intersect()			:	Birden fazla dizi içerisinde bulunan ve aynı eleman değerlerine sahip elemanlardan yeni bi dizi oluşturmak için kullanılır.
	array_intersect_key()		:	Birden fazla dizi içerisinde bulunan ve aynı anahtar isimlerine sahip elemanlardan yeni bi dizi oluşturmak için kullanılır.
	array_intersect_assoc()		:	Birden fazla dizi içerisinde bulunan ve aynı anahtar isimlerine ve aynı eleman değerlerine sahip elemanlardan yeni bi dizi oluşturmak için kullanılır.
	*/
	
	$Deger1		=	array("A1" => "Volkan", "A2" => "Hakan", "A3" => "Onur", "A4" => "Levent", "A5" => "Ümit", "A6" => "Serkan", "A7" => "Gökhan", "A8" => "Erdem", "A9" => "Eray");
	$Deger2		=	array("B1" => "Ali", "B2" => "Veli", "B3" => "Erdem", "B4" => "Aslan", "B5" => "Kemal", "B6" => "Volkan", "B7" => "Halil", "B8" => "Mustafa");
	
	echo "<pre>";
	print_r($Deger1);
	echo "</pre><br />";
	
	echo "<pre>";
	print_r($Deger2);
	echo "</pre><br />";
	
	$Sonuc		=	array_intersect($Deger2, $Deger1);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>