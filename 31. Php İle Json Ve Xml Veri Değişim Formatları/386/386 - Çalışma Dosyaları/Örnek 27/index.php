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
	simplexml_load_string()		:	Belirtilecek olan XML kodlama değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür.
	simplexml_load_file()		:	Belirtilecek olan XML dosyası içeriği kodlama değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür.
		LIBXML_NOCDATA			:	Belirtilecek olan XML kodlama değeri içerisinde bulunan CDATA değeri / değerlerini metin düğümleri ile birleştirmek için kullanılır.
	children()					:	Belirtilecek olan XML kodlama değeri içerisinde bulunan, belirtilecek olan tag (etiket) adı değerine bağlı olan bir alt tüm çocuk elemanları / elementleri işarate etmek ve seçmek için kullanılır.
	xpath()						:	Belirtilecek olan XML kodlama değeri içerisinde bulunan, belirtilecek olan değer / değerler doğrultusunda eşleşen tüm elemanları / elementleri işarate etmek ve seçmek için kullanılır.
	SimpleXMLElement()			:	Belirtilecek olan içerikler dahilinde XML kodlama yapıları oluşturmak için kullanılır.
	asXML()						:	Belirtilecek olan ve SimpleXMLElement() metodu kullanılarak oluşturulmuş olan XML kodlama yapılarının çıktılanmasını sağlamak için kullanılır.
	addChild()					:	Belirtilecek olan ve SimpleXMLElement() metodu kullanılarak oluşturulmuş olan XML kodlama yapılarına yeni eleman / element eklemek için kullanılır.
	addAttribute()				:	Belirtilecek olan ve SimpleXMLElement() metodu kullanılarak oluşturulmuş olan XML kodlama yapılarına ait elemana / elemente özellik eklemek için kullanılır.
	DOMDocument					:	Kullanıldığı dokümanı bir DOMDocument nesne örneğine yükleyerek işleme hazır hale getirmek için kullanılır.
		loadXML()				:	DOMDocument metodu ile oluşturulmuş olan DOMDocument nesne örneğine belirtilecek olan herhangi bir içeriği yüklemek için kullanılır.
		preserveWhiteSpace		:	DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içerikte WhiteSpace özelliğinin kullanılıp kullanılmayacağını belirtmek için kullanılır.
		formatOutput			:	DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içerikte sekme / girinti özelliğinin kullanılıp kullanılmayacağını belirtmek için kullanılır.
		xmlVersion 				:	DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içeriğin belge türü belirtiminde kullanılacak olan XML sürümünü / versiyonunu belirtmek için kullanılır.
		encoding 				:	DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içeriğin belge türü belirtiminde kullanılacak olan karakter kodlamasını belirtmek için kullanılır.
		saveXML()				:	DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içeriğin çıktılanmasını sağlamak için kullanılır.
		save()					:	DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içeriğin belirtilecek olan dosyaya kaydedilmesini sağlamak için kullanılır.
	*/
	
	$Degerler	=	'<EXTRAEGITIM>
	<FIRMA>Extra Eğitim</FIRMA>
	<YONETICI>Volkan Alakent</YONETICI>
	<EGITIMLER>
		<KURS id="Bir">HTML5</KURS>
		<KURS id="Iki">CSS3</KURS>
		<KURS id="Uc">JAVASCRIPT</KURS>
		<KURS id="Dort">PHP7</KURS>
	</EGITIMLER>
	<EGITMENLER>
		<EGITMEN id="1">
			<ADI>Volkan Alakent</ADI>
			<KURSADI>PHP7</KURSADI>
		</EGITMEN>
		<EGITMEN id="2">
			<ADI>Hakan Alakent</ADI>
			<KURSADI>HTML5</KURSADI>
		</EGITMEN>
		<EGITMEN id="3">
			<ADI>Onur Tatlı</ADI>
			<KURSADI>CSS3</KURSADI>
		</EGITMEN>
		<EGITMEN id="4">
			<ADI>Ümit Okudan</ADI>
			<KURSADI>JAVASCRIPT</KURSADI>
		</EGITMEN>
	</EGITMENLER>
	</EXTRAEGITIM>';
	
	$Donustur	=	simplexml_load_string($Degerler);
	
	echo "<pre>";
	print_r($Donustur);
	echo "</pre>";
	
	$Say		=	count($Donustur->EGITMENLER->children());
	echo "Kayıt Sayısı : " . $Say . "<br />";
	if($Say > 0){
		$Sayi	=	0;
		while($Sayi < $Say){
			echo $Donustur->EGITMENLER->EGITMEN[$Sayi]->ADI . " : " . $Donustur->EGITMENLER->EGITMEN[$Sayi]->KURSADI . "<br />";
			$Sayi++;
		}
	}

	?>
</body>
</html>