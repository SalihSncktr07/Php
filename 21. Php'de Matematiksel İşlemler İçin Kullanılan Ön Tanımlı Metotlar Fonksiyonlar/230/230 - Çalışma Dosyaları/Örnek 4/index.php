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
	bindec()	:	Herhangi bir binary (ikilik) sayının, decimal (onluk) sayı sistemi karşılığını bularak, bulduğu değeri geriye döndürür.
	octdec()	:	Herhangi bir octal (sekizlik) sayının, decimal (onluk) sayı sistemi karşılığını bularak, bulduğu değeri geriye döndürür.
	hexdec()	:	Herhangi bir hexadecimal (onaltılık) sayının, decimal (onluk) sayı sistemi karşılığını bularak, bulduğu değeri geriye döndürür.
	*/
	
	$IkilikSayiA			=	010110101101;
	$IkilikSayiB			=	10110101101;
	$IkilikSayiC			=	"010110101101";
	$SekizlikSayi			=	2655;
	$Onaltilik				=	"5AD";
	
	$DonusturBirA		=	bindec($IkilikSayiA);
	$DonusturBirB		=	bindec($IkilikSayiB);
	$DonusturBirC		=	bindec($IkilikSayiC);
	$DonusturIki		=	octdec($SekizlikSayi);
	$DonusturUc			=	hexdec($Onaltilik);
	
	echo $IkilikSayiA . " binary (ikilik) sayının, decimal (onluk) sayı sistemi karşılığı : " . $DonusturBirA . "<br />";
	echo $IkilikSayiB . " binary (ikilik) sayının, decimal (onluk) sayı sistemi karşılığı : " . $DonusturBirB . "<br />";
	echo $IkilikSayiC . " binary (ikilik) sayının, decimal (onluk) sayı sistemi karşılığı : " . $DonusturBirC . "<br /><br />";
	echo $SekizlikSayi . " octal (sekizlik) sayının, decimal (onluk) sayı sistemi karşılığı : " . $DonusturIki . "<br /><br />";
	echo $Onaltilik . " hexadecimal (onaltılık) sayının, decimal (onluk) sayı sistemi karşılığı : " . $DonusturUc;
	
	?>
</body>
</html>