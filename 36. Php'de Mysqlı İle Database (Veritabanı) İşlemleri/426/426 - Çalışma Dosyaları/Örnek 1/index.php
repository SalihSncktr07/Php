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
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
	}else{
		echo "Bağlantı Kuruldu<br />";
	}
	
	$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "RENAME TABLE text TO deneme");
		if($Sorgu){
			echo "Tablo adı güncellendi.";
		}else{
			echo "Sorgu hatası.";
		}
	
	mysqli_close($VeritabaniBaglantisi);	
	
	?>
</body>
</html>