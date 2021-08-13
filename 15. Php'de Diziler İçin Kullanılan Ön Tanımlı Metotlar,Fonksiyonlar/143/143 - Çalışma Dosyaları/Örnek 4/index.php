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
	compact()	:	Dizi içerisinde bulunan elamanı / elemanları anahtar gibi görerek, daha önceden aynı isimle tanımlanmış olan değişkenlerden ilgili anahtarlara değer üretmek için kullanılır.
	*/
	
	$isim			=	"Volkan";
	$soyisim		=	"Alakent";
	$dogumtarihi	=	"1980";
	$yas			=	38;
	
	$Sonuc			=	compact("isim", "soyisim", "dogumtarihi", "yas"); // array("isim", "soyisim", "dogumtarihi", "yas");
	
	echo "<pre>";
	print_r($Sonuc);
	echo "<pre><br />";

	?>
</body>
</html>