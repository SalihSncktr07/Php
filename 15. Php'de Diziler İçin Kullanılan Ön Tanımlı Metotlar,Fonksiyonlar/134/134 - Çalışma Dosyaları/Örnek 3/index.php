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
	
	$Isimler	=	array("Volkan", "Hakan", "Onur", "Ümit", "Serkan", "Levent", "Özgür", "Eray", "Gökhan", "Hale", "Aslı", "Gökçe", "Banu", "Cansu");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	$Sonuc		=	array_chunk($Isimler, 3, true);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>