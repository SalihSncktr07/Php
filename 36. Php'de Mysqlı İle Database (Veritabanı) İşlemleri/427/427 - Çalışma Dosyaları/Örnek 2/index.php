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
	DROP DATABASE	:	MySQL sunucusu içerisindeki herhangi bir database'i silmek için kullanılır.
	DROP TABLE		:	MySQL sunucusu içerisinde bulunan database içerisindeki herhangi bir tabloyu silmek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error . "<br />";
	}else{
		echo "Bağlantı Kuruldu<br />";
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("DROP DATABASE volkanalakent");
		if($Sorgu){
			echo "Veritabanı silindi.";
		}else{
			echo "Sorgu hatası.";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>