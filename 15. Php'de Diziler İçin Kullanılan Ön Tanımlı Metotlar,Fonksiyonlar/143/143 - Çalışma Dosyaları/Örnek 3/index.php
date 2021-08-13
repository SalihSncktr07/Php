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
	
	$Bilgiler		=	array("isim");
	
	echo "<pre>";
	print_r($Bilgiler);
	echo "<pre><br />";
	
	$Sonuc			=	compact($Bilgiler, "soyisim", "dogumtarihi");
	
	echo "<pre>";
	print_r($Sonuc);
	echo "<pre><br />";

	?>
</body>
</html>