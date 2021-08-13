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
	
	$DegerBir	=	100000;
	$DegerIki	=	2;
	$DegerUc	=	3.12;
	$DegerDort	=	4;
	$DegerBes	=	2.5;
	
	$Sonuc		=	$DegerBir / $DegerIki / $DegerUc / $DegerDort / $DegerBes;
	
	echo $DegerBir . " / " . $DegerIki . " / " . $DegerUc . " / " . $DegerDort . " / " . $DegerBes . " = " . $Sonuc . "<br />";	
	
	echo $Sonuc . " / 2 = ";
	
	$Sonuc		/=	2;
	
	echo $Sonuc;
	
	?>
</body>
</html>