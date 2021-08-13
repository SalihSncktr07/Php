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
	UPDATE 	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırdaki sütuna / sütunlara ait veriyi / verileri guncellemek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Sorunu<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_errno;
		die();
	}
	
	$GelenIDDegeri			=	$_GET["id"];
	$GelenadisoyadiDegeri	=	$_POST["adisoyadi"];
	$GelenemailadresiDegeri	=	$_POST["emailadresi"];
	$GelensifreDegeri		=	$_POST["sifre"];
	$GelentelefonDegeri		=	$_POST["telefon"];
	$GelenyasDegeri			=	$_POST["yas"];
	$GelencinsiyetDegeri	=	$_POST["cinsiyet"];
	$GelensehirDegeri		=	$_POST["sehir"];
	
	$Guncelle	=	$VeritabaniBaglantisi->query("UPDATE uyeler SET adisoyadi='$GelenadisoyadiDegeri', emailadresi='$GelenemailadresiDegeri', sifre='$GelensifreDegeri', telefon='$GelentelefonDegeri', yas='$GelenyasDegeri', cinsiyet='$GelencinsiyetDegeri', sehir='$GelensehirDegeri' WHERE id=" . $GelenIDDegeri);
		if($Guncelle){
			echo "Kayıt Güncellendi<br />";
			echo "<a href='index.php'>Ana Sayfaya Geri Dön</a>";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>