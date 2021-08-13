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
	settype()	:	Herhangi bir değişken içeriğinin veri türünü belirlemek / değiştirmek için kullanılır.
	*/
	
	$Deger						=	"Volkan Alakent";
	$DegerIcerigininIlkVeriTuru	=	gettype($Deger);
	
	echo "İçeriğin İlk Hali : " . $Deger . "<br />";
	echo "İçeriğin İlk Halinin Veri Türü : " . $DegerIcerigininIlkVeriTuru . "<br /><br />";
	
	settype($Deger, "boolean");
	
	$DegerIcerigininSonVeriTuru	=	gettype($Deger);
	
	echo "İçeriğin Son Hali : " . $Deger . "<br />";
	echo "İçeriğin Son Halinin Veri Türü : " . $DegerIcerigininSonVeriTuru;
	
	?>
</body>
</html>