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
	
	$GelenDosya				=	$_FILES["Dosya"];
	
	$DosyaninAdi			=	$_FILES["Dosya"]["name"];
	$DosyaninTuru			=	$_FILES["Dosya"]["type"];
	$DosyaninTempAdi		=	$_FILES["Dosya"]["tmp_name"];
	$DosyaninHataDurumu		=	$_FILES["Dosya"]["error"];
	$DosyaninBoyutu			=	$_FILES["Dosya"]["size"];
	
	$Yol					=	"Resimler/";
	
	$DosyaYoluVeAdi			=	$Yol.$DosyaninAdi;
	
	if(move_uploaded_file($DosyaninTempAdi, $DosyaYoluVeAdi)){
		echo "Dosya Başarıyla Yüklendi.<br />";
		echo "Dosyanın Adı : " . $DosyaninAdi . "<br />";
		echo "Dosyanın Türü : " . $DosyaninTuru . "<br />";
		echo "Dosyanın Geçici Dizini ve Adı : " . $DosyaninTempAdi . "<br />";
		echo "Dosyanın Hata Durumu : " . $DosyaninHataDurumu . "<br />";
		echo "Dosyanın Boyutu : " . $DosyaninBoyutu . "<br />";
		echo "<img src='{$DosyaYoluVeAdi}'>";
	}else{
		echo "Dosya yükleme sırasında bilinmeyen bir hata oluştu.";
	}
	
	?>
</body>
</html>