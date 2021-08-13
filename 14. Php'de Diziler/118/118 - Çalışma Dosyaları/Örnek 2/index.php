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
	
	$Isimler	=	array("DegerBir" => "Volkan", "DegerIki" => "Hakan");
	$Renkler	=	array("Bir" => "Mavi", "Iki" => "Beyaz", "Uc" => "Siyah");
	
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
	
	echo $Sonuc["DegerBir"] . "<br />";
	echo $Sonuc["DegerIki"] . "<br />";
	echo $Sonuc["Bir"] . "<br />";
	echo $Sonuc["Iki"] . "<br />";
	echo $Sonuc["Uc"];
	
	?>
</body>
</html>