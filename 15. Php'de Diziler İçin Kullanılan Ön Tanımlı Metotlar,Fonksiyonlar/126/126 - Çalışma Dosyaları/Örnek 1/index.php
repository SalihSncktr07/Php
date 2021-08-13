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
	next()		:	Dizinin göstericisi konumundaki anahtarı veya elemanı bir ileri almak için kullanılır.
	prev()		:	Dizinin göstericisi konumundaki anahtarı veya elemanı bir geri almak için kullanılır.
	reset()		:	Dizinin göstericisi konumundaki anahtarı veya elemanı varsayılan konuma (ilk) geri döndürmek için kullanılır.
	*/
	
	$Isimler	=	array("Volkan", "Onur", "Hakan", "Levent", "Serkan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "<pre>";
	
	$AGostericininAnahtari		=	key($Isimler);
	echo "Dizinin varsayılan gösterici konumundaki anahatrı : " . $AGostericininAnahtari . "<br />";
	$AGostericininElemani		=	current($Isimler);
	echo "Dizinin varsayılan gösterici konumundaki elemanı : " . $AGostericininElemani . "<br /><br />";
	
	next($Isimler);
	
	$BGostericininAnahtari		=	key($Isimler);
	echo "Dizinin varsayılan gösterici konumundaki anahatrı : " . $BGostericininAnahtari . "<br />";
	$BGostericininElemani		=	current($Isimler);
	echo "Dizinin varsayılan gösterici konumundaki elemanı : " . $BGostericininElemani . "<br /><br />";
	
	next($Isimler);
	
	$CGostericininAnahtari		=	key($Isimler);
	echo "Dizinin varsayılan gösterici konumundaki anahatrı : " . $CGostericininAnahtari . "<br />";
	$CGostericininElemani		=	current($Isimler);
	echo "Dizinin varsayılan gösterici konumundaki elemanı : " . $CGostericininElemani;
	
	?>
</body>
</html>