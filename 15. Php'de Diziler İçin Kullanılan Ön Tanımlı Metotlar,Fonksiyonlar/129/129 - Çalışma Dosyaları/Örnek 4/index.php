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
	
	$Renkler	=	array("Siyah", "Beyaz", array("Mavi", "Kırmızı", array("Volkan", "Hakan", "Onur")), "Yeşil");
	
	echo "<pre>";
	print_r($Renkler);
	echo "</pre><br />";
	
	list($A1, $A2, list($B1, $B2, list($C1, $C2, $C3)), $A3)	=	$Renkler;
	
	echo $A1 . "<br />";
	echo $A2 . "<br />";
	echo $B1 . "<br />";
	echo $B2 . "<br />";
	echo $C1 . "<br />";
	echo $C2 . "<br />";
	echo $C3 . "<br />";
	echo $A3;
	
	?>
</body>
</html>