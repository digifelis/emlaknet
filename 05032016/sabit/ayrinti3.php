<form action="" method="get">
<table width="100%" border="0">
  <tr>
    <th colspan="4" bgcolor="#D5D5D5">AYRINTILI ARSA  &#304;LAN ARAMA</th>
  </tr>
  <tr>
    <td width="23%"><br />
      <FONT color=#006600 
                        size=2><STRONG>Gayri Menkul T&uuml;r&uuml;</STRONG></FONT><br />
<select name="tur" id="tur">
  <?php 


$vt->sql('select * from ilan_tipi   where tip=1 and grup_id=3 ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }

$vt->sql('select * from ilan_tipi   where tip=0 and grup_id=3 ')->sor();
$veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ echo ' <option value="'.$veri->id.'">'.$veri->adi.'</option>'; }
 ?>
</select>
      <br /></td>
    <td colspan="3" nowrap="nowrap"><br />
     <FONT color=#006600 
                        size=2><STRONG> Metrekare Aral&#305;&#287;&#305;</STRONG></FONT><br />
      <label>
        <SELECT style="WIDTH: 130px" class=input name=metrekare_alt id="metrekare_alt"> 
                          <OPTION selected value=0>farketmez ------</OPTION> 
                          <OPTION value=1>1 m²</OPTION> <OPTION value=25>25 
                          m²</OPTION> <OPTION value=50>50 m²</OPTION> <OPTION 
                          value=75>75 m²</OPTION> <OPTION value=100>100 
                          m²</OPTION> <OPTION value=125>125 m²</OPTION> <OPTION 
                          value=150>150 m²</OPTION> <OPTION value=200>200 
                          m²</OPTION> <OPTION value=300>300 m²</OPTION> <OPTION 
                          value=400>400 m²</OPTION> <OPTION value=500>500 
                          m²</OPTION> <OPTION value=750>750 m²</OPTION> <OPTION 
                          value=1000>1.000 m²</OPTION> <OPTION value=5000>5.000 
                          m²</OPTION> <OPTION value=10000>10.000 m²</OPTION> 
                          <OPTION value=25000>25.000 m²</OPTION> <OPTION 
                          value=50000>50.000 m²</OPTION> <OPTION 
                          value=100000>100.000 m²</OPTION> <OPTION 
                          value=1000000>1.000.000 m²</OPTION></SELECT>
      &nbsp;ile&nbsp;
      <SELECT style="WIDTH: 130px" class=input name=metrekare_ust id="metrekare_ust"> 
                          <OPTION selected value=0>farketmez ------</OPTION> 
                          <OPTION value=1>1 m²</OPTION> <OPTION value=25>25 
                          m²</OPTION> <OPTION value=50>50 m²</OPTION> <OPTION 
                          value=75>75 m²</OPTION> <OPTION value=100>100 
                          m²</OPTION> <OPTION value=125>125 m²</OPTION> <OPTION 
                          value=150>150 m²</OPTION> <OPTION value=200>200 
                          m²</OPTION> <OPTION value=300>300 m²</OPTION> <OPTION 
                          value=400>400 m²</OPTION> <OPTION value=500>500 
                          m²</OPTION> <OPTION value=750>750 m²</OPTION> <OPTION 
                          value=1000>1.000 m²</OPTION> <OPTION value=5000>5.000 
                          m²</OPTION> <OPTION value=10000>10.000 m²</OPTION> 
          <OPTION value=25000>25.000 m²</OPTION> <OPTION 
                          value=50000>50.000 m²</OPTION> <OPTION 
                          value=100000>100.000 m²</OPTION> <OPTION 
                          value=1000000>1.000.000 m²</OPTION></SELECT>
      </label></td>
   
    </tr>
  <tr>
    <td><FONT color=#006600 
                        size=2><STRONG>&#304;L</STRONG></FONT><br />
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
    <td colspan="3" nowrap="nowrap"> <FONT color=#006600 
                        size=2><STRONG>Alt Yap&#305; ( Yasal Durum )</STRONG></FONT><br />
     <?php 
   $vt->sql("select * from alt_yapi  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {


$alt_yapi[$i] = '<input 
name=a1 type=checkbox  id=a1 value='.$veri->id.'  />  <LABEL for=d41>'.$veri->adi.'</LABEL>';


	$i++;
	 } 
 echo resim_listele(4,2,2,$alt_yapi); 
 
 ?>  
 
    </td>
    </tr>
  <tr>
    <td><FONT color=#006600 
                        size=2><STRONG>&#304;L&Ccedil;E</STRONG></FONT><br />
  <select name="ilceler" id="ilceler" size="1" onchange="koyleri_getir();" />
  <option value="">Il&ccedil;e se&ccedil;iniz</option>
  </select></td>
    <td colspan="3" nowrap="nowrap">
    
    <FONT color=#006600 
                        size=2><STRONG>Çevre özellikleri</STRONG></FONT><br />
    
    <?php 
   $vt->sql("select * from cevre_ozellikleri  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {


$data2[$i] = '<input 
name=a1 type=checkbox  id=a1 value='.$veri->id.'  />  <LABEL for=d41>'.$veri->adi.'</LABEL>';


	$i++;
	 } 
 echo resim_listele(4,2,2,$data2); 
 
 ?>
    
    
    </td>
    </tr>
  <tr>
    <td><FONT color=#006600 
                        size=2><STRONG>SEMT/K&Ouml;Y</STRONG></FONT><br />
      <select name="koyler" id="koyler" size="1" />
  <option value="">Semt-K&ouml;y se&ccedil;iniz</option>
  </select>
      
      <input type=hidden  onClick="ilceleri_getir();"  />
      <input type=hidden onClick="koyleri_getir();"  />  </td>
    <td colspan="3" nowrap="nowrap">
    <FONT color=#006600 
                        size=2><STRONG>Tapu Durumu</STRONG></FONT><br />
     
    <?php 
   $vt->sql("select * from tapu_durumu  ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {


$tapu_durumu[$i] = '<input 
name=a1 type=checkbox  id=a1 value='.$veri->id.'  />  <LABEL for=d41>'.$veri->adi.'</LABEL>';


	$i++;
	 } 
 echo resim_listele(4,2,2,$tapu_durumu); 
 
 ?>
    
    
    </td>
    </tr>
  <tr>
    <td align="left" valign="top"><input name="action" type="hidden" id="action" value="arama2" />&nbsp;<FONT color=#006600 
                        size=2><STRONG>F&#304;YAT ARALI&#286;I</STRONG></FONT><br />
  <input name="fiyat_alt" type="text"  id="fiyat_alt" onKeyPress="return numbersonly(this, event)" size="6" maxlength="8" />
      <input name="fiyat_ust" type="text"  id="fiyat_ust" onKeyPress="return numbersonly(this, event)" size="6" maxlength="8" />
      <select name="birim" id="birim">
        <option value="1" selected="selected">TL</option>
        <option value="2">Euro</option>
        <option value="3">USD</option>
        <option value="4">GBP</option>
      </select>    </td>
    <td width="14%" align="left" valign="top" nowrap="nowrap">
      <table border="0" cellspacing="0" cellpadding="0">
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
    <td width="13%" align="left" valign="top" nowrap="nowrap"><table border="0" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td colspan="2"><font color="#006600" 
                        size="2"><strong>Listeleme T&uuml;r&uuml;:</strong></font></td>
        </tr>
        <tr>
          <td><input id="L1" value="1" checked="checked" type="radio" 
                      name="liste" /></td>
          <td><label for="L1">Detayl&#305; Liste</label></td>
        </tr>
        <tr>
          <td><input id="L3" value="3" type="radio" name="liste" /></td>
          <td><label for="L3">K&#305;sa 
            Liste</label></td>
        </tr>
      </tbody>
    </table></td>
    <td width="50%" align="left" valign="top" nowrap="nowrap"><table border="0" cellspacing="0" cellpadding="0">
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
    <td align="left" valign="top"><table width="100%" border="0">
      <tr>
        <td nowrap="nowrap"><font color="#006600" 
                        size="2"><strong>&#304;lan no :</strong></font></td>
        <td><label>
          <input name="ilan_no" type="text" id="ilan_no" onkeypress="return numbersonly(this, event)" size="20" />
        </label></td>
      </tr>
    </table>
      <table width="100%" border="0">
        <tr>
          <td nowrap="nowrap"><font color="#006600" 
                        size="2"><strong>Dosya no :</strong></font></td>
          <td><label>
            <input name="dosya_no" type="text" id="dosya_no" onkeypress="return numbersonly(this, event)" size="20" />
          </label></td>
        </tr>
      </table></td>
    <td colspan="3" valign="top" nowrap="nowrap"><br />
      <table width="100%" border="0">
        <tr>
          <td colspan="4">&nbsp;<font color="#006600" 
                        size="2"><strong>S&#305;ralama T&uuml;r&uuml;:</strong></font></td>
          </tr>
        <tr>
          <td width="33"><input id="sira1" value="1" checked="checked" type="radio" 
                      name="sira" /></td>
          <td width="654" nowrap="nowrap"><label for="sira1">En D&uuml;&#351;&uuml;k Fiyata G&ouml;re</label></td>
          <td width="17" nowrap="nowrap">&nbsp;</td>
          <td width="40" nowrap="nowrap">&nbsp;&nbsp;</td>
          </tr>
        <tr>
          <td><input id="sira3" value="2" type="radio" name="sira" /></td>
          <td nowrap="nowrap"><label for="sira3">En Y&uuml;ksek Fiyata G&ouml;re</label></td>
          <td nowrap="nowrap">&nbsp;</td>
          <td nowrap="nowrap">&nbsp;</td>
          </tr>
        <tr>
          <td><input id="sira5" value="3" type="radio" name="sira" /></td>
          <td nowrap="nowrap"><label for="sira5">Yeni &#304;lan Tarihe G&ouml;re</label></td>
          <td nowrap="nowrap">&nbsp;</td>
          <td nowrap="nowrap">&nbsp;</td>
          </tr>
        <tr>
          <td><input id="sira6" value="4" type="radio" name="sira" /></td>
          <td nowrap="nowrap"><label for="sira6">Eski &#304;lan Tarihe 
            G&ouml;re</label></td>
          <td nowrap="nowrap">&nbsp;</td>
          <td nowrap="nowrap">&nbsp;</td>
          </tr>
      </table></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td> <input type="image" src="tema1/img/hizliara.png" name="image" width="160" height="30"></td>
    <td colspan="3">&nbsp;</td>
    </tr>
</table>
</form>