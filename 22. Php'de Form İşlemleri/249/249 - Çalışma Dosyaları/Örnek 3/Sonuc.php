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
	
	$GelenIsimDegeri			=	$_POST["Isim"];
	$GelenSoyisimDegeri			=	$_POST["Soyisim"];
	$GelenMailAdresiDegeri		=	$_POST["MailAdresi"];
	$GelenTelefonDegeri			=	$_POST["Telefon"];
	$GelenResimDegeri			=	$_FILES["Resim"];
	
	
	echo "Adınız : " . $GelenIsimDegeri . "<br />";
	echo "Soyadınız : " . $GelenSoyisimDegeri . "<br />";
	echo "E-Mail Adresiniz : " . $GelenMailAdresiDegeri . "<br />";
	echo "Telefon : " . $GelenTelefonDegeri . "<br /><br /><br /><br /><br />";
	
	$GelenTumDegerler			=	$_POST;
	
	echo "<pre>";
	print_r($GelenTumDegerler);
	echo "</pre>";
	
	foreach($GelenTumDegerler as $Anahtar => $Icerik){
		echo $Anahtar . " : " . $Icerik . "<br />";
	}
	
	echo "<br /><br /><br />";
	
	foreach($GelenResimDegeri as $ResimAnahtar => $ResimIcerik){
		echo $ResimAnahtar . " : " . $ResimIcerik . "<br />";
	}
	
	?>
</body>
</html>