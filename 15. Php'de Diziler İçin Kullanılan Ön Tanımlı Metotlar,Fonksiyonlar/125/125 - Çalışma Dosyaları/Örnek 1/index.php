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
	end() 	:	Dizi göstericisinin son konumundaki elemanı bulmak için kullanılır.
	*/
	
	$Isimler	=	array("Volkan", "Onur", "Hakan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$Sonuc		=	end($Isimler);
	
	echo "Dizi göstericisinin son konumundaki elemanın değeri : " . $Sonuc;
	
	?>
</body>
</html>