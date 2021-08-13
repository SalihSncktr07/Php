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
	set_time_limit()	:	Çalışmakta olan PHP dosyası için belirtilecek olan değer doğrultusunda azami / maksimum çalışma süresi değeri atamak için kullanılır.
	*/
	
	echo "Varsayılan max_execution_time yönergesi değeri : " . ini_get("max_execution_time") . " saniye<br />";
	set_time_limit(5); // 5 Saniye
	echo "Atanan max_execution_time yönergesi değeri : " . ini_get("max_execution_time") . " saniye<br /><br />";
	
	$Sayi	=	1;
	while($Sayi<=1000){
		echo $Sayi . " ";
		sleep(2);
		$Sayi++;
	}
	
	echo "<br />Volkan Alakent";
	
	?>
</body>
</html>