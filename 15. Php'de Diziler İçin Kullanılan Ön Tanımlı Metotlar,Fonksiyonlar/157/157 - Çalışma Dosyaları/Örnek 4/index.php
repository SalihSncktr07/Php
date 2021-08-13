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
	natsort()		:	Dizinin elemanlarını büyük harf küçük harf duyarlı olacak ve doğal sıralama şeklinde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
	natcasesort()	:	Dizinin elemanlarını doğal sıralama şeklinde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
	*/
	
	$ResimlerBir		=	array("RESIM273", "Resim1", "Resim3", "RESim112", "Resim2", "Resim2645", "RESim14", "ResIM372");
	$ResimlerIki		=	array("RESIM273", "Resim1", "Resim3", "RESim112", "Resim2", "Resim2645", "RESim14", "ResIM372");
	
	echo "<pre>";
	print_r($ResimlerBir);
	echo "</pre><br />";
	
	echo "<pre>";
	print_r($ResimlerIki);
	echo "</pre><br />";
	
	sort($ResimlerBir);
	
	echo "Standart Sıralama<br />";
	echo "<pre>";
	print_r($ResimlerBir);
	echo "</pre><br />";
	
	natcasesort($ResimlerIki);
	
	echo "Doğal Sıralama<br />";
	echo "<pre>";
	print_r($ResimlerIki);
	echo "</pre><br />";
	
	?>
</body>
</html>