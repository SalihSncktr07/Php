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
	move_uploaded_file()	:	Herhangi bir dosyayı belirtilecek olan dizine yüklemek için kullanılır.
	*/
	?>
	<form action="Sonuc.php" method="post" enctype="multipart/form-data">
		Yüklenecek Olan Dosya : <input type="file" name="Dosya"><br />
		<input type="submit" value="Dosyayı Yükle">
	</form>
</body>
</html>