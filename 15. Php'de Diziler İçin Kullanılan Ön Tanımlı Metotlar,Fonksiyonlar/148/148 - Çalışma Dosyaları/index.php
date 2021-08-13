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
	array_count_values()	:	Dizi içerisinde bulunan eleman veya elemanların kaçar defa tekrarlandığını bulmak için kullanılır.
	*/
	
	$Isimler	=	array("Volkan", "Hakan", "Onur", "Volkan", "Volkan", "Levent", "Serkan", "Hakan", "Ümit", "Ali");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$Islem		=	array_count_values($Isimler);
	
	echo "<pre>";
	print_r($Islem);
	echo "</pre>";
	
	?>
</body>
</html>