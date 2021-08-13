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
	shuffle()	:	Dizi içerisinde bulunan elemanların sıralarının karıştırılması için kullanılır.
	*/
	
	$Isimler	=	array("Volkan", "Hakan", "Onur", "Levent", "Serkan", "Gökhan", array("Derya", "Banu", "Aslı", "Gökçe"));
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	shuffle($Isimler);
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	?>
</body>
</html>