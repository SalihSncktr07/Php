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
	
	$Isimler	=	array("Volkan", "Onur", array("Hale", "Aslı", "Gökçe", "Banu", "Cansu", "Derya"), "Hakan", "Levent", "Serkan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "<pre>";
	
	$AGostericininAnahtari		=	key($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki anahatrı : " . $AGostericininAnahtari . "<br />";
	$AGostericininElemani		=	current($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki elemanı : " . $AGostericininElemani . "<br /><br />";
	
	next($Isimler[2]);
	
	$BGostericininAnahtari		=	key($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki anahatrı : " . $BGostericininAnahtari . "<br />";
	$BGostericininElemani		=	current($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki elemanı : " . $BGostericininElemani . "<br /><br />";
	
	next($Isimler[2]);
	
	$CGostericininAnahtari		=	key($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki anahatrı : " . $CGostericininAnahtari . "<br />";
	$CGostericininElemani		=	current($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki elemanı : " . $CGostericininElemani . "<br /><br />";
	
	prev($Isimler[2]);
	
	$DGostericininAnahtari		=	key($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki anahatrı : " . $DGostericininAnahtari . "<br />";
	$DGostericininElemani		=	current($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki elemanı : " . $DGostericininElemani . "<br /><br />";
	
	next($Isimler[2]);
	
	$EGostericininAnahtari		=	key($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki anahatrı : " . $EGostericininAnahtari . "<br />";
	$EGostericininElemani		=	current($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki elemanı : " . $EGostericininElemani . "<br /><br />";
	
	next($Isimler[2]);
	
	$FGostericininAnahtari		=	key($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki anahatrı : " . $FGostericininAnahtari . "<br />";
	$FGostericininElemani		=	current($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki elemanı : " . $FGostericininElemani . "<br /><br />";
	
	reset($Isimler[2]);
	
	$GGostericininAnahtari		=	key($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki anahatrı : " . $GGostericininAnahtari . "<br />";
	$GGostericininElemani		=	current($Isimler[2]);
	echo "Dizinin varsayılan gösterici konumundaki elemanı : " . $GGostericininElemani;
	
	?>
</body>
</html>