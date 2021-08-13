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
	$		:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminin sonu ile düzenli ifade arasında bir eşleşme aramak için kullanılır.
	*/
	
	$Icerik		=	"Ders Konusu : PHP";
	$Desen		=	"/PHP$/";
	$Sonuc		=	preg_match($Desen, $Icerik);
	
	echo "Orjinal İçerik : " . $Icerik . "<br />";
	echo "Desen : " . $Desen . "<br />";
	
	if($Sonuc==1){
		echo "Değer içerik karakter diziliminin sonunda vardır.";
	}else{
		echo "Değer içerik karakter diziliminin sonunda yoktur.";
	}
	
	?>
</body>
</html>