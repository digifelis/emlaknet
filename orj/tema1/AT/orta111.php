
<div id="sol">
<div id="ana_ikili">
<table width="98%" border="0">
  <tr>
    <td width="68%" align="left" valign="top">
    
   <div id="detayli_anasayfa">
        <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">


<table width="98%" height="195" border="0">
  <tr>
    <td width="31%" rowspan="2" align="left" valign="top"><img src="tema1/img/yok.jpg" width="194" height="186" alt="emlaknet.net" /></td>
    <td colspan="2">
     <div class="commentbox">
T&Uuml;RK&#304;YE'N&#304;N
EN &#304;&#350;LEVSEL VE  ARADI&#286;INIZI HEMEN S&#304;ZE VEREN EMLAK S&#304;TES&#304;NE HO&#350; GELD&#304;N&#304;Z.<br />
&Uuml;CRETS&#304;Z &Uuml;YEL&#304;K VE EMLAK EKLEME &#304;MKANLARI &#304;&Ccedil;&#304;N UYGUN &Uuml;YEL&#304;K T&#304;P&#304;N&#304; SE&Ccedil;EREK SE&Ccedil;K&#304;N &Uuml;YELER&#304;M&#304;Z ARASINDAK&#304; YER&#304;N&#304;Z&#304; ALIN.
</div>
<div class="commentfooter">Emlaknet.net Y&ouml;netimi</div> 
    
    </td>
    </tr>
  <tr>
    <td width="36%"><div class="uyelik">
    <a href="index.php?action=yeni_emlakci">
   
    <img src="tema1/img/tus1.JPG" width="169" height="45" border="0" />    </a>
    </div>
    

    
    </td>
    <td width="33%">
    
    
    
    
    <div class="uyelik"><a href="index.php?action=yeniuye">
    
    <img src="tema1/img/tus2.JPG" width="169" height="45" border="0" />    </a></div>
    
    
    
    </td>
  </tr>
</table>




</div>
</div>
</div>
        </div> 
    
    
   <div id="hizli_ara_anasayfa">
                 <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">
