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
	(?:)	:	Düzenli ifadelerde alt grup oluşturmak için kullanılır.
	*/
	
	$Icerik		=	"Merhaba Hakan Alakent, Merhaba Hasan Alakent, Merhaba Harun Alakent";
	$Desen		=	"/Ha(?:kan)/";
	$Sonuc		=	preg_match_all($Desen, $Icerik);
	
	echo "Orjinal İçerik : " . $Icerik . "<br />";
	echo "Desen : " . $Desen . "<br />";
	echo "Sonuç : " . $Sonuc;
	
	?>
</body>
</html>