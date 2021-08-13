<?php
header("Content-type: text/xml; charset=UTF-8");
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
	
$Olustur		=	new SimpleXMLElement("<EXTRAEGITIM/>");
$Olustur->addChild("FIRMA", "Extra Eğitim");
$Olustur->addChild("YONETICI", "Volkan Alakent");


$Egitimler		=	$Olustur->addChild("EGITIMLER");
	$Kurs		=	$Egitimler->addChild("KURS", "HTML5");
					$Kurs->addAttribute("id", "Bir");
	$Kurs		=	$Egitimler->addChild("KURS", "CSS3");
					$Kurs->addAttribute("id", "Iki");
	$Kurs		=	$Egitimler->addChild("KURS", "JAVASCRIPT");
					$Kurs->addAttribute("id", "Uc");
	$Kurs		=	$Egitimler->addChild("KURS", "PHP7");
					$Kurs->addAttribute("id", "Dort");
$Egitmenler		=	$Olustur->addChild("EGITMENLER");
	$Egitmen	=	$Egitmenler->addChild("EGITMEN");
		$Egitmen->addChild("ADI", "Volkan Alakent");
		$Egitmen->addChild("KURSADI", "PHP7");
		$Egitmen->addAttribute("id", "1");
		$Egitmen->addAttribute("seviye", "Uzman");
	$Egitmen	=	$Egitmenler->addChild("EGITMEN");
		$Egitmen->addChild("ADI", "Hakan Alakent");
		$Egitmen->addChild("KURSADI", "HTML5");
		$Egitmen->addAttribute("id", "2");
		$Egitmen->addAttribute("seviye", "Orta");
	$Egitmen	=	$Egitmenler->addChild("EGITMEN");
		$Egitmen->addChild("ADI", "Onur Tatlı");
		$Egitmen->addChild("KURSADI", "CSS3");
		$Egitmen->addAttribute("id", "3");
		$Egitmen->addAttribute("seviye", "İleri");
	$Egitmen	=	$Egitmenler->addChild("EGITMEN");
		$Egitmen->addChild("ADI", "Ümit Okudan");
		$Egitmen->addChild("KURSADI", "JAVASCRIPT");
		$Egitmen->addAttribute("id", "4");
		$Egitmen->addAttribute("seviye", "Başlangıç");

echo $Olustur->asXML();

?>