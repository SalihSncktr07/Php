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
	chmod()		:	Belirtilecek olan değer ve izin doğrultusunda, ilgili kaynağın dosya / dizin erişim izinlerini ayarlamak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
	*/
	
	$Dizin			=	"Resimler";
	
	$IslemYap		=	chmod($Dizin, 0777);
	
	if($IslemYap==1){
		$Izinler		=	fileperms($Dizin);

		echo "Erişim İzni Değeri : " . $Izinler . "<br />";

		$Bicimlendir	=	substr(sprintf("%o", $Izinler), -4);

		echo "Erişim İzni Değeri : " . $Bicimlendir;
	}else{
		echo "chmod() ayarı uygulanamadı.";
	}
	
	?>
</body>
</html>