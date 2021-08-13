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
	foreach		:	Diziler için döngü işlemi başlatır.
	
	Yapısı :
	foreach(Dizi Değişkeni as Anahtar Atanacak Değişken => Eleman Atanacak Değişken){
		Kod blokları
	}
	*/
	
	$Renkler	=	array("FB" => "Sarı - Lacivert", "GS" => "Sarı - Kırmızı", "BJK" => "Siyah - Beyaz", "TS" => "Bordo - Lacivert");

	foreach($Renkler as $Anahtar => $Icerik){
		echo $Anahtar . " : " . $Icerik . "<br />";
	}
	
	?>
</body>
</html>