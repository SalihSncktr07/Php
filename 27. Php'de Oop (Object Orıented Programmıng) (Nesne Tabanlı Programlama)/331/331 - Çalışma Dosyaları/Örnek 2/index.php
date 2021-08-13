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
	spl_autoload_register()		:	Döküman içerisinde belirtilecek olan sınıfın bulunmaması durumunda, belirtilecek olan parametreye göre bir sınıf dökümanını otomatik olarak belgeye dahil etmek / yüklemek için kullanılır.
	*/
	
	function KutuphaneleriCalistir($ParametreDegeri){
		
		$DosyaAdi	=	$ParametreDegeri . ".php";
		
		require_once($DosyaAdi);
		
	}
	
	function ModelleriCalistir($ParametreDegeri){
		
		$DosyaAdi	=	$ParametreDegeri . ".php";
		
		require_once($DosyaAdi);
		
	}
	
	function KontrolleriCalistir($ParametreDegeri){
		
		$DosyaAdi	=	$ParametreDegeri . ".php";
		
		require_once($DosyaAdi);
		
	}
	
	spl_autoload_register("KutuphaneleriCalistir");
	spl_autoload_register("ModelleriCalistir");
	spl_autoload_register("KontrolleriCalistir");
	
	$Bir	=	new Kutuphaneler;
	echo $Bir->Deger . "<br />";
	
	$Iki	=	new Modeller;
	echo $Iki->Deger . "<br />";
	
	$Uc		=	new Kontroller;
	echo $Uc->Deger . "<br />";
	
	?>
</body>
</html>