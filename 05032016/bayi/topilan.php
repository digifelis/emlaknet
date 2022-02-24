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
                  face=Verdana>Ýlanýnýzýn Ýzlenirliliðini 10 Kat Artýrýn 
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
                    <TR><!--- <td width="120"><img alt="Satýlýk Arsa - Aksaray Merkez" src="http://resim.emlak.net//x" border="0" width="100" height="75"></td> --->
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
                      
                      </STRONG> ( Ýlan ÝD: <?php echo temizle($_GET["oid"]); ?> ) <!--- <br>
	
	Satýlýk Arsa, Aksaray, Merkez, Merkez	 ---></FONT></TD></TR></TBODY></TABLE>
                  <HR>
                  <FONT face=Verdana>Gayrimenkul&uuml;n&uuml;z&uuml;n Daha Kolayve Hýzlý Alýcý 
                  Bulmasýný ve &Ouml;n Planda Olmasýný Ýstiyorsanýz Ana Sayfa Vitrin 
                  B&ouml;l&uuml;m&uuml;nde ve Arama Sonu&ccedil;larýnda Ýlanýnýzýn "Yýldýz" &Ouml;zel 
                  Ýþareti Ýle Yayýnlatabilirsiniz.<BR><BR>
                  <STRONG><?php echo $site; ?> 
                  Vitrin Avantajlarý</STRONG><BR>
<LI type=square>G&ouml;r&uuml;nt&uuml;lenme Oraný Y&uuml;ksekliði<BR>
                  <LI type=square>Ýlanlarýn <?php echo $site; ?> &Uuml;st Kýsýmda D&ouml;n&uuml;þ&uuml;ml&uuml; 
                  Yayýnlama Olanaðý<BR>
                  <LI type=square>Ýlanlarýn <?php echo $site; ?> Alt Kýsýmda D&ouml;n&uuml;þ&uuml;ml&uuml; 
                  Yayýnlama Olanaðý<BR>
                  <LI type=square><?php echo $site; ?> Toplu Vitrin Listesinde Yer Alma<BR>
                  <LI type=square>Arama Sonu&ccedil;larýnýn Ýlk Sýrada Yer 
                  Alma<BR><BR>Vitrindeki Ýlanlar, Anasayfada Yayýnlanýr ve G&uuml;n 
                  Ý&ccedil;erisinde Vitrin B&ouml;l&uuml;m&uuml;nde Yer Alýr. Vitrin B&ouml;l&uuml;m&uuml; Daha &Ccedil;ok 
                  G&ouml;r&uuml;nt&uuml;leneceðinden Ýlanýnýza Daha Hýzlý Alýcý Bularak Kolay 
                  Satýþ Yapabilirsiniz.<BR><BR></FONT>
                  <DIV align=center><FONT color=#cc0000 
                  face=Verdana><STRONG>Sizde Ýlanýnýzýn Vitrin Listesinde Yer 
                  Almasýný Ýstiyorsanýz<BR>Ýstediðiniz S&uuml;reyi Se&ccedil;erek &Ouml;demenizi 
                  Onaylayýnýz. </STRONG></FONT></DIV><BR>
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
                        face=Verdana><STRONG>Ýstediðiniz Vitrin Paketini 
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
                        <DIV align=right><STRONG>Kredi Kartý 
                        Sahibi:</STRONG>&nbsp;&nbsp;</DIV></TD>
                      <TD bgColor=#ffffff><INPUT maxLength=50 
                    name=realname></TD></TR>
                    <TR>
                      <TD bgColor=#dedede>
                        <DIV align=right><STRONG>Kredi Kartý 
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
                        name=cccheck><BR>( Kredi Kartýn Arka Kýsmýnda Bulunan 3 
                        Haneli Rakam )<BR><IMG border=0 alt="" 
                        src="tema/img/cvc-visa.gif" 
                        width=170 height=106> </TD> --></TR>
                    <TR>
                      <TD colSpan=2 align=middle><BR><INPUT value="Ödemeyi Onayla" type=submit name=submitbtnpayment><BR>L&uuml;tfen 
                        Sadece 1 Kez Týklayýnýz. </TD></TR></TBODY></TABLE></FORM>
                  <DIV align=center><STRONG>Ýnternet Kullanýmýna A&ccedil;ýk T&uuml;m Kredi 
                  Kartlarý 
            Ge&ccedil;erlidir.</STRONG><BR><BR></DIV></LI></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>