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
	
	function OtomatikCalistir($Deger){
		
		$DosyaAdi	=	$Deger . ".php";
		
		require_once($DosyaAdi);
		
	}
	
	spl_autoload_register("OtomatikCalistir");
	
	$Kim	=	new Sinif;
	echo $Kim->Bilgiler();
	
	?>
</body>
</html>