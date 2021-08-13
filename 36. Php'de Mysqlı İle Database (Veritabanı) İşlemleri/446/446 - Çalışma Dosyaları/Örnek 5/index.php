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
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Sorunu<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_errno;
		die();
	}
	
	$Guncelle	=	$VeritabaniBaglantisi->query("UPDATE uyeler SET adisoyadi='A1', emailadresi='A2', sifre='A3', telefon='A4', yas='99', cinsiyet='A5', sehir='A6' WHERE id=1");
		if($Guncelle){
			echo "Kayıt Güncellendi";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>