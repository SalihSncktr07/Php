<?php
$GelenAdiSoyadi		=	$_POST["AdiSoyadi"];
$GelenEmailAdresi	=	$_POST["EmailAdresi"];
$GelenTelefon		=	$_POST["Telefon"];
$GelenCinsiyet		=	$_POST["Cinsiyet"];
$GelenYas			=	$_POST["Yas"];

echo "Adınız : " . $GelenAdiSoyadi . "<br />";
echo "E-Mail Adresiniz : " . $GelenEmailAdresi . "<br />";
echo "Telefonunuz : " . $GelenTelefon . "<br />";
echo "Cinsiyetiniz : " . $GelenCinsiyet . "<br />";
echo "Yaşınız : " . $GelenYas;
?>