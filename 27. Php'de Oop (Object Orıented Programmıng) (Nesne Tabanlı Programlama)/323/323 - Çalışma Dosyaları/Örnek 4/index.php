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
		
		public $Isim;
		public $Soyisim;
		
	}
	
	$Islem				=	new Deneme;
	
	$Islem->Isim 		= 	"Volkan";	
	$Islem->Soyisim 	= 	"Alakent";	
	
	echo $Islem->Isim . " " . $Islem->Soyisim . "<br />";
	
	$Islem->Isim 		= 	"Onur";	
	$Islem->Soyisim 	= 	"Tatlı";	
	
	echo $Islem->Isim . " " . $Islem->Soyisim . "<br />";
	
	$Islem->Isim 		= 	"Hakan";	
	$Islem->Soyisim 	= 	"Alakent";	
	
	echo $Islem->Isim . " " . $Islem->Soyisim;
	
	?>
</body>
</html>