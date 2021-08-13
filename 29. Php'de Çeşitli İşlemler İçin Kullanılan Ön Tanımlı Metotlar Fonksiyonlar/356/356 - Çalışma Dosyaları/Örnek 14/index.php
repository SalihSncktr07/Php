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
	strtoupper()		:	Belirtilecek olan içeriğin tüm harflerini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	mb_strtoupper()		:	Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak tüm harflerini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	strtolower()		:	Belirtilecek olan içeriğin tüm harflerini küçük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	mb_strtolower()		:	Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak tüm harflerini küçük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	mb_convert_case()	:	Belirtilecek olan içeriğin, belirtilecek olan dönüşüm türünde ve karakter kodlaması dahilinde gelişmiş olarak tüm harflerini değiştirerek, değiştirilmiş olan değeri geriye döndürür.
		MB_CASE_UPPER	:	Belirtilecek olan içeriğin tüm harflerini büyük harf olacak şekilde değiştirmek için kullanılır.
		MB_CASE_LOWER	:	Belirtilecek olan içeriğin tüm harflerini küçük harf olacak şekilde değiştirmek için kullanılır.
		MB_CASE_TITLE	:	Belirtilecek olan içeriğin tüm kelimelerinin baş harflerini harflerini büyük harf olacak şekilde değiştirmek için kullanılır.
	*/
	
	function HerKelimeninIlkHarfiniBuyukHarfYap($Deger){
		$Parcala						=	explode(" ", $Deger);
		$KelimeSayisi					=	count($Parcala);
		$KucuktenBuyugeDegisecekler		=	array("a", "b", "c", "ç", "d", "e", "f", "g", "ğ", "h", "ı", "i", "j", "k", "l", "m", "n", "o", "ö", "p", "r", "s", "ş", "t", "u", "ü", "v", "y", "z", "q", "w", "x");
		$KucuktenBuyugeDegisenler		=	array("A", "B", "C", "Ç", "D", "E", "F", "G", "Ğ", "H", "I", "İ", "J", "K", "L", "M", "N", "O", "Ö", "P", "R", "S", "Ş", "T", "U", "Ü", "V", "Y", "Z", "Q", "W", "X");
		$BuyuktenKucugeDegisecekler		=	array("A", "B", "C", "Ç", "D", "E", "F", "G", "Ğ", "H", "I", "İ", "J", "K", "L", "M", "N", "O", "Ö", "P", "R", "S", "Ş", "T", "U", "Ü", "V", "Y", "Z", "Q", "W", "X");
		$BuyuktenKucugeDegisenler		=	array("a", "b", "c", "ç", "d", "e", "f", "g", "ğ", "h", "ı", "i", "j", "k", "l", "m", "n", "o", "ö", "p", "r", "s", "ş", "t", "u", "ü", "v", "y", "z", "q", "w", "x");
		$Sayi							=	1;
		$Duzenle						=	"";
		$Sonuc							=	"";
		
		foreach($Parcala as $Kelime){
			$TemizKelime			=	trim($Kelime);
			$Uzunluk				=	strlen($TemizKelime);
			$IlkHarfiBul			=	mb_substr($TemizKelime, 0, 1, "UTF-8");
			$KalanIcerigiBul		=	mb_substr($TemizKelime, 1, $Uzunluk, "UTF-8");
			$IlkHarfiDuzenle		=	str_replace($KucuktenBuyugeDegisecekler, $KucuktenBuyugeDegisenler, $IlkHarfiBul);
			$KalanIcerigiDuzenle	=	str_replace($BuyuktenKucugeDegisecekler, $BuyuktenKucugeDegisenler, $KalanIcerigiBul);
			$Duzenle				.=	$IlkHarfiDuzenle . $KalanIcerigiDuzenle . " ";
			if($Sayi==$KelimeSayisi){
				$Sonuc				.=	$Duzenle;
				return $Sonuc;
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