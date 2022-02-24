<?php 
 if($_SESSION['uye_tipi']== 1) {
  	  $vt->sql('select * from ayar where id=1')->sor();
 $veriler = $vt->alHepsi();  foreach($veriler as $veri) {	  $ilan_sayisi = $veri->emlakci_ilan_sayisi; }
 }
   if($_SESSION['uye_tipi']== 2) {
  	  $vt->sql('select * from ayar where id=1')->sor();
 $veriler = $vt->alHepsi();  foreach($veriler as $veri) {	  $ilan_sayisi = $veri->normal_uye_ilan_sayisi; }
 }
  if($_SESSION['uye_tipi']== 3) {
  	  $vt->sql('select * from ayar where id=1')->sor();
 $veriler = $vt->alHepsi();  foreach($veriler as $veri) {	  $ilan_sayisi = $veri->mutahit_ilan_sayisi; }
 }
 
 	  $vt->sql('select count(id) as sayi from ilan_ticari where uye_id="'.$_SESSION["id"].'" ')->sor();
 $veriler = $vt->alHepsi();  foreach($veriler as $veri) {	  $uyenin_ilan_sayisi = $veri->sayi; }
 
 if($ilan_sayisi>$uyenin_ilan_sayisi) {
?>
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>Ýlan 
            T&uuml;r&uuml;</FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif width="100%" 
            align=left><DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 height=2><BR></DIV></TD>
          <TD vAlign=top background=tema/img/bg_fahne.gif width=10 
          align=left><IMG border=0 alt="" src="tema/img/spacer.gif" 
            width=11 height=30></TD></TR>
        <TR>
          <TD colSpan=3>
            <TABLE border=0 cellSpacing=0 cellPadding=4 width="100%" 
            bgColor=#f7f7f7 align=center>
              <TBODY>
              <TR>
                <TD 
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid">
                  <DIV align=center><STRONG><FONT size=4>Gayrimenkul T&uuml;r&uuml;n&uuml; Týklayarak Ýlerleyiniz 
                  </FONT></STRONG></DIV>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                  <B><FONT size=4>&Ouml;zel / Konut 
Gayrimenkul</FONT></B><BR>
                  <TABLE border=0 cellSpacing=3 cellPadding=3 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD vAlign=top width="16%" noWrap>
                      <?php 
					  $vt->sql('select * from ilan_tipi   where tip=1 and grup_id=1 limit 0,6')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=sehirler&amp;a='.$veri->id.'&amp;s=1">'.$veri->adi.'</A><BR>
	';
}
 ?>
                     
                        
                        
                        
                       </TD>
                      <TD width="1%">&nbsp;</TD>
                      <TD vAlign=top width="23%" noWrap><?php 
					  $vt->sql('select * from ilan_tipi   where tip=1 and grup_id=1 limit 6,50')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=sehirler&amp;a='.$veri->id.'&amp;s=1">'.$veri->adi.'</A><BR>
	';
}
 ?></TD>
                      <TD vAlign=top width="1%" noWrap>&nbsp;</TD>
                      <TD vAlign=top width="22%" noWrap><?php 
					  $vt->sql('select * from ilan_tipi   where tip=0 and grup_id=1 limit 0,5 ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=sehirler&amp;a='.$veri->id.'&amp;s=1">'.$veri->adi.'</A><BR>
	';
}
 ?></TD>
                      <TD vAlign=top width="1%" noWrap>&nbsp;</TD>
                      <TD vAlign=top width="36%" noWrap><?php 
					  $vt->sql('select * from ilan_tipi   where tip=0 and grup_id=1  limit 5,50 ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=sehirler&amp;a='.$veri->id.'&amp;s=1">'.$veri->adi.'</A><BR>
	';
}
 ?></TD>
                    </TR>
                    </TBODY></TABLE><BR><B><FONT 
                  size=4>Ticari / Ýþyeri Gayrimenkul</FONT></B><BR>
                  <TABLE border=0 cellSpacing=3 cellPadding=3 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD vAlign=top width="16%" noWrap>
<?php 
					  $vt->sql('select * from ilan_tipi   where tip=1 and grup_id=2 limit 0,11 ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=sehirler&amp;a='.$veri->id.'&amp;s=2">'.$veri->adi.'</A><BR>
	';
}
 ?>               
                      
                      
                      
                      </TD>
                      <TD width="1%">&nbsp;</TD>
                      <TD vAlign=top width="23%" noWrap><?php 
					  $vt->sql('select * from ilan_tipi   where tip=1 and grup_id=2 limit 11,100 ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=sehirler&amp;a='.$veri->id.'&amp;s=2">'.$veri->adi.'</A><BR>
	';
}
 ?></TD>
                      <TD vAlign=top width="1%" noWrap>&nbsp;</TD>
                      <TD vAlign=top width="22%" noWrap><?php 
					  $vt->sql('select * from ilan_tipi   where tip=0 and grup_id=2 limit 0,11 ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=sehirler&amp;a='.$veri->id.'&amp;s=2">'.$veri->adi.'</A><BR>
	';
}
 ?></TD>
                      <TD vAlign=top width="1%" noWrap>&nbsp;</TD>
                      <TD vAlign=top width="36%" noWrap><?php 
					  $vt->sql('select * from ilan_tipi   where tip=0 and grup_id=2 limit 11,100 ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=sehirler&amp;a='.$veri->id.'&amp;s=2">'.$veri->adi.'</A><BR>
	';
}
 ?></TD>
                    </TR>
                    </TBODY></TABLE><BR><B><FONT 
                  size=4>Arsa / Arazi</FONT></B><BR>
                  <TABLE border=0 cellSpacing=3 cellPadding=3 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD vAlign=top width="16%" noWrap>
          <?php 
					  $vt->sql('select * from ilan_tipi   where tip=1 and grup_id=3 limit 0,4 ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=sehirler&amp;a='.$veri->id.'&amp;s=3">'.$veri->adi.'</A><BR>
	';
}
 ?>             
                      
                      
                      
                      </TD>
                      <TD width="1%">&nbsp;</TD>
                      <TD vAlign=top width="23%" noWrap><?php 
					  $vt->sql('select * from ilan_tipi   where tip=1 and grup_id=3 limit 4,100 ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=sehirler&amp;a='.$veri->id.'&amp;s=3">'.$veri->adi.'</A><BR>
	';
}
 ?></TD>
                      <TD vAlign=top width="1%" noWrap>&nbsp;</TD>
                      <TD vAlign=top width="22%" noWrap><?php 
					  $vt->sql('select * from ilan_tipi   where tip=0 and grup_id=3 limit 0,3')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=sehirler&amp;a='.$veri->id.'&amp;s=3">'.$veri->adi.'</A><BR>
	';
}
 ?></TD>
                      <TD vAlign=top width="2%" noWrap>&nbsp;</TD>
                      <TD vAlign=top width="36%" noWrap><?php 
					  $vt->sql('select * from ilan_tipi   where tip=0 and grup_id=3 limit 3,100 ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=sehirler&amp;a='.$veri->id.'&amp;s=3">'.$veri->adi.'</A><BR>
	';
}
 ?></TD>
                    </TR>
                </TBODY></TABLE><BR></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
                      <?php } else {echo "<center><h2>Site yonetimi tarafindan izin verilen<br>ilan sayisina ulastiginizdan dolayi ilan ekleyemezsiniz</h2></center>"; }  ?>