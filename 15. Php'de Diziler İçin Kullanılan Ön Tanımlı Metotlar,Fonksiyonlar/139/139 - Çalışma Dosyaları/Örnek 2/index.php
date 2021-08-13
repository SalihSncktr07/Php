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
	array_filter()	:	Dizinin içerisinde bulunan boş eleman veya elemanları filtre ederek yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Renkler	=	array("Gokyuzu" => "Mavi", "Bayrak" => "Kırmızı", "A1" => "", "Bulut" => "Beyaz", "A2" => "", "A3" => "", "Telefon" => "Siyah", "Yer" => "Gri");
	
	echo "<pre>";
	print_r($Renkler);
	echo "</pre>";
	
	$Sonuc		=	array_filter($Renkler);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>