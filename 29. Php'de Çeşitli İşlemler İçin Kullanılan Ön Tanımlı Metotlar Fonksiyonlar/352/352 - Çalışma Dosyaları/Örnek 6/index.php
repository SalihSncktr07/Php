<?php
session_start(); ob_start(); // Sessionlar Başlatıldı ve Aynı Zamanda Çıktı Tamponlamasıda Başlatıldı.
?>
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
	ob_start()			:	PHP sayfası dahilinde çıktı tamponlamasını başlatır.
	ob_end_clean()		:	PHP sayfası dahilinde başlatılmış olan ve veri depolayan çıktı tamponlamasını siler ve çıktı tamponlamasını kapatır.
	ob_end_flush()		:	PHP sayfası dahilinde başlatılmış olan ve veri depolayan çıktı tamponlamasını boşaltır ve çıktı tamponlamasını kapatır.
	ob_get_contents()	:	PHP sayfası dahilinde başlatılmış olan ve veri depolayan çıktı tamponlaması içeriğini bularak, bulduğu değeri geriye döndürür.
	*/
	
	echo "Extra Eğitim<br />";
	echo "A'dan Z'ye PHP Görsel Eğitim Seti<br />";
	echo "Volkan Alakent<br /><br />";
	
	$Depo	=	ob_get_contents(); // Çıktı tamponuna Extra Eğitim<br /> A'dan Z'ye PHP Görsel Eğitim Seti<br /> Volkan Alakent<br /><br /> içeriği eklendi.
	
	echo $Depo;
	
	?>
</body>
</html>
<?php
	ob_end_flush(); // Çıktı Tamponlaması Boşaltıldı ve Kapatıldı.
?>