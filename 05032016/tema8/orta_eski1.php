 <div id="alt">
    	<div id="sol">
<div class="sol_item">
    <div class="sol_item_ust">&Uuml;YELÝK</div>
    <div class="sol_item_orta">   
        <form action="index.php?action=giris" method="post" style="margin-top:0px; margin-bottom:0px;">
            <p style="margin-top:10px; margin-bottom:0px;">Email :</p>
            <p style="margin-top:2px;"><input name="email" type="text" style="width:120px; height:16px;" /></p>
            <p style="margin-top:7px; margin-bottom:0px;">Þifre :</p>
            <p style="margin-top:2px;"><input name="password" type="password" style="width:120px; height:16px;" /></p>
            
             <p style="margin-top:10px; margin-bottom:0px;">G&uuml;venlik Kodu :</p>
            <p style="margin-top:2px;"><input name="kod" type="text" style="width:120px; height:16px;" /></p>
             <p style="margin-top:2px;"><label><img src="g_resim.php"></label></p>
            
            
            <p><input type="submit" value="Giriþ Yap" style="width:80px; line-height:22px; font-size:12px; background-color:#666; color:#FFF;" /></p>
        </form>
        <p style="margin-top:6px; float:left;"><a href="http://www.emlaknetturkiye.com/index.php?action=sifremi_unuttum">Þifremi unuttum</a></p>
        <p style="margin-top:6px; float:left; font-weight:bold;"><a href="index.php?action=uyeol" style="color:#66C;">&Uuml;CRETSÝZ &Uuml;YE OL</a></p>
    </div>
    <div class="sol_item_alt"></div>
</div>

