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
	query()		:	MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işlemi sonucunda dönen tüm veri değerlerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	fetch()		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tekil veri okuma işlemi için query metodu kullanılarak hazırlanmış olan query'in verilerini okumak için kullanılır. Ayrıca istenirse verilere erişim şeklide belirtilebir.
	fetchAll()	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun çoğul veri okuma işlemi için query metodu kullanılarak hazırlanmış olan query'in verilerini okumak için kullanılır. Ayrıca istenirse verilere erişim şeklide belirtilebir.
		FETCH_ASSOC 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarları olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
		FETCH_NUM	 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili verilere sütun sıra numaraları ile erişilir.
		FETCH_BOTH	 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hemde PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili verilere ister ütun isimleri ile ister sütun sıra numaraları ile erişilir.
		FETCH_OBJ	 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun sütun isimleri nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
		
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $HataDegeri){
		echo "Bağlantı Hatası.<br />";
		echo "Hata Açıklaması : " . $HataDegeri->getMessage();
		die();
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM kisiler")->fetch(PDO::FETCH_NUM);
		if($Sorgu){
			echo "ID : " . $Sorgu[0] . "<br />";
			echo "İSİM : " . $Sorgu[1] . "<br />";
			echo "YAŞ : " . $Sorgu[2] . "<br />";
			echo "BECERİLER : " . $Sorgu[3] . "<br />";
			echo "BECERİ SEVİYELERİ : " . $Sorgu[4] . "<br /><br />";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>