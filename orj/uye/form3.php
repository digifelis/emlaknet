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
<script type="text/javascript">   
   function  kontrol() {
	var mess = ""
			if (document.form1.fiyat.value == "") {
		mess = mess + "\n* Fiyat Bilgisinin Girilmesi Zorunludur.";
		}

			if (document.form1.metrekare.value == "") {
		mess = mess + "\n* Toplam Metrekare Bilgisinin Girilmesi Zorunludur.";
		}
		
			if (document.form1.metrekare2.value == "") {
		mess = mess + "\n* Kullanilabilir Metrekare Bilgisinin Girilmesi Zorunludur.";
		}		
				
	if(mess != "") {
		
		alert("Lütfen asagidaki alanlari doldurunuz:\n" + mess)
	return false
	
	}
	return true
}
</script>
<TABLE border=0 cellSpacing=0 cellPadding=0 width=750 align=center>
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 height=1><BR><STRONG><FONT 
            color=#ffffff>Ýlan Giriþ Formu</FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif width="100%" align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 height=2><BR></DIV></TD>
          <TD vAlign=top background=tema/img/bg_fahne.gif width=10 
          align=left><IMG border=0 alt="" src="tema/img/spacer.gif" 
            width=11 height=30></TD></TR></TBODY></TABLE><LINK rel=stylesheet 
      type=text/css href="tema/css/balloontip.css">
      <SCRIPT type=text/javascript src="tema/js/balloontip.js"></SCRIPT>

      <DIV style="BACKGROUND-COLOR: lightyellow; WIDTH: 400px" id=balloon1 
      class=balloonstyle><STRONG>Gayrimenkul Fiyatý</STRONG><BR><BR>Tahsil 
      Edeceðiniz Gayrimenkul Kira Tutarýný Yazýnýz. <BR>Fiyat Bilgisinde 
      Noktalama Ýþareti Kullanmayýnýz. </DIV>
      <DIV style="BACKGROUND-COLOR: lightyellow; WIDTH: 400px" id=balloon2 
      class=balloonstyle><STRONG>Kira Periyodu</STRONG><BR><BR>Kira Bedelinin 
      Kiracýdan Hangi Periyotta Tahsil Edeceðinizi Se&ccedil;iniz.<BR>&Ouml;rnek: Aylýk, 
      Yýllýk. </DIV>
      <DIV style="BACKGROUND-COLOR: lightyellow; WIDTH: 400px" id=balloon4 
      class=balloonstyle><STRONG>Depozito</STRONG><BR><BR>Kiracýdan Alacaðýnýz 
      Depozito Tutarýný Yazýnýz.<BR>&Ouml;rnek: 1000 TL, 2 Kira Bedeli, 3 Kira Bedeli 
      ....v.s. </DIV>
      <DIV style="BACKGROUND-COLOR: lightyellow; WIDTH: 400px" id=balloon5 
      class=balloonstyle><STRONG>Komisyon</STRONG><BR><BR>Alýcýdan ve/veya 
      Kiracýdan Tahsil Edeceðiniz Komisyon Tutarýný veya Y&uuml;zdesini 
      Yazýnýz.<BR>&Ouml;rnek: %3, 1000 TL ....v.s. </DIV>
      <DIV style="BACKGROUND-COLOR: lightyellow; WIDTH: 400px" id=balloon6 
      class=balloonstyle><STRONG>Adres</STRONG><BR><BR>Ýlaný Verilen 
      Gayrimenkul'e Ait Adres Bilgisini Yazýnýz. Gayrimenkul Adresi Dýþýndaki 
      Bilgiler Yazýlmamalýdýr. Adresin Doðru Yazýlmasý, Alýcýlara Detaylý Bilgi 
      Verilmesi A&ccedil;ýsýndan &Ccedil;ok &Ouml;nemlidir. </DIV>
      <DIV style="BACKGROUND-COLOR: lightyellow; WIDTH: 400px" id=balloon7 
      class=balloonstyle><STRONG>Posta Kodu Ýl/Ýl&ccedil;e</STRONG><BR><BR>Ýlanýný 
      Verdiðiniz Gayrimenkul Adresine Ait Posta Kodunu, Ýl/Ýl&ccedil;e ve Semt 
      Bilgisini Yazýnýz. </DIV>
      <DIV style="BACKGROUND-COLOR: lightyellow; WIDTH: 400px" id=balloon8 
      class=balloonstyle><STRONG>Gayrimenkul A&ccedil;ýklama</STRONG><BR><BR>Ýlanýný 
      Verdiðiniz Gayrimenkul'e Daha Kolay Alýcý Bulabilmeniz Ý&ccedil;in Gayrimenkul'e 
      Ait Daha Detaylý Bilgi Yazýnýz.<BR>A&ccedil;ýklama Alanýnda 
      B&uuml;y&uuml;k&nbsp;Harfler&nbsp;Kullanmayýnýz.<BR>( Bu Alanda A&ccedil;ýklama Dýþýnda 
      Yazýlmasý Yasak Olan Bilgiler: Telefon Numarasý, Web Adresi, E-Mail 
      Adresi, Fiyat Bilgisi ...v.s.) </DIV>
      <DIV style="BACKGROUND-COLOR: lightyellow; WIDTH: 400px" id=balloon9 
      class=balloonstyle><STRONG>Ýlan Yayýnlanma 
      S&uuml;resi</STRONG><BR><BR>Ýlanýnýzýn&nbsp;Yayýnda 
      Kalacaðý&nbsp;S&uuml;reyi&nbsp;Se&ccedil;iniz. </DIV>
      <DIV style="BACKGROUND-COLOR: lightyellow; WIDTH: 400px" id=balloon10 
      class=balloonstyle><STRONG>Kira/Satýþ Tarihi</STRONG><BR><BR>Gayrimenkul 
      Ýlanýnýn Hangi Tarihte Kiraya Verilebileceði veya Satýþ Ý&ccedil;in Hangi Tarihte 
      M&uuml;sait Olacaðýný Yazýnýz.<BR>&Ouml;rnek: M&uuml;sait, 1 Ay Sonra, 15.05.2009....v.s. 
      </DIV>
      <DIV style="BACKGROUND-COLOR: lightyellow; WIDTH: 400px" id=balloon11 
      class=balloonstyle><STRONG>Portf&ouml;y No</STRONG><BR><BR>Size Ait Portf&ouml;y 
      Numasýný Yazarak, Ýlanýnýzý Daha Kolay Takip Edebilirsiniz. </DIV>
      <FORM encType=multipart/form-data method=post name=form1 
        action="">
      <TABLE 
      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
      border=0 cellSpacing=1 cellPadding=1 width=750 align=center>
        <INPUT value=ilanver6 type=hidden name=action> <INPUT 
        value=4469 type=hidden name=semt> 
        <TBODY>
        <TR>
          <TD colSpan=4>
            <DIV align=center><FONT size=4><STRONG>Gayrimenkul Ýlan Giriþ 
            Formu</STRONG></FONT><BR>Oluþturmak Ýstediðiniz Ýlana Ait Bilgileri 
            Eksiksiz Olarak Tamamlayýnýz.<BR>
            <TABLE align=center>
              <TBODY>
              <TR>
                <TD>Alan Yardýmý Almak Ý&ccedil;in Mouse Ýle</TD>
                <TD><IMG border=0 alt="" src="tema/img/information.gif" 
                  width=16 height=16></TD>
                <TD>Ýþaretinin &Uuml;zerine Gidiniz.</TD></TR></TBODY></TABLE>
            <FONT color=#ff0000><STRONG><a href="start.php?action=ilan_kurallari">Ýlanlarýnýz  Ýlan 
            Oluþturma Kurallarýna Uyumlu Olmak Zorundadýr.</a></STRONG></FONT> 
            
             <?php 
		if(temizle($_POST["fiyat"]) != "") {	
$vt->sql("insert into ilan_ticari (`id`, `uye_id`, `tarih`, `onay`, `ilan_tipi_id`,ilan_grup, `il`, `ilce`, `koy`, `fiyat`, `birim`,toplam_metrekare,kullanilabilir_metrekare,tapu_durum,adres,posta_kodu,il_ilce,aciklama,ilan_suresi,satis_tarihi,bas_tarihi,kredi,gx,gy) values (NULL,%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s,%s,%s,%s) ");

$vt->arg($_SESSION["id"],$son_zaman,2,temizle($_GET["a"]),temizle($_GET["s"]),temizle($_GET["b"]),temizle($_GET["c"]),temizle($_GET["d"]),temizle($_POST["fiyat"]),temizle($_POST["fiyat_art"]),temizle($_POST["metrekare"]),temizle($_POST["metrekare2"]),temizle($_POST["tapudurumu"]),temizle($_POST["adres"]),temizle($_POST["postakodu"]),temizle($_POST["yer"]),temizle($_POST["aciklama"]),temizle($_POST["sure"]),temizle($_POST["kirasatis"]),$son_zaman,temizle($_POST["kredi"]),temizle($_POST["x"]),temizle($_POST["y"]));

/// $vt->sor();  



if($vt->sor()>0) {
	$son_id = $vt->insertID();
//////////////////////////79
$vt->sql("insert into ilan_cevreozellikleri (id,ilan_id,ilan_grup,  a1	,a2,	a3,	a4,	a5,	a6,	a7,	a8,	a9,	a10,a11,a12,a13,a14,a15,a16,a17,a18,a19,a20,a21,a22,a23,a24,a25,a26,a27) values (NULL,%s,%s,%s	,%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)");

$vt->arg($son_id,temizle($_GET["s"]),temizle($_POST["c1"]),temizle($_POST["c2"]),temizle($_POST["c3"]),temizle($_POST["c4"]),temizle($_POST["c5"]),temizle($_POST["c6"]),temizle($_POST["c7"]),temizle($_POST["c8"]),temizle($_POST["c9"]),temizle($_POST["c10"]),temizle($_POST["c11"]),temizle($_POST["c12"]),temizle($_POST["c13"]),temizle($_POST["c14"]),temizle($_POST["c15"]),temizle($_POST["c16"]),temizle($_POST["c17"]),temizle($_POST["c18"]),temizle($_POST["c19"]),temizle($_POST["c20"]),temizle($_POST["c21"]),temizle($_POST["c22"]),temizle($_POST["c23"]),temizle($_POST["c24"]),temizle($_POST["c25"]),temizle($_POST["c26"]),temizle($_POST["c27"]));
/// $vt->sor(); 
if($vt->sor()== 0) { echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu F3200.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}
////////////////////
//////////////////////////79
$vt->sql("insert into ilan_altyapi (id,ilan_id,ilan_grup,  a1	,a2,	a3,	a4,	a5,	a6,	a7,	a8,	a9 ,a10,a11,a12,a13,a14,a15,a16,a17,a18,a19,a20,a21,a22,a23,a24,a25,a26,a27,a28,a29,a30) values (NULL,%s,%s,%s	,%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s)");

$vt->arg($son_id,temizle($_GET["s"]),temizle($_POST["d1"]),temizle($_POST["d2"]),temizle($_POST["d3"]),temizle($_POST["d4"]),temizle($_POST["d5"]),temizle($_POST["d6"]),temizle($_POST["d7"]),temizle($_POST["d8"]),temizle($_POST["d9"]),temizle($_POST["d10"]),temizle($_POST["d11"]),temizle($_POST["d12"]),temizle($_POST["d13"]),temizle($_POST["d14"]),temizle($_POST["d15"]),temizle($_POST["d16"]),temizle($_POST["d17"]),temizle($_POST["d18"]),temizle($_POST["d19"]),temizle($_POST["d20"]),temizle($_POST["d21"]),temizle($_POST["d22"]),temizle($_POST["d23"]),temizle($_POST["d24"]),temizle($_POST["d25"]),temizle($_POST["d26"]),temizle($_POST["d27"]),temizle($_POST["d28"]),temizle($_POST["d29"]),temizle($_POST["d30"]));
//$vt->sor();
if($vt->sor()== 0) { echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu F3300.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}
////////////////////

echo "<h3>Ýlan Kaydedilmistir.</h3>";
header( "refresh:2;url=start.php?action=pictures&id=$son_id" );
}  else {echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu F3100.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>"; }

		}
?>
            
            
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
            </DIV></TD></TR>
        <TR>
          <TD colSpan=4><FONT color=#008000 size=4><STRONG>Gayrimenkul 
            T&uuml;r&uuml; / B&ouml;lge Alaný</STRONG></FONT>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD width=100>
            <DIV align=right><STRONG>Emlak T&uuml;r&uuml;</STRONG></DIV></TD>
          <TD width=10>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><?php 
					  $vt->sql('select * from ilan_tipi where id="'.temizle($_GET["a"]).'"   ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo $veri->adi;
}
 ?> </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>B&ouml;lge</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>T&uuml;rkiye - 
<?php 
$vt->sql('select * from sehir where sehirID="'.temizle($_GET["b"]).'"   ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri ) {	echo $veri->sehiradiUpper."&nbsp;-&nbsp;"; }
 ?>
 <?php 
$vt->sql('select * from ilce where ilceID="'.temizle($_GET["c"]).'" and  sehirID="'.temizle($_GET["b"]).'"  ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri ) {	echo $veri->ilceAdi."&nbsp;-&nbsp;"; }
 ?>         
  <?php 
$vt->sql('select * from mahalle where mahalleID="'.temizle($_GET["d"]).'"  and ilceID="'.temizle($_GET["c"]).'" and  sehirID="'.temizle($_GET["b"]).'"  ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri ) {	echo $veri->mahalleAdi; }
 ?>   </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Ýlan Baþlýðý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><?php 
					  $vt->sql('select * from ilan_tipi where id="'.temizle($_GET["a"]).'"   ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo $veri->adi."&nbsp;-&nbsp;";
}
 ?>
<?php 
$vt->sql('select * from sehir where sehirID="'.temizle($_GET["b"]).'"   ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri ) {	echo $veri->sehiradiUpper."&nbsp;-&nbsp;"; }
 ?>
 <?php 
$vt->sql('select * from ilce where ilceID="'.temizle($_GET["c"]).'" and  sehirID="'.temizle($_GET["b"]).'"  ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri ) {	echo $veri->ilceAdi."&nbsp;-&nbsp;"; }
 ?>         
  <?php 
$vt->sql('select * from mahalle where mahalleID="'.temizle($_GET["d"]).'"  and ilceID="'.temizle($_GET["c"]).'" and  sehirID="'.temizle($_GET["b"]).'"  ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri ) {	echo $veri->mahalleAdi; }
 ?> </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD colSpan=4><FONT color=#008000 size=4><STRONG>Gayrimenkul 
            Fiyat Bilgisi Alaný</STRONG></FONT>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Fiyat</STRONG></DIV></TD>
          <TD width=1>&nbsp;:&nbsp;</TD>
          <TD>
            <TABLE border=0 cellSpacing=0 cellPadding=0>
              <TBODY>
              <TR>
                <TD><INPUT name=fiyat class=input style="TEXT-ALIGN: right" 
                  onkeypress="return numbersonly(this, event)" value="<?php echo temizle($_POST["fiyat"]); ?>" 
                  size=10 maxLength=10></TD>
                <TD>&nbsp;&nbsp;&nbsp;</TD>
                <TD><SELECT class=input name=fiyat_art><OPTION selected 
                    value=1 <?php if (!(strcmp(1, temizle($_POST["fiyat_art"])))) {echo "selected=\"selected\"";} ?>>TL</OPTION><OPTION value=2 <?php if (!(strcmp(2, temizle($_POST["fiyat_art"])))) {echo "selected=\"selected\"";} ?>>Euro</OPTION>
                  <OPTION 
                    value=3 <?php if (!(strcmp(3, temizle($_POST["fiyat_art"])))) {echo "selected=\"selected\"";} ?>>USD</OPTION>
                  <OPTION value=4 <?php if (!(strcmp(4, temizle($_POST["fiyat_art"])))) {echo "selected=\"selected\"";} ?>>GBP</OPTION></SELECT></TD>
                <TD>&nbsp;&nbsp;&nbsp;</TD>
                <TD><FONT color=#cc0000><STRONG>(Fiyat Bilgisinde Noktalama 
                  Ýþareti Kullanmayýnýz.)</STRONG></FONT></TD></TR></TBODY></TABLE></TD>
          <TD width=1><A 
            href="#" 
            rel=balloon1><IMG border=0 alt="" 
            src="tema/img/information.gif" width=16 height=16></A></TD></TR>
                     <TR>
          <TD><DIV align=right><STRONG>Krediye Uygun mu?</STRONG></DIV></TD>
          <TD>&nbsp;</TD>
          <TD><label>
            <select name="kredi" id="kredi">
              <option value="0">Hay&#305;r</option>
              <option value="1">Evet</option>
            </select>
          </label></TD>
          <TD>&nbsp;</TD>
        </TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD colSpan=4><FONT color=#008000 size=4><STRONG>Gayrimenkul 
            Bilgi Alaný (Arsa / Arazi)</STRONG></FONT>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Toplam Metrekare</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><input 
            name=metrekare class=input 
            onkeypress="return numbersonly(this, event)" value="<?php temizle($_POST["metrekare"]) ?>" size=10 maxlength=10 /> 
          m&sup2; (Toplam Metrekare Alaný)</TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Kullanýlabilir Metrekare</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><INPUT 
            name=metrekare2 class=input 
            onkeypress="return numbersonly(this, event)" value="<?php temizle($_POST["metrekare2"]) ?>" size=10 maxLength=10> m&sup2; (Kullanýlabilir Metrekare Alaný)</TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Tapu Durumu</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from tapu_durumu  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
$data_tapu_durumu[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=tapudurumu><LABEL for=kd0>'.$veri->adi.'</LABEL>';
$i++;
	 } 
 echo resim_listele(4,2,2,$data_tapu_durumu); 
 
 ?> 
 
 
 </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Alt Yapý / Yasal Durum</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from alt_yapi  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {


$alt_yapi[$i] = '<input 
name=d'.$veri->id.' type=checkbox  id=a1 value='.$veri->id.'  />  <LABEL for=d41>'.$veri->adi.'</LABEL>';


	$i++;
	 } 
 echo resim_listele(4,2,2,$alt_yapi); 
 
 ?></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>&Ccedil;evre &Ouml;zellikleri</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from cevre_ozellikleri  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {


$data2[$i] = '<input 
name=c'.$veri->id.' type=checkbox  id=a1 value='.$veri->id.'  />  <LABEL for=d41>'.$veri->adi.'</LABEL>';


	$i++;
	 } 
 echo resim_listele(4,2,2,$data2); 
 
 ?></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><strong>Google  Koordinatlar&#305;</strong></DIV></TD>
          <TD>&nbsp;&nbsp;</TD>
          <TD colSpan=2>Enlem 
            <INPUT name=x class=input style="TEXT-ALIGN: right" 
                   value="<?php echo temizle($_POST["x"]); ?>" 
                  size=25 maxLength=25>
            &nbsp;&nbsp;Boylam &nbsp;
            <INPUT name=y class=input style="TEXT-ALIGN: right" 
                   value="<?php echo temizle($_POST["y"]); ?>" 
                  size=25 maxLength=25>
          &nbsp;<a href="http://www.mygeoposition.com/" target="_blank">nas&#305;l koordinat al&#305;r&#305;m?</a></TD>
        </TR>
        <TR>
          <TD colSpan=4>
<HR color=#c1dad7 SIZE=1 width="100%" noShade>          
          <FONT color=#008000 size=4><STRONG>Gayrimenkul 
            Adres Bilgi Alaný</STRONG></FONT> ( Ýlanýný Vermiþ Olduðunuz 
            Gayrimenkul'&uuml;n Adresi )<BR><FONT color=#ff0000><STRONG>Gayrimenkul 
            Adres Alanýndaki Yazýlarýn Tamamýný&nbsp;B&uuml;y&uuml;k Harf Kullanarak 
            Yazmak Yasaktýr.</STRONG></FONT>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Adres</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD><TEXTAREA style="WIDTH: 100%" class=input rows=4 name=adres><?php echo temizle($_POST["adres"]); ?></TEXTAREA></TD>
          <TD><A 
            href="#" 
            rel=balloon6><IMG border=0 alt="" 
            src="tema/img/information.gif" width=16 height=16></A></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Posta Kodu </STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD><INPUT name=postakodu class=input onKeyPress="return numbersonly(this, event)" value="<?php echo temizle($_POST["postakodu"]); ?>" size=6 
            maxLength=5>
          &nbsp;&nbsp;&nbsp;&nbsp; 
            <STRONG>Ýl/Ýl&ccedil;e/Semt :</STRONG> &nbsp;&nbsp;
            <?php 
$vt->sql('select * from sehir where sehirID="'.temizle($_GET["b"]).'"   ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri ) {	echo $veri->sehiradiUpper."&nbsp;-&nbsp;"; }
 ?>
 <?php 
$vt->sql('select * from ilce where ilceID="'.temizle($_GET["c"]).'" and  sehirID="'.temizle($_GET["b"]).'"  ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri ) {	echo $veri->ilceAdi."&nbsp;-&nbsp;"; }
 ?>         
  <?php 
$vt->sql('select * from mahalle where mahalleID="'.temizle($_GET["d"]).'"  and ilceID="'.temizle($_GET["c"]).'" and  sehirID="'.temizle($_GET["b"]).'"  ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri ) {	echo $veri->mahalleAdi; }
 ?> </TD>
          <TD><A 
            href="#" 
            rel=balloon7><IMG border=0 alt="" 
            src="tema/img/information.gif" width=16 height=16></A></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD colSpan=4><FONT color=#008000 size=4><STRONG>Gayrimenkul 
            A&ccedil;ýklama Alaný</STRONG></FONT>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>A&ccedil;ýklama</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD><FONT color=#ff0000><STRONG>A&ccedil;ýklama Alanýndaki Yazýlarýn 
            Tamamýný&nbsp;B&uuml;y&uuml;k Harf Kullanarak Yazmak 
            Yasaktýr.</STRONG></FONT><BR><TEXTAREA style="WIDTH: 100%" class=input rows=7 name=aciklama><?php echo temizle($_POST["aciklama"]); ?></TEXTAREA><BR>            <FONT 
            color=#ff0000><STRONG>Bu alanda formda se&ccedil;eneklerde olmayan &ouml;zellikleri yaz&#305;n&#305;z.</STRONG></FONT> </TD>
          <TD><A 
            href="#" 
            rel=balloon8><IMG border=0 alt="" 
            src="tema/img/information.gif" width=16 height=16></A></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Ýlan Yayýnlanma S&uuml;resi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD><table width="65%" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                  <td width="5%" nowrap="nowrap"><input <?php if (!(strcmp(temizle($_POST["sure"]),"365"))) {echo "checked=\"checked\"";} ?> id="sure4" value="14"  type="radio" name="sure" /></td>
                  <td width="13%" nowrap="nowrap"><label for="sure4">2 Hafta</label></td>
                  <td width="5%" nowrap="nowrap"><input <?php if (!(strcmp(temizle($_POST["sure"]),"180"))) {echo "checked=\"checked\"";} ?> id="sure4" value="30" type="radio" name="sure" /></td>
                  <td width="13%" nowrap="nowrap"><label for="sure4">1 Ay</label></td>
                  <td width="5%" nowrap="nowrap"><input <?php if (!(strcmp(temizle($_POST["sure"]),"90"))) {echo "checked=\"checked\"";} ?> id="sure4" value="60"  type="radio" name="sure" /></td>
                  <td width="13%" nowrap="nowrap"><label for="sure4">2 Ay</label></td>
                  <td width="5%" nowrap="nowrap"><input <?php if (!(strcmp(temizle($_POST["sure"]),"60"))) {echo "checked=\"checked\"";} ?> id="sure4" value="90" checked="checked" type="radio" name="sure" /></td>
                  <td width="12%" nowrap="nowrap"><label for="sure4">3 Ay</label></td>
                  <td width="5%" nowrap="nowrap"><input <?php if (!(strcmp(temizle($_POST["sure"]),"30"))) {echo "checked=\"checked\"";} ?> id="sure4" value="180" type="radio" name="sure" /></td>
                  <td width="10%" nowrap="nowrap"><label for="sure4">6 Ay&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                  <td width="6%" nowrap="nowrap"><input <?php if (!(strcmp(temizle($_POST["sure"]),"14"))) {echo "checked=\"checked\"";} ?> id="sure5" value="365" type="radio" name="sure" /></td>
                  <td width="8%" nowrap="nowrap"><label for="sure5">1 Y&#305;l</label></td>                  
                </tr>
            </tbody>
            </table></TD>
          <TD><A 
            href="#" 
            rel=balloon9><IMG border=0 alt="" 
            src="tema/img/information.gif" width=16 height=16></A></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Teslim Tarihi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD><INPUT name=kirasatis class=input value="<?php echo temizle($_POST["kirasatis"]); ?>" size=11 maxLength=12> 
          &Ouml;RNEK: Hemen Teslim yada 31.12.2015 &#351;eklinde teslim tarihi yaz&#305;n&#305;z</TD>
          <TD><A 
            href="#" 
            rel=balloon10><IMG border=0 alt="" 
            src="tema/img/information.gif" width=16 height=16></A></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Ýlan Oluþturma Kurallarý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><INPUT id=c1 value=1 CHECKED type=checkbox name=ku> <A 
            href="?action=ilan_kurallari" 
            target=_blank>Ýlan Kurallarýný Okudum ve Kabul Ediyorum.</A></TD></TR>
        <TR>
          <TD></TD>
          <TD></TD>
          <TD colSpan=2><FONT color=#ff0000 size=2><STRONG>Ýlan Kurallarýna 
            Uyulmadýðý Taktirde Ýlanýnýz&nbsp;Blokeye Alýnýp, 
            Yayýnlanmayacaktýr.</STRONG></FONT></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD colSpan=4>
            <DIV align=center><input value="&#304;lan&#305; Kaydet" type=submit name="gitti" <?php if($_POST["gitti"] != "") {echo 'disabled=\"disabled\"';}  ?> onclick=" return kontrol()" /></DIV></TD></TR></TBODY></TABLE></FORM><BR><BR>