<div class="sol_item">
	<div class="sol_item_ust">KATEGORÝLER</div>
	<div class="sol_item_orta">
    
    
    
    
     <!-- @Start : Konut -->
      <DIV class="realType h100 float marRight10px h150px">
        <TABLE width=194>
          <TBODY>
            <TR>
              <TD class=padLeft10px width=70><IMG src="tema8/res/konut.jpg" width="50" height="50" 
            align=center class=pointer "></TD>
              <TD><SPAN class=pointer stil29 id=title_green "><B>KONUT</B></SPAN></TD></TR></TBODY></TABLE><IMG 
      src="tema8/res/line_green_173px.gif" width="150"> 
        <UL class=advertise_list>
          <LI><IMG src="tema8/res/arrow_green.gif" height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=1&amp;grup=1&amp;liste=1">Sat&#305;l&#305;k</A>
        
        <?php 
		/* select count(ilan_ticari.id)  from ilan_ticari where ilan_ticari.ilan_tipi_id between 1 and 9 and ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '1' and '9' and ilan_grup='1' and  onay != '1' and onay !='3' ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
            <LI><IMG src="tema8/res/arrow_green.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=0&amp;grup=1&amp;liste=1">Kiral&#305;k</A> 
        <?php 
		/* select count(ilan_ticari.id)  from ilan_ticari where ilan_ticari.ilan_tipi_id between 10 and 19 and ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '10' and '19' and ilan_grup='1' and  onay != '1' and onay !='3' ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
              <LI><IMG src="tema8/res/arrow_green.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;grup=1&amp;liste=1">T&uuml;m 
                Konutlar</A>  
                 <?php 
				 /* select count(ilan_ticari.id)  from ilan_ticari where  ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='1' and  onay != '1' and onay !='3'  ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>         
            </UL><IMG class="marTop10px marBottom10px" 
      src="tema8/res/line_greenbar_173px.gif" width="150"> </DIV><!-- @Start : Ticari -->  
    
    
     <!-- @Start : Ticari -->
      <DIV class="realType h100 float marRight10px h150px">
        <TABLE width=190>
          <TBODY>
            <TR>
              <TD class=padLeft10px width=70><IMG src="tema8/res/main_ev2.jpg" width="50" height="50" 
            align=center class=pointer 
            "></TD>
              <TD><SPAN class=pointer stil30 id=title_blue 
            "><B>T&#304;CARI</B></SPAN></TD></TR></TBODY></TABLE><IMG 
      class="marTop10px marBottom10px" 
      src="tema8/res/line_blue_173px.gif" width="150"> 
        <UL class=advertise_list>
          <LI><IMG src="tema8/res/arrow_blue.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=1&amp;grup=2&amp;liste=1">Sat&#305;l&#305;k</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '34' and '56' and ilan_grup='2' and  onay != '1' and onay !='3' ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
            <LI><IMG src="tema8/res/arrow_blue.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=0&amp;grup=2&amp;liste=1">Kiral&#305;k</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '57' and '79' and ilan_grup='2' and  onay != '1' and onay !='3'  ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
              <LI><IMG src="tema8/res/arrow_blue.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;grup=2&amp;liste=1">T&uuml;m Ticari</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='2' and  onay != '1' and onay !='3'  ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?> 
            </UL><IMG class="marTop10px marBottom10px" 
      src="tema8/res/line_bluebar_173px.gif" width="150">      </DIV>
      <!-- @Start : Yeni Projeler --> 
    
    
    
    
    <DIV 
      style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BORDER-TOP: medium none; BORDER-RIGHT: medium none" 
      class="realType h100 float marRight5px h150px">
        <TABLE width=193>
          <TBODY>
            <TR>
              <TD class=padLeft10px width=70><IMG src="tema8/res/main_ev3.jpg" width="50" height="50" 
            align=center class=pointer 
           "></TD>
              <TD><SPAN class=pointer stil33 id=title_orange 
            "><B>ARSA</B></SPAN></TD></TR></TBODY></TABLE><IMG 
      class="marTop10px marBottom10px" 
      src="tema8/res/line_yellow_173px.gif" width="150"> 
        <UL class=advertise_list>
          <LI><IMG src="tema8/res/arrow_yellow.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=1&amp;grup=3&amp;liste=1">Sat&#305;l&#305;k</A>
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '20' and '27' and ilan_grup='3'  and  onay != '1' and onay !='3'  ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
            <LI><IMG src="tema8/res/arrow_yellow.gif"  height="5" width="4"> <A 
        style="LETTER-SPACING: 0.05em" 
        href="index.php?action=arama&amp;tip=0&amp;grup=3&amp;liste=1">Kiral&#305;k</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '28' and '33' and ilan_grup='3' and  onay != '1' and onay !='3'   ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
              <LI><IMG src="tema8/res/arrow_yellow.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;grup=3&amp;liste=1">T&uuml;m Arsalar</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='3'  and  onay != '1' and onay !='3'   ")->sor(30);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>    
            </UL><IMG class="marTop10px marBottom10px" 
      src="tema8/res/line_yellowbar_173px.gif" width="150">      </DIV>
    
    
    
		</div>
	<div class="sol_item_alt"></div>
</div></div>
        <div id="sag">
        
        
        
            <div class="vitrin_item">
            	<div class="vitrin_item_ust"></div>
                <div class="vitrin_item_orta">
                	<div id="mansetler">
                	
                   
                   
                   
                   
                   <table style="width:98%" height="155" border="0">
  <tr>
    <td height="109" colspan="3" align="left" valign="top"><p align="center" class="stil1 stil3">T&Uuml;RK&#304;YE'N&#304;N
        EN &#304;&#350;LEVSEL VE  ARADI&#286;INIZI HEMEN<br /> 
        S&#304;ZE VEREN  
        EMLAK S&#304;TES&#304;NE HO&#350; GELD&#304;N&#304;Z.<br />
&Uuml;CRETS&#304;Z &Uuml;YEL&#304;K VE EMLAK EKLEME &#304;MKANLARI &#304;&Ccedil;&#304;N <br />
UYGUN &Uuml;YEL&#304;K T&#304;P&#304;N&#304; SE&Ccedil;EREK 
<br />
SE&Ccedil;K&#304;N &Uuml;YELER&#304;M&#304;Z ARASINDAK&#304; YER&#304;N&#304;Z&#304; ALIN. </p></td>
  </tr>
  

<tr>
<th  colspan="3" align="left" valign="top"><center>15.11.2012 Tarihinden itibaren  EmlaknetT&#252;rkiye Cedid Ticaret y&#246;netimine ge&#231;mi&#351;tir.<br>
Siz &#220;yelerimiz i&#231;in Cedid Ticaret olarak &#231;ok k&#305;sa zamanda yeni imkanlar sa&#287;lamak i&#231;in de&#287;i&#351;ikli&#287;e gidilecektir. L&#252;tfen beklemede Kal&#305;n&#305;z.</center></th>
</tr>

  <tr>
    <td width="37%" >
      <div align="right">
        <a href="index.php?action=giris"><img src="img/uye_ol.jpg" width="166" height="32" border="0" /></a>
        </div></td>
    <td width="27%" height="40"><div align="center"><a href="index.php?action=yeni_emlakci"><img src="img/kurumsal_uye.jpg" width="166" height="32" border="0" /></a></div></td>
    <td width="36%"><div align="left"><a href="index.php?action=yeniuye"><img src="img/bireysel_uye.jpg" width="166" height="32" border="0" /></a></div></td>
  </tr>
</table>
                   
                   
                   
                   
                   
                   
                   
                    
                    
                                        </div>
                    <div id="butonlar" align="right"></div>
                </div>
                <div class="vitrin_item_alt"></div>
            </div> 
            
            
            
            
            
            <div class="arama_item">
            	<div class="arama_item_ust">HIZLI ARAMA</div>
                <div class="arama_item_orta" style="height:170px;">
                	<FORM method=get action="">
<INPUT name=aa value=1 type=hidden> 
                    
                	<div class="aramasol">Þehir</div>
                    <div class="aramasag">
                    	<div id="il" style="float:left;">
                        <select name="iller" id="iller" size="1" onchange="ilceleri_getir();"  />
                            
                                <option value="">Þehir Se&ccedil;iniz</option>
                                      <?php
  $vt->sql("select * from sehir  order by sehiradiUpper ASC")->sor(1000);
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
	  echo '<option value="'.$veri->sehirID.'">'.$veri->sehiradiUpper.'</option>';
  }
  ?>

                            </select>
                        </div>
                    </div>
                    
                    <div class="aramasol">Ýl&ccedil;e</div>
                    <div class="aramasag">
                    	<div id="ilce" style="float:left;">
                        <select name="ilceler" id="ilceler" size="1" onchange="koyleri_getir();" />
  <option value="">Il&ccedil;e se&ccedil;iniz</option>
</select>

                            
                        </div>
                    </div>
                    
   <div class="aramasol">Semt/K&ouml;y</div>
                    <div class="aramasag">
                    	<div id="ilce" style="float:left;">
         <select name="koyler" id="koyler" size="1" />
  <option value="">Semt-K&ouml;y se&ccedil;iniz</option>
  </select>
 </div>
                    </div>                  
                    
                    
                    
                    
                    <div class="aramasol">T&uuml;r&uuml;</div>
                    <div class="aramasag">
                    
                    
                    <SELECT id=il name=tur> 


<?php 
$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=1 and grup_id=1 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari )')->sor(15);
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=0 and grup_id=1 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari ) ')->sor(15);
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=1 and grup_id=2 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari ) ')->sor(15);
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=0 and grup_id=2 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari )')->sor(15);
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=1 and grup_id=3 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari ) ')->sor(15);
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=0 and grup_id=3 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari ) ')->sor(15);
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }
 ?>

  
  
  
  
  </SELECT> 
  
  
  
  
  
  
  

  
  
  
                    
         <input type=hidden  onClick="ilceleri_getir();"  />
      	 <input type=hidden onClick="koyleri_getir();"  /> 
 <input name="action" type="hidden" id="action" value="arama" /> 
 <input name="liste" type="hidden" id="action" value="1" /> 
 <input name="user" type="hidden" id="action" value="0" /> 
 <input name="resim" type="hidden" id="action" value="0" />                 
  <input name="sira" type="hidden" id="action" value="1" /> 
                    
                    </div>
                    
                    <div class="aramasol">Fiyat</div>
                    <div class="aramasag">
             
            <input name="fiyat_alt" type="text"   onKeyPress="return numbersonly(this, event)" size="10" maxlength="10" />
            <input name="fiyat_ust" type="text"   onKeyPress="return numbersonly(this, event)" size="10" maxlength="10" />
                    </div>
                    
                  
                    
                    <div style="float:right; margin-top:15px; margin-right:10px;"><input type="image" src="tema8/res/ara.png" /></div>
                    
                    </form>
                    <br />
                </div>
                <div class="arama_item_alt"></div>
            </div> 
            

   <div class="orta_item">
            <div class="orta_item_ust"></div>
              <div class="orta_item_orta" style="padding-left:0px; width:779px;">
              <center>
            <script type="text/javascript"><!--
google_ad_client = "ca-pub-2816389343803773";
/* emlaknetturkiye ana sayfa */
google_ad_slot = "6345695723";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>
</div> <div class="orta_item_alt"></div></div>





            <div class="orta_item">
                <div class="orta_item_ust">VÝTRÝN ÝLANLAR</div>
                <div class="orta_item_orta" style="padding-left:0px; width:779px;">
                

