<?php
$vt->sql('update mesajlar set okuma=1 where id= '.temizle($_GET["id"]).'')->sor();


$vt->sql("select * from mesajlar where id = '".temizle($_GET["id"])."'")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) {
?>
<table width="50%" border="0">
  <tr>
    <th width="23%" align="right" nowrap="nowrap" bgcolor="#C0C0C0" scope="row"><blockquote>
      <p>No</p>
    </blockquote></th>
    <td width="77%" bgcolor="#C0C0C0">&nbsp;<?php echo $veri->id; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#EAEAEA" scope="row"><blockquote>
      <p>&#304;sim Soyad</p>
    </blockquote></th>
    <td bgcolor="#EAEAEA">&nbsp;<?php echo $veri->isim_soyad; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#C0C0C0" scope="row"><blockquote>
      <p>Email</p>
    </blockquote></th>
    <td bgcolor="#C0C0C0">&nbsp;<?php echo $veri->email; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#EAEAEA" scope="row"><blockquote>
      <p>Mesaj</p>
    </blockquote></th>
    <td bgcolor="#EAEAEA">&nbsp;<?php echo $veri->mesaj; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#C0C0C0" scope="row"><blockquote>
      <p>G&ouml;nderilme Tarihi</p>
    </blockquote></th>
    <td bgcolor="#C0C0C0">&nbsp;<?php echo $veri->zaman; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#EAEAEA" scope="row"><blockquote>
      <p>&#304;p adresi</p>
    </blockquote></th>
    <td bgcolor="#EAEAEA">&nbsp;<?php echo $veri->ip; ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#C0C0C0" scope="row"><blockquote>
      <p>Okunma</p>
    </blockquote></th>
    <td bgcolor="#C0C0C0">&nbsp;<?php if($veri->okuma==1) {echo "okundu";} else {echo "okunmadi";} ?></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#EAEAEA" scope="row"><blockquote>
      <p>Cevapla</p>
    </blockquote></th>
    <td bgcolor="#EAEAEA">&nbsp;<a href="index.php?action=mesajlar&amp;subaction=mesaj_cevapla&amp;id=<?php echo $veri->id; ?>">Cevapla</a></td>
  </tr>
  <tr>
    <th align="right" nowrap="nowrap" bgcolor="#C0C0C0" scope="row"><blockquote>
      <p>Sil</p>
    </blockquote></th>
    <td bgcolor="#C0C0C0">&nbsp;<a href="index.php?action=mesajlar&amp;subaction=mesaj_sil&amp;id=<?php echo $veri->id; ?>">Sil</a></td>
  </tr>
</table>
<?php
}
?>