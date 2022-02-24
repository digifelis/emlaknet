<?php
if(temizle($_POST["konu"]) != "") {
//////////////////
$mesaj = temizle($_POST["mesaj"]).'<br>
Not : emailin size yanlis geldigini düsünüyorsaniz lütfen dikkate almayiniz.<br>
';
$eposta_konusu = temizle($_POST["konu"]);
include("../mail/mailer.class.php");
$mailer=new mailer(temizle($_POST['alici']),$eposta_konusu,$mesaj,"From: ".$admin_email."");
// $mailer->file("tema1/img/emlaknet11.jpg");
// $mailer->attach("text/plain","see.txt","tada 2 attachments");
$test=$mailer->send();
////////////

			echo "<center>Mesaj Gönderildi</center>";

}

$vt->sql("select * from mesajlar where id = '".temizle($_GET["id"])."'")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) {
?>
<form id="form1" name="form1" method="post" action="">
  <table width="47%" border="1" align="center">
    <tr>
      <td width="14%">Al&#305;c&#305;</td>
      <td width="86%"><label>
        <input name="alici" type="text" id="alici" readonly="readonly"  value="<?php echo $veri->email; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Konu</td>
      <td><label>
        <input type="text" name="konu" id="konu" value="<?php echo temizle($_POST["konu"]);  ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Mesaj</td>
      <td><label>
        <textarea name="mesaj" id="mesaj" cols="45" rows="5"><?php echo temizle($_POST["mesaj"]); ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="    G&ouml;nder    " />
      </label></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php
}
?>
