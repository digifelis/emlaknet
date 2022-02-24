<style type="text/css">
#customers
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:100%;
border-collapse:collapse;
}
#customers td, #customers th 
{
font-size:1em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
}
#customers th 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#A7C942;
color:#ffffff;
}
#customers tr.alt td 
{
color:#000000;
background-color:#EAF2D3;
}


</style>

<table width="100%" border="0" id="customers">
  <tr>
    <th width="4%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">No</th>
    <th width="5%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">Ýlan No</th>
    <th width="6%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">Ýstek Tarihi</th>
  <th width="68%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">Kart Sahibi</th>
      <th width="6%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">Onay</th>
    <th width="7%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">Ýncele</th>
    <th width="4%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">Sil</th>
  </tr>
  <?php 
  $vt->sql("select * from vitrin_istek order by id desc , onay desc")->sor();
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
  ?>
  <tr class="alt">
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<?php echo $veri->id; ?></td>
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<a href="../index.php?action=detail&id=<?php echo $veri->ilan_id; ?>" target="_blank"><?php echo $veri->ilan_id; ?></a></td>
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<?php echo $veri->istek_tarihi; ?></td>
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<?php echo $veri->kart_sahibi; ?></td>
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<a href="index.php?action=vitrin&amp;subaction=vitrin_onayla&amp;id=<?php echo $veri->id; ?>"><?php echo $veri->onay; ?></a></td>
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<a href="index.php?action=vitrin&amp;subaction=vitrin_incele&amp;id=<?php echo $veri->id; ?>"><img src="etc/onebit_02.png" width="15" height="15" border="0" /></a></td>
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<a href="index.php?action=vitrin&amp;subaction=vitrin_sil&amp;id=<?php echo $veri->id; ?>"><img src="etc/onebit_33.png" width="15" height="15" border="0" /></a></td>
  </tr>
  <?php
  }

?>
</table>
