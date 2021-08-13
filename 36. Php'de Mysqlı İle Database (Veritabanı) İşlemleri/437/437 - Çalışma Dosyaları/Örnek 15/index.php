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
	LIMIT 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun işlem esnasında tüm verilerini işlemek yerine sadece belirtilen adet veya aralıklar kadar işlemek istenildiğini belirtmek için kullanılır.
	ORDER BY	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerine işlem esnasında hangi sıra / sıralar dahilinde erişilmek istenildiğini belirtmek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	
	$Sorgu		=	$VeritabaniBaglantisi->query("SELECT * FROM kisiler ORDER BY yas ASC, isim ASC");
		if($Sorgu){
			while($Kayitlar=$Sorgu->fetch_assoc()){
				echo "ID Değeri : " . $Kayitlar["id"] . "<br />";
				echo "İsim Değeri : " . $Kayitlar["isim"] . "<br />";
				echo "Yaş Değeri : " . $Kayitlar["yas"] . "<br />";
				echo "Beceriler Değeri : " . $Kayitlar["beceriler"] . "<br />";
				echo "Beceri Seviyeleri Değeri : " . $Kayitlar["beceriseviyeleri"] . "<br /><br />";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>