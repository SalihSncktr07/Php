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
	mysqli_autocommit()		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda otomatik işleyen geçici işlem yapılarını açmak veya kapatmak için kullanılır.
	autocommit()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya nesnesel yapı ile işlem yapılacağı anda otomatik işleyen geçici işlem yapılarını açmak veya kapatmak için kullanılır.
	mysqli_commit()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda önceden mysqli_autocommit() metodu kullanılarak açılmış olan otomatik işleyen geçici işlem yapıları dahilinde işleme alınmış olan query'nin (sorgunun) geçicilikten çıkartılarak kalıcı hale döndürülmek için kullanılır.
	commit()				:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya nesnesel yapı ile işlem yapılacağı anda önceden mysqli_autocommit() metodu kullanılarak açılmış olan otomatik işleyen geçici işlem yapıları dahilinde işleme alınmış olan query'nin (sorgunun) geçicilikten çıkartılarak kalıcı hale döndürülmek için kullanılır.
	mysqli_rollback()		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda önceden mysqli_autocommit() metodu kullanılarak açılmış olan otomatik işleyen geçici işlem yapıları dahilinde işleme alınmış olan query'nin (sorgunun) geçicilikten çıkartılarak işlemin geri alınması / iptal edilmesi için kullanılır.
	rollback()				:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya nesnesel yapı ile işlem yapılacağı anda önceden mysqli_autocommit() metodu kullanılarak açılmış olan otomatik işleyen geçici işlem yapıları dahilinde işleme alınmış olan query'nin (sorgunun) geçicilikten çıkartılarak işlemin geri alınması / iptal edilmesi için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	
	$VeritabaniBaglantisi->autocommit(FALSE);
	
	$SorguBir		=	$VeritabaniBaglantisi->query("UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi-3000 WHERE id=1");
	$SorguIki		=	$VeritabaniBaglantisi->query("UPDATE hesaplar SET hesapxxxbakiyesi=hesapbakiyesi+3000 WHERE id=3");
	
	if($SorguBir and $SorguIki){
		$VeritabaniBaglantisi->commit();
		echo "İşlem Tamamlandı";
	}else{
		$VeritabaniBaglantisi->rollback();
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>