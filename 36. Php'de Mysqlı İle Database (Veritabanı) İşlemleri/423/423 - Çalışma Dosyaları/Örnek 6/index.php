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
	
	$VeritabaniBaglantisi		=	new mysqli("localhost", "root", "");
	$VeritabaniBaglantisi->set_charset("UTF8");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Veritabanına Bağlatı Sağlanamadı.<br />";
		echo "Hata : " . $VeritabaniBaglantisi->connect_error . "<br />";
	}else{
		echo "Veritabanına Bağlatı Kuruldu.<br />";
	}

	$SorguBir	=	$VeritabaniBaglantisi->query("SELECT * FROM extraegitim.kayitlar");
	$SorguIki	=	$VeritabaniBaglantisi->query("SELECT * FROM volkanalakent.uyeler");
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>