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
	
	$VeritabaniBaglantisiBir		=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisiBir->set_charset("UTF8");
	if($VeritabaniBaglantisiBir->connect_errno){
		echo "1. Veritabanına Bağlatı Sağlanamadı.<br />";
		echo "Hata : " . $VeritabaniBaglantisiBir->connect_error . "<br />";
		
	}else{
		echo "1. Veritabanına Bağlatı Kuruldu.<br />";
	}
	
	$VeritabaniBaglantisiIki		=	new mysqli("localhost", "root", "", "volkanalakent");
	$VeritabaniBaglantisiIki->set_charset("UTF8");
	if($VeritabaniBaglantisiIki->connect_errno){
		echo "2. Veritabanına Bağlatı Sağlanamadı.<br />";
		echo "Hata : " . $VeritabaniBaglantisiIki->connect_error . "<br />";
		
	}else{
		echo "2. Veritabanına Bağlatı Kuruldu.<br />";
	}
	
	$VeritabaniBaglantisiBir->close();
	$VeritabaniBaglantisiIki->close();
	
	?>
</body>
</html>