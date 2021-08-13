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
	exec()	:	MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işleminde etkilenen kayıt sayısını bulmak için kullanılır.
	query()	:	MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işlemi sonucunda dönen tüm veri değerlerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
		FETCH_ASSOC :	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarları olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
		FETCH_NUM 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili verilere sütun sıra numaraları ile erişilir.
		FETCH_BOTH 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hemde PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili verilere ister sütun isimleri ile ister sütun sıra numaraları ile erişilir.
		FETCH_OBJ 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun sütun isimleri nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
		echo "Veritabanına Bağlantı Kuruldu<br />";
	}catch(PDOException $Hata){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->getMessage();
		die();
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("SELECT * FROM uyeler");
	
	echo "<pre>";
	print_r($Sorgu);
	echo "</pre>";
	
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>