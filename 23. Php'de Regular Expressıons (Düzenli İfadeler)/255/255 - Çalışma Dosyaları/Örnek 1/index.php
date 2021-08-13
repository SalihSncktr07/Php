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
	preg_quote()		:	Kendisine parametre olarakv erilen içeriği kontrol eder ve içerik dahilinde özel karakter / karakterlerin bulunması durumunda, bulunan özel karakter / karakterlerin önüne \ (ters slash) ekleyerek yeni bir içerik oluşturur ve oluşturduğu içeriği geriye döndürür.
	Özel Karkterler		:	. \ + * ^ $ = ? ! | : - [ ] ( ) { } < >
	*/
	
	$Deger			=	"Merhaba Nasılsın?";
	$Islem			=	preg_quote($Deger);
	
	echo "Orjinal İçerik : " . $Deger . "<br />";
	echo "Değişen İçerik : " . $Islem;
	
	?>
</body>
</html>