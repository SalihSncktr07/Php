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
	date_diff()		:	Oluşturulmuş olan yeni iki farklı tarih nesnesi arasındaki farkı hesaplayarak yeni bir tarih sonuç nesnesi dizisi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	format()		:	date_diff() metodu ile hesaplanan iki tarih arasındaki farkı belirtilecek olan bir formata göre biçimlendirerek, biçimlendirdiği değeri geriye döndürür.
	*/
	
	$ZamanBir	=	date_create("1980-12-08"); // Yıl-Ay-Gün
	$ZamanIki	=	date_create("1978-07-05"); // Yıl-Ay-Gün
	
	$Islem		=	date_diff($ZamanBir, $ZamanIki);
	
	$Sonuc		=	"";
	
	foreach($Islem as $Anahtar => $Icerik){
		if($Anahtar=="days"){
			$Sonuc	.=	$Icerik;
		}
	}
	
	echo "08-12-1980 ile 05-07-1978 arasındaki toplam gün farkı : " . $Sonuc;
	
	?>
</body>
</html>