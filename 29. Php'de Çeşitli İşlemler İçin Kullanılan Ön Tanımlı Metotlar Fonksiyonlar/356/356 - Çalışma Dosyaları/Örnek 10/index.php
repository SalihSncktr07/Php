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
	strtoupper()		:	Belirtilecek olan içeriğin tüm harflerini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	mb_strtoupper()		:	Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak tüm harflerini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	strtolower()		:	Belirtilecek olan içeriğin tüm harflerini küçük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	mb_strtolower()		:	Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak tüm harflerini küçük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	mb_convert_case()	:	Belirtilecek olan içeriğin, belirtilecek olan dönüşüm türünde ve karakter kodlaması dahilinde gelişmiş olarak tüm harflerini değiştirerek, değiştirilmiş olan değeri geriye döndürür.
		MB_CASE_UPPER	:	Belirtilecek olan içeriğin tüm harflerini büyük harf olacak şekilde değiştirmek için kullanılır.
		MB_CASE_LOWER	:	Belirtilecek olan içeriğin tüm harflerini küçük harf olacak şekilde değiştirmek için kullanılır.
		MB_CASE_TITLE	:	Belirtilecek olan içeriğin tüm kelimelerinin baş harflerini harflerini büyük harf olacak şekilde değiştirmek için kullanılır.
	*/
	
	function KucukHarfleriBuyukHarflereCevir($Deger){
		$Degisecekler	=	array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
		$Degisenler		=	array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
		$Duzenle		=	str_replace($Degisecekler, $Degisenler, $Deger);
		$Sonuc			=	strtoupper($Duzenle);
		return $Sonuc;
	}
	
	$Icerik			=	"extra eğitim - volkan alakent - a'dan z'ye php görsel eğitim seti";
	
	echo $Icerik . "<br />";
	
	$Metin			=	KucukHarfleriBuyukHarflereCevir($Icerik);
	
	echo $Metin;
	
	?>
</body>
</html>