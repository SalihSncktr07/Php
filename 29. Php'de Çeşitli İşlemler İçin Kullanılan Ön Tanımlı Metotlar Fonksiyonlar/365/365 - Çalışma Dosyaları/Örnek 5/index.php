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
	levenshtein()	:	Belirtilecek olan iki değer arasındaki levenshtein mesafesini bularak, bulduğu değeri geriye döndürür. Levenshtein mesafesini : Bir değeri diğer bir değere dönüştürebilmek için değiştirilecek veya eklenecek veya silinecek karakter sayısı anlamına gelir.
	similar_text()	:	Belirtilecek olan iki değer arasındaki benzerliği yüzdesel olarak bularaki bulduğu değeri geriye döndürür.
	*/
	
	$GelenDeger			=	"PHP Web Tabanlı, nesne yönelimli bir programlama dilidir. Eskiden Personal Home Page (PHP) yani Kişisel Anasayfa iken şimdilerde PHP: Hypertext Preprocessor olarak kullanıma devam edilmektedir. PHP, dinamik, kendi kendine yönetilebilir web siteleri yapılmasını sağlar.";
	
	$GercekDeger		=	"PHP Web Tabanlı, nesne yönelimli bir gelişmiş programlama dilidir. Eskiden Personal Home Page (PHP) yani Kişisel Anasayfa iken şimdilerde PHP: Hypertext Preprocessor olarak ismi değiştirilmiş. PHP, dinamik, kendi kendine yönetilebilir web siteleri yapılmasını sağlar.";
	
	echo "Gelen Değer : " . $GelenDeger . "<br />Gerçek Değer : " . $GercekDeger ."<br /><br /><br />";
	
	$BenzerlikOrani		=	similar_text($GercekDeger, $GelenDeger, $Oran);
	
	echo "Değer : " . $BenzerlikOrani . "<br />";
	echo "Oran : %" . $Oran;

	?>
	
</body>
</html>