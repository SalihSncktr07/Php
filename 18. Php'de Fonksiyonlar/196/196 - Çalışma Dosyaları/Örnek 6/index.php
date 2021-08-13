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
	
	function IslemSonucuMesaji(){
		
		function TamamMesaji(){
			
			echo "İşleminiz Başarıyla Tamamlanmıştır.";
			
		}
		
		function HataMesaji(){
			
			echo "İşlem Sırasında Beklenmeyen Bir Hata Oluştu.";
			
		}
		
		function UyariMesaji(){
			
			echo "Dikkat; Yapılmaya Çalışılan İşlem Şuanda Aktif Değildir.";
			
		}
		
	}
	
	$Sonuc	=	"Tamam";

	if($Sonuc=="Tamam"){
		IslemSonucuMesaji();
		TamamMesaji();
	}elseif($Sonuc=="Dikkat"){
		IslemSonucuMesaji();
		UyariMesaji();
	}else{
		IslemSonucuMesaji();
		HataMesaji();
	}
	
	?>
</body>
</html>