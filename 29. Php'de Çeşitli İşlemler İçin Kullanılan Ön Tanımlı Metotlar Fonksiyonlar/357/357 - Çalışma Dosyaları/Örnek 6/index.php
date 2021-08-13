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
	
	function IceriginSadeceIlkHarfiniBuyukHarfYap($Deger){
		$Uzunluk						=	strlen($Deger);
		$IlkHarfiBul					=	mb_substr($Deger, 0, 1, "UTF-8");
		$KalanIcerigiBul				=	mb_substr($Deger, 1, $Uzunluk, "UTF-8");
		$KucuktenBuyugeDegisecekler		=	array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
		$KucuktenBuyugeDegisenler		=	array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
		$BuyuktenKucugeDegisecekler		=	array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
		$BuyuktenKucugeDegisenler		=	array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
		$IlkHarfiDuzenle				=	strtoupper(str_replace($KucuktenBuyugeDegisecekler, $KucuktenBuyugeDegisenler, $IlkHarfiBul));
		$KalanIcerigiDuzenle			=	strtolower(str_replace($BuyuktenKucugeDegisecekler, $BuyuktenKucugeDegisenler, $KalanIcerigiBul));
		$Sonuc			=	$IlkHarfiDuzenle . $KalanIcerigiDuzenle;
		return $Sonuc;
	}
	
	$Icerik			=	"ıSPANAK - EXTRA EĞİTİM - VOLKAN ALAKENT - A'DAN Z'YE PHP GÖRSEL EĞİTİM SETİ";
	
	echo $Icerik . "<br />";
	
	$Metin			=	IceriginSadeceIlkHarfiniBuyukHarfYap($Icerik);
	
	echo $Metin;
	
	?>
</body>
</html>