<div 
   xmlns:foaf="http://xmlns.com/foaf/0.1/"
   xmlns:gr="http://purl.org/goodrelations/v1#"
   xmlns:v="http://rdf.data-vocabulary.org/#"
     typeof="gr:Offering">



                <?php 
  		$vt->sql("select id from ilan_ticari where onay='4' ")->sor(30);
				$veriler = $vt->alHepsi();
				foreach($veriler as $veri) {
				$rastgele[]= $veri->id;
				}
				$x=0;
				$rastgele=@array_flip($rastgele);
				// belirtilen sayida çikartma bölümü baslangici
				for($i=1;$i <= $vitrin_ilan_sayisi; $i++){
				
				
				
				
								$rastgele_id = @array_rand($rastgele, 1);
				if(count($rastgele)!= 0) {
	unset($rastgele[$rastgele_id]);
				


$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where ilan_ticari.onay='4' and ilan_ticari.id='".$rastgele_id."' and ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id  limit 0,1")->sor(15);


$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;

$ilan_tipi = $veri->adi;

$ilan_il = $veri->sehiradiUpper; 

$ilan_ilce = $veri->ilceAdi;

$ilan_koy = $veri->mahalleAdi;

$uye_tipi = $veri->uye_tipi;

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(15); 
$foto_adi = $vt->alTek();

$ilan_basligi = $ilan_tipi." - ".$ilan_il." - ".$ilan_ilce." - ".$ilan_koy;
$ilan_adres = permayap($ilan_tipi."-".$ilan_il."-".$ilan_ilce."-".$ilan_koy).'.html';

if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}



if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(15); 
if($vt->alTek() != "")
{ 
$vitrin_resim = '<img class="photo"  name=""  src="thumb.php?p=resimler/'.$vt->alTek().'&w=100&h=75" alt="" width="120px" height="90px" border="0" />';
} else { 
$vitrin_resim =  '<img  class="photo"   border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75" width="120px" height="90px" border="0">'; 
}	
										}

