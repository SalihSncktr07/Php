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
	INSERT INTO		:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisinin de / verilerini de eklemek için kullanılır.
	*/
	
	$VeritabaniBaglantisi	=	new mysqli("localhost", "root", "", "extraegitim");
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	
	$Gelenadisoyadi		=	$_POST["adisoyadi"];
	$Gelenemail			=	$_POST["email"];
	$Gelensifre			=	$_POST["sifre"];
	$Gelenyas			=	$_POST["yas"];
	$Gelentelefon		=	$_POST["telefon"];
	$Gelencinsiyet		=	$_POST["cinsiyet"];
	$Gelensehir			=	$_POST["sehir"];
	
	$Ekle	=	$VeritabaniBaglantisi->query("INSERT INTO uyeler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values ('$Gelenadisoyadi', '$Gelenemail', '$Gelensifre', '$Gelentelefon', '$Gelenyas', '$Gelencinsiyet', '$Gelensehir')");
		if($Ekle){
			header("Location:index.php");
			exit();
		}else{
			echo "Sorgu Hatası<br /><br />";
		}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>