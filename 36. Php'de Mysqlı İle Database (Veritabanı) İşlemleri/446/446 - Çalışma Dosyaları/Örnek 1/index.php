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
	UPDATE 	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırdaki sütuna / sütunlara ait veriyi / verileri guncellemek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Sorunu<br />";
		echo "Hata Açıklaması : " . mysqli_connect_errno();
		die();
	}
	
	$Guncelle	=	mysqli_query($VeritabaniBaglantisi, "UPDATE uyeler SET adisoyadi='A1', emailadresi='A2', sifre='A3', telefon='A4', yas='99', cinsiyet='A5', sehir='A6'");
	// DİKKAT BU SORGUDA TABLODAKİ TÜM KAYITLAR GÜNCELLENECEKTİR.
		if($Guncelle){
			echo "Kayıtlar Güncellendi";
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>