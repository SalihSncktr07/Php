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
	
	$Isimler	=	array("Volkan", "Onur", "Levent", "Serkan", "Hakan", "Eray", "Ümit", "Özgür");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";

	array_splice($Isimler, 1, 3, "RECEP");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	?>
</body>
</html>