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
	str_replace()		:	Belirtilecek olan içerikte, belirtilecek olan değer / değerleri arayarak, eşleşen değer / değerler olması durumunda, belirtilecek olan değer / değerlerle değiştirerek, değiştirilmiş olan değeri geriye döndürür. Ayrıca belirtilecek olan ve eşleşen tüm değer / değerlerin sayısınıda geriye döndürebilir.
	str_ireplace()		:	Belirtilecek olan içerikte, belirtilecek olan değer / değerleri büyük harf / küçük harf ayrımı olmaksızın arayarak, eşleşen değer / değerler olması durumunda, belirtilecek olan değer / değerlerle değiştirerek, değiştirilmiş olan değeri geriye döndürür. Ayrıca belirtilecek olan ve eşleşen tüm değer / değerlerin sayısınıda geriye döndürebilir.
	strtr()				:	Belirtilecek olan içerikte, belirtilecek olan dizi türündeki değer / değerleri arayarak, eşleşen değer / değerler olması durumunda, belirtilecek olan değer / değerlerle değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	substr_replace()	:	Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre, istenilen değer / değerleri ekleyerek / silerek / değiştirerek, yeni oluşturulmuş olan değeri geriye döndürür.
	nl2br()				:	Belirtilecek olan içerikte bulunabilecek olan tüm özel satır sonlandırma karakterlerini (\n) HTML satır sonlandırma karakterlerine (<br />) değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	*/
	
	$Icerik				=	"Benim adım Onur Tatlı. Ben bir Javascript yazılımcısıyım.";
	
	echo $Icerik . "<br />";
	
	$Dizi				=	array("Onur Tatlı" => "Volkan Alakent", "Javascript" => "PHP");
	$Islem				=	strtr($Icerik, $Dizi);
	
	echo $Islem;
	
	?>
</body>
</html>