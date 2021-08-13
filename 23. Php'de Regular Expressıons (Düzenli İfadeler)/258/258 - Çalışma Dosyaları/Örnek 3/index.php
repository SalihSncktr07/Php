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
	x 		:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin, desende bulunan boşluğu etkisiz hale getirerek kontrol edilmesini sağlar.
	*/
	
	$Metin	=	"Volkan Alakent, P H P Eğitim Seti";
	$Desen	=	"/PHP/x";
	preg_match($Desen, $Metin, $Sonuc);
	
	echo "Orjinal İçerik : " . $Metin . "<br />";
	echo "Desen : " . $Desen .  "<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>