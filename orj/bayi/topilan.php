   <SCRIPT type=text/javascript>
<!--
function numbersonly(myfield, e, dec)
{
var key;
var keychar;

if (window.event)
   key = window.event.keyCode;
else if (e)
   key = e.which;
else
   return true;
keychar = String.fromCharCode(key);

// control keys
if ((key==null) || (key==0) || (key==8) || 
    (key==9) || (key==13) || (key==27) )
   return true;

// numbers
else if ((("0123456789").indexOf(keychar) > -1))
   return true;

// decimal point jump
else if (dec && (keychar == "."))
   {
   myfield.form.elements[dec].focus();
   return false;
   }
else
   return false;
}

//-->
</SCRIPT>


<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 
          background=tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT 
          color=#ffffff>Vitrin</FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif 
          width="100%" align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 
            height=2><BR></DIV></TD>
          <TD vAlign=top 
          background=tema/img/bg_fahne.gif 
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
                  <DIV align=center><STRONG><FONT color=#cc0000 size=4 
                  face=Verdana>�lan�n�z�n �zlenirlili�ini 10 Kat Art�r�n 
                  !</FONT></STRONG></DIV></STRONG>
                  <DIV>
                  
                  <?php
				  
				  if(temizle($_POST["action"]) =="topilanok") {
					
					$vt->sql('insert into vitrin_istek (id,ilan_id,istek_tarihi,vitrin_gun,kart_sahibi,onay) values (NULL,"'.temizle($_POST["oid"]).'","'.$tarih.'","'.temizle($_POST["art"]).'","'.temizle($_POST["realname"]).'","HAYIR")  ');
					if($vt->sor() > 0) {
						echo "<h3>     Vitrin iste&#287;iniz Yollanm&#305;&#351;t&#305;r. &Ouml;deme Onayland&#305;ktan Sonra &#304;&#351;leme Al&#305;nacakt&#305;r.</h3>";
					} else { echo "</h3>&#304;&#351;lem Ger&ccedil;ekle&#351;medi . L&uuml;tfen daha Sonra Tekrar Deneyiniz.</H3>";
					}
					  
				  }
				  
				  ?>
                  
                  
             </DIV>
                  <HR>

                  <TABLE border=0 cellSpacing=2 cellPadding=2 width="100%" 
                  align=center>
                    <TBODY>
                    <TR><!--- <td width="120"><img alt="Sat�l�k Arsa - Aksaray Merkez" src="http://resim.emlak.net//x" border="0" width="100" height="75"></td> --->
                      <TD><FONT size=4><STRONG>
                      
     <?php 
	 $vt->sql('select * from ilan_ticari where id="'.temizle($_GET["oid"]).'"')->sor();
	 $veriler = $vt->alHepsi();
	 foreach($veriler as  $veri)
	 {
	 
	 
	 ?>
                       <?php 
					   
 $vt->sql('select * from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $veriler1 = $vt->alHepsi();
 foreach( $veriler1 as $veri1 )
{ echo $veri1->adi."&nbsp;-&nbsp;"; }
 ?>
 <?php 
$vt->sql('select * from sehir where sehirID="'.$veri->il.'"   ')->sor();
$veriler2 = $vt->alHepsi();
 foreach( $veriler2 as $veri2 ) {	echo $veri2->sehiradiUpper."&nbsp;-&nbsp;"; }
 ?>
 <?php 
$vt->sql('select * from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"  ')->sor();
$veriler3 = $vt->alHepsi();
 foreach( $veriler3 as $veri3 ) {	echo $veri3->ilceAdi."&nbsp;-&nbsp;"; }
 ?>         
  <?php 
$vt->sql('select * from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"  ')->sor();
$veriler4 = $vt->alHepsi();
 foreach( $veriler4 as $veri4 ) {	echo $veri4->mahalleAdi; }
 ?>
 <?php
	 }
	 ?>
                      
                      </STRONG> ( �lan �D: <?php echo temizle($_GET["oid"]); ?> ) <!--- <br>
	
	Sat�l�k Arsa, Aksaray, Merkez, Merkez	 ---></FONT></TD></TR></TBODY></TABLE>
                  <HR>
                  <FONT face=Verdana>Gayrimenkul&uuml;n&uuml;z&uuml;n Daha Kolayve H�zl� Al�c� 
                  Bulmas�n� ve &Ouml;n Planda Olmas�n� �stiyorsan�z Ana Sayfa Vitrin 
                  B&ouml;l&uuml;m&uuml;nde ve Arama Sonu&ccedil;lar�nda �lan�n�z�n "Y�ld�z" &Ouml;zel 
                  ��areti �le Yay�nlatabilirsiniz.<BR><BR>
                  <STRONG><?php echo $site; ?> 
                  Vitrin Avantajlar�</STRONG><BR>
<LI type=square>G&ouml;r&uuml;nt&uuml;lenme Oran� Y&uuml;ksekli�i<BR>
                  <LI type=square>�lanlar�n <?php echo $site; ?> &Uuml;st K�s�mda D&ouml;n&uuml;�&uuml;ml&uuml; 
                  Yay�nlama Olana��<BR>
                  <LI type=square>�lanlar�n <?php echo $site; ?> Alt K�s�mda D&ouml;n&uuml;�&uuml;ml&uuml; 
                  Yay�nlama Olana��<BR>
                  <LI type=square><?php echo $site; ?> Toplu Vitrin Listesinde Yer Alma<BR>
                  <LI type=square>Arama Sonu&ccedil;lar�n�n �lk S�rada Yer 
                  Alma<BR><BR>Vitrindeki �lanlar, Anasayfada Yay�nlan�r ve G&uuml;n 
                  �&ccedil;erisinde Vitrin B&ouml;l&uuml;m&uuml;nde Yer Al�r. Vitrin B&ouml;l&uuml;m&uuml; Daha &Ccedil;ok 
                  G&ouml;r&uuml;nt&uuml;lenece�inden �lan�n�za Daha H�zl� Al�c� Bularak Kolay 
                  Sat�� Yapabilirsiniz.<BR><BR></FONT>
                  <DIV align=center><FONT color=#cc0000 
                  face=Verdana><STRONG>Sizde �lan�n�z�n Vitrin Listesinde Yer 
                  Almas�n� �stiyorsan�z<BR>�stedi�iniz S&uuml;reyi Se&ccedil;erek &Ouml;demenizi 
                  Onaylay�n�z. </STRONG></FONT></DIV><BR>
                  <FORM method=post name=ccpayment action="">
                  <INPUT value=topilanok type=hidden name=action> 
                  <INPUT value=dopayment type=hidden name=subaction> 
                  <INPUT value=<?php echo temizle($_GET["oid"]); ?> type=hidden name=oid> 
                  <TABLE border=0 cellSpacing=2 cellPadding=2 align=center>
                    <TBODY>
                    <TR>
                      <TD vAlign=top>
                        <DIV align=right><IMG border=0 alt="" 
                        src="tema/img/pu.gif" 
                        width=16 height=11></DIV></TD>
                      <TD bgColor=#ffffff><FONT color=#cc0000 
                        face=Verdana><STRONG>�stedi�iniz Vitrin Paketini 
                        Se&ccedil;iniz</STRONG></FONT></TD></TR>
                    <TR>
                      <TD bgColor=#dedede vAlign=top>
                        <DIV align=right><INPUT id=1 value=7 CHECKED type=radio 
                        name=art>&nbsp;</DIV></TD>
                      <TD bgColor=#ffffff><LABEL for=1><STRONG>7 G&uuml;nl&uuml;k 
                        <?php echo $site; ?> Vitrin Paketi</STRONG><BR>10.00 TL ( KDV Dahil 
                        )</LABEL></TD></TR>
                    <TR>
                      <TD bgColor=#dedede vAlign=top>
                        <DIV align=right><INPUT id=2 value=14 type=radio 
                        name=art>&nbsp;</DIV></TD>
                      <TD bgColor=#ffffff><LABEL for=2><STRONG>14 G&uuml;nl&uuml;k 
                        <?php echo $site; ?> Vitrin Paketi</STRONG><BR>20.00 TL ( KDV Dahil 
                        )</LABEL></TD></TR>
                    <TR>
                      <TD bgColor=#dedede vAlign=top>
                        <DIV align=right><INPUT id=3 value=30 type=radio 
                        name=art>&nbsp;</DIV></TD>
                      <TD bgColor=#ffffff><LABEL for=3><STRONG>30 G&uuml;nl&uuml;k 
                        <?php echo $site; ?> Vitrin Paketi</STRONG><BR>30.00 TL ( KDV Dahil 
                        )</LABEL></TD></TR>
                    <TR>
                      <TD bgColor=#dedede vAlign=top>
                        <DIV align=right><INPUT id=5 value=60 type=radio 
                        name=art>&nbsp;</DIV></TD>
                      <TD bgColor=#ffffff><LABEL for=5><STRONG>60 G&uuml;nl&uuml;k 
                        <?php echo $site; ?> Vitrin Paketi</STRONG><BR>50.00 TL ( KDV Dahil 
                        )</LABEL></TD></TR>
                    <TR>
                      <TD>&nbsp;</TD>
                      <TD>&nbsp;</TD></TR>
                    <TR>
                      <!--<TD bgColor=#dedede>
                        <DIV align=right><STRONG>Kredi Kart� 
                        Sahibi:</STRONG>&nbsp;&nbsp;</DIV></TD>
                      <TD bgColor=#ffffff><INPUT maxLength=50 
                    name=realname></TD></TR>
                    <TR>
                      <TD bgColor=#dedede>
                        <DIV align=right><STRONG>Kredi Kart� 
                        No:</STRONG>&nbsp;&nbsp;</DIV></TD>
                      <TD bgColor=#ffffff><INPUT maxLength=16 
                    name=ccnummer></TD></TR>
                    <TR>
                      <TD bgColor=#dedede noWrap>
                        <DIV align=right><STRONG>Son Kullanma 
                        Tarihi:</STRONG>&nbsp;&nbsp;</DIV></TD>
                      <TD bgColor=#ffffff><SELECT name=ccmonat> 
                      	  <OPTION selected value=1>1</OPTION> 
                      	  <OPTION value=2>2</OPTION> 
                          <OPTION value=3>3</OPTION> 
                          <OPTION value=4>4</OPTION> 
                          <OPTION value=5>5</OPTION> 
                          <OPTION value=6>6</OPTION> 
                          <OPTION value=7>7</OPTION> 
                          <OPTION value=8>8</OPTION> 
                          <OPTION value=9>9</OPTION> 
                          <OPTION value=10>10</OPTION> 
                          <OPTION value=11>11</OPTION> 
                          <OPTION value=12>12</OPTION>
                          </SELECT> <SELECT 
                        name=ccjahr> <OPTION selected value=2010>2010</OPTION> 
                          <OPTION value=2011>2011</OPTION> <OPTION 
                          value=2012>2012</OPTION> <OPTION 
                          value=2013>2013</OPTION> <OPTION 
                          value=2014>2014</OPTION> <OPTION 
                          value=2015>2015</OPTION> <OPTION 
                          value=2016>2016</OPTION> <OPTION 
                          value=2017>2017</OPTION> <OPTION 
                          value=2018>2018</OPTION></SELECT> </TD></TR>
                    <TR>
                      <TD bgColor=#dedede vAlign=top>
                        <DIV align=right><STRONG>G&uuml;venlik 
                        Kodu:</STRONG>&nbsp;&nbsp;</DIV></TD>
                      <TD bgColor=#ffffff><INPUT maxLength=3 size=5 
                        name=cccheck><BR>( Kredi Kart�n Arka K�sm�nda Bulunan 3 
                        Haneli Rakam )<BR><IMG border=0 alt="" 
                        src="tema/img/cvc-visa.gif" 
                        width=170 height=106> </TD> --></TR>
                    <TR>
                      <TD colSpan=2 align=middle><BR><INPUT value="�demeyi Onayla" type=submit name=submitbtnpayment><BR>L&uuml;tfen 
                        Sadece 1 Kez T�klay�n�z. </TD></TR></TBODY></TABLE></FORM>
                  <DIV align=center><STRONG>�nternet Kullan�m�na A&ccedil;�k T&uuml;m Kredi 
                  Kartlar� 
            Ge&ccedil;erlidir.</STRONG><BR><BR></DIV></LI></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>