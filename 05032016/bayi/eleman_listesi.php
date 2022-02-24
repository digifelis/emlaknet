<?php 
if (temizle($_POST["subaction"])== "eleman" )
{
	  /////////////////////////

		if($_FILES) {
	$mime_types = array('image/pjpeg', 'image/jpeg'); // izin verilecek olan dosya tipleri
    $kgUploaderOBJ = & new kg_uploader();
    $kgUploaderOBJ -> uploader_set($_FILES['userfile'], 'resimler', $mime_types); 
	// 1. parametre FILES dizisi, 2. parametre dizin, 3. parametre ise izin verilen dosya tipleri	
	//// resim yükleme ayar kysmy
	$yuklenen_resim = $kgUploaderOBJ -> file_new_name;
	$vt->sql("insert into bayi_eleman (id,onay,isim_soyad,telefon,cep,foto,uye_id) values ('','0','".temizle($_POST["name"])."','".temizle($_POST["telefon"])."','".temizle($_POST["cep"])."','". $yuklenen_resim ."','".$_SESSION["id"]."' ) ");
	if($vt->sor()==0) {echo "<h3>Hata Olustu . Hata Kodu ELEMAN1100.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}

		}

}
if (temizle($_POST["subaction"])== "delete" )
{
	$vt->sql("delete from bayi_eleman where id = '".temizle($_POST["id"])."' and uye_id = '".$_SESSION["id"]."'");
	if($vt->sor()==0) {echo "<h3>Hata Olustu . Hata Kodu ELEMAN1200.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";}
}
?>



 <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>Yetkili Kiþi 
            Listesi</FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif width="100%" 
          align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 
            height=2><BR></DIV></TD>
          <TD vAlign=top background=tema/img/bg_fahne.gif 
          width=10 align=left><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=11 height=30></TD></TR>
        <TR>
          <TD colSpan=3>
            <TABLE border=0 cellSpacing=0 cellPadding=4 width="100%" 
            bgColor=#f7f7f7 align=center>
              <TBODY>
              <TR>
                <TD 
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid"><FONT 
                  color=#cc0000 size=4><STRONG>Satýþ Elemaný - Yetkili Kiþi 
                  Listesi</STRONG></FONT><BR><BR>M&uuml;þteriye Daha Ýyi Bir Hizmet 
                  Verebilmek ve M&uuml;þterinin Sizinle Daha &Ccedil;abuk Ýletiþim 
                  Kurabilmesi Ý&ccedil;in Ýlan Satýþ Elemaný - Yetkili Kiþi Listenizi 
                  Oluþturunuz.<BR><BR>Ýlan Giriþlerinde Verilen Emlak Ýlaný Ýle 
                  Ýlgili Hangi Satýþ Elemanýnýz Ýlgileniyorsa Satýþ Elemanýna 
                  Ait Ýsim / Soyisim ve Telefon Numarasý Bilgilerini 
                  Yazýnýz.<BR><BR>M&uuml;þteri Memnuniyeti ve Satýþ A&ccedil;ýsýndan 
                  Kolaylýk ve Avantaj Elde Etmiþ Olacaksýnýz.<BR>Satýþ Elemaný / 
                  Yetkili Kiþi Listenize 10 Adet Kayýt Ekleyebilirsiniz. 
                  <BR><BR><BR>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD><STRONG>Satýþ Elemaný / Yetkili Kiþi Kayýt 
                        Listesi</STRONG></TD>
                      <TD><IMG border=0 
                        src="tema/img/FFFF00.gif" width=15 
                        height=15></TD>
                      <TD>Onay Aþamasýnda</TD>
                      <TD><IMG border=0 
                        src="tema/img/008000.gif" width=15 
                        height=15></TD>
                      <TD>Onaylanmýþtýr</TD></TR></TBODY></TABLE><BR>
                  <TABLE 
                  style="BORDER-BOTTOM: #767676 1px solid; BORDER-LEFT: #767676 1px solid; BORDER-TOP: #767676 1px solid; BORDER-RIGHT: #767676 1px solid" 
                  border=0 cellSpacing=2 cellPadding=2 width="100%" 
align=center>
                    <TBODY>
                    <TR>
                      <TD bgColor=#66cc66 width=16><STRONG>Konum</STRONG></TD>
                      <TD bgColor=#66cc66 
width=80><STRONG>Fotoðraf</STRONG></TD>
                      <TD bgColor=#66cc66><STRONG>Ýsim / Soyisim</STRONG></TD>
                      <TD bgColor=#66cc66><STRONG>Telefon No</STRONG></TD>
                      <TD bgColor=#66cc66><STRONG>Cep Telefon No</STRONG></TD>
                      
                      <TD bgColor=#66cc66 width=40>
                        <DIV align=center><STRONG>Sil</STRONG></DIV></TD></TR>
                        
               <?php 
			   $vt->sql("select * from bayi_eleman where uye_id = '".$_SESSION["id"]."'")->sor();
			   $veriler = $vt->alHepsi();
			   foreach($veriler as $veri) {
				   ?>
                        
                        
                    <TR>
                      <TD bgColor=#fff9ec>
                      <?php 
					  if($veri->onay == 1) {
						  echo '<DIV align=center><IMG border=0 
                        src="tema/img/008000.gif" width=15 
                        height=15> </DIV>';
					  } else {
						  
						  echo '<DIV align=center><IMG border=0 
                        src="tema/img/FFFF00.gif" width=15 
                        height=15> </DIV>';
					  }
					  
					  ?>
                        </TD>
                      <TD bgColor=#fff9ec>
                      <DIV align=center>
                      <?php 
					  if($veri->foto != "") {
						  echo '
                      <IMG border=0 
                        src="resimler/'.$veri->foto.'" width=80 
                        height=60> 
						';
					  }
					  ?>
                      </DIV>
                      </TD>
                      <TD bgColor=#fff9ec><?php echo $veri->isim_soyad; ?><BR></TD>
                      <TD bgColor=#fff9ec><?php echo $veri->telefon; ?></TD>
                      <TD bgColor=#fff9ec><?php echo $veri->cep; ?></TD>
                      
                      <TD bgColor=#fff9ec>
                        <DIV align=center>
                        <form action="" method="post">
                        <input name="subaction" type="hidden" value="delete" />
                        <input name="id" type="hidden" value="<?php echo $veri->id; ?>" />
                        <INPUT class=myinput onClick="this.style.visibility='hidden';document.getElementById('loading').style.visibility='visible';" value=Sil type=submit>
                        </form>
                        
                        </DIV></TD></TR>
                        
                    <?php } ?>    
                        
                        
                    </TBODY></TABLE><BR><BR>
                  <TABLE 
                  style="BORDER-BOTTOM: #767676 1px solid; BORDER-LEFT: #767676 1px solid; BORDER-TOP: #767676 1px solid; BORDER-RIGHT: #767676 1px solid" 
                  border=0 cellSpacing=2 cellPadding=2 width="100%" 
align=center>
                    <TBODY>
                    <TR>
                      <TD>
 <FORM encType=multipart/form-data method=post action="">
 <INPUT  name=subaction type=hidden id="subaction" value=eleman> <INPUT value=doadd type=hidden name=sub> 
                        <TABLE>
                          
                          <TBODY>
                          <TR>
                            <TD><STRONG>Ýsim / Soyisim</STRONG></TD>
                            <TD><INPUT class=myinput size=30 name=name></TD></TR>
                          <TR>
                            <TD><STRONG>Telefon</STRONG></TD>
                            <TD><INPUT class=myinput maxLength=13 size=30 name=telefon> 
                              ( &Ouml;rnek: 0-384-1234567 )</TD></TR>
                          <TR>
                            <TD><STRONG>Cep</STRONG></TD>
                            <TD><INPUT class=myinput maxLength=13 size=30 name=cep> 
                            ( &Ouml;rnek: 
                              0-533-1234567 )</TD></TR>
                          <TR>
                            <TD><STRONG>Fotoðraf</STRONG></TD>
                            <TD><INPUT class=myinput size=30 type=file 
                              name=userfile[] id="userfile[]"><BR>Ýlgili Kiþiye Ait Fotoðraf Yok Ýse 
                              Alan Boþ Ge&ccedil;ilecektir.</TD></TR>
                          <TR>
                            <TD></TD>
                            <TD><INPUT class=myinput onClick="this.style.visibility='hidden';document.getElementById('loading').style.visibility='visible';" value=Kaydet type=submit> 
                              <SPAN style="VISIBILITY: hidden" 
                              id=loading><STRONG><FONT color=#cc0000 
                              size=4>L&uuml;tfen 
                              Bekleyin.......</FONT></STRONG></SPAN> 
                          </TD></TR></TBODY></TABLE>
                          
                          </FORM>
                          
                      </TD></TR></TBODY></TABLE><BR><BR><STRONG>Dikkat 
                  Edilmesi Gereken Hususlar:</STRONG><BR><BR>- &Ccedil;ift Kayýt 
                  Yapýlmayacaktýr<BR>- Ýlgili Kiþi Fotoðraflarý &Ccedil;ift 
                  Girilmeyecektir.<BR>- Resim Kalitesi Y&uuml;ksek Olacak ve Sadece 
                  Vesikalýk Fotoðraf Girilecektir. <BR>- Kesinlikle Firma Logosu 
                  veya Ýþ Yeri Fotoðrafý Girilmeyecektir. <BR><BR>Aksi Taktirde 
                  Ýlanlarýnýz ve &Uuml;yeliðiniz Blokeye Alýnacaktýr. 
            </TD></TR></TBODY></TABLE>
            </TD></TR></TBODY></TABLE>