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
	lastInsertId() 	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayır eklendiğinde, eklenen son kaydın id değerini / verisini bulmak için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $Hata->getMessage();
		die();
	}
	
	$Ekle		=	$VeritabaniBaglantisi->exec("INSERT INTO sipariler (uyeid, urunadi, urunfiyati) values (3, 'Silgi', '5')");
		if($Ekle !== false){
			echo "Kayıt Eklendi<br />";
			echo "Eklenen Kaydın ID Değeri : " . $VeritabaniBaglantisi->lastInsertId() . "<br /><br /><br />";
		}else{
			echo "Sorgu Hatası<br /><br /><br />";
		}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM sipariler", PDO::FETCH_ASSOC);
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->rowCount();
				if($KayitSayisi>0){
					foreach($Sorgu as $Kayitlar){
						echo $Kayitlar["id"] . " | " . $Kayitlar["uyeid"] . " | " . $Kayitlar["urunadi"] . " | " . $Kayitlar["urunfiyati"] . "<br />";
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