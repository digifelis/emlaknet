<?php 
if (temizle($_POST["subaction"])== "eleman" )
{
	  /////////////////////////

		if($_FILES) {
	$mime_types = array('image/pjpeg', 'image/jpeg'); // izin verilecek olan dosya tipleri
    $kgUploaderOBJ = & new kg_uploader();
    $kgUploaderOBJ -> uploader_set($_FILES['userfile'], 'resimler', $mime_types); 
	// 1. parametre FILES dizisi, 2. parametre dizin, 3. parametre ise izin verilen dosya tipleri	
	//// resim y�kleme ayar kysmy
	$yuklenen_resim = $kgUploaderOBJ -> file_new_name;
	$vt->sql("insert into bayi_eleman (id,onay,isim_soyad,telefon,cep,foto,uye_id) values ('','0','".temizle($_POST["name"])."','".temizle($_POST["telefon"])."','".temizle($_POST["cep"])."','". $yuklenen_resim ."','".$_SESSION["id"]."' ) ");
	if($vt->sor()==0) {echo "<h3>Hata Olustu . Hata Kodu ELEMAN1100.<br>Hata devam ederse L�tfen Site Y�neticisine Bildiriniz.</h3>";}

		}

}
if (temizle($_POST["subaction"])== "delete" )
{
	$vt->sql("delete from bayi_eleman where id = '".temizle($_POST["id"])."' and uye_id = '".$_SESSION["id"]."'");
	if($vt->sor()==0) {echo "<h3>Hata Olustu . Hata Kodu ELEMAN1200.<br>Hata devam ederse L�tfen Site Y�neticisine Bildiriniz.</h3>";}
}
?>



 <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>Yetkili Ki�i 
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
                  color=#cc0000 size=4><STRONG>Sat�� Eleman� - Yetkili Ki�i 
                  Listesi</STRONG></FONT><BR><BR>M&uuml;�teriye Daha �yi Bir Hizmet 
                  Verebilmek ve M&uuml;�terinin Sizinle Daha &Ccedil;abuk �leti�im 
                  Kurabilmesi �&ccedil;in �lan Sat�� Eleman� - Yetkili Ki�i Listenizi 
                  Olu�turunuz.<BR><BR>�lan Giri�lerinde Verilen Emlak �lan� �le 
                  �lgili Hangi Sat�� Eleman�n�z �lgileniyorsa Sat�� Eleman�na 
                  Ait �sim / Soyisim ve Telefon Numaras� Bilgilerini 
                  Yaz�n�z.<BR><BR>M&uuml;�teri Memnuniyeti ve Sat�� A&ccedil;�s�ndan 
                  Kolayl�k ve Avantaj Elde Etmi� Olacaks�n�z.<BR>Sat�� Eleman� / 
                  Yetkili Ki�i Listenize 10 Adet Kay�t Ekleyebilirsiniz. 
                  <BR><BR><BR>
                  <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD><STRONG>Sat�� Eleman� / Yetkili Ki�i Kay�t 
                        Listesi</STRONG></TD>
                      <TD><IMG border=0 
                        src="tema/img/FFFF00.gif" width=15 
                        height=15></TD>
                      <TD>Onay A�amas�nda</TD>
                      <TD><IMG border=0 
                        src="tema/img/008000.gif" width=15 
                        height=15></TD>
                      <TD>Onaylanm��t�r</TD></TR></TBODY></TABLE><BR>
                  <TABLE 
                  style="BORDER-BOTTOM: #767676 1px solid; BORDER-LEFT: #767676 1px solid; BORDER-TOP: #767676 1px solid; BORDER-RIGHT: #767676 1px solid" 
                  border=0 cellSpacing=2 cellPadding=2 width="100%" 
align=center>
                    <TBODY>
                    <TR>
                      <TD bgColor=#66cc66 width=16><STRONG>Konum</STRONG></TD>
                      <TD bgColor=#66cc66 
width=80><STRONG>Foto�raf</STRONG></TD>
                      <TD bgColor=#66cc66><STRONG>�sim / Soyisim</STRONG></TD>
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
                            <TD><STRONG>�sim / Soyisim</STRONG></TD>
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
                            <TD><STRONG>Foto�raf</STRONG></TD>
                            <TD><INPUT class=myinput size=30 type=file 
                              name=userfile[] id="userfile[]"><BR>�lgili Ki�iye Ait Foto�raf Yok �se 
                              Alan Bo� Ge&ccedil;ilecektir.</TD></TR>
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
                  Edilmesi Gereken Hususlar:</STRONG><BR><BR>- &Ccedil;ift Kay�t 
                  Yap�lmayacakt�r<BR>- �lgili Ki�i Foto�raflar� &Ccedil;ift 
                  Girilmeyecektir.<BR>- Resim Kalitesi Y&uuml;ksek Olacak ve Sadece 
                  Vesikal�k Foto�raf Girilecektir. <BR>- Kesinlikle Firma Logosu 
                  veya �� Yeri Foto�raf� Girilmeyecektir. <BR><BR>Aksi Taktirde 
                  �lanlar�n�z ve &Uuml;yeli�iniz Blokeye Al�nacakt�r. 
            </TD></TR></TBODY></TABLE>
            </TD></TR></TBODY></TABLE>