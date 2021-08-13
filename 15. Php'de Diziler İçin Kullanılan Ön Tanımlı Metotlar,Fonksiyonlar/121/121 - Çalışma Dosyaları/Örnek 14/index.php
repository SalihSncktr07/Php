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
	array_unshift()		:	Dizinin en başına yeni eleman veya elemanlar eklemek için kullanılır. Aynı zamanda eklenecek olan eleman veya elemanların diziye dahil edilmesi ile, dizi içeriğinin toplam eleman sayısı değerini geriye döndürür.
	array_push()		:	Dizinin en sonuna yeni eleman veya elemanlar eklemek için kullanılır. Aynı zamanda eklenecek olan eleman veya elemanların diziye dahil edilmesi ile, dizi içeriğinin toplam eleman sayısı değerini geriye döndürür.
	*/
	
	$Isimler		=	array("Volkan", "Hakan", array("Hale", "Banu", "Aslı", "Derya"), "Onur");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	array_push($Isimler, "Levent", "Serkan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	?>
</body>
</html>