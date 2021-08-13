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
	
	function Bir($Isim){
		
		function Iki($Soyisim){
			
			return $Soyisim;
			
		}
		
		$Yaz	=	Iki("Alakent");
		
		return $Isim . " " . $Yaz;
		
	}
	
	$Sonuc	=	Bir("Volkan");
	
	echo $Sonuc;
	
	?>
</body>
</html>