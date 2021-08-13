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
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;charset=UTF8", "root", "");
		echo "Veritabanı Bağlantısı Kuruldu<br />";
	}catch(PDOException $HataMesaji){
		echo "Vetitabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->getMessage();
		die();
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("CREATE DATABASE deneme");
		if($Sorgu){
			echo "Database Oluşturuldu.";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>