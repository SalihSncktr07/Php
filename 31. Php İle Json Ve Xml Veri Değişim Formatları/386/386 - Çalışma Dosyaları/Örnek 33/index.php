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
	
	$Degerler	=	'<root>
	<item>
		<stockCode><![CDATA[ACMNSWX2]]></stockCode>
		<label><![CDATA[Kahve Deri Düz Ayakkabı]]></label>
		<status>1</status>
		<brand><![CDATA[Brion]]></brand>
		<brandId>10296</brandId>
		<barcode>97860534201</barcode>
		<mainCategory><![CDATA[Ayakkabı]]></mainCategory>
		<category><![CDATA[Bayan Ayakkabı]]></category>
		<subCategory><![CDATA[Babet]]></subCategory>
		<buyingPrice>0.000</buyingPrice>
		<price1>143.220</price1>
		<price2>0.000</price2>
		<price3>0.000</price3>
		<price4>0.000</price4>
		<price5>0.000</price5>
		<tax>18</tax>
		<currencyAbbr>TL</currencyAbbr>
		<stockAmount>1</stockAmount>
		<stockType><![CDATA[Adet]]></stockType>
		<warranty>24</warranty>
		<picture1Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_01_158148_max.jpg?rev=1453707778]]></picture1Path>
		<picture2Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_02_158148_max.jpg?rev=1453707778]]></picture2Path>
		<picture3Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_03_158148_max.jpg?rev=1453707778]]></picture3Path>
		<picture4Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_04_158148_max.jpg?rev=1453707778]]></picture4Path>
		<dm3>0.0000</dm3>
		<details><![CDATA[<div>Marka <span class="Apple-tab-span" style="white-space:pre"></span>: <span class="Apple-tab-span" style="white-space:pre"></span>Be Live</div><div>Materyal<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Deri</div><div>Taban<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Termo Hazır Taban</div>]]></details>
		<rebate>10.00000</rebate>
		<rebateType>1</rebateType>
		<variants>
			<variant>
				<vStockCode><![CDATA[ACMNSWX2_47f080]]></vStockCode>
				<vBarcode>97860534201-9</vBarcode>
				<vStockAmount>1</vStockAmount>
				<vBuyingPrice>0.000</vBuyingPrice>
				<vPrice1>143.220</vPrice1>
				<vPrice2>0.000</vPrice2>
				<vPrice3>0.000</vPrice3>
				<vPrice4>0.000</vPrice4>
				<vPrice5>0.000</vPrice5>
				<vRebate>10.00000</vRebate>
				<vRebateType>1</vRebateType>
				<vDm3>0.8000</vDm3>
				<options>
					<option>
						<variantName><![CDATA[Renk]]></variantName>
						<variantValue><![CDATA[Gümüş]]></variantValue>
					</option>
				</options>
			</variant>
		</variants>
	<specs>
		<spec>
			<specGroup><![CDATA[Cinsiyet]]></specGroup>
			<specName><![CDATA[Cinsiyet]]></specName>
			<specValue><![CDATA[Bayan]]></specValue>
		</spec>
	</specs>
	</item>
	<item>
		<stockCode><![CDATA[FRTYRRX2]]></stockCode>
		<label><![CDATA[Siyah Topuklu Ayakkabı]]></label>
		<status>1</status>
		<brand><![CDATA[Clyde]]></brand>
		<brandId>24590</brandId>
		<barcode>97860586240</barcode>
		<mainCategory><![CDATA[Ayakkabı]]></mainCategory>
		<category><![CDATA[Bayan Ayakkabı]]></category>
		<subCategory><![CDATA[Topuklu]]></subCategory>
		<buyingPrice>0.000</buyingPrice>
		<price1>272.990</price1>
		<price2>0.000</price2>
		<price3>0.000</price3>
		<price4>0.000</price4>
		<price5>0.000</price5>
		<tax>18</tax>
		<currencyAbbr>TL</currencyAbbr>
		<stockAmount>1</stockAmount>
		<stockType><![CDATA[Adet]]></stockType>
		<warranty>24</warranty>
		<picture1Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_01_168548_max.jpg?rev=1453707778]]></picture1Path>
		<picture2Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_02_168548_max.jpg?rev=1453707778]]></picture2Path>
		<picture3Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_03_168548_max.jpg?rev=1453707778]]></picture3Path>
		<picture4Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_04_168548_max.jpg?rev=1453707778]]></picture4Path>
		<dm3>0.0000</dm3>
		<details><![CDATA[<div>Marka <span class="Apple-tab-span" style="white-space:pre"></span>: <span class="Apple-tab-span" style="white-space:pre"></span>End Live</div><div>Materyal<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Deri</div><div>Taban<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Kösele Hazır Taban</div>]]></details>
		<rebate>10.00000</rebate>
		<rebateType>1</rebateType>
		<variants>
			<variant>
				<vStockCode><![CDATA[ACMNSWX2_47f080]]></vStockCode>
				<vBarcode>97860586240-1</vBarcode>
				<vStockAmount>1</vStockAmount>
				<vBuyingPrice>0.000</vBuyingPrice>
				<vPrice1>272.990</vPrice1>
				<vPrice2>0.000</vPrice2>
				<vPrice3>0.000</vPrice3>
				<vPrice4>0.000</vPrice4>
				<vPrice5>0.000</vPrice5>
				<vRebate>10.00000</vRebate>
				<vRebateType>1</vRebateType>
				<vDm3>0.8000</vDm3>
				<options>
					<option>
						<variantName><![CDATA[Renk]]></variantName>
						<variantValue><![CDATA[Baslıkı Siyah]]></variantValue>
					</option>
				</options>
			</variant>
		</variants>
	<specs>
		<spec>
			<specGroup><![CDATA[Cinsiyet]]></specGroup>
			<specName><![CDATA[Cinsiyet]]></specName>
			<specValue><![CDATA[Bayan]]></specValue>
		</spec>
	</specs>
	</item>
</root>';
	
	$Donustur			=	simplexml_load_string($Degerler, "SimpleXMLElement", LIBXML_NOCDATA);
	
	echo "<pre>";
	print_r($Donustur);
	echo "</pre>";
	
	$Say	=	count($Donustur->item);
	if($Say > 0 ){
		$Sayi	=	0;
		while($Sayi < $Say){
			$UrununStokKodu		=	$Donustur->item[$Sayi]->stockCode;
			$UrununAdi			=	$Donustur->item[$Sayi]->label;
			$UrununFiyati		=	$Donustur->item[$Sayi]->price1;
			// Bu alana dilediğiz XML içerisindeki tüm değerleri çekebilirsiniz.
			
			echo "Ürünün Stok Kodu : " . $UrununStokKodu . "<br />";
			echo "Ürünün Adı : " . $UrununAdi . "<br />";
			echo "Ürünün Fiyatı : " . $UrununFiyati . "<br /><br />";
			
			$Sayi++;
		}
		
	}
	
	?>
</body>
</html>