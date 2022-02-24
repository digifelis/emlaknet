<?php
if(temizle($_POST["email"] != "")) {

$vt->sql("select * from uyeler where kullanici_adi = '".temizle($_POST["email"])."'")->sor();
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		$vt_email = $veri->kullanici_adi;
		$vt_sifre = $veri->sifre;
	}
	if($vt->numRows() > 0) 
	{
	//////////////////


require_once("phpmail/class.phpmailer.php");




$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "188.132.200.135";
        
	$mail->SMTPAuth = true;
	

        $mail->Username = $gonderen_email;
	$mail->Password = $gonderen_email_parola;

	$mail->From = $gonderen_email;
	$mail->Fromname = $site;
	$mail->AddAddress($veri->email,$veri->isim_soyad);
	$mail->Subject = $site.' unutulan şifre başvurusu';

$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->IsSMTP();
    $mail->SMTPAuth = true;

        $mail->IsHTML(true);

$mail->CharSet  = 'utf-8'; 


	$mail->Body = '	<p>Sayın Üyemiz ;</p>
<p>Şifremi Unuttum sayfasından şifre isteğinde bulunulmuştur. Şifreniz aşağıda verilmiştir.</p>
<p>Kullanıcı adı :&nbsp;'.$vt_email.'<br />
  Şifre :&nbsp;'.$vt_sifre.'<br />
  <br />
  İlgilendiğiniz için teşekkür ederiz. <br />
'.$site.' yönetimi </p>';


if(!$mail->Send())
	{
	   echo '<font color="#F62217"><b>Gönderim Hatası: ' . $mail->ErrorInfo . '</b></font>';
	   exit;
	}
	echo '<font color="#41A317"><b>Mesaj başarıyla gönderildi.</b></font>';






	
	} else {
		echo "<center><h4>Verdiðiniz email Adresini kontrol ediniz.</h4></center>";
			}
	
							
								}

?>

<form id="form1" name="form1" method="post" action="">
  <table width="50%" border="0" align="center">
    <tr>
      <td><label>
        Email Adresiniz : 
        <input type="text" name="email" id="email" />
      </label></td>
      <td><label>
        <input type="submit" name="button" id="button" value="Þifremi G&ouml;nder" />
      </label></td>
    </tr>
  </table>
</form>