<!--hyzly arama bölümü ba?alngyç -->
<table width="98%" border="0" cellpadding="5" cellspacing="0">

  <tr align="center" valign="middle">
    <td valign="top">
      <!-- @Start : Konut -->
      <DIV class="realType h100 float marRight10px h150px">
        <TABLE width=194>
          <TBODY>
            <TR>
              <TD class=padLeft10px width=70><IMG src="tema1/img/konut.jpg" width="50" height="50" 
            align=center class=pointer "></TD>
              <TD><SPAN id=title_green class=pointer "><B>KONUT</B></SPAN></TD></TR></TBODY></TABLE><IMG 
      src="tema1/img/line_green_173px.gif"> 
        <UL class=advertise_list>
          <LI><IMG src="tema1/img/arrow_green.gif"> <A 
        href="index.php?action=arama&tip=1&grup=1&liste=1">Sat&#305;l&#305;k</A>
        
        <?php 
		/* select count(ilan_ticari.id)  from ilan_ticari where ilan_ticari.ilan_tipi_id between 1 and 9 and ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '1' and '9' and ilan_grup='1' and  onay != '1' and onay !='3' ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
         
            <LI><IMG src="tema1/img/arrow_green.gif"> <A 
        href="index.php?action=arama&tip=0&grup=1&liste=1">Kiral&#305;k</A> 
        <?php 
		/* select count(ilan_ticari.id)  from ilan_ticari where ilan_ticari.ilan_tipi_id between 10 and 19 and ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '10' and '19' and ilan_grup='1' and  onay != '1' and onay !='3' ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
              <LI><IMG src="tema1/img/arrow_green.gif"> <A 
        href="index.php?action=arama&grup=1&liste=1">Tüm 
                Konutlar</A>  
                 <?php 
				 /* select count(ilan_ticari.id)  from ilan_ticari where  ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='1' and  onay != '1' and onay !='3'  ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>         
                </UL><IMG class="marTop10px marBottom10px" 
      src="tema1/img/line_greenbar_173px.gif"> </DIV><!-- @Start : Ticari -->
      
      </td>
    <td valign="top">
      <!-- @Start : Ticari -->
      <DIV class="realType h100 float marRight10px h150px">
        <TABLE width=190>
          <TBODY>
            <TR>
              <TD class=padLeft10px width=70><IMG src="tema1/img/main_ev2.jpg" width="50" height="50" 
            align=center class=pointer 
            "></TD>
              <TD><SPAN id=title_blue class=pointer 
            "><B>T&#304;CARI</B></SPAN></TD></TR></TBODY></TABLE><IMG 
      class="marTop10px marBottom10px" 
      src="tema1/img/line_blue_173px.gif"> 
        <UL class=advertise_list>
          <LI><IMG src="tema1/img/arrow_blue.gif"> <A 
        href="index.php?action=arama&amp;tip=1&amp;grup=2&amp;liste=1">Sat&#305;l&#305;k</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '34' and '56' and ilan_grup='2' and  onay != '1' and onay !='3' ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
            <LI><IMG src="tema1/img/arrow_blue.gif"> <A 
        href="index.php?action=arama&amp;tip=0&amp;grup=2&amp;liste=1">Kiral&#305;k</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '57' and '79' and ilan_grup='2' and  onay != '1' and onay !='3'  ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
              <LI><IMG src="tema1/img/arrow_blue.gif"> <A 
        href="index.php?action=arama&amp;grup=2&amp;liste=1">T&uuml;m Ticari</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='2' and  onay != '1' and onay !='3'  ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?> 
               </UL><IMG class="marTop10px marBottom10px" 
      src="tema1/img/line_bluebar_173px.gif">
      </DIV>
      <!-- @Start : Yeni Projeler -->
      
      </td>
    <td valign="top">
      
      
      <DIV 
      style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BORDER-TOP: medium none; BORDER-RIGHT: medium none" 
      class="realType h100 float marRight5px h150px">
        <TABLE width=193>
          <TBODY>
            <TR>
              <TD class=padLeft10px width=70><IMG src="tema1/img/main_ev3.jpg" width="50" height="50" 
            align=center class=pointer 
           "></TD>
              <TD><SPAN id=title_orange class=pointer 
            "><B>ARSA</B></SPAN></TD></TR></TBODY></TABLE><IMG 
      class="marTop10px marBottom10px" 
      src="tema1/img/line_yellow_173px.gif"> 
        <UL class=advertise_list>
          <LI><IMG src="tema1/img/arrow_yellow.gif"> <A 
        href="index.php?action=arama&amp;tip=1&amp;grup=3&amp;liste=1">Sat&#305;l&#305;k</A>
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '20' and '27' and ilan_grup='3'  and  onay != '1' and onay !='3'  ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
            <LI><IMG src="tema1/img/arrow_yellow.gif"> <A 
        style="LETTER-SPACING: 0.05em" 
        href="index.php?action=arama&amp;tip=0&amp;grup=3&amp;liste=1">Kiral&#305;k</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '28' and '33' and ilan_grup='3' and  onay != '1' and onay !='3'   ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
              <LI><IMG src="tema1/img/arrow_yellow.gif"> <A 
        href="index.php?action=arama&amp;grup=3&amp;liste=1">T&uuml;m Arsalar</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='3'  and  onay != '1' and onay !='3'   ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>    
               
             </UL><IMG class="marTop10px marBottom10px" 
      src="tema1/img/line_yellowbar_173px.gif">
      </DIV>
      
      </td>
  </tr>

</table>
 </div>
</div>
</div>
        </div> 
   
   
   <div id="vitirin_anasayfa">
                 <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">
<!--vitrin ilanlar ba?alngycy -->

<TABLE border=0 cellSpacing=0 cellPadding=0 width="98%" 
            align=center>
              <TBODY>
                            <TR>
                <TD colspan="4" align="left" vAlign=top>
                
                   <div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag"><br />
        V&#304;TR&#304;N &#304;LANLAR</div>
      </div>   
                
                
      
      
      </TD>
                </TR>
              <TR>
                <TD vAlign=top width="20%">
                
                <?php 
$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 0,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor(30);
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                 
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR>
     
                      <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>
                        
                      <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>"><?php echo $ilan_basligi; ?></A><BR>
                       <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>                  
                        
                        
                        
                        
  <?php 
$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 4,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor(30);
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                        
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>">
                       <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>
                        
                        <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><?php echo $ilan_basligi; ?></A><BR>
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>  </TD>
                <TD vAlign=top width="20%">
                  
                           <?php 
$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 1,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor(30);
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>             
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>">
                       <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>
                        
                        <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><?php echo $ilan_basligi; ?></A><BR>
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>  
                  
                  
         
                          <?php 
$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 5,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor(30);
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                     
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>">
                      <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>
                        
                        <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><?php echo $ilan_basligi; ?></A><BR>
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>  </TD>
                <TD vAlign=top width="20%">
                           <?php 
$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 2,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor(30);
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>           
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>">
                      <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>
                        
                        <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><?php echo $ilan_basligi; ?></A><BR>
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>  
                         <?php 
$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 6,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor(30);
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>           
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>">
                      <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>
                        
                        <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><?php echo $ilan_basligi; ?></A><BR>
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>  </TD>
                <TD vAlign=top width="20%">
                
                
                
                
              <?php 
$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 3,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor(30);
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                  
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>">
                      <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>
                        
                        <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><?php echo $ilan_basligi; ?></A><BR>
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>     
                
   <?php 
$vt->sql("SELECT * FROM ilan_ticari where onay='4' ORDER BY RAND() LIMIT 7,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
$ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_ilce = $vt->alTek();

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and ilceID="'.$veri->ilce.'" and sehirID="'.$veri->il.'"    ')->sor(30);
$ilan_koy = $vt->alTek();

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>                        
                
                  <TABLE width="98%" border=0 
                  align=center cellPadding=2 cellSpacing=2 class="ana_ilan">
                    <TBODY>
                    <TR>
                      <TD 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height=120 vAlign=top>
                        <DIV align=center class="xfreex"><IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><A 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&id=<?php echo $veri->id; ?>">
                      <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>
                        
                        <IMG border=0 alt="" 
                        src="tema/img/spacer.gif" width=1 
                        height=5><BR><?php echo $ilan_basligi; ?></A><BR>
                        <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><BR><IMG 
                        border=0 alt="" src="tema/img/spacer.gif" 
                        width=1 height=2></DIV></TD></TR></TBODY></TABLE><BR>
     <?php } ?>                 
                
                
                
                
                
                
                
                </TD>
              </TR>

              </TBODY>
</TABLE>





<!--vitrin ilanlar bitimi -->
</div>
</div>
</div></div>  
   
   
    
    </td>
    <td width="32%" align="left" valign="top">



   <!--hyzly arama bölümü ba?alngyç -->



<form action="" method="get">
<table width="100%" border="0">
 <tr>
   <th bgcolor="#D5D5D5">HIZLI &#304;LAN ARAMA</th></tr>
  <tr>
    <td width="89%"><br />
      Gayri Menkul T&uuml;r&uuml;<br />
  <select name="tur" id="tur">
    <?php 
$vt->sql('select * from ilan_tipi   where tip=1 and grup_id=1 ')->sor(30);
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('select * from ilan_tipi   where tip=0 and grup_id=1 ')->sor(30);
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('select * from ilan_tipi   where tip=1 and grup_id=2 ')->sor(30);
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('select * from ilan_tipi   where tip=0 and grup_id=2 ')->sor(30);
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('select * from ilan_tipi   where tip=1 and grup_id=3 ')->sor(30);
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('select * from ilan_tipi   where tip=0 and grup_id=3 ')->sor(30);
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }
 ?>
  </select>
    </td>
    </tr>
  <tr>
    <td>IL<br />
  <select name="iller" id="iller" size="1" onchange="ilceleri_getir();"  />
      <option value="">Il seçiniz</option>
      <?php
  $vt->sql("select * from sehir  order by sehiradiUpper ASC")->sor(30);
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
	  echo '<option value="'.$veri->sehirID.'">'.$veri->sehiradiUpper.'</option>';
  }
  ?>
      </select> </td>
    </tr>
  <tr>
    <td>IL&Ccedil;E<br />
  <select name="ilceler" id="ilceler" size="1" onchange="koyleri_getir();" />
  <option value="">Ilçe Seçiniz</option>
  </select></td>
    </tr>
  <tr>
    <td>SEMT/K&Ouml;Y<br />
      <select name="koyler" id="koyler" size="1" />
  <option value="">Semt-Köy seçiniz</option>
  </select>
      
      <input type=hidden  onClick="ilceleri_getir();"  />
      <input type=hidden onClick="koyleri_getir();"  />  </td>
    </tr>
  
  <tr>
    <td>F&#304;YAT ARALIGI<br />
      <input name="action" type="hidden" id="action" value="arama" />
  <input name="fiyat_alt" type="text"  id="fiyat_alt" onKeyPress="return numbersonly(this, event)" size="10" maxlength="10" />
      <input name="fiyat_ust" type="text"  id="fiyat_ust" onKeyPress="return numbersonly(this, event)" size="10" maxlength="10" />
      <select name="birim" id="birim">
        <option value="1" selected="selected">TL</option>
        <option value="2">Euro</option>
        <option value="3">USD</option>
        <option value="4">GBP</option>
        </select>
    </td>
    </tr>
  <tr>
    <td><TABLE border=0 cellSpacing=0 cellPadding=0>
      <TBODY>
        <TR>
          <TD colSpan=2><FONT color=#006600 
                        size=2><STRONG>Listeleme T&uuml;r&uuml;:</STRONG></FONT></TD>
          </TR>
        <TR>
          <TD><INPUT id=L1 value=1 CHECKED type=radio 
                      name=liste></TD>
          <TD><LABEL for=L1>Detayli Liste</LABEL></TD>
          </TR>
        <TR>
          <TD><INPUT id=L3 value=3 type=radio name=liste></TD>
          <TD><LABEL for=L3>Kisa 
            Liste</LABEL></TD>
          </TR>
        </TBODY>
    </TABLE></td>
    </tr>
  <tr>
    <td><table border="0" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td colspan="2"><font color="#006600" size="2"><strong>&#304;lan 
            Sahibi:</strong></font></td>
          </tr>
        <tr>
          <td><input id="user0" value="0" checked="checked" type="radio" 
                      name="user" /></td>
          <td><label for="user0">Farketmez</label></td>
          </tr>
        <tr>
          <td><input id="user1" value="2" type="radio" name="user" /></td>
          <td><label for="user1">Sahibinden</label></td>
          </tr>
        <tr>
          <td><input id="user2" value="1" type="radio" name="user" /></td>
          <td><label for="user2">Emlakc&#305;dan</label></td>
          </tr>
        </tbody>
    </table></td>
    </tr>
  <tr>
    <td><table border="0" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td colspan="2"><font color="#006600" 
                        size="2"><strong>Foto&#287;raf:</strong></font></td>
          </tr>
        <tr>
          <td><input id="0" value="0" checked="checked" type="radio" 
name="resim" /></td>
          <td><label for="0">Farketmez</label></td>
          </tr>
        <tr>
          <td><input id="1" value="1" type="radio" name="resim" /></td>
          <td><label for="1">Foto&#287;rafl&#305;</label></td>
          </tr>
        <tr>
          <td><input id="2" value="2" type="radio" name="resim" /></td>
          <td><label 
                for="2">Foto&#287;rafs&#305;z</label></td>
          </tr>
        </tbody>
    </table></td>
    </tr>
    <tr>
    <td align="left"><table width="100%" border="0">
      <tr>
        <td colspan="4">&nbsp;<FONT color=#006600 
                        size=2><STRONG>Siralama Türü:</STRONG></FONT></td>
        </tr>
      <tr>
        <td><INPUT id=sira1 value=1 CHECKED type=radio 
                      name=sira></td>
        <td nowrap="nowrap"><LABEL for=sira1>En Düsük Fiyata Göre</LABEL></td>
        <td nowrap="nowrap">&nbsp;</td>
        <td width="40" nowrap="nowrap">&nbsp;&nbsp;</td>
        </tr>
      <tr>
        <TD><INPUT id=sira3 value=2 type=radio name=sira></TD>
        <TD nowrap="nowrap"><LABEL for=sira3>En Yüksek Fiyata Göre</LABEL></TD>
        <TD nowrap="nowrap">&nbsp;</TD>
        <TD nowrap="nowrap">&nbsp;</TD>
        </tr>
      <tr>
        <TD><INPUT id=sira5 value=3 type=radio name=sira></TD>
        <TD nowrap="nowrap"><LABEL for=sira5>Yeni Ilan Tarihe Göre</LABEL></TD>
        <TD nowrap="nowrap">&nbsp;</TD>
        <TD nowrap="nowrap">&nbsp;</TD>
        </tr>
      <tr>
        <TD><INPUT id=sira6 value=4 type=radio name=sira></TD>
        <TD nowrap="nowrap"><LABEL for=sira6>Eski Ilan Tarihe 
          Göre</LABEL></TD>
        <TD nowrap="nowrap">&nbsp;</TD>
        <TD nowrap="nowrap">&nbsp;</TD>
        </tr>
    </table></td>
    </tr>
    <tr>
    <td>
    
    <table width="100%" border="0">
  <tr>
    <td nowrap="nowrap"><label>&#304;lan No</label></td>
    <td width="10"><label>
      <input name="ilan_no" type="text" id="ilan_no" onKeyPress="return numbersonly(this, event)" size="20" />
    </label></td>
  </tr>
</table>

 </td>
    </tr>
  <tr>
    <td>
    
    <input type="image" src="tema1/img/hizliara.JPG" name="image" width="160" height="30">
    
    </td>
    </tr>
  <tr>
    <td>
    <a href="?action=ayrintili&amp;grup=1"><br />
    <img src="tema1/img/konut_detay.JPG" width="189" height="27" border="0" /></a><br />
      <br />
        <a href="?action=ayrintili&amp;grup=2"><img src="tema1/img/isyeri_detay.JPG" width="189" height="27" border="0" /></a><br />
        <br />
        <a href="?action=ayrintili&amp;grup=3"><img src="tema1/img/arsa_detay.JPG" width="189" height="27" border="0" /></a>
        </td>
  </tr>
</table>
</form>

  <!--hyzly arama biti? -->




   </td>
  </tr>
</table>





        
        
        
        
         
        
        
</div>

        <div id="yeniler">
                <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">
  <table width="100%" border="0">
    <tr>
      <td><table border="0" cellspacing="0" cellpadding="0" width="100%" 
            align="center">
        <tbody>
          <tr>
            <td colspan="5" align="left" valign="top"><div class="baslik">
              <div class="baslik_sol"></div>
              <div class="baslik_sag"><br />
                YEN&#304; &#304;LANLAR</div>
            </div></td>
          </tr>
          <tr>
            <td valign="top" width="20%">
			<?php 
$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 0,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
              <table border="0" cellspacing="2" cellpadding="2" width="98%" 
                  align="center">
                <tbody>
                  <tr>
                    <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                      <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
                      
 <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>                     

                        <img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                        <?php echo $ilan_basligi; ?></a><br />
                      <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                      <img 
                        border="0" alt="" src="tema/img/spacer.gif" 
                        width="1" height="2" /></div></td>
                  </tr>
                </tbody>
              </table>
              <br />
              <?php } ?>
            			<?php 
$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 5,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
              <table border="0" cellspacing="2" cellpadding="2" width="98%" 
                  align="center">
                <tbody>
                  <tr>
                    <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                      <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
 <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>  
                        <img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                        <?php echo $ilan_basligi; ?></a><br />
                      <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                      <img 
                        border="0" alt="" src="tema/img/spacer.gif" 
                        width="1" height="2" /></div></td>
                  </tr>
                </tbody>
              </table>
              <br />
              <?php } ?></td>
            <td valign="top" width="20%">
						<?php 
$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 1,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
              <table border="0" cellspacing="2" cellpadding="2" width="98%" 
                  align="center">
                <tbody>
                  <tr>
                    <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                      <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
 <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>  
                        <img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                        <?php echo $ilan_basligi; ?></a><br />
                      <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                      <img 
                        border="0" alt="" src="tema/img/spacer.gif" 
                        width="1" height="2" /></div></td>
                  </tr>
                </tbody>
              </table>
              <br />
              <?php } ?>
             			<?php 
$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 6,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
              <table border="0" cellspacing="2" cellpadding="2" width="98%" 
                  align="center">
                <tbody>
                  <tr>
                    <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                      <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
 <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>  
                        <img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                        <?php echo $ilan_basligi; ?></a><br />
                      <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                      <img 
                        border="0" alt="" src="tema/img/spacer.gif" 
                        width="1" height="2" /></div></td>
                  </tr>
                </tbody>
              </table>
              <br />
              <?php } ?></td>
            <td valign="top" width="20%">
						<?php 
$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 2,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
              <table border="0" cellspacing="2" cellpadding="2" width="98%" 
                  align="center">
                <tbody>
                  <tr>
                    <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                      <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
 <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>  
                        <img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                        <?php echo $ilan_basligi; ?></a><br />
                      <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                      <img 
                        border="0" alt="" src="tema/img/spacer.gif" 
                        width="1" height="2" /></div></td>
                  </tr>
                </tbody>
              </table>
              <br />
              <?php } ?>
             			<?php 
$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 7,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
              <table border="0" cellspacing="2" cellpadding="2" width="98%" 
                  align="center">
                <tbody>
                  <tr>
                    <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                      <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
 <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>  
                        <img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                        <?php echo $ilan_basligi; ?></a><br />
                      <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                      <img 
                        border="0" alt="" src="tema/img/spacer.gif" 
                        width="1" height="2" /></div></td>
                  </tr>
                </tbody>
              </table>
              <br />
              <?php } ?></td>
            <td valign="top" width="20%">
						<?php 
$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 3,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
              <table border="0" cellspacing="2" cellpadding="2" width="98%" 
                  align="center">
                <tbody>
                  <tr>
                    <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                      <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
 <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>  
                        <img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                        <?php echo $ilan_basligi; ?></a><br />
                      <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                      <img 
                        border="0" alt="" src="tema/img/spacer.gif" 
                        width="1" height="2" /></div></td>
                  </tr>
                </tbody>
              </table>
              <br />
              <?php } ?>
             			<?php 
$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 8,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
              <table border="0" cellspacing="2" cellpadding="2" width="98%" 
                  align="center">
                <tbody>
                  <tr>
                    <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                      <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
 <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>  
                        <img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                        <?php echo $ilan_basligi; ?></a><br />
                      <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                      <img 
                        border="0" alt="" src="tema/img/spacer.gif" 
                        width="1" height="2" /></div></td>
                  </tr>
                </tbody>
              </table>
              <br />
              <?php } ?></td>
            <td align="left" valign="top">
						<?php 
$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 4,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
              <table border="0" cellspacing="2" cellpadding="2" width="98%" 
                  align="center">
                <tbody>
                  <tr>
                    <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                      <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
 <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>  
                        <img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                        <?php echo $ilan_basligi; ?></a><br />
                      <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                      <img 
                        border="0" alt="" src="tema/img/spacer.gif" 
                        width="1" height="2" /></div></td>
                  </tr>
                </tbody>
              </table>
              <br />
              <?php } ?>
             			<?php 
$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 9,1")->sor(30);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 

 $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor(30);
 $ilan_tipi = $vt->alTek(); 

$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor(30);
$ilan_il = $vt->alTek(); 

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_ilce = $vt->alTek(); 

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'" and  sehirID="'.$veri->il.'"  ')->sor(30);
$ilan_koy = $vt->alTek(); 

$ilan_basligi = $ilan_tipi."<br>".$ilan_il."<br>".$ilan_ilce."<br>".$ilan_koy;
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
 ?>
              <table border="0" cellspacing="2" cellpadding="2" width="98%" 
                  align="center">
                <tbody>
                  <tr>
                    <td 
                      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                      height="120" valign="top"><div align="center" class="xfreex"><img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                      <a 
                        title="<?php echo $ilan_basligi; ?>" 
                        href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>">
 <?php
$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(30);
$foto_adi = $vt->alTek();

					  if($foto_adi == "") {
echo '<img border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75"><br>';
						  } else {
echo ' <IMG border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"><BR>'; 
						 }
						  ?>  
                        <img border="0" alt="" 
                        src="tema/img/spacer.gif" width="1" 
                        height="5" /><br />
                        <?php echo $ilan_basligi; ?></a><br />
                      <?php echo ondalik($veri->fiyat)."&nbsp;".$birim; ?><br />
                      <img 
                        border="0" alt="" src="tema/img/spacer.gif" 
                        width="1" height="2" /></div></td>
                  </tr>
                </tbody>
              </table>
              <br />
              <?php } ?></td>
          </tr>
        </tbody>
      </table></td>
      <td width="205"><table width="100%" border="0">
        <tr>
          <td>
          
      <script type="text/javascript"><!--
google_ad_client = "pub-8437298364479884";
/* 200x200, olusturulma 04.06.2010 */
google_ad_slot = "4643454111";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>   
    <br />      
   <script type="text/javascript"><!--
