<script type="text/javascript">
 <!--
 function confirmation() {
         var answer = confirm("cikmak istediginize emin misiniz?");
         if (answer){
                 alert("Gule gule");
                 window.location = "http://www.google.com/";
         }
         else{
                 alert("Tesekkur ederiz")
         }
 }
 //-->
 </script>
<TABLE border=0 cellSpacing=0 cellPadding=0 width=900 align=center>
  <TBODY>
  <TR>
    <TD>
      <TABLE 
      style="BORDER-BOTTOM: #e2e2e2 1px solid; BORDER-LEFT: #e2e2e2 1px solid; BORDER-TOP: #e2e2e2 1px solid; BORDER-RIGHT: #e2e2e2 1px solid" 
      border=0 cellSpacing=3 cellPadding=3 width=500 align=center>
        <TBODY>
        <TR>
          <TD>
            <SCRIPT type=text/javascript>
<!--
function numbersonly(myfield, e, dec)
{
var key;
var keychar;
if (window.event)
   key = window.event.keyCode;
else if (e)
   key = e.which;
else
   return true;
keychar = String.fromCharCode(key);
if ((key==null) || (key==0) || (key==8) || 
    (key==9) || (key==13) || (key==27) )
   return true;
else if ((("0123456789").indexOf(keychar) > -1))
   return true;
else if (dec && (keychar == "."))
   {
   myfield.form.elements[dec].focus();
   return false;
   }
else
   return false;
}
//-->
</SCRIPT>

            <SCRIPT type=text/javascript>
MS_restrict_field = function(formname, id_or_name, chars) {

	var obj = (document.getElementById && document.getElementById(id_or_name) != null)
			  ? document.getElementById(id_or_name) : ((document[formname][id_or_name] != null)
			  ? document[formname][id_or_name] : '');

	if(obj.type == "text" || obj.type == "textarea") {

		obj.timer = "";
		obj.chars = chars;
		obj.onkeypress = obj.onkeydown = function() {
			var self = this;
			controll = function() {
				for(var t='',x=0; x<self.value.length; ++x) {
					if(self.chars.indexOf(self.value.charAt(x))>-1) {
						t += self.value.charAt(x);
					}
				}
				self.value = t;
			};
			this.timer = setTimeout(controll,1);
		};
		obj.onkeyup = function() {
			clearTimeout(this.timer);
		};
	}
};

