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
	<a href="index.php?sayfa=AnaSayfa">Ana Sayfa</a> | 
	<a href="index.php?sayfa=Urunler">Ürünler</a> | 
	<a href="index.php?sayfa=Hakkimizda">Hakkımızda</a> | 
	<a href="index.php?sayfa=Sozlesmeler">Sözleşmeler</a> | 
	<a href="index.php?sayfa=Iletisim">İletişim</a><br /><br />
	
	Manipüle Menüler :<br />
	<a href="AnaSayfa">Ana Sayfa</a> | 
	<a href="Urunler">Ürünler</a> | 
	<a href="Hakkimizda">Hakkımızda</a> | 
	<a href="Sozlesmeler">Sözleşmeler</a> | 
	<a href="Iletisim">İletişim</a><br /><br />
	
	<?php
	if(isset($_GET["sayfa"])){
		$GelenSayfaDegeri	=	$_GET["sayfa"];
	}else{
		$GelenSayfaDegeri	=	"";
	}
	
	if($GelenSayfaDegeri=="AnaSayfa"){
		require_once("anasayfa.php");
	}elseif($GelenSayfaDegeri=="Urunler"){
		require_once("urunler.php");
	}elseif($GelenSayfaDegeri=="Hakkimizda"){
		require_once("hakkimizda.php");
	}elseif($GelenSayfaDegeri=="Sozlesmeler"){
		require_once("sozlesmeler.php");
	}elseif($GelenSayfaDegeri=="Iletisim"){
		require_once("iletisim.php");
	}
	?>
</body>
</html>