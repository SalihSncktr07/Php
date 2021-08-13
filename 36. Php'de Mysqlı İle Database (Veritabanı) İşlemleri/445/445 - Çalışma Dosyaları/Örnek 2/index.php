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
	mysqli_insert_id()	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt eklendiğinde, eklenen son kaydın id değerini / verisini bulmak için kullanılır.
	insert_id			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya nesnesel yapı ile yeni bir kayıt eklendiğinde, eklenen son kaydın id değerini / verisini bulmak için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " .$VeritabaniBaglantisi->connect_error;
		die();
	}
	
	$Ekle		=	$VeritabaniBaglantisi->query("INSERT INTO uyeler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values ('Ali Veli', 'ali@extraegitim.com', '8888', '05380000000', '18', 'Erkek', 'Ordu')");
		if($Ekle){
			echo "Kayıt Başarıyla Yapıldı.<br />";
			echo "Eklenen Kaydın IDsi : " . $VeritabaniBaglantisi->insert_id;
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>