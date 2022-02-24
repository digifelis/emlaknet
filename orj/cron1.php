<?php
require_once("class/eb.vt.php");
require_once("class/tarih.php");
require_once("class/eb.myArray.php");
require_once("class/eb.formDogrula.php");
require_once("config.php");
//include("mail/mailer.class.php");
require_once("phpmail/class.phpmailer.php");

$vt->sql("select ilan_ticari.id,ilan_ticari.uye_id,ilan_ticari.bas_tarihi,ilan_ticari.ilan_suresi ,uyeler.isim_soyad , uyeler.email  from ilan_ticari,uyeler where ilan_ticari.onay !='3' and ilan_ticari.uye_id=uyeler.id   group by uyeler.email  order by ilan_ticari.id asc")->sor();


//$vt->sql("select id,uye_id,bas_tarihi,ilan_suresi from ilan_ticari where onay ='3'  order by id asc")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) {
$kullanici_id = $veri->uye_id;


//echo $veri->email."<br>";



/// echo strtotime($veri->bas_tarihi)+$veri->ilan_suresi*86400  .' - '.$veri->id.'<br>';

if(strtotime($veri->bas_tarihi)+$veri->ilan_suresi*86400 <= strtotime($tarih)) {

$vt->sql("update ilan_ticari set onay ='3' where id= '".$veri->id."'")->sor();	
/// echo $veri->id ."<br>";	



/* 
ggggggggggggggggggggggg
  $vt->sql('select isim_soyad , email from uyeler where id= "'.$kullanici_id.'" ')->sor();
 $veriler = $vt->alHepsi();
foreach($veriler as $veri) {
*/




$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "mail.emlaknetturkiye.com";
	$mail->SMTPAuth = true;
	$mail->Username = $gonderen_email;
	$mail->Password = $gonderen_email_parola;
	$mail->From = $gonderen_email;
	$mail->Fromname = "EmlakNetTürkiye";
	$mail->AddAddress($veri->email,$veri->isim_soyad);
	$mail->Subject = $site.' ilan bitisi';
        $mail->IsHTML(true);

$mail->CharSet  = 'utf-8'; 


	$mail->Body = '<strong>Sayin  '.$veri->isim_soyad.' ;</strong><br>
'.$site.' sitesinde verdiginiz ilaninizin süresi bitmistir.Yeniden ilaninizi yayina almak için<br>
sitemizi ziyaret etmeniz gerekmektedir.
<br>
<br>
<strong>Not : Emailin size yanlis geldigini düşünüyorsaniz lütfen dikkate almayiniz.</strong><br>
';


if(!$mail->Send())
	{
	   echo '<font color="#F62217"><b>Gönderim Hatası: ' . $mail->ErrorInfo . '</b></font>';
	   exit;
	}
	echo '<font color="#41A317"><b>Mesaj başarıyla gönderildi.</b></font>';















/// gggg  } 



}
	
}
?>