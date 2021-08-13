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
	\d	:	Düzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan değerin, sadece rakam karakterlerinin herhangi birisi ile eşleşmesi gerektiğini belirtmek için kullanılır.
	\D	:	Düzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan değerin, rakam karakterleri dışındaki karakterlerden herhangi birisi ile eşleşmesi gerektiğini belirtmek için kullanılır.
	*/
	
	$Icerik		=	"Volkan Alakent 1980 Doğumludur.";
	$Desen		=	"/\D/u";
	preg_match_all($Desen, $Icerik, $Sonuc);
	
	echo $Icerik . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>