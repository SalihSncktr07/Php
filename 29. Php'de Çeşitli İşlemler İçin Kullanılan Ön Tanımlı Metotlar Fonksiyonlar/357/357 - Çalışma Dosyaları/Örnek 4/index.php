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
	/*
	ucwords()	:	Belirtilecek olan içerikte bulunan tüm kelimelerin ilk harflerini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	ucfirst()	:	Belirtilecek olan içeriğin ilk harfini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	lcfirst()	:	Belirtilecek olan içeriğin ilk harfini küçük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	*/
	
	function HerKelimeninIlkHarfiniBuyukHarfYap($Deger){
		$Parcala						=	explode(" ", $Deger);
		$KelimeSayisi					=	count($Parcala);
		$KucuktenBuyugeDegisecekler		=	array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
		$KucuktenBuyugeDegisenler		=	array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
		$BuyuktenKucugeDegisecekler		=	array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
		$BuyuktenKucugeDegisenler		=	array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
		$Sayi							=	1;
		$Duzenle						=	"";
		$Sonuc							=	"";
		
		foreach($Parcala as $Kelime){
			$TemizKelime			=	trim($Kelime);
			$Uzunluk				=	strlen($TemizKelime);
			$IlkHarfiBul			=	mb_substr($TemizKelime, 0, 1, "UTF-8");
			$KalanIcerigiBul		=	mb_substr($TemizKelime, 1, $Uzunluk, "UTF-8");
			$IlkHarfiDuzenle		=	strtoupper(str_replace($KucuktenBuyugeDegisecekler, $KucuktenBuyugeDegisenler, $IlkHarfiBul));
			$KalanIcerigiDuzenle	=	strtolower(str_replace($BuyuktenKucugeDegisecekler, $BuyuktenKucugeDegisenler, $KalanIcerigiBul));
			$Duzenle				.=	$IlkHarfiDuzenle . $KalanIcerigiDuzenle . " ";
			
			if($Sayi==$KelimeSayisi){
				$Sonuc				.=	$Duzenle;
				
				return mb_convert_case(trim($Sonuc), MB_CASE_TITLE, "UTF-8");
			}
			
			$Sayi++;
		}
	}
	
	$Icerik			=	"extra eğitim - volkan alakent - a'dan z'ye php görsel eğitim seti - istanbul";
	
	echo $Icerik . "<br />";
	
	$Metin			=	HerKelimeninIlkHarfiniBuyukHarfYap($Icerik);
	
	echo $Metin;
	
	?>
</body>
</html>