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
	
	function Islem($Isim, $Soyisim, $Yas=50){
		
		$GelenIsimDegeri	=	$Isim;
		$GelenSoyisimDegeri	=	$Soyisim;
		$GelenYasDegeri		=	$Yas;
		
		echo "Gelen İsim : " . $GelenIsimDegeri . "<br />";
		echo "Gelen Soyisim : " . $GelenSoyisimDegeri . "<br />";
		echo "Gelen Yaş : " . $GelenYasDegeri;
		
	}
	
	Islem("Volkan", "Alakent", 38);
	
	?>
</body>
</html>