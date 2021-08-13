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
	
	$DegerBir	=	2;
	$DegerIki	=	3.65;
	$DegerUc	=	1.42;
	$DegerDort	=	8;
	$DegerBes	=	4;

	$Sonuc		=	$DegerBir * $DegerIki * $DegerUc * $DegerDort * $DegerBes;

	echo $DegerBir . " x " . $DegerIki . " x " . $DegerUc . " x " . $DegerDort . " x " . $DegerBes . " = " . $Sonuc . "<br />";
	
	echo $Sonuc . " x 1000 = ";
	
	$Sonuc		*=	1000;
	
	echo $Sonuc;

	?>
</body>
</html>