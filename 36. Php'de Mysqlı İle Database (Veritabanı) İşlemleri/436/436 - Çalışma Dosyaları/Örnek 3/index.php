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
	mysqli_free_result()	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablo ile alakalı istenilen işlem / işlemler bittiğinde hafızayı boşaltmak için kullanılır.
	free_result()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablo ile alakalı nesnesel yapı ile istenilen işlem / işlemler bittiğinde hafızayı boşaltmak için kullanılır.
	free()					:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablo ile alakalı nesnesel yapı ile istenilen işlem / işlemler bittiğinde hafızayı boşaltmak için kullanılır.
	close()					:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablo ile alakalı nesnesel yapı ile istenilen işlem / işlemler bittiğinde hafızayı boşaltmak için kullanılır.
	*/
	
	$VeritabaniBaglanti		=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglanti->set_charset("UTF8");
	
	if($VeritabaniBaglanti->connect_errno){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglanti->connect_error;
		die();
	}
	
	$Sorgu		=	$VeritabaniBaglanti->query("SELECT * FROM kisiler");
		if($Sorgu){
			while($Kayitlar=$Sorgu->fetch_assoc()){
				echo $Kayitlar["id"] . "<br />";
				echo $Kayitlar["isim"] . "<br />";
				echo $Kayitlar["yas"] . "<br />";
				echo $Kayitlar["beceriler"] . "<br />";
				echo $Kayitlar["beceriseviyeleri"] . "<br /><br />";
			}
			
			$Sorgu->free();
			
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglanti->close();
	
	?>
</body>
</html>