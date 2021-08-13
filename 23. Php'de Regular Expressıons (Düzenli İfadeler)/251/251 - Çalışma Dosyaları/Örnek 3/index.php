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
	preg_match()		:	Kendisine parametre olarak verilen düzenli ifadeli değer doğrultusunda içeriği kontrol eder ve aranan değerin eşleşmesi durumunda, eşleşmeyi sağlayan içeriğin değerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	preg_match_all()	:	Kendisine parametre olarak verilen düzenli ifadeli değer doğrultusunda içeriği gelişmiş olarak kontrol eder ve aranan değerin eşleşmesi durumunda, eşleşmeyi sağlayan içeriğin değerinden / değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	$Metin		=	"Merhaba Benim Adım Volkan Alakent, Ben Bir PHP Yazılımcısıyım. Beni Facebook Üzerinden Volkan Alakent Şeklinde Arayarak Bulabilirsiniz.";
	preg_match("/Volkan/", $Metin, $Sonuc);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>