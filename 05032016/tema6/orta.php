<!--orta bölümü baslangici --> 



<div class="grid_100 orta">









<div class="grid_100">



<div class="grid_30">









































<TABLE border="0" cellSpacing="0" cellPadding="0"  

                        align="right">

                          <TBODY>

                          <TR>

                            <TD class="tab_top1">&#304;lan Arama</TD></TR>

                          <TR>

                            <TD class="tab_middle1">

                              <DIV align="center">

                              

                              

                              <form action="" method="get">

                              

                                <table width="80%">

                                  <tr>

                                    <td width="38%">&nbsp;Ýlan No&nbsp;</td>

                                    <td width="62%">&nbsp; <input name="ilan_no" type="text" id="ilan_no" onKeyPress="return numbersonly(this, event)" size="19"  />

                                </td>

                                  </tr>

                                  <tr>

                                    <td>T&uuml;r Se&ccedil;in</td>

                                    <td>&nbsp; <select name="tur" id="tur" class="styled-select">

  <?php 

$vt->sql('select * from ilan_tipi   where tip=1 and grup_id=1 ')->sor();

$veriler = $vt->alHepsi();

 foreach( $veriler as $veri )

{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }



$vt->sql('select * from ilan_tipi   where tip=0 and grup_id=1 ')->sor();

$veriler = $vt->alHepsi();

 foreach( $veriler as $veri )

{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }



$vt->sql('select * from ilan_tipi   where tip=1 and grup_id=2 ')->sor();

$veriler = $vt->alHepsi();

 foreach( $veriler as $veri )

{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }



$vt->sql('select * from ilan_tipi   where tip=0 and grup_id=2 ')->sor();

$veriler = $vt->alHepsi();

 foreach( $veriler as $veri )

{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }



$vt->sql('select * from ilan_tipi   where tip=1 and grup_id=3 ')->sor();

$veriler = $vt->alHepsi();

 foreach( $veriler as $veri )

{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }



$vt->sql('select * from ilan_tipi   where tip=0 and grup_id=3 ')->sor();

$veriler = $vt->alHepsi();

 foreach( $veriler as $veri )

