<?php
				
				
				
$vt->sql('select id,uye_id , tarih,ilan_tipi_id,ilan_grup,il,ilce,koy,fiyat,birim,ilan_suresi,bas_tarihi,dosya_no,hit,onay from ilan_ticari  where uye_id = "'.$_SESSION["id"].'"  and onay=1  order by id desc   ')->sor();
					  $veriler = $vt->alHepsi();
					if( $vt->numRows()==0) {
				//		echo '<DIV align=center><BR><BR><STRONG>Kayýtlý Ýlan    Bulunmamaktadýr.</STRONG></DIV>';
					}
					  
 foreach( $veriler as $veri )
{
?>
	

                              <HR color=#c0c0c0 SIZE=1 width="100%" noShade>






<TABLE border=0 cellSpacing=2 cellPadding=2   width="100%" align=center>
                                <TBODY>
                                <TR>
                                <TD vAlign=top rowSpan=2 width=20>
                         <?php 
						 
if($veri->onay == 0 ) { echo '<IMG border=0  alt="" src="tema/img/flag_orange.gif" width=16 height=16>'; }
if($veri->onay == 1 ) { echo '<IMG border=0  alt="" src="tema/img/flag_red.gif" width=16 height=16>'; }						 
if($veri->onay == 2 ) { echo '<IMG border=0  alt="" src="tema/img/flag_green.gif" width=16 height=16>'; }						 
if($veri->onay == 3 ) { echo '<IMG border=0  alt="" src="tema/img/flag_white.gif" width=16 height=16>'; }
if($veri->onay == 4 ) { echo '<IMG border=0  alt="" src="tema/img/award_star_bronze_1.gif" width=16 height=16>'; }

?>
                                
                                
                              
                                
                                
                                </TD>
                                <TD vAlign=top rowSpan=2 width=110>
                                <DIV align=center><A 
                                href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>" 
                                target=1700342>
                              <?php 
$vt->sql('select * from ilan_foto where ilan_id="'.$veri->id.'" limit 0,1   ')->sor();
$veriler5 = $vt->alHepsi();
$foto_adi = "nopic100x60.gif"; 
 foreach( $veriler5 as $veri5 ) {	
 

$foto_adi = $veri5->foto_adi; 

 
 }
echo '
 <img border=0 src="thumb.php?p=resimler/'.$foto_adi.'&w=100&h=75"  />  
 '; 	 
  	
 ?>    
                                
                                
                              
                                
                                </A> <BR>
                                <STRONG><?php echo ondalik($veri->fiyat)."&nbsp;&nbsp;";
								if ($veri->birim==1) { echo "TL"; }
								if ($veri->birim==2) { echo "Euro"; }
								if ($veri->birim==3) { echo "USD"; }
								if ($veri->birim==4) { echo "GBP"; }
								?>
								</STRONG></DIV></TD>
                                <TD class=tdliste vAlign=top><STRONG><A 
                                href="index.php?action=detail&amp;id=<?php echo $veri->id; ?>" 
                                target=1700342>                               
                                
 <?php 
  $vt->sql('select adi from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 echo $vt->alTek() ."&nbsp;-&nbsp;";


$vt->sql('select sehiradiUpper from sehir where sehirID="'.$veri->il.'"   ')->sor();
echo $vt->alTek() ."&nbsp;-&nbsp;";

$vt->sql('select ilceAdi from ilce where ilceID="'.$veri->ilce.'"  and sehirID="'.$veri->il.'" ')->sor();
echo $vt->alTek() ."&nbsp;-&nbsp;";

$vt->sql('select mahalleAdi from mahalle where mahalleID="'.$veri->koy.'" and  ilceID="'.$veri->ilce.'"  and sehirID="'.$veri->il.'"   ')->sor();
echo $vt->alTek() ."&nbsp;&nbsp;";
 

 ?>                           
                                
                                </A></STRONG></TD>
                                <TD class=tdliste vAlign=top>
                                <DIV align=center><FONT color=#cc0000 
                                face=Verdana><B>&#304;lan No: 
                                &nbsp;<?php echo $veri->id; ?></B></FONT></DIV></TD></TR>
                                <TR>
                                <TD bgColor=#efefef vAlign=top width="60%">&#304;lan 
                                S&uuml;resi: <STRONG><?php echo date("d-m-Y",strtotime($veri->bas_tarihi)); ?></STRONG> - 
                                <STRONG><?php						
								echo date("d-m-Y",strtotime($veri->bas_tarihi)+$veri->ilan_suresi*86400); 
								?></STRONG><BR>
                                <!-- Ilandurumu: <strong>Ilan sayfia alinmistir.</strong><BR> -->&#304;lan 
                                T&uuml;r&uuml;:  <?php 
 $vt->sql('select * from ilan_tipi where id="'.$veri->ilan_tipi_id.'"   ')->sor();
 $veriler1 = $vt->alHepsi();
 foreach( $veriler1 as $veri1 )
{ echo $veri1->adi; }
 ?><BR>
                                &#304;lan B&ouml;lgesi : 
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
                                
                                
                                <BR>
                                &#304;lan&#305;n&#305;z 
                                <STRONG><?php echo $veri->hit; ?></STRONG> kez okunmu&#351;, 
                                <STRONG><?php 
								$vt->sql('select count(id) from ilan_takip where ilan_id= "'.$veri->id.'" ')->sor();
								echo $vt->alTek();
								 ?></STRONG> kez takibe al&#305;nm&#305;&#351;t&#305;r.<FONT 
                                color=#cc0000>*</FONT><BR>
                                <BR>
                                <TABLE border=0 cellSpacing=0 cellPadding=0 
                                width="100%" align=center>
                                <TBODY>
                                <TR>
                                <TD><STRONG>
                               <FONT color=#cc0000 face=Verdana>  Bloke Sebebi :</FONT><br> 
                                <?php
	  
                                
        $vt->sql('select bloke_sebebi from ilan_ticari  where uye_id = "'.$_SESSION["id"].'"  and onay=1  order by id desc   ')->sor();                        

$Degisken=iconv("UTF-8", "ISO-8859-9",$vt->alTek());
                  echo $Degisken;              
                                
      ?>                          
                                </STRONG></TD></TR></TBODY></TABLE>
                                <BR>
                                <TABLE border=0 cellSpacing=0 cellPadding=0 
                                width="100%" align=center>
                                <TBODY>
                                <TR>
                                </TR></TBODY></TABLE></TD>
                                <TD vAlign=top width=120 noWrap><DIV align=center><FONT color=#cc0000 
                                face=Verdana><B>Dosya No: <?php echo $veri->dosya_no; ?></B></FONT></DIV><BR>
                                <TABLE border=0 cellSpacing=0 cellPadding=2 
                                width="100%" align=center>
                                <TBODY>
                                <TR>
                                <TD><IMG border=0 alt="" 
                                src="tema/img/ilan_edit.gif" 
                                width=16 height=16></TD>
                                <TD><A 
                                href="?action=edit&amp;s=<?php echo $veri->ilan_grup; ?>&amp;oid=<?php echo $veri->id; ?>">&#304;lan&#305; 
                                D&uuml;zenle</A></TD></TR>
                                <TR>
                                <TD><IMG border=0 alt="" 
                                src="tema/img/ilan_image.gif" 
                                width=16 height=16></TD>
                                <TD noWrap><A 
                                href="?action=pictures&amp;id=<?php echo $veri->id; ?>">Foto&#287;raf 
                                &#304;&#351;lemleri</A></TD></TR>
                                <TR>
                                <TD><IMG border=0 alt="" 
                                src="tema/img/ilan_sil.gif" 
                                width=16 height=16></TD>
                                <TD><A style="COLOR: #ff0000" 
                                href="?action=ilan_sil&amp;id=<?php echo $veri->id; ?>">Bu &#304;lan&#305; Sil</A></TD></TR></TBODY></TABLE>
                                <?php
								if($veri->onay == 3) {
									
									?>
                                
                                <form action="?action=uzat&id=<?php echo $veri->id; ?>" method="post">
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