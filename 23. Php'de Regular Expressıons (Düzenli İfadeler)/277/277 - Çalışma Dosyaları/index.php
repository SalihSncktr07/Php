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
	.	:	Düzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan değerin, yeni satır karakteri hariç herhangi birisi ile eşleşmesi gerektiğini belirtmek için kullanılır.
	*/
	
	$Deger	=	"Merhaba Benim Adım Volkan Alakent'tir. Ben Bir PHP Yazılımcısıyım. 1 + 2 * 5 işleminin sonucu 11'dir.";
	$Desen	=	"/./u";
	preg_match_all($Desen, $Deger, $Sonuc);
	
	echo "Orjinal İçerik : " . $Deger . "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>