if($uye_tipi == 2 ) {
$vitrin_resim = '<img class="photo"  border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75" width="120px" height="90px" border="0">'; 	
					}

 }

else 

{ $vitrin_resim = '<IMG class="photo"  border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75" width="120px" height="90px" border="0">'; 
}




$tablo  = '<div class="ilanitem">
							<div class="ilanitem_baslik"> 
<span property="gr:name">'.$ilan_tipi.'</span></div>
							<div class="ilanitem_foto"><a href="detail_'.$veri->id.'_'.$ilan_adres.'"> <span rel="foaf:depiction">'.$vitrin_resim.'</span></a></div>
							<div class="ilanitem_detay">
								
								<p><b>Þehir : <span property="gr:description"> </b>'.$ilan_il.'</p>
								<p><b> </b>'.$ilan_ilce.'</p>
</span>
								<p><b>Fiyat : </b> 

<span property="gr:price">'.ondalik($veri->fiyat)."&nbsp;".$birim.'</span> <span property="gr:hasCurrency" content="TUR" ></span></span></p>
								
								<p align="right">
<span property="foaf:page"><a href="detail_'.$veri->id.'_'.$ilan_adres.'" style="color:#333; text-decoration:underline;">Detaylý Ýncele</a></span>
								</p>
							</div>
						</div>'; 


 } 
 
 $data_vitrin[$x] = $tablo;
	 $x++;
	}			}
	echo resim_listele(3,0,0,$data_vitrin);  
	 ?>  