{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

 ?>

</select></td>

                                  </tr>

                                  <tr>

                                    <td>&#350;ehir Se&ccedil;in</td>

                                    <td>&nbsp;  <select name="iller" id="iller" size="1" onChange="ilceleri_getir();"   class="styled-select" />

      <option value="">il se&ccedil;iniz</option>

      <?php

  $vt->sql("select * from sehir  order by sehiradiUpper ASC")->sor();

  $veriler = $vt->alHepsi();

  foreach($veriler as $veri) {

	  echo '<option value="'.$veri->sehirID.'">'.$veri->sehiradiUpper.'</option>';

  }

  ?>

      </select></td>

                                  </tr>

                                  <tr>

                                    <td>&#304;l&ccedil;e Se&ccedil;in</td>

                                    <td>&nbsp; <select name="ilceler" id="ilceler" size="1" onChange="koyleri_getir();"   class="styled-select"/>

  <option value="">il&ccedil;e se&ccedil;iniz</option>

  </select></td>

                                  </tr>

                                  <tr>

                                    <td>Mahalle/Semt</td>

                                    <td>&nbsp;<select name="koyler" id="koyler" size="1"  class="styled-select" />

  <option value="">Mahalle se&ccedil;iniz</option>

  </select>

      

      <input type=hidden  onClick="ilceleri_getir();"  class="styled-select"  />

      <input type=hidden onClick="koyleri_getir();"   class="styled-select" /> </td>

                                  </tr>

                                  <tr>

                                    <td>Alt Fiyat</td>

                                    <td>&Uuml;st Fiyat&nbsp;</td>

                                  </tr>

                                  <tr>

                                    <td><input name="fiyat_alt" type="text"  id="fiyat_alt" onkeypress="return numbersonly(this, event)" size="10" maxlength="10" /></td>

                                    <td>&nbsp;

                                    <input name="fiyat_ust" type="text"  id="fiyat_ust" onkeypress="return numbersonly(this, event)" size="10" maxlength="10" /></td>

                                  </tr>

                                  <tr>

                                    <td>&nbsp;

                                    

                                          <input name="action" type="hidden" id="action" value="arama" />

      <input name="liste" type="hidden" id="liste" value="1" />

      <input name="user" type="hidden" id="user" value="0" />

      <input name="resim" type="hidden" id="resim" value="0" />

      <input name="sira" type="hidden" id="sira" value="1" />

      <input name="birim" type="hidden" id="birim" value="1" />

                                    

                                    </td>

                                    <td>&nbsp; <DIV class="submit_buton link_beyaz_11" onclick = "document.forms[0].submit()" >

                                Listele

                              

                                

                                </DIV></td>

                                  </tr>

                                </table>

                              </form>

                              

                              

                              </DIV>

                              <TABLE border="0" cellSpacing="0" cellPadding="0" 

                              align="center">

                                <TBODY>

                                <TR>

                                <TD></TD></TR></TBODY></TABLE></TD></TR>

                          <TR>

                            <TD 

                        class="tab_bottom1">&nbsp;</TD></TR></TBODY></TABLE>























                                

                                

                                

                                </div>



<div class="grid_68" style="margin-left:15px;"><!--<img src="tema6/images/emlak_r8_c2.jpg" width="680" height="335" /> -->

    <link rel="stylesheet" href="tema6/themes/default/default.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="tema6/nivo-slider.css" type="text/css" media="screen" />

     <div class="slider-wrapper theme-default">

 <div id="slider" class="nivoSlider">
<img src="tema6/images/emlak_r8_c2.jpg" />
      <?php
/* 
  $vt->sql("select slider from ayar where id=1")->sor();

  $slider = $vt->alTek();

  

   $Sliste = explode(',' , $slider);

   

  for($i=0;$i<count($Sliste);$i++) {

	  $vt->sql('select foto_adi from ilan_foto where ilan_id="'.$Sliste[$i].'" limit 0,1   ')->sor(); 

$foto_adi = $vt->alTek();

 */
	  ?>

     
<!--
                

                <a href="http://www.emlaknet.net" class="nivo-imageLink"><img  src="thumb.php?p=resimler/<?php echo $foto_adi; ?>&w=661&h=320"  alt=""  /></a>
 
               
 -->
            

            <?php 

	/*

  }
*/
  

  ?>

</div>

</div>

	</div>

<script type="text/javascript" src="tema6/jquery.nivo.slider.js"></script>

    <script type="text/javascript">

    $(window).load(function() {

        $('#slider').nivoSlider(

								{

			effect:'random', //efektler: 'fold,fade,sliceDown'				

			 directionNav:true, //ileri ve geri dügmelerini goster

 			 directionNavHide:true, //gezinme dugmelerini sadece fare uzerine gelince goster

 			 controlNav:false, //1,2,3 dugmeleri					

			 pauseOnHover:true, //uzerine gelince animasyonu durdur					

			         prevText: ' Geri',

        nextText: 'Ileri '

								});

    });

    </script>

  

</div>





<div class="grid_100">







<div class="grid_23" ><TABLE border="0" cellSpacing="0" cellPadding="0" width="225">

                          <TBODY>

                          <TR>

                            <TD class="tab_top">T&uuml;m Ýlanlar<!-- (<SPAN id="ctl00_lbtopsayi">3</SPAN>)  -->

                                                  </TD></TR>

                          <TR>

                            <TD class="tab_middle">

                            

                            

                            

                            <div class="hizli_arama2">

            <table>

              <tbody>

                <tr>

                  <td class="padLeft10px" width="50"><img src="tema1/img/konut.jpg" alt="" width="90" height="45" 

            align="center" class="pointer"></td>

                  <td nowrap="nowrap"><img src="tema1/img/arrow_green.gif" alt="" width="4" height="5" /> <a 

        href="index.php?action=arama&amp;tip=1&amp;grup=1&amp;liste=1">Sat&#305;l&#305;k</a>

                      <?php 

		/* select count(ilan_ticari.id)  from ilan_ticari where ilan_ticari.ilan_tipi_id between 1 and 9 and ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */

		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '1' and '9' and ilan_grup='1' and  onay != '1' and onay !='3' ")->sor();

      echo '&nbsp;('.$vt->alTek().')';   

      ?> <BR />                     <img src="tema1/img/arrow_green.gif" alt="" width="4"  height="5" /> <a 

        href="index.php?action=arama&amp;tip=0&amp;grup=1&amp;liste=1">Kiral&#305;k</a>

                      <?php 

		/* select count(ilan_ticari.id)  from ilan_ticari where ilan_ticari.ilan_tipi_id between 10 and 19 and ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */

		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '10' and '19' and ilan_grup='1' and  onay != '1' and onay !='3' ")->sor();

      echo '&nbsp;('.$vt->alTek().')';   

      ?>    <BR />                  <img src="tema1/img/arrow_green.gif" alt="" width="4"  height="5" /> <a 

        href="index.php?action=arama&amp;grup=1&amp;liste=1">T&uuml;m 

                      Konutlar</a>                      <?php 

				 /* select count(ilan_ticari.id)  from ilan_ticari where  ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */

		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='1' and  onay != '1' and onay !='3'  ")->sor();

      echo '&nbsp;('.$vt->alTek().')';   

      ?></td>

                  </tr>



                <tr>

                  <td colspan="2" class="padLeft10px"><img 

      src="tema1/img/line_green_173px.gif" alt="" width="173" height="4" /></td>

                  </tr>

                </tbody>

              </table>

          </div>

              <div class="hizli_arama2">

          <table>

            <tbody>

              <tr>

                <td class="padLeft10px" width="50"><img src="tema1/img/main_ev2.jpg" alt="" width="90" height="45" 

            align="center" class="pointer" /></td>

                <td nowrap="nowrap"><img src="tema1/img/arrow_blue.gif" alt="" width="4"  height="5" /> <a 

        href="index.php?action=arama&amp;tip=1&amp;grup=2&amp;liste=1">Sat&#305;l&#305;k</a>

                    <?php 

		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '34' and '56' and ilan_grup='2' and  onay != '1' and onay !='3' ")->sor();

      echo '&nbsp;('.$vt->alTek().')';   

      ?> <BR />                   <img src="tema1/img/arrow_blue.gif" alt="" width="4"  height="5" /> <a 

        href="index.php?action=arama&amp;tip=0&amp;grup=2&amp;liste=1">Kiral&#305;k</a>

                    <?php 

		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '57' and '79' and ilan_grup='2' and  onay != '1' and onay !='3'  ")->sor();

      echo '&nbsp;('.$vt->alTek().')';   

      ?>       <BR />             

                    <img src="tema1/img/arrow_blue.gif" alt="" width="4"  height="5" /> <a 

        href="index.php?action=arama&amp;grup=2&amp;liste=1">T&uuml;m Ticariler</a>                    <?php 

		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='2' and  onay != '1' and onay !='3'  ")->sor();

      echo '&nbsp;('.$vt->alTek().')';   

      ?></td>

                </tr>



              <tr>

                <td colspan="2" class="padLeft10px"><img 

      src="tema1/img/line_blue_173px.gif" alt="" width="173" height="4" 

      class="marTop10px marBottom10px" /></td>

                </tr>

              </tbody>

            </table>

        </div>              

                 <div 

      style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BORDER-TOP: medium none; BORDER-RIGHT: medium none" 

      class="hizli_arama2">

          <table>

            <tbody>

              <tr>

                <td class="padLeft10px" width="50"><img src="tema1/img/main_ev3.jpg" alt="" width="90" height="45" 

            align="center" class="pointer" /></td>

                <td nowrap="nowrap"><img src="tema1/img/arrow_yellow.gif" alt="" width="4"  height="5" /> <a 

        href="index.php?action=arama&amp;tip=1&amp;grup=3&amp;liste=1">Sat&#305;l&#305;k</a>

                    <?php 

		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '20' and '27' and ilan_grup='3'  and  onay != '1' and onay !='3'  ")->sor();

      echo '&nbsp;('.$vt->alTek().')';   

      ?>    <BR />                <img src="tema1/img/arrow_yellow.gif" alt="" width="4"  height="5" /> <a 

        style="LETTER-SPACING: 0.05em" 

        href="index.php?action=arama&amp;tip=0&amp;grup=3&amp;liste=1">Kiral&#305;k</a>

                    <?php 

		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '28' and '33' and ilan_grup='3' and  onay != '1' and onay !='3'   ")->sor();

      echo '&nbsp;('.$vt->alTek().')';   

      ?>      <BR />            <img src="tema1/img/arrow_yellow.gif" alt="" width="4"  height="5" /> <a 

        href="index.php?action=arama&amp;grup=3&amp;liste=1">T&uuml;m Arsalar</a>                    <?php 

		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='3'  and  onay != '1' and onay !='3'   ")->sor();

      echo '&nbsp;('.$vt->alTek().')';   

      ?></td>

                </tr>



              <tr>

                <td colspan="2" class="padLeft10px"><span class="hizli_arama2" style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><img 

      src="tema1/img/line_yellow_173px.gif" alt="" width="173" height="4" 

      class="marTop10px marBottom10px" /></span></td>

                </tr>

              </tbody>

            </table>

        </div>           

                            

                            </TD></TR>

                          <TR>

                            <TD class="tab_bottom">

                              <TABLE border="0" cellSpacing="0" cellPadding="2" 

                              width="95%" align="center">

                                <TBODY>

                                <TR></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>

                                

                                

  <DIV id="ctl00_banner2" align="center">

                        

                        

                        <?php 

	$vt->sql('select * from reklam where yer=1 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);

	//$vt->sql('select * from reklam where yer=2 order by id desc')->sor(15);

$reklamlar = $vt->alHepsi();

foreach($reklamlar as $reklam){

echo $reklam->kod."<br>";

}

?>

<?php 

	$vt->sql('select * from reklam where yer=2 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);

	//$vt->sql('select * from reklam where yer=2 order by id desc')->sor(15);

$reklamlar = $vt->alHepsi();

foreach($reklamlar as $reklam){

echo $reklam->kod."<br>";

}

?>

<?php 

	$vt->sql('select * from reklam where yer=3 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);

	//$vt->sql('select * from reklam where yer=2 order by id desc')->sor(15);

$reklamlar = $vt->alHepsi();

foreach($reklamlar as $reklam){

echo $reklam->kod."<br>";

}

?>

 

                 

                        

                        </DIV>                              

                                

                                

                                

                                </div>



<div class="grid_53 orta_stil">









 

          

          <TABLE class="main_tab" border="0" cellSpacing="0" 

                        cellPadding="0" width="100%" >

                          <TBODY>

                          <TR>

                            <TD>

             <ul id="tabs">        

         <li class="active"> <A id="ctl00_ContentPlaceHolder1_lbv" class="mor11bold" Onclick="goster1()" >T&uuml;m  Vitrin Ýlanlarý</A></li>

         <li> <A id="ctl00_ContentPlaceHolder1_lbk"  class="mor11bold" Onclick="goster2()"   >&nbsp;|&nbsp;&nbsp;Konut  Vitrini</A></li>

        <li><A id="ctl00_ContentPlaceHolder1_lba" class="mor11bold" Onclick="goster3()"    >&nbsp;|&nbsp;&nbsp;Arsa  Vitrini</A></li>

                 </ul> 

                            

                              </TD></TR></TBODY></TABLE>

          

                          

                              

                            

                  <div id="tabs-1" class="tablar"><?php 

							

  		$vt->sql("select id from ilan_ticari where onay='4' ")->sor();

				$veriler = $vt->alHepsi();

				foreach($veriler as $veri) {

				$rastgele[]= $veri->id;

				}

				$x=0;

				$rastgele=@array_flip($rastgele);

				// belirtilen sayida çikartma bölümü baslangici

				for($i=1;$i <= $vitrin_ilan_sayisi; $i++){

				

				

				

				

								$rastgele_id = @array_rand($rastgele, 1);

				unset($rastgele[$rastgele_id]);

				

// $vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor(15);



$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_ticari.metrekare , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where ilan_ticari.onay='4' and ilan_ticari.id='".$rastgele_id."' and ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id  limit 0,1")->sor();





$veriler = $vt->alHepsi();

foreach($veriler as $veri) { 

$uye_no = $veri->uye_id;



$ilan_tipi = $veri->adi;



$ilan_il = $veri->sehiradiUpper; 



$ilan_ilce = $veri->ilceAdi;



$ilan_koy = $veri->mahalleAdi;



$uye_tipi = $veri->uye_tipi;

$metrekare = $veri->metrekare;



$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(15); 

$foto_adi = $vt->alTek();



$ilan_basligi = $ilan_tipi." - ".$ilan_il." - ".$ilan_ilce." - ".$ilan_koy;

$ilan_adres = permayap($ilan_tipi."-".$ilan_il."-".$ilan_ilce."-".$ilan_koy).'.html';



if($veri->birim == 1) { $birim="TL";} 

if($veri->birim == 2) { $birim="Euro";}

if($veri->birim == 3) { $birim="USD";}

if($veri->birim == 4) { $birim="GBP";}

	$tablo = '    <TABLE border="0" cellSpacing="0" cellPadding="0" 

                              width="170" height="200">

                                <TBODY>

                                <TR>

                                <TD>

                                <DIV class="vitrin_bg">

                                <DIV class="vitrin_baslik"><SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbEMLAKTIP_DIL">'.$ilan_tipi.'</SPAN> </DIV>

                                <DIV class="vitrin_m2"><SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbMETREKARE">'.$metrekare.'</SPAN> 

                                                            m² </DIV>

                                <DIV class="vitrin_konum"><SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbIL">'.$ilan_il.'</SPAN><SPAN 

                                id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbILCE">'.$ilan_ilce.'</SPAN> 

                                <BR><SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbSEMT">'.$ilan_koy.'</SPAN> <SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbMAHALLE"></SPAN></DIV>';





if($foto_adi == "") {



if($uye_tipi == 1 or $uye_tipi == 3 ) {

$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(15); 

if($vt->alTek() != "")

{

	$tablo .= '<DIV class="vitrin_resim"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlresim" 

                                href="detail_'.$veri->id.'_'.$ilan_adres.'"><IMG 

                                border="0" src="resimler/'.$vt->alTek().'" 

                                width="160" height="107"></A></DIV>';	

	



  } else {

	  

	$tablo .= '<DIV class="vitrin_resim"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlresim" 

                                href="detail_'.$veri->id.'_'.$ilan_adres.'"><IMG 

                                border="0" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75" 

                                width="160" height="107"></A></DIV>';		  

	  

 }	

										}



if($uye_tipi == 2 ) {



	$tablo .= '<DIV class="vitrin_resim"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlresim" 

                                href="detail_'.$veri->id.'_'.$ilan_adres.'"><IMG 

                                border="0" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75" 

                                width="160" height="107"></A></DIV>';	

								

	

					}



 }



else 



{

	$tablo .= '<DIV class="vitrin_resim"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlresim" 

                                href="detail_'.$veri->id.'_'.$ilan_adres.'"><IMG 

                                border="0" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75" 

                                width="160" height="107"></A></DIV>';		

	



  }







	$tablo .= ' <DIV class="vitrin_fiyat"> <SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbfiyat">'.ondalik($veri->fiyat).'</SPAN> 

                                <SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbkur">'.$birim.'</SPAN> 

                                </DIV>

                                <DIV class="vitrin_buton"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlilan" 

                                class="link_siyah_mor" href="detail_'.$veri->id.'_'.$ilan_adres.'">Ýlan 

                                Detayý</A></DIV></DIV></TD></TR></TBODY></TABLE> <br>                              ';









 } 

 

 $data_vitrin[$x] = $tablo;

	 $x++;

				}

	echo resim_listele(3,0,0,$data_vitrin);  

	

	



	



	

	 ?>    

              </div>             

             <div id="tabs-2" class="tablar"><?php 

			  

  		$vt->sql("select id from ilan_ticari where onay='4'  and ilan_grup=1 ")->sor();

				$veriler = $vt->alHepsi();

				foreach($veriler as $veri) {

				$rastgele1[]= $veri->id;

				}

				$x=0;

				$rastgele1=@array_flip($rastgele1);

				// belirtilen sayida çikartma bölümü baslangici

				for($i=1;$i <= $vitrin_ilan_sayisi; $i++){

				

				

				

				

								$rastgele_id1 = @array_rand($rastgele1, 1);

				unset($rastgele1[$rastgele_id1]);

				

// $vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor(15);



$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_ticari.metrekare , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where ilan_ticari.onay='4' and ilan_ticari.id='".$rastgele_id1."' and ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id   limit 0,1")->sor();





$veriler = $vt->alHepsi();

foreach($veriler as $veri) { 

$uye_no = $veri->uye_id;



$ilan_tipi = $veri->adi;



$ilan_il = $veri->sehiradiUpper; 



$ilan_ilce = $veri->ilceAdi;



$ilan_koy = $veri->mahalleAdi;



$uye_tipi = $veri->uye_tipi;

$metrekare = $veri->metrekare;



$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(15); 

$foto_adi = $vt->alTek();



$ilan_basligi = $ilan_tipi." - ".$ilan_il." - ".$ilan_ilce." - ".$ilan_koy;

$ilan_adres = permayap($ilan_tipi."-".$ilan_il."-".$ilan_ilce."-".$ilan_koy).'.html';



if($veri->birim == 1) { $birim="TL";} 

if($veri->birim == 2) { $birim="Euro";}

if($veri->birim == 3) { $birim="USD";}

if($veri->birim == 4) { $birim="GBP";}

	$tablo1 = '    <TABLE border="0" cellSpacing="0" cellPadding="0" 

                              width="170" height="200">

                                <TBODY>

                                <TR>

                                <TD>

                                <DIV class="vitrin_bg">

                                <DIV class="vitrin_baslik"><SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbEMLAKTIP_DIL">'.$ilan_tipi.'</SPAN> </DIV>

                                <DIV class="vitrin_m2"><SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbMETREKARE">'.$metrekare.'</SPAN> 

                                                            m² </DIV>

                                <DIV class="vitrin_konum"><SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbIL">'.$ilan_il.'</SPAN><SPAN 

                                id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbILCE">'.$ilan_ilce.'</SPAN> 

                                <BR><SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbSEMT">'.$ilan_koy.'</SPAN> <SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbMAHALLE"></SPAN></DIV>';





if($foto_adi == "") {



if($uye_tipi == 1 or $uye_tipi == 3 ) {

$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(15); 

if($vt->alTek() != "")

{

	$tablo1 .= '<DIV class="vitrin_resim"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlresim" 

                                href="detail_'.$veri->id.'_'.$ilan_adres.'"><IMG 

                                border="0" src="resimler/'.$vt->alTek().'" 

                                width="160" height="107"></A></DIV>';	

	



  } else {

	  

	$tablo1 .= '<DIV class="vitrin_resim"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlresim" 

                                href="detail_'.$veri->id.'_'.$ilan_adres.'"><IMG 

                                border="0" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75" 

                                width="160" height="107"></A></DIV>';		  

	  

 }	

										}



if($uye_tipi == 2 ) {



	$tablo1 .= '<DIV class="vitrin_resim"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlresim" 

                                href="detail_'.$veri->id.'_'.$ilan_adres.'"><IMG 

                                border="0" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75" 

                                width="160" height="107"></A></DIV>';	

								

	

					}



 }



else 



{

	$tablo1 .= '<DIV class="vitrin_resim"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlresim" 

                                href="detail_'.$veri->id.'_'.$ilan_adres.'"><IMG 

                                border="0" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75" 

                                width="160" height="107"></A></DIV>';		

	



  }







	$tablo1 .= ' <DIV class="vitrin_fiyat"> <SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbfiyat">'.ondalik($veri->fiyat).'</SPAN> 

                                <SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbkur">'.$birim.'</SPAN> 

                                </DIV>

                                <DIV class="vitrin_buton"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlilan" 

                                class="link_siyah_mor" href="detail_'.$veri->id.'_'.$ilan_adres.'">Ýlan 

                                Detayý</A></DIV></DIV></TD></TR></TBODY></TABLE> <br>                              ';









 } 

 

 $data_vitrin1[$x] = $tablo1;

	 $x++;

				}

	echo resim_listele(3,0,0,$data_vitrin1);  

	

	



	



	

	 ?> 

     

     

     </div>

         	<div id="tabs-3" class="tablar"><?php 

			

  		$vt->sql("select id from ilan_ticari where onay='4'  and ilan_grup=3 ")->sor();

				$veriler = $vt->alHepsi();

				foreach($veriler as $veri) {

				$rastgele2[]= $veri->id;

				}

				

				$x=0;

				$rastgele2=@array_flip($rastgele2);

				// belirtilen sayida çikartma bölümü baslangici

				for($i=1;$i <= $vitrin_ilan_sayisi; $i++){

				

				

				

				

								$rastgele_id2 = @array_rand($rastgele2, 1);

				unset($rastgele2[$rastgele_id2]);

				

// $vt->sql("select * from ilan_ticari where onay='4' and id='".$rastgele_id."' ")->sor(15);



$vt->sql("select ilan_ticari.id as id,ilan_ticari.birim,ilan_ticari.fiyat , ilan_ticari.uye_id , ilan_ticari.metrekare , ilan_tipi.adi , sehir.sehiradiUpper , ilce.ilceAdi , mahalle.mahalleAdi , uyeler.uye_tipi  from ilan_ticari , ilan_tipi , sehir , ilce , mahalle , uyeler   where ilan_ticari.onay='4' and ilan_ticari.id='".$rastgele_id2."' and ilan_tipi.id=ilan_ticari.ilan_tipi_id and sehir.sehirID=ilan_ticari.il and ilce.ilceID=ilan_ticari.ilce and ilce.sehirID=ilan_ticari.il and mahalle.mahalleID=ilan_ticari.koy and mahalle.ilceID=ilan_ticari.ilce and mahalle.sehirID=ilan_ticari.il and uyeler.id=ilan_ticari.uye_id   limit 0,1")->sor();





$veriler = $vt->alHepsi();

foreach($veriler as $veri) { 

$uye_no = $veri->uye_id;



$ilan_tipi = $veri->adi;



$ilan_il = $veri->sehiradiUpper; 



$ilan_ilce = $veri->ilceAdi;



$ilan_koy = $veri->mahalleAdi;



$uye_tipi = $veri->uye_tipi;

$metrekare = $veri->metrekare;



$vt->sql('select foto_adi from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor(15); 

$foto_adi = $vt->alTek();



$ilan_basligi = $ilan_tipi." - ".$ilan_il." - ".$ilan_ilce." - ".$ilan_koy;

$ilan_adres = permayap($ilan_tipi."-".$ilan_il."-".$ilan_ilce."-".$ilan_koy).'.html';



if($veri->birim == 1) { $birim="TL";} 

if($veri->birim == 2) { $birim="Euro";}

if($veri->birim == 3) { $birim="USD";}

if($veri->birim == 4) { $birim="GBP";}

	$tablo2 = '    <TABLE border="0" cellSpacing="0" cellPadding="0" 

                              width="170" height="200">

                                <TBODY>

                                <TR>

                                <TD>

                                <DIV class="vitrin_bg">

                                <DIV class="vitrin_baslik"><SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbEMLAKTIP_DIL">'.$ilan_tipi.'</SPAN> </DIV>

                                <DIV class="vitrin_m2"><SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbMETREKARE">'.$metrekare.'</SPAN> 

                                                            m² </DIV>

                                <DIV class="vitrin_konum"><SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbIL">'.$ilan_il.'</SPAN><SPAN 

                                id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbILCE">'.$ilan_ilce.'</SPAN> 

                                <BR><SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbSEMT">'.$ilan_koy.'</SPAN> <SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbMAHALLE"></SPAN></DIV>';





if($foto_adi == "") {



if($uye_tipi == 1 or $uye_tipi == 3 ) {

$vt->sql("select firma_logo from logolar where user_id = '".$uye_no."'")->sor(15); 

if($vt->alTek() != "")

{

	$tablo2 .= '<DIV class="vitrin_resim"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlresim" 

                                href="detail_'.$veri->id.'_'.$ilan_adres.'"><IMG 

                                border="0" src="resimler/'.$vt->alTek().'" 

                                width="160" height="107"></A></DIV>';	

	



  } else {

	  

	$tablo2 .= '<DIV class="vitrin_resim"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlresim" 

                                href="detail_'.$veri->id.'_'.$ilan_adres.'"><IMG 

                                border="0" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75" 

                                width="160" height="107"></A></DIV>';		  

	  

 }	

										}



if($uye_tipi == 2 ) {



	$tablo2 .= '<DIV class="vitrin_resim"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlresim" 

                                href="detail_'.$veri->id.'_'.$ilan_adres.'"><IMG 

                                border="0" src="thumb.php?p=resimler/nopic100x60.gif&w=100&h=75" 

                                width="160" height="107"></A></DIV>';	

								

	

					}



 }



else 



{

	$tablo2 .= '<DIV class="vitrin_resim"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlresim" 

                                href="detail_'.$veri->id.'_'.$ilan_adres.'"><IMG 

                                border="0" src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75" 

                                width="160" height="107"></A></DIV>';		

	



  }







	$tablo2 .= ' <DIV class="vitrin_fiyat"> <SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbfiyat">'.ondalik($veri->fiyat).'</SPAN> 

                                <SPAN id="ctl00_ContentPlaceHolder1_DataList1_ctl00_lbkur">'.$birim.'</SPAN> 

                                </DIV>

                                <DIV class="vitrin_buton"><A id="ctl00_ContentPlaceHolder1_DataList1_ctl00_hlilan" 

                                class="link_siyah_mor" href="detail_'.$veri->id.'_'.$ilan_adres.'">Ýlan 

                                Detayý</A></DIV></DIV></TD></TR></TBODY></TABLE> <br>                              ';









 } 

 

 $data_vitrin2[$x] = $tablo2;

	 $x++;

				}

	echo resim_listele(3,0,0,$data_vitrin2);  

	

	



	



	

	 ?>  </div>  

                  

                                





</div>

















<div class="grid_23">





<div class="grid_23">

























































<TABLE border="0" cellSpacing="0" cellPadding="0" width="225" 

                        align="right">

                          <TBODY>

                          <TR>

                            <TD class="tab_top">Mortgage Hesapla </TD></TR>

                          <TR>

                            <TD class="tab_middle">

                              <DIV align="center">

                              <TABLE border="0" cellSpacing="0" cellPadding="0" 

                              width="185" height="0%">

                                <TBODY>

                                <TR>

                                <TD>

                                <DIV class="detayliarama_select_bg">

                                <DIV align="center"><SELECT id="ctl00_DDLBANKA" 

                                onchange="javascript:setTimeout('__doPostBack(\'ctl00$DDLBANKA\',\'\')', 0)" 

                                class="detayliarama_select" name="ctl00$DDLBANKA"><OPTION 

                                selected="selected" value="0">Banka 

                                Se&ccedil;iniz</OPTION><OPTION 

                                value="2">Akbank</OPTION><OPTION 

                                value="3">Anadolubank</OPTION><OPTION 

                                value="5">Bank Asya</OPTION><OPTION 

                                value="6">Denizbank</OPTION><OPTION 

                                value="7">Eurobank Tekfen</OPTION><OPTION value="8">Finansbank</OPTION><OPTION 

                                value="10">Garanti</OPTION><OPTION 

                                value="11">Halk Bankasý</OPTION><OPTION value="12">HSBC</OPTION><OPTION 

                                value="13">ING Bank</OPTION><OPTION 

                                value="14">Ko&ccedil;finans</OPTION><OPTION 

                                value="15">TEB</OPTION><OPTION 

                                value="16">T&uuml;rkiye Ýþ Bankasý</OPTION><OPTION 

                                value="17">Vakýfbank</OPTION><OPTION 

                                value="18">Yapý Kredi</OPTION><OPTION 

                                value="19">Ziraat 

                                Bankasý</OPTION></SELECT></DIV></DIV></TD></TR>

                                <TR>

                                <TD align="left">

                                <DIV class="textalani2_bg">

                                <DIV align="center"><SELECT id="ctl00_DDLBANKASAKLA" 

                                class="textalani2" 

                                name="ctl00$DDLBANKASAKLA"><OPTION 

                                value="0">Ay</OPTION></SELECT></DIV></DIV></TD></TR>

                                <TR>

                                <TD align="left">

                                <DIV class="textalani2_bg">

                                <DIV align="center"><INPUT onBlur="if(this.beenchanged!=true) { this.value='Faiz' }" 

                                id="ctl00_TBFAIZORAN" onChange="this.beenchanged = true;" 

                                class="textalani2" onFocus="if(this.beenchanged!=true){ this.value = ''}" 

                                name="ctl00$TBFAIZORAN" value="Faiz" type="text" 

                                autocomplete="off"></DIV></DIV></TD></TR>

                                <TR>

                                <TD width="69%" align="left">

                                <DIV class="textalani2_bg">

                                <DIV align="center"><INPUT onBlur="if(this.beenchanged!=true) { this.value='Tutar' }" 

                                id="ctl00_TBPARA" onChange="this.beenchanged = true;" 

                                class="textalani2" onFocus="if(this.beenchanged!=true){ this.value = ''}" 

                                name="ctl00$TBPARA" value="Tutar" type="text" 

                                autocomplete="off"></DIV></DIV></TD></TR>

                                <TR>

                                <TD>

                                <DIV align="left">

                                <DIV class="submit_buton"><A id="ctl00_LBHESAP" 

                                class="link_beyaz_11" href="javascript:__doPostBack('ctl00$LBHESAP','')">Hesapla</A></DIV></DIV></TD></TR></TBODY></TABLE></DIV>

                              <TABLE border="0" cellSpacing="0" cellPadding="0" 

                              align="center">

                                <TBODY>

                                <TR>

                                <TD></TD></TR></TBODY></TABLE></TD></TR>

                          <TR>

                            <TD 

                        class="tab_bottom">&nbsp;</TD></TR></TBODY></TABLE>

                        

                        

                </div>        

                        

 <DIV class="grid_23">

                        <?php

$para_birimi = array("USD" => "","EUR" => "",);

$veri  = array("Isim" => "isim", "forexbuying" => "Alis", "forexselling" => "Satis",);

$url  = file_get_contents("http://www.tcmb.gov.tr/kurlar/today.xml");

foreach($para_birimi as $birim => $arr){

 preg_match("'<currency Kod=\"(".$birim.")\".*>(.*)</currency>'Uis",$url,$crst);

foreach($veri as $alan => $deger){

 preg_match("'<".$alan.">(.*)</".$alan.">'Uis",$crst[2],$frst);

 $para_birimi[$birim][$deger] = $frst[1];

}

}



?>

                        <TABLE border="0" cellSpacing="0" cellPadding="0" width="225">

                          <TBODY>

                          <TR>

                            <TD class="tab_top">D&ouml;viz Piyasasý </TD></TR>

                          <TR>

                            <TD class="tab_middle">

                              <TABLE border="0" cellSpacing="0" cellPadding="3" 

                              width="80%" align="center">

                                <TBODY>

                                <TR>

                                <TD class="doviz_tablo">

                                <DIV align="left">D&ouml;viz</DIV></TD>

                                <TD class="doviz_tablo">

                                <DIV align="center">Alýþ</DIV></TD>

                                <TD class="doviz_tablo">

                                <DIV align="center">Satýþ</DIV></TD></TR>

                                <TR>

                                <TD class="doviz_tablo" width="50%">

                                <DIV align="left">Dolar</DIV></TD>

                                <TD class="doviz_tablo" width="50%">

                                <DIV align="center"><SPAN 

                                id="ctl00_DOLARAL"><?php echo $para_birimi[USD][Alis]; ?></SPAN></DIV></TD>

                                <TD class="doviz_tablo" width="50%">

                                <DIV align="center"><SPAN 

                                id="ctl00_Dolarsat"><?php echo $para_birimi[USD][Satis]; ?></SPAN></DIV></TD></TR>

                                <TR>

                                <TD class="doviz_tablo">

                                <DIV align="left">Euro</DIV></TD>

                                <TD class="doviz_tablo">

                                <DIV align="center"><SPAN 

                                id="ctl00_EUROAL"><?php echo $para_birimi[EUR][Alis]; ?></SPAN></DIV></TD>

                                <TD class="doviz_tablo">

                                <DIV align="center"><SPAN 

                                id="ctl00_EUROSAT"><?php echo $para_birimi[EUR][Satis]; ?></SPAN></DIV></TD></TR></TBODY></TABLE></TD></TR>

                          <TR>

                            <TD class="tab_bottom">

                              <TABLE border="0" cellSpacing="0" cellPadding="2" 

                              width="95%" align="center">

                                <TBODY>

                                <TR></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>

                                

                                

          <DIV class="grid_23">                       

                                

    <?php 

	$vt->sql('select * from reklam where yer=4 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);

	//$vt->sql('select * from reklam where yer=2 order by id desc')->sor(15);

$reklamlar = $vt->alHepsi();

foreach($reklamlar as $reklam){

echo $reklam->kod."<br>";

}

?>

                        <?php 

	$vt->sql('select * from reklam where yer=5 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);

	//$vt->sql('select * from reklam where yer=2 order by id desc')->sor(15);

$reklamlar = $vt->alHepsi();

foreach($reklamlar as $reklam){

echo $reklam->kod."<br>";

}

?>

                        <?php 

	$vt->sql('select * from reklam where yer=6 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor(15);

	//$vt->sql('select * from reklam where yer=2 order by id desc')->sor(15);

$reklamlar = $vt->alHepsi();

foreach($reklamlar as $reklam){

echo $reklam->kod."<br>";

}

?>                            

                                





</div>









</div>



</div>

</DIV>



<!--orta bölümü bitisi -->







