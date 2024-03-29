<?php
header("Content-Type:text/html; charset=UTF-8");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function Filtrele($Deger){
	$IslemBir	=	trim($Deger);
	$IslemIki	=	strip_tags($IslemBir);
	$IslemUc	=	htmlspecialchars($IslemIki, ENT_QUOTES);
	$Sonuc		=	$IslemUc;
		return $Sonuc;
}

$GelenIsimSoyisim		=	Filtrele($_POST["adisoyadi"]);
$GelenTelefon			=	Filtrele($_POST["telefon"]);
$GelenEmailAdresi		=	Filtrele($_POST["emailadresi"]);
$GelenKonu				=	Filtrele($_POST["konusu"]);
$GelenMesaj				=	Filtrele($_POST["mesaji"]);

$MailGonder		=	new PHPMailer(true);
try{
    $MailGonder->SMTPDebug			=	0;
    $MailGonder->isSMTP();
    $MailGonder->Host				=	'mail.extraegitim.net';
    $MailGonder->SMTPAuth			=	true;
    $MailGonder->CharSet			=	'UTF-8';
    $MailGonder->Username			=	'info@extraegitim.net';
    $MailGonder->Password			=	'VOLkan80';
    $MailGonder->SMTPSecure			=	'tls';
    $MailGonder->Port				=	587;
    $MailGonder->SMTPOptions		=	array(
											'ssl' => [
												'verify_peer' => false,
												'verify_peer_name' => false,
												'allow_self_signed' => true
											],
										);
    $MailGonder->setFrom($GelenEmailAdresi, $GelenIsimSoyisim);
    $MailGonder->addAddress('info@extraegitim.net', 'Extra Eğitim');
    $MailGonder->addReplyTo($GelenEmailAdresi, $GelenIsimSoyisim);
    $MailGonder->isHTML(true);
    $MailGonder->Subject			=	$GelenKonu;
	$MailGonder->MsgHTML($GelenMesaj);
    //$MailGonder->Body    = 'Mailin Gövdesi';
    //$MailGonder->AltBody = 'Mailin Gövdesi (HTML mail kabul etmeyen sunucular için)';
    $MailGonder->send();
    echo 'Mail Gönderildi';
}catch(Exception $e) {
    echo 'Mail Gönderim Hatası<br />Hata Açıklaması : ', $MailGonder->ErrorInfo;
}
?>