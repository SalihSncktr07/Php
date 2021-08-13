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
	SHOW TABLES		:	MySQL sunucusundaki database içerisinde bulunan tüm tabloların listesini bulmak için kullanılır.
	SHOW COLUMNS	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm sütunlarının listesini bulmak için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_errno . "<br />";
	}else{
		echo "Veritabanına Bağlantı Kuruldu<br />";
	}
	
	$SorguA	=	$VeritabaniBaglantisi->query("SHOW TABLES");
		if($SorguA){
			while($TabloAdi=$SorguA->fetch_array()){
				echo "Tablo Adı : " . $TabloAdi[0] . "<br />";
			
				$SorguB	=	$VeritabaniBaglantisi->query("SHOW COLUMNS FROM " . $TabloAdi[0]);
					if($SorguB){
						while($SutunAdi=$SorguB->fetch_array()){
							echo "Sütün Adı : " . $SutunAdi[0] . "<br />";
						}
						echo "<br />";
					}else{
						echo "Sorgu Hatası";
					}
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>