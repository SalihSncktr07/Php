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
	
	$Isimler	=	array(2 => "Volkan", 4 => "Onur", 0 => "Serkan", 3 => "Hakan", 1 => "Levent");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	array_shift($Isimler);
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	?>
</body>
</html>