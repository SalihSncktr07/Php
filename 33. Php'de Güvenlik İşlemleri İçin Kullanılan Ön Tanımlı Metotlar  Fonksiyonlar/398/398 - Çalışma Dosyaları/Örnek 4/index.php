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
	
	$Deger1		=	"Extra Eğitim";
	echo "Orjinal İçerik 1 : " . $Deger1 . "<br />";
	$Deger2		=	"Volkan Alakent";
	echo "Orjinal İçerik 2 : " . $Deger2 . "<br />";
	
	$Sifreleme	=	hash_init("md5");
	
	hash_update($Sifreleme, $Deger1); // Extra Eğitim
	$Kopyala	=	hash_copy($Sifreleme);	// Extra Eğitim içeiğini elinde tutar.
	$SonucBir	=	hash_final($Sifreleme); // Extra Eğitim içeriğinin hash özeti üretildi.
	echo "md5 özeti : " . $SonucBir . "<br />";
	
	hash_update($Kopyala, $Deger2); // Extra Eğitim içeiğini elinde bulunduğu için Extra EğitimVolkan Alakent içeriği kabul edilir.
	$SonucIki		=	hash_final($Kopyala); // Extra EğitimVolkan Alakent içeriğinin hash özeti üretildi.
	echo "md5 özeti : " . $SonucIki . "<br />";
	
	?>
</body>
</html>