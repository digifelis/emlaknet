
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
		mess = mess + "\n* Metrekare Bilgisinin Girilmesi Zorunludur.";
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
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>Ýlan Giriþ 
            Formu</FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif width="100%" 
          align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 height=2><BR></DIV></TD>
          <TD vAlign=top background=tema/img/bg_fahne.gif width=10 
          align=left><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=11 
        height=30></TD></TR></TBODY></TABLE><LINK rel=stylesheet type=text/css 
      href="tema/css/balloontip.css">
      <SCRIPT type=text/javascript 
      src="tema/js/balloontip.js"></SCRIPT>

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
                <TD><IMG border=0 alt="" 
                  src="tema/img/information.gif" width=16 
                height=16></TD>
                <TD>Ýþaretinin &Uuml;zerine Gidiniz.</TD></TR></TBODY></TABLE><A 
            href="start.php?action=ilan_kurallari" 
            target=_blank><FONT color=#ff0000><STRONG>Ýlan 
            Oluþturma Kurallarýna Uyumlu Olmak Zorundadýr.</STRONG></FONT></A> 
            
            <?php 
		if(temizle($_POST["fiyat"]) != "") {	



$vt->sql("INSERT INTO `ilan_ticari` (`id`, `uye_id`, `tarih`, `onay`, `ilan_tipi_id`,ilan_grup, `il`, `ilce`, `koy`, `fiyat`, `birim`, `yapi_tipi`, `yapi_durum`, `kullanim_durumu`, `metrekare`, `bulundugu_kat`, `bina_kat_sayisi`, `yapim_yili`, `oda_sayi`, `salon_sayisi`, `yatak_odasi_sayisi`, `banyo_sayisi`, `isinma_tipi`, `yakit_tipi`, `balkon`, `bahce`, `adres`, `posta_kodu`, `il_ilce`, `aciklama`, `ilan_suresi`, `satis_tarihi`,bas_tarihi,kredi,dosya_no,gx,gy) VALUES 
(NULL, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s,%s,%s,%s,%s,%s)");
$vt->arg($_SESSION["id"],$son_zaman,2,temizle($_GET["a"]),temizle($_GET["s"]),temizle($_GET["b"]),temizle($_GET["c"]),temizle($_GET["d"]),temizle($_POST["fiyat"]),temizle($_POST["fiyat_art"]),temizle($_POST["yapitipi"]),temizle($_POST["yapidurum"]),temizle($_POST["kullandurum"]),temizle($_POST["metrekare"]),temizle($_POST["kat"]),temizle($_POST["kat2"]),temizle($_POST["yil"]),temizle($_POST["oda"]),temizle($_POST["salonoda"]),temizle($_POST["yatakoda"]),temizle($_POST["banyo"]),temizle($_POST["isitma"]),temizle($_POST["yakittipi"]),temizle($_POST["balkon"]),temizle($_POST["bahce"]),temizle($_POST["adres"]),temizle($_POST["postakodu"]),temizle($_POST["yer"]),temizle($_POST["aciklama"]),temizle($_POST["sure"]),temizle($_POST["kirasatis"]),$son_zaman,temizle($_POST["kredi"]),temizle($_POST["dosya_no"]),temizle($_POST["x"]),temizle($_POST["y"]));
/// $vt->sor(); 

if($vt->sor()>0) {
	$son_id = $vt->insertID();
//////////////////////////
 $vt->sql("insert into ilan_icdonanim (id,ilan_id,ilan_grup,  a1	,a2,	a3,	a4,	a5,	a6,	a7,	a8,	a9,	a10,	a11,	a12,	a13,	a14,	a15,	a16,	a17,	a18,	a19,	a20,	a21,	a22,	a23,	a24,	a25,	a26,	a27,	a28,	a29,	a30,	a31,	a32) values (NULL,%s,%s,%s	,%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s)");

$vt->arg($son_id,temizle($_GET["s"]),temizle($_POST["a1"]),temizle($_POST["a2"]),temizle($_POST["a3"]),temizle($_POST["a4"]),temizle($_POST["a5"]),temizle($_POST["a6"]),temizle($_POST["a7"]),temizle($_POST["a8"]),temizle($_POST["a9"]),temizle($_POST["a10"]),temizle($_POST["a11"]),temizle($_POST["a12"]),temizle($_POST["a13"]),temizle($_POST["a14"]),temizle($_POST["a15"]),temizle($_POST["a16"]),temizle($_POST["a17"]),temizle($_POST["a18"]),temizle($_POST["a19"]),temizle($_POST["a20"]),temizle($_POST["a21"]),temizle($_POST["a22"]),temizle($_POST["a23"]),temizle($_POST["a24"]),temizle($_POST["a25"]),temizle($_POST["a26"]),temizle($_POST["a27"]),temizle($_POST["a28"]),temizle($_POST["a29"]),temizle($_POST["a30"]),temizle($_POST["a31"]),temizle($_POST["a32"])); 
/// $vt->sor(); 
if($vt->sor()== 0) { echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu F1200.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}
//////////////////// */
//////////////////////////78
$vt->sql("insert into ilan_disdonanim (id,ilan_id,ilan_grup,  a1	,a2,	a3,	a4,	a5,	a6,	a7,	a8,	a9,	a10) values (NULL,%s,%s,%s	,%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s)");

$vt->arg($son_id,temizle($_GET["s"]),temizle($_POST["b1"]),temizle($_POST["b2"]),temizle($_POST["b3"]),temizle($_POST["b4"]),temizle($_POST["b5"]),temizle($_POST["b6"]),temizle($_POST["b7"]),temizle($_POST["b8"]),temizle($_POST["b9"]),temizle($_POST["b10"]));
/// $vt->sor(); 
if($vt->sor()== 0) { echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu F1300.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}
////////////////////
//////////////////////////79
$vt->sql("insert into ilan_cevreozellikleri (id,ilan_id,ilan_grup,  a1	,a2,	a3,	a4,	a5,	a6,	a7,	a8,	a9,	a10,a11) values (NULL,%s,%s,%s	,%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s,	%s, %s)");

$vt->arg($son_id,temizle($_GET["s"]),temizle($_POST["c1"]),temizle($_POST["c2"]),temizle($_POST["c3"]),temizle($_POST["c4"]),temizle($_POST["c5"]),temizle($_POST["c6"]),temizle($_POST["c7"]),temizle($_POST["c8"]),temizle($_POST["c9"]),temizle($_POST["c10"]),temizle($_POST["c11"]));
/// $vt->sor(); 
if($vt->sor()== 0) { echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu F1400.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}
////////////////////
echo "<h3>Ýlan Kaydedilmistir.</h3>";
header( "refresh:2;url=start.php?action=pictures&id=$son_id" );

} else {echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu F1100.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>"; }
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
          <TD colSpan=2>
          
                                            <?php 
					  $vt->sql('select * from ilan_tipi where id="'.temizle($_GET["a"]).'"   ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo $veri->adi;
}
 ?>
          
          </TD></TR>
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
 ?>        
          
          </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Ýlan Baþlýðý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
		  <?php 
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
 ?>   </TD></TR>
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
            src="tema/img/information.gif" width=16 
        height=16></A></TD></TR>
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
            Bilgi Alaný (Konut)</STRONG></FONT>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Yapý Tipi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from yapi_tipi  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
$data_yapi_tipi[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=yapitipi><LABEL for=kd0>'.$veri->adi.'</LABEL>';
$i++;
	 } 
 echo resim_listele(5,2,2,$data_yapi_tipi); 
 
 ?></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Yapýnýn Durumu</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from yapi_durum  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
$data_yapi_durum[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=yapidurum><LABEL for=kd0>'.$veri->adi.'</LABEL>';
$i++;
	 } 
 echo resim_listele(5,2,2,$data_yapi_durum); 
 
 ?>  </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR> 
        <TR>
          <TD>
            <DIV align=right><STRONG>Teslim Tarihi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><INPUT name=kirasatis class=input value="<?php echo temizle($_POST["kirasatis"]); ?>" size=11 maxLength=12 > 
          &Ouml;RNEK: Hemen Teslim yada 31.12.2015 &#351;eklinde teslim tarihi yaz&#305;n&#305;z</TD></TR> 
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Kullaným Durumu</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from kullanim_durumu  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
$data_kullanim_durumu[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=kullandurum><LABEL for=kd0>'.$veri->adi.'</LABEL>';
$i++;
	 } 
 echo resim_listele(4,2,2,$data_kullanim_durumu); 
 
 ?></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Metrekare</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><INPUT 
            name=metrekare class=input 
            onkeypress="return numbersonly(this, event)" value="<?php echo temizle($_POST["metrekare"]); ?>" size=10 maxLength=10> m&sup2;</TD></TR>

        
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Bina Kat Sayýsý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><SELECT style="WIDTH: 150px" class=input name=kat2>
            <OPTION selected value=0 <?php if (!(strcmp(0, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>Bilgi Yok</OPTION>
            
            <OPTION value=100 <?php if (!(strcmp(100, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>M&uuml;stakil Yap&#305;n&#305;n</OPTION>   
            <OPTION value=101 <?php if (!(strcmp(101, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>Dubleks Yap&#305;n&#305;n</OPTION> 
            <OPTION value=102 <?php if (!(strcmp(102, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>Tripleks Yap&#305;n&#305;n</OPTION>                                  
            
            <OPTION value=1 <?php if (!(strcmp(1, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>1               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=2 <?php if (!(strcmp(2, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>2 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=3 <?php if (!(strcmp(3, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>3               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=4 <?php if (!(strcmp(4, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>4 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=5 <?php if (!(strcmp(5, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>5               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=6 <?php if (!(strcmp(6, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>6 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=7 <?php if (!(strcmp(7, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>7               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=8 <?php if (!(strcmp(8, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>8 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=9 <?php if (!(strcmp(9, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>9               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=10 <?php if (!(strcmp(10, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>10 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=11 <?php if (!(strcmp(11, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>11               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=12 <?php if (!(strcmp(12, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>12 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=13 <?php if (!(strcmp(13, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>13               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=14 <?php if (!(strcmp(14, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>14 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=15 <?php if (!(strcmp(15, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>15               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=16 <?php if (!(strcmp(16, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>16 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=17 <?php if (!(strcmp(17, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>17               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=18 <?php if (!(strcmp(18, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>18 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=19 <?php if (!(strcmp(19, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>19               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=20 <?php if (!(strcmp(20, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>20 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=21 <?php if (!(strcmp(21, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>21               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=22 <?php if (!(strcmp(22, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>22 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=23 <?php if (!(strcmp(23, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>23               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=24 <?php if (!(strcmp(24, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>24 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=25 <?php if (!(strcmp(25, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>25               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=26 <?php if (!(strcmp(26, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>26 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=27 <?php if (!(strcmp(27, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>27               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=28 <?php if (!(strcmp(28, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>28 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=29 <?php if (!(strcmp(29, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>29               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=30 <?php if (!(strcmp(30, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>30 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=31 <?php if (!(strcmp(31, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>31               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=32 <?php if (!(strcmp(32, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>32 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=33 <?php if (!(strcmp(33, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>33               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=34 <?php if (!(strcmp(34, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>34 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=35 <?php if (!(strcmp(35, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>35               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=36 <?php if (!(strcmp(36, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>36 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=37 <?php if (!(strcmp(37, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>37               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=38 <?php if (!(strcmp(38, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>38 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=39 <?php if (!(strcmp(39, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>39               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=40 <?php if (!(strcmp(40, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>40 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=41 <?php if (!(strcmp(41, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>41               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=42 <?php if (!(strcmp(42, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>42 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=43 <?php if (!(strcmp(43, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>43               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=44 <?php if (!(strcmp(44, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>44 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=45 <?php if (!(strcmp(45, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>45               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=46 <?php if (!(strcmp(46, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>46 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=47 <?php if (!(strcmp(47, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>47               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=48 <?php if (!(strcmp(48, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>48 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=49 <?php if (!(strcmp(49, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>49               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=50 <?php if (!(strcmp(50, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>50 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=51 <?php if (!(strcmp(51, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>51               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=52 <?php if (!(strcmp(52, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>52 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=53 <?php if (!(strcmp(53, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>53               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=54 <?php if (!(strcmp(54, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>54 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=55 <?php if (!(strcmp(55, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>55               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=56 <?php if (!(strcmp(56, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>56 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=57 <?php if (!(strcmp(57, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>57               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=58 <?php if (!(strcmp(58, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>58 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=59 <?php if (!(strcmp(59, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>59               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=60 <?php if (!(strcmp(60, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>60 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=61 <?php if (!(strcmp(61, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>61               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=62 <?php if (!(strcmp(62, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>62 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=63 <?php if (!(strcmp(63, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>63               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=64 <?php if (!(strcmp(64, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>64 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=65 <?php if (!(strcmp(65, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>65               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=66 <?php if (!(strcmp(66, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>66 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=67 <?php if (!(strcmp(67, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>67               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=68 <?php if (!(strcmp(68, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>68 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=69 <?php if (!(strcmp(69, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>69               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=70 <?php if (!(strcmp(70, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>70 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=71 <?php if (!(strcmp(71, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>71               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=72 <?php if (!(strcmp(72, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>72 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=73 <?php if (!(strcmp(73, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>73               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=74 <?php if (!(strcmp(74, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>74 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=75 <?php if (!(strcmp(75, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>75               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=76 <?php if (!(strcmp(76, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>76 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=77 <?php if (!(strcmp(77, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>77               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=78 <?php if (!(strcmp(78, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>78 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=79 <?php if (!(strcmp(79, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>79               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=80 <?php if (!(strcmp(80, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>80 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=81 <?php if (!(strcmp(81, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>81               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=82 <?php if (!(strcmp(82, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>82 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=83 <?php if (!(strcmp(83, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>83               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=84 <?php if (!(strcmp(84, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>84 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=85 <?php if (!(strcmp(85, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>85               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=86 <?php if (!(strcmp(86, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>86 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=87 <?php if (!(strcmp(87, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>87               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=88 <?php if (!(strcmp(88, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>88 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=89 <?php if (!(strcmp(89, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>89               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=90 <?php if (!(strcmp(90, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>90 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=91 <?php if (!(strcmp(91, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>91               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=92 <?php if (!(strcmp(92, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>92 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=93 <?php if (!(strcmp(93, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>93               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=94 <?php if (!(strcmp(94, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>94 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=95 <?php if (!(strcmp(95, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>95               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=96 <?php if (!(strcmp(96, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>96 Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=97 <?php if (!(strcmp(97, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>97               Katl&#305; Binan&#305;n</OPTION>
          <OPTION value=98 <?php if (!(strcmp(98, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>98 Katl&#305; Binan&#305;n</OPTION><OPTION value=99 <?php if (!(strcmp(99, temizle($_POST["kat2"])))) {echo "selected=\"selected\"";} ?>>99               Katl&#305; Binan&#305;n</OPTION></SELECT> </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>          
<TR>
          <TD noWrap>
            <DIV align=right><STRONG>Bulunduðu Kat</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><SELECT style="WIDTH: 150px" class=input name=kat>
            <OPTION selected value=0 <?php if (!(strcmp(0, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>Bilgi Yok</OPTION>
            <OPTION 
              value=100 <?php if (!(strcmp(100, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>Zemin Kat&#305;</OPTION><OPTION value=101 <?php if (!(strcmp(101, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>Bodrum Kat&#305;</OPTION>
    <OPTION value=102 <?php if (!(strcmp(102, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>Yar&#305; Bodrum Kat&#305;</OPTION>
    <OPTION value=103 <?php if (!(strcmp(103, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>Giriþ               Katý</OPTION>
    <OPTION value=104 <?php if (!(strcmp(104, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>Bah&ccedil;e Katý</OPTION><OPTION 
              value=105 <?php if (!(strcmp(105, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>&Ccedil;atý Katý</OPTION>
    <OPTION value=106 <?php if (!(strcmp(106, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>Y&uuml;ksek               Giriþi</OPTION>
    <OPTION value=107 <?php if (!(strcmp(107, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>Komplesi</OPTION>
    <OPTION 
              value=108 <?php if (!(strcmp(108, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>&Ccedil;atý Dubleksi</OPTION>
    <OPTION 
              value=109 <?php if (!(strcmp(109, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>Dubleksi</OPTION><OPTION value=110 <?php if (!(strcmp(110, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>Tribleksi</OPTION>
<OPTION value=1 <?php if (!(strcmp(1, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>1. Kat&#305;</OPTION><OPTION value=2 <?php if (!(strcmp(2, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>2. Kat&#305;</OPTION>
<OPTION value=3 <?php if (!(strcmp(3, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>3. Kat&#305;</OPTION><OPTION value=4 <?php if (!(strcmp(4, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>4. Kat&#305;</OPTION>
<OPTION value=5 <?php if (!(strcmp(5, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>5. Kat&#305;</OPTION>
<OPTION value=6 <?php if (!(strcmp(6, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>6. Kat&#305;</OPTION>
<OPTION value=7 <?php if (!(strcmp(7, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>7. Kat&#305;</OPTION>
<OPTION value=8 <?php if (!(strcmp(8, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>8. Kat&#305;</OPTION>
<OPTION value=9 <?php if (!(strcmp(9, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>9. Kat&#305;</OPTION>
<OPTION value=10 <?php if (!(strcmp(10, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>10. Kat&#305;</OPTION>
<OPTION value=11 <?php if (!(strcmp(11, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>11. Kat&#305;</OPTION>
<OPTION value=12 <?php if (!(strcmp(12, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>12.               Kat&#305;</OPTION>
<OPTION value=13 <?php if (!(strcmp(13, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>13. Kat&#305;</OPTION>
<OPTION 
              value=14 <?php if (!(strcmp(14, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>14. Kat&#305;</OPTION>
<OPTION value=15 <?php if (!(strcmp(15, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>15. Kat&#305;</OPTION>
<OPTION value=16 <?php if (!(strcmp(16, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>16. Kat&#305;</OPTION>
<OPTION value=17 <?php if (!(strcmp(17, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>17.               Kat&#305;</OPTION>
<OPTION value=18 <?php if (!(strcmp(18, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>18. Kat&#305;</OPTION>
<OPTION 
              value=19 <?php if (!(strcmp(19, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>19. Kat&#305;</OPTION>
<OPTION value=20 <?php if (!(strcmp(20, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>20. Kat&#305;</OPTION>
<OPTION value=21 <?php if (!(strcmp(21, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>21. Kat&#305;</OPTION>
<OPTION value=22 <?php if (!(strcmp(22, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>22.               Kat&#305;</OPTION>
<OPTION value=23 <?php if (!(strcmp(23, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>23. Kat&#305;</OPTION>
<OPTION 
              value=24 <?php if (!(strcmp(24, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>24. Kat&#305;</OPTION>
<OPTION value=25 <?php if (!(strcmp(25, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>25. Kat&#305;</OPTION>
<OPTION value=26 <?php if (!(strcmp(26, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>26. Kat&#305;</OPTION>
<OPTION value=27 <?php if (!(strcmp(27, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>27.               Kat&#305;</OPTION>
<OPTION value=28 <?php if (!(strcmp(28, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>28. Kat&#305;</OPTION>
<OPTION 
              value=29 <?php if (!(strcmp(29, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>29. Kat&#305;</OPTION>
<OPTION value=30 <?php if (!(strcmp(30, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>30. Kat&#305;</OPTION>
<OPTION value=31 <?php if (!(strcmp(31, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>31. Kat&#305;</OPTION>
<OPTION value=32 <?php if (!(strcmp(32, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>32.               Kat&#305;</OPTION>
<OPTION value=33 <?php if (!(strcmp(33, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>33. Kat&#305;</OPTION>
<OPTION 
              value=34 <?php if (!(strcmp(34, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>34. Kat&#305;</OPTION>
<OPTION value=35 <?php if (!(strcmp(35, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>35. Kat&#305;</OPTION>
<OPTION value=36 <?php if (!(strcmp(36, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>36. Kat&#305;</OPTION>
<OPTION value=37 <?php if (!(strcmp(37, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>37.               Kat&#305;</OPTION>
<OPTION value=38 <?php if (!(strcmp(38, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>38. Kat&#305;</OPTION>
<OPTION 
              value=39 <?php if (!(strcmp(39, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>39. Kat&#305;</OPTION>
<OPTION value=40 <?php if (!(strcmp(40, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>40. Kat&#305;</OPTION>
<OPTION value=41 <?php if (!(strcmp(41, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>41. Kat&#305;</OPTION>
<OPTION value=42 <?php if (!(strcmp(42, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>42.               Kat&#305;</OPTION>
<OPTION value=43 <?php if (!(strcmp(43, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>43. Kat&#305;</OPTION>
<OPTION 
              value=44 <?php if (!(strcmp(44, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>44. Kat&#305;</OPTION>
<OPTION value=45 <?php if (!(strcmp(45, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>45. Kat&#305;</OPTION>
<OPTION value=46 <?php if (!(strcmp(46, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>46. Kat&#305;</OPTION>
<OPTION value=47 <?php if (!(strcmp(47, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>47.               Kat&#305;</OPTION>
<OPTION value=48 <?php if (!(strcmp(48, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>48. Kat&#305;</OPTION>
<OPTION 
              value=49 <?php if (!(strcmp(49, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>49. Kat&#305;</OPTION>
<OPTION value=50 <?php if (!(strcmp(50, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>50. Kat&#305;</OPTION>
<OPTION value=51 <?php if (!(strcmp(51, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>51. Kat&#305;</OPTION>
<OPTION value=52 <?php if (!(strcmp(52, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>52.               Kat&#305;</OPTION>
<OPTION value=53 <?php if (!(strcmp(53, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>53. Kat&#305;</OPTION>
<OPTION 
              value=54 <?php if (!(strcmp(54, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>54. Kat&#305;</OPTION>
<OPTION value=55 <?php if (!(strcmp(55, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>55. Kat&#305;</OPTION>
<OPTION value=56 <?php if (!(strcmp(56, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>56. Kat&#305;</OPTION>
<OPTION value=57 <?php if (!(strcmp(57, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>57.               Kat&#305;</OPTION>
<OPTION value=58 <?php if (!(strcmp(58, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>58. Kat&#305;</OPTION>
<OPTION 
              value=59 <?php if (!(strcmp(59, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>59. Kat&#305;</OPTION>
<OPTION value=60 <?php if (!(strcmp(60, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>60. Kat&#305;</OPTION>
<OPTION value=61 <?php if (!(strcmp(61, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>61. Kat&#305;</OPTION>
<OPTION value=62 <?php if (!(strcmp(62, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>62.               Kat&#305;</OPTION>
<OPTION value=63 <?php if (!(strcmp(63, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>63. Kat&#305;</OPTION>
<OPTION 
              value=64 <?php if (!(strcmp(64, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>64. Kat&#305;</OPTION>
<OPTION value=65 <?php if (!(strcmp(65, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>65. Kat&#305;</OPTION>
<OPTION value=66 <?php if (!(strcmp(66, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>66. Kat&#305;</OPTION>
<OPTION value=67 <?php if (!(strcmp(67, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>67.               Kat&#305;</OPTION>
<OPTION value=68 <?php if (!(strcmp(68, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>68. Kat&#305;</OPTION>
<OPTION 
              value=69 <?php if (!(strcmp(69, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>69. Kat&#305;</OPTION>
<OPTION value=70 <?php if (!(strcmp(70, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>70. Kat&#305;</OPTION>
<OPTION value=71 <?php if (!(strcmp(71, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>71. Kat&#305;</OPTION>
<OPTION value=72 <?php if (!(strcmp(72, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>72.               Kat&#305;</OPTION>
<OPTION value=73 <?php if (!(strcmp(73, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>73. Kat&#305;</OPTION>
<OPTION 
              value=74 <?php if (!(strcmp(74, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>74. Kat&#305;</OPTION>
<OPTION value=75 <?php if (!(strcmp(75, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>75. Kat&#305;</OPTION>
<OPTION value=76 <?php if (!(strcmp(76, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>76. Kat&#305;</OPTION>
<OPTION value=77 <?php if (!(strcmp(77, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>77.               Kat&#305;</OPTION>
<OPTION value=78 <?php if (!(strcmp(78, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>78. Kat&#305;</OPTION>
<OPTION 
              value=79 <?php if (!(strcmp(79, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>79. Kat&#305;</OPTION>
<OPTION value=80 <?php if (!(strcmp(80, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>80. Kat&#305;</OPTION>
<OPTION value=81 <?php if (!(strcmp(81, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>81. Kat&#305;</OPTION>
<OPTION value=82 <?php if (!(strcmp(82, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>82.               Kat&#305;</OPTION>
<OPTION value=83 <?php if (!(strcmp(83, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>83. Kat&#305;</OPTION>
<OPTION 
              value=84 <?php if (!(strcmp(84, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>84. Kat&#305;</OPTION>
<OPTION value=85 <?php if (!(strcmp(85, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>85. Kat&#305;</OPTION>
<OPTION value=86 <?php if (!(strcmp(86, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>86. Kat&#305;</OPTION>
<OPTION value=87 <?php if (!(strcmp(87, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>87.               Kat&#305;</OPTION>
<OPTION value=88 <?php if (!(strcmp(88, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>88. Kat&#305;</OPTION>
<OPTION 
              value=89 <?php if (!(strcmp(89, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>89. Kat&#305;</OPTION>
<OPTION value=90 <?php if (!(strcmp(90, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>90. Kat&#305;</OPTION>
<OPTION value=91 <?php if (!(strcmp(91, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>91. Kat&#305;</OPTION>
<OPTION value=92 <?php if (!(strcmp(92, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>92.               Kat&#305;</OPTION>
<OPTION value=93 <?php if (!(strcmp(93, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>93. Kat&#305;</OPTION>
<OPTION 
              value=94 <?php if (!(strcmp(94, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>94. Kat&#305;</OPTION>
<OPTION value=95 <?php if (!(strcmp(95, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>95. Kat&#305;</OPTION>
<OPTION value=96 <?php if (!(strcmp(96, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>96. Kat&#305;</OPTION>
<OPTION value=97 <?php if (!(strcmp(97, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>97.               Kat&#305;</OPTION>
<OPTION value=98 <?php if (!(strcmp(98, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>98. Kat&#305;</OPTION>
<OPTION 
              value=99 <?php if (!(strcmp(99, temizle($_POST["kat"])))) {echo "selected=\"selected\"";} ?>>99. Kat&#305;</OPTION></SELECT> </TD></TR>          
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Yapým Yýlý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><SELECT style="WIDTH: 150px" class=input name=yil>
            <OPTION selected value=0 <?php if (!(strcmp(0, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>Bilgi Yok</OPTION>
          <OPTION 
              value=1900 <?php if (!(strcmp(1900, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1900</OPTION>
          <OPTION value=1901 <?php if (!(strcmp(1901, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1901</OPTION>
          <OPTION 
              value=1902 <?php if (!(strcmp(1902, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1902</OPTION>
          <OPTION value=1903 <?php if (!(strcmp(1903, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1903</OPTION>
          <OPTION 
              value=1904 <?php if (!(strcmp(1904, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1904</OPTION>
          <OPTION value=1905 <?php if (!(strcmp(1905, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1905</OPTION>
          <OPTION 
              value=1906 <?php if (!(strcmp(1906, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1906</OPTION>
          <OPTION value=1907 <?php if (!(strcmp(1907, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1907</OPTION>
          <OPTION 
              value=1908 <?php if (!(strcmp(1908, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1908</OPTION>
          <OPTION value=1909 <?php if (!(strcmp(1909, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1909</OPTION>
          <OPTION 
              value=1910 <?php if (!(strcmp(1910, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1910</OPTION>
          <OPTION value=1911 <?php if (!(strcmp(1911, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1911</OPTION>
          <OPTION 
              value=1912 <?php if (!(strcmp(1912, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1912</OPTION>
          <OPTION value=1913 <?php if (!(strcmp(1913, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1913</OPTION>
          <OPTION 
              value=1914 <?php if (!(strcmp(1914, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1914</OPTION>
          <OPTION value=1915 <?php if (!(strcmp(1915, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1915</OPTION>
          <OPTION 
              value=1916 <?php if (!(strcmp(1916, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1916</OPTION>
          <OPTION value=1917 <?php if (!(strcmp(1917, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1917</OPTION>
          <OPTION 
              value=1918 <?php if (!(strcmp(1918, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1918</OPTION>
          <OPTION value=1919 <?php if (!(strcmp(1919, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1919</OPTION>
          <OPTION 
              value=1920 <?php if (!(strcmp(1920, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1920</OPTION>
          <OPTION value=1921 <?php if (!(strcmp(1921, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1921</OPTION>
          <OPTION 
              value=1922 <?php if (!(strcmp(1922, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1922</OPTION>
          <OPTION value=1923 <?php if (!(strcmp(1923, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1923</OPTION>
          <OPTION 
              value=1924 <?php if (!(strcmp(1924, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1924</OPTION>
          <OPTION value=1925 <?php if (!(strcmp(1925, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1925</OPTION>
          <OPTION 
              value=1926 <?php if (!(strcmp(1926, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1926</OPTION>
          <OPTION value=1927 <?php if (!(strcmp(1927, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1927</OPTION>
          <OPTION 
              value=1928 <?php if (!(strcmp(1928, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1928</OPTION>
          <OPTION value=1929 <?php if (!(strcmp(1929, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1929</OPTION>
          <OPTION 
              value=1930 <?php if (!(strcmp(1930, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1930</OPTION>
          <OPTION value=1931 <?php if (!(strcmp(1931, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1931</OPTION>
          <OPTION 
              value=1932 <?php if (!(strcmp(1932, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1932</OPTION>
          <OPTION value=1933 <?php if (!(strcmp(1933, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1933</OPTION>
          <OPTION 
              value=1934 <?php if (!(strcmp(1934, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1934</OPTION>
          <OPTION value=1935 <?php if (!(strcmp(1935, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1935</OPTION>
          <OPTION 
              value=1936 <?php if (!(strcmp(1936, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1936</OPTION>
          <OPTION value=1937 <?php if (!(strcmp(1937, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1937</OPTION>
          <OPTION 
              value=1938 <?php if (!(strcmp(1938, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1938</OPTION>
          <OPTION value=1939 <?php if (!(strcmp(1939, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1939</OPTION>
          <OPTION 
              value=1940 <?php if (!(strcmp(1940, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1940</OPTION>
          <OPTION value=1941 <?php if (!(strcmp(1941, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1941</OPTION>
          <OPTION 
              value=1942 <?php if (!(strcmp(1942, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1942</OPTION>
          <OPTION value=1943 <?php if (!(strcmp(1943, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1943</OPTION>
          <OPTION 
              value=1944 <?php if (!(strcmp(1944, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1944</OPTION>
          <OPTION value=1945 <?php if (!(strcmp(1945, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1945</OPTION>
          <OPTION 
              value=1946 <?php if (!(strcmp(1946, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1946</OPTION>
          <OPTION value=1947 <?php if (!(strcmp(1947, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1947</OPTION>
          <OPTION 
              value=1948 <?php if (!(strcmp(1948, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1948</OPTION>
          <OPTION value=1949 <?php if (!(strcmp(1949, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1949</OPTION>
          <OPTION 
              value=1950 <?php if (!(strcmp(1950, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1950</OPTION>
          <OPTION value=1951 <?php if (!(strcmp(1951, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1951</OPTION>
          <OPTION 
              value=1952 <?php if (!(strcmp(1952, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1952</OPTION>
          <OPTION value=1953 <?php if (!(strcmp(1953, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1953</OPTION>
          <OPTION 
              value=1954 <?php if (!(strcmp(1954, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1954</OPTION>
          <OPTION value=1955 <?php if (!(strcmp(1955, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1955</OPTION>
          <OPTION 
              value=1956 <?php if (!(strcmp(1956, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1956</OPTION>
          <OPTION value=1957 <?php if (!(strcmp(1957, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1957</OPTION>
          <OPTION 
              value=1958 <?php if (!(strcmp(1958, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1958</OPTION>
          <OPTION value=1959 <?php if (!(strcmp(1959, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1959</OPTION>
          <OPTION 
              value=1960 <?php if (!(strcmp(1960, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1960</OPTION>
          <OPTION value=1961 <?php if (!(strcmp(1961, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1961</OPTION>
          <OPTION 
              value=1962 <?php if (!(strcmp(1962, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1962</OPTION>
          <OPTION value=1963 <?php if (!(strcmp(1963, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1963</OPTION>
          <OPTION 
              value=1964 <?php if (!(strcmp(1964, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1964</OPTION>
          <OPTION value=1965 <?php if (!(strcmp(1965, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1965</OPTION>
          <OPTION 
              value=1966 <?php if (!(strcmp(1966, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1966</OPTION>
          <OPTION value=1967 <?php if (!(strcmp(1967, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1967</OPTION>
          <OPTION 
              value=1968 <?php if (!(strcmp(1968, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1968</OPTION>
          <OPTION value=1969 <?php if (!(strcmp(1969, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1969</OPTION>
          <OPTION 
              value=1970 <?php if (!(strcmp(1970, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1970</OPTION>
          <OPTION value=1971 <?php if (!(strcmp(1971, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1971</OPTION>
          <OPTION 
              value=1972 <?php if (!(strcmp(1972, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1972</OPTION>
          <OPTION value=1973 <?php if (!(strcmp(1973, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1973</OPTION>
          <OPTION 
              value=1974 <?php if (!(strcmp(1974, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1974</OPTION>
          <OPTION value=1975 <?php if (!(strcmp(1975, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1975</OPTION>
          <OPTION 
              value=1976 <?php if (!(strcmp(1976, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1976</OPTION>
          <OPTION value=1977 <?php if (!(strcmp(1977, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1977</OPTION>
          <OPTION 
              value=1978 <?php if (!(strcmp(1978, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1978</OPTION>
          <OPTION value=1979 <?php if (!(strcmp(1979, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1979</OPTION>
          <OPTION 
              value=1980 <?php if (!(strcmp(1980, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1980</OPTION>
          <OPTION value=1981 <?php if (!(strcmp(1981, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1981</OPTION>
          <OPTION 
              value=1982 <?php if (!(strcmp(1982, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1982</OPTION>
          <OPTION value=1983 <?php if (!(strcmp(1983, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1983</OPTION>
          <OPTION 
              value=1984 <?php if (!(strcmp(1984, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1984</OPTION>
          <OPTION value=1985 <?php if (!(strcmp(1985, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1985</OPTION>
          <OPTION 
              value=1986 <?php if (!(strcmp(1986, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1986</OPTION>
          <OPTION value=1987 <?php if (!(strcmp(1987, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1987</OPTION>
          <OPTION 
              value=1988 <?php if (!(strcmp(1988, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1988</OPTION>
          <OPTION value=1989 <?php if (!(strcmp(1989, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1989</OPTION>
          <OPTION 
              value=1990 <?php if (!(strcmp(1990, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1990</OPTION>
          <OPTION value=1991 <?php if (!(strcmp(1991, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1991</OPTION>
          <OPTION 
              value=1992 <?php if (!(strcmp(1992, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1992</OPTION>
          <OPTION value=1993 <?php if (!(strcmp(1993, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1993</OPTION>
          <OPTION 
              value=1994 <?php if (!(strcmp(1994, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1994</OPTION>
          <OPTION value=1995 <?php if (!(strcmp(1995, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1995</OPTION>
          <OPTION 
              value=1996 <?php if (!(strcmp(1996, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1996</OPTION>
          <OPTION value=1997 <?php if (!(strcmp(1997, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1997</OPTION>
          <OPTION 
              value=1998 <?php if (!(strcmp(1998, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1998</OPTION>
          <OPTION value=1999 <?php if (!(strcmp(1999, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>1999</OPTION>
          <OPTION 
              value=2000 <?php if (!(strcmp(2000, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2000</OPTION>
          <OPTION value=2001 <?php if (!(strcmp(2001, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2001</OPTION>
          <OPTION 
              value=2002 <?php if (!(strcmp(2002, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2002</OPTION><OPTION value=2003 <?php if (!(strcmp(2003, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2003</OPTION>
          <OPTION 
              value=2004 <?php if (!(strcmp(2004, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2004</OPTION>
          <OPTION value=2005 <?php if (!(strcmp(2005, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2005</OPTION><OPTION 
              value=2006 <?php if (!(strcmp(2006, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2006</OPTION><OPTION value=2007 <?php if (!(strcmp(2007, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2007</OPTION><OPTION 
              value=2008 <?php if (!(strcmp(2008, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2008</OPTION><OPTION value=2009 <?php if (!(strcmp(2009, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2009</OPTION><OPTION 
              value=2010 <?php if (!(strcmp(2010, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2010</OPTION><OPTION value=2011 <?php if (!(strcmp(2011, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2011</OPTION><OPTION 
              value=2012 <?php if (!(strcmp(2012, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2012</OPTION><OPTION value=2013 <?php if (!(strcmp(2013, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2013</OPTION><OPTION 
              value=2014 <?php if (!(strcmp(2014, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2014</OPTION><OPTION value=2015 <?php if (!(strcmp(2015, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2015</OPTION><OPTION 
              value=2016 <?php if (!(strcmp(2016, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2016</OPTION><OPTION value=2017 <?php if (!(strcmp(2017, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2017</OPTION><OPTION 
              value=2018 <?php if (!(strcmp(2018, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2018</OPTION><OPTION value=2019 <?php if (!(strcmp(2019, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2019</OPTION><OPTION 
              value=2020 <?php if (!(strcmp(2020, temizle($_POST["yil"])))) {echo "selected=\"selected\"";} ?>>2020</OPTION></SELECT> </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Oda Sayýsý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><SELECT style="WIDTH: 150px" class=input name=oda>
            <OPTION selected value=0 <?php if (!(strcmp(0, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>Bilgi Yok</OPTION>
            <OPTION value=1 <?php if (!(strcmp(1, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>
            1 Oda</OPTION>
          <OPTION value=2 <?php if (!(strcmp(2, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>2 Oda</OPTION>
          <OPTION value=3 <?php if (!(strcmp(3, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>
          3 Oda</OPTION>
          <OPTION value=4 <?php if (!(strcmp(4, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>4 Oda</OPTION>
          <OPTION value=5 <?php if (!(strcmp(5, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>5               Oda</OPTION>
          <OPTION value=6 <?php if (!(strcmp(6, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>6 Oda</OPTION>
          <OPTION value=7 <?php if (!(strcmp(7, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>7               Oda</OPTION>
          <OPTION value=8 <?php if (!(strcmp(8, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>8 Oda</OPTION>
          <OPTION value=9 <?php if (!(strcmp(9, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>9               Oda</OPTION>
          <OPTION value=10 <?php if (!(strcmp(10, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>10 Oda</OPTION>
          <OPTION value=11 <?php if (!(strcmp(11, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>11               Oda</OPTION>
          <OPTION value=12 <?php if (!(strcmp(12, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>12 Oda</OPTION>
          <OPTION value=13 <?php if (!(strcmp(13, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>13               Oda</OPTION>
          <OPTION value=14 <?php if (!(strcmp(14, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>14 Oda</OPTION><OPTION value=15 <?php if (!(strcmp(15, temizle($_POST["oda"])))) {echo "selected=\"selected\"";} ?>>15               Oda</OPTION></SELECT> </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Salon Sayýsý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><SELECT style="WIDTH: 150px" class=input 
              name=salonoda>
            <OPTION selected value=0 <?php if (!(strcmp(0, temizle($_POST["salonoda"])))) {echo "selected=\"selected\"";} ?>>Bilgi Yok</OPTION>
          <OPTION 
              value=1 <?php if (!(strcmp(1, temizle($_POST["salonoda"])))) {echo "selected=\"selected\"";} ?>>1 Salon</OPTION><OPTION value=2 <?php if (!(strcmp(2, temizle($_POST["salonoda"])))) {echo "selected=\"selected\"";} ?>>2 Salon</OPTION><OPTION 
              value=3 <?php if (!(strcmp(3, temizle($_POST["salonoda"])))) {echo "selected=\"selected\"";} ?>>3 Salon</OPTION><OPTION value=4 <?php if (!(strcmp(4, temizle($_POST["salonoda"])))) {echo "selected=\"selected\"";} ?>>4 Salon</OPTION><OPTION 
              value=5 <?php if (!(strcmp(5, temizle($_POST["salonoda"])))) {echo "selected=\"selected\"";} ?>>5 Salon</OPTION></SELECT> </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Yatak Odasý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><SELECT style="WIDTH: 150px" class=input 
              name=yatakoda>
            <OPTION selected value=0 <?php if (!(strcmp(0, temizle($_POST["yatakoda"])))) {echo "selected=\"selected\"";} ?>>Bilgi Yok</OPTION>
          <OPTION 
              value=1 <?php if (!(strcmp(1, temizle($_POST["yatakoda"])))) {echo "selected=\"selected\"";} ?>>1 Yatak Odasý</OPTION>
          <OPTION value=2 <?php if (!(strcmp(2, temizle($_POST["yatakoda"])))) {echo "selected=\"selected\"";} ?>>2 Yatak               Odasý</OPTION>
          <OPTION value=3 <?php if (!(strcmp(3, temizle($_POST["yatakoda"])))) {echo "selected=\"selected\"";} ?>>3 Yatak Odasý</OPTION><OPTION 
              value=4 <?php if (!(strcmp(4, temizle($_POST["yatakoda"])))) {echo "selected=\"selected\"";} ?>>4 Yatak Odasý</OPTION><OPTION value=5 <?php if (!(strcmp(5, temizle($_POST["yatakoda"])))) {echo "selected=\"selected\"";} ?>>5 Yatak               Odasý</OPTION></SELECT> </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Banyo Sayýsý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><SELECT style="WIDTH: 150px" class=input name=banyo>
            <OPTION selected value=0 <?php if (!(strcmp(0, temizle($_POST["banyo"])))) {echo "selected=\"selected\"";} ?>>Bilgi Yok</OPTION>
            <OPTION value=1 <?php if (!(strcmp(1, temizle($_POST["banyo"])))) {echo "selected=\"selected\"";} ?>>1               Banyo</OPTION>
          <OPTION value=2 <?php if (!(strcmp(2, temizle($_POST["banyo"])))) {echo "selected=\"selected\"";} ?>>2 Banyo</OPTION>
          <OPTION value=3 <?php if (!(strcmp(3, temizle($_POST["banyo"])))) {echo "selected=\"selected\"";} ?>>3               Banyo</OPTION>
          <OPTION value=4 <?php if (!(strcmp(4, temizle($_POST["banyo"])))) {echo "selected=\"selected\"";} ?>>4 Banyo</OPTION><OPTION value=5 <?php if (!(strcmp(5, temizle($_POST["banyo"])))) {echo "selected=\"selected\"";} ?>>5               Banyo</OPTION></SELECT> </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Isýnma Tipi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from isinma_tipi  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
$data_isinma_tipi[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=isitma><LABEL for=kd0>'.$veri->adi.'</LABEL>';
$i++;
	 } 
 echo resim_listele(5,2,2,$data_isinma_tipi); 
 
 ?></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Yakýt Tipi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from yakit_tipi  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
$data_yakit_tipi[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=yakittipi><LABEL for=kd0>'.$veri->adi.'</LABEL>';
$i++;
	 } 
 echo resim_listele(5,2,2,$data_yakit_tipi); 
 
 ?></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Balkon</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from balkon  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
$data_balkon[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=balkon><LABEL for=kd0>'.$veri->adi.'</LABEL>';
$i++;
	 } 
 echo resim_listele(5,2,2,$data_balkon); 
 
 ?></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Bah&ccedil;e</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from bahce  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
$data_bahce[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=bahce><LABEL for=kd0>'.$veri->adi.'</LABEL>';
$i++;
	 } 
 echo resim_listele(5,2,2,$data_bahce); 
 
 ?></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Ý&ccedil; Donaným</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from ic_donanim  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {


$data[$i] = '<input 
name=a'.$veri->id.' type=checkbox  id=a1 value='.$veri->id.'  />  <LABEL for=d41>'.$veri->adi.'</LABEL>';


	$i++;
	 } 
 echo resim_listele(4,2,2,$data); 
 
 ?></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Dýþ Donaným</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from dis_donanim  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {


$data1[$i] = '<input 
name=b'.$veri->id.' type=checkbox  id=a1 value='.$veri->id.'  />  <LABEL for=d41>'.$veri->adi.'</LABEL>';


	$i++;
	 } 
 echo resim_listele(4,2,2,$data1); 
 
 ?></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD><DIV align=right><strong>&Ccedil;evre &Ouml;zellikleri</strong></DIV></TD>
          <TD align="center"> :</TD>
          <TD colSpan=2><?php 
   $vt->sql("select * from cevre_ozellikleri  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {


$data2[$i] = '<input 
name=c'.$veri->id.' type=checkbox  id=a1 value='.$veri->id.'  />  <LABEL for=d41>'.$veri->adi.'</LABEL>';


	$i++;
	 } 
 echo resim_listele(4,2,2,$data2); 
 
 ?></TD>
        </TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>        
        <TR>
          <TD>
          
            <DIV align=right><strong>Google  Koordinatlar&#305;</strong></DIV></TD>
          <TD align="center"> :</TD>
          <TD colSpan=2>Enlem 
            <INPUT name=x class=input style="TEXT-ALIGN: right" 
                   value="<?php echo temizle($_POST["x"]); ?>" 
                  size=25 maxLength=25>
            &nbsp;&nbsp;Boylam &nbsp;
            <INPUT name=y class=input style="TEXT-ALIGN: right" 
                   value="<?php echo temizle($_POST["y"]); ?>" 
                  size=25 maxLength=25>
          &nbsp;<a href="http://www.mygeoposition.com/" target="_blank">nas&#305;l koordinat al&#305;r&#305;m?</a></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD colSpan=4><FONT color=#008000 size=4><STRONG>Gayrimenkul 
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
            src="tema/img/information.gif" width=16 
        height=16></A></TD></TR>
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
          <STRONG>Ýl/Ýl&ccedil;e/Semt</STRONG> :&nbsp;&nbsp;<?php 
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
 ?></TD>
          <TD><A 
            href="#" 
            rel=balloon7><IMG border=0 alt="" 
            src="tema/img/information.gif" width=16 
        height=16></A></TD></TR>
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
            color=#ff0000><STRONG>Bu alanda formda se&ccedil;eneklerde olmayan &ouml;zellikleri yaz&#305;n&#305;z.</STRONG></FONT>  </TD>
          <TD><A 
            href="#" 
            rel=balloon8><IMG border=0 alt="" 
            src="tema/img/information.gif" width=16 
        height=16></A></TD></TR>
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
                  <td width="5%" nowrap="nowrap"><input <?php if (!(strcmp(temizle($_POST["sure"]),"365"))) {echo "checked=\"checked\"";} ?> id="sure2" value="14"  type="radio" name="sure" /></td>
                  <td width="13%" nowrap="nowrap"><label for="sure2">2 Hafta</label></td>
                  <td width="5%" nowrap="nowrap"><input <?php if (!(strcmp(temizle($_POST["sure"]),"180"))) {echo "checked=\"checked\"";} ?> id="sure2" value="30" type="radio" name="sure" /></td>
                  <td width="13%" nowrap="nowrap"><label for="sure2">1 Ay</label></td>
                  <td width="5%" nowrap="nowrap"><input <?php if (!(strcmp(temizle($_POST["sure"]),"90"))) {echo "checked=\"checked\"";} ?> id="sure2" value="60"  type="radio" name="sure" /></td>
                  <td width="13%" nowrap="nowrap"><label for="sure2">2 Ay</label></td>
                  <td width="5%" nowrap="nowrap"><input <?php if (!(strcmp(temizle($_POST["sure"]),"60"))) {echo "checked=\"checked\"";} ?> id="sure2" value="90" checked="checked" type="radio" name="sure" /></td>
                  <td width="12%" nowrap="nowrap"><label for="sure2">3 Ay</label></td>
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
            src="tema/img/information.gif" width=16 
        height=16></A></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD> <DIV align=right><strong>Dosya No</strong></DIV></TD>
          <TD>&nbsp;</TD>
          <TD colSpan=2><label>
            <input type="text" class=input name="dosya_no" id="dosya_no" value="<?php echo temizle($_POST["dosya_no"]); ?>" />
          Emlak&ccedil;&#305;lar i&ccedil;in</label></TD>
        </TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>        
        <TR>
          <TD>
            <DIV align=right><STRONG>Ýlan Oluþturma Kurallarý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><INPUT name=ku type=checkbox id=c1 value=1 checked="checked"> <A 
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
            <DIV align=center>
            
              <input value="&#304;lan&#305; Kaydet" type=submit name="gitti" <?php if($_POST["gitti"] != "") {echo 'disabled=\"disabled\"';}  ?> onclick=" return kontrol()" />
          </DIV></TD></TR></TBODY></TABLE></FORM><BR><BR>