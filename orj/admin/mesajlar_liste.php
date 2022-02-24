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
    <th width="35%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">&#304;sim Soyad</th>
    <th width="26%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">Email</th>
  <th width="17%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">G&ouml;nderilme Zaman&#305;</th>
      <th width="7%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">Okuma</th>
    <th width="7%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">Ýncele</th>
    <th width="4%" nowrap="nowrap" bgcolor="#C0C0C0" scope="col">Sil</th>
  </tr>
  <?php 
  $vt->sql("select * from mesajlar order by id desc , okuma desc")->sor();
  $veriler = $vt->alHepsi();
  foreach($veriler as $veri) {
  ?>
  <tr class="alt">
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<?php echo $veri->id; ?></td>
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<?php echo $veri->isim_soyad; ?></td>
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<?php echo $veri->email; ?></td>
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<?php echo $veri->zaman; ?></td>
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<a href="index.php?action=vitrin&amp;subaction=vitrin_onayla&amp;id=<?php echo $veri->id; ?>"><?php if($veri->okuma==1) {echo "okundu";} else {echo "okunmadi";} ?></a></td>
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<a href="index.php?action=mesajlar&amp;subaction=mesaj_incele&amp;id=<?php echo $veri->id; ?>"><img src="etc/onebit_02.png" width="15" height="15" border="0" /></a></td>
    <td valign="top" bgcolor="#EAEAEA">&nbsp;<a href="index.php?action=mesajlar&amp;subaction=mesaj_sil&amp;id=<?php echo $veri->id; ?>"><img src="etc/onebit_33.png" width="15" height="15" border="0" /></a></td>
  </tr>
  <?php
  }

?>
</table>
