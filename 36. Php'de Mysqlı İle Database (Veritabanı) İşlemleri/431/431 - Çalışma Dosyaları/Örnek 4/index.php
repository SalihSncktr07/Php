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
	
	$Sorgu	=	$VeritabaniBaglantisi->query("SHOW TABLES");
		if($Sorgu){
			while($TabloAdi=$Sorgu->fetch_array()){
				$SorguA		=	$VeritabaniBaglantisi->query("CHECK TABLE " . $TabloAdi[0]);
				$SorguB		=	$VeritabaniBaglantisi->query("ANALYZE TABLE " . $TabloAdi[0]);
				$SorguC		=	$VeritabaniBaglantisi->query("REPAIR TABLE " . $TabloAdi[0]);
				$SorguD		=	$VeritabaniBaglantisi->query("OPTIMIZE TABLE " . $TabloAdi[0]);
					if(($SorguA == true) and ($SorguB == true) and ($SorguC == true) and ($SorguD == true)){
						echo $TabloAdi[0] . " İsimli Tablonun Bakımı Yapıldı<br />";
					}else{
						echo "Sorgu Hatası<br />";
					}
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>