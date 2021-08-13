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
	json_encode()	:	Belirtilecek olan içeriğin, JSON karşılığını bularak, bulduğu değeri geriye döndürür.
		JSON_HEX_TAG		:	Belirtilecek olan içerikte bulunan tag (etiket) başlangıç ve bitiş karakterlerini hexadecimal (onaltılık) türünde dönüştürmek için kullanılır.
		JSON_HEX_APOS		:	Belirtilecek olan içerikte bulunan ' (tek tırnak) karakterlerini hexadecimal (onaltılık) türünde dönüştürmek için kullanılır.
		JSON_HEX_QUOT		:	Belirtilecek olan içerikte bulunan " (çift tırnak) karakterlerini hexadecimal (onaltılık) türünde dönüştürmek için kullanılır.
		JSON_HEX_AMP		:	Belirtilecek olan içerikte bulunan & (ampersant) karakterlerini hexadecimal (onaltılık) türünde dönüştürmek için kullanılır.
		JSON_FORCE_OBJECT	:	Belirtilecek olan içeriği nesne dönüşüm yapısına göre zorlamak için kullanılır.
	json_decode()	:	Belirtilecek olan JSON değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Dosya		=	file_get_contents("OrnekGelismis.json");
	$Donustur	=	json_decode($Dosya);
	
	echo "<pre>";
	print_r($Donustur);
	echo "</pre>";
	
	echo $Donustur->Firma . " <br />";
	echo $Donustur->Yonetici . " <br />";
	echo $Donustur->Egitimler[0] . " <br />";
	echo $Donustur->Egitimler[1] . " <br />";
	echo $Donustur->Egitimler[2] . " <br />";
	echo $Donustur->Egitimler[3] . " <br />";
	$SinifBir	=	$Donustur->Egitmenler[0];
	echo $SinifBir->Adi. " <br />";
	echo $SinifBir->Ders. " <br />";
	$SinifIki	=	$Donustur->Egitmenler[1];
	echo $SinifIki->Adi. " <br />";
	echo $SinifIki->Ders. " <br />";
	$SinifUc	=	$Donustur->Egitmenler[2];
	echo $SinifUc->Adi. " <br />";
	echo $SinifUc->Ders. " <br />";
	$SinifDort	=	$Donustur->Egitmenler[3];
	echo $SinifDort->Adi. " <br />";
	echo $SinifDort->Ders;
	
	?>
</body>
</html>