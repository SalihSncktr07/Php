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
	Yapısı :
	
	switch():
		case Koşul:
			Kod blokları
		break;
		default:
			Kod blokları
	endswitch;
	*/
	
	$Deger		=	8;
	
	switch($Deger):
		case $Deger > 8:
			echo "Koşul geçerli oldu, 1. case kod bloğu çalıştı.";
		break;
		case $Deger > 4:
			echo "Koşul geçerli oldu, 2. case kod bloğu çalıştı.";
		break;
		default:
			echo "Koşul geçersiz oldu, default kod bloğu çalıştı.";
	endswitch;
	
	?>
</body>
</html>