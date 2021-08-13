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
	key()		:	Dizinin göstericisi konumundaki elemanın anahtarını bulmak için kullanılır.
	*/
	
	$Isimler	=	array("A1" => array("Aslı", "Hale"), "A2" => "Volkan", "A3" => "Hakan", "A4" => "Onur");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$Sonuc		=	key($Isimler);
	echo "Dizinin göstericisi konumundaki elemanın anahtar değer : " . $Sonuc;
	
	?>
</body>
</html>