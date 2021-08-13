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
	range()		:	Belirtilecek olan değer aralıkları doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Sayilar	=	array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
	
	echo "<pre>";
	print_r($Sayilar);
	echo "</pre><br />";
	
	$Islem		=	range(1, 10);
	
	echo "<pre>";
	print_r($Islem);
	echo "</pre>";
	
	?>
</body>
</html>