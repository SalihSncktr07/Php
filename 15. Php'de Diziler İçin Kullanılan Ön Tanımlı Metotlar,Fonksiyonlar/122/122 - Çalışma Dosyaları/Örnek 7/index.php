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
	array_shift()	:	Dizi içerisinde bulunan ilk elemanı silmek için kullanılır. Aynı zamanda dizi içeriğinden sildiği elemanın değerini geriye döndürür.
	array_pop()		:	Dizi içerisinde bulunan son elemanı silmek için kullanılır. Aynı zamanda dizi içeriğinden sildiği elemanın değerini geriye döndürür.
	*/
	
	$Isimler	=	array("Volkan", "Onur", array("Hale", "Aslı", "Banu", "Derya"), "Serkan", "Hakan", "Levent");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$SilBir		=	array_shift($Isimler[2]);
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	echo "Silinen Elemanın Değeri : " . $SilBir . "<br />";
	
	?>
</body>
</html>