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
	
	$Sayilar	=	array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

	foreach($Sayilar as $Deger){
		echo $Deger . "<br />";
	}
	
	?>
</body>
</html>