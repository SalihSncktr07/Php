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
	substr()	:	Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre istenilen değeri bularak, bulduğu değeri geriye döndürür.
	mb_substr()	:	Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak istenilen değeri bularak, bulduğu değeri geriye döndürür.
	strstr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geriye döndürür.
	stristr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda herhangi bir değerin büyük harf / küçük harf ayrımı olmaksızın arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geriye döndürür.
	strchr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geriye döndürür.
	strrchr()	:	Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, son eşleşen değerin sonrasını bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Icerik		=	"info@extraegitim.com volkanalakent@yandex.com info@creativeteknoloji.com";
	
	echo $Icerik . "<br />";
	
	$Sonuc		=	strrchr($Icerik, "@", true); // Hata kodu döndürür, çünkü strrchr eşleşen değeri kontrol ederken hafızadan kazanmak için sondan başlayarak eşleşme kontrolü yapar, dolayısı ile eşleşen değerin başını zaten okumaz, bu nedenlede eşleşen değerin başı elde edilemez. 
	
	echo $Sonuc;
	
	?>
</body>
</html>