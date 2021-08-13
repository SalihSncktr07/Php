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
	
	echo "Kullanici ismindeki session değerleri : <br />";
	echo "Adı : " . $_SESSION["Kullanici"]["Adi"] . "<br />";
	echo "Soyadı : " . $_SESSION["Kullanici"]["Soyadi"] . "<br />";
	echo "E-Mail Adresi : " . $_SESSION["Kullanici"]["EmailAdresi"] . "<br />";
	echo "Cep Telefonu : " . $_SESSION["Kullanici"]["Telefonu"] . "<br /><br />";
	
	echo "Sepet ismindeki session değerleri : <br />";
	echo "ID : " . $_SESSION["Sepet"]["ID"] . "<br />";
	echo "Sepet Tutarı : " . $_SESSION["Sepet"]["SepetTutari"] . "<br />";
	echo "Para Birimi : " . $_SESSION["Sepet"]["ParaBirimi"] . "<br />";
	echo "Ödeme Türü : " . $_SESSION["Sepet"]["OdemeTuru"];
	
	?>
</body>
</html>