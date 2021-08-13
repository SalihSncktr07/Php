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
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error();
		die();
	}
	
	$Deger	=	"Extra Eğitim - Volkan Alakent - A'dan Z'ye PHP Görsel Eğitim Seti - 32\" Monitör - Birde \ yazıyım.";
	echo $Deger . "<br />";
	
	$Islem	=	mysqli_real_escape_string($VeritabaniBaglantisi, $Deger);
	echo $Islem;

	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>