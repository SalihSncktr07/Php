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
	DROP DATABASE	:	MySQL sunucusu içerisinde bulunan herhangi bir database'i silmek için kullanılır.
	DROP TABLE		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloyu silmek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;charset=UTF8", "root", "");
		echo "Veritabanı Bağlantısı Kuruldu<br />";
	}catch(PDOException $HataDegeri){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $HataDegeri->getMessage();
		die();
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("DROP DATABASE test");
		if($Sorgu){
			echo "Database Silindi.";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>