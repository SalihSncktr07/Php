<?php
require_once("baglan.php");

$GelenSecimDegerleri	=	$_POST["secim"];
$IDleriBirlestir		=	implode(", ", $GelenSecimDegerleri);
$IDler					=	Filtrele($IDleriBirlestir);

$Sil	=	$VeriTabaniBaglantisi->prepare("DELETE FROM kisiler WHERE id IN ($IDler)");
$Sil->execute();

header("Location:index.php");
exit();
?>m ö m