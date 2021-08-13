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
	ALTER TABLE					:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütun ekleneceğini, herhangi bir sütunun silineceğiniz veya herhangi bir sütunun adının yada yapısının değiştirileceğini belirtmek için kullanılır.
	ADD / ADD COLUMN			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütun eklemek için kullanılır.
		FIRST 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya eklenecek olan yeni sütunun, diğer tüm sütunların en başına eklenmesi gerektiğini belirtmek için kullanılır.
		AFTER 		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya eklenecek olan yeni sütunun, belirtilecek olan sütundan bir sonra eklenmesi gerektiğini belirtmek için kullanılır.
	CHANGE / CHANGE COLUMN		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun adını yada yapısını değiştirmek için kullanılır.
	MODIFY / MODIFY COLUMN		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun yapısını değiştirmek için kullanılır.
	DROP / DROP COLUMN			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunu silmek için kullanılır.
	*/
	
	$VeritabaniBaglantisi		=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı hatası<br />";
		echo "Hata açıklaması : " . $VeritabaniBaglantisi->connect_error . "<br />";
	}else{
		echo "Bağlantı kuruldu<br />";
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("ALTER TABLE deneme
		ADD cinsiyet varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL FIRST,
		ADD sehir varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL FIRST,
		ADD durumu tinyint(1) UNSIGNED NOT NULL FIRST
	");
		if($Sorgu){
			echo "Sütun eklendi";
		}else{
			echo "Sorgu hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>