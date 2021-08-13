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
	strip_tags()	:	Belirtilecek olan içerikte bulunabilecek olan tüm HTML kodlarını temizleyerek, temizlenmiş olan değeri geriye döndürür.
	*/
	
	$Deger		=	"<h1>Extra Eğitim</h1><div>Volkan Alakent</div><div>A'dan Z'ye PHP Görsel Eğitim Seti</div>";
	echo $Deger . "<br /><br />";
	
	
	$Sonuc		=	strip_tags($Deger);
	echo $Sonuc;

	?>
</body>
</html>