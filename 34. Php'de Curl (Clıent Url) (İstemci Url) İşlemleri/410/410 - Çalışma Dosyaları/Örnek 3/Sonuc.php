<?php

$GelenDosyaAdi			=	$_FILES["Dosya"]["name"];
$GelenDosyaTuru			=	$_FILES["Dosya"]["type"];
$GelenDosyaTempAdi		=	$_FILES["Dosya"]["tmp_name"];
$GelenDosyaHataDegeri	=	$_FILES["Dosya"]["error"];
$GelenDosyaBoyutu		=	$_FILES["Dosya"]["size"];

$Uzanti		=	substr($GelenDosyaAdi, -4);
	if($Uzanti == "jpeg"){
		$UzantiOlustur	=	"." . $Uzanti;
	}else{
		$UzantiOlustur	=	$Uzanti;
	}
$Isim		=	md5(uniqid(mt_rand()));
$Olustur	=	$Isim . $UzantiOlustur;

if($GelenDosyaTuru == "image/png"){
	if(move_uploaded_file($GelenDosyaTempAdi, $Olustur)){
		echo "Dosya Yükleme İşlemi Başarıyla Tamamlandı<br />";
		echo "<img src='" . $Olustur . "'><br />";
		echo "Orjinal Dosya Adı : " . $GelenDosyaAdi . "<br />";
		echo "Yüklenen Dosya Adı : " . $Olustur . "<br />";
		echo "Yüklenen Dosya Türü : " . $GelenDosyaTuru . "<br />";
		echo "Yüklenen Dosya Boyutu : " . $GelenDosyaBoyutu . " Byte";
	}else{
		echo "Dosya Yükleme İşlemi Sırasında Beklenmeyen Bir Hata Oluştu.";
	}
}else{
	echo "Dosya Yükleme İşlemi Sırasında İstenmeyen Bir Dosya Algılandı.";
}
?>