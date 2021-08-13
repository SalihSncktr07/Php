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
	\w	:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin, harf, rakam veya _ (alt çizgi) karakterlerinden herhangi birisi ile eşleşmesi gerektiği belirtmek için kullanılır.
	\W	:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin, harf, rakam veya _ (alt çizgi) karakterleri dışındaki karakterlerinden herhangi birisi ile eşleşmesi gerektiği belirtmek için kullanılır.
	*/
	
	$Icerik		=	"Merhaba Benim Adım Volkan Alakent. 1 + 4 * 5 işleminin sonucu 21'dir. _ (alt çizgi)";
	$Desen		=	"/\W/u";
	preg_match_all($Desen, $Icerik, $Sonuc);
	
	echo "Metin : " . $Icerik . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>