</SCRIPT>

            <DIV align=center><STRONG> Bireysel &Uuml;yelik kay&#305;t B&ouml;l&uuml;m&uuml;
              <br />
              Sadece Sahibinden Emlak &#304;lanlar&#305; &#304;&ccedil;in Ge&ccedil;erlidir. </STRONG></DIV>
            <HR color=#c0c0c0 SIZE=1 width="100%" noShade>

            <TABLE border=0 cellSpacing=2 cellPadding=2 align=center>
              <FORM encType=multipart/form-data method=post 
              action="" name="yeniuye"><INPUT value=yeniuye type=hidden name=action> 
              <TBODY>
              <TR>
                <TD colSpan=2>
                  <DIV align=center>(*) &#304;&#351;aretli Alanlar, Doldurulmaks&#305; Gereken Zorunlu Alanlard&#305;r.
                  <?php
	if(temizle($_POST["email"]) !="" ) {			  
if ($_SESSION["guv"] == addslashes($_POST["kod"]) )   { 

$vt->sql('select * from uyeler   where kullanici_adi = "'.temizle($_POST["email"]).'" ');
 $vt->sor();	
/// echo $vt->numRows();
/// echo temizle($_POST["email"]);
//// form do?rulama
if($vt->numRows() == 0 ) {
	if(temizle($_POST["email"]) != "" ) {
$fdo = new formDogrula('yeniuye', 'post'); 

// formu dogrularken kullanilacak kurallar 
$fdo->kurallar( 
	array('email', 'E-mail', 'gerekli|eposta'), 
	array('email2', 'E-mail (Tekrar)', 'gerekli|eposta|eslestir[email,E-mail]'),
	
	array('name', 'Yetkili Kisi Isim Soyisim', 'gerekli'),
//	array('adres', 'Adres', 'gerekli|ara_uzunluk[5,1255]'),
	array('postakodu', 'Posta kodu', 'gerekli|rakam'),
//	array('yer', 'Ilçe', 'gerekli|ara_uzunluk[3,500]'),
	array('il', 'Il', 'gerekli|rakam')
//	array('telefon', 'Telefon', 'gerekli|ara_uzunluk[3,100]|rakam'),
	
//	array('cep', 'Cep', 'gerekli|ara_uzunluk[3,100]|rakam')
	); 

// formu dogrulat 
if( $fdo->dogrulat() ){  
////// veritabani kaydi
  	  $vt->sql('select normal_uye_onay from ayar where id=1')->sor();
	    $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
	  $normal_onay = $veri->normal_uye_onay;
  }

if($normal_onay==1){ $onay=0;}
if($normal_onay==2){ $onay=1;}
if($normal_onay==3){ $onay=1;}

$vt->sql('INSERT INTO `uyeler` VALUES (NULL, %s, %s,%s, %s,%s, %s,%s, %s,%s, %s,%s, %s,%s, %s,%s, %s,%s,%s, %s,%s,%s,%s)');
$sifre = rand(1000,100000);
$vt->arg($_POST['email'],$sifre,$_POST['name'],$_POST['adres'],$_POST['postakodu'],$_POST['yer'],$_POST['il'],$_POST['email'],$_POST['telefon'],$_POST['telefax'],$_POST['cep'],temizle($_POST['firma']),temizle($_POST["telefon_areacode"]),temizle($_POST["telefax_areacode"]),temizle($_POST["cep_areacode"]),$_POST['url'] ,2,0,$onay,$son_zaman,permayap(temizle($_POST['firma'])),md5($_POST['email']) );
$vt->sor();

//////////////////
if($normal_onay==1){

require_once("phpmail/class.phpmailer.php");
$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "mail.emlaknetturkiye.com";
	$mail->SMTPAuth = true;
	$mail->Username = $gonderen_email;
	$mail->Password = $gonderen_email_parola;
	$mail->From = $gonderen_email;
	$mail->Fromname = $site;
	$mail->AddAddress(temizle($_POST['email']),temizle($_POST['name']));
	$mail->Subject = $site.'  üyelik basvurusu';
        $mail->IsHTML(true);
        $mail->CharSet  = 'utf-8'; 
        $mail->Body = '<strong>Sayin  '.temizle($_POST['name']).' ;</strong><br>
'.$site.' sitesine üyelik kaydiniz gerçeklestirilmistir. <br>
Kullanici adiniz : '.temizle($_POST['email']).'<br>
Sifreniz : '.$sifre.'<br>
Not : emailin size yanlis geldigini düsünüyorsaniz lütfen dikkate almayiniz.<br>
';


if(!$mail->Send())
	{
	   echo '<font color="#F62217"><b>Gönderim Hatası: ' . $mail->ErrorInfo . '</b></font>';
	   exit;
	}
	echo '<font color="#41A317"><b>Mesaj başarıyla gönderildi.</b></font>';


////////////


header( "refresh:2;url=index.php?action=giris&hata=3" );

}
if($normal_onay==2){



require_once("phpmail/class.phpmailer.php");
$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "mail.emlaknetturkiye.com";
	$mail->SMTPAuth = true;
	$mail->Username = $gonderen_email;
	$mail->Password = $gonderen_email_parola;
	$mail->From = $gonderen_email;
	$mail->Fromname = $site;
	$mail->AddAddress(temizle($_POST['email']),temizle($_POST['name']));
	$mail->Subject = $site.'  üyelik basvurusu';
        $mail->IsHTML(true);
        $mail->CharSet  = 'utf-8'; 
        $mail->Body = '<strong>Sayin  '.temizle($_POST['name']).' ;</strong><br>
'.$site.' sitesine üyelik kaydiniz gerçeklestirilmistir. <br>
Kullanici adiniz : '.temizle($_POST['email']).'<br>
Sifreniz : '.$sifre.'<br>
<a href="http://www.'.$site.'/index.php?action=onayla&hash='.md5($_POST['email']).'">Üyeliginizi Aktive etmek için Tiklayiniz</a><br>
Not : emailin size yanlis geldigini düsünüyorsaniz lütfen dikkate almayiniz.<br>
';


if(!$mail->Send())
	{
	   echo '<font color="#F62217"><b>Gönderim Hatası: ' . $mail->ErrorInfo . '</b></font>';
	   exit;
	}
	echo '<font color="#41A317"><b>Mesaj başarıyla gönderildi.</b></font>';





header( "refresh:2;url=index.php?action=giris&hata=3" );
}
if($normal_onay==3){




require_once("phpmail/class.phpmailer.php");
$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "mail.emlaknetturkiye.com";
	$mail->SMTPAuth = true;
	$mail->Username = $gonderen_email;
	$mail->Password = $gonderen_email_parola;
	$mail->From = $gonderen_email;
	$mail->Fromname = $site;
	$mail->AddAddress(temizle($_POST['email']),temizle($_POST['name']));
	$mail->Subject = $site.'  üyelik basvurusu';
        $mail->IsHTML(true);
        $mail->CharSet  = 'utf-8'; 
        $mail->Body = '<strong>Sayin  '.temizle($_POST['name']).' ;</strong><br>
'.$site.' sitesine üyelik kaydiniz gerçeklestirilmistir. <br>
Kullanici adiniz : '.temizle($_POST['email']).'<br>
Sifreniz : '.$sifre.'<br>
Not : emailin size yanlis geldigini düsünüyorsaniz lütfen dikkate almayiniz.<br>
';

if(!$mail->Send())
	{
	   echo '<font color="#F62217"><b>Gönderim Hatası: ' . $mail->ErrorInfo . '</b></font>';
	   exit;
	}
	echo '<font color="#41A317"><b>Mesaj başarıyla gönderildi.</b></font>';






header( "refresh:2;url=index.php?action=giris&hata=4" );
}

}else{ 

echo  ' <table width="100%" border="0" cellspacing="4" cellpadding="4" align="center" style="border: 3px solid #FF0000;">
<tr>
	<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td><img src="http://www.zabrodzie.pl/pliki/grafika/alarm.gif" width="43" height="43" alt="" border="0"></td>
				<td nowrap><font color="#CC0000" size="2"><strong>Ba&#351;vuru i&#351;leminizde hata meydana geldi !</strong></font><br>
				Ba&#351;vuru s&#305;ras&#305;nda eksik veya hatal&#305; giri&#351; yap&#305;lm&#305;&#351;t&#305;r.</td>
			</tr>
			</table>
			
			
			<strong>Lütfen hatal&#305; ve/veya eksik alanlar&#305; tamamlay&#305;n&#305;z.</font></strong> 
			<br><br>
			
			<ul><strong>
			';
			$fdo->yazHatalar('<li>', '</li>', false);
echo '</strong></ul>
	</td>
</tr>
</table>
				<br><br>';         
	}
	
	} else {echo "<h2>Email Adresi Yazmayý Unuttunuz</h2>";}
} else { echo "<h3>Girdi&#287;iniz email adresi zaten kay&#305;tl&#305;d&#305;r. <br> Daha &ouml;nce &uuml;ye olduysan&#305;z &Uuml;ye Giri&#351; B&ouml;l&uuml;m&uuml;ndeki &#351;ifremi unuttum butonunu t&#305;klay&#305;n&#305;z</h3>";}


} else { 
echo "<h2>Güvenlik Kodu Yanl&#305;&#351; Girildi</h2>";
		}
		
		
		
	}
