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
	REPLACE 	:	MySQL sunucusundaki database içerinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırındaki / satırlarındaki süruna ait veriyi tam veya kısmi olarak değiştirmek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		echo "Bağlantı Hatası<br />";
		echo "Açıklama Metni : " . $Hata->getMessage();
		die();
	}
	
	$Degistir	=	$VeritabaniBaglantisi->query("UPDATE yorumlar SET yorummetni=REPLACE(yorummetni, '\n', '<br />') WHERE id=2");
		if($Degistir){
			echo "Değerler Değiştirildi";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>