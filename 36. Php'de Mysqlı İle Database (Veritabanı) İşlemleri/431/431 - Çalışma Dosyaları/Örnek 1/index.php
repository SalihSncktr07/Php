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
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
	}else{
		echo "Veritabanına Bağlanıldı<br />";
	}
	
	$SorguA		=	mysqli_query($VeritabaniBaglantisi, "CHECK TABLE uyeler");
	$SorguB		=	mysqli_query($VeritabaniBaglantisi, "ANALYZE TABLE uyeler");
	$SorguC		=	mysqli_query($VeritabaniBaglantisi, "REPAIR TABLE uyeler");
	$SorguD		=	mysqli_query($VeritabaniBaglantisi, "OPTIMIZE TABLE uyeler");
		if(($SorguA == true) and ($SorguB == true) and ($SorguC == true) and ($SorguD == true)){
			echo "Tablo Bakımı Yapıldı";
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>