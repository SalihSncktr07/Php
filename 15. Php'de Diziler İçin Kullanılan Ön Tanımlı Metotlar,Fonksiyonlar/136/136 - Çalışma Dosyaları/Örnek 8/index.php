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
	
	$Deger1		=	array("Deneme1" => "Volkan", "Hakan", "Onur", "Levent", "Isim1" => "Ümit", "Serkan", "Gökhan", "Erdem", "Eray");
	$Deger2		=	array("Ali", "Isim1" => "Ümit", "Veli", "Erdem", "Aslan", "Kemal", "Deneme1" => "Volkan", "Halil", "Mustafa");
	
	echo "<pre>";
	print_r($Deger1);
	echo "</pre><br />";
	
	echo "<pre>";
	print_r($Deger2);
	echo "</pre><br />";
	
	$Sonuc		=	array_intersect_assoc($Deger1, $Deger2);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>