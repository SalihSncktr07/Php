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
	
	$Renkler	=	array("Siyah", "Beyaz", "Mavi", "Kırmızı", "Yeşil");
	
	echo "<pre>";
	print_r($Renkler);
	echo "</pre><br />";
	
	list($Bir, $Iki, $Uc, $Dort, $Bes)	=	$Renkler;
	
	echo $Bir . "<br />";
	echo $Iki . "<br />";
	echo $Uc . "<br />";
	echo $Dort . "<br />";
	echo $Bes;
	
	?>
</body>
</html>