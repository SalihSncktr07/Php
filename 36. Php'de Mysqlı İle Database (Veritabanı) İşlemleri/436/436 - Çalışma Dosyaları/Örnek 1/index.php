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
	
	$VeritabaniBaglanti		=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglanti, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error();
		die();
	}
	
	$Sorgu		=	mysqli_query($VeritabaniBaglanti, "SELECT * FROM kisiler");
		if($Sorgu){
			while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
				echo $Kayitlar["id"] . "<br />";
				echo $Kayitlar["isim"] . "<br />";
				echo $Kayitlar["yas"] . "<br />";
				echo $Kayitlar["beceriler"] . "<br />";
				echo $Kayitlar["beceriseviyeleri"] . "<br /><br />";
			}
			
			mysqli_free_result($Sorgu);
			
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglanti);
	
	?>
</body>
</html>