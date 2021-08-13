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
	COUNT 	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun toplam kayıt sayısını bulmak için kullanılır.
	MIN		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun en küçük kayıt değerini bulmak için kullanılır.
	MAX		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun en büyük kayıt değerini bulmak için kullanılır.
	SUM		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun tüm kayıt değerlerinin toplamını bulmak için kullanılır.
	AVG		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun tüm kayıt değerlerinin ortalamasını bulmak için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error();
		die();
	}
	
	$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT COUNT(id) AS ToplamSatir, MIN(siteyegirissayisi) AS MinimumSiteyeGirisSayisi, MAX(siteyegirissayisi) AS MakismumSiteyeGirisSayisi, AVG(yas) AS YasOrtalamasi, SUM(siparistoplamtutarlari) AS ToplamSiparislerTutari FROM kayitlar");
		if($Sorgu){
			$KayitSayisi	=	mysqli_num_rows($Sorgu);
				if($KayitSayisi>0){
					$Kayitlar	=	mysqli_fetch_assoc($Sorgu);
					
					echo "Toplam Kayıt Sayısı : " .$Kayitlar["ToplamSatir"] . "<br />";
					echo "Minimum Siteye Giriş Sayısı : " .$Kayitlar["MinimumSiteyeGirisSayisi"] . "<br />";
					echo "Maksimum Siteye Giriş Sayısı : " .$Kayitlar["MakismumSiteyeGirisSayisi"] . "<br />";
					echo "Yaş Ortalaması : " .$Kayitlar["YasOrtalamasi"] . "<br />";
					echo "Toplam Siparişler Tutarı : " .$Kayitlar["ToplamSiparislerTutari"];
				}else{
					echo "Kayıt Yok";
				}
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>