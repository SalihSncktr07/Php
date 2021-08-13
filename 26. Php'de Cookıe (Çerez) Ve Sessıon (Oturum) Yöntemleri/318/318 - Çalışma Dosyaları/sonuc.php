<?php
require_once("ayar.php");
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
	$GelenKullaniciAdi			=	$_POST["KullanicininAdi"];
	$GelenKullaniciSifresi		=	$_POST["KullanicininSifresi"];
	
	if(($GelenKullaniciAdi!="") and ($GelenKullaniciSifresi!="")){
		$_SESSION["Adi"]		=	$GelenKullaniciAdi;
		$_SESSION["Sifresi"]	=	$GelenKullaniciSifresi;
		
		echo "Merhaba " . $GelenKullaniciAdi . ", siteye giriş yaptınız.<br />";
		echo "<a href='cikis.php'>Çıkış Yap</a>";
	}else{
		echo "Merhaba lütfen formda herhangi bir boş alan bırakmayınız.<br />";
		echo "<a href='index.php'>Forma Dön</a>";
	}
	
	?>
</body>
</html>