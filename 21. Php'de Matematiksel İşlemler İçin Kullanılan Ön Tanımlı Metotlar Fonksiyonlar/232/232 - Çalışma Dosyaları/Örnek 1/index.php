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
	base_convert()		:	Herhangi bir sayının, binary (ikilik), octal (sekizlik), decimal (onluk), hexadecimal (onaltılık) sayı sistemleri karşılığını bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Deger					=	145;
	
	$BinaryDonustur			=	base_convert($Deger, 10, 2);
	$OctalDonustur			=	base_convert($Deger, 10, 8);
	$HexadecimalDonustur	=	base_convert($Deger, 10, 16);
	
	echo $Deger . " decimal (onluk) sayının, binary (ikilik) sayı sistemi karşılığı : " . $BinaryDonustur . "<br />";
	echo $Deger . " decimal (onluk) sayının, octal (sekizlik) sayı sistemi karşılığı : " . $OctalDonustur . "<br />";
	echo $Deger . " decimal (onluk) sayının, hexadecimal (onaltılık) sayı sistemi karşılığı : " . $HexadecimalDonustur;
	
	?>
</body>
</html>