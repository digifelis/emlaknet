<style type="text/css">
<!--
.stil1 {
	font-size: 12px;
	color: #666666;
}
.stil3 {
	font-size: 14px
}
.stil5 {color: #A71335}
.stil6 {color: #006600}
.stil7 {color: #A40E31}
.stil10 {color: #AE2543}
.stil11 {
	color: #A22340;
	font-weight: bold;
}
.stil15 {font-weight: bold}
.stil16 {font-weight: bold}
.stil17 {font-weight: bold}
.stil18 {font-weight: bold}
.stil19 {font-weight: bold}
.stil21 {font-weight: bold}
.stil24 {font-weight: bold}
.stil26 {font-weight: bold}
.stil27 {color: #A22340}
.stil29 {color: #009933}
.stil30 {color: #0000CC}
.stil33 {color: #FF9933}
.stil44 {color: #000000}
.stil55 {color: #FFFFFF}
-->
</style>
<TABLE border=0 cellSpacing=0 cellPadding=0 width=946 align=center>
  <TBODY>
  <TR>
    <TD vAlign=top width=383><!--- login box start --->
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30  >
            <div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag"><br />
       <span class="stil55"> Þehirler</span></div>
      </div>   
            <DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" 
            width=1 height=2><BR></DIV></TD>
          </TR>
        <TR>
          <TD>
            <TABLE border=0 cellSpacing=0 cellPadding=4 width="100%" 
            bgColor=#f7f7f7 align=center>
              <TBODY>
              <TR>
                <TD 
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid">
                  <TABLE border=0 cellSpacing=2 cellPadding=2 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD vAlign=top width="50%">
                                                       <?php 
					  $vt->sql('select * from sehir where plaka<41 order by plaka ASC   ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="index.php?action=emlakci_liste&amp;b='.$veri->plaka.'">'.$veri->sehiradiUpper.'</A><BR>
	';
}
 ?>
                      
                      
                      <!---   	(16) ---> 
                        <BR><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" 
                        width=1 height=2><BR></TD>
                      <TD vAlign=top width="50%">
                      
                                                                             <?php 
					  $vt->sql('select * from sehir where plaka>40  order by plaka ASC   ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="index.php?action=emlakci_liste&amp;b='.$veri->plaka.'">'.$veri->sehiradiUpper.'</A><BR>
	';
}
 ?>
                      
                      
                      <!---   	(2) ---> 
                        <BR><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" 
                        width=1 
            height=2><BR></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><!--- login box ende  ---></TD>
    <TD width=20>&nbsp;&nbsp;</TD>
    <TD vAlign=top width=557>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30>
          <div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag"><br />
        <span class="stil55">Emlak&ccedil;ý Listesi</span></div>
      </div>   
                       </TD>
          </TR>
        <TR>
          <TD>
            <TABLE border=0 cellSpacing=0 cellPadding=4 width="100%" 
            bgColor=#f7f7f7 align=center>
              <TBODY>
              <TR>
                <TD 
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid">
                  <DIV align=center><font face="Verdana">Türkiyenin Se&ccedil;kin emlak firmalarýna 
                  ulaþmanýz artýk &ccedil;ok kolay !<BR><BR>
                  Farklý ilde bulunan 
                  emlak&ccedil;ýlar i&ccedil;in sol tarafdaki listeyi kullanabilirsiniz. 
                  <BR><BR><FONT color=#ff0000><STRONG><A 
                  style="COLOR: #ff0000; TEXT-DECORATION: none" 
                  title="Emlakçý Listesinde Yer Almak Ýstiyorsanýz Týklayýnýz." 
                  href="index.php?action=yeni_emlakci">Emlak&ccedil;ý Listesinde Yer 
                  Almak Ýstiyorsanýz Týklayýnýz.</A></STRONG></font></DIV>
                  <HR color=#b1b1b1 SIZE=1 width="100%" noShade>
                  
                  <TABLE border=0 cellSpacing=2 cellPadding=2 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD vAlign=top>
                   <?php
		
		 
		/// SELECT uyeler.* , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi=1 and ilan_ticari.uye_id = uyeler.id ".$kriter." group by uyeler.id order by uyeler.id desc 
		$kriter1="";
				   if(temizle($_GET["b"]) != "") { $kriter1 = "and uyeler.il = '".temizle($_GET["b"])."'"; }
				   $vt->sql("SELECT uyeler.* , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi=1 and uyeler.onay=0 ".$kriter1." group by uyeler.id order by uyeler.id asc limit 50   ")->sor();
                    $veriler = $vt->alHepsi();
					foreach ($veriler as $veri) {
					
					echo ' <STRONG><FONT face=Verdana><A 
                        style="COLOR: #cc0000; TEXT-DECORATION: none" 
                        title="'.$veri->sirket.'" 
                        href="http://'.$veri->temiz_ad.'.'.$site.'/" target="_blank">'.$veri->sirket.'</A></FONT></STRONG> &nbsp;'.$veri->sehiradiUpper.'&nbsp;  <BR><IMG border=0 
                        alt="" 
                        src="tema/img/spacer.gif" 
                        width=1 height=4><BR>';
			
		
					}
					
          /*    <STRONG><FONT face=Verdana><A 
                        style="COLOR: #cc0000; TEXT-DECORATION: none" 
                        title="'.$veri->sirket.'" 
                        href="http://'.$veri->temiz_ad.'.'.$site.'/" target="_blank">'.$veri->sirket.'</A></FONT></STRONG> &nbsp;'.$veri->sehiradiUpper.'&nbsp;(&nbsp;'.$veri->sayi.'&nbsp;)  <BR><IMG border=0 
                        alt="" 
                        src="tema/img/spacer.gif" 
                        width=1 height=4><BR>  */         
                   ?>  
                        
                        
                        
                        
                       </TD>
                      </TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>