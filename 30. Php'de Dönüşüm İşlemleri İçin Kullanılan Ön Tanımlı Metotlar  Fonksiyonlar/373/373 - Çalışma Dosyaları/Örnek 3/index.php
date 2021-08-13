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
	base64_encode()		:	Belirtilecek olan içeriğin base64 (8 Bit'lik verilerin 64 Bit'lik verilere çevrilmesi) algoritması kodlamasını bularak, bulduğu değeri geriye döndürür.
	base64_decode()		:	Belirtilecek olan ve base64 (8 Bit'lik verilerin 64 Bit'lik verilere çevrilmesi) algoritması kullanılarak kodlanmış olan içeriği geri çözerek, çözdüğü değeri geriye döndürür.
	*/
	
	$Icerik			=	"Extra Eğitim - Volkan Alakent";
	echo $Icerik . "<br />";
	$Donustur		=	base64_encode($Icerik);
	echo $Donustur . "<br />";
	$GeriDonustur	=	base64_decode($Donustur);
	echo $GeriDonustur;
	
	?>
</body>
</html>


