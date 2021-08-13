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
	\b	:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin düzenli ifadeye uygun olabilecek metin parçalarını, karakter dizilimi içerisindeki kelimelerin başında yada sonunda aramak için kullanılır.
	\B	:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin düzenli ifadeye uygun olabilecek metin parçalarını, karakter dizilimi içerisindeki kelimelerin içerisinde aramak için kullanılır.
	*/
	
	$Icerik		=	"Türkiye'nin en meşhur yoğurtlarından birisi susurluk yoğurdudur.";
	$Desen		=	"/\bkan/";
	$Sonuc		=	preg_match($Desen, $Icerik);
	
	echo "Orjinal İçerik : " . $Icerik . "<br />";
	echo "Desen : " . $Desen . "<br />";
	echo "Sonuç : " . $Sonuc;
	
	?>
</body>
</html>