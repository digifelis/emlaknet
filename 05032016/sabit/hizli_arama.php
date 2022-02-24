
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2816389343803773";
/* deneme1 */
google_ad_slot = "4066454148";
google_ad_width = 180;
google_ad_height = 150;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<form action="" method="get">
<table width="22%"  border="0">
  <tr>
   <th bgcolor="#D5D5D5">HIZLI &#304;LAN ARAMA</th></tr>
  <tr>
  <tr>
    <td width="31%"><br />
     <FONT color=#006600 
                        size=2><STRONG> Gayri Menkul T&uuml;r&uuml;</STRONG></FONT><br />
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
    <td><FONT color=#006600 
                        size=2><STRONG>&#304;l</STRONG></FONT><br />
  <select name="iller" id="iller" size="1" onchange="ilceleri_getir();"  />
      <option value="">Il se&ccedil;iniz</option>
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
    <td><FONT color=#006600 
                        size=2><STRONG>&#304;l&ccedil;e</STRONG></FONT><br />
  <select name="ilceler" id="ilceler" size="1" onchange="koyleri_getir();" />
  <option value="">Il&ccedil;e se&ccedil;iniz</option>
  </select></td>
    </tr>
  <tr>
    <td><FONT color=#006600 
                        size=2><STRONG>Semt/K&ouml;y</STRONG></FONT><br />
      <select name="koyler" id="koyler" size="1" />
  <option value="">Semt-K&ouml;y se&ccedil;iniz</option>
  </select>
      
      <input type=hidden  onClick="ilceleri_getir();"  />
      <input type=hidden onClick="koyleri_getir();"  />  </td>
    </tr>
  <tr>
    <td><input name="action" type="hidden" id="action" value="arama" />&nbsp;</td>
    </tr>
  <tr>
    <td><FONT color=#006600 
                        size=2><STRONG>Fiyat Aral&#305;&#287;&#305;</STRONG></FONT><br />
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
    <td><table width="100%" border="0">
      <tr>
        <td colspan="4">&nbsp;<FONT color=#006600 
                        size=2><STRONG>Siralama T&uuml;r&uuml;:</STRONG></FONT></td>
        </tr>
      <tr>
        <td><INPUT id=sira1 value=1 CHECKED type=radio 
                      name=sira></td>
        <td nowrap="nowrap"><LABEL for=sira1>En D&uuml;s&uuml;k Fiyata G&ouml;re</LABEL></td>
        <td nowrap="nowrap">&nbsp;</td>
        <td width="40" nowrap="nowrap">&nbsp;&nbsp;</td>
        </tr>
      <tr>
        <TD><INPUT id=sira3 value=2 type=radio name=sira></TD>
        <TD nowrap="nowrap"><LABEL for=sira3>En Y&uuml;ksek Fiyata G&ouml;re</LABEL></TD>
        <TD nowrap="nowrap">&nbsp;</TD>
        <TD nowrap="nowrap">&nbsp;</TD>
        </tr>
      <tr>
        <TD><INPUT id=sira5 value=3 type=radio name=sira></TD>
        <TD nowrap="nowrap"><LABEL for=sira5>Yeni Ilan Tarihe G&ouml;re</LABEL></TD>
        <TD nowrap="nowrap">&nbsp;</TD>
        <TD nowrap="nowrap">&nbsp;</TD>
        </tr>
      <tr>
        <TD><INPUT id=sira6 value=4 type=radio name=sira></TD>
        <TD nowrap="nowrap"><LABEL for=sira6>Eski Ilan Tarihe 
          G&ouml;re</LABEL></TD>
        <TD nowrap="nowrap">&nbsp;</TD>
        <TD nowrap="nowrap">&nbsp;</TD>
        </tr>
    </table></td>
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
    <td> <input type="image" src="tema1/img/hizliara.png" name="image" width="160" height="30"></td>
    </tr>
     <tr>
    <td>
    
   <a href="?action=ayrintili&amp;grup=1"><br />
    <img src="tema1/img/konut_detay.png" width="189" height="27" border="0" /></a><br />
      <br />
        <a href="?action=ayrintili&amp;grup=2"><img src="tema1/img/isyeri_detay.png" width="189" height="27" border="0" /></a><br />
        <br />
        <a href="?action=ayrintili&amp;grup=3"><img src="tema1/img/arsa_detay.png" width="189" height="27" border="0" /></a>  
    
    </td>
  </tr>
</table>
</form>