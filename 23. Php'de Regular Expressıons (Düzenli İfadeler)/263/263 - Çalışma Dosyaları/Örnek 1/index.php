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
	?=	:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter dizilimi içerisindeki belirtilen bir referas değerin önünde düzenli ifade ile eşleşebilecek değer / değerleri aramak için kullanılır.
	?!	:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter dizilimi içerisindeki belirtilen bir referas değer ile takip edilmeyen düzenli ifade ile eşleşebilecek değer / değerleri aramak için kullanılır.
	*/
	
	$Icerik		=	"PHP dünya üzerinde en yayın olarak kullanılan bir web programlama dilidir ve php'yi öğrenmesi çok kolaydır.";
	$Desen		=	"/PHP(?='yi)/i";
	preg_match_all($Desen, $Icerik, $Sonuc);
	
	echo "Orjinal Metin : " . $Icerik . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>