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
	mysqli_affected_rows()	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya bağlanılarak işlem yapıldığında etkilenen kayıt sayısını bulmak için kullanılır.
	affected_rows			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya nesnesel yapı ile bağlanılarak işlem yapıldığında etkilenen kayıt sayısını bulmak için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası<br />Hata Açıklaması : " . mysqli_connect_error();
		die();
	}
	
	$Sorgu		=	mysqli_query($VeritabaniBaglantisi, "INSERT INTO uyeler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values ('Banu Alakent', 'banu@extraegitim.com', '123', '05320000000', '36', 'Kadın', 'Uşak'), ('Memduh Alakent', 'memduh@extraegitim.com', '8888', '02120000000', '56', 'Erkek', 'Denizli'), ('Mustafa Alakent', 'mustafa@extraegitim.com', '321', '03120000000', '43', 'Erkek', 'Çankırı')");
		if($Sorgu){
			echo "Ekleme İşlemleri Tamamlandı.<br />";
			echo "İşlemde Etkilenen Kayıt Sayısı : " . mysqli_affected_rows($VeritabaniBaglantisi);
	
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>