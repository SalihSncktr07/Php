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
	list()	:	Dizi içerisindeki eleman / elemanları değişkenlere atamak için kullanılır.
	*/
	
	$Renkler	=	array("Siyah", "Beyaz", array("Mavi", "Kırmızı"), "Yeşil");
	
	echo "<pre>";
	print_r($Renkler);
	echo "</pre><br />";
	
	list($A1, $A2, list($B1, $B2), $A3)	=	$Renkler;
	
	echo $A1 . "<br />";
	echo $A2 . "<br />";
	echo $B1 . "<br />";
	echo $B2 . "<br />";
	echo $A3;
	
	?>
</body>
</html>