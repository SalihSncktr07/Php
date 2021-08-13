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
	mysqli_fetch_object()	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm verilerini nesne halinde okumak için kullanılır.
	fetch_object()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun nesnesel yapı ile tüm verilerini nesne halinde okumak için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error . "<br />";
		die();
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("SELECT * FROM kisiler");
		if($Sorgu){
			$Kayit		=	$Sorgu->fetch_object();
			
			echo "<pre>";
			print_r($Kayit);
			echo "</pre>";
			
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>