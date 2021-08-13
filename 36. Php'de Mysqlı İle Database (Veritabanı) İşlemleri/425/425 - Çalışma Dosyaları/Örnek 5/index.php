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
	CREATE DATABASE		:	MySQL sunucusuna yeni bir database ekleme / oluşturma için kullanılır.
	CREATE TABLE		:	MySQL sunucusundaki database içerisie yeni bir tablo ekleme / oluşturma için kullanılır. Ayrıca istenirse herhangi bir tablo içeriklerini başka bir tabloyada kopyalamak için de kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Mesajı : " . mysqli_connect_error() . "<br />";
	}else{
		echo "Veritabanına Bağlantı Kuruldu<br />";
	}
	
	$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "CREATE TABLE deneme (
		id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		Adi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
		Soyadi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
		EmailAdresi varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL UNIQUE KEY,
		Durumu tinyint(1) UNSIGNED NOT NULL,
		KayitTarihi timestamp NOT NULL DEFAULT current_timestamp,
		YoneticiAciklamasi text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
	) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
		if($Sorgu){
			echo "Tablo Oluşturuldu";
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>