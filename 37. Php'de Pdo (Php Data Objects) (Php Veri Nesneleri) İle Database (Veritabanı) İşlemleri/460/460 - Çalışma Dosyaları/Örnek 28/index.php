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
	ALTER TABLE				:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütun ekleneceğini, herhangi bir sütunun silineceğini veya herhangi bir sütunun adının yada yapısının değiştirileceğini belirtmek için kullanılır.
	ADD / ADD COLUMN		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütun eklemek için kullanılır.
		FIRST 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya eklenecek olan yeni sütunun, diğer tüm sütunların en başına eklenmesi gerektiğini belirtmek için kullanılır.
		AFTER 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya eklenecek olan yeni sütunun, belirtilecek olan sütundan bir sonra eklenmesi gerektiğini belirtmek için kullanılır.
	CHANGE / CHANGE COLUMN	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun adını yada yapısını değiştirmek için kullanılır.
	MODIFY / MODIFY COLUMN	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun yapısını değiştirmek için kullanılır.
	DROP / DROP COLUMN		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunu silmek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
		echo "Bağlantı Sağlandı<br />";
	}catch(PDOException $HataDegeri){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $HataDegeri->getMessage();
		die();
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("ALTER TABLE uyeler
		DROP dogdugunuzay,
		DROP sitemizineredenduydunuz
	");
		if($Sorgu){
			echo "Sütunlar silindi";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>