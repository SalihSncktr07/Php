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
	implode()	:	Diziyi birleştirerek düz bir metin içeriği oluşturmak için kullanılır.
	*/
	
	$Isimler	=	array("Volkan", "Hakan", "Mesut", "Hatice", "Banu", "Cansu", "Aras", "");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br />";
	
	$Sonuc		=	implode(" Alakent<br />", $Isimler);
	
	echo $Sonuc;
	
	?>
</body>
</html>