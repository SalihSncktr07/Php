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
	prepare()		:	MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre query (sorgu) hazırlamak için kullanılır.
	bind_param()	:	MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'yi (sorguyu) derlemek için kullanılır.
		i 			:	integer
		d 			:	double
		s 			:	string
		b 			:	blob
	execute()		:	MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'yi (sorguyu) çalıştırmak için kullanılır.
	bind_result()	:	MySQL sunucusundaki database içerisinde bulunan herhangi tablonun veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış ve execute() metodu kullanılarak çalıştırılmış olan query'nin (sorgunun) sonuçlarını almak için kullanılır.
	fetch()			:	MySQL sunucusundaki database içerisinde bulunan herhangi tablonun veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış, execute() metodu kullanılarak çalıştırılmış ve bind_result() metodu kullanılarak sonuçları alınmış olan query'nin (sorgunun) verilerini okumak için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	
	$AdSoyad		=	'Volkan Alakent';
	$Email			=	'info@extraegitim.com';
	$Sifre			=	'08121980';
	$Telefon		=	'05352255144';
	$Yas			=	38;
	$Cinsiyet		=	'Erkek';
	$Sehir			=	'İstanbul';
	
	$Ekle		=	$VeritabaniBaglantisi->prepare("INSERT INTO uyeler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values (?, ?, ?, ?, ?, ?, ?)");
		if($Ekle){
			$Ekle->bind_param("ssssiss", $AdSoyad, $Email, $Sifre, $Telefon, $Yas, $Cinsiyet, $Sehir);
			$Ekle->execute();
				if($Ekle){
					echo "Kayıt Eklendi";
				}else{
					echo "Sorgu Hatası";
				}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>