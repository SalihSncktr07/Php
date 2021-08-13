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
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
		echo "Bağlantı Kuruldu.<br />";
	}catch(PDOException $HataDegeri){
		echo "Bağlantı Hatası.<br />";
		echo "Hata Açıklaması : " . $HataDegeri->getMessage();
		die();
	}
	
	$SorguA		=	$VeritabaniBaglantisi->query("SHOW TABLES");
		if($SorguA){
			echo "Database İçerisinde Bulunan Tüm Tablolar :<br />";
			foreach($SorguA as $Tablolar){
				echo "Tablo Adı : " . $Tablolar[0] . "<br />";
				
				$SorguB		=	$VeritabaniBaglantisi->query("SHOW COLUMNS FROM " . $Tablolar[0]);
					foreach($SorguB as $Sutunlar){
						echo "Sütun Adı : " . $Sutunlar[0] . "<br />";
					}
				echo "<br />";
			}
		}else{
			echo "Sorgu Hatası.";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>