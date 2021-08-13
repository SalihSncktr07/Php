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
	\s	:	Düzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan değerin, sadece boşluk karakteri ile eşleşmesi gerektiğini belirtmek için kullanılır.
	\S	:	Düzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan değerin, boşluk karakteri dışındaki karakterlerden herhangi birisi ile eşleşmesi gerektiğini belirtmek için kullanılır.
	*/
	
	$Icerik		=	"Bu Bir PHP7 Eğitim Setidir.";
	$Desen		=	"/\s/";
	preg_match_all($Desen, $Icerik, $Sonuc);
	
	echo $Icerik . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>