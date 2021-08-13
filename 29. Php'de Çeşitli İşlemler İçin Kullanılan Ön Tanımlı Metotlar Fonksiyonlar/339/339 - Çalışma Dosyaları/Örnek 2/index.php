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
	var_export()	:	Belirtilecek olan harhangi bir değişkenin çözümlenebilir gösterimini bularak, bulduğu gösterimin ekran çıktılanmasını sağlamak için kullanılır.
	*/
	
	$Deger		=	array("Volkan Alakent", 2019, "İstanbul");
	
	echo "<pre>";
	print_r($Deger);
	echo "</pre>";
	
	echo "<br />";
	
	echo "<pre>";
	var_export($Deger);
	echo "</pre>";
	
	?>
</body>
</html>