?>
<HR color=#c0c0c0 SIZE=1 width="100%" noShade>
                  </DIV></TD></TR>
              <TR>
                <TD></TD>
                <TD><FONT size=2><STRONG>&Uuml;yelik 
              Bilgileriniz</STRONG></FONT></TD></TR>
              <TR>
                <TD>
                  <DIV align=right>E-Mail:*</DIV></TD>
                <TD><INPUT style="WIDTH: 100%" id=field class=input 
                  maxLength=64 name=email value="<?php echo $_POST['email']; ?>"></TD></TR>
              <TR>
                <TD noWrap>
                  <DIV align=right>E-Mail (Tekrar):*</DIV></TD>
                <TD><INPUT style="WIDTH: 100%" id=field class=input 
                  maxLength=64 name=email2 value="<?php echo $_POST['email2']; ?>"></TD></TR>
              <TR>
                <TD colSpan=2>
                  <DIV align=center><FONT 
                  color=#cc0000><STRONG>&#350;ifre:<BR>
                     &#350;ifreniz Otomatik Olu&#351;turularak E-Mail Adresinize G&ouml;nderilecektir. Aktif ve Kullanmakta Oldu&#287;unuz E-Mail Adresinizi Yaz&#305;n&#305;z. Aksi Takdirde &#350;ifrenize Ula&#351;amayacak ve &Uuml;ye Giri&#351;i Yapamayacaks&#305;n&#305;z.</STRONG></FONT></DIV></TD></TR>
              <TR>
                <TD></TD>
                <TD><BR></TD></TR>
              <TR>
                <TD></TD>
                <TD><FONT size=2><STRONG>&Uuml;yelik 
