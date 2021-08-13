<?php
require_once("baglan.php");
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
	function AcilirListeIcinMenuYaz($MenuUstIdDegeri=0, $BoslukDegeri=0){
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
				
				echo "<option value='" . $MenuId . "'>" . str_repeat("&nbsp;", $BoslukDegeri) . $MenuMenuAdi . "</option>";
				AcilirListeIcinMenuYaz($MenuId, $BoslukDegeri+5);
			}
		}
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
				echo str_repeat("&nbsp;", $BoslukDegeri). $MenuMenuAdi . " <a href='guncelle.php?id=" . $MenuId . "'>[Güncelle]</a> <a href='sil.php?id=" . $MenuId . "'>[Sil]</a><br />";
				MenuYaz($MenuId, $BoslukDegeri+10);
			}
		}
	}
	
	// Yeni Menü Ekleme
	?>
	Menü Ekleme Formu<br />
	<form action="ekle.php" method="post">
		Üst Menü : <select name="UstMenuSecimi">
			<option value="0">Ana Menü Yap</option>
			<?php AcilirListeIcinMenuYaz(); ?>
		</select><br />
		Menü Adı : <input type="text" name="MenuAdi"><br />
		<input type="submit" value="Menü Ekle">
	</form><br /><br /><br />
	
	<?php
	// Menüleri Listeleme
	MenuYaz();
	
	$VeritabaniBaglantisi	=	null;
	?>
</body>
</html>