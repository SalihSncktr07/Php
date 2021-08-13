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
	htmlspecialchars()			:	Belirtilecek olan içerikte bulunabilecek olan özel karakterleri (&, ', ", <, >) düz metin halinde okunabilir HTML metnine dönüştürerek, dönüştürdüğü değeri geriye döndürür.
		ENT_COMPAT				:	htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) işaretlerini de dönüştürmek için kullanılır. (Varsayılan)
		ENT_QUOTES				:	htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de dönüştürmek için kullanılır.
		ENT_NOQUOTES			:	htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
	htmlspecialchars_decode()	:	Belirtilecek olan ve htmlspecialchars metodu kullanılarak düz metin halinde sadece okunabilir HTML metnine dönüştürülmüş olan özel karakterleri (&, ', ", <, >), orjinal karakter haline geri dönüştürerek, dönüştürdüğü değeri geriye döndürür.
		ENT_COMPAT				:	htmlspecialchars_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır. (Varsayılan)
		ENT_QUOTES				:	htmlspecialchars_decode metodu kullanılarak geri dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de geri dönüştürmek için kullanılır.
		ENT_NOQUOTES			:	htmlspecialchars_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
	*/
	
	$Deger		=	"<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
	echo $Deger . "<br /><br />";
	
	$Islem		=	htmlspecialchars($Deger, ENT_QUOTES);
	echo $Islem . "<br /><br />";
	
	$SonucBir		=	htmlspecialchars_decode($Islem);
	echo $SonucBir . "<br /><br />";
	
	$SonucIki		=	htmlspecialchars_decode($Islem, ENT_COMPAT);
	echo $SonucIki;
	
	?>
</body>
</html>