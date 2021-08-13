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
	try{
		$VeritabaniBaglantisiBir	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
		$VeritabaniBaglantisiIki	=	new PDO("mysql:host=localhost;dbname=deneme;charset=UTF8", "root", "");
		echo "Veritabanı Bağlatıları Kuruldu<br />";
	}catch(PDOException $HataMesaji){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $HataMesaji->getMessage();
		die();
	}
	
	$VeritabaniBaglantisiBir	=	null;
	$VeritabaniBaglantisiIki	=	null;
	
	?>
</body>
</html>