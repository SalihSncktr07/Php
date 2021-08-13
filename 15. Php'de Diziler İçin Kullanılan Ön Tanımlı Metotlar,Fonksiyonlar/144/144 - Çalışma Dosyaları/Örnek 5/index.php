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
	array_keys()	:	Dizinin anahtarlarını alıp yeni bir dizi oluşturmak için kullanılır.
	array_values()	:	Dizinin elemanlarını alıp yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Isimler		=	array("PHP", "HTML", "CSS", "JS", "HTML");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$Islem			=	array_values($Isimler);
	
	echo "<pre>";
	print_r($Islem);
	echo "</pre>";
	
	?>
</body>
</html>