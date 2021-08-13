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
			
			return "İşleminiz Başarıyla Tamamlanmıştır.";
			
		}
		
		function HataMesaji(){
			
			return "İşlem Sırasında Beklenmeyen Bir Hata Oluştu.";
			
		}
		
		function UyariMesaji(){
			
			return "Dikkat; Yapılmaya Çalışılan İşlem Şuanda Aktif Değildir.";
			
		}
		
	}
	
	$Sonuc	=	"Dikkat";

	if($Sonuc=="Tamam"){
		IslemSonucuMesaji();
		$Mesaj	=	TamamMesaji();
		echo $Mesaj;
	}elseif($Sonuc=="Dikkat"){
		IslemSonucuMesaji();
		$Mesaj	=	UyariMesaji();
		echo $Mesaj;
	}else{
		IslemSonucuMesaji();
		$Mesaj	=	HataMesaji();
		echo $Mesaj;
	}
	
	?>
</body>
</html>