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
                <TD>Ýþaretinin &Uuml;zerine Gidiniz.</TD></TR></TBODY></TABLE><A 
            href="start.php?action=ilan_kurallari" 
            target=_blank><FONT color=#ff0000><STRONG>Ýlanlarýnýz  Ýlan 
            Oluþturma Kurallarýna Uyumlu Olmak Zorundadýr.</STRONG></FONT></A>
            
              <?php 
		if(temizle($_POST["fiyat"]) != "") {	

$vt->sql("update ilan_ticari set  `fiyat` = '".temizle($_POST["fiyat"])."', `birim` = '".temizle($_POST["fiyat_art"])."',`kullanim_durumu` = '".temizle($_POST["kullandurum"])."', kullanim_amaci = '".temizle($_POST["kullanimamaci"])."',toplam_metrekare = '".temizle($_POST["metrekare"])."',kullanilabilir_metrekare = '".temizle($_POST["metrekare2"])."',`yapi_tipi` = '".temizle($_POST["yapitipi"])."',`yapi_durum` = '".temizle($_POST["yapidurum"])."',`bulundugu_kat` = '".temizle($_POST["kat"])."', `bina_kat_sayisi` = '".temizle($_POST["kat2"])."', `yapim_yili` = '".temizle($_POST["yil"])."',`isinma_tipi` = '".temizle($_POST["isitma"])."',`yakit_tipi` = '".temizle($_POST["yakittipi"])."',`adres` = '".temizle($_POST["adres"])."', `posta_kodu` = '".temizle($_POST["postakodu"])."', `il_ilce` = '".temizle($_POST["yer"])."', `aciklama` = '".temizle($_POST["aciklama"])."', `ilan_suresi` = '".temizle($_POST["sure"])."', `satis_tarihi` = '".temizle($_POST["kirasatis"])."' , kredi='".temizle($_POST["kredi"])."' ,gx='".temizle($_POST["x"])."', gy='".temizle($_POST["y"])."' ,onay='2' where id= '".temizle($_GET["oid"])."' ");
																																																																																																																																																												

if($vt->sor()>0) {
	/// $son_id = $vt->insertID();
//////////////////////////77

$vt->sql("update ilan_icdonanim set  a1	='".temizle($_POST["a1"])."',a2='".temizle($_POST["a2"])."',	a3='".temizle($_POST["a3"])."',	a4='".temizle($_POST["a4"])."',	a5='".temizle($_POST["a5"])."',	a6='".temizle($_POST["a6"])."',	a7='".temizle($_POST["a7"])."',	a8='".temizle($_POST["a8"])."',	a9='".temizle($_POST["a9"])."',	a10='".temizle($_POST["a10"])."',	a11='".temizle($_POST["a11"])."',	a12='".temizle($_POST["a12"])."',	a13='".temizle($_POST["a13"])."',	a14='".temizle($_POST["a14"])."',	a15='".temizle($_POST["a15"])."',	a16='".temizle($_POST["a16"])."',	a17='".temizle($_POST["a17"])."',	a18='".temizle($_POST["a18"])."',	a19='".temizle($_POST["a19"])."',	a20='".temizle($_POST["a20"])."',	a21='".temizle($_POST["a21"])."',	a22='".temizle($_POST["a22"])."',	a23='".temizle($_POST["a23"])."',	a24='".temizle($_POST["a24"])."',	a25='".temizle($_POST["a25"])."',	a26='".temizle($_POST["a26"])."',	a27='".temizle($_POST["a27"])."',	a28='".temizle($_POST["a28"])."',	a29='".temizle($_POST["a29"])."',	a30='".temizle($_POST["a30"])."',	a31='".temizle($_POST["a31"])."',	a32 ='".temizle($_POST["a32"])."'   where ilan_id= '".temizle($_GET["oid"])."' ");
/// $vt->sor(); 


if($vt->sor()== 0) { echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu EF1200.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}


//////////////////// */
//////////////////////////78
$vt->sql("update ilan_disdonanim set  a1	='".temizle($_POST["b1"])."',a2='".temizle($_POST["b2"])."',	a3='".temizle($_POST["b3"])."',	a4='".temizle($_POST["b4"])."',	a5='".temizle($_POST["b5"])."',	a6='".temizle($_POST["b6"])."',	a7='".temizle($_POST["b7"])."',	a8='".temizle($_POST["b8"])."',	a9='".temizle($_POST["b9"])."',	a10='".temizle($_POST["b10"])."'   where ilan_id= '".temizle($_GET["oid"])."' ");

if($vt->sor()== 0) { echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu EF1300.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}

////////////////////
//////////////////////////79
$vt->sql("update ilan_cevreozellikleri set  a1	='".temizle($_POST["c1"])."',a2='".temizle($_POST["c2"])."',	a3='".temizle($_POST["c3"])."',	a4='".temizle($_POST["c4"])."',	a5='".temizle($_POST["c5"])."',	a6='".temizle($_POST["c6"])."',	a7='".temizle($_POST["c7"])."',	a8='".temizle($_POST["c8"])."',	a9='".temizle($_POST["c9"])."',	a10='".temizle($_POST["c10"])."',	a11='".temizle($_POST["c11"])."'   where ilan_id= '".temizle($_GET["oid"])."' ");


if($vt->sor()== 0) { echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu EF1400.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}

////////////////////
echo "<h3>Ýlan   D&uuml;zeltilmi&#351;tir.</h3>";

}  else {echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu F2100.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>"; }
		}
		
		
		
		/* degisiklikler yapildi simdi listeleme kismi */
		
 $vt->sql('select * from ilan_ticari where id="'.temizle($_GET["oid"]).'" and uye_id="'.$_SESSION["id"].'"   ')->sor();
  if($vt->numRows() == 0) {echo "<h3>Sayfada Hata Olustu . Hata Kodu EF2100.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";};
 $veriler1 = $vt->alHepsi();


 foreach( $veriler1 as $veri1 )
{ 


		
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
          <TD colSpan=2>                                          <?php 
 $vt->sql('select * from ilan_tipi where id="'.$veri1->ilan_tipi_id.'"   ')->sor();
 $veriler12 = $vt->alHepsi();
 foreach( $veriler12 as $veri12 )
{ echo $veri12->adi; }
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
$vt->sql('select * from sehir where sehirID="'.$veri1->il.'"   ')->sor();
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	echo $veri2->sehiradiUpper."&nbsp;-&nbsp;"; }
 ?>
 <?php 
$vt->sql('select * from ilce where ilceID="'.$veri1->ilce.'"  and sehirID="'.$veri1->il.'" ')->sor();
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	echo $veri3->ilceAdi."&nbsp;-&nbsp;"; }
 ?>         
  <?php 
