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
	
	$Isimler	=	array("Volkan", "Hakan");
	$Renkler	=	array("Mavi", "Beyaz", "Siyah");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br /><br />";
	
	echo "<pre>";
	print_r($Renkler);
	echo "</pre><br /><br />";

	$Sonuc		=	$Isimler + $Renkler;
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre><br /><br />";
	
	echo $Sonuc[0] . "<br />";
	echo $Sonuc[1] . "<br />";
	echo $Sonuc[2];
	
	?>
</body>
</html>