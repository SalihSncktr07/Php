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
	CREATE DATABASE		:	MySQL sunucusuna yeni bir database ekleme / oluşturma için kullanılır.
	CREATE TABLE		:	MySQL sunucusundaki database içerisie yeni bir tablo ekleme / oluşturma için kullanılır. Ayrıca istenirse herhangi bir tablo içeriklerini başka bir tabloyada kopyalamak için de kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Mesajı : " . mysqli_connect_error() . "<br />";
	}else{
		echo "Veritabanına Bağlantı Kuruldu<br />";
	}
	
	$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "CREATE DATABASE volkanalakent CHARACTER SET utf8 COLLATE utf8_general_ci");
		if($Sorgu){
			echo "Veritabanı Oluşturuldu";
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>