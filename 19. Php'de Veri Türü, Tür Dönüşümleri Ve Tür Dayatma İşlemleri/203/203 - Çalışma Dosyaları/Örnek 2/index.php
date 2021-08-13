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
	boolval()		:	Herhangi bir değişken içeriğinin boolean (mantıksal) veri türü değerini geriye döndürür.
	intval()		:	Herhangi bir değişken içeriğinin integer (tam sayı) veri türü değerini geriye döndürür.
	floatval()		:	Herhangi bir değişken içeriğinin double (odalıklı sayı) veri türü değerini geriye döndürür.
	doubleval()		:	Herhangi bir değişken içeriğinin double (odalıklı sayı) veri türü değerini geriye döndürür.
	*/
	
	$Deger				=	8.55;
	$DegerVeriTuru		=	gettype($Deger);
	
	echo "İçerik : " . $Deger . "<br />";
	echo "Veri Türü : " . $DegerVeriTuru . "<br /><br />";
	
	echo "İçerik : " . boolval($Deger) . "<br />";
	$DegerVeriTuruSon	=	gettype($Deger);
	echo "Veri Türü : " . $DegerVeriTuruSon;
	
	?>
</body>
</html>