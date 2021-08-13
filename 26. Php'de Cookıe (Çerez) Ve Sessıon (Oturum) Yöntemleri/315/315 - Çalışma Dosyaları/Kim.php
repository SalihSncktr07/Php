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
	
	$Isim		=	$_COOKIE["KullaniciAdi"];
	$Soysim		=	$_COOKIE["KullaniciSoyadi"];
	
	echo "Merhaba " . $Isim . " " . $Soysim . " nasılsın ?<br /><br />";
	
	?>
	
	<a href="index.php">Form'a Geri Dön</a>

</body>
</html>