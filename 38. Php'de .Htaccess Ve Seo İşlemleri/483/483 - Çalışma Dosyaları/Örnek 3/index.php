<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
	Standart Menüler :<br />
	<a href="index.php?sayfa=Ali">Ana Sayfa</a> | 
	<a href="index.php?sayfa=Veli">Ürünler</a> | 
	<a href="index.php?sayfa=Hasan">Hakkımızda</a> | 
	<a href="index.php?sayfa=Huseyin">Sözleşmeler</a> | 
	<a href="index.php?sayfa=Volkan">İletişim</a><br /><br />
	
	Manipüle Menüler :<br />
	<a href="Ali">Ana Sayfa</a> | 
	<a href="Veli">Ürünler</a> | 
	<a href="Hasan">Hakkımızda</a> | 
	<a href="Huseyin">Sözleşmeler</a> | 
	<a href="Volkan">İletişim</a><br /><br />
	
	<?php
	if(isset($_GET["sayfa"])){
		$GelenSayfaDegeri	=	$_GET["sayfa"];
	}else{
		$GelenSayfaDegeri	=	"";
	}
	
	if($GelenSayfaDegeri=="Ali"){
		require_once("anasayfa.php");
	}elseif($GelenSayfaDegeri=="Veli"){
		require_once("urunler.php");
	}elseif($GelenSayfaDegeri=="Hasan"){
		require_once("hakkimizda.php");
	}elseif($GelenSayfaDegeri=="Huseyin"){
		require_once("sozlesmeler.php");
	}elseif($GelenSayfaDegeri=="Volkan"){
		require_once("iletisim.php");
	}
	?>
</body>
</html>