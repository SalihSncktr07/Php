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
	
	$Deger	=	"Kemal";
	
	if($Deger=="Volkan"){
		function Yaz(){
			echo "Merhaba Volkan Nasılsın?";
		}
	}elseif($Deger=="Hakan"){
		function Yaz(){
			echo "Merhaba Hakan Nasılsın?";
		}
	}elseif($Deger=="Onur"){
		function Yaz(){
			echo "Merhaba Onur Nasılsın?";
		}
	}elseif($Deger=="Serkan"){
		function Yaz(){
			echo "Merhaba Serkan Nasılsın?";
		}
	}else{
		function Yaz(){
			echo "Merhaba Sen Kimsin?";
		}
	}

	Yaz();
	
	?>
</body>
</html>