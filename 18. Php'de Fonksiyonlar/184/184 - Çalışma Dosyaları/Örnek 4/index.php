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
	
	function IslemYap($Isim, $Soyisim, $DogumTarihi, $Yas, $Sehir, $Meslek, $Cinsiyet){
		$GelenIsim				=	$Isim;
		$GelenSoyisim			=	$Soyisim;
		$GelenDogumTarihi		=	$DogumTarihi;
		$GelenYas				=	$Yas;
		$GelenSehir				=	$Sehir;
		$GelenMeslek			=	$Meslek;
		$GelenCinsiyet			=	$Cinsiyet;
		
		$KisiKarti		=	"Adı : " . $GelenIsim . "<br />" . "Soyadi : " . $GelenSoyisim . "<br />" . "Doğum Tarihi : " . $GelenDogumTarihi . "<br />" . "Yaşı : " . $GelenYas . "<br />" . "Yaşadığı Şehir : " . $GelenSehir . "<br />" . "Cinsiyet : " . $Cinsiyet;
		
		return $KisiKarti;
	}
	
	$Islem1		=	IslemYap("Volkan", "Alakent", "08.12.1980", 38, "İstanbul", "Bilgisayar programlama ve yazılım geliştirme uzmanı", "Erkek");
	$Islem2		=	IslemYap("Onur", "Tatlı", "08.01.1983", 35, "İstanbul", "Supervisor", "Erkek");
	$Islem3		=	IslemYap("Banu", "Alakent", "23.12.1984", 34, "Trabzon", "Finans Müdür", "Kadın");
	
	echo $Islem2 . "<br /><br />";
	echo $Islem1 . "<br /><br />";
	echo $Islem3;
	
	?>
</body>
</html>