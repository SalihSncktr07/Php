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
	
	$Deger	=	"Volkan";
	
	switch($Deger){
		case $Deger == "Volkan":
			function Yaz(){
				echo "Merhaba Volkan Alakent";
			}
		break;
		default:
			function Yaz(){
				echo "Merhaba Sen Kimsin?";
			}
	}

	Yaz();
	
	?>
</body>
</html>