$vt->sql('select * from mahalle where mahalleID="'.$veri1->koy.'" and  ilceID="'.$veri1->ilce.'"  and sehirID="'.$veri1->il.'"   ')->sor();
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	echo $veri4->mahalleAdi; }
 ?>   </TD></TR>
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
 $vt->sql('select * from ilan_tipi where id="'.$veri1->ilan_tipi_id.'"   ')->sor();
 $veriler12 = $vt->alHepsi();
 foreach( $veriler12 as $veri12 )
{ echo $veri12->adi."&nbsp;-&nbsp;"; }
 ?>
<?php 
$vt->sql('select * from sehir where sehirID="'.$veri1->il.'"   ')->sor();
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	echo $veri2->sehiradiUpper."&nbsp;-&nbsp;"; }
 ?>
 <?php 
$vt->sql('select * from ilce where ilceID="'.$veri1->ilce.'"  and sehirID="'.$veri1->il.'" ')->sor();
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	echo $veri3->ilceAdi."&nbsp;-&nbsp;"; }
 ?>         
  <?php 
$vt->sql('select * from mahalle where mahalleID="'.$veri1->koy.'" and  ilceID="'.$veri1->ilce.'"  and sehirID="'.$veri1->il.'"   ')->sor();
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	echo $veri4->mahalleAdi; }
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
                  onkeypress="return numbersonly(this, event)" value="<?php echo $veri1->fiyat; ?>" 
                  size=10 maxLength=10></TD>
                <TD>&nbsp;&nbsp;&nbsp;</TD>
                <TD><SELECT class=input name=fiyat_art><OPTION selected 
                    value=1 <?php if (!(strcmp(1, "$veri1->birim"))) {echo "selected=\"selected\"";} ?>>TL</OPTION><OPTION value=2 <?php if (!(strcmp(2, "$veri1->birim"))) {echo "selected=\"selected\"";} ?>>Euro</OPTION>
                  <OPTION 
                    value=3 <?php if (!(strcmp(3, "$veri1->birim"))) {echo "selected=\"selected\"";} ?>>USD</OPTION>
<OPTION value=4 <?php if (!(strcmp(4, "$veri1->birim"))) {echo "selected=\"selected\"";} ?>>GBP</OPTION></SELECT></TD>
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
              <option value="0" <?php if (!(strcmp(0, "$veri1->kredi"))) {echo "selected=\"selected\"";} ?>>Hay&#305;r</option>
              <option value="1" <?php if (!(strcmp(1, "$veri1->kredi"))) {echo "selected=\"selected\"";} ?>>Evet</option>
            </select>
          </label></TD>
          <TD>&nbsp;</TD>
        </TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD colSpan=4><BR>
          <FONT color=#008000 size=4><STRONG>Gayrimenkul 
            Bilgi Alaný (Ticari / Ýþyeri)</STRONG></FONT>
          <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Kullaným Durumu</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
            <?php 
   $vt->sql("select * from kullanim_durumu  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
/* $data_yapi_tipi[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=kd><LABEL for=kd0>'.$veri->adi.'</LABEL>'; */
if ($veri1->kullanim_durumu==$veri->id) {  $secilimi= "checked=\"checked\"";}

$data_kullanim_durumu[$i] = '<INPUT    '.$secilimi.'  id=kullanim_durum'.$veri->id.' value='.$veri->id.'  type=radio 
 name=kullandurum> <LABEL for=kullanim_durum0>'.$veri->adi.'</LABEL>';

 
$i++;
$secilimi="";
	 } 
 echo resim_listele(4,2,2,$data_kullanim_durumu); 
 
 ?></TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Kullaným Amacý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2>
          <?php 
   $vt->sql("select * from kullanim_amaci  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
/* $data_yapi_tipi[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=kd><LABEL for=kd0>'.$veri->adi.'</LABEL>'; */
if ($veri1->kullanim_amaci==$veri->id) {  $secilimi= "checked=\"checked\"";}

$data_kullanim_amaci[$i] = '<INPUT    '.$secilimi.'  id=kullanim_amaci'.$veri->id.' value='.$veri->id.'  type=radio 
 name=kullanimamaci> <LABEL for=kullanimamaci0>'.$veri->adi.'</LABEL>';

 
$i++;
$secilimi="";
	 } 
 echo resim_listele(4,2,2,$data_kullanim_amaci); 
 
 ?>
            </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Toplam Metrekare</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><INPUT 
            name=metrekare class=input 
            onkeypress="return numbersonly(this, event)" value="<?php echo $veri1->toplam_metrekare; ?>" size=10 maxLength=10> m&sup2; (Toplam Metrekare Alaný)</TD></TR>
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
            onkeypress="return numbersonly(this, event)" value="<?php echo $veri1->kullanilabilir_metrekare; ?>" size=10 maxLength=10> m&sup2; (Kullanýlabilir Metrekare Alaný)</TD></TR>
        <TR>
          <TD colSpan=4>
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
/* $data_yapi_tipi[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=kd><LABEL for=kd0>'.$veri->adi.'</LABEL>'; */
if ($veri1->yapi_tipi==$veri->id) {  $secilimi= "checked=\"checked\"";}

$data_yapi_tipi[$i] = '<INPUT    '.$secilimi.'  id=yapitipi'.$veri->id.' value='.$veri->id.'  type=radio 
 name=yapitipi> <LABEL for=yapitipi0>'.$veri->adi.'</LABEL>';

 
$i++;
$secilimi="";
	 } 
 echo resim_listele(4,2,2,$data_yapi_tipi); 
 
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
/* $data_yapi_tipi[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=kd><LABEL for=kd0>'.$veri->adi.'</LABEL>'; */
if ($veri1->yapi_durum==$veri->id) {  $secilimi= "checked=\"checked\"";}

$data_yapi_durum[$i] = '<INPUT    '.$secilimi.'  id=yapidurum'.$veri->id.' value='.$veri->id.'  type=radio 
 name=yapidurum> <LABEL for=yapidurum0>'.$veri->adi.'</LABEL>';

 
