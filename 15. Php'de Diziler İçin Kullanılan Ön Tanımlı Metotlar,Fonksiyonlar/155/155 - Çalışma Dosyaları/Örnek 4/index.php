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
	ksort()		:	Dizinin anahtarlarını büyük harf küçük harf duyarlı olacak şekilde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
	krsort()	:	Dizinin anahtarlarını büyük harf küçük harf duyarlı olacak şekilde z'den a'ya yada büyükten küçüğe sıralamak için kullanılır.
	*/
	
	$Degerler	=	array("Bir" => "Volkan", "Iki" => "Hakan", "Uc" => "Onur", "Dort" => "Levent", "Bes" => "Serkan", "Alti" => "Gökhan", "Yedi" => "Kadir", "Sekiz" => "Fazıl");
	
	echo "<pre>";
	print_r($Degerler);
	echo "<pre><br />";
	
	krsort($Degerler);
	
	echo "<pre>";
	print_r($Degerler);
	echo "<pre>";
	
	?>
</body>
</html>