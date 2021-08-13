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
	CHECK 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun kontrol edilmesi için kullanılır.
	ANALYZE		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun çözümlenmesi / analiz edilmesi için kullanılır.
	REPAIR 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun onarılması edilmesi için kullanılır.
	OPTIMIZE	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun optimize edilmesi için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
		echo "Bağlantı Kuruldu.<br />";
	}catch(PDOException $HataBilgisi){
		echo "Bağlantı Hatası.<br />";
		echo "Hata Açıklaması : " . $HataBilgisi->getMessage();
		die();
	}
	
	$SorguA		=	$VeritabaniBaglantisi->query("CHECK TABLE uyeler");
	$SorguB		=	$VeritabaniBaglantisi->query("ANALYZE TABLE uyeler");
	$SorguC		=	$VeritabaniBaglantisi->query("REPAIR TABLE uyeler");
	$SorguD		=	$VeritabaniBaglantisi->query("OPTIMIZE TABLE uyeler");
	
	if(($SorguA == true) and ($SorguB == true) and ($SorguC == true) and ($SorguD == true)){
		echo "Tablo Bakımı Yapıldı.";
	}else{
		echo "Sorgu Hatası.";
	}
	
	$VeritabaniBaglantisi	=	null;
	?>
</body>
</html>