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
	mysqli_query()		:	MySQL sunucusuna açılmış olan bir bağlantı dahilinde yeni bir sorgu yapmak için kullanılır. Ayrıca istenirse sorgu işlemi ile alakalı tüm bilgileri bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	query()				:	MySQL sunucusuna nesnesel yapı ile açılmış olan bir bağlantı dahilinde yeni bir sorgu yapmak için kullanılır. Ayrıca istenirse sorgu işlemi ile alakalı tüm bilgileri bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
	}else{
		echo "Bağlantı Sağlandı<br />";
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM kayitlar");
		if($Sorgu){
			echo "<pre>";
			print_r($Sorgu);
			echo "</pre>";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>