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
	
	$Deger		=	"08.12.1980";
	$Desen		=	"/^\d{1,2}\.\d{1,2}\.\d{4}$/";
	$Sonuc		=	preg_match($Desen, $Deger);
	
	if($Sonuc==1){
		echo "Girilen Değer (" . $Deger . ") Bir Tarihdir.";
	}else{
		echo "Girilen Değer (" . $Deger . ") Bir Tarih Değildir.";
	}
	
	?>
</body>
</html>