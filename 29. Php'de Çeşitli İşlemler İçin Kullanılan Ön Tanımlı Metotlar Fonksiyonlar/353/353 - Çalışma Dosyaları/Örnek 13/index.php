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
	header()		:	Belirtilecek olan içerik dahilinde, istemciye işlenmiş HTTP üst bilgisi iletmek için kullanılır.
	get_headers()	:	Belirtilecek olan URL doğrultusunda HTML isteğine karşı sunucunun verdiği tüm yanıtları kontrol eder ve aldığı değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	get_meta_tags()	:	Belirtilecek olan URL doğrultusunda HTML dosyasında bulunan ve name değerine sahip tüm meta etiketlerini kontrol eder ve aldığı değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	$Adres	=	"https://www.mynet.com";
	$Sonuc	=	get_meta_tags($Adres);
	
	echo "Mynet'in Bilgileri<br />";
	echo "Description Bilgisi : " . $Sonuc["description"] . "<br />";
	echo "Keywords Bilgisi : " . $Sonuc["keywords"];
	
	?>
</body>
</html>