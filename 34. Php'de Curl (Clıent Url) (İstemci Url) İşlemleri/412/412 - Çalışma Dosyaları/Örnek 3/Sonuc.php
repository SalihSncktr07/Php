<?php
session_start();

$GelenKullaniciAdi		=	$_POST["KullaniciAdi"];
$GelenKullaniciSifre	=	$_POST["KullaniciSifre"];

if(($GelenKullaniciAdi != "") and ($GelenKullaniciSifre != "")){
	if(($GelenKullaniciAdi == "Volkan") and ($GelenKullaniciSifre == "12345678")){
		$_SESSION["Kullanici"]	=	"Volkan";
		header("Location: KontrolluBirinciSayfa.php");
		exit();
	}else{
		header("Location: index.php");
		exit();
	}
}else{
	header("Location: index.php");
	exit();
}
?>