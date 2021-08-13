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
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	if(mysqli_connect_errno()){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
	}else{
		echo "Veritabanına Bağlantı Kuruldu.<br />";
	}
	
	$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "TRUNCATE TABLE deneme");
		if($Sorgu){
			echo "Tüm Tablo İçeriği Boşaltıldı / Sıfırlandı.";
		}else{
			echo "Sorgu Hatası";
		}
		
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>