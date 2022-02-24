
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>  Uyarilar  </FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif 
          width="100%" align=left>
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
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid"><FONT 
                  color=#cc0000 size=4><STRONG>                </STRONG></FONT><BR><BR>
                
                
          <?php include("bayi/uyari.php"); ?>      
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <BR><BR></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>





















<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>Takip 
            Listeniz</FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif 
          width="100%" align=left>
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
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid"><FONT 
                  color=#cc0000 size=4><STRONG>Ýlan Takip 
                  Listeniz</STRONG></FONT><BR><BR>Ýlgilenmiþ Olduðunuz Ýlanlarý 
                  Bir Sayfada Toplamak ve Kýsa Yoldan Ulaþmanýzý Saðlayan Ýlan 
                  Takip Listeniz. <BR><BR><BR><STRONG>Takibe Almýþ Olduðunuz 
                  Ýlan Kayýtlarýnýz:</STRONG><BR><BR>
                  <?php 
				  if(temizle($_GET["subaction"]) == "del") {
			$vt->sql("delete from ilan_takip where ilan_id= '".temizle($_GET["id"])."' and kullanici_id= '".$_SESSION["id"]."'")->sor();		
			if($vt->affRows() > 0) {
				echo "ILAN TAKIP LISTESINDEN BASARILI BIR SEKILDE KALDIRILDI";
			} else { echo "ILAN TAKIP LISTESINDEN KALDIRILAMADI. TEKRAR DENEYINIZ.HATA DEVAM EDERSE SITE YÖNETICISINE DURUMU BILDIRINIZ."; }
					
				  }

?>
<TABLE 
                  style="BORDER-BOTTOM: #767676 1px solid; BORDER-LEFT: #767676 1px solid; BORDER-TOP: #767676 1px solid; BORDER-RIGHT: #767676 1px solid" 
                  border=0 cellSpacing=2 cellPadding=2 width="100%" 
align=center>
                    <TBODY>
                    <TR>
                      <TD bgColor=#ccccff width=16><STRONG>Ýlan</STRONG></TD>
                      <TD bgColor=#ccccff width=80>
                        <DIV align=center><STRONG>&#304;lan B&ouml;lgesi</STRONG></DIV></TD>
                      <TD bgColor=#ccccff width=50>
                        <DIV align=center><STRONG>Sil</STRONG></DIV></TD></TR>
                   <?php 
$vt->sql("select ilan_ticari.* from ilan_takip,ilan_ticari where ilan_ticari.id = ilan_takip.ilan_id and ilan_takip.kullanici_id = '".  $_SESSION["id"] ."' ")->sor();
$sonuc = $vt->numRows();

$veriler = $vt->alHepsi();

foreach($veriler as $veri) {
				   
				   ?>
                        <TR>
                      <TD bgColor=#ccccff ><STRONG>
                      
                          <a href="index.php?action=detail&id=<?php echo $veri->id; ?>" target="_blank">   <?php 
 $vt->sql('select * from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $veriler1 = $vt->alHepsi();
 foreach( $veriler1 as $veri1 )
{ echo $veri1->adi; }
 ?></a>               
                      
                      
                      </STRONG></TD>
                      <TD nowrap="nowrap" bgColor=#ccccff>
                        <DIV align=center><STRONG>
                        
 <?php 
$vt->sql('select * from sehir where sehirID="'.$veri->il.'"   ')->sor();
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	echo $veri2->sehiradiUpper."&nbsp;-&nbsp;"; }
 ?>
 <?php 
$vt->sql('select * from ilce where ilceID="'.$veri->ilce.'"  and sehirID="'.$veri->il.'" ')->sor();
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	echo $veri3->ilceAdi."&nbsp;-&nbsp;"; }
 ?>         
  <?php 
$vt->sql('select * from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'"  and sehirID="'.$veri->il.'"   ')->sor();
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	echo $veri4->mahalleAdi; }
 ?> 
                        
                        
                        
                        </STRONG></DIV></TD>
                      <TD bgColor=#ccccff >
                        <DIV align=center><STRONG><a href="start.php?action=ilan_takip&subaction=del&id=<?php echo $veri->id; ?>">Sil</a></STRONG></DIV></TD></TR>
                      <?php 
}
?>
                   <?php 
				   if($sonuc == 0) { 
				   ?>
                   
                    <TR>
                      <TD colSpan=3>Kayýt Bulunmamaktadýr</TD></TR>
                      
                      <?php
				   }
				   ?>
                      
                      </TBODY></TABLE>
                  <DIV align=center><FONT color=#ff0000><STRONG>Not:<BR>Ýlan 
                  Sahibi, Ýlanýný Sildiðinde veya Ýlanýn S&uuml;resi 
                  Dolduðunda,<BR>Ýlan Takip Listenizden Otomatik Olarak 
                  Silinecektir.</STRONG></FONT> </DIV><BR><BR><STRONG>Listenizi 
                  Oluþturmak Ý&ccedil;in Yapmanýz Gereken Ýþlemler:</STRONG><BR><BR>1.) 
                  Kullanýcý Bilgileriniz Ýle &Uuml;ye Giriþi Yapmanýz 
                  Gerekmektedir.<BR>2.) Ýlgili Ýlanýn veya Ýlanlarýn Sol 
                  Kýsmýnda <STRONG>(<IMG border=0 alt="" align=middle 
                  src="tema/img/disc.gif" width=15 
                  height=18> Disket Ýþareti)</STRONG> veya Ýlanýn Alt Kýsmýnda 
                  Bulunan <STRONG>"Takibe Al"</STRONG> Butonuna Týklamanýz 
                  Gerekmektedir.<BR><BR></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>