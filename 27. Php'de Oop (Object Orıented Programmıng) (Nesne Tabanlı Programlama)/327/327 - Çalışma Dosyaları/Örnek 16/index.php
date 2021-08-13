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
	abstract	:	Belirtilecek olan herhangi bir sınıfı, soyut sınıf haline dönüştürmek için kullanılır.
	interface	:	Belirtilecek olan herhangi bir sınıfı, soyut arayüz sınıfı haline dönüştürmek için kullanılır.
	implements	:	Daha önceden oluşturulmuş olan herhangi bir arayüz sınıfını, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
	
	abstract 	:
	1. Soyut metodlar içerebilir.
	2. Normal metodlar içerebilir.
	3. Özellikler içerebilir.
	4. Sabitler içerebilir.
	5. public, private veya protected tanımlanabilir.
	6. Herhangi bir sınıf sadece tek bir içerebilir.'dan türeyebilir.
	
	interface	:
	1. Soyut metodlar içerebilir.
	2. public gönürlüğüne sahip olmak kaydıyla normal metodlar içerebilir.
	3. Sabitler içerebilir.
	4. Herhangi bir sınıfda birden fazla interface (arayüz) kullanılabilir.
	*/
	
	interface CRUD{ // CRUD : C : Create, R : Read, U : Update, D : Delete
		
		private function Olusturma($TabloDegeri, $BenzersizKimlik); // Hata kodu döndürür, çünkü soyut Arayüz Sınıfı İçerisinde private kullanılamaz.
		public function Okuma($TabloDegeri, $BenzersizKimlik);
		protected function Duzenleme($TabloDegeri, $BenzersizKimlik);// Hata kodu döndürür, çünkü soyut Arayüz Sınıfı İçerisinde protected kullanılamaz.
		public function Silme($TabloDegeri, $BenzersizKimlik);
		
	}
	
	class Test implements CRUD{
		
		function Olusturma($TabloDegeri, $BenzersizKimlik){
			
		}
		
		function Okuma($TabloDegeri, $BenzersizKimlik){
			
		}
		
		function Duzenleme($TabloDegeri, $BenzersizKimlik){
			
		}
		
		function Silme($TabloDegeri, $BenzersizKimlik){
			
		}
		
	}
	
	?>
</body>
</html>