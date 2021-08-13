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
	array_reverse()		:	Dizi içerisinde bulunan eleman veya elemanların tersten sıralanmasını sağlayarak yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Isimler	=	array("Volkan", "Hakan", "Onur", "Serkan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$Islem		=	array_reverse($Isimler);
	
	echo "<pre>";
	print_r($Islem);
	echo "</pre>";
	
	?>
</body>
</html>