</div>

                							
											
                                            
                                            
                                            
                                           
                                            
                                            
                                            
                                            
                                      
					                </div>
                <div class="orta_item_alt"></div>
            </div>
            
            <div class="orta_item">
                <div class="orta_item_ust">YENÝ ÝLANLAR</div>
                <div class="orta_item_orta" style="padding-left:0px; width:779px;">
                							
                     <?php 
				
				
				
		$x=0;
			for($i=1;$i <= $yeni_ilan_sayisi; $i++){
				$ii = $i-1;
				
				
								
// $vt->sql("select * from ilan_ticari where onay !='1' and onay !='3' order by id DESC limit ".$ii.",1 ")->sor(15);	

$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where   ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id  and  ilan_ticari.onay !='1' and ilan_ticari.onay !='3'  group by ilan_ticari.id order by ilan_ticari.id  DESC limit ".$ii.",1")->sor(30);


//$vt->sql("SELECT * FROM ilan_ticari where onay !='1' and onay !='3' ORDER BY id DESC LIMIT 0,1")->sor(15);
$veriler = $vt->alHepsi();
foreach($veriler as $veri) { 
$uye_no = $veri->uye_id;

$ilan_tipi = $veri->adi;

$ilan_il = $veri->sehiradiUpper; 

$ilan_ilce = $veri->ilceAdi;

$ilan_koy = $veri->mahalleAdi;

$uye_tipi = $veri->uye_tipi;

$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(15); 
$foto_adi = $vt->alTek();

$ilan_basligi = $ilan_tipi." ".$ilan_il." ".$ilan_ilce." ".$ilan_koy;

$ilan_adres = permayap($ilan_tipi."-".$ilan_il."-".$ilan_ilce."-".$ilan_koy).'.html';
// detail_'.$veri->id.'_'.$ilan_adres.'
if($veri->birim == 1) { $birim="TL";} 
if($veri->birim == 2) { $birim="Euro";}
if($veri->birim == 3) { $birim="USD";}
if($veri->birim == 4) { $birim="GBP";}
 
if($foto_adi == "") {

if($uye_tipi == 1 or $uye_tipi == 3 ) {
$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(15); 
if($vt->alTek() != "")
{ 
$ilan_resim = '<img name=""  src="thumb.php?p=resimler/'.$vt->alTek().'&w=100&h=75" alt="" width="120px" height="90px" border="0" />';
} else { 
$ilan_resim =  '<img  class="photo"  border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75" width="120px" height="90px" border="0">'; 
}	
										}

if($uye_tipi == 2 ) {
$ilan_resim = '<img class="photo"  border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75" width="120px" height="90px" border="0">'; 	
					}

 }

else 

{ $ilan_resim = '<IMG class="photo"  border=0 alt="'.$ilan_basligi.'" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75" width="120px" height="90px" border="0">'; 
}




$table1  = '<div class="ilanitem">
							<div class="ilanitem_baslik">'.$ilan_tipi.'</div>
							<div class="ilanitem_foto"><a href="detail_'.$veri->id.'_'.$ilan_adres.'" title="'.$ilan_basligi.'">'.$ilan_resim.'</a></div>
							<div class="ilanitem_detay">
								
								<p><b>Þehir : </b>'.$ilan_il.'</p>
								<p><b></b>'.$ilan_ilce.'</p>
								<p><b>Fiyat : </b>'.ondalik($veri->fiyat)."&nbsp;".$birim.'</p>
								
								<p align="right">
									<a href="detail_'.$veri->id.'_'.$ilan_adres.'" style="color:#333; text-decoration:underline;" title="'.$ilan_basligi.'">Detaylý Ýncele</a>
								</p>
							</div>
						</div>'; 


 } 





 
		 $data_yeni[$x] = $table1;
		 $x++;
		   }
		 
		    echo resim_listele(3,0,0,$data_yeni); 
		 





		   // bitis ?>

                       
                                            
                                            
                                            
                        
                        
                        
                        
                        
                        
                        
					                </div>
                <div class="orta_item_alt"></div>
            </div>
            
            

        </div>
    </div>
    
    <div style="clear:both;"></div>