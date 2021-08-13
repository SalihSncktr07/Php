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
	array_rand()	:	Dizi içerisinde bulunan elemanlardan, belirtilecek eleman sayısı kadar rastgele değer döndürmek için kullanılır.
	*/
	
	$Isimler	=	array("Volkan", "Hakan", "Onur", "Levent", "Serkan", "Eray", "Özgür", "Gökhan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$Sonuc		=	array_rand($Isimler, 2);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre><br />";
	
	echo $Isimler[$Sonuc[0]] . "<br />";
	echo $Isimler[$Sonuc[1]] . "<br />";
	
	?>
</body>
</html>