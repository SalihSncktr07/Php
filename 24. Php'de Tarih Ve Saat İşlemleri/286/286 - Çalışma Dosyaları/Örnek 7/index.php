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
	getdate()		:	Geçerli zaman bilgileri değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	localtime()		:	Yerel zaman bilgileri değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	$Zaman			=	localtime(true); // Zaman damgası belirtilmediği için, 1 Ocak 1970 tarihi esas alınarak işlem çalışır.
	
	echo "<pre>";
	print_r($Zaman);
	echo "</pre>";
	
	?>
</body>
</html>