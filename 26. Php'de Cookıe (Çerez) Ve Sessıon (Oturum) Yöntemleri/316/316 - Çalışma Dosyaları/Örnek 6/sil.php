<?php
session_start();
?>
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
	session_start()		:	session (oturum) başlatmak veya session'ları (oturumları) takip etmek için kullanılır.
	session_destroy()	:	Daha önceden oluşturulmuş olan session'ları (oturumları) silmek için kullanılır.
	*/
	
	unset($_SESSION["KullaniciEmailAdresi"]);
	
	?>
	
	<a href="index.php">Session'ları Oluştur</a>
	
</body>
</html>