       <?php 
 $vt->sql('select * from ilan_ticari where id="'.temizle($_GET["id"]).'" ')->sor();
  if($vt->numRows() == 0) {echo "<h3>Sayfada Hata Olustu . Hata Kodu P1100.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";};
 $veriler = $vt->alHepsi();


 foreach( $veriler as $veri )
{





//////////////////
 if (temizle($_GET["subaction1"])=="delete")
{
	
	
	$vt->sql("select * from ilan_foto where id = '".temizle($_GET["rid"])."'")->sor();
	 $verilerd = $vt->alHepsi();
 foreach( $verilerd as $verid )
{ $foto_adi =  $verid->foto_adi; }
echo $foto_adi;
$vt->sql("delete from ilan_foto where id = '".temizle($_GET["rid"])."' ");
if($vt->sor()>0) { 
/// echo "Fotograf Silindi."; 
$dosyaAdi 	= substr($foto_adi, 0, strrpos($foto_adi, '.'));
$uzanti 	= substr($foto_adi, strrpos($foto_adi, '.'));

@unlink("../resimler/".$foto_adi."");
@unlink("../resimler/".$dosyaAdi."_w85_h64".$uzanti."");
@unlink("../resimler/".$dosyaAdi."_w100_h75".$uzanti."");
@unlink("../resimler/".$dosyaAdi."_w510_h400".$uzanti."");


header ("Location:index.php?action=ilan&subaction=pictures&id=".temizle($_GET["id"])."");

} else {echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu P1200.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}

}
 



////////////////////////////////////
if (temizle($_POST["subaction"])=="add")
{
	  //////// files


if($_FILES) {
    include("../class/kgUploader.class.php");
	$mime_types = array('image/pjpeg', 'image/jpeg'); // izin verilecek olan dosya tipleri
    $kgUploaderOBJ = & new kg_uploader();
    $kgUploaderOBJ -> uploader_set($_FILES['userfile'], '../resimler', $mime_types); 
	// 1. parametre FILES dizisi, 2. parametre dizin, 3. parametre ise izin verilen dosya tipleri	
	//// resim yükleme ayar kysmy
   
	$yuklenen_resim = $kgUploaderOBJ -> file_new_name;
	if($yuklenen_resim != "") {
		
$vt->sql("insert into ilan_foto (id,foto_adi,ilan_id) values (NULL,%s,%s) ");
$vt->arg($yuklenen_resim,temizle($_GET["id"]));
if($vt->sor()>0) { 

$yuklenen_resim = "../resimler/".$yuklenen_resim;
// echo $yuklenen_resim;
include_once("../thumb2.php");
resim_boyut($yuklenen_resim,"85","64");
resim_boyut($yuklenen_resim,"100","75");
resim_boyut($yuklenen_resim,"510","400");
unlink($yuklenen_resim); 
header ("Location:index.php?action=ilan&subaction=pictures&id=".temizle($_GET["id"])."");

// echo "Fotograf Eklenmiþtir."; 
} else {
echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu AP1300.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}

} 
else 
{ echo "<h3>UYARI <BR>  Uyari Kodu AP1400.<br>Uyari devam ederse Lütfen Site Yöneticisine Bildiriniz.<br>OLASI UYARI SEBEBI : RESIM SEÇMEDEN RESIM YÜKLEMEYE ÇALISMANIZ.</h3>"; }
}
/// files bitis
} 
//////////////////
?>	  
	 <SCRIPT src="../tema/js/boxover.js"></SCRIPT>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background="../tema/img/fahne1.gif" width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="../tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>Fotoðraf Ekleme 
            Formu</FONT></STRONG></DIV></TD>
          <TD background="../tema/img/bg_fahne.gif" width="100%" 
            align=left><DIV align=right><IMG border=0 alt="" 
            src="../tema/img/spacer.gif" width=1 height=2><BR></DIV></TD>
          <TD vAlign=top background="../tema/img/bg_fahne.gif" width=10 
          align=left><IMG border=0 alt="" src="../tema/img/spacer.gif" 
            width=11 height=30></TD></TR></TBODY></TABLE>
          
<?php 
 $vt->sql('select * from ilan_foto where ilan_id="'.temizle($_GET["id"]).'"   ')->sor();
 $veriler1 = $vt->alHepsi();
 foreach( $veriler1 as $veri1 )
{ echo $veri1->adi; }
 ?>
<TABLE 
      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
      border=0 cellSpacing=0 cellPadding=4 width="100%" align=center>
        <TBODY> 
        <TR> 
          <TD> 
<DIV align=center><STRONG><FONT color=#ff0000>
            
            
            </FONT><BR>(Ýlan No: <?php echo temizle($_GET["id"]); ?>)</STRONG><BR><BR>( 
            Ýlanýnýza Toplam 15 Adet Fotoðraf Ekleyebilirsiniz. )<BR><BR></DIV>
           <!-- 
            resimlari asil yeri
             -->
            
            
<BR><BR>
            <FORM encType=multipart/form-data method=post 
            action=""><INPUT value=add type=hidden name=subaction> 
            <INPUT value=pictures type=hidden name=action> <INPUT value=<?php echo temizle($_GET["id"]); ?> 
            type=hidden name=id> 
           
            <TABLE 
            style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
            border=0 cellSpacing=2 cellPadding=2 align=center>
              <TBODY>
              <TR>
                <TD></TD>
                <TD width=1>
                
                <INPUT id=r 
                  onclick=" this.form.theSubmit.disabled = !this.checked; this.form.onsubmit = 'return ' + this.checked;" 
                  type=checkbox></TD>
                <TD>
                  <DIV align=left><LABEL for=r>Fotoðraf Kurallarýný Okudum ve 
                  Kabul Ediyorum <FONT color=#0000ff>(<U>Fotoðraf Y&uuml;klemek Ý&ccedil;in 
                  Týklayýn</U>)</FONT></LABEL></DIV></TD></TR>
              <TR>
                <TD><STRONG>Yeni Fotoðraf Ekle:</STRONG></TD>
                <TD colSpan=2>
                <?php 
				$vt->sql('SELECT count(id) FROM ilan_foto where ilan_id = "'.temizle($_GET["id"]).'"');
$vt->sor();

if($vt->alTek()<15) {
?>
                
                <INPUT id=text1 class=Input size=30 type=file 
                  name="userfile[]"> &nbsp;&nbsp; <INPUT disabled value=Kaydet type=submit name=theSubmit>
                  
                  <?php } ?>
                  
                  </TD></TR>
              <TR>
                <TD></TD>
                <TD colSpan=2>
                  <DIV align=left>Ekleyeceðiniz Fotoðraf JPG ( JPEG ) Formatýnda 
                  Olmalýdýr.</DIV></TD></TR></TBODY></TABLE>
                  <center>
                  
                  <BR><BR>Fotoðraf Ekleme 
            Ýþleminde, Fotoðrafýn Boyutuna G&ouml;re S&uuml;re Uzayabilir.<BR>Eklediðiniz 
            Fotoðrafý G&ouml;rmeden Sayfadan &Ccedil;ýkmayýnýz.<BR>&Yacute;&thorn;leminiz Ger&ccedil;ekle&thorn;inceye 
            Kadar L&uuml;tfen 
      Bekleyiniz.<BR><BR>
      </center>
  </FORM><BR><BR></DIV>
      
      
    <?php 
   $vt->sql("select * from ilan_foto where ilan_id = '".temizle($_GET["id"])."' ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
	
$data[$i] = '<TABLE 
                  style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                  border=0 cellSpacing=1 cellPadding=4>
                    <TBODY>
                    <TR>
                      <TD> <SPAN 
                        title="cssbody=[boxbody] cssheader=[boxtb] offsetx=[20] offsety=[-225] windowlock=[on] body=[<center><p><img src=../thumb.php?p=resimler/'.$veri->foto_adi .'&w=510&h=400>></p>] fade=[on] fadespeed=[0.1]"><IMG 
                        border=0 hspace=4 alt="" vspace=4 
                        src="../thumb.php?p=resimler/'.$veri->foto_adi .'&w=85&h=64" />
                       </A></SPAN>
					    </TD></TR>
                    <TR>
                      <TD>
					   
					    <DIV align=center><A 
                        href="?action=ilan&amp;subaction=pictures&amp;subaction1=delete&amp;rid='. $veri->id .'&amp;id='. temizle($_GET["id"]) .'"><STRONG>Fotoðrafý 
                        Sil</STRONG></A></DIV>
						
						
						
						</TD></TR></TBODY></TABLE>
					   ';
	$i++;
	 } 
 echo resim_listele(5,1,1,$data); 
 
 ?>
      
       <TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
              <TBODY>
              <TR>
                <TD width=10><IMG border=0 alt="" 
                  src="../tema/img/alarm.gif" width=43 height=43></TD>
                <TD><FONT size=4><STRONG>Fotoðraf Ekleme 
                  Kurallarý</STRONG></FONT></TD></TR></TBODY></TABLE>
            <UL>
              <LI>Eklediðiniz Fotoðraf Gayrimenkul'e Ait Orjinal Fotoðraf 
              Olmalýdýr. 
              <LI>Gayrimenkul Fotoðraf Alanýna Logo, Kartvizit ve 
              Benzeri&nbsp;Eklemeler&nbsp;Yasaktýr. 
              <LI>Gayrimenkul'e Ait Fotoðraf Y&uuml;ksek Kalitede ve Net Olmalýdýr. ( 
              Kalitesi D&uuml;þ&uuml;k, Net Olmayan, Bulanýk Fotoðraflar Kabul 
              Edilememektedir. ) 
              <LI>Sitemizde Yayýnlanan ve Baþka Bir Ýlana Ait Olan Fotoðraflarýn 
              Alýntý Yapýlarak Eklenmesi Yasaktýr. 
              <LI>Gayrimenkul Fotoðraf Alanýna Fotoðraf Dýþýnda, Kroki, 
              Tapu,Temsili veya Farklý Bir Siteden Alýntý Fotoðraflar Eklemek 
              Yasaktýr. 
              <LI>Ekleyeceðiniz Gayrimenkul Fotoðrafýna Hi&ccedil;bir Þekilde Logo, Web 
              Adresi veya Farklý Bir Ýbare Yazýlmasý ve Eklenmesi Yasaktýr. 
              <LI>Ekleyeceðiniz Fotoðraf JPG ( JPEG ) Formatýnda Olmalýdýr. Aksi 
              Halde Fotoðrafýnýz Yayýna Alýnmayacaktýr. 
              <LI>Ekleyeceðiniz Fotoðraf 1 MB 'dan B&uuml;y&uuml;k Olmamalýdýr. 1 MB 'dan 
              B&uuml;y&uuml;k Fotoðraflarda Bekleme S&uuml;resi Uzar ve Ekleme Ýþlemi 
              Ger&ccedil;ekleþmeyebilir. ( Fotoðraf Y&uuml;klenmeden &Ouml;nce Kontrol Edilerek, 
              Boyutu K&uuml;&ccedil;&uuml;lt&uuml;lmelidir.) 
              <LI>Ekleyeceðiniz Fotoðrafýn Boyutu En Az 300 x 225 Pixel 
              Olmalýdýr. ( &Ouml;nerimiz; 800 x 600 Pixel ) 300 x 225 Pixelden K&uuml;&ccedil;&uuml;k 
              Fotoðraflar Sisteme Kabul Edilmeyecektir. 
              <LI><FONT color=#cc0000><STRONG>Google Earth ve Benzeri 
              Programlarýn Screenshot Resimlerinin/Fotoðraflarýnýn 
              Y&uuml;klenmesi&nbsp;Yasaktýr.</STRONG></FONT> 
              <LI>Telif Hakký&nbsp;Size Ait Olmayan&nbsp;Hi&ccedil;bir Fotoðraf 
              Sitemizde Kabul Edilmemektedir. </LI></UL>
            <DIV align=center>Not: Dijital Fotoðraf Makinasý Ýle Yapýlan Direkt 
            Y&uuml;klemelerden Daha Ýyi Sonu&ccedil; Alýrsýnýz.<BR><BR><FONT color=#cc0000 
            size=4><STRONG>Fotoðraf Ekleme Kurallarýna Uyulmadýðý 
            Taktirde,<BR>ilanlarýnýz Silinerek, üyeliginiz Blokeye 
            alýnacaktýr.</STRONG> </FONT><BR><BR>
      
      
      
      </TD></TR></TBODY></TABLE>
      
      <?php
}
?>
       