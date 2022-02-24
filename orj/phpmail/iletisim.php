<?php

	/* Genel Ayarlar */
	include "../config.php";
	
	$sql = "SELECT mail FROM info";
	$sth = $db->prepare($sql);
	$db->query("SET NAMES 'UTF8'");
	$sth->execute();
	$result = $sth->fetchAll();
	$alici = $result[0]['mail'];
//$alici = "bes-tas@hotmail.com";

if($_SESSION[guv] == $_POST[guv]) {

if (isset($_POST['islem'])) {
	
	if ($_POST['email']<>'' && $_POST['name']<>''  && $_POST['message']<>'') {

	require_once("class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "mail.okayiletisim.com";
	$mail->SMTPAuth = true;
	$mail->Username = "info@okayiletisim.com";
	$mail->Password = "1H3qULU46TNL";
	$mail->From = $_POST['email'];
	$mail->Fromname = $_POST['email'];
	$mail->AddAddress($alici,$_POST['name']);
	$mail->Subject = "Okay İletişim Sayfası  " . $_POST['email'];


$mail->CharSet  = 'utf-8'; 


	$mail->Body = "Okayiletisim.com Web sitesi mesaj içeriği aşağıdadır. \n Gönderen adı : ".$_POST['name']." \n Gönderen : ".$_POST['email']." \n Mesaj : \n ".$_POST['message'];

	if(!$mail->Send())
	{
	   echo '<font color="#F62217"><b>Gönderim Hatasý: ' . $mail->ErrorInfo . '</b></font>';
	   exit;
	}
	echo '<font color="#41A317"><b>Mesaj baþarýyla gönderildi.</b></font>';
	} else {
		 echo '<font color="#F62217"><b>Tüm alanlarýn doldurulmasý zorunludur.</b></font>';
	}
}


} else { echo '<font color="#F62217"><b>Güvenlik Kodu Hatalı.</b></font>';  }
?>
