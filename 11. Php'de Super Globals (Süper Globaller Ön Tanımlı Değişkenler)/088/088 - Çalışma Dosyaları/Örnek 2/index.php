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
	$GLOBALS	:	Atanacak olan değişken için kapsama / etki alanlarının değiştirilmesini sağlar. Bu sayede global (küresel) alanda tanımlanmış bir değişkene local (yerel) alandan, local (yerel) alanda tanımlanmış bir değişkene global (küresel) alandan ulaşılabilme imkanı tanır.
	*/
	
	function Deneme(){
		$GLOBALS["Isim"]	=	"Volkan Alakent";
	}
	Deneme();
	
	echo $GLOBALS["Isim"];
	
	?>
</body>
</html>