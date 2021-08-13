<?php
session_start();
?>
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
	
	$_SESSION["Kullanici"]	=	array("Adi" => "Volkan", "Soyadi" => "Alakent", "EmailAdresi" => "info@extraegitim.com", "Telefonu" => "0535 225 51 44");
	$_SESSION["Sepet"]	=	array("ID" => 12, "SepetTutari" => 1200.50, "ParaBirimi" => "TL", "OdemeTuru" => "Banka Havalesi");
	
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
	?>
</body>
</html>