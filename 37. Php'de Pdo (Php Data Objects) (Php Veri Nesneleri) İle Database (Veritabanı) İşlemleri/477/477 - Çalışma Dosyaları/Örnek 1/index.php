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
	beginTransaction()	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda otomatik işleyen geçici işlem yapılarını açmak veya kapatmak için kullanılır.
	commit()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda daha önceden beginTransaction() metodu kullanılarak açılmış olan otomatik işleyen geçici işlem yapıları dahilinde işleme alınmış olan query'nin geçicilikten çıkarak kalıcı hale döndürülmesi için kullanılır.
	rollBack() 			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda daha önceden beginTransaction() metodu kullanılarak açılmış olan otomatik işleyen geçici işlem yapıları dahilinde işleme alınmış olan query'nin geçicilikten çıkarak işlemin geri alınması / iptal edilmesi için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $Hata->getMessage();
		die();
	}
	
	$VeritabaniBaglantisi->beginTransaction();
	
	$GuncelleBir			=	$VeritabaniBaglantisi->prepare("UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi-1000 WHERE id=1");
	$GuncelleBir->execute();
	$GuncelleBirKayitSayisi	=	$GuncelleBir->rowCount();
	
	$GuncelleIki			=	$VeritabaniBaglantisi->prepare("UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi+1000 WHERE id=3");
	$GuncelleIki->execute();
	$GuncelleIkiKayitSayisi	=	$GuncelleIki->rowCount();
	
	if(($GuncelleBirKayitSayisi>0) and ($GuncelleIkiKayitSayisi>0)){
		$VeritabaniBaglantisi->commit();
		echo "İşlemler Gerçekleştirildi.<br /><br />";
	}else{
		$VeritabaniBaglantisi->rollBack();
		echo "Sorgu Hatası.<br /><br />";
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->prepare("SELECT * FROM hesaplar");	
	$Sorgu->execute();
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->rowCount();
				if($KayitSayisi>0){
					foreach($Sorgu as $Kayitlar){
						echo $Kayitlar["id"] . " | " . $Kayitlar["adisoyadi"] . " | " . $Kayitlar["hesapbakiyesi"] . "<br />";
					}
				}else{
					echo "Kayıt Bulunmuyor.";
				}
		}else{
			echo "Sorgu Hatası.";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>