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
	mysqli_fetch_array()	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm verilerini düzenli bir dizi halinde okumak için kullanılır.
	fetch_array()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun nesnesel yapı ile tüm verilerini düzenli bir dizi halinde okumak için kullanılır.
		MYSQLI_ASSOC 		:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarları olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
		MYSQLI_NUM	 		:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır ve ilgili verilere sütun sıra numaraları ile erişilir.
		MYSQLI_BOTH	 		:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hemde PHP tarafından otomatik olarak tanımlanır ve ilgili verilere ister sütun isimleri ile ister sütun sıra numaraları ile erişilir.
	*/
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
		die();
	}
	
	$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler");
		if($Sorgu){
			$Kayit	=	mysqli_fetch_array($Sorgu);
			
			echo "Kayıt ID Değeri : " . $Kayit[0] . "<br />";
			echo "Kayıt İsim Değeri : " . $Kayit[1] . "<br />";
			echo "Kayıt Yaş Değeri : " . $Kayit[2] . "<br />";
			echo "Kayıt Beceriler Değeri : " . $Kayit[3] . "<br />";
			echo "Kayıt Beceri Seviyeleri Değeri : " . $Kayit[4] . "<br />";
			
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>