Bilgileri</STRONG></FONT></TD></TR>
              <TR>
                <TD>
                  <DIV align=right>&#304;sim Soyisim:*</DIV></TD>
                <TD><INPUT style="WIDTH: 100%" class=input maxLength=64 
                  name=name value="<?php echo $_POST['name']; ?>"></TD></TR>
              <TR>
                <TD>
                  <DIV align=right>Adres:*</DIV></TD>
                <TD><INPUT style="WIDTH: 100%" class=input  
                  name=adres value="<?php echo $_POST['adres']; ?>"></TD></TR>
              <TR>
                <TD>
                  <DIV align=right>&#304;l&ccedil;e:*</DIV></TD>
                <TD>
                  <INPUT 
                  class=input maxLength=64 size=19 name=yer value="<?php echo $_POST['yer']; ?>">
                &nbsp;&nbsp;&nbsp;Posta Kodu:*&nbsp;
                <INPUT class=input 
                  onkeypress="return numbersonly(this, event)" maxLength=5 
                  size=5 name=postakodu value="<?php echo $_POST['postakodu']; ?>"></TD></TR>
              <TR>
                <TD>
                  <DIV align=right>&#304;l:*</DIV></TD>
                <TD><SELECT class=input name=il>
                
            <?php 
		  $vt->sql("select * from sehir order by sehiradiUpper ASC")->sor();
        $veriler = $vt->alHepsi();
		foreach ($veriler as $veri) {
			if($veri->sehirID == temizle($_POST["il"])) { $secili = 'selected="selected"';   }
			echo '<option value="'.$veri->sehirID.'" '.$secili.'>'.$veri->sehiradiUpper.'</option> ';
			$secili = "";
		}
                
         ?>          
                
                
                
                </SELECT> </TD></TR>
              <TR>
                <TD></TD>
                <TD></TD></TR>
              <TR>
                <TD>
                  <DIV align=right>Telefon:*</DIV></TD>
                <TD>
                  <TABLE border=0 cellSpacing=0 cellPadding=0>
                    <TBODY>
                    <TR>
                      <TD><SELECT class=input size=1 name=telefon_areacode>
                        <OPTION value="0 212" <?php if (!(strcmp("0 212", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 212</OPTION>
                        <OPTION 
                          value="0 216" <?php if (!(strcmp("0 216", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 216</OPTION>
                        <OPTION value="0 222" <?php if (!(strcmp("0 222", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           222</OPTION>
                        <OPTION value="0 224" <?php if (!(strcmp("0 224", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 224</OPTION>
                        <OPTION value="0 226" <?php if (!(strcmp("0 226", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 226</OPTION>
                        <OPTION 
                          value="0 228" <?php if (!(strcmp("0 228", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 228</OPTION>
                        <OPTION value="0 232" <?php if (!(strcmp("0 232", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           232</OPTION>
                        <OPTION value="0 236" <?php if (!(strcmp("0 236", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 236</OPTION>
                        <OPTION value="0 242" <?php if (!(strcmp("0 242", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 242</OPTION>
                        <OPTION 
                          value="0 246" <?php if (!(strcmp("0 246", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 246</OPTION>
                        <OPTION value="0 248" <?php if (!(strcmp("0 248", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           248</OPTION>
                        <OPTION value="0 252" <?php if (!(strcmp("0 252", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 252</OPTION>
                        <OPTION value="0 256" <?php if (!(strcmp("0 256", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 256</OPTION>
                        <OPTION 
                          value="0 258" <?php if (!(strcmp("0 258", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 258</OPTION>
                        <OPTION value="0 262" <?php if (!(strcmp("0 262", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           262</OPTION>
                        <OPTION value="0 264" <?php if (!(strcmp("0 264", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 264</OPTION>
                        <OPTION value="0 266" <?php if (!(strcmp("0 266", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 266</OPTION>
                        <OPTION 
                          value="0 272" <?php if (!(strcmp("0 272", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 272</OPTION>
                        <OPTION value="0 274" <?php if (!(strcmp("0 274", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           274</OPTION>
                        <OPTION value="0 276" selected="selected" <?php if (!(strcmp("0 276", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 276</OPTION>
                        <OPTION value="0 282" <?php if (!(strcmp("0 282", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 282</OPTION>
                        <OPTION 
                          value="0 284" <?php if (!(strcmp("0 284", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 284</OPTION>
                        <OPTION value="0 286" <?php if (!(strcmp("0 286", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           286</OPTION>
                        <OPTION value="0 288" <?php if (!(strcmp("0 288", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 288</OPTION>
                        <OPTION value="0 312" <?php if (!(strcmp("0 312", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 312</OPTION>
                        <OPTION 
                          value="0 318" <?php if (!(strcmp("0 318", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 318</OPTION>
                        <OPTION value="0 322" <?php if (!(strcmp("0 322", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           322</OPTION>
                        <OPTION value="0 324" <?php if (!(strcmp("0 324", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 324</OPTION>
                        <OPTION value="0 326" <?php if (!(strcmp("0 326", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 326</OPTION>
                        <OPTION 
                          value="0 328" <?php if (!(strcmp("0 328", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 328</OPTION>
                        <OPTION value="0 332" <?php if (!(strcmp("0 332", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           332</OPTION>
                        <OPTION value="0 338" <?php if (!(strcmp("0 338", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 338</OPTION>
                        <OPTION value="0 342" <?php if (!(strcmp("0 342", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 342</OPTION>
                        <OPTION 
                          value="0 344" <?php if (!(strcmp("0 344", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 344</OPTION>
                        <OPTION value="0 346" <?php if (!(strcmp("0 346", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           346</OPTION>
                        <OPTION value="0 348" <?php if (!(strcmp("0 348", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 348</OPTION>
                        <OPTION value="0 352" <?php if (!(strcmp("0 352", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 352</OPTION>
                        <OPTION 
                          value="0 354" <?php if (!(strcmp("0 354", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 354</OPTION>
                        <OPTION value="0 356" <?php if (!(strcmp("0 356", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           356</OPTION>
                        <OPTION value="0 358" <?php if (!(strcmp("0 358", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 358</OPTION>
                        <OPTION value="0 362" <?php if (!(strcmp("0 362", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 362</OPTION>
                        <OPTION 
                          value="0 364" <?php if (!(strcmp("0 364", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 364</OPTION>
                        <OPTION value="0 366" <?php if (!(strcmp("0 366", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           366</OPTION>
                        <OPTION value="0 368" <?php if (!(strcmp("0 368", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 368</OPTION>
                        <OPTION value="0 370" <?php if (!(strcmp("0 370", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 370</OPTION>
                        <OPTION 
                          value="0 372" <?php if (!(strcmp("0 372", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 372</OPTION>
                        <OPTION value="0 374" <?php if (!(strcmp("0 374", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           374</OPTION>
                        <OPTION value="0 376" <?php if (!(strcmp("0 376", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 376</OPTION>
                        <OPTION value="0 378" <?php if (!(strcmp("0 378", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 378</OPTION>
                        <OPTION 
                          value="0 380" <?php if (!(strcmp("0 380", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 380</OPTION>
                        <OPTION value="0 382" <?php if (!(strcmp("0 382", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           382</OPTION>
                        <OPTION value="0 384" <?php if (!(strcmp("0 384", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 384</OPTION>
                        <OPTION value="0 386" <?php if (!(strcmp("0 386", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 386</OPTION>
                        <OPTION 
                          value="0 388" <?php if (!(strcmp("0 388", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 388</OPTION>
                        <OPTION value="0 412" <?php if (!(strcmp("0 412", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           412</OPTION>
                        <OPTION value="0 414" <?php if (!(strcmp("0 414", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 414</OPTION>
                        <OPTION value="0 416" <?php if (!(strcmp("0 416", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 416</OPTION>
                        <OPTION 
                          value="0 422" <?php if (!(strcmp("0 422", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 422</OPTION>
                        <OPTION value="0 424" <?php if (!(strcmp("0 424", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           424</OPTION>
                        <OPTION value="0 426" <?php if (!(strcmp("0 426", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 426</OPTION>
                        <OPTION value="0 428" <?php if (!(strcmp("0 428", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 428</OPTION>
                        <OPTION 
                          value="0 432" <?php if (!(strcmp("0 432", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 432</OPTION>
                        <OPTION value="0 434" <?php if (!(strcmp("0 434", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           434</OPTION>
                        <OPTION value="0 436" <?php if (!(strcmp("0 436", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 436</OPTION>
                        <OPTION value="0 438" <?php if (!(strcmp("0 438", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 438</OPTION>
                        <OPTION 
                          value="0 442" <?php if (!(strcmp("0 442", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 442</OPTION>
                        <OPTION value="0 446" <?php if (!(strcmp("0 446", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           446</OPTION>
                        <OPTION value="0 452" <?php if (!(strcmp("0 452", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 452</OPTION>
                        <OPTION value="0 454" <?php if (!(strcmp("0 454", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 454</OPTION>
                        <OPTION 
                          value="0 456" <?php if (!(strcmp("0 456", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 456</OPTION>
                        <OPTION value="0 458" <?php if (!(strcmp("0 458", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           458</OPTION>
                        <OPTION value="0 462" <?php if (!(strcmp("0 462", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 462</OPTION>
                        <OPTION value="0 464" <?php if (!(strcmp("0 464", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 464</OPTION>
                        <OPTION 
                          value="0 466" <?php if (!(strcmp("0 466", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 466</OPTION>
                        <OPTION value="0 472" <?php if (!(strcmp("0 472", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           472</OPTION>
                        <OPTION value="0 474" <?php if (!(strcmp("0 474", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 474</OPTION>
                        <OPTION value="0 476" <?php if (!(strcmp("0 476", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 476</OPTION>
                        <OPTION 
                          value="0 478" <?php if (!(strcmp("0 478", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 478</OPTION>
                        <OPTION value="0 482" <?php if (!(strcmp("0 482", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           482</OPTION>
                        <OPTION value="0 484" <?php if (!(strcmp("0 484", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 484</OPTION>
                        <OPTION value="0 486" <?php if (!(strcmp("0 486", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 486</OPTION>
                        <OPTION 
                          value="0 488" <?php if (!(strcmp("0 488", $_POST["telefon_areacode"]))) {echo "selected=\"selected\"";} ?>>0 488</OPTION></SELECT> </TD>
                      <TD>&nbsp;-&nbsp;</TD>
                      <TD><INPUT class=input 
                        onkeypress="return numbersonly(this, event)" maxLength=7 
                        size=10 name=telefon value="<?php echo $_POST['telefon']; ?>"></TD></TR></TBODY></TABLE></TD></TR>

              <TR>
                <TD>
                  <DIV align=right>Cep Tel:*</DIV></TD>
                <TD>
                  <TABLE border=0 cellSpacing=0 cellPadding=0>
                    <TBODY>
                    <TR>
                      <TD><SELECT class=input size=1 name=cep_areacode>
                        <OPTION selected value="0 505" <?php if (!(strcmp("0 505", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 505</OPTION>
                        <OPTION 
                          value="0 506" <?php if (!(strcmp("0 506", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 506</OPTION>
                        <OPTION value="0 507" <?php if (!(strcmp("0 507", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           507</OPTION>
                        <OPTION value="0 530" <?php if (!(strcmp("0 530", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 530</OPTION>
                        <OPTION value="0 531" <?php if (!(strcmp("0 531", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 531</OPTION>
                        <OPTION 
                          value="0 532" <?php if (!(strcmp("0 532", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 532</OPTION>
                        <OPTION value="0 533" <?php if (!(strcmp("0 533", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           533</OPTION>
                        <OPTION value="0 534" <?php if (!(strcmp("0 534", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 534</OPTION>
                        <OPTION value="0 535" <?php if (!(strcmp("0 535", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 535</OPTION>
                        <OPTION 
                          value="0 536" <?php if (!(strcmp("0 536", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 536</OPTION>
                        <OPTION value="0 537" <?php if (!(strcmp("0 537", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           537</OPTION>
                        <OPTION value="0 538" <?php if (!(strcmp("0 538", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 538</OPTION>
                        <OPTION value="0 539" <?php if (!(strcmp("0 539", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 539</OPTION>
                        <OPTION 
                          value="0 541" <?php if (!(strcmp("0 541", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 541</OPTION>
                        <OPTION value="0 542" <?php if (!(strcmp("0 542", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           542</OPTION>
                        <OPTION value="0 543" <?php if (!(strcmp("0 543", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 543</OPTION>
                        <OPTION value="0 544" <?php if (!(strcmp("0 544", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 544</OPTION>
                        <OPTION 
                          value="0 545" <?php if (!(strcmp("0 545", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 545</OPTION>
                        <OPTION value="0 546" <?php if (!(strcmp("0 546", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           546</OPTION>
                        <OPTION value="0 549" <?php if (!(strcmp("0 549", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 549</OPTION>
                        <OPTION value="0 551" <?php if (!(strcmp("0 551", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 551</OPTION>
                        <OPTION 
                          value="0 552" <?php if (!(strcmp("0 552", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 552</OPTION>
                        <OPTION value="0 553" <?php if (!(strcmp("0 553", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0                           553</OPTION>
                        <OPTION value="0 554" <?php if (!(strcmp("0 554", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 554</OPTION>
                        <OPTION value="0 555" <?php if (!(strcmp("0 555", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 555</OPTION>
                        <OPTION 
                          value="0 556" <?php if (!(strcmp("0 556", $_POST["cep_areacode"]))) {echo "selected=\"selected\"";} ?>>0 556</OPTION></SELECT> </TD>
                      <TD>&nbsp;-&nbsp;</TD>
                      <TD><INPUT class=input 
                        onkeypress="return numbersonly(this, event)" maxLength=7 
                        size=10 name=cep value="<?php echo $_POST['cep']; ?>"></TD></TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD></TD>
                <TD></TD></TR>
              <TR>
                <TD><div align="right">G&uuml;venlik Kodu:*</div></TD>
                <TD><label><img src="g_resim.php"></label> 
 
				 </label>
                <BR><INPUT name=kod class=Input 
                  style="WIDTH: 100%" size=15 maxlength="6">&nbsp;</TD>
              </TR>
              <TR>
                <TD></TD>
                <TD><INPUT value=ok type=hidden name=sub><INPUT value=Kaydet type=submit name=submit2></TD></TR></FORM></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>