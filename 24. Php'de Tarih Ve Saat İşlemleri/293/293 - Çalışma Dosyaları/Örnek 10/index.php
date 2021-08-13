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
	strftime()		:	Yerel tarih ve saat bilgilerini belirtilecek olan formata göre biçimlendirerek, biçimlendirdiği değeri geriye döndürür.
	strtotime()		:	İngilizce metin içerikli bir zamanın Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Tarih				=	strtotime("08 December 1980");
	$Suan				=	strtotime("now");
	$Yarin				=	strtotime("+1 day");
	$BirHaftaSonra		=	strtotime("+1 week");
	$Gelsimis			=	strtotime("+1 year +3 month +5 day +8 hour");
	$Dondur				=	date("d.m.Y H.i.s", $Gelsimis);
	
	echo "08.12.1980 : " . $Tarih . "<br />";
	echo "Şuan : " . $Suan . "<br />";
	echo "Yarın : " . $Yarin . "<br />";
	echo "1 Hafta Sonra : " . $BirHaftaSonra . "<br />";
	echo "Gelişmiş : " . $Gelsimis . "<br />";
	echo "Gelişmiş Döndür : " . $Dondur;
	
	?>
</body>
</html>