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
	trim()		:	Belirtilecek olan içeriğin, varsa başındaki ve sonundaki tüm boşlukları, sekmeleri ve yeni satır karakterlerini silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa başındaki ve sonundaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
	ltrim()		:	Belirtilecek olan içeriğin, varsa başındaki / solundaki tüm boşlukları, sekmeleri ve yeni satır karakterlerini silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa başındaki / solundaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
	rtrim()		:	Belirtilecek olan içeriğin, varsa sonundaki / sağındaki tüm boşlukları, sekmeleri ve yeni satır karakterlerini silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa sonundaki / sağındaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
	chop()		:	Belirtilecek olan içeriğin, varsa sonundaki / sağındaki tüm boşlukları, sekmeleri ve yeni satır karakterlerini silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa sonundaki / sağındaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
	*/
	
	$Icerik			=	"                                                  Extra Eğitim                                                  ";
	
	echo $Icerik . "<br />";
	
	$DuzenliIcerik	=	rtrim($Icerik);
	
	?>
	
	<script type="text/javascript" language="javascript">
		alert("<?php echo $DuzenliIcerik; ?>");
	</script>
	
</body>
</html>