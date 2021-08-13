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
	
	$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . mysqli_connect_error();
		die();
	}
	
	mysqli_autocommit($VeritabaniBaglantisi, FALSE);
	
	$SorguBir		=	mysqli_query($VeritabaniBaglantisi, "UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi-3000 WHERE id=1");
	$SorguIki		=	mysqli_query($VeritabaniBaglantisi, "UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi+3000 WHERE id=3");
	
	if($SorguBir and $SorguIki){
		mysqli_commit($VeritabaniBaglantisi);
		echo "İşlem Tamamlandı";
	}else{
		mysqli_rollback($VeritabaniBaglantisi);
		echo "Sorgu Hatası";
	}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>