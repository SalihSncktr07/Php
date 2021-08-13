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
	min()	:	Dizi içerisinde bulunan eleman veya elemanların rakamsal değerler içermesi durumunda en küçük rakamsal değer içeren elemanı bulmak için kullanılır.
	max()	:	Dizi içerisinde bulunan eleman veya elemanların rakamsal değerler içermesi durumunda en büyük rakamsal değer içeren elemanı bulmak için kullanılır.
	*/
	
	$Sayilar	=	array(8, 14, 3, 44, 175, 35, 65);
	
	echo "<pre>";
	print_r($Sayilar);
	echo "</pre>";
	
	$Islem		=	max($Sayilar);
	
	echo "İlgili dizi içerisindeki en büyük değer : " . $Islem;
	
	
	?>
</body>
</html>