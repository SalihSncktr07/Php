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
	prepare()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre query hazırlamak için kullanılır.
	bindParam()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme prepare() metodu kullanılarak hazırlanmış olan query'yi derlemek için kullanılır.
	bindValue() 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme prepare() metodu kullanılarak hazırlanmış olan query'yi derlemek için kullanılır.
	PDO::PARAM_BOOL		:	Boolean
	PDO::PARAM_NULL		:	Null
	PDO::PARAM_INT		:	Integer
	PDO::PARAM_STR		:	String
	execute()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme prepare() metodu kullanılarak hazırlanmış olan query'yi çalıştırmak için kullanılır.
	fetch()				:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tekil veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış, execute() metodu kullanılarak çalıştırılmış ve sonuçları alınmış olan query'nin verilerini okumak için kullanılır. Ayrıca istenirse verilere erişim şeklide belirtilebilir.
	fetchAll()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun çoğul veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış, execute() metodu kullanılarak çalıştırılmış ve sonuçları alınmış olan query'nin verilerini okumak için kullanılır. Ayrıca istenirse verilere erişim şeklide belirtilebilir.
	FETCH_ASSOC 		:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sürun isimleri dizinin anahtarı olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
	FETCH_NUM 			:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili verilere sütun sıra numaraları ile erişilir.
	FETCH_BOTH 			:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hemde PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili verilere ister sütun isimleri ile ister sütun sıra numaraları ile erişilir.
	FETCH_OBJ 			:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun sürun isimleri nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $HataDegeri){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $HataDegeri->getMessage();
		die();
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE id>:IDninIlkKosulu AND id<:IDninSonKosulu");
	$Sorgu->execute(["IDninIlkKosulu" => 2, "IDninSonKosulu" => 6]);
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->rowCount();
				if($KayitSayisi>0){
					$Kayitlar 	=	$Sorgu->fetchAll();
						foreach($Kayitlar as $Deger){
							echo $Deger["id"] . " | " . $Deger["adisoyadi"] . " | " . $Deger["emailadresi"] . " | " . $Deger["sifre"] . " | " . $Deger["telefon"] . " | " . $Deger["yas"] . " | " . $Deger["cinsiyet"] . " | " . $Deger["sehir"] . " | " . $Deger["kayittarihi"] . "<br />";
						}
				}else{
					echo "Kayıt Yok";
				}			
			
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>