google_ad_client = "pub-8437298364479884";
/* 180x150, olusturulma 04.06.2010 */
google_ad_slot = "4769639280";
google_ad_width = 180;
google_ad_height = 150;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>       
          
          </td>
        </tr>
      </table></td>
    </tr>
  </table>
<!--en yeniler bölüm ba?langycy -->
<!--en yeniler bölüm biti?i -->
</div>
</div>
</div>
        </div>
   <br /><br />     
        <div id="turler_anasayfa">
          <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">


<table width="98%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5" align="left">
                               <div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag"><br />
        &#304;LAN KATEGOR&#304;S&#304;</div>
      </div>
    
   
      
      </td>
    </tr>
    <tr>
      <th colspan="5"><strong>&Ouml;zel / Konut Gayrimenkul   &#304;lanlar&#305;</strong></th></tr>
  <tr>
    <td align="left" valign="top" nowrap="nowrap">
      
     <?php 
 $vt->sql("select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =1 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=1  group by ilan_tipi.adi limit 0,5  ")->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>
     
 
            </td>
    <td align="left" valign="top" nowrap="nowrap">
    
     <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =1 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=1  group by ilan_tipi.adi limit 5,5  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>
    
    </td>
    <td align="left" valign="top" nowrap="nowrap">
    
     <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =1 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=0 and ilan_tipi.grup_id=1  group by ilan_tipi.adi limit 0,5  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>
    
    
    </td>
    <td align="left" valign="top" nowrap="nowrap">
    
     <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =1 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=0 and ilan_tipi.grup_id=1  group by ilan_tipi.adi limit 5,5  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>
    
    
    </td>
    <td align="left" valign="top" nowrap="nowrap">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="5" align="left" valign="top"><hr /></td>
    </tr>
  <tr>
    <th colspan="5" valign="top"><strong>Ticari / &#304;&#351;yeri Gayrimenkul</strong></th>
    </tr>
  <tr>
    <td align="left" valign="top" nowrap="nowrap">
     <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =2 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=2  group by ilan_tipi.adi limit 0,10  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>    

    
    </td>
    <td align="left" valign="top" nowrap="nowrap">
    
     <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =2 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=2  group by ilan_tipi.adi limit 10,10  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?> 
 
    
    </td>
    <td align="left" valign="top" nowrap="nowrap">
     <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =2 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=1 and ilan_tipi.grup_id=2  group by ilan_tipi.adi limit 20,10  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?>     
  
       <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup =2 and ilan_ticari.onay != 1 and ilan_ticari.onay != 3 and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip=0 and ilan_tipi.grup_id=2  group by ilan_tipi.adi limit 0,8  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?> 
       

    
    </td>
    <td align="left" valign="top" nowrap="nowrap">
    
       <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="2" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="0" and ilan_tipi.grup_id="2"  group by ilan_tipi.adi limit 8,10  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?> 
   
    
    </td>
    <td align="left" valign="top" nowrap="nowrap">
        <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="2" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="0" and ilan_tipi.grup_id="2"  group by ilan_tipi.adi limit 18,10  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?> 
      

    
    
    </td>
  </tr>
  <tr>
    <td colspan="5" align="left" valign="top"><hr /></td>
    </tr>
  <tr>
    <th colspan="5" valign="top"><strong>Arsa / Arazi   &#304;lanlar&#305;</strong></th>
    </tr>
  <tr>
    <td align="left" valign="top" nowrap="nowrap">
        <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="1" and ilan_tipi.grup_id="3"  group by ilan_tipi.adi limit 0,3  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?> 
      
   
    
    </td>
    <td align="left" valign="top" nowrap="nowrap">
    
        <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="1" and ilan_tipi.grup_id="3"  group by ilan_tipi.adi limit 3,3  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?> 
  
    
    </td>
    <td align="left" valign="top" nowrap="nowrap">
    
        <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="1" and ilan_tipi.grup_id=3  group by ilan_tipi.adi limit 6,3  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?> 
  
    
    </td>
    <td align="left" valign="top" nowrap="nowrap">   
    
          <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="0" and ilan_tipi.grup_id="3"  group by ilan_tipi.adi limit 0,3  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?> 
    
    
