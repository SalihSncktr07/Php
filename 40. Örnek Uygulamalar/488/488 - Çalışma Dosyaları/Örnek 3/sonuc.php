<?php
require_once("baglan.php");

$GelenSecimDegerleri	=	$_POST["secim"];

foreach($GelenSecimDegerleri as $SilinecekDeger){
	$SilinecekID	=	Filtrele($SilinecekDeger);
	
	$Sil	=	$VeriTabaniBaglantisi->prepare("DELETE FROM kisiler WHERE id = ? LIMIT 1");
	$Sil->execute([$SilinecekID]);
}

header("Location:index.php");
exit();
?>