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
	try 			=	Hata oluşturabilecek kodlar için kullanılır.
	catch			=	Hata oluşursa çalıştırılacak kodlar için kullanılır.
	finally			=	Hata oluşsada oluşmasada çalıştırılacak kodlar için kullanılır.
	throw			=	Hata oluşturabilecek kodlar için istisnai durumlarda kullanılır.
	Exception		=	Tüm istisnalar için önceden tanımlı olan temel sınıfı çağırmak için kullanılır.
	getMessage()	=	Tüm istisnalar için oluşturulacak olan iletilerin atandığı veri tutuculardır.
	
	Yapısı :
	try{
		Kod blokları
		throw new Exception(İleti);
	}catch(Exception İleti Ataması){
		Kod blokları
	}finally{
		Kod blokları
	}
	*/
	
	try{
		$Deger1		=	100;
		$Deger2		=	0;
		
		if($Deger2 == 0){
			throw new Exception("Hatalı bir işlem yapmaya çalışılıyor.");
		}
		
		echo "Bölme işleminizin sonucu : " . $Deger1 / $Deger2;
		
	}catch(Exception $Sonuc){
		echo $Sonuc->getMessage();
	}
	
	?>
</body>
</html>