</td>
    <td align="left" valign="top" nowrap="nowrap">              <?php 
 $vt->sql('select ilan_tipi.adi , ilan_tipi.id , (select count(ilan_ticari.id) from ilan_ticari where ilan_ticari.ilan_grup ="3" and ilan_ticari.onay != "1" and ilan_ticari.onay != "3" and ilan_ticari.ilan_tipi_id=ilan_tipi.id) as sayi  from ilan_tipi , ilan_ticari where ilan_tipi.tip="0" and ilan_tipi.grup_id="3"  group by ilan_tipi.adi limit 3,5  ')->sor(30);
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
echo ' 
<li><A class=f2  href="index.php?action=arama&amp;tur='.$veri->id.'&liste=1">'.$veri->adi.'</A>&nbsp;('.$veri->sayi.')</li>
	';
}
 ?> </td>
  </tr>
  <tr>
    <td colspan="5" align="left" valign="top" nowrap="nowrap"><hr /></td>
    </tr>
</table>





</div>
</div>
</div>
 
        </div>
 <br /><br />       
 <div id="emlakcilar">
          <div class="shiftcontainer">
<div class="shadowcontainer">
<div class="innerdiv">

<table width="98%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" align="left">
    
                           <div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag"><br />
        EMLAK&Ccedil;ILAR</div>
      </div>   
    
    
      </td>
    </tr>
  <tr>
    <td>
    <?php
	
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1' and ilan_ticari.uye_id = uyeler.id group by uyeler.id ORDER BY RAND() LIMIT 0,10  ")->sor(30);
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a  href="http://'.$veri->temiz_ad.'.'.$site.'">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'&nbsp;('.$veri->sayi.')</li>';
	
	}
	
	?>

    </td>
    <td>    <?php 
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1' and ilan_ticari.uye_id = uyeler.id group by uyeler.id ORDER BY RAND() LIMIT 10,10  ")->sor(30);
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a  href="http://'.$veri->temiz_ad.'.'.$site.'">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'&nbsp;('.$veri->sayi.')</li>';
	}
	
	?></td>
    <td>    <?php 
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1' and ilan_ticari.uye_id = uyeler.id group by uyeler.id ORDER BY RAND() LIMIT 20,10   ")->sor(30);
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<li><a  href="http://'.$veri->temiz_ad.'.'.$site.'">'.$veri->sirket.'</a>&nbsp;'.$veri->sehiradiUpper.'&nbsp;('.$veri->sayi.')</li>';
	}
	
	?></td>
  </tr>
</table>




</div>
</div>
</div>
 
        </div>  
        
         
        
</div>
     