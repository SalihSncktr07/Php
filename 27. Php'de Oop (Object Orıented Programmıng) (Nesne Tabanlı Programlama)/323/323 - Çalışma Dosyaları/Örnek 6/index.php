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
	
	class Deneme{
		
		public const ISIM		=	"Volkan";
		public const SOYISIM 	=	"Alakent";
		
	}
	
	$Islem		=	new Deneme;
	
	$Islem->ISIM 	=	"Onur";
	$Islem->SOYISIM =	"Tatlı";
	
	echo Deneme::ISIM . " " . Deneme::SOYISIM;
	
	?>
</body>
</html>