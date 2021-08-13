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
	htmlentities()				:	Belirtilecek olan içerikte bulunabilecek olan tüm özel karakterleri düz metin halinde okunabilir HTML metnine dönüştürerek, dönüştürdüğü değeri geriye döndürür.
		ENT_COMPAT				:	htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) işaretlerini de dönüştürmek için kullanılır. (Varsayılan)
		ENT_QUOTES				:	htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de dönüştürmek için kullanılır.
		ENT_NOQUOTES			:	htmlentities metodu kullanılarak dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
	html_entity_decode()		:	Belirtilecek olan ve htmlentities metodu kullanılarak düz metin halinde sadece okunabilir HTML metnine dönüştürülmüş olan tüm özel karakterleri, orjinal karakter haline geri dönüştürerek, dönüştürdüğü değeri geriye döndürür.
		ENT_COMPAT				:	html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır. (Varsayılan)
		ENT_QUOTES				:	html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de geri dönüştürmek için kullanılır.
		ENT_NOQUOTES			:	html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
	*/
	
	$Deger		=	"<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
	echo $Deger . "<br /><br />";
	
	$IslemBir		=	htmlentities($Deger);
	echo $IslemBir . "<br /><br />";
	
	$IslemIki		=	htmlentities($Deger, ENT_COMPAT);
	echo $IslemIki;
	
	?>
</body>
</html>