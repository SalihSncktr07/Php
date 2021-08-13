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
	array_sum()		:	Dizi içerisinde bulunan eleman veya elemanların rakamsal değerler içermesi durumunda tüm elemanların toplamını almak için kullanılır.
	array_product()	:	Dizi içerisinde bulunan eleman veya elemanların rakamsal değerler içermesi durumunda tüm elemanların çarpımını almak için kullanılır.
	*/
	
	$Sayilar		=	array(1.44, 4.75, 8, 16.44, 15, 23.12, 54.90, 45);
	
	echo "<pre>";
	print_r($Sayilar);
	echo "</pre><br />";
	
	$ToplaminiAl	=	array_product($Sayilar);
	
	echo "Dizi içerisindeki tüm elemanların çarpım değeri : " . $ToplaminiAl;
	
	?>
</body>
</html>