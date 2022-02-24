
<?php 
if (temizle($_POST["subaction"])=="add")
{
	  /////////////////////////
if($_FILES) {
	$mime_types = array('image/pjpeg', 'image/jpeg'); // izin verilecek olan dosya tipleri
    $kgUploaderOBJ = & new kg_uploader();
    $kgUploaderOBJ -> uploader_set($_FILES['userfile'], 'resimler', $mime_types); 
	// 1. parametre FILES dizisi, 2. parametre dizin, 3. parametre ise izin verilen dosya tipleri	
	//// resim yükleme ayar kysmy
 $vt->sql("select * from logolar where user_id = '".$_SESSION["id"]."'")->sor();
 $veriler = $vt->alHepsi();
 foreach($veriler as $veri) {  @unlink("resimler/".$veri->firma_logo);  }
	$yuklenen_resim = $kgUploaderOBJ -> file_new_name;
$vt->sql("update logolar set firma_logo = '".$yuklenen_resim."' where user_id= '".$_SESSION["id"]."'");
if($vt->sor()>0) { 
// echo "Fotograf Eklenmiþtir."; 
} else {echo "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu LOGO1100.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}
}
}
?>

<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>Firma Logo</FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif width="100%" 
          align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 
            height=2><BR></DIV></TD>
          <TD vAlign=top background=tema/img/bg_fahne.gif 
          width=10 align=left><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=11 
        height=30></TD></TR>
        <TR>
          <TD colSpan=3>
            <TABLE border=0 cellSpacing=0 cellPadding=4 width="100%" 
            bgColor=#f7f7f7 align=center>
              <TBODY>
              <TR>
                <TD 
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid">
                
        <!-- iç kisim baslangici    -->    
                
                
                
                
                <table width="100%" border="0">
  <tr>
    <td><?php 
	
	$vt->sql("select *from logolar where user_id = '".$_SESSION["id"]."'")->sor();
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		if($veri->firma_logo != "") {
		echo '<center><img name="" src="resimler/'.$veri->firma_logo.'" width="200" height="150" alt="" /></center>';
		}
	}
	?>
      </td>
  </tr>
</table>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="">
   <table width="100%" border="0">
  <tr>
    <td width="11%"><strong>Firma Logo:</strong></td>
    <td width="88%">
      <label>
        <INPUT class=input maxLength=64 size=30 type=file 
                        name="userfile[]">
      </label>
      <input name="subaction" type="hidden" id="subaction" value="add" /></td>
  </tr>
  <tr>
    <td colspan="2">Logonuz minumum 200 x 150 piksel boyutunda olmal&#305;d&#305;r .Yeni logo y&uuml;klendi&#287;inde; eski logo silinerek, yeni y&uuml;klenen logo aktif olacakt&#305;r. <br /></td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;<center><input class=input value=Güncelle type=submit name=submit /></center> </td>
    </tr>
</table>
             
  </form>               
                
                
                
   <!--             
        iç kisim bitisi   -->      
                
                
                
                
                
                </TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>