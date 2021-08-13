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
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error();
		die();
	}
	
	$Ekle		=	mysqli_query($VeritabaniBaglantisi, "INSERT INTO uyeler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values ('Demo Demo', 'demo@extraegitim.com', '1111111111', '05051111111', '63', 'Kadın', 'Kütahya')");
		if($Ekle){
			echo "Kayıt Başarıyla Yapıldı.<br />";
			echo "Eklenen Kaydın IDsi : " . mysqli_insert_id($VeritabaniBaglantisi);
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>