$i++;
$secilimi="";
	 } 
 echo resim_listele(5,2,2,$data_yapi_durum); 
 
 ?>          </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Teslim Tarihi</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><INPUT name=kirasatis class=input value="<?php echo $veri1->satis_tarihi; ?>" size=11 maxLength=12 > &Ouml;RNEK: Hemen Teslim yada 31.12.2015 &#351;eklinde teslim tarihi yaz&#305;n&#305;z</TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>          
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Bulunduðu Kat</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><SELECT style="WIDTH: 150px" class=input name=kat>
            <OPTION selected value=0 <?php if (!(strcmp(0, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>Bilgi Yok</OPTION>
            <OPTION 
              value=100 <?php if (!(strcmp(100, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>Zemin Kat</OPTION><OPTION value=101 <?php if (!(strcmp(101, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>Bodrum</OPTION>
            <OPTION value=102 <?php if (!(strcmp(102, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>Yarý Bordum</OPTION>
            <OPTION value=103 <?php if (!(strcmp(103, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>Giriþ               Katý</OPTION>
            <OPTION value=104 <?php if (!(strcmp(104, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>Bah&ccedil;e Katý</OPTION><OPTION 
              value=105 <?php if (!(strcmp(105, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>&Ccedil;atý Katý</OPTION>
            <OPTION value=106 <?php if (!(strcmp(106, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>Y&uuml;ksek               Giriþ</OPTION>
            <OPTION value=107 <?php if (!(strcmp(107, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>Asma Katý</OPTION>
            <OPTION 
              value=108 <?php if (!(strcmp(108, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>&Ccedil;atý Dubleksi</OPTION>
<OPTION 
              value=109 <?php if (!(strcmp(109, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>Dubleks</OPTION><OPTION value=110 <?php if (!(strcmp(110, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>Tribleks</OPTION>
            <OPTION value=1 <?php if (!(strcmp(1, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>1. Kat</OPTION><OPTION value=2 <?php if (!(strcmp(2, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>2. Kat</OPTION>
            <OPTION value=3 <?php if (!(strcmp(3, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>3. Kat</OPTION><OPTION value=4 <?php if (!(strcmp(4, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>4. Kat</OPTION>
            <OPTION value=5 <?php if (!(strcmp(5, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>5. Kat</OPTION>
            <OPTION value=6 <?php if (!(strcmp(6, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>6. Kat</OPTION>
            <OPTION value=7 <?php if (!(strcmp(7, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>7. Kat</OPTION>
            <OPTION value=8 <?php if (!(strcmp(8, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>8. Kat</OPTION>
            <OPTION value=9 <?php if (!(strcmp(9, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>9. Kat</OPTION>
<OPTION value=10 <?php if (!(strcmp(10, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>10. Kat</OPTION>
<OPTION value=11 <?php if (!(strcmp(11, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>11. Kat</OPTION>
<OPTION value=12 <?php if (!(strcmp(12, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>12.               Kat</OPTION>
<OPTION value=13 <?php if (!(strcmp(13, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>13. Kat</OPTION>
<OPTION 
              value=14 <?php if (!(strcmp(14, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>14. Kat</OPTION>
<OPTION value=15 <?php if (!(strcmp(15, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>15. Kat</OPTION>
<OPTION value=16 <?php if (!(strcmp(16, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>16. Kat</OPTION>
<OPTION value=17 <?php if (!(strcmp(17, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>17.               Kat</OPTION>
<OPTION value=18 <?php if (!(strcmp(18, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>18. Kat</OPTION>
<OPTION 
              value=19 <?php if (!(strcmp(19, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>19. Kat</OPTION>
<OPTION value=20 <?php if (!(strcmp(20, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>20. Kat</OPTION>
<OPTION value=21 <?php if (!(strcmp(21, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>21. Kat</OPTION>
<OPTION value=22 <?php if (!(strcmp(22, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>22.               Kat</OPTION>
<OPTION value=23 <?php if (!(strcmp(23, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>23. Kat</OPTION>
<OPTION 
              value=24 <?php if (!(strcmp(24, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>24. Kat</OPTION>
<OPTION value=25 <?php if (!(strcmp(25, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>25. Kat</OPTION>
<OPTION value=26 <?php if (!(strcmp(26, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>26. Kat</OPTION>
<OPTION value=27 <?php if (!(strcmp(27, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>27.               Kat</OPTION>
<OPTION value=28 <?php if (!(strcmp(28, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>28. Kat</OPTION>
<OPTION 
              value=29 <?php if (!(strcmp(29, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>29. Kat</OPTION>
<OPTION value=30 <?php if (!(strcmp(30, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>30. Kat</OPTION>
<OPTION value=31 <?php if (!(strcmp(31, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>31. Kat</OPTION>
<OPTION value=32 <?php if (!(strcmp(32, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>32.               Kat</OPTION>
<OPTION value=33 <?php if (!(strcmp(33, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>33. Kat</OPTION>
<OPTION 
              value=34 <?php if (!(strcmp(34, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>34. Kat</OPTION>
<OPTION value=35 <?php if (!(strcmp(35, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>35. Kat</OPTION>
<OPTION value=36 <?php if (!(strcmp(36, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>36. Kat</OPTION>
<OPTION value=37 <?php if (!(strcmp(37, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>37.               Kat</OPTION>
<OPTION value=38 <?php if (!(strcmp(38, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>38. Kat</OPTION>
<OPTION 
              value=39 <?php if (!(strcmp(39, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>39. Kat</OPTION>
<OPTION value=40 <?php if (!(strcmp(40, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>40. Kat</OPTION>
<OPTION value=41 <?php if (!(strcmp(41, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>41. Kat</OPTION>
<OPTION value=42 <?php if (!(strcmp(42, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>42.               Kat</OPTION>
<OPTION value=43 <?php if (!(strcmp(43, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>43. Kat</OPTION>
<OPTION 
              value=44 <?php if (!(strcmp(44, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>44. Kat</OPTION>
<OPTION value=45 <?php if (!(strcmp(45, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>45. Kat</OPTION>
<OPTION value=46 <?php if (!(strcmp(46, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>46. Kat</OPTION>
<OPTION value=47 <?php if (!(strcmp(47, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>47.               Kat</OPTION>
<OPTION value=48 <?php if (!(strcmp(48, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>48. Kat</OPTION>
<OPTION 
              value=49 <?php if (!(strcmp(49, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>49. Kat</OPTION>
<OPTION value=50 <?php if (!(strcmp(50, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>50. Kat</OPTION>
<OPTION value=51 <?php if (!(strcmp(51, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>51. Kat</OPTION>
<OPTION value=52 <?php if (!(strcmp(52, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>52.               Kat</OPTION>
<OPTION value=53 <?php if (!(strcmp(53, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>53. Kat</OPTION>
<OPTION 
              value=54 <?php if (!(strcmp(54, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>54. Kat</OPTION>
<OPTION value=55 <?php if (!(strcmp(55, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>55. Kat</OPTION>
<OPTION value=56 <?php if (!(strcmp(56, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>56. Kat</OPTION>
<OPTION value=57 <?php if (!(strcmp(57, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>57.               Kat</OPTION>
<OPTION value=58 <?php if (!(strcmp(58, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>58. Kat</OPTION>
<OPTION 
              value=59 <?php if (!(strcmp(59, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>59. Kat</OPTION>
<OPTION value=60 <?php if (!(strcmp(60, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>60. Kat</OPTION>
<OPTION value=61 <?php if (!(strcmp(61, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>61. Kat</OPTION>
<OPTION value=62 <?php if (!(strcmp(62, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>62.               Kat</OPTION>
<OPTION value=63 <?php if (!(strcmp(63, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>63. Kat</OPTION>
<OPTION 
              value=64 <?php if (!(strcmp(64, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>64. Kat</OPTION>
<OPTION value=65 <?php if (!(strcmp(65, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>65. Kat</OPTION>
<OPTION value=66 <?php if (!(strcmp(66, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>66. Kat</OPTION>
<OPTION value=67 <?php if (!(strcmp(67, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>67.               Kat</OPTION>
<OPTION value=68 <?php if (!(strcmp(68, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>68. Kat</OPTION>
<OPTION 
              value=69 <?php if (!(strcmp(69, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>69. Kat</OPTION>
<OPTION value=70 <?php if (!(strcmp(70, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>70. Kat</OPTION>
<OPTION value=71 <?php if (!(strcmp(71, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>71. Kat</OPTION>
<OPTION value=72 <?php if (!(strcmp(72, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>72.               Kat</OPTION>
<OPTION value=73 <?php if (!(strcmp(73, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>73. Kat</OPTION>
<OPTION 
              value=74 <?php if (!(strcmp(74, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>74. Kat</OPTION>
<OPTION value=75 <?php if (!(strcmp(75, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>75. Kat</OPTION>
<OPTION value=76 <?php if (!(strcmp(76, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>76. Kat</OPTION>
<OPTION value=77 <?php if (!(strcmp(77, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>77.               Kat</OPTION>
<OPTION value=78 <?php if (!(strcmp(78, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>78. Kat</OPTION>
<OPTION 
              value=79 <?php if (!(strcmp(79, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>79. Kat</OPTION>
<OPTION value=80 <?php if (!(strcmp(80, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>80. Kat</OPTION>
<OPTION value=81 <?php if (!(strcmp(81, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>81. Kat</OPTION>
<OPTION value=82 <?php if (!(strcmp(82, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>82.               Kat</OPTION>
<OPTION value=83 <?php if (!(strcmp(83, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>83. Kat</OPTION>
<OPTION 
              value=84 <?php if (!(strcmp(84, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>84. Kat</OPTION>
<OPTION value=85 <?php if (!(strcmp(85, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>85. Kat</OPTION>
<OPTION value=86 <?php if (!(strcmp(86, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>86. Kat</OPTION>
<OPTION value=87 <?php if (!(strcmp(87, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>87.               Kat</OPTION>
<OPTION value=88 <?php if (!(strcmp(88, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>88. Kat</OPTION>
<OPTION 
              value=89 <?php if (!(strcmp(89, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>89. Kat</OPTION>
<OPTION value=90 <?php if (!(strcmp(90, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>90. Kat</OPTION>
<OPTION value=91 <?php if (!(strcmp(91, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>91. Kat</OPTION>
<OPTION value=92 <?php if (!(strcmp(92, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>92.               Kat</OPTION>
<OPTION value=93 <?php if (!(strcmp(93, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>93. Kat</OPTION>
<OPTION 
              value=94 <?php if (!(strcmp(94, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>94. Kat</OPTION>
<OPTION value=95 <?php if (!(strcmp(95, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>95. Kat</OPTION>
<OPTION value=96 <?php if (!(strcmp(96, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>96. Kat</OPTION>
<OPTION value=97 <?php if (!(strcmp(97, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>97.               Kat</OPTION>
<OPTION value=98 <?php if (!(strcmp(98, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>98. Kat</OPTION>
<OPTION 
              value=99 <?php if (!(strcmp(99, "$veri1->bulundugu_kat"))) {echo "selected=\"selected\"";} ?>>99. Kat</OPTION></SELECT> </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD noWrap>
            <DIV align=right><STRONG>Bina Kat Sayýsý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><SELECT style="WIDTH: 150px" class=input name=kat2>
            <OPTION selected value=0 <?php if (!(strcmp(0, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>Bilgi Yok</OPTION>
            <OPTION value=1 <?php if (!(strcmp(1, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>1               Kat</OPTION>
            <OPTION value=2 <?php if (!(strcmp(2, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>2 Kat</OPTION>
            <OPTION value=3 <?php if (!(strcmp(3, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>3               Kat</OPTION>
            <OPTION value=4 <?php if (!(strcmp(4, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>4 Kat</OPTION>
            <OPTION value=5 <?php if (!(strcmp(5, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>5               Kat</OPTION>
            <OPTION value=6 <?php if (!(strcmp(6, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>6 Kat</OPTION>
            <OPTION value=7 <?php if (!(strcmp(7, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>7               Kat</OPTION>
            <OPTION value=8 <?php if (!(strcmp(8, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>8 Kat</OPTION>
            <OPTION value=9 <?php if (!(strcmp(9, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>9               Kat</OPTION>
            <OPTION value=10 <?php if (!(strcmp(10, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>10 Kat</OPTION>
<OPTION value=11 <?php if (!(strcmp(11, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>11               Kat</OPTION>
<OPTION value=12 <?php if (!(strcmp(12, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>12 Kat</OPTION>
<OPTION value=13 <?php if (!(strcmp(13, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>13               Kat</OPTION>
<OPTION value=14 <?php if (!(strcmp(14, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>14 Kat</OPTION>
<OPTION value=15 <?php if (!(strcmp(15, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>15               Kat</OPTION>
<OPTION value=16 <?php if (!(strcmp(16, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>16 Kat</OPTION>
<OPTION value=17 <?php if (!(strcmp(17, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>17               Kat</OPTION>
<OPTION value=18 <?php if (!(strcmp(18, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>18 Kat</OPTION>
<OPTION value=19 <?php if (!(strcmp(19, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>19               Kat</OPTION>
<OPTION value=20 <?php if (!(strcmp(20, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>20 Kat</OPTION>
<OPTION value=21 <?php if (!(strcmp(21, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>21               Kat</OPTION>
<OPTION value=22 <?php if (!(strcmp(22, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>22 Kat</OPTION>
<OPTION value=23 <?php if (!(strcmp(23, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>23               Kat</OPTION>
<OPTION value=24 <?php if (!(strcmp(24, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>24 Kat</OPTION>
<OPTION value=25 <?php if (!(strcmp(25, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>25               Kat</OPTION>
<OPTION value=26 <?php if (!(strcmp(26, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>26 Kat</OPTION>
<OPTION value=27 <?php if (!(strcmp(27, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>27               Kat</OPTION>
<OPTION value=28 <?php if (!(strcmp(28, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>28 Kat</OPTION>
<OPTION value=29 <?php if (!(strcmp(29, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>29               Kat</OPTION>
<OPTION value=30 <?php if (!(strcmp(30, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>30 Kat</OPTION>
<OPTION value=31 <?php if (!(strcmp(31, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>31               Kat</OPTION>
<OPTION value=32 <?php if (!(strcmp(32, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>32 Kat</OPTION>
<OPTION value=33 <?php if (!(strcmp(33, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>33               Kat</OPTION>
<OPTION value=34 <?php if (!(strcmp(34, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>34 Kat</OPTION>
<OPTION value=35 <?php if (!(strcmp(35, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>35               Kat</OPTION>
<OPTION value=36 <?php if (!(strcmp(36, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>36 Kat</OPTION>
<OPTION value=37 <?php if (!(strcmp(37, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>37               Kat</OPTION>
<OPTION value=38 <?php if (!(strcmp(38, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>38 Kat</OPTION>
<OPTION value=39 <?php if (!(strcmp(39, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>39               Kat</OPTION>
<OPTION value=40 <?php if (!(strcmp(40, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>40 Kat</OPTION>
<OPTION value=41 <?php if (!(strcmp(41, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>41               Kat</OPTION>
<OPTION value=42 <?php if (!(strcmp(42, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>42 Kat</OPTION>
<OPTION value=43 <?php if (!(strcmp(43, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>43               Kat</OPTION>
<OPTION value=44 <?php if (!(strcmp(44, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>44 Kat</OPTION>
<OPTION value=45 <?php if (!(strcmp(45, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>45               Kat</OPTION>
<OPTION value=46 <?php if (!(strcmp(46, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>46 Kat</OPTION>
<OPTION value=47 <?php if (!(strcmp(47, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>47               Kat</OPTION>
<OPTION value=48 <?php if (!(strcmp(48, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>48 Kat</OPTION>
<OPTION value=49 <?php if (!(strcmp(49, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>49               Kat</OPTION>
<OPTION value=50 <?php if (!(strcmp(50, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>50 Kat</OPTION>
<OPTION value=51 <?php if (!(strcmp(51, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>51               Kat</OPTION>
<OPTION value=52 <?php if (!(strcmp(52, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>52 Kat</OPTION>
<OPTION value=53 <?php if (!(strcmp(53, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>53               Kat</OPTION>
<OPTION value=54 <?php if (!(strcmp(54, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>54 Kat</OPTION>
<OPTION value=55 <?php if (!(strcmp(55, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>55               Kat</OPTION>
<OPTION value=56 <?php if (!(strcmp(56, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>56 Kat</OPTION>
<OPTION value=57 <?php if (!(strcmp(57, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>57               Kat</OPTION>
<OPTION value=58 <?php if (!(strcmp(58, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>58 Kat</OPTION>
<OPTION value=59 <?php if (!(strcmp(59, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>59               Kat</OPTION>
<OPTION value=60 <?php if (!(strcmp(60, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>60 Kat</OPTION>
<OPTION value=61 <?php if (!(strcmp(61, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>61               Kat</OPTION>
<OPTION value=62 <?php if (!(strcmp(62, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>62 Kat</OPTION>
<OPTION value=63 <?php if (!(strcmp(63, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>63               Kat</OPTION>
<OPTION value=64 <?php if (!(strcmp(64, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>64 Kat</OPTION>
<OPTION value=65 <?php if (!(strcmp(65, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>65               Kat</OPTION>
<OPTION value=66 <?php if (!(strcmp(66, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>66 Kat</OPTION>
<OPTION value=67 <?php if (!(strcmp(67, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>67               Kat</OPTION>
<OPTION value=68 <?php if (!(strcmp(68, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>68 Kat</OPTION>
            <OPTION value=69 <?php if (!(strcmp(69, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>69               Kat</OPTION>
            <OPTION value=70 <?php if (!(strcmp(70, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>70 Kat</OPTION>
            <OPTION value=71 <?php if (!(strcmp(71, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>71               Kat</OPTION>
            <OPTION value=72 <?php if (!(strcmp(72, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>72 Kat</OPTION>
            <OPTION value=73 <?php if (!(strcmp(73, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>73               Kat</OPTION>
            <OPTION value=74 <?php if (!(strcmp(74, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>74 Kat</OPTION>
            <OPTION value=75 <?php if (!(strcmp(75, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>75               Kat</OPTION>
            <OPTION value=76 <?php if (!(strcmp(76, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>76 Kat</OPTION>
            <OPTION value=77 <?php if (!(strcmp(77, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>77               Kat</OPTION>
<OPTION value=78 <?php if (!(strcmp(78, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>78 Kat</OPTION>
            <OPTION value=79 <?php if (!(strcmp(79, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>79               Kat</OPTION>
            <OPTION value=80 <?php if (!(strcmp(80, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>80 Kat</OPTION>
            <OPTION value=81 <?php if (!(strcmp(81, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>81               Kat</OPTION>
            <OPTION value=82 <?php if (!(strcmp(82, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>82 Kat</OPTION>
            <OPTION value=83 <?php if (!(strcmp(83, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>83               Kat</OPTION>
            <OPTION value=84 <?php if (!(strcmp(84, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>84 Kat</OPTION>
            <OPTION value=85 <?php if (!(strcmp(85, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>85               Kat</OPTION>
            <OPTION value=86 <?php if (!(strcmp(86, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>86 Kat</OPTION>
            <OPTION value=87 <?php if (!(strcmp(87, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>87               Kat</OPTION>
<OPTION value=88 <?php if (!(strcmp(88, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>88 Kat</OPTION>
            <OPTION value=89 <?php if (!(strcmp(89, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>89               Kat</OPTION>
            <OPTION value=90 <?php if (!(strcmp(90, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>90 Kat</OPTION>
            <OPTION value=91 <?php if (!(strcmp(91, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>91               Kat</OPTION>
            <OPTION value=92 <?php if (!(strcmp(92, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>92 Kat</OPTION>
            <OPTION value=93 <?php if (!(strcmp(93, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>93               Kat</OPTION>
            <OPTION value=94 <?php if (!(strcmp(94, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>94 Kat</OPTION>
            <OPTION value=95 <?php if (!(strcmp(95, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>95               Kat</OPTION>
            <OPTION value=96 <?php if (!(strcmp(96, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>96 Kat</OPTION>
            <OPTION value=97 <?php if (!(strcmp(97, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>97               Kat</OPTION>
<OPTION value=98 <?php if (!(strcmp(98, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>98 Kat</OPTION><OPTION value=99 <?php if (!(strcmp(99, "$veri1->bina_kat_sayisi"))) {echo "selected=\"selected\"";} ?>>99               Kat</OPTION></SELECT> </TD></TR>
        <TR>
          <TD colSpan=4>
            <HR color=#c1dad7 SIZE=1 width="100%" noShade>
          </TD></TR>
        <TR>
          <TD>
            <DIV align=right><STRONG>Yapým Yýlý</STRONG></DIV></TD>
          <TD>&nbsp;:&nbsp;</TD>
          <TD colSpan=2><SELECT style="WIDTH: 150px" class=input name=yil>
            <OPTION selected value=0 <?php if (!(strcmp(0, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>Bilgi Yok</OPTION>
            <OPTION 
              value=1900 <?php if (!(strcmp(1900, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1900</OPTION>
            <OPTION value=1901 <?php if (!(strcmp(1901, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1901</OPTION>
            <OPTION 
              value=1902 <?php if (!(strcmp(1902, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1902</OPTION>
            <OPTION value=1903 <?php if (!(strcmp(1903, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1903</OPTION>
            <OPTION 
              value=1904 <?php if (!(strcmp(1904, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1904</OPTION>
            <OPTION value=1905 <?php if (!(strcmp(1905, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1905</OPTION>
            <OPTION 
              value=1906 <?php if (!(strcmp(1906, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1906</OPTION>
            <OPTION value=1907 <?php if (!(strcmp(1907, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1907</OPTION>
            <OPTION 
              value=1908 <?php if (!(strcmp(1908, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1908</OPTION>
            <OPTION value=1909 <?php if (!(strcmp(1909, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1909</OPTION>
            <OPTION 
              value=1910 <?php if (!(strcmp(1910, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1910</OPTION>
            <OPTION value=1911 <?php if (!(strcmp(1911, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1911</OPTION>
            <OPTION 
              value=1912 <?php if (!(strcmp(1912, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1912</OPTION>
            <OPTION value=1913 <?php if (!(strcmp(1913, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1913</OPTION>
            <OPTION 
              value=1914 <?php if (!(strcmp(1914, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1914</OPTION>
            <OPTION value=1915 <?php if (!(strcmp(1915, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1915</OPTION>
            <OPTION 
              value=1916 <?php if (!(strcmp(1916, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1916</OPTION>
            <OPTION value=1917 <?php if (!(strcmp(1917, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1917</OPTION>
            <OPTION 
              value=1918 <?php if (!(strcmp(1918, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1918</OPTION>
            <OPTION value=1919 <?php if (!(strcmp(1919, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1919</OPTION>
            <OPTION 
              value=1920 <?php if (!(strcmp(1920, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1920</OPTION>
            <OPTION value=1921 <?php if (!(strcmp(1921, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1921</OPTION>
            <OPTION 
              value=1922 <?php if (!(strcmp(1922, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1922</OPTION>
            <OPTION value=1923 <?php if (!(strcmp(1923, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1923</OPTION>
            <OPTION 
              value=1924 <?php if (!(strcmp(1924, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1924</OPTION>
            <OPTION value=1925 <?php if (!(strcmp(1925, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1925</OPTION>
            <OPTION 
              value=1926 <?php if (!(strcmp(1926, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1926</OPTION>
            <OPTION value=1927 <?php if (!(strcmp(1927, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1927</OPTION>
            <OPTION 
              value=1928 <?php if (!(strcmp(1928, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1928</OPTION>
            <OPTION value=1929 <?php if (!(strcmp(1929, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1929</OPTION>
            <OPTION 
              value=1930 <?php if (!(strcmp(1930, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1930</OPTION>
            <OPTION value=1931 <?php if (!(strcmp(1931, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1931</OPTION>
            <OPTION 
              value=1932 <?php if (!(strcmp(1932, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1932</OPTION>
            <OPTION value=1933 <?php if (!(strcmp(1933, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1933</OPTION>
            <OPTION 
              value=1934 <?php if (!(strcmp(1934, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1934</OPTION>
            <OPTION value=1935 <?php if (!(strcmp(1935, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1935</OPTION>
            <OPTION 
              value=1936 <?php if (!(strcmp(1936, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1936</OPTION>
            <OPTION value=1937 <?php if (!(strcmp(1937, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1937</OPTION>
            <OPTION 
              value=1938 <?php if (!(strcmp(1938, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1938</OPTION>
            <OPTION value=1939 <?php if (!(strcmp(1939, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1939</OPTION>
            <OPTION 
              value=1940 <?php if (!(strcmp(1940, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1940</OPTION>
            <OPTION value=1941 <?php if (!(strcmp(1941, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1941</OPTION>
            <OPTION 
              value=1942 <?php if (!(strcmp(1942, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1942</OPTION>
            <OPTION value=1943 <?php if (!(strcmp(1943, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1943</OPTION>
            <OPTION 
              value=1944 <?php if (!(strcmp(1944, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1944</OPTION>
            <OPTION value=1945 <?php if (!(strcmp(1945, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1945</OPTION>
            <OPTION 
              value=1946 <?php if (!(strcmp(1946, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1946</OPTION>
            <OPTION value=1947 <?php if (!(strcmp(1947, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1947</OPTION>
            <OPTION 
              value=1948 <?php if (!(strcmp(1948, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1948</OPTION>
            <OPTION value=1949 <?php if (!(strcmp(1949, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1949</OPTION>
            <OPTION 
              value=1950 <?php if (!(strcmp(1950, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1950</OPTION>
            <OPTION value=1951 <?php if (!(strcmp(1951, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1951</OPTION>
            <OPTION 
              value=1952 <?php if (!(strcmp(1952, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1952</OPTION>
            <OPTION value=1953 <?php if (!(strcmp(1953, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1953</OPTION>
            <OPTION 
              value=1954 <?php if (!(strcmp(1954, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1954</OPTION>
            <OPTION value=1955 <?php if (!(strcmp(1955, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1955</OPTION>
            <OPTION 
              value=1956 <?php if (!(strcmp(1956, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1956</OPTION>
            <OPTION value=1957 <?php if (!(strcmp(1957, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1957</OPTION>
            <OPTION 
              value=1958 <?php if (!(strcmp(1958, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1958</OPTION>
            <OPTION value=1959 <?php if (!(strcmp(1959, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1959</OPTION>
            <OPTION 
              value=1960 <?php if (!(strcmp(1960, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1960</OPTION>
            <OPTION value=1961 <?php if (!(strcmp(1961, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1961</OPTION>
            <OPTION 
              value=1962 <?php if (!(strcmp(1962, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1962</OPTION>
            <OPTION value=1963 <?php if (!(strcmp(1963, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1963</OPTION>
            <OPTION 
              value=1964 <?php if (!(strcmp(1964, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1964</OPTION>
            <OPTION value=1965 <?php if (!(strcmp(1965, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1965</OPTION>
            <OPTION 
              value=1966 <?php if (!(strcmp(1966, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1966</OPTION>
            <OPTION value=1967 <?php if (!(strcmp(1967, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1967</OPTION>
            <OPTION 
              value=1968 <?php if (!(strcmp(1968, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1968</OPTION>
            <OPTION value=1969 <?php if (!(strcmp(1969, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1969</OPTION>
            <OPTION 
              value=1970 <?php if (!(strcmp(1970, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1970</OPTION>
            <OPTION value=1971 <?php if (!(strcmp(1971, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1971</OPTION>
            <OPTION 
              value=1972 <?php if (!(strcmp(1972, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1972</OPTION>
            <OPTION value=1973 <?php if (!(strcmp(1973, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1973</OPTION>
            <OPTION 
              value=1974 <?php if (!(strcmp(1974, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1974</OPTION>
            <OPTION value=1975 <?php if (!(strcmp(1975, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1975</OPTION>
            <OPTION 
              value=1976 <?php if (!(strcmp(1976, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1976</OPTION>
            <OPTION value=1977 <?php if (!(strcmp(1977, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1977</OPTION>
            <OPTION 
              value=1978 <?php if (!(strcmp(1978, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1978</OPTION>
            <OPTION value=1979 <?php if (!(strcmp(1979, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1979</OPTION>
            <OPTION 
              value=1980 <?php if (!(strcmp(1980, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1980</OPTION>
            <OPTION value=1981 <?php if (!(strcmp(1981, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1981</OPTION>
            <OPTION 
              value=1982 <?php if (!(strcmp(1982, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1982</OPTION>
            <OPTION value=1983 <?php if (!(strcmp(1983, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1983</OPTION>
            <OPTION 
              value=1984 <?php if (!(strcmp(1984, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1984</OPTION>
            <OPTION value=1985 <?php if (!(strcmp(1985, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1985</OPTION>
            <OPTION 
              value=1986 <?php if (!(strcmp(1986, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1986</OPTION>
            <OPTION value=1987 <?php if (!(strcmp(1987, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1987</OPTION>
            <OPTION 
              value=1988 <?php if (!(strcmp(1988, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1988</OPTION>
<OPTION value=1989 <?php if (!(strcmp(1989, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1989</OPTION>
<OPTION 
              value=1990 <?php if (!(strcmp(1990, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1990</OPTION>
<OPTION value=1991 <?php if (!(strcmp(1991, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1991</OPTION>
<OPTION 
              value=1992 <?php if (!(strcmp(1992, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1992</OPTION>
<OPTION value=1993 <?php if (!(strcmp(1993, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1993</OPTION>
<OPTION 
              value=1994 <?php if (!(strcmp(1994, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1994</OPTION>
<OPTION value=1995 <?php if (!(strcmp(1995, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1995</OPTION>
<OPTION 
              value=1996 <?php if (!(strcmp(1996, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1996</OPTION>
<OPTION value=1997 <?php if (!(strcmp(1997, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1997</OPTION>
<OPTION 
              value=1998 <?php if (!(strcmp(1998, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1998</OPTION>
<OPTION value=1999 <?php if (!(strcmp(1999, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>1999</OPTION>
<OPTION 
              value=2000 <?php if (!(strcmp(2000, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2000</OPTION>
<OPTION value=2001 <?php if (!(strcmp(2001, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2001</OPTION>
<OPTION 
              value=2002 <?php if (!(strcmp(2002, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2002</OPTION><OPTION value=2003 <?php if (!(strcmp(2003, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2003</OPTION>
<OPTION 
              value=2004 <?php if (!(strcmp(2004, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2004</OPTION>
<OPTION value=2005 <?php if (!(strcmp(2005, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2005</OPTION><OPTION 
              value=2006 <?php if (!(strcmp(2006, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2006</OPTION><OPTION value=2007 <?php if (!(strcmp(2007, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2007</OPTION><OPTION 
              value=2008 <?php if (!(strcmp(2008, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2008</OPTION><OPTION value=2009 <?php if (!(strcmp(2009, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2009</OPTION><OPTION 
              value=2010 <?php if (!(strcmp(2010, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2010</OPTION><OPTION value=2011 <?php if (!(strcmp(2011, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2011</OPTION><OPTION 
              value=2012 <?php if (!(strcmp(2012, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2012</OPTION><OPTION value=2013 <?php if (!(strcmp(2013, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2013</OPTION><OPTION 
              value=2014 <?php if (!(strcmp(2014, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2014</OPTION><OPTION value=2015 <?php if (!(strcmp(2015, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2015</OPTION><OPTION 
              value=2016 <?php if (!(strcmp(2016, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2016</OPTION><OPTION value=2017 <?php if (!(strcmp(2017, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2017</OPTION><OPTION 
              value=2018 <?php if (!(strcmp(2018, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2018</OPTION><OPTION value=2019 <?php if (!(strcmp(2019, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2019</OPTION><OPTION 
              value=2020 <?php if (!(strcmp(2020, "$veri1->yapim_yili"))) {echo "selected=\"selected\"";} ?>>2020</OPTION></SELECT> </TD></TR>
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
/* $data_yapi_tipi[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=kd><LABEL for=kd0>'.$veri->adi.'</LABEL>'; */
if ($veri1->isinma_tipi==$veri->id) {  $secilimi= "checked=\"checked\"";}

$data_isinma_tipi[$i] = '<INPUT    '.$secilimi.'  id=isinma_tipi'.$veri->id.' value='.$veri->id.'  type=radio 
 name=isitma> <LABEL for=isinma_tipi0>'.$veri->adi.'</LABEL>';

 
$i++;
$secilimi="";
	 } 
 echo resim_listele(4,2,2,$data_isinma_tipi); 
 
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
/* $data_yapi_tipi[$i] = '
<INPUT id=kd0 value='.$veri->id.'  type=radio  name=kd><LABEL for=kd0>'.$veri->adi.'</LABEL>'; */
if ($veri1->yakit_tipi==$veri->id) {  $secilimi= "checked=\"checked\"";}

$data_yakit_tipi[$i] = '<INPUT    '.$secilimi.'  id=yakit_tipi'.$veri->id.' value='.$veri->id.'  type=radio 
 name=yakittipi> <LABEL for=yakit_tipi0>'.$veri->adi.'</LABEL>';

 
$i++;
$secilimi="";
	 } 
 echo resim_listele(4,2,2,$data_yakit_tipi); 
 
 ?>
                </TD></TR>
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
   foreach($veriler as $verix) {

$k=$i+1;
$alan="a".$k;

$vt->sql("select ".$alan." from ilan_icdonanim where ilan_id='".$veri1->id."'  ")->sor();
if ($vt->alTek()==$verix->id) {  $secilimi= "checked=\"checked\"";}

$data_ic_donanim[$i] = '<INPUT    '.$secilimi.'  id=a'.$verix->id.' value='.$verix->id.'  type=checkbox
 name=a'.$verix->id.'> <LABEL for=d4'.$verix->id.'>'.$verix->adi.'</LABEL>';

 
$i++;
$secilimi="";
	 } 
 echo resim_listele(4,2,2,$data_ic_donanim); 
 
 ?>
       </TD></TR>
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
   foreach($veriler as $verix) {

$k=$i+1;
$alan="a".$k;

$vt->sql("select ".$alan." from ilan_disdonanim where ilan_id='".$veri1->id."'  ")->sor();
if ($vt->alTek()==$verix->id) {  $secilimi= "checked=\"checked\"";}

$data_dis_donanim[$i] = '<INPUT    '.$secilimi.'  id=b'.$verix->id.' value='.$verix->id.'  type=checkbox
 name=b'.$verix->id.'> <LABEL for=d4'.$verix->id.'>'.$verix->adi.'</LABEL>';

 
$i++;
$secilimi="";
	 } 
 echo resim_listele(4,2,2,$data_dis_donanim); 
 
 ?> 
            
            </TD></TR>
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
   foreach($veriler as $verix) {

$k=$i+1;
$alan="a".$k;

$vt->sql("select ".$alan." from ilan_cevreozellikleri where ilan_id='".$veri1->id."'  ")->sor();
if ($vt->alTek()==$verix->id) {  $secilimi= "checked=\"checked\"";}

$data_cevre[$i] = '<INPUT    '.$secilimi.'  id=c'.$verix->id.' value='.$verix->id.'  type=checkbox
 name=c'.$verix->id.'> <LABEL for=c4'.$verix->id.'>'.$verix->adi.'</LABEL>';

 
$i++;
$secilimi="";
	 } 
 echo resim_listele(4,2,2,$data_cevre); 
 
 ?>
           
           </TD></TR>
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
                   value="<?php echo $veri1->gx; ?>" 
                  size=25 maxLength=25>
            &nbsp;&nbsp;Boylam &nbsp;
            <INPUT name=y class=input style="TEXT-ALIGN: right" 
                   value="<?php echo $veri1->gy; ?>" 
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
          <TD><TEXTAREA style="WIDTH: 100%" class=input rows=4 name=adres><?php echo $veri1->adres; ?></TEXTAREA></TD>
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
          <TD><INPUT name=postakodu class=input onKeyPress="return numbersonly(this, event)" value="<?php echo $veri1->posta_kodu; ?>" size=6 
            maxLength=5>&nbsp;&nbsp;&nbsp;&nbsp; 
          <STRONG>Ýl/Ýl&ccedil;e/Semt</STRONG> :&nbsp;&nbsp;<?php 
$vt->sql('select * from sehir where sehirID="'.$veri1->il.'"   ')->sor();
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	echo $veri2->sehiradiUpper."&nbsp;-&nbsp;"; }
 ?>
 <?php 
$vt->sql('select * from ilce where ilceID="'.$veri1->ilce.'"  and sehirID="'.$veri1->il.'" ')->sor();
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	echo $veri3->ilceAdi."&nbsp;-&nbsp;"; }
 ?>         
  <?php 
$vt->sql('select * from mahalle where mahalleID="'.$veri1->koy.'" and  ilceID="'.$veri1->ilce.'"  and sehirID="'.$veri1->il.'"   ')->sor();
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	echo $veri4->mahalleAdi; }
 ?></TD>
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
            Yasaktýr.</STRONG></FONT><BR><TEXTAREA style="WIDTH: 100%" class=input rows=7 name=aciklama><?php echo $veri1->aciklama; ?></TEXTAREA><BR>            <FONT 
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
                  <td width="5%" nowrap="nowrap"><input  <?php if (!(strcmp("$veri1->ilan_suresi","14"))) {echo "checked=\"checked\"";} ?> id="sure4" value="14"  type="radio" name="sure" /></td>
                  <td width="13%" nowrap="nowrap"><label for="sure4">2 Hafta</label></td>
                  <td width="5%" nowrap="nowrap"><input  <?php if (!(strcmp("$veri1->ilan_suresi","30"))) {echo "checked=\"checked\"";} ?> id="sure4" value="30" type="radio" name="sure" /></td>
                  <td width="13%" nowrap="nowrap"><label for="sure4">1 Ay</label></td>
                  <td width="5%" nowrap="nowrap"><input  <?php if (!(strcmp("$veri1->ilan_suresi","60"))) {echo "checked=\"checked\"";} ?> id="sure4" value="60"  type="radio" name="sure" /></td>
                  <td width="13%" nowrap="nowrap"><label for="sure4">2 Ay</label></td>
                  <td width="5%" nowrap="nowrap"><input  <?php if (!(strcmp("$veri1->ilan_suresi","90"))) {echo "checked=\"checked\"";} ?> id="sure4" value="90"  type="radio" name="sure" /></td>
                  <td width="12%" nowrap="nowrap"><label for="sure4">3 Ay</label></td>
                  <td width="5%" nowrap="nowrap"><input  <?php if (!(strcmp("$veri1->ilan_suresi","180"))) {echo "checked=\"checked\"";} ?> id="sure4" value="180"  type="radio" name="sure" /></td>
                  <td width="12%" nowrap="nowrap"><label for="sure4">6 Ay</label></td>
                  <td width="5%" nowrap="nowrap"><input  <?php if (!(strcmp("$veri1->ilan_suresi","360"))) {echo "checked=\"checked\"";} ?> id="sure4" value="360"  type="radio" name="sure" /></td>
                  <td width="12%" nowrap="nowrap"><label for="sure4">1 Y&#305;l</label></td>                  
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
            <DIV align=center> <input value="&#304;lan&#305; Kaydet" type=submit name="gitti"  onclick=" return kontrol()" /></DIV></TD></TR></TBODY></TABLE></FORM>          <?php 
		  }		
		
		
?><BR><BR>