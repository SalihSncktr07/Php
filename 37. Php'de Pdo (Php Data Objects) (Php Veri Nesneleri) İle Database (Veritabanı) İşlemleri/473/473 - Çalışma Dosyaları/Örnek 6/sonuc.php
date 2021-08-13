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
	
	$GelenIDDegeri					=	$_POST["KayitIDsi"];
	$GelenIsimDegeri				=	$_POST["isim"];
	$GelenYas						=	$_POST["yas"];
	$GelenBecerilerDegeri			=	$_POST["beceriler"];
	$GelenBeceriSeviyeleriDegeri	=	$_POST["beceriseviyeleri"];
	
	$Guncelle	=	$VeritabaniBaglantisi->exec("UPDATE kisiler SET isim='" . $GelenIsimDegeri . "', yas='" . $GelenYas . "', beceriler='" . $GelenBecerilerDegeri . "', beceriseviyeleri='" . $GelenBeceriSeviyeleriDegeri . "' WHERE id=" . $GelenIDDegeri);
		if($Guncelle !== false){
			header("Location:index.php");
			exit();
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi	=	null;
	
	?>
</body>
</html>