<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 
          background=tema/img/fahne1.gif 
            width=129><DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>Arama 
            Kriter</FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif 
          width="100%" align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 
            height=2><BR></DIV></TD>
          <TD vAlign=top 
          background=tema/img/bg_fahne.gif width=10 
          align=left><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=11 
            height=30></TD></TR>
        <TR>
          <TD colSpan=3>
            <TABLE border=0 cellSpacing=0 cellPadding=4 width="100%" 
            bgColor=#f7f7f7 align=center>
              <TBODY>
              <TR>
                <TD 
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid"><FONT 
                  color=#cc0000 size=4><STRONG>Arama Kriter 
                  Listesi</STRONG></FONT><BR>
                  <BR><BR>Arama Kriterlerinizi Sisteme Kay�t 
                  Ederek Olu�turaca��n�z Liste Yard�m� �le, Her G&uuml;n Kay�t Etmi� 
                  Oldu�unuz Linke T�klayarak Otomatik Arama Yapabilirsiniz. Her 
                  Defas�nda Kriter Se&ccedil;mek Zorunda Olmadan, Zamandan Tassaruf 
                  Ederek H�zl� Bir �ekilde Arama Yapabileceksiniz. 
                  <BR><BR><BR><STRONG>Kay�tl� Arama Linkleriniz</STRONG><BR><BR>
                  
       <?php 
				  if(temizle($_GET["subaction"]) == "del") {
			$vt->sql("delete from ilan_kriter where id= '".temizle($_GET["id"])."' and kullanici_id= '".$_SESSION["id"]."'")->sor();		
			if($vt->affRows() > 0) {
				echo "ARAMA KRITER LISTESINDEN BASARILI BIR SEKILDE KALDIRILDI";
			} else { echo "ARAMA KRITER LISTESINDEN KALDIRILAMADI. TEKRAR DENEYINIZ.HATA DEVAM EDERSE SITE Y�NETICISINE DURUMU BILDIRINIZ."; }
					
				  }

?>            
                  
                  
                  <TABLE 
                  style="BORDER-BOTTOM: #767676 1px solid; BORDER-LEFT: #767676 1px solid; BORDER-TOP: #767676 1px solid; BORDER-RIGHT: #767676 1px solid" 
                  border=0 cellSpacing=2 cellPadding=2 width="100%" 
align=center>
                    <TBODY>
                    <TR>
                      <TD bgColor=#ccccff width=16></TD>
                      <TD bgColor=#ccccff><STRONG>A&ccedil;�klama</STRONG></TD>
                     
                      <TD bgColor=#ccccff width=50>
                      <DIV align=center><STRONG>Sil</STRONG></DIV></TD></TR>
                   
                   <?php 
$vt->sql("select * from ilan_kriter where  ilan_kriter.kullanici_id = '".  $_SESSION["id"] ."' ")->sor();
$sonuc = $vt->numRows();

$veriler = $vt->alHepsi();

foreach($veriler as $veri) {
				   
				   ?>
                    <TR>
                      <TD bgColor=#ccccff width=16></TD>
                      <TD bgColor=#ccccff><STRONG><a href="index.php?<?php echo $veri->kriter; ?>" target="_blank"><?php echo $veri->aciklama; ?></a></STRONG></TD>
                     
                      <TD bgColor=#ccccff width=50>
                        <DIV align=center><STRONG><a href="start.php?action=arama_kriter&subaction=del&id=<?php echo $veri->id; ?>">Sil</a></STRONG></DIV></TD></TR>
                    <TR>
           <?php } ?>                             
                      
         <?php 
				   if($sonuc == 0) { 
				   ?>
                   
                    <TR>
                      <TD colSpan=3>Kay�t Bulunmamaktad�r</TD></TR>
                      
                      <?php
				   }
				   ?>               
                      
                      
                  </TBODY></TABLE><BR><BR><STRONG>Listeye 
                  Kriter Arama Linki Eklemek �stiyorsan�z:</STRONG><BR><BR>1.) 
                  Detayl� Arama B&ouml;l&uuml;m&uuml;nden Kriter Se&ccedil;erek Arama Yap�n�z.<BR>2.) 
                  Arama Sonu&ccedil; Ekran�n�n &Uuml;st B&ouml;l&uuml;m&uuml;nde Bulunan <STRONG>"Arama 
                  Kriterlerini Haf�z�ya Al"</STRONG> Butonuna T�klay�n�z.<BR>3.) 
                  �stedi�iniz Ba�l�k veya Hat�rlatma Notunu Yazarak 
                  <STRONG>"Kaydet"</STRONG> Butonuna T�klay�n�z.<BR><BR>Not: 
                  Kriter Arama Linki Ekleyebilmek �&ccedil;in, &Ouml;nceden &Uuml;yelik Giri�i 
                  Yapman�z Gerekmektedir. 
      </TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>