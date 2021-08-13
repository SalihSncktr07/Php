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
	
	$Deger	=	10;
	
	switch($Deger){
		case $Deger > 20:
			echo "Koşul geçerli oldu ve kod bloğu çalıştı.";
		break;
		default:
			echo "Koşul geçersiz oldu ve kod bloğu çalıştı.";
	}
	
	?>
</body>
</html>