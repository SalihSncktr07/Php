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
	switch		=	Koşul başlat.
	case		=	Koşul kontrol et.
	break		=	Koşul kontrolünü sonlandır.
	default		=	Koşul olumsuzlukları sonucu.
	
	Yapısı :
	
	switch(Koşul){
		case Kontrol ifadesi:
			Kod blokları
		break;
		default:
			Kod blokları
	}
	
	*/
	
	$Saat	=	8;
	
	switch($Saat){
		case ($Saat >= 0) and ($Saat <= 6):
			echo "İyi geceler.";
		break;
		case ($Saat > 6) and ($Saat <= 9):
			echo "Günaydın.";
		break;
		case ($Saat > 9) and ($Saat <= 17):
			echo "İyi günler.";
		break;
		case ($Saat > 17) and ($Saat <= 23):
			echo "İyi akşamlar.";
		break;
		default:
			echo "Girilen değer ( {$Saat} ) bir saat dilimi değildir.";
	}
	
	?>
</body>
</html>