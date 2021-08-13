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
	CHECK TABLE			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun kontrol edilmesini sağlar.
	ANALYZE TABLE		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun çözümlenmesi / analiz edilmesini sağlar.
	REPAIR TABLE		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun onarılmasını sağlar.
	OPTIMIZE TABLE		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun optimize edilmesini sağlar.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error . "<br />";
	}else{
		echo "Veritabanına Bağlanıldı<br />";
	}
	
	$SorguA		=	$VeritabaniBaglantisi->query("CHECK TABLE uyeler");
	$SorguB		=	$VeritabaniBaglantisi->query("ANALYZE TABLE uyeler");
	$SorguC		=	$VeritabaniBaglantisi->query("REPAIR TABLE uyeler");
	$SorguD		=	$VeritabaniBaglantisi->query("OPTIMIZE TABLE uyeler");
		if(($SorguA == true) and ($SorguB == true) and ($SorguC == true) and ($SorguD == true)){
			echo "Tablo Bakımı Yapıldı";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>