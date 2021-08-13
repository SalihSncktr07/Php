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
	
	$DegerBir		=	1000;
	$DegerIki		=	100;
	$DegerUc		=	50;
	$DegerDort		=	200;
	$DegerBes		=	400;
	
	$Sonuc			=	$DegerBir - $DegerIki - $DegerUc - $DegerDort - $DegerBes;
	
	echo $DegerBir . " - " . $DegerIki . " - " . $DegerUc . " - " . $DegerDort . " - " . $DegerBes . " = " . $Sonuc . "<br />";
	
	$SonDeger		=	150;
	
	echo $Sonuc . " - " . $SonDeger . " = ";
	
	$Sonuc			-=	$SonDeger;
	
	echo $Sonuc;
	
	?>
</body>
</html>