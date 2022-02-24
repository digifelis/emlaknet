   <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=../tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="../tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT 
            color=#ffffff>&#304;lanlar</FONT></STRONG></DIV></TD>
          <TD background=../tema/img/bg_fahne.gif width="100%" 
          align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="../tema/img/spacer.gif" width=1 
            height=2><BR></DIV></TD>
          <TD vAlign=top background=../tema/img/bg_fahne.gif 
          width=10 align=left><IMG border=0 alt="" 
            src="../tema/img/spacer.gif" width=11 
height=30></TD></TR>
        <TR>
          <TD colSpan=3>
            <TABLE border=0 cellSpacing=0 cellPadding=4 width="100%" 
            bgColor=#f7f7f7 align=center>
              <TBODY>
              <TR>
                <TD 
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid">
                  <TABLE border=0 cellSpacing=3 cellPadding=3 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD>
                        <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" 
                        align=center>
                          <TBODY>
                          <TR>
                            <TD align="center">&nbsp;&nbsp;<div id="sonuc"></div>&nbsp;&nbsp; </TD>
                            
                            
                          </TR></TBODY></TABLE>
    
                        <TABLE border=0 cellSpacing=1 cellPadding=1 width="100%" 
                        align=center>
                          <TBODY>
                          <TR>
                            <TD colSpan=4>
                              <HR color=#c0c0c0 SIZE=1 width="100%" noShade>
                            </TD></TR>
                          <TR>
                            <TD colSpan=4><!-- order start -->
                              <TABLE border=0 cellSpacing=0 cellPadding=0 
                              width="100%" align=right>
                                <TBODY>
                                <TR>
                                <TD height=16 width=16><IMG border=0 alt="" 
                                src="../tema/img/flag_green.gif" 
                                width=16 height=16></TD>
                                <TD noWrap>&nbsp;<A 
                                href="?action=uye&subaction=ilan_listeg&amp;showstatus=2&amp;sortorder=desc&id=<?php echo $_GET["id"]; ?>">Kay&#305;tl&#305; 
                                ( Aktif )</A></TD>
                                <TD height=16 width=16><IMG border=0 alt="" 
                                src="../tema/img/flag_orange.gif" 
                                width=16 height=16></TD>
                                <TD noWrap>&nbsp;<A 
                                href="?action=uye&subaction=ilan_listeg&amp;showstatus=0&amp;sortorder=desc&id=<?php echo $_GET["id"]; ?>">Kontrol 
                                A&#351;amas&#305;nda</A></TD>
                                <TD height=16 width=16><IMG border=0 alt="" 
                                src="../tema/img/flag_red.gif" 
                                width=16 height=16></TD>
                                <TD noWrap>&nbsp;<A 
                                href="?action=uye&subaction=ilan_listeg&amp;showstatus=1&amp;sortorder=desc&id=<?php echo $_GET["id"]; ?>">Blokeli</A></TD>
                                <TD height=16 width=16><IMG border=0 alt="" 
                                src="../tema/img/flag_white.gif" 
                                width=16 height=16></TD>
                                <TD noWrap>&nbsp;<A 
                                href="?action=uye&subaction=ilan_listeg&amp;showstatus=3&amp;sortorder=desc&id=<?php echo $_GET["id"]; ?>">S&uuml;resi 
                                Dolmu&#351;</A></TD>
                                <TD height=16 width=16><IMG border=0 alt="" 
                                src="../tema/img/award_star_bronze_1.gif" 
                                width=16 height=16></TD>
                                <TD noWrap>&nbsp;<A 
                                href="?action=uye&subaction=ilan_listeg&amp;showstatus=4&amp;sortorder=desc&id=<?php echo $_GET["id"]; ?>">Vitrin 
                                &#304;lanlar</A></TD>
                                <TD height=16 width=16><IMG border=0 alt="" 
                                src="../tema/img/flag_blue.gif" 
                                width=16 height=16></TD>
                                <TD noWrap>&nbsp;<A 
                                href="?action=uye&subaction=ilan_listeg&amp;sortorder=desc&id=<?php echo $_GET["id"]; ?>">T&uuml;m 
                                &#304;lanlar</A></TD></TR></TBODY></TABLE><!-- order end --><BR></TD></TR>
                          <TR>
                            <TD colSpan=4>
                              <HR color=#c0c0c0 SIZE=1 width="100%" noShade>

                              <TABLE border=0 cellSpacing=1 cellPadding=1 
                              width="100%" align=center>
                                <TBODY>
                                <TR>
                                <TD width=16><IMG border=0 alt="" 
                                src="../tema/img/pu.gif" width=16 
                                height=11></TD>
                                <TD>&nbsp;&nbsp;<STRONG>&#304;lan Kay&#305;t ve Yay&#305;nlanma 
                                Durumu</STRONG></TD>
                                <TD>&nbsp;&nbsp;</TD>
                                <TD>
                                <TABLE border=0 cellSpacing=2 cellPadding=2 
                                align=right>
                                <TBODY>
                                <TR>
                              <!--  <FORM action=/index.php><INPUT 
                                value=benimilanlar type=hidden name=action> 
                                <TD noWrap><STRONG>Kayytly Ylanlar Y&ccedil;inde Ara: 
                                </STRONG></TD>
                                <TD><INPUT class=input size=15 
name=ara_val></TD>
                                <TD><INPUT style="BACKGROUND: #d9edf8" class=input value=ARA type=submit>
                                <DIV></DIV></TD></FORM> --></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD height=200 vAlign=top colSpan=4>
                             
                              
                                <?php
				if(temizle($_GET["showstatus"]) != "") { $onay='and onay= "'.temizle($_GET["showstatus"]).'" '; };
				
				
$vt->sql('select id,uye_id , tarih,ilan_tipi_id,ilan_grup,il,ilce,koy,fiyat,birim,ilan_suresi,bas_tarihi,hit,onay from ilan_ticari  where uye_id = "'.$_GET["id"].'"  '.$onay.'  order by id '.temizle($_GET["sortorder"]).'   ')->sor();
					  $veriler = $vt->alHepsi();
					if( $vt->numRows()==0) {
						echo '<DIV align=center><BR><BR><STRONG>Kay&#305;tl&#305; &#304;lan 
                              Bulunmamaktad&#305;r.</STRONG></DIV>';
					}
					  
 foreach( $veriler as $veri )
{
?>
	

                              <HR color=#c0c0c0 SIZE=1 width="100%" noShade>
                              
                            
                              
                            <TABLE border=0 cellSpacing=2 cellPadding=2 
                              width="100%" align=center>
                                <TBODY>
                                <TR>
                                <TD vAlign=top rowSpan=2 width=20>
                         <?php 
						 
if($veri->onay == 0 ) { echo '<IMG border=0  alt="" src="../tema/img/flag_orange.gif" width=16 height=16>'; }
if($veri->onay == 1 ) { echo '<IMG border=0  alt="" src="../tema/img/flag_red.gif" width=16 height=16>'; }						 
if($veri->onay == 2 ) { echo '<IMG border=0  alt="" src="../tema/img/flag_green.gif" width=16 height=16>'; }						 
if($veri->onay == 3 ) { echo '<IMG border=0  alt="" src="../tema/img/flag_white.gif" width=16 height=16>'; }
if($veri->onay == 4 ) { echo '<IMG border=0  alt="" src="../tema/img/award_star_bronze_1.gif" width=16 height=16>'; }

?>
                                
                                
                              
                                
                                
                                </TD>
                                <TD vAlign=top rowSpan=2 width=110>
                                <DIV align=center><A 
                                href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>" 
                                target=1700342>
  <?php 
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();

//$veriler5 = $vt->alHepsi();
if($vt->numRows() == 0) {
$foto_adi = "nopic100x60.gif"; 
} else {
$foto_adi = $vt->alTek();
}
echo ' <IMG border=0 src="../thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75" >'; 	
 $foto_adi="";
 ?>                                
                                
                                
                                
                                </A> <BR>
                                <STRONG><?php echo ondalik($veri->fiyat)."&nbsp;&nbsp;";
								if ($veri->birim==1) { echo "TL"; }
								if ($veri->birim==2) { echo "Euro"; }
								if ($veri->birim==3) { echo "USD"; }
								if ($veri->birim==4) { echo "GBP"; }
								?>
								</STRONG></DIV>
                                <form id="form1" name="form1" method="post" action="javascript:void(0);">
                                <input name="ilan_id" type="hidden" value="<?php echo $veri->id  ?>" />
                                  <table width="200">
                                    <tr>
                                      <td nowrap="nowrap"><label>
                                        <input <?php if (!(strcmp("$veri->onay","2"))) {echo "checked=\"checked\"";} ?> type="radio" name="RadioGroup1" value="2" id="RadioGroup1_0" />
                                        Aktif</label></td>
                                      <td nowrap="nowrap"><input <?php if (!(strcmp("$veri->onay","1"))) {echo "checked=\"checked\"";} ?> type="radio" name="RadioGroup1" value="1" id="RadioGroup1_2" />
Blokeli</td>
                                      </tr>
                                    <tr>
                                      <td nowrap="nowrap"><label>
                                        <input <?php if (!(strcmp("$veri->onay","0"))) {echo "checked=\"checked\"";} ?> type="radio" name="RadioGroup1" value="0" id="RadioGroup1_1" />
                                        Konrol aþamasýnda</label></td>
                                      <td nowrap="nowrap"><input <?php if (!(strcmp("$veri->onay","3"))) {echo "checked=\"checked\"";} ?> type="radio" name="RadioGroup1" value="3" id="RadioGroup1_3" />
S&uuml;resi dolmuþ</td>
                                      </tr>
                                    <tr>
                                      <td nowrap="nowrap"><input <?php if (!(strcmp("$veri->onay","4"))) {echo "checked=\"checked\"";} ?> type="radio" name="RadioGroup1" value="4" id="RadioGroup1_4" />
Vitrin</td>
                                      <td nowrap="nowrap"><label>
                                        <input type="submit" name="button" id="button"  value="Deðiþikliði Kaydet" />
                                      </label></td>
                                      </tr>
                                    </table>
                                </form></TD>
                                <TD class=tdliste vAlign=top><STRONG><A 
                                href="../index.php?action=detail&amp;id=<?php echo $veri->id; ?>" 
                                target=1700342>                               
                                
 <?php 
 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
echo $vt->alTek()."&nbsp;-&nbsp;"; 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
echo $vt->alTek()."&nbsp;-&nbsp;"; 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"  ')->sor();
echo $vt->alTek()."&nbsp;-&nbsp;"; 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor();
echo $vt->alTek(); 
 ?>
                                
                                
                                
                                </A></STRONG></TD>
                                <TD class=tdliste vAlign=top>
                                <DIV align=center><FONT color=#cc0000 
                                face=Verdana><B>Ilan No: 
                                &nbsp;<?php echo $veri->id; ?></B></FONT></DIV></TD></TR>
                                <TR>
                                <TD bgColor=#efefef vAlign=top width="60%">Ilan 
                                S&uuml;resi: <STRONG><?php echo date("d-m-Y",strtotime($veri->bas_tarihi)); ?></STRONG> - 
                                <STRONG><?php						
								echo date("d-m-Y",strtotime($veri->bas_tarihi)+$veri->ilan_suresi*86400); 
								?></STRONG><BR>
                                <!-- Ilandurumu: <strong>Ilan sayfia alinmistir.</strong><BR> -->Ilan 
                                T&uuml;r&uuml;:  <?php 
 $vt->sql('select * from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $veriler1 = $vt->alHepsi();
 foreach( $veriler1 as $veri1 )
{ echo $veri1->adi; }
 ?><BR>
                                Ilan B&ouml;lgesi : 
                                 <?php 
$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
echo $vt->alTek()."&nbsp;-&nbsp;"; 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"  ')->sor();
echo $vt->alTek()."&nbsp;-&nbsp;"; 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor();
echo $vt->alTek(); 
 ?>
                                
                                
                                <BR>
                                Ilaniniz 
                                <STRONG><?php echo $veri->hit; ?></STRONG> Kez Okunmustur<BR>
                                <BR>
                                <TABLE border=0 cellSpacing=0 cellPadding=0 
                                width="100%" align=center>
                                <TBODY>
                                <TR>
                                <TD>&nbsp;</TD>
                                <TD>&nbsp;</TD>
                                <TD>&nbsp;</TD></TR></TBODY></TABLE>
                                
                                <TABLE border=0 cellSpacing=0 cellPadding=0 
                                width="100%" align=center>
                                <TBODY>
                                <TR>
                                <TD><IMG border=0 alt="" 
                                src="../tema/img/friend.gif" 
                                width=15 height=18></TD>
                                <TD><FONT color=#cc0000><STRONG><A 
                                href="?action=uye&subaction=eleman_ekle&amp;id=<?php echo $veri->id; ?>">Satis 
                                Elemanina Ait Bilgi Eklemek I&ccedil;in 
                                Tiklayiniz</A></STRONG></FONT></TD></TR></TBODY></TABLE>
                                
                                
                                
                                <BR>
                                <TABLE border=0 cellSpacing=0 cellPadding=0 
                                width="100%" align=center>
                                <TBODY>
                                <TR>
                                </TR></TBODY></TABLE></TD>
                                <TD vAlign=top width=120 noWrap><BR>
                                <TABLE border=0 cellSpacing=0 cellPadding=2 
                                width="100%" align=center>
                                <TBODY>
                                <TR>
                                <TD><IMG border=0 alt="" 
                                src="../tema/img/ilan_edit.gif" 
                                width=16 height=16></TD>
                                <TD><A 
                                href="?action=uye&subaction=edit&amp;s=<?php echo $veri->ilan_grup; ?>&amp;oid=<?php echo $veri->id; ?>">Ilan 
                                D&uuml;zeltme</A></TD></TR>
                                <TR>
                                <TD><IMG border=0 alt="" 
                                src="../tema/img/ilan_image.gif" 
                                width=16 height=16></TD>
                                <TD noWrap><A 
                                href="?action=uye&subaction=pictures&amp;id=<?php echo $veri->id; ?>">Fotograf 
                                Islemi</A></TD></TR>
                                <TR>
                                <TD><IMG border=0 alt="" 
                                src="../tema/img/ilan_sil.gif" 
                                width=16 height=16></TD>
                                <TD><A style="COLOR: #ff0000" 
                                href="?action=uye&subaction=ilan_sil&amp;id=<?php echo $veri->id; ?>">Ilan 
                                Silme 
                                Islemi</A></TD></TR></TBODY></TABLE>
                                
                                
                            <?php
								if($veri->onay == 3) {
									
									?>
                                
                                <form action="index.php?action=ilan&subaction=uzat&id=<?php echo $veri->id; ?>" method="post">
                                <table width="100%" border="0">
                                  <tr>
                                    <td>&#304;lan S&uuml;resini Uzat</td>
                                  </tr>
                                  <tr>
                                    <td><p>
                                      <label>
                                        <input name="RadioGroup1" type="radio" id="RadioGroup1_0" value="14" checked="checked" />
                                        2 hafta</label>
                                      <br />
                                      <label>
                                        <input type="radio" name="RadioGroup1" value="30" id="RadioGroup1_1" />
                                        1 ay</label>
                                      <br />
                                      <label>
                                        <input type="radio" name="RadioGroup1" value="60" id="RadioGroup1_2" />
                                        2 ay</label>
                                      <br />
                                      <label>
                                        <input type="radio" name="RadioGroup1" value="90" id="RadioGroup1_3" />
                                        3 ay</label>
                                      <br />
                                    </p></td>
                                  </tr>
                                  <tr>
                                    <td><label>
                                      <input type="submit" name="button" id="button" value="   Uzat   " />
                                    </label></td>
                                  </tr>
                                </table>
                                </form>
                                <?php } ?>
                                
                                       
                                
                                
                                
                                </TD></TR></TBODY></TABLE>  
                              
 <?php       } ?>                    
                              
                              </TD></TR>
                          <TR>
                            <TD colSpan=4>
                              <HR color=#c0c0c0 SIZE=1 width="100%" noShade>
                             
                </TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
                
               
                
                
                </TD></TR></TBODY></TABLE>