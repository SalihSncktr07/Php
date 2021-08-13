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
	hash_init()		:	hash özeti üretme işlemlerini başlatmak ve algoritma türünü belirtmek için kullanılır.
	hash_update()	:	Belirtilecek olan içeriği, daha önceden hash özeti üretme işlemi başlatılmış bir işleme dahil etmek için kullanılır.
	hash_copy()		:	hash özeti üretme işlmelerini başlatmak ve algoritma türünü belirlemek için daha önceden oluşturulmuş olan hash_init() metodunu kopyalamak için kullanılır.
	hash_final()	:	Daha önceden hash özeti üretme işlemi başlatılarak içeriğide dahil edilmiş bir işlemin hash özetini üreterek, ürettiği değeri geriye döndürür.
	*/
	
	$Deger		=	"Extra Eğitim - Volkan Alakent";
	echo "Orjinal İçerik : " . $Deger . "<br />";
	
	$Sifreleme	=	hash_init("md5");
	hash_update($Sifreleme, $Deger);
	$Sonuc		=	hash_final($Sifreleme);
	echo "parçalı yapıda oluşturulmuş md5 özeti : " . $Sonuc . "<br />";
	
	?>
</body>
</html>