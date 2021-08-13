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
	
	$GelenDosyalar		=	$_FILES["Dosyalar"];
	
	/*
	echo "<pre>";
	print_r($GelenDosyalar);
	echo "</pre>";
	*/
	
	foreach($GelenDosyalar["tmp_name"] as $Anahtar => $Eleman){
		$AnahtarDegeri					=	$Anahtar;
		$DosyaAdiDegeri					=	$GelenDosyalar["name"][$Anahtar];
		$DosyaTuruDegeri				=	$GelenDosyalar["type"][$Anahtar];
		$DosyaGeciciDiziniVeAdiDegeri	=	$GelenDosyalar["tmp_name"][$Anahtar];
		$DosyaHataDegeri				=	$GelenDosyalar["error"][$Anahtar];
		$DosyaBoyutuDegeri				=	$GelenDosyalar["size"][$Anahtar];
		
		$DosyaYuklemeDiziniVeAdi		=	"Dosyalar/".$DosyaAdiDegeri;
		
		if(move_uploaded_file($DosyaGeciciDiziniVeAdiDegeri, $DosyaYuklemeDiziniVeAdi)){
			
			echo "Anahtar : " . $AnahtarDegeri . "<br />";
			echo "Dosya Adı : " . $DosyaAdiDegeri . "<br />";
			echo "Dosya Türü : " . $DosyaTuruDegeri . "<br />";
			echo "Dosya Geçici Dizini ve Temp Adı : " . $DosyaGeciciDiziniVeAdiDegeri . "<br />";
			echo "Dosya Hata Durumu : " . $DosyaHataDegeri . "<br />";
			echo "Dosya Boyutu : " . $DosyaBoyutuDegeri . "<br /><br />";
			
		}else{
			
			echo "Dosya Yükleme İşlemi Sırasında Hata Oluştu...!<br />";
			
		}
		
	}
	
	?>
</body>
</html>