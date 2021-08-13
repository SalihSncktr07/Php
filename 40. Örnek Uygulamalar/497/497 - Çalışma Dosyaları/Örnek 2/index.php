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
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		echo "Bağlantı Hatası<br />" . $Hata->getMessage();
		die();
	}
	
	function MenuYaz($MenuUstIdDegeri=0, $BoslukDegeri=0){
		global $VeritabaniBaglantisi;
		
		$MenuSorgusu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM menuler WHERE ustid = ?");
		$MenuSorgusu->execute([$MenuUstIdDegeri]);
		$MenuSorugusuSayi		=	$MenuSorgusu->rowCount();
		$MenuSorugusuKayitlari	=	$MenuSorgusu->fetchAll(PDO::FETCH_ASSOC);
		
		if($MenuSorugusuSayi>0){
			foreach($MenuSorugusuKayitlari as $Kayitlar){
				$MenuId			=	 $Kayitlar["id"];
				$MenuUstId		=	 $Kayitlar["ustid"];
				$MenuMenuAdi	=	 $Kayitlar["menuadi"];
				
				echo str_repeat("&nbsp;", $BoslukDegeri);
				echo $MenuId . " | " . $MenuUstId . " | " . $MenuMenuAdi . "<br />";
				MenuYaz($MenuId, $BoslukDegeri+10);
			}
		}
	}
	
	echo "4 Numaralı ID'ye (Bilgisayar) ait alt menüler<br />";
	MenuYaz(4);
	
	$VeritabaniBaglantisi	=	null;
	?>
</body>
</html>