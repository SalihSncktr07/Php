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
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		echo "Bağlantı Hatası<br />" . $Hata->getMessage();
		die();
	}
	
	//sleep(5);	
	$ZamanDamgasi	=	time();
	
	$Link			=	"https://www.tcmb.gov.tr/kurlar/today.xml";
	$Icerik			=	simplexml_load_file($Link);
	
	$USD_Birim			=	$Icerik->Currency[0]->Unit;
	$USD_Adi			=	$Icerik->Currency[0]->Isim;
	$USD_KisaAdi		=	$Icerik->Currency[0]["CurrencyCode"];
	$USD_Alis			=	$Icerik->Currency[0]->ForexBuying;
	$USD_Satis			=	$Icerik->Currency[0]->ForexSelling;
	$USD_EfektifAlis	=	$Icerik->Currency[0]->BanknoteBuying;	
	$USD_EfektifSatis	=	$Icerik->Currency[0]->BanknoteSelling;	
	
	$USDGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$USDGuncelle->execute([$USD_Adi, $USD_Birim, $USD_Alis, $USD_Satis, $USD_EfektifAlis, $USD_EfektifSatis, $ZamanDamgasi, $USD_KisaAdi]);
	$USDEtkilenenSayi	=	$USDGuncelle->rowCount();
		if($USDEtkilenenSayi<1){
			echo "USD Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$AUD_Birim			=	$Icerik->Currency[1]->Unit;
	$AUD_Adi			=	$Icerik->Currency[1]->Isim;
	$AUD_KisaAdi		=	$Icerik->Currency[1]["CurrencyCode"];
	$AUD_Alis			=	$Icerik->Currency[1]->ForexBuying;
	$AUD_Satis			=	$Icerik->Currency[1]->ForexSelling;
	$AUD_EfektifAlis	=	$Icerik->Currency[1]->BanknoteBuying;	
	$AUD_EfektifSatis	=	$Icerik->Currency[1]->BanknoteSelling;	
	
	$AUDGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$AUDGuncelle->execute([$AUD_Adi, $AUD_Birim, $AUD_Alis, $AUD_Satis, $AUD_EfektifAlis, $AUD_EfektifSatis, $ZamanDamgasi, $AUD_KisaAdi]);
	$AUDEtkilenenSayi	=	$AUDGuncelle->rowCount();
		if($AUDEtkilenenSayi<1){
			echo "AUD Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$DKK_Birim			=	$Icerik->Currency[2]->Unit;
	$DKK_Adi			=	$Icerik->Currency[2]->Isim;
	$DKK_KisaAdi		=	$Icerik->Currency[2]["CurrencyCode"];
	$DKK_Alis			=	$Icerik->Currency[2]->ForexBuying;
	$DKK_Satis			=	$Icerik->Currency[2]->ForexSelling;
	$DKK_EfektifAlis	=	$Icerik->Currency[2]->BanknoteBuying;	
	$DKK_EfektifSatis	=	$Icerik->Currency[2]->BanknoteSelling;	
	
	$DKKGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$DKKGuncelle->execute([$DKK_Adi, $DKK_Birim, $DKK_Alis, $DKK_Satis, $DKK_EfektifAlis, $DKK_EfektifSatis, $ZamanDamgasi, $DKK_KisaAdi]);
	$DKKEtkilenenSayi	=	$DKKGuncelle->rowCount();
		if($DKKEtkilenenSayi<1){
			echo "DKK Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$EUR_Birim			=	$Icerik->Currency[3]->Unit;
	$EUR_Adi			=	$Icerik->Currency[3]->Isim;
	$EUR_KisaAdi		=	$Icerik->Currency[3]["CurrencyCode"];
	$EUR_Alis			=	$Icerik->Currency[3]->ForexBuying;
	$EUR_Satis			=	$Icerik->Currency[3]->ForexSelling;
	$EUR_EfektifAlis	=	$Icerik->Currency[3]->BanknoteBuying;	
	$EUR_EfektifSatis	=	$Icerik->Currency[3]->BanknoteSelling;	
	
	$EURGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$EURGuncelle->execute([$EUR_Adi, $EUR_Birim, $EUR_Alis, $EUR_Satis, $EUR_EfektifAlis, $EUR_EfektifSatis, $ZamanDamgasi, $EUR_KisaAdi]);
	$EUREtkilenenSayi	=	$EURGuncelle->rowCount();
		if($EUREtkilenenSayi<1){
			echo "EUR Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$GBP_Birim			=	$Icerik->Currency[4]->Unit;
	$GBP_Adi			=	$Icerik->Currency[4]->Isim;
	$GBP_KisaAdi		=	$Icerik->Currency[4]["CurrencyCode"];
	$GBP_Alis			=	$Icerik->Currency[4]->ForexBuying;
	$GBP_Satis			=	$Icerik->Currency[4]->ForexSelling;
	$GBP_EfektifAlis	=	$Icerik->Currency[4]->BanknoteBuying;	
	$GBP_EfektifSatis	=	$Icerik->Currency[4]->BanknoteSelling;	
	
	$GBPGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$GBPGuncelle->execute([$GBP_Adi, $GBP_Birim, $GBP_Alis, $GBP_Satis, $GBP_EfektifAlis, $GBP_EfektifSatis, $ZamanDamgasi, $GBP_KisaAdi]);
	$GBPEtkilenenSayi	=	$GBPGuncelle->rowCount();
		if($GBPEtkilenenSayi<1){
			echo "GBP Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$CHF_Birim			=	$Icerik->Currency[5]->Unit;
	$CHF_Adi			=	$Icerik->Currency[5]->Isim;
	$CHF_KisaAdi		=	$Icerik->Currency[5]["CurrencyCode"];
	$CHF_Alis			=	$Icerik->Currency[5]->ForexBuying;
	$CHF_Satis			=	$Icerik->Currency[5]->ForexSelling;
	$CHF_EfektifAlis	=	$Icerik->Currency[5]->BanknoteBuying;	
	$CHF_EfektifSatis	=	$Icerik->Currency[5]->BanknoteSelling;	
	
	$CHFGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$CHFGuncelle->execute([$CHF_Adi, $CHF_Birim, $CHF_Alis, $CHF_Satis, $CHF_EfektifAlis, $CHF_EfektifSatis, $ZamanDamgasi, $CHF_KisaAdi]);
	$CHFEtkilenenSayi	=	$CHFGuncelle->rowCount();
		if($CHFEtkilenenSayi<1){
			echo "CHF Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$SEK_Birim			=	$Icerik->Currency[6]->Unit;
	$SEK_Adi			=	$Icerik->Currency[6]->Isim;
	$SEK_KisaAdi		=	$Icerik->Currency[6]["CurrencyCode"];
	$SEK_Alis			=	$Icerik->Currency[6]->ForexBuying;
	$SEK_Satis			=	$Icerik->Currency[6]->ForexSelling;
	$SEK_EfektifAlis	=	$Icerik->Currency[6]->BanknoteBuying;	
	$SEK_EfektifSatis	=	$Icerik->Currency[6]->BanknoteSelling;	
	
	$SEKGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$SEKGuncelle->execute([$SEK_Adi, $SEK_Birim, $SEK_Alis, $SEK_Satis, $SEK_EfektifAlis, $SEK_EfektifSatis, $ZamanDamgasi, $SEK_KisaAdi]);
	$SEKEtkilenenSayi	=	$SEKGuncelle->rowCount();
		if($SEKEtkilenenSayi<1){
			echo "SEK Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$CAD_Birim			=	$Icerik->Currency[7]->Unit;
	$CAD_Adi			=	$Icerik->Currency[7]->Isim;
	$CAD_KisaAdi		=	$Icerik->Currency[7]["CurrencyCode"];
	$CAD_Alis			=	$Icerik->Currency[7]->ForexBuying;
	$CAD_Satis			=	$Icerik->Currency[7]->ForexSelling;
	$CAD_EfektifAlis	=	$Icerik->Currency[7]->BanknoteBuying;	
	$CAD_EfektifSatis	=	$Icerik->Currency[7]->BanknoteSelling;	
	
	$CADGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$CADGuncelle->execute([$CAD_Adi, $CAD_Birim, $CAD_Alis, $CAD_Satis, $CAD_EfektifAlis, $CAD_EfektifSatis, $ZamanDamgasi, $CAD_KisaAdi]);
	$CADEtkilenenSayi	=	$CADGuncelle->rowCount();
		if($CADEtkilenenSayi<1){
			echo "CAD Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$KWD_Birim			=	$Icerik->Currency[8]->Unit;
	$KWD_Adi			=	$Icerik->Currency[8]->Isim;
	$KWD_KisaAdi		=	$Icerik->Currency[8]["CurrencyCode"];
	$KWD_Alis			=	$Icerik->Currency[8]->ForexBuying;
	$KWD_Satis			=	$Icerik->Currency[8]->ForexSelling;
	$KWD_EfektifAlis	=	$Icerik->Currency[8]->BanknoteBuying;	
	$KWD_EfektifSatis	=	$Icerik->Currency[8]->BanknoteSelling;	
	
	$KWDGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$KWDGuncelle->execute([$KWD_Adi, $KWD_Birim, $KWD_Alis, $KWD_Satis, $KWD_EfektifAlis, $KWD_EfektifSatis, $ZamanDamgasi, $KWD_KisaAdi]);
	$KWDEtkilenenSayi	=	$KWDGuncelle->rowCount();
		if($KWDEtkilenenSayi<1){
			echo "KWD Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$NOK_Birim			=	$Icerik->Currency[9]->Unit;
	$NOK_Adi			=	$Icerik->Currency[9]->Isim;
	$NOK_KisaAdi		=	$Icerik->Currency[9]["CurrencyCode"];
	$NOK_Alis			=	$Icerik->Currency[9]->ForexBuying;
	$NOK_Satis			=	$Icerik->Currency[9]->ForexSelling;
	$NOK_EfektifAlis	=	$Icerik->Currency[9]->BanknoteBuying;	
	$NOK_EfektifSatis	=	$Icerik->Currency[9]->BanknoteSelling;	
	
	$NOKGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$NOKGuncelle->execute([$NOK_Adi, $NOK_Birim, $NOK_Alis, $NOK_Satis, $NOK_EfektifAlis, $NOK_EfektifSatis, $ZamanDamgasi, $NOK_KisaAdi]);
	$NOKEtkilenenSayi	=	$NOKGuncelle->rowCount();
		if($NOKEtkilenenSayi<1){
			echo "NOK Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$SAR_Birim			=	$Icerik->Currency[10]->Unit;
	$SAR_Adi			=	$Icerik->Currency[10]->Isim;
	$SAR_KisaAdi		=	$Icerik->Currency[10]["CurrencyCode"];
	$SAR_Alis			=	$Icerik->Currency[10]->ForexBuying;
	$SAR_Satis			=	$Icerik->Currency[10]->ForexSelling;
	$SAR_EfektifAlis	=	$Icerik->Currency[10]->BanknoteBuying;	
	$SAR_EfektifSatis	=	$Icerik->Currency[10]->BanknoteSelling;	
	
	$SARGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$SARGuncelle->execute([$SAR_Adi, $SAR_Birim, $SAR_Alis, $SAR_Satis, $SAR_EfektifAlis, $SAR_EfektifSatis, $ZamanDamgasi, $SAR_KisaAdi]);
	$SAREtkilenenSayi	=	$SARGuncelle->rowCount();
		if($SAREtkilenenSayi<1){
			echo "SAR Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$JPY_Birim			=	$Icerik->Currency[11]->Unit;
	$JPY_Adi			=	$Icerik->Currency[11]->Isim;
	$JPY_KisaAdi		=	$Icerik->Currency[11]["CurrencyCode"];
	$JPY_Alis			=	$Icerik->Currency[11]->ForexBuying;
	$JPY_Satis			=	$Icerik->Currency[11]->ForexSelling;
	$JPY_EfektifAlis	=	$Icerik->Currency[11]->BanknoteBuying;	
	$JPY_EfektifSatis	=	$Icerik->Currency[11]->BanknoteSelling;	
	
	$JPYGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$JPYGuncelle->execute([$JPY_Adi, $JPY_Birim, $JPY_Alis, $JPY_Satis, $JPY_EfektifAlis, $JPY_EfektifSatis, $ZamanDamgasi, $JPY_KisaAdi]);
	$JPYEtkilenenSayi	=	$JPYGuncelle->rowCount();
		if($JPYEtkilenenSayi<1){
			echo "JPY Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$BGN_Birim			=	$Icerik->Currency[12]->Unit;
	$BGN_Adi			=	$Icerik->Currency[12]->Isim;
	$BGN_KisaAdi		=	$Icerik->Currency[12]["CurrencyCode"];
	$BGN_Alis			=	$Icerik->Currency[12]->ForexBuying;
	$BGN_Satis			=	$Icerik->Currency[12]->ForexSelling;
	$BGN_EfektifAlis	=	$Icerik->Currency[12]->BanknoteBuying;	
	$BGN_EfektifSatis	=	$Icerik->Currency[12]->BanknoteSelling;	
	
	$BGNGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$BGNGuncelle->execute([$BGN_Adi, $BGN_Birim, $BGN_Alis, $BGN_Satis, $BGN_EfektifAlis, $BGN_EfektifSatis, $ZamanDamgasi, $BGN_KisaAdi]);
	$BGNEtkilenenSayi	=	$BGNGuncelle->rowCount();
		if($BGNEtkilenenSayi<1){
			echo "BGN Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$RON_Birim			=	$Icerik->Currency[13]->Unit;
	$RON_Adi			=	$Icerik->Currency[13]->Isim;
	$RON_KisaAdi		=	$Icerik->Currency[13]["CurrencyCode"];
	$RON_Alis			=	$Icerik->Currency[13]->ForexBuying;
	$RON_Satis			=	$Icerik->Currency[13]->ForexSelling;
	$RON_EfektifAlis	=	$Icerik->Currency[13]->BanknoteBuying;	
	$RON_EfektifSatis	=	$Icerik->Currency[13]->BanknoteSelling;	
	
	$RONGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$RONGuncelle->execute([$RON_Adi, $RON_Birim, $RON_Alis, $RON_Satis, $RON_EfektifAlis, $RON_EfektifSatis, $ZamanDamgasi, $RON_KisaAdi]);
	$RONEtkilenenSayi	=	$RONGuncelle->rowCount();
		if($RONEtkilenenSayi<1){
			echo "RON Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$RUB_Birim			=	$Icerik->Currency[14]->Unit;
	$RUB_Adi			=	$Icerik->Currency[14]->Isim;
	$RUB_KisaAdi		=	$Icerik->Currency[14]["CurrencyCode"];
	$RUB_Alis			=	$Icerik->Currency[14]->ForexBuying;
	$RUB_Satis			=	$Icerik->Currency[14]->ForexSelling;
	$RUB_EfektifAlis	=	$Icerik->Currency[14]->BanknoteBuying;	
	$RUB_EfektifSatis	=	$Icerik->Currency[14]->BanknoteSelling;	
	
	$RUBGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$RUBGuncelle->execute([$RUB_Adi, $RUB_Birim, $RUB_Alis, $RUB_Satis, $RUB_EfektifAlis, $RUB_EfektifSatis, $ZamanDamgasi, $RUB_KisaAdi]);
	$RUBEtkilenenSayi	=	$RUBGuncelle->rowCount();
		if($RUBEtkilenenSayi<1){
			echo "RUB Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$IRR_Birim			=	$Icerik->Currency[15]->Unit;
	$IRR_Adi			=	$Icerik->Currency[15]->Isim;
	$IRR_KisaAdi		=	$Icerik->Currency[15]["CurrencyCode"];
	$IRR_Alis			=	$Icerik->Currency[15]->ForexBuying;
	$IRR_Satis			=	$Icerik->Currency[15]->ForexSelling;
	$IRR_EfektifAlis	=	$Icerik->Currency[15]->BanknoteBuying;	
	$IRR_EfektifSatis	=	$Icerik->Currency[15]->BanknoteSelling;	
	
	$IRRGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$IRRGuncelle->execute([$IRR_Adi, $IRR_Birim, $IRR_Alis, $IRR_Satis, $IRR_EfektifAlis, $IRR_EfektifSatis, $ZamanDamgasi, $IRR_KisaAdi]);
	$IRREtkilenenSayi	=	$IRRGuncelle->rowCount();
		if($IRREtkilenenSayi<1){
			echo "IRR Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$CNY_Birim			=	$Icerik->Currency[16]->Unit;
	$CNY_Adi			=	$Icerik->Currency[16]->Isim;
	$CNY_KisaAdi		=	$Icerik->Currency[16]["CurrencyCode"];
	$CNY_Alis			=	$Icerik->Currency[16]->ForexBuying;
	$CNY_Satis			=	$Icerik->Currency[16]->ForexSelling;
	$CNY_EfektifAlis	=	$Icerik->Currency[16]->BanknoteBuying;	
	$CNY_EfektifSatis	=	$Icerik->Currency[16]->BanknoteSelling;	
	
	$CNYGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$CNYGuncelle->execute([$CNY_Adi, $CNY_Birim, $CNY_Alis, $CNY_Satis, $CNY_EfektifAlis, $CNY_EfektifSatis, $ZamanDamgasi, $CNY_KisaAdi]);
	$CNYEtkilenenSayi	=	$CNYGuncelle->rowCount();
		if($CNYEtkilenenSayi<1){
			echo "CNY Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$PKR_Birim			=	$Icerik->Currency[17]->Unit;
	$PKR_Adi			=	$Icerik->Currency[17]->Isim;
	$PKR_KisaAdi		=	$Icerik->Currency[17]["CurrencyCode"];
	$PKR_Alis			=	$Icerik->Currency[17]->ForexBuying;
	$PKR_Satis			=	$Icerik->Currency[17]->ForexSelling;
	$PKR_EfektifAlis	=	$Icerik->Currency[17]->BanknoteBuying;	
	$PKR_EfektifSatis	=	$Icerik->Currency[17]->BanknoteSelling;	
	
	$PKRGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$PKRGuncelle->execute([$PKR_Adi, $PKR_Birim, $PKR_Alis, $PKR_Satis, $PKR_EfektifAlis, $PKR_EfektifSatis, $ZamanDamgasi, $PKR_KisaAdi]);
	$PKREtkilenenSayi	=	$PKRGuncelle->rowCount();
		if($PKREtkilenenSayi<1){
			echo "PKR Güncelleme İşleminde Hata Oluştu";
			die();
		}
	
	$QAR_Birim			=	$Icerik->Currency[18]->Unit;
	$QAR_Adi			=	$Icerik->Currency[18]->Isim;
	$QAR_KisaAdi		=	$Icerik->Currency[18]["CurrencyCode"];
	$QAR_Alis			=	$Icerik->Currency[18]->ForexBuying;
	$QAR_Satis			=	$Icerik->Currency[18]->ForexSelling;
	$QAR_EfektifAlis	=	$Icerik->Currency[18]->BanknoteBuying;	
	$QAR_EfektifSatis	=	$Icerik->Currency[18]->BanknoteSelling;	
	
	$QARGuncelle		=	$VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET adi = ?, birim = ?, alis = ?, satis = ?, efektifalis = ?, efektifsatis = ?, guncellenmezamani = ? WHERE kodu = ?");
	$QARGuncelle->execute([$QAR_Adi, $QAR_Birim, $QAR_Alis, $QAR_Satis, $QAR_EfektifAlis, $QAR_EfektifSatis, $ZamanDamgasi, $QAR_KisaAdi]);
	$QAREtkilenenSayi	=	$QARGuncelle->rowCount();
		if($QAREtkilenenSayi<1){
			echo "QAR Güncelleme İşleminde Hata Oluştu";
			die();
		}
	?>
	
	<table align="center" width="900" border="0" cellpadding="0" cellspacing="0">
		<tr height="30" bgcolor="#CCCCCC">
			<th align="left" width="250">Adı</th>
			<th align="left" width="100">Kısa Adı</th>
			<th align="left" width="100">Birim</th>
			<th align="left" width="100">Alış</th>
			<th align="left" width="100">Satış</th>
			<th align="left" width="125">Efektif Alış</th>
			<th align="left" width="125">Efektif Satış</th>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $USD_Adi; ?></td>
			<td align="left" width="100"><?php echo $USD_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $USD_Birim; ?></td>
			<td align="left" width="100"><?php echo $USD_Alis; ?></td>
			<td align="left" width="100"><?php echo $USD_Satis; ?></td>
			<td align="left" width="125"><?php echo $USD_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $USD_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $AUD_Adi; ?></td>
			<td align="left" width="100"><?php echo $AUD_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $AUD_Birim; ?></td>
			<td align="left" width="100"><?php echo $AUD_Alis; ?></td>
			<td align="left" width="100"><?php echo $AUD_Satis; ?></td>
			<td align="left" width="125"><?php echo $AUD_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $AUD_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $DKK_Adi; ?></td>
			<td align="left" width="100"><?php echo $DKK_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $DKK_Birim; ?></td>
			<td align="left" width="100"><?php echo $DKK_Alis; ?></td>
			<td align="left" width="100"><?php echo $DKK_Satis; ?></td>
			<td align="left" width="125"><?php echo $DKK_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $DKK_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $EUR_Adi; ?></td>
			<td align="left" width="100"><?php echo $EUR_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $EUR_Birim; ?></td>
			<td align="left" width="100"><?php echo $EUR_Alis; ?></td>
			<td align="left" width="100"><?php echo $EUR_Satis; ?></td>
			<td align="left" width="125"><?php echo $EUR_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $EUR_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $GBP_Adi; ?></td>
			<td align="left" width="100"><?php echo $GBP_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $GBP_Birim; ?></td>
			<td align="left" width="100"><?php echo $GBP_Alis; ?></td>
			<td align="left" width="100"><?php echo $GBP_Satis; ?></td>
			<td align="left" width="125"><?php echo $GBP_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $GBP_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $CHF_Adi; ?></td>
			<td align="left" width="100"><?php echo $CHF_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $CHF_Birim; ?></td>
			<td align="left" width="100"><?php echo $CHF_Alis; ?></td>
			<td align="left" width="100"><?php echo $CHF_Satis; ?></td>
			<td align="left" width="125"><?php echo $CHF_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $CHF_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $SEK_Adi; ?></td>
			<td align="left" width="100"><?php echo $SEK_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $SEK_Birim; ?></td>
			<td align="left" width="100"><?php echo $SEK_Alis; ?></td>
			<td align="left" width="100"><?php echo $SEK_Satis; ?></td>
			<td align="left" width="125"><?php echo $SEK_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $SEK_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $CAD_Adi; ?></td>
			<td align="left" width="100"><?php echo $CAD_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $CAD_Birim; ?></td>
			<td align="left" width="100"><?php echo $CAD_Alis; ?></td>
			<td align="left" width="100"><?php echo $CAD_Satis; ?></td>
			<td align="left" width="125"><?php echo $CAD_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $CAD_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $KWD_Adi; ?></td>
			<td align="left" width="100"><?php echo $KWD_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $KWD_Birim; ?></td>
			<td align="left" width="100"><?php echo $KWD_Alis; ?></td>
			<td align="left" width="100"><?php echo $KWD_Satis; ?></td>
			<td align="left" width="125"><?php echo $KWD_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $KWD_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $NOK_Adi; ?></td>
			<td align="left" width="100"><?php echo $NOK_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $NOK_Birim; ?></td>
			<td align="left" width="100"><?php echo $NOK_Alis; ?></td>
			<td align="left" width="100"><?php echo $NOK_Satis; ?></td>
			<td align="left" width="125"><?php echo $NOK_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $NOK_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $SAR_Adi; ?></td>
			<td align="left" width="100"><?php echo $SAR_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $SAR_Birim; ?></td>
			<td align="left" width="100"><?php echo $SAR_Alis; ?></td>
			<td align="left" width="100"><?php echo $SAR_Satis; ?></td>
			<td align="left" width="125"><?php echo $SAR_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $SAR_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $JPY_Adi; ?></td>
			<td align="left" width="100"><?php echo $JPY_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $JPY_Birim; ?></td>
			<td align="left" width="100"><?php echo $JPY_Alis; ?></td>
			<td align="left" width="100"><?php echo $JPY_Satis; ?></td>
			<td align="left" width="125"><?php echo $JPY_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $JPY_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $BGN_Adi; ?></td>
			<td align="left" width="100"><?php echo $BGN_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $BGN_Birim; ?></td>
			<td align="left" width="100"><?php echo $BGN_Alis; ?></td>
			<td align="left" width="100"><?php echo $BGN_Satis; ?></td>
			<td align="left" width="125"><?php echo $BGN_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $BGN_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $RON_Adi; ?></td>
			<td align="left" width="100"><?php echo $RON_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $RON_Birim; ?></td>
			<td align="left" width="100"><?php echo $RON_Alis; ?></td>
			<td align="left" width="100"><?php echo $RON_Satis; ?></td>
			<td align="left" width="125"><?php echo $RON_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $RON_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $RUB_Adi; ?></td>
			<td align="left" width="100"><?php echo $RUB_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $RUB_Birim; ?></td>
			<td align="left" width="100"><?php echo $RUB_Alis; ?></td>
			<td align="left" width="100"><?php echo $RUB_Satis; ?></td>
			<td align="left" width="125"><?php echo $RUB_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $RUB_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $IRR_Adi; ?></td>
			<td align="left" width="100"><?php echo $IRR_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $IRR_Birim; ?></td>
			<td align="left" width="100"><?php echo $IRR_Alis; ?></td>
			<td align="left" width="100"><?php echo $IRR_Satis; ?></td>
			<td align="left" width="125"><?php echo $IRR_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $IRR_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $CNY_Adi; ?></td>
			<td align="left" width="100"><?php echo $CNY_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $CNY_Birim; ?></td>
			<td align="left" width="100"><?php echo $CNY_Alis; ?></td>
			<td align="left" width="100"><?php echo $CNY_Satis; ?></td>
			<td align="left" width="125"><?php echo $CNY_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $CNY_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $PKR_Adi; ?></td>
			<td align="left" width="100"><?php echo $PKR_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $PKR_Birim; ?></td>
			<td align="left" width="100"><?php echo $PKR_Alis; ?></td>
			<td align="left" width="100"><?php echo $PKR_Satis; ?></td>
			<td align="left" width="125"><?php echo $PKR_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $PKR_EfektifSatis; ?></td>
		</tr>
		<tr height="30">
			<td align="left" width="250"><?php echo $QAR_Adi; ?></td>
			<td align="left" width="100"><?php echo $QAR_KisaAdi; ?></td>
			<td align="left" width="100"><?php echo $QAR_Birim; ?></td>
			<td align="left" width="100"><?php echo $QAR_Alis; ?></td>
			<td align="left" width="100"><?php echo $QAR_Satis; ?></td>
			<td align="left" width="125"><?php echo $QAR_EfektifAlis; ?></td>
			<td align="left" width="125"><?php echo $QAR_EfektifSatis; ?></td>
		</tr>
	</table>
	
	<?php
	/*
	echo "<pre>";
	print_r($Icerik);
	echo "</pre>";
	*/
	?>
</body>
</html>
<?php
$VeriTabaniBaglantisi	=	null;
?>