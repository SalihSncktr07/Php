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
	Sabit		:	Girdiğimiz değerleri alan veya programın çalışması ile bazı değerlerin atandığı veri tutuculardır.
	Kurallar	:
	1. Sabitler ve içerikleri define() fonksiyonu ile veya const tanımı ile oluşturulur.
	2. Sabit isimleri mutlaka bir harf veya  _ (alt çizgi) ile başlamalıdır.
	3. Sabit isimleri hiçbir zaman bir rakam ile başlayamaz.
	4. Sabit isimleri içerisinde alfanumerik değerler (A-Z a-z 0-9) ve _ (alt çizgi) kullanılabilir.
	5. Sabit isimleri içerisinde hiçbir zaman boşluk, türkçe karakterler veya özel karakterler kullanılamaz.
	6. Sabit isimleri tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
	7. Sabit isimleri büyük harf / küçük harf duyarlıdır. Eğer istenecek olur ise harf duyarlılığı iptal edilebilir.
	8. Sabit isimleri birden fazla kez kullanılamaz.
	9. Sabitlere atanacak olan değerler daha sonradan değiştirilemez veya tanımsız duruma getirilemez.
	10. Sabitler kapsama / etki alanı kurallarına tabi değildir ve her alandan erişilebilir.
	*/
	
	const ISIM	=	"Volkan Alakent";
	
	function Deneme(){
		echo ISIM;
	}
	
	 Deneme();
	
	?>
</body>
</html>