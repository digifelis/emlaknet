<?php
ob_start();
session_start();
/// sabit synyflaryn eklenmesi
require_once("../class/eb.vt.php");
require_once("../class/tarih.php");
require_once("../class/eb.myArray.php");
require_once("../class/eb.formDogrula.php");
require_once("../config.php");

////////////////
if($_SESSION["id"] != '' and temizle($_POST["aciklama"]) != '' ) {

$vt->sql("insert  into ilan_kriter (id,kriter,aciklama,kullanici_id) values (NULL,'".temizle($_POST["kriterler"])."','".temizle($_POST["aciklama"])."','".$_SESSION["id"]."')  ")->sor();
if($vt->affRows() != 0) {
echo "<CENTER>ARAMA KRÝTERLERÝNÝZ LÝSTENÝZ EKLENMÝÞTÝR</CENTER>";	
} else { echo "<center>ARAMA KRÝTERÝ EKLENEMEDÝ. TEKRAR DENEYÝNÝZ.HATA DEVAM EDERSE SÝTE YÖNETÝCÝSÝNE DURUMU BÝLDÝRÝNÝZ.</center>"; }

	
} else { echo "<center>ÜYE GÝRÝÞÝ YAPILMADAN BU ÖZELLÝK KULLANILAMAZ</center>"; }

?>
<?php 
if(temizle($_POST["islem"]) == "kriter_ekle") {
	?>
<form id="form1" name="form1" method="post" action="">
  <table width="49%" border="0">
    <tr>
      <td width="16%">A&Ccedil;IKLAMA</td>
      <td width="84%"><label>
        <textarea name="aciklama" id="textarea" cols="35" rows="8"></textarea>
        <input type="hidden" name="kriterler" value="<?php echo temizle($_POST["kriter"]); ?>" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="KAYDET" />
      </label></td>
    </tr>
  </table>
</form>
<?php } ?>