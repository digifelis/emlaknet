<table width="40%" border="1" align="center">
  <tr>
    <th width="25%" align="left" nowrap="nowrap" scope="row">Bug&uuml;nki Vitrin �ste�i Say�s�</th>
    <td width="75%" align="left">&nbsp;
    <?php 
$vt->sql("update ilan_ticari set onay=2 where onay=0")->sor();

	$vt->sql("select count(id) from vitrin_istek where istek_tarihi = '".$tarih."' ")->sor();
	echo $vt->alTek();
	?>
       
    </td>
  </tr>
  <tr>
    <th align="left" nowrap="nowrap" scope="row">Onay Bekleyen Vitrin �ste�i</th>
    <td align="left">&nbsp; 
	<?php 
	$vt->sql("select count(id) from vitrin_istek where onay = 'HAYIR' ")->sor();
	echo $vt->alTek();
	?>
    </td>
  </tr>
  <tr>
    <th align="left" nowrap="nowrap" scope="row">Bug&uuml;n Eklenen �lan Say�s�</th>
    <td align="left">&nbsp;
    	<?php 
	$vt->sql("select count(id) from ilan_ticari where bas_tarihi = '".$tarih."' ")->sor();
	echo $vt->alTek();
	?>
    
    </td>
  </tr>
  <tr>
    <th align="left" nowrap="nowrap" scope="row">Toplam �lan Say�s�</th>
    <td align="left">&nbsp;
        	<?php 
	$vt->sql("select count(id) from ilan_ticari ")->sor();
	echo $vt->alTek();
	?>
    
    </td>
  </tr>
  <tr>
    <th align="left" nowrap="nowrap" scope="row">Onay Bekleyen &#304;lan Say&#305;s&#305;</th>
    <td align="left">&nbsp;        
    	<?php 
	$vt->sql("select count(id) from ilan_ticari where onay=0 ")->sor();
	echo $vt->alTek();
	?>
    </td>
  </tr>
  <tr>
    <th align="left" nowrap="nowrap" scope="row">Okunmam&#305;&#351; Mesaj say&#305;s&#305;</th>
    <td align="left">&nbsp;<?php 
	$vt->sql("select count(id) from mesajlar where okuma=0 ")->sor();
	echo $vt->alTek();
	?></td>
  </tr>
</table>