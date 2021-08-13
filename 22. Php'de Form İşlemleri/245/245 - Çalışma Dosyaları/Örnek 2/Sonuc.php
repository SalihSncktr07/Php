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
	
	$DosyaninAdi			=	$GelenDosya["name"];
	$DosyaninTuru			=	$GelenDosya["type"];
	$DosyaninTempAdi		=	$GelenDosya["tmp_name"];
	$DosyaninHataDurumu		=	$GelenDosya["error"];
	$DosyaninBoyutu			=	$GelenDosya["size"];
	
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