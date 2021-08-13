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
	WHERE 	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun işlem esnasında tüm verilerini işlemek yerine sadece koşula bağlı verilerin işlemek istenildiğini belirtmek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $HataDegeri){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $HataDegeri->getMessage();
		die();
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM kisiler WHERE (yas=35 OR yas=40) AND beceriler LIKE '%Javascript%'", PDO::FETCH_ASSOC);
		if($Sorgu){
			foreach($Sorgu as $Satirlar){
				echo $Satirlar["id"] . " | " . $Satirlar["isim"] . " | " . $Satirlar["yas"] . " | " . $Satirlar["beceriler"] . " | " . $Satirlar["beceriseviyeleri"] . "<br />";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>