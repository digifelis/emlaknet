<script type="text/javascript"><!--
google_ad_client = "ca-pub-2816389343803773";
/* deneme */
google_ad_slot = "0907235478";
google_ad_width = 125;
google_ad_height = 125;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<form action="" method="get">
<table width="20%"   border="0">
  <tr>
    <td ><table style="width:98%" border="0" cellpadding="5" cellspacing="0">
      <tr align="center" valign="middle">
        <td valign="top"><!-- @Start : Konut -->
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
          <!-- @Start : Ticari --></td>
        </tr>
      <tr align="center" valign="middle">
        <td valign="top"><div class="hizli_arama2">
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
        </div></td>
        </tr>
      <tr align="center" valign="middle">
        <td valign="top"><div 
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
        </div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
   <td><div align="center">
<input type="image" src="img/hizli_ilan_ara.jpg" name="image" width="166" height="32">   </div>
   </td>
   </tr>
  <tr>
    <td width="31%"><br />
     <FONT color=#006600 
                        size=2><STRONG> Gayrimenkul T&uuml;r&uuml; Se&ccedil;iniz</STRONG></FONT><br />
<select name="tur" id="tur">
  <?php 
$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=1 and grup_id=1 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari )')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=0 and grup_id=1 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari ) ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=1 and grup_id=2 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari ) ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=0 and grup_id=2 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari )')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=1 and grup_id=3 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari ) ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('SELECT distinct ilan_tipi.*
FROM ilan_tipi, ilan_ticari where tip=0 and grup_id=3 and ilan_tipi.id in (select distinct ilan_tipi_id  from ilan_ticari ) ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }
 ?>
</select>
      <br /></td>
   
    </tr>
  <tr>
    <td><select name="iller" id="iller" size="1" onchange="ilceleri_getir();"  />
      <option value="">il se&ccedil;iniz</option>
      <?php
  $vt->sql("select * from sehir  order by sehiradiUpper ASC")->sor();
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
	  echo '<option value="'.$veri->sehirID.'">'.$veri->sehiradiUpper.'</option>';
  }
  ?>
      </select> </td>
    </tr>
  <tr>
    <td><select name="ilceler" id="ilceler" size="1" onchange="koyleri_getir();" />
  <option value="">il&ccedil;e se&ccedil;iniz</option>
  </select></td>
    </tr>
  <tr>
    <td><select name="koyler" id="koyler" size="1" />
  <option value="">Mahalle se&ccedil;iniz</option>
  </select>
      
      <input type=hidden  onClick="ilceleri_getir();"  />
      <input type=hidden onClick="koyleri_getir();"  />  </td>
    </tr>
  <tr>
    <td><input name="action" type="hidden" id="action" value="arama" />&nbsp;
      <input name="liste" type="hidden" id="liste" value="1" />
      <input name="user" type="hidden" id="user" value="0" />
      <input name="resim" type="hidden" id="resim" value="0" />
      <input name="sira" type="hidden" id="sira" value="1" /></td>
    </tr>
  <tr>
    <td><FONT color=#006600 
                        size=2><STRONG>Fiyat Aral&#305;&#287;&#305; Giriniz</STRONG></FONT><br />
      <input name="fiyat_alt" type="text"  id="fiyat_alt" onKeyPress="return numbersonly(this, event)" size="4" maxlength="5" />
      <input name="fiyat_ust" type="text"  id="fiyat_ust" onKeyPress="return numbersonly(this, event)" size="5" maxlength="7" />
      <select name="birim" id="birim">
        <option value="1" selected="selected">TL</option>
        <option value="2">Euro</option>
        <option value="3">USD</option>
        <option value="4">GBP</option>
        </select>
      </td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td width="42%"><FONT color=#006600 
                        size=2><STRONG>&#304;lan no :</STRONG></FONT></td>
        <td width="58%"><label>
          <input name="ilan_no" type="text" id="ilan_no" onKeyPress="return numbersonly(this, event)" size="10" />
          </label></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td nowrap="nowrap"><font color="#006600" 
                        size="2"><strong>Dosya no :</strong></font></td>
        <td><label>
          <input name="dosya_no" type="text" id="dosya_no" onkeypress="return numbersonly(this, event)" size="10" />
        </label></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>     <div align="center"> <input type="image" src="tema1/img/hizli_ara.jpg" name="image" width="166" height="32"> <br />

   <a href="?action=ayrintili&amp;grup=1"><br />
    <img src="img/ayrinti_konut.jpg" width="166" height="32" border="0" /></a><br />
      <br />
        <a href="?action=ayrintili&amp;grup=2"><img src="img/ayrinti_isyeri.jpg" width="166" height="32" border="0" /></a><br />
        <br />
        <a href="?action=ayrintili&amp;grup=3"><img src="img/ayrinti_arsa.jpg" width="166" height="32" border="0" /></a>  </div>
    
    </td>
  </tr>
     <tr>
       <td><table width="87%" border="0" align="left">
         <tr>
           <td bgcolor="#FFFFFF">
		   <?php $vt->sql('select * from reklam where yer=11 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
           
             <?php $vt->sql('select * from reklam where yer=12 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
             <?php $vt->sql('select * from reklam where yer=13 and aktif="evet" and  bas_tarih<="'.$tarih .'"  and bit_tarih >= "'.$tarih .'" order by id desc')->sor();
$reklamlar = $vt->alHepsi();
foreach($reklamlar as $reklam){
echo $reklam->kod."<br>";
}
?>
<?php //include("sabit/sayac.php"); ?>
             <br /></td>
         </tr>
       </table></td>
     </tr>
</table>
</form>