 <?php 
 ob_start(); 
session_start();
?>
 
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    
 <script>
  $(document).ready(function() {
      $("#sonuc1").load("bayi/resimliste.php?id=<?php echo $_GET["id"];  ?>&tur=<?php echo $_GET["tur"]; ?>");
 });
  


 </script>
 
    <script type="text/javascript"> 

   function veriler(){ 
$.get("bayi/resimliste.php?id=<?php echo $_GET["id"];  ?>&tur=<?php echo $_GET["tur"]; ?>",function(data){ jQuery('#sonuc1').html(data); }); 
   }
   function silme(id){   
$.get("start.php?action=pictures&subaction=delete&rid="+ id +"&id=<?php echo $_GET["id"];  ?>&tur=",function(data){ jQuery('#sonuc11').html(data); }); 
veriler();
} 

</script>

 <link href="class/swfupload/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="class/swfupload/swfupload.js"></script>
<script type="text/javascript" src="class/swfupload/swfupload.queue.js"></script>
<script type="text/javascript" src="class/swfupload/js/fileprogress.js"></script>
<script type="text/javascript" src="class/swfupload/js/handlers.js"></script>
<script type="text/javascript">
		var swfu;

		window.onload = function() {
			var settings = {
				flash_url : "class/swfupload/swfupload.swf",
				flash9_url : "class/swfupload/swfupload_fp9.swf",
				upload_url: "bayi/upload.php",
				post_params: {"PHPSESSID" : "<?php echo session_id(); ?>","id" :" <?php echo $_GET['id']; ?> ","tur" :" <?php echo $_GET['tur']; ?> "},
				file_size_limit : "5 MB",
				file_types : "*.jpg;*.png",
				file_types_description : "All Files",
				                  <?php 
				$vt->sql('SELECT count(id) FROM ilan_foto where ilan_id = "'.temizle($_GET["id"]).'"  ');
$vt->sor();

$resim_sinir = 16 - $vt->alTek();
if($resim_sinir <= 0) {$resim_sinir=1; $button_durumu="true";} else { $button_durumu="false";}
?>
				file_upload_limit : <?php echo $resim_sinir; ?>,
				file_queue_limit : <?php echo $resim_sinir; ?>,
				
				custom_settings : {
					progressTarget : "fsUploadProgress",
					cancelButtonId : "btnCancel"
				},
				debug: false,

				// Button settings
				button_image_url: "class/swfupload/images/TestImageNoText_65x29.png",
				button_width: "65",
				button_height: "29",
				button_placeholder_id: "spanButtonPlaceHolder",
				button_text: '<span class="theFont">Yükle</span>',
				button_text_style: ".theFont { font-size: 16; }",
				button_text_left_padding: 12,
				button_text_top_padding: 3,
				button_disabled :  <?php echo $button_durumu; ?>,
				// The event handler functions are defined in handlers.js
				swfupload_preload_handler : preLoad,
				swfupload_load_failed_handler : loadFailed,
				file_queued_handler : fileQueued,
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_start_handler : uploadStart,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				queue_complete_handler : queueComplete	// Queue plugin event
			};

			swfu = new SWFUpload(settings);
	     };
	</script>
 

     
       <?php 
 $vt->sql('select * from ilan_ticari where id="'.temizle($_GET["id"]).'" and uye_id="'.$_SESSION["id"].'"   ')->sor();
  if($vt->numRows() == 0) {echo "
  <center><h3>Uyari <br> Uyari Kodu BPA1100.<br>Tahmini Sebeb : Baskasina ait bir fotografi görüntülemeye çalisiyorsunuz.<br>
Eger uyari devam ediyorsa Lütfen Tekrar giris yapiniz. 
<br>Uyari devam ederse Lütfen Site Yöneticisine Bildiriniz.
  </h3></center>";};
 $veriler = $vt->alHepsi();


 foreach( $veriler as $veri )
{
?>	  

<?php 
if (temizle($_GET["subaction"])=="delete")
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
	
@unlink("resimler/".$foto_adi."");
@unlink("resimler/".$dosyaAdi."_w85_h64".$uzanti."");
@unlink("resimler/".$dosyaAdi."_w100_h75".$uzanti."");
@unlink("resimler/".$dosyaAdi."_w510_h400".$uzanti."");

header ("Location:start.php?action=pictures&id=".temizle($_GET["id"])."&tur=".temizle($_GET["tur"])."");

} else {echo "<h3>UYARI <BR> Uyari Kodu BP1200.<br>Uyari devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}

}


?>
  
	  <SCRIPT src="tema/js/boxover.js"></SCRIPT>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>Fotoðraf Ekleme 
            Formu</FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif width="100%" 
            align=left><DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 height=2><BR></DIV></TD>
          <TD vAlign=top background=tema/img/bg_fahne.gif width=10 
          align=left><IMG border=0 alt="" src="tema/img/spacer.gif" 
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
          <center>  <h3><?php echo $mesaj; ?>
           <div id="sonuc1"></div>
          
          </h3></center>
           <!-- 
            resimlari asil yeri
             -->
    
            
<BR><BR>

  <div id="content">
	<h2>Resim Y&uuml;kleme</h2>
	<form id="form1" action="" method="post" enctype="multipart/form-data">
		<p>Dikkat : resim se&ccedil;erken birden fazla resmi se&ccedil;ebilirsiniz</p>

			<div class="fieldset flash" id="fsUploadProgress">
			<span class="legend">Resim Yükleme Sirasi</span>
			</div>
		<div id="divStatus">0 Resim Yüklendi</div>
			<div>
				<span id="spanButtonPlaceHolder"></span>
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
				<input id="btnCancel" type="button" value="Cancel All Uploads" onClick="swfu.cancelQueue();" disabled="disabled" style="margin-left: 2px; font-size: 8pt; height: 29px;" />
			<input id="liste" type="button" value="Resimleri listele" onclick="veriler();" style="margin-left: 2px; font-size: 8pt; height: 29px;" /></div>

	</form>
</div>
  
  

  
  
 
            
            
            
            
            <BR><BR></DIV>
      
      
 
      
       <TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
              <TBODY>
              <TR>
                <TD width=10><IMG border=0 alt="" 
                  src="tema/img/alarm.gif" width=43 height=43></TD>
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
