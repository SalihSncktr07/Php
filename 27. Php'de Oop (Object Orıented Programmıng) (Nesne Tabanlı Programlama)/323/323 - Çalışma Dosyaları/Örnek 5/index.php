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
		
		private $Isim		=	"Volkan";
		protected $Soyisim 	=	"Alakent";
		
	}
	
	$Islem				=	new Deneme;
	$Islem->Isim 		= 	"Onur";	
	$Islem->Soyisim 	= 	"Tatlı";	
	
	echo $Islem->Isim . " " . $Islem->Soyisim;
	
	?>
</body>
</html>