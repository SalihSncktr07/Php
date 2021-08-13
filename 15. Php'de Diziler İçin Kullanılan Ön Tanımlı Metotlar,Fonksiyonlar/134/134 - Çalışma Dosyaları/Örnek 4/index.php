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
	array_chunk()	:	Dizinin belli bölümlerini alıp parçalayarak yeni bir çok boyutlu dizi oluşturmak için kullanılır.
	*/
	
	$Isimler	=	array("A1" => "Volkan", "A2" => "Hakan", "A3" => "Onur", "A4" => "Ümit", "A5" => "Serkan", "A6" => "Levent", "A7" => "Özgür", "A8" => "Eray", "A9" => "Gökhan", "A10" => "Hale", "A11" => "Aslı", "A12" => "Gökçe", "A13" => "Banu", "A14" => "Cansu");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	$Sonuc		=	array_chunk($Isimler, 5, true);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>