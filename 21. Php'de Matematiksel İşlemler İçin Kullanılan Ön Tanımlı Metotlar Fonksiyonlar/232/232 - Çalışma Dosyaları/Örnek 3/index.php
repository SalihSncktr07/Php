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
	
	$Deger					=	706;
	
	$BinaryDonustur			=	base_convert($Deger, 8, 2);
	$OctalDonustur			=	base_convert($Deger, 8, 10);
	$HexadecimalDonustur	=	base_convert($Deger, 8, 16);
	
	echo $Deger . " octal (sekizlik) sayının, binary (ikilik) sayı sistemi karşılığı : " . $BinaryDonustur . "<br />";
	echo $Deger . " octal (sekizlik) sayının, decimal (onluk) sayı sistemi karşılığı : " . $OctalDonustur . "<br />";
	echo $Deger . " octal (sekizlik) sayının, hexadecimal (onaltılık) sayı sistemi karşılığı : " . $HexadecimalDonustur;
	
	?>
</body>
</html>