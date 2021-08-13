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
	^		:	Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminin başlangıcı ile düzenli ifade arasında eşleşme aramak için kullanılır.
	*/
	
	$Icerik		=	"PHP7 A'dan Z'ye Görsel Eğitim Seti";
	$Desen		=	"/^PHP7/";
	$Sonuc		=	preg_match($Desen, $Icerik);
	
	echo "Orjinal İçerik : " . $Icerik . "<br />";
	echo "Desen : " . $Desen . "<br />";
	
	if($Sonuc==1){
		echo "Düzenli ifade dahilinde aranılan değer içeriğin başında mevcuttur.";
	}else{
		echo "Düzenli ifade dahilinde aranılan değer içeriğin başında mevcut değildir.";
	}
	
	?>
</body>
</html>