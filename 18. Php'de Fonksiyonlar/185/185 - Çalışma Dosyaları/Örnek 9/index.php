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
	
	function Islem($Isim="Volkan", $Soyisim="Alakent", $Yas="38"){
		
		$GelenIsimDegeri	=	$Isim;
			echo "Gelen İsim : " . $GelenIsimDegeri . "<br />";
		$GelenSoyisimDegeri	=	$Soyisim;
			echo "Gelen Soyisim : " . $GelenSoyisimDegeri . "<br />";
		$GelenYasDegeri		=	$Yas;
			echo "Gelen Yaş : " . $GelenYasDegeri;
	}
	
	Islem("", "", 50);
	
	?>
</body>
</html>