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
	TRUNCATE TABLE	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm içeriklerini boşaltmak / sıfırlamak için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
		echo "Bağlatı Kuruldu<br />";
	}catch(PDOException $HataBilgisi){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $HataBilgisi->grtMessage();
		die();
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->exec("TRUNCATE TABLE uyeler");
		if($Sorgu !== false){
			echo "Tablo İçeriği Boşaltıldı.";
		}else{
			echo "Sorgu Hatası.";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>