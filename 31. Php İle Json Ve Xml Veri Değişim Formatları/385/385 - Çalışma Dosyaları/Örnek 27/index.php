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
	json_encode()	:	Belirtilecek olan içeriğin, JSON karşılığını bularak, bulduğu değeri geriye döndürür.
		JSON_HEX_TAG		:	Belirtilecek olan içerikte bulunan tag (etiket) başlangıç ve bitiş karakterlerini hexadecimal (onaltılık) türünde dönüştürmek için kullanılır.
		JSON_HEX_APOS		:	Belirtilecek olan içerikte bulunan ' (tek tırnak) karakterlerini hexadecimal (onaltılık) türünde dönüştürmek için kullanılır.
		JSON_HEX_QUOT		:	Belirtilecek olan içerikte bulunan " (çift tırnak) karakterlerini hexadecimal (onaltılık) türünde dönüştürmek için kullanılır.
		JSON_HEX_AMP		:	Belirtilecek olan içerikte bulunan & (ampersant) karakterlerini hexadecimal (onaltılık) türünde dönüştürmek için kullanılır.
		JSON_FORCE_OBJECT	:	Belirtilecek olan içeriği nesne dönüşüm yapısına göre zorlamak için kullanılır.
	json_decode()	:	Belirtilecek olan JSON değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Deger	=	'{
	"Firma" : "Extra Eğitim", 
	"Yonetici" : "Volkan Alakent",
	"Egitimler" : [
		"HTML",
		"CSS3",
		"JS",
		"PHP"
	],
	"Egitmenler" : [
		{
			"Adi" : "Hakan Alakent",
			"Ders" : "HTML"
		},
		{
			"Adi" : "Onur Tatlı",
			"Ders" : "CSS3"
		},
		{
			"Adi" : "Ümit Okudan",
			"Ders" : "JS"
		},
		{
			"Adi" : "Serkan Çelik",
			"Ders" : "PHP"
		}
	]
	}';

	$Donustur	=	json_decode($Deger, true);
	
	echo "<pre>";
	print_r($Donustur);
	echo "</pre>";
	
	function Oku($Veriler){
		foreach($Veriler as $Anahtar => $Eleman){
			if(!is_array($Eleman)){
				echo $Anahtar . " : " . $Eleman . "<br />";
			}else{
				Oku($Eleman);
			}
		}
	}
	
	Oku($Donustur);
	
	?>
</body>
</html>