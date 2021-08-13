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
	
	$Sorgu 	=	$VeritabaniBaglantisi->query("SHOW TABLES");
		if($Sorgu){
			foreach($Sorgu as $Tablolar){
				$SorguA		=	$VeritabaniBaglantisi->query("CHECK TABLE " . $Tablolar[0]);
				$SorguB		=	$VeritabaniBaglantisi->query("ANALYZE TABLE " . $Tablolar[0]);
				$SorguC		=	$VeritabaniBaglantisi->query("REPAIR TABLE " . $Tablolar[0]);
				$SorguD		=	$VeritabaniBaglantisi->query("OPTIMIZE TABLE " . $Tablolar[0]);

				if(($SorguA == true) and ($SorguB == true) and ($SorguC == true) and ($SorguD == true)){
					echo $Tablolar[0] . " İsimli Tablo Bakımı Yapıldı.<br />";
				}else{
					echo "Sorgu Hatası.";
				}
			}
		}else{
			echo "Sorgu Hatası.";
		}
	
	$VeritabaniBaglantisi	=	null;
	?>
</body>
</html>