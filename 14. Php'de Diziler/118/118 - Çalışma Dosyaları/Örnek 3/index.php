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
	$Renkler	=	array("DegerUc" => "Mavi", "DegerDort" => "Beyaz", "DegerBes" => "Siyah");
	$Araclar	=	array("DegerAlti" => "Gemi", "DegerYedi" => "Tren", "DegerSekiz" => "Araba");
	$Esyalar	=	array("DegerDokuz" => "Masa", "DegerOn" => "Sandalye");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	echo "<pre>";
	print_r($Renkler);
	echo "</pre><br />";
	
	echo "<pre>";
	print_r($Araclar);
	echo "</pre><br />";
	
	echo "<pre>";
	print_r($Esyalar);
	echo "</pre><br />";

	$Sonuc		=	$Isimler + $Renkler + $Araclar + $Esyalar;
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre><br /><br />";
	
	echo $Sonuc["DegerBir"] . "<br />";
	echo $Sonuc["DegerIki"] . "<br />";
	echo $Sonuc["DegerUc"] . "<br />";
	echo $Sonuc["DegerDort"] . "<br />";
	echo $Sonuc["DegerBes"] . "<br />";
	echo $Sonuc["DegerAlti"] . "<br />";
	echo $Sonuc["DegerYedi"] . "<br />";
	echo $Sonuc["DegerSekiz"] . "<br />";
	echo $Sonuc["DegerDokuz"] . "<br />";
	echo $Sonuc["DegerOn"];
	
	?>
</body>
</html>