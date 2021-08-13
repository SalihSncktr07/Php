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
	DELETE	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırı / satırları silmek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $Hata->getMessage();
		die();
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
		if($Sorgu){
			$Sayi	=	$Sorgu->rowCount();
				if($Sayi>0){
					foreach($Sorgu as $Kayitlar){
						echo $Kayitlar["id"] . " | " . $Kayitlar["adisoyadi"] . " | " . $Kayitlar["emailadresi"] . " | " . $Kayitlar["sifre"] . " | " . $Kayitlar["telefon"] . " | " . $Kayitlar["yas"] . " | " . $Kayitlar["cinsiyet"] . " | " . $Kayitlar["sehir"] . " | " . $Kayitlar["kayittarihi"] . " <a href='sil.php?ID=" . $Kayitlar["id"] ."'>SİL</a><br />"; 
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