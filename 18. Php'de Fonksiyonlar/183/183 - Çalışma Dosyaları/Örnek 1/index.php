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
	
	function Islem(){
		$Isim		=	"Volkan";
		$Soyisim	=	"Alakent";
		$Sehir		=	"Istanbul";
		$Yas		=	38;
		$Meslek		=	"Programlama ve yazılım geliştirme uzmanı";
		
		return array($Isim, $Soyisim, $Sehir, $Yas, $Meslek);
	}
	
	$Sonuc	=	Islem();
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre><br />";
	
	echo "İsim : " . $Sonuc[0] . "<br />";
	echo "Soyisim : " . $Sonuc[1] . "<br />";
	echo "Şehir : " . $Sonuc[2] . "<br />";
	echo "Yaş : " . $Sonuc[3] . "<br />";
	echo "Meslek : " . $Sonuc[4];
	
	?>
</body>
</html>