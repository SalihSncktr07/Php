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
	
	function Islem($Isim="Bilinmiyor", $Soyisim="Bilinmiyor", $Yas="Bilinmiyor"){
		
		$GelenIsimDegeri	=	$Isim;
			if($GelenIsimDegeri!="Bilinmiyor"){
				echo "Gelen İsim : " . $GelenIsimDegeri . "<br />";
			}
		$GelenSoyisimDegeri	=	$Soyisim;
			if($GelenSoyisimDegeri!="Bilinmiyor"){
				echo "Gelen Soyisim : " . $GelenSoyisimDegeri . "<br />";
			}
		$GelenYasDegeri		=	$Yas;
			if($GelenYasDegeri!="Bilinmiyor"){
				echo "Gelen Yaş : " . $GelenYasDegeri;
			}
	}
	
	Islem("Volkan");
	
	?>
</body>
</html>