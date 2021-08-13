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
	
	$ResimlerBir		=	array("A1" => "Resim273", "A2" => "Resim1", "A3" => "Resim3", "A4" => "Resim112", "A5" => "Resim2", "A6" => "Resim2645", "A7" => "Resim14", "A8" => "Resim372");
	$ResimlerIki		=	array("A1" => "Resim273", "A2" => "Resim1", "A3" => "Resim3", "A4" => "Resim112", "A5" => "Resim2", "A6" => "Resim2645", "A7" => "Resim14", "A8" => "Resim372");
	
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
	
	natsort($ResimlerIki);
	
	echo "Doğal Sıralama<br />";
	echo "<pre>";
	print_r($ResimlerIki);
	echo "</pre><br />";
	
	?>
</body>
</html>