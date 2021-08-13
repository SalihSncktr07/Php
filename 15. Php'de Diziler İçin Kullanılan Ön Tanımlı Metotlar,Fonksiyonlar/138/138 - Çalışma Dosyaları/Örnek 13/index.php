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
	array_replace()				:	Birden fazla dizi içerisinde bulunan eleman veya elemanların, ilk dizi içerisinde olanları baz alınarak, kendisinden sonra gelecek olan dizi veya diziler içerisinde bulunan eleman veya elemanlarla güncelleyerek yeni bir dizi oluşturmak için kullanılır.
	array_replace_recursive()	:	Birden fazla dizi içerisinde bulunan eleman veya elemanların, ilk dizi içerisinde olanları baz alınarak, kendisinden sonra gelecek olan dizi veya diziler içerisinde bulunan eleman veya elemanlarla güncelleyerek yeni bir dizi oluşturmak için kullanılır. (Gelişmiş)
	*/
	
	$IsimlerBir		=	array(array("Volkan", "Hakan"), "Onur", array("Murat", "Levent"));
	$IsimlerIki		=	array(array("Aslı", "Banu"), "Derya",  array("Damla"));
	
	echo "<pre>";
	print_r($IsimlerBir);
	echo "<pre><br />";
	
	echo "<pre>";
	print_r($IsimlerIki);
	echo "<pre><br />";
	
	$Sonuc			=	array_replace($IsimlerBir, $IsimlerIki);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "<pre>";
	
	?>
</body>
</html>