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
	
	$VeritabaniBaglantisiBir		=	mysqli_connect("localhost", "root", "");
	mysqli_set_charset($VeritabaniBaglantisiBir, "UTF8");
	if(mysqli_connect_errno()){
		echo "1. Veritabanına Bağlatı Sağlanamadı.<br />";
		echo "Hata : " . mysqli_connect_error() . "<br />";
		
	}else{
		echo "1. Veritabanına Bağlatı Kuruldu.<br />";
		mysqli_select_db($VeritabaniBaglantisiBir, "extraegitim");
	}
	
	$VeritabaniBaglantisiIki		=	mysqli_connect("localhost", "root", "");
	mysqli_set_charset($VeritabaniBaglantisiIki, "UTF8");
	if(mysqli_connect_errno()){
		echo "2. Veritabanına Bağlatı Sağlanamadı.<br />";
		echo "Hata : " . mysqli_connect_error() . "<br />";
		
	}else{
		echo "2. Veritabanına Bağlatı Kuruldu.<br />";
		mysqli_select_db($VeritabaniBaglantisiBir, "volkanalakent");
	}
	
	mysqli_close($VeritabaniBaglantisiBir);
	mysqli_close($VeritabaniBaglantisiIki);
	
	?>
</body>
</html>