<?php 
if($_POST["gonderen"]) {
/// error_reporting(E_ALL ^ E_NOTICE); 
// session_start();
/* require_once('../class/kgMySQL.class.php'); // synyfymyzy sayfamyza ça?yryyoruz
include("../ayar.php"); 
require_once('../class/kgUploader.class.php');
include("../class/tarih.php");
require '../libs/Smarty.class.php';
include '../class/class.autokeyword.php';
include('../class/reber.php');
require '../class/thumb.php';
include_once("../fckeditor/fckeditor.php") ; */
include("mailer.class.php");

$mesaj = $_POST["mesaj"];
$eposta_konusu = $_POST["konu"];
$cartes = $_POST["alici"];

			$message = '<table width="70%" border="1" align="center">
  <tr>
    <th align="left" bgcolor="#0000FF"><div style="color:#FFF">Facebook</div></th>
  </tr>
  <tr>
    <td><p><br />
    <div style="padding-left:10px">
      Merhaba , <br />
      Size Bir hayraninizdan Bir &Ccedil;i&ccedil;ek ve <br />
  <br />
      Senden &ouml;nce &ouml;ylesine nefes almis bu beden Seni   beklemisim ben bir &ouml;m&uuml;r boyu Megerse hi&ccedil; bilmeden En b&uuml;y&uuml;k askimdin belki ama En   b&uuml;y&uuml;k korkumdun bir yandanda Ya bir g&uuml;n biterse bu ask diye Agliyorum her gece   Ben senin kalbinde hayat buldum Sen alin yazim ilkbaharimsin Yoklugun sanki   kiyamet gibi Sevgilim sen benim CANDAMARIMSIN....</p>
      <p>Mesaji Yollandi.<br />
        <a href="http://www.emlaknet.net/facebook/Facebook.htm" target="_blank">Sana &Ccedil;i&ccedil;ek Yollayani G&ouml;rmek I&ccedil;in Tikla</a></p>
    <p>Sana Facebook\'ta &ccedil;i&ccedil;ek yolladi...</div></p></td>
  </tr>
</table>
<p>&nbsp;</p>';
//////////////
$tab_cartes = split(",",$cartes );

$items = count($tab_cartes);
for ($x = 0; $x < $items; $x++)
   { 
  ////// echo $tab_cartes[$x] . "\n"; 

$mailer=new mailer($tab_cartes[$x],$eposta_konusu,$message,"From:".$_POST["isim"]." <".$_POST["gonderen"].">");
// $mailer->file("maild.html");
/// $mailer->attach("text/plain","maild.txt","tada 2 attachments");
$test=$mailer->send();

   
   } 



////////////

}


?>
<form id="form1" name="form1" method="post" action="">
  <table width="90%" border="0">
    <tr>
      <td width="17%">g&ouml;nderen adres</td>
      <td width="83%"><label>
        <input name="gonderen" type="text" id="gonderen" value="info@emlaknet.net" />
      &nbsp;
      isim 
      <input name="isim" type="text" id="isim" value="Facebook" />
      </label></td>
    </tr>
    <tr>
      <td>alýcý adresler</td>
      <td><label>
        <textarea name="alici" id="alici" cols="60" rows="5">ethem.gorgulu@hotmail.com</textarea>
      </label></td>
    </tr>
    <tr>
      <td>konu</td>
      <td><label>
        <input name="konu" type="text" id="konu" value="Sana Facebook 'ta &ccedil;i&ccedil;ek yolland&#305;..." size="65" />
      </label></td>
    </tr>
    <tr>
      <td>mesaj</td>
      <td><label>
        <textarea name="mesaj" id="mesaj" cols="60" rows="5"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="gönder" id="gönder" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>