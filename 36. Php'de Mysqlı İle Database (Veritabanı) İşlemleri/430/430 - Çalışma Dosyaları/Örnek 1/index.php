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
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	if(mysqli_connect_errno()){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_errno() . "<br />";
	}else{
		echo "Veritabanına Bağlantı Kuruldu<br />";
	}
	
	$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SHOW TABLES");
		if($Sorgu){
			while($TabloAdi=mysqli_fetch_array($Sorgu)){
				echo $TabloAdi[0] . "<br />";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>