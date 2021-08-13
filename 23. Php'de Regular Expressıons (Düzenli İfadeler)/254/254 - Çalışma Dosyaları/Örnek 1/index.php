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
	preg_grep()		:	Kendisine parametre olarak verilen düzenli ifadeli değer doğrultusunda dizi içeriğini kontrol eder ve aranan değer / değerlerin eşleşmesi durumunda, eşleşmeyi sağlayan içeriğin değer / değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	$Degerler		=	array(22, 12, 143, 252, 82, 104);
	$Desen			=	"/2/";
	$Sonuc			=	preg_grep($Desen, $Degerler);
	
	echo "Dizinin Orjinal Hali :<br />";
	echo "<pre>";
	print_r($Degerler);
	echo "</pre><br /><br />";
	
	echo "Eşleşen Değerlerden Oluşan Yeni Dizi :<br />";
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre><br /><br />";
	
	?>
</body>
</html>