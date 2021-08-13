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
	mysqli_real_escape_string()		:	Belirtilecek olan içerikte bulunabilecek olan tüm özel karakterlerin (\, ', ") önüne \ (ters slash) işareti yani kaçırma operatörü ekler ve sade bir metin içeriği oluşturarak, oluşturduğu değeri geriye döndürür.
	real_escape_string()			:	Belirtilecek olan içerikte bulunabilecek olan tüm özel karakterlerin (\, ', ") önüne nesensel yapı ile \ (ters slash) işareti yani kaçırma operatörü ekler ve sade bir metin içeriği oluşturarak, oluşturduğu değeri geriye döndürür.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	
	$Deger	=	"Extra Eğitim - Volkan Alakent - A'dan Z'ye PHP Görsel Eğitim Seti - 32\" Monitör - Birde \ yazıyım.";
	echo $Deger . "<br />";
	
	$Islem	=	$VeritabaniBaglantisi->real_escape_string($Deger);
	echo $Islem;

	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>