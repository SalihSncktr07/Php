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
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
		die();
	}
	
	$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler");
		if($Sorgu){
			while($Kayit=mysqli_fetch_object($Sorgu)){
				echo "Kayıt ID Değeri : " . $Kayit->id . "<br />";
				echo "Kayıt İsim Değeri : " . $Kayit->isim . "<br />";
				echo "Kayıt Yaş Değeri : " . $Kayit->yas . "<br />";
				echo "Kayıt Beceriler Değeri : " . $Kayit->beceriler . "<br />";
				echo "Kayıt Beceri Seviyeleri Değeri : " . $Kayit->beceriseviyeleri . "<br /><br />";
			}
			
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	
	?>
</body>
</html>