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
	UPDATE 		:	MySQL sunucusundaki database içerisinde bulunan herhangş bir tablonun herhangi bir kaydını içeren satırındaki sütuna / sütunlara ait veriyi / verileri güncellemek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $Hata->getMessage();
		die();
	}
	
	$Guncelle	=	$VeritabaniBaglantisi->exec("UPDATE kisiler SET isim='DERYA', yas='30', beceriler='SQL', beceriseviyeleri='95'");
		if($Guncelle !== false){
			echo "Kayıtlar Güncellendi";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>