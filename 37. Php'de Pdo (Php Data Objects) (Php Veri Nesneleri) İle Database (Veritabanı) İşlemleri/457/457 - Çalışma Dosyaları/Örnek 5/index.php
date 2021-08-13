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
	CREATE TABLE		:	MySQL sunucusundaki database içerisine yeni bir tablo ekleme / oluşturma için kullanılır. Ayrıca istenirse herhangi bir tablo içeriklerini başka bir tabloya kopyalamak için de kullanılabilir.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=test;charset=UTF8", "root", "");
		echo "Veritabanı Bağlantısı Kuruldu<br />";
	}catch(PDOException $HataMesaji){
		echo "Vetitabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->getMessage();
		die();
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("CREATE TABLE ornek (
		id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		adi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
		soyadi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
		emailadresi varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL UNIQUE KEY,
		durumu tinyint(1) UNSIGNED NOT NULL,
		kayittarihi timestamp NOT NULL DEFAULT current_timestamp,
		yoneticiaciklamasi text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
	)
	ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
		if($Sorgu){
			echo "Tablo Oluşturuldu.";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>