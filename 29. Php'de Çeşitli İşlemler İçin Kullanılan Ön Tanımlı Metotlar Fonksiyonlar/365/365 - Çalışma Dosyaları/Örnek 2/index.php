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
	
	$GelenDeger		=	"Volkan Alkent";
	$GercekDeger	=	"Volkan Alakent";
	
	echo "Gelen Değer : " . $GelenDeger . "<br />Gerçek Değer : " . $GercekDeger ."<br /><br /><br />";
	
	$Fark			=	levenshtein($GelenDeger, $GercekDeger);
	
	if($Fark==0){
		echo "Tebrikler, tam eşleşme sağlandı.";
	}elseif($Fark==1){
		echo "Tebrikler, 1 yaklaşık eşleşme sağlandı.";
	}elseif($Fark==2){
		echo "İdare eder, 2 yaklaşık eşleşme sağlandı.";
	}else{
		echo "Çok kötü, 3 veya daha üstü yaklaşık eşleşme sağlandı.";
	}
	
	?>
</body>
</html>