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
	sort()		:	Dizinin elemanlarını büyük harf küçük harf duyarlı olacak şekilde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
	rsort()		:	Dizinin elemanlarını büyük harf küçük harf duyarlı olacak şekilde z'den a'ya yada büyükten küçüğe sıralamak için kullanılır.
	asort()		:	Dizinin elemanlarını büyük harf küçük harf duyarlı olacak ve anahtarlarını bozmayacak şekilde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
	arsort()	:	Dizinin elemanlarını büyük harf küçük harf duyarlı olacak ve anahtarlarını bozmayacak şekilde z'den a'ya yada büyükten küçüğe sıralamak için kullanılır.
	*/
	
	$Degerler	=	array("A1" => 11, "A2" => 3, "A3" => 42, "A4" => 74, "A5" => 112, "A6" => 43, "A7" => 75, "A8" => 34, "A9" => 29);
	
	echo "<pre>";
	print_r($Degerler);
	echo "<pre><br />";
	
	sort($Degerler);
	
	echo "<pre>";
	print_r($Degerler);
	echo "<pre>";
	
	?>
</body>
</html>