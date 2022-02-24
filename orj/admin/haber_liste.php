<table width="100%" border="0">
  <tr>
    <th width="3%" bgcolor="#D5D5D5" scope="col">NO</th>
    <th width="78%" bgcolor="#D5D5D5" scope="col">BAÞLIK</th>
    <th width="9%" bgcolor="#D5D5D5" scope="col">G&Ouml;R&Uuml;NME</th>
    <th width="7%" bgcolor="#D5D5D5" scope="col">D&Uuml;ZELT</th>
    <th width="3%" bgcolor="#D5D5D5" scope="col">SÝL</th>
  </tr>
  <?php
  
  $vt->sql("select * from haberler order by id desc")->sor();
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
	  
  ?>
  <tr>
    <td bgcolor="#EAEAEA">&nbsp;<?php echo $veri->id; ?></td>
    <td bgcolor="#EAEAEA">&nbsp;<?php echo $veri->baslik; ?></td>
    <td align="center" bgcolor="#EAEAEA">&nbsp;<?php echo $veri->gorunme; ?></td>
    <td align="center" bgcolor="#EAEAEA"><a href="index.php?action=haber&amp;subaction=haber_duzelt&amp;id=<?php echo $veri->id; ?>"><img src="etc/onebit_02.png" width="15" height="15" border="0" /></a></td>
    <td align="center" bgcolor="#EAEAEA">&nbsp;<a href="index.php?action=haber&amp;subaction=haber_sil&amp;id=<?php echo $veri->id; ?>"><img src="etc/onebit_33.png" width="15" height="15" border="0" /></a></td>
  </tr>
  <?php
  }
  ?>
</table>
