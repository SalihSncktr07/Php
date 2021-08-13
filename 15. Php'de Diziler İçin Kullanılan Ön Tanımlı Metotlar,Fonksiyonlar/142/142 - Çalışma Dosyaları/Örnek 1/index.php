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
	array_fill()		:	Belirtilecek olan değerler doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
	array_fill_keys()	:	Dizi içerisinde bulunan eleman veya elemanları anahtar gibi görerek, belirtilecek olan değerler doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
	*/
	
	// $Degerler	=	array(0 => "Volkan", 1 => "Volkan", 2 => "Volkan", 3 => "Volkan", 4 => "Volkan");
	
	$Degerler		=	array_fill(0, 5, "Volkan");
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre>";
	
	?>
</body>
</html>