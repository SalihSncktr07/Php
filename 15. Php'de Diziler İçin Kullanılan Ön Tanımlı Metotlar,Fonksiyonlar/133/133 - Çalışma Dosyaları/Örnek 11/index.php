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
	array_splice()		:	Dizinin belli bölümlerini alıp, belli bölümlerini silip, eğer belirtilirse yeni elemanlarda ekleyerek yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Isimler	=	array("A1" => "Volkan", "A2" => "Onur", "A3" => "Levent", "A4" => "Serkan", "A5" => "Hakan", "A6" => "Eray", "A7" => "Ümit", "A8" => "Özgür");
	$EkIsimler	=	array("B1" => "RECEP", "B2" => "ALİ", "B3" => "VELİ");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";

	array_splice($Isimler, 1, 6, $EkIsimler);
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	?>
</body>
</html>