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
	return 	:	Fonksiyondan değer döndürmek için kullanılır.
	*/
	
	function Islem(){
		$Isim		=	"Volkan ";
		$Soyisim	=	"Alakent";
		
		return $Isim . $Soyisim;
	}
	
	$Sonuc	=	Islem();
	echo $Sonuc;
	
	?>
</body>
</html>