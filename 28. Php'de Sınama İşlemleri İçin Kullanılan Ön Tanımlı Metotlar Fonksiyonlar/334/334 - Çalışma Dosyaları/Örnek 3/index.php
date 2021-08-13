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
	is_string()		:	Belirtilecek olan değişken içeriğinin string (alfanumerik) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_int()		:	Belirtilecek olan değişken içeriğinin integer (tamsayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_integer()	:	Belirtilecek olan değişken içeriğinin integer (tamsayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_long()		:	Belirtilecek olan değişken içeriğinin integer (tamsayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_double()		:	Belirtilecek olan değişken içeriğinin double / float (ondalıklı sayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_float()		:	Belirtilecek olan değişken içeriğinin double / float (ondalıklı sayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_real()		:	Belirtilecek olan değişken içeriğinin double / float (ondalıklı sayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_numeric()	:	Belirtilecek olan değişken içeriğinin numeric (sayısal) veri türlerinden (integer, double, float) biri olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_bool()		:	Belirtilecek olan değişken içeriğinin boolean (mantıksal) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_null()		:	Belirtilecek olan değişken içeriğinin null (boş / değeri olmayan) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_resource()	:	Belirtilecek olan değişken içeriğinin resource (kaynak) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_callable()	:	Belirtilecek olan değişken içeriğinin callable (geri çağırımlar / geri çağırabilenler) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_array()		:	Belirtilecek olan değişken içeriğinin array (dizi) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_object()		:	Belirtilecek olan değişken içeriğinin object (nesne) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/
	
	$Deger		=	8;
	
	if(is_int($Deger)){
		echo '$Deger adındaki değişkenin içeriği integer (tamsayı) içeriktir.';
	}else{
		echo '$Deger adındaki değişkenin içeriği integer (tamsayı) içerik değildir.';
	}
	
	?>
</body>
</html>