<script src="lib/jquery.js" type="text/javascript"></script>
<script src="lib/jquery.validate.js" type="text/javascript"></script>



<script>
  $(document).ready(function(){
    $("#form1").validate({
	
  rules: {
    isim_soyad: { required: true, maxlength: 100},
	email: { required: true, maxlength: 100 ,email:true},
	mesaj: { required: true, maxlength: 500},
	kod: { required: true, maxlength: 6 , minlength:6}
  },
  
  messages: {
	  isim_soyad:{required:'Bos birakmayiniz',maxlength:'çok uzun. en fazla 100 karakter'},
	  email:{required:'Bos birakmayiniz',maxlength:'çok uzun .en fazla 100 karakter' ,email:'Lütfen Geçerli Email adresi yaziniz'},
	  mesaj:{required:'Bos birakmayiniz',maxlength:'çok uzun . en fazla 500 karakter'},
	  kod:{required:'Bos birakmayiniz',maxlength:'çok uzun . en fazla 6 karakter' , minlength:'çok az . en az 6 karakter'}
  }
  
  
});
  });
  </script>
<?php

function GetIP(){ 
    if(getenv("HTTP_CLIENT_IP")) { 
        $ip = getenv("HTTP_CLIENT_IP"); 
    } elseif(getenv("HTTP_X_FORWARDED_FOR")) { 
        $ip = getenv("HTTP_X_FORWARDED_FOR"); 
        if (strstr($ip, ',')) { 
            $tmp = explode (',', $ip); 
            $ip = trim($tmp[0]); 
        } 
    } else { 
        $ip = getenv("REMOTE_ADDR"); 
    } 
    return $ip; 
}


if(temizle($_POST["isim_soyad"]) != "") {	
 		if(temizle($_POST["kod"]) == $_SESSION["guv"]) {



$vt->sql('insert into mesajlar values (Null,%s,%s,%s,%s,%s,%s)');
$vt->arg(temizle($_POST["isim_soyad"]),temizle($_POST["email"]),temizle($_POST["mesaj"]),$son_zaman,'0',GetIP());
$vt->sor();
if($vt->insertID() > 0) {
$cevap = "Mesajiniz Yetkiliye Iletilmistir. En kisa zamanda degerlendirilecektir.";
		} else {
$cevap= "Mesaj Kaydedilmesinde Hata Olustu lütfen Daha sonra Tekrar Deneyiniz.";
		}
					} else { 
$cevap = "Güvenlik kodu yanlis yazildi";}
}

?>
<table width="100%" border="0">
  <tr>
    <th scope="col"><?php echo $cevap.'<br><br>'; ?>&nbsp;</th>
  </tr>

  <tr>
    <td align="center"><h3><center>
      <strong>EMLAKNETTÜRKÝYE</strong>
    </center></h3>
      <table border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
        <tbody>
          <tr>
            <td width="9%" align="right" valign="top"><h3><strong>Adres:</strong>&nbsp;</h3></td>
            <td width="91%" align="left" valign="top"><h3> TÜRKÖZ MEDYA GURUP<br />
              <br />
             KARAKAÞ MAH FEVZÝ ÇAKMAK BULVARI OSMAN DÝNÇEL PASAJI NO:17   KIRKLARELÝ


</h3></td>
          </tr>
          <tr>
            <td align="right" valign="top"><h3><strong>Telefon:</strong>&nbsp;</h3></td>
            <td valign="top"><h3>0288 212 20 09 - 0 551 452 44 44 - 0 539 926 77 77 (Hafta i&ccedil;i 08:30 - 17:00)</h3></td>
          </tr>
<!--
          <tr>
            <td align="right" valign="top"><h3><strong>Fax : </strong></h3></td>
            <td valign="top"><h3>0288 212 2009</h3></td>
          </tr>
          <tr>
            <td align="right" valign="top"><h3><strong>Cep:</strong></h3></td>
            <td valign="top"><h3>0539 977 0909<br />
            0546 213 3232</h3></td>
          </tr>
          <tr>
            <td align="right" valign="top"><h3>&nbsp;</h3></td>
            <td valign="top"><h3><strong>Reklam Departman&#305;</strong></h3></td>
          </tr>
          <tr>
            <td align="right" valign="top"><h3><strong>Tel : &nbsp;</strong></h3></td>
            <td valign="top"><h3><strong>Anadolu Birimi &nbsp;=&gt;              &nbsp;&nbsp;0505 314 44 39</strong><strong><br />
                Marmara Birimi =&gt; &nbsp;&nbsp;0544 239 19 99 - 0553 231 0909<br />
            </strong>&#304;stanbul Birimi &nbsp;&nbsp;=&gt; &nbsp; 0546 213 3232</h3></td>
          </tr>
-->


          <tr>
            <td colspan="2" align="center" valign="top">
            <form id="form1" name="form1" method="post" action="index.php?action=iletisim" class="cmxform" >
             

              <fieldset>
                <legend><strong>&#304;leti&#351;im Formu</strong></legend>
                <table width="70%" border="0">
                  <tr>
                    <td>&#304;sim Soyad</td>
                    <td>
                      <label for="cisim_soyad">
                        <input type="text" name="isim_soyad" id="cisim_soyad" class="required" value="<?php  echo temizle($_POST["isim_soyad"]);  ?>" />
                        </label>
                      </td>
</tr>
                  <tr>
                    <td>E-mail</td>
                    <td>
                      <label for="cemail">
                        <input type="text" name="email" id="cemail"  class="required" value="<?php  echo temizle($_POST["email"]);  ?>" />
                        </label>
                     </td>
</tr>
                  <tr>
                    <td>Mesaj</td>
                    <td>
                      <label for="cmesaj">
                        <textarea name="mesaj" id="cmesaj" cols="45" rows="5"  class="required"><?php  echo temizle($_POST["mesaj"]);  ?></textarea>
                        </label>
                       </td>
</tr>
                  <tr>
                    <td>G&uuml;venlik Kodu<br />
                      <label><img src="g_resim.php" /></label></td>
                    <td>
                      <label for="ckod">
                        <input type="text" name="kod" id="ckod"  class="required" />
                        </label>
                     </td>
</tr>
                  <tr>
                    <td>&#304;p Numaran&#305;z</td>
                    <td><?php echo GetIP(); ?>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><label>
                      <input type="submit" name="button" id="button" value="Gönder" />
                    </label></td>
                  </tr>
                  <tr> </tr>
                  <tr> </tr>
                  <tr> </tr>
                  <tr> </tr>
                </table>
              </fieldset>
            </form></td>
          </tr>
        </tbody>
    </table></td>
  </tr>
</table>
