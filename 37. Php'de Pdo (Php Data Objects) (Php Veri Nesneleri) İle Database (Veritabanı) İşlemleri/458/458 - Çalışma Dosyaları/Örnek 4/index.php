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
	RENAME 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun adını değiştirmek / güncellemek için kullanılır. Ayrıca istenirse herhangi bir tabloyu içerisinden bulunduğu database'den başka bir database'e taşımak içinde kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=test;charset=UTF8", "root", "");
		echo "Veritabanı Bağlantısı Kuruldu<br />";
	}catch(PDOException $HataDegeri){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $HataDegeri->getMessage();
		die();
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->exec("RENAME TABLE ornek TO volkan");
		if($Sorgu !== false){
			echo "Tablo Adı Değiştirildi.";
		}else{
			echo "Sorgu Hatası.";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>