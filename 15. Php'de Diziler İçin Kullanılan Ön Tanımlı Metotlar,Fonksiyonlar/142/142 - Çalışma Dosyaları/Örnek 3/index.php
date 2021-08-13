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
	array_fill()		:	Belirtilecek olan değerler doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
	array_fill_keys()	:	Dizi içerisinde bulunan eleman veya elemanları anahtar gibi görerek, belirtilecek olan değerler doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
	*/
	
	// $Sonuc		=	array("Volkan" => "Extra Eğitim", "Hakan" => "Extra Eğitim", "Onur" => "Extra Eğitim", "Levent" => "Extra Eğitim");
	
	$Isimler		=	array("Volkan", "Hakan", "Onur", "Levent");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$Sonuc			=	array_fill_keys($Isimler, "Extra Eğitim");
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>