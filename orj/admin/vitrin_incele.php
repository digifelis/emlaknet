<?php
$vt->sql("select * from vitrin_istek where id = '".temizle($_GET["id"])."'")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) {
?>
<table width="100%" border="0">
  <tr>
    <th width="23%" align="right" nowrap="nowrap" bgcolor="#C0C0C0" scope="row"><blockquote>
      <p>No</p>
    </blockquote></th>
    <td width="77%" bgcolor="#C0C0C0">&nbsp;<?php echo $veri->id; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#EAEAEA" scope="row"><blockquote>
      <p>Ýlan No</p>
    </blockquote></th>
    <td bgcolor="#EAEAEA">&nbsp;<?php echo $veri->ilan_id; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#C0C0C0" scope="row"><blockquote>
      <p>Ýstek Tarihi</p>
    </blockquote></th>
    <td bgcolor="#C0C0C0">&nbsp;<?php echo $veri->istek_tarihi; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#EAEAEA" scope="row"><blockquote>
      <p>Vitrin Baþlangý&ccedil; Tarihi</p>
    </blockquote></th>
    <td bgcolor="#EAEAEA">&nbsp;<?php echo $veri->vitrin_bas; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#C0C0C0" scope="row"><blockquote>
      <p>Vitrin Bitiþ Tarihi</p>
    </blockquote></th>
    <td bgcolor="#C0C0C0">&nbsp;<?php echo $veri->vitrin_bit; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#EAEAEA" scope="row"><blockquote>
      <p>Vitrin G&uuml;n S&uuml;resi</p>
    </blockquote></th>
    <td bgcolor="#EAEAEA">&nbsp;<?php echo $veri->vitrin_gun; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#C0C0C0" scope="row"><blockquote>
      <p>Kart Sahibi</p>
    </blockquote></th>
    <td bgcolor="#C0C0C0">&nbsp;<?php echo $veri->kart_sahibi; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#EAEAEA" scope="row"><blockquote>
      <p>Onay</p>
    </blockquote></th>
    <td bgcolor="#EAEAEA">&nbsp;<?php echo $veri->onay; ?></td>
  </tr>
</table>
<?php
}
?>