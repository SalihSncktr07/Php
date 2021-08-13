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
	INSERT INTO		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisini de / verilerini de eklemek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		echo "Bağlantı Hatası";
		echo "Hata Açıklaması : " . $Hata->getMessage();
		die();
	}
	
	$Ekle		=	$VeritabaniBaglantisi->query("INSERT INTO kisiler (isim, yas, beceriler, beceriseviyeleri) values ('Ali', '17', 'Html5', '60')");
		if(!$Ekle){
			echo "Sorgu Hatası<br /><br />";
		}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM kisiler", PDO::FETCH_ASSOC);
		if($Sorgu){
			$KayitSayisi	=	$Sorgu->rowCount();
				if($KayitSayisi>0){
					foreach($Sorgu as $Satirlar){
						echo $Satirlar["id"] . " | " . $Satirlar["isim"] . " | " . $Satirlar["yas"] . " | " . $Satirlar["beceriler"] . " | " . $Satirlar["beceriseviyeleri"] . "<br />";
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