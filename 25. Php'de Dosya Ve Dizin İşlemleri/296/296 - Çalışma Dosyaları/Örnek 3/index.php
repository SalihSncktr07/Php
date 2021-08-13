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
	basename()		:	Belirtilecek olan değer doğrultusunda, kaynağın sadece dosya adını bularak, bulduğu değeri geriye döndürür.
	dirname()		:	Belirtilecek olan değer doğrultusunda, kaynağın içerisinde bulunduğu dizin / dizinlerin adını bularak, bulduğu değeri geriye döndürür.
	pathinfo()		:	Belirtilecek olan değer doğrultusunda, kaynağın içerisinde bulunduğu dizin / dizinlerin adını ve dosya adını bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	realpath()		:	Belirtilecek olan değer doğrultusunda, kaynağın mutlak yolunu bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Dosya		=	"Dosyalar/Dokumanlar/Belge.txt";
	$Bul		=	dirname($Dosya);
	
	echo "dirname Değeri : " . $Bul;
	
	?>
</body>
</html>