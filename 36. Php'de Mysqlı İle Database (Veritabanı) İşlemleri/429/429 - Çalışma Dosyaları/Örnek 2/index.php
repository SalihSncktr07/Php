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
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error . "<br />";
	}else{
		echo "Veritabanına Bağlantı Kuruldu.<br />";
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("TRUNCATE TABLE deneme");
		if($Sorgu){
			echo "Tüm Tablo İçeriği Boşaltıldı / Sıfırlandı.";
		}else{
			echo "Sorgu Hatası";
		}
		
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>