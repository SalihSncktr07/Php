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
	
	$GelenIsimDegeri			=	$_GET["Isim"];
	$GelenSoyisimDegeri			=	$_GET["Soyisim"];
	$GelenMailAdresiDegeri		=	$_GET["MailAdresi"];
	$GelenTelefonDegeri			=	$_GET["Telefon"];
	
	echo "Adınız : " . $GelenIsimDegeri . "<br />";
	echo "Soyadınız : " . $GelenSoyisimDegeri . "<br />";
	echo "E-Mail Adresiniz : " . $GelenMailAdresiDegeri . "<br />";
	echo "Telefon : " . $GelenTelefonDegeri . "<br /><br /><br /><br /><br />";
	
	$GelenTumDegerler			=	$_GET;
	
	echo "<pre>";
	print_r($GelenTumDegerler);
	echo "</pre>";
	
	foreach($GelenTumDegerler as $Anahtar => $Icerik){
		echo $Anahtar . " : " . $Icerik . "<br />";
	}
	
	?>
</body>
</html>