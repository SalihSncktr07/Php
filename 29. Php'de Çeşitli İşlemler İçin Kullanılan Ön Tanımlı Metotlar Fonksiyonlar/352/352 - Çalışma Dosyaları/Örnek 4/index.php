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
	
	$DepoBir	=	ob_get_contents();
	
	echo "Volkan Alakent<br /><br />";
	
	$DepoIki	=	ob_get_contents();
	
	ob_end_clean(); // Çıktı tamponu boşaldığı için sayfadaki tüm kodlar çıktı tamponuna alınır ama ob_end_clean ile hemen silinir. Dolayısı ile çıktı tamponu silindiği için sadece tarayıcıya ob_get_contents ile alınan değer gidebilir.
	
	echo "Burası Çalıtı : " . $DepoIki;
	
	?>
</body>
</html>
<?php
	ob_end_flush(); // Çıktı Tamponlaması Boşaltıldı ve Kapatıldı.
?>