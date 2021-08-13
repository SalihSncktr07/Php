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
	preg_split()	:	Kendisine paranetre olarak verilen düzenli ifadeli değer doğrultusunda içeriği kontrol eder ve eşleşmeyi sağlayan değer / değerlerden içeriği bölümleyerek yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	$Icerik		=	"Merhaba Benim Adım Volkan Alakent, Ben Bir PHP Yazılımcısıyım. Beni Facebook Üzerinden Volkan Alakent Şeklinde Arayarak Bulabilirsiniz.";
	$Desen		=	"/ /";
	$Sonuc		=	preg_split($Desen, $Icerik);
	
	echo "Orjinal İçerik :<br />" . $Icerik . "<br /><br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";

	?>
</body>
</html>