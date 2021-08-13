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
	set_charset()		:	Kendisine parametre olarak verilen değer doğrultusunda, daha önceden nesnesel yapı ile açılmış olan MySQL bağlantısına vrasayılan istemci karakter setini atamak / tanımlamak için kullanılır.
	select_db()			:	Kendisine parametre olarak verilen değer doğrultusunda, daha önceden nesnesel yapı ile açılmış olan MySQL bağlantısı üzerinden istenilen veritabanını seçmek için kullanılır.
	connect_errno		:	MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hata kodu değerini bularak, bulduğu değeri geriye döndürür.
	connect_error		:	MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hata açıklama değerini bularak, bulduğu değeri geriye döndürür.
	close()				:	Daha önceden nesnesel yapı ile açılmış olan MySQL bağlantısını kapatmak / sonlandırmak için kullanılır.
	*/
	
	$VeritabaniHostAdresi		=	"localhost";
	$VeritabaniKullaniciAdi		=	"root";
	$VeritabaniSifresi			=	"";
	$VeritabaniAdi				=	"extraegitim";
	
	$VeritabaniBaglantisi		=	new mysqli($VeritabaniHostAdresi, $VeritabaniKullaniciAdi, $VeritabaniSifresi, $VeritabaniAdi);
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	echo "<pre>";
	print_r($VeritabaniBaglantisi);
	echo "</pre>";
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>