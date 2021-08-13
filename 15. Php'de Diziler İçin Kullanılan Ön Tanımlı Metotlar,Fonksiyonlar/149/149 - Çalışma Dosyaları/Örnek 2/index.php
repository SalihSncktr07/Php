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
	array_flip()	:	Dizi içerisinde bulunan anahtarların ve elemanlarının yer değişimi yapması için kullanılır.
	*/
	
	$Degerler		=	array("Deger1", "Deger2", "Deger3");
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre><br />";
	
	$Yerdegistir	=	array_flip($Degerler);
	
	echo "<pre>";
	print_r($Yerdegistir);
	echo "</pre><br />";
	
	?>
</body>
</html>