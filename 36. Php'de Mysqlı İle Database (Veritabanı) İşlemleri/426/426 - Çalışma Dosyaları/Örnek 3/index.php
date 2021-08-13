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
	RENAME 	:	MySQL Sunucusundaki database içerisinde bulunan herhangi bir tablonun adını değiştirmek / güncellemek için kullanılır. Ayrıca istenirse herhangi bir tabloyu içerisinde bulunduğu database'den başka bir database'e taşımak için de kullanılabilir.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "volkanalakent");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error . "<br />";
	}else{
		echo "Bağlantı Kuruldu<br />";
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("RENAME TABLE deneme TO ornek");
		if($Sorgu){
			echo "Tablo adı güncellendi.";
		}else{
			echo "Sorgu hatası.";
		}
	
	$VeritabaniBaglantisi->close();	
	
	?>
</body>
</html>