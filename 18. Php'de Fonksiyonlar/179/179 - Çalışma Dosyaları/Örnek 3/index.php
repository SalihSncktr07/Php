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
	
	$Isim		=	"Volkan ";
	$Soyisim	=	"Alakent";
	
	function Yaz(){
		global $Isim;
		global $Soyisim;
		echo $Isim . $Soyisim;
	}
	
	Yaz();
	
	?>
</body>
</html>