<?php
				  
//// form do�rulama
  if(temizle($_POST["pass1"]) !="") {	
	
$fdo = new formDogrula('uye_bilgileri', 'post'); 

// formu do�rularken kullan�lacak kurallar 
$fdo->kurallar( 

	array('email', 'E-mail', 'gerekli|eposta')
	); 

// formu do�rulat 
if( $fdo->dogrulat() ):  
////// veritaban� kayd�

$vt->sql('update `uyeler` set  sifre="'.$_POST['pass1'].'"  , isim_soyad = "'.temizle($_POST['name']).'"  , adres = "'.temizle($_POST['adresse']).'" , posta_kodu="'.temizle($_POST["plz"]).'",ilce="'.temizle($_POST["ort"]).'",il="'.temizle($_POST["region_bundesland"]).'",email="'.temizle($_POST["email"]).'",tel1="'.temizle($_POST["telefon"]).'",ceptel="'.temizle($_POST["handy"]).'" ,kod1="'.temizle($_POST["telefon_areacode"]).'",kod3="'.temizle($_POST["handy_areacode"]).'" , onay="'.temizle($_POST["onay"]).'"    where id= "'.$_GET['id'].'"');
///////    , isim_soyad = "'.temizle($_POST['name']).'"  , adres = "'.temizle($_POST['adresse']).'" , posta_kodu="'.temizle($_POST["plz"]).'",ilce="'.temizle($_POST["ort"]).'",il="'.temizle($_POST["region_bundesland"]).'",email="'.temizle($_POST["email"]).'",tel1="'.temizle($_POST["telefon"]).'",ceptel="'.temizle($_POST["handy"]).'" 
$vt->sor();

else: 

$uyari = '<div aling=center ><ul>'.
    $fdo->yazHatalar('<li>', '</li>', true).' </ul></div>';         
endif; 

 }

$vt->sql('select * from uyeler   where id = "'.temizle($_GET['id']).'" ');
//////     where kullanici_adi = "'.temizle($_POST["email"]).'" and sifre="'.temizle($_POST["password"]).'" 
 $vt->sor();
 $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	


?>
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=../tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="../tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>&nbsp;</FONT></STRONG></DIV></TD>
          <TD background=../tema/img/bg_fahne.gif width="100%" 
          align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="../tema/img/spacer.gif" width=1 
            height=2><BR></DIV></TD>
          <TD vAlign=top background=../tema/img/bg_fahne.gif 
          width=10 align=left><IMG border=0 alt="" 
            src="../tema/img/spacer.gif" width=11 
        height=30></TD></TR>
        <TR>
          <TD colSpan=3>
            <TABLE border=0 cellSpacing=0 cellPadding=4 width="100%" 
            bgColor=#f7f7f7 align=center>
              <TBODY>
              <TR>
                <TD 
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid">
                <FORM encType=multipart/form-data method=post  action="" name="uye_bilgileri">
    <INPUT value=douserdaten type=hidden  name=action>
                  <TABLE border=0 cellSpacing=3 cellPadding=3 width="90%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD colSpan=2><FONT size=4><STRONG>�leti�im 
                        Bilgileriniz</STRONG></FONT><BR><BR>�leti�im 
                        Bilgileriniz Formunda Yapmak �stedi�iniz De�i�iklikleri, 
                        A�a��daki Alanlar� Kullanarak Ger&ccedil;ekle�trebilirsiniz. 
                        <BR>
     </TD></TR>
                    <TR>
                      <TD width=90><STRONG>&Uuml;ye ID:</STRONG></TD>
                      <TD><STRONG><?php echo $veri->id; ?></STRONG></TD></TR>
                    <TR>
                      <TD width=120 noWrap><STRONG>Kullan�c� �smi:</STRONG> 
</TD>
                      <TD><?php echo $veri->kullanici_adi; ?></TD></TR>
                    <TR>
                      <TD><STRONG>�ifre:</STRONG></TD>
                      <TD><INPUT class=input maxLength=64 size=30 
                         name=pass1  value="<?php echo $veri->sifre; ?>"></TD></TR>
                    <TR>
                      <TD vAlign=top noWrap><STRONG>�ifre 
(Tekrar):</STRONG></TD>
                      <TD vAlign=top><INPUT class=input 
                        maxLength=64 size=30 name=pass2  value="<?php echo $veri->sifre; ?>"></TD></TR>
                    <TR>
                      <TD colSpan=2>( �ifrenizi de�i�tirmek istiyorsan�z 
                        yukar�daki �ifre ve �ifre (Tekrar) b&ouml;l&uuml;mlerini 
                        kullanabilirsiniz. )<BR><BR></TD></TR>
                    <TR>
                      <TD></TD>
                      <TD><BR></TD></TR>
                 <!--   <TR>
                      <TD vAlign=top noWrap><STRONG>Emlak&ccedil;� 
                      Sayfan�z:</STRONG></TD>
                      <TD>Hen&uuml;z Aktif De�il</TD></TR> -->
                    <TR>
                      <TD><STRONG>Yetkili Ki�i:</STRONG></TD>
                      <TD><INPUT class=input value="<?php echo $veri->isim_soyad; ?>" maxLength=64 
                        size=30 name=name></TD></TR>
                    <TR>
                      <TD><STRONG>Adres :</STRONG></TD>
                      <TD><INPUT class=input 
                        value="<?php echo $veri->adres; ?>" maxLength=64 
                        size=30 name=adresse></TD></TR>
                    <TR>
                      <TD><STRONG>Posta Kodu:</STRONG></TD>
                      <TD><INPUT class=input value="<?php echo $veri->posta_kodu; ?>" maxLength=5 size=5 
                        name=plz>&nbsp;&nbsp;/&nbsp;&nbsp;<STRONG>�L&Ccedil;E:</STRONG> 
                        &nbsp;&nbsp;<INPUT class=input value="<?php echo $veri->ilce; ?>" maxLength=64 
                        name=ort></TD></TR>
                    <TR>
                      <TD><STRONG>�L:</STRONG></TD>
                      <TD><SELECT name=region_bundesland size=1 class=input>
                        
                        <?php
						
		  $vt->sql("select * from sehir order by plaka ASC")->sor();
        $veriler1 = $vt->alHepsi();
		foreach ($veriler1 as $veri1) 
		{
			$secili = "";
			if($veri1->sehirID == $veri->il) { $secili = 'selected="selected"';   }
			echo '<option value="'.$veri1->sehirID.'" '.$secili.' >'.$veri1->sehiradiUpper.'</option> ';
			$secili = "";
		}
                
         ?>     
                        </SELECT> </TD></TR>
                    <TR>
                      <TD></TD>
                      <TD><BR></TD></TR>
                    <TR>
                      <TD><STRONG>E-Mail:</STRONG></TD>
                      <TD><INPUT class=input value="<?php echo $veri->email; ?>" 
                        maxLength=64 size=30 name=email></TD></TR>
                    <TR>
                      <TD></TD>
                      <TD><BR></TD></TR>
                    <TR>
                      <TD vAlign=top><STRONG>Telefon:</STRONG></TD>
                      <TD>
                        <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" 
                        align=center>
                          <TBODY>
                          <TR>
                            <TD width="20%"><SELECT class=input size=1 
                              name=telefon_areacode>
                              <OPTION value="0 212" <?php if (!(strcmp("0 212", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0 212</OPTION>
                              <OPTION value="0 216" <?php if (!(strcmp("0 216", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 216</OPTION>
                              <OPTION value="0 222" <?php if (!(strcmp("0 222", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 222</OPTION>
                              <OPTION value="0 224" <?php if (!(strcmp("0 224", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 224</OPTION>
                              <OPTION value="0 226" <?php if (!(strcmp("0 226", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 226</OPTION>
                              <OPTION value="0 228" <?php if (!(strcmp("0 228", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 228</OPTION>
                              <OPTION value="0 232" <?php if (!(strcmp("0 232", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 232</OPTION>
                              <OPTION value="0 236" <?php if (!(strcmp("0 236", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 236</OPTION>
                              <OPTION value="0 242" <?php if (!(strcmp("0 242", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 242</OPTION>
                              <OPTION value="0 246" <?php if (!(strcmp("0 246", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 246</OPTION>
                              <OPTION value="0 248" <?php if (!(strcmp("0 248", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 248</OPTION>
                              <OPTION value="0 252" <?php if (!(strcmp("0 252", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 252</OPTION>
                              <OPTION value="0 256" <?php if (!(strcmp("0 256", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 256</OPTION>
                              <OPTION value="0 258" <?php if (!(strcmp("0 258", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 258</OPTION>
                              <OPTION value="0 262" <?php if (!(strcmp("0 262", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 262</OPTION>
                              <OPTION value="0 264" <?php if (!(strcmp("0 264", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 264</OPTION>
                              <OPTION value="0 266" <?php if (!(strcmp("0 266", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 266</OPTION>
                              <OPTION value="0 272" <?php if (!(strcmp("0 272", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 272</OPTION>
                              <OPTION value="0 274" <?php if (!(strcmp("0 274", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 274</OPTION>
                              <OPTION value="0 276" <?php if (!(strcmp("0 276", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 276</OPTION>
                              <OPTION value="0 282" <?php if (!(strcmp("0 282", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 282</OPTION>
                              <OPTION value="0 284" <?php if (!(strcmp("0 284", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 284</OPTION>
                              <OPTION value="0 286" <?php if (!(strcmp("0 286", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 286</OPTION>
                              <OPTION value="0 288" <?php if (!(strcmp("0 288", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 288</OPTION>
                              <OPTION value="0 312" <?php if (!(strcmp("0 312", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 312</OPTION>
                              <OPTION value="0 318" <?php if (!(strcmp("0 318", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 318</OPTION>
                              <OPTION value="0 322" <?php if (!(strcmp("0 322", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 322</OPTION>
                              <OPTION value="0 324" <?php if (!(strcmp("0 324", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 324</OPTION>
                              <OPTION value="0 326" <?php if (!(strcmp("0 326", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 326</OPTION>
                              <OPTION value="0 328" <?php if (!(strcmp("0 328", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 328</OPTION>
                              <OPTION value="0 332" <?php if (!(strcmp("0 332", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 332</OPTION>
                              <OPTION value="0 338" <?php if (!(strcmp("0 338", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 338</OPTION>
                              <OPTION value="0 342" <?php if (!(strcmp("0 342", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 342</OPTION>
                              <OPTION value="0 344" <?php if (!(strcmp("0 344", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 344</OPTION>
                              <OPTION value="0 346" <?php if (!(strcmp("0 346", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 346</OPTION>
                              <OPTION value="0 348" <?php if (!(strcmp("0 348", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 348</OPTION>
                              <OPTION value="0 352" <?php if (!(strcmp("0 352", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 352</OPTION>
                              <OPTION value="0 354" <?php if (!(strcmp("0 354", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 354</OPTION>
                              <OPTION value="0 356" <?php if (!(strcmp("0 356", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 356</OPTION>
                              <OPTION value="0 358" <?php if (!(strcmp("0 358", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 358</OPTION>
                              <OPTION value="0 362" <?php if (!(strcmp("0 362", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 362</OPTION>
                              <OPTION value="0 364" <?php if (!(strcmp("0 364", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 364</OPTION>
                              <OPTION value="0 366" <?php if (!(strcmp("0 366", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 366</OPTION>
                              <OPTION value="0 368" <?php if (!(strcmp("0 368", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 368</OPTION>
                              <OPTION value="0 370" <?php if (!(strcmp("0 370", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 370</OPTION>
                              <OPTION value="0 372" <?php if (!(strcmp("0 372", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 372</OPTION>
                              <OPTION value="0 374" <?php if (!(strcmp("0 374", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 374</OPTION>
                              <OPTION value="0 376" <?php if (!(strcmp("0 376", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 376</OPTION>
                              <OPTION value="0 378" <?php if (!(strcmp("0 378", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 378</OPTION>
                              <OPTION value="0 380" <?php if (!(strcmp("0 380", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 380</OPTION>
                              <OPTION value="0 382" <?php if (!(strcmp("0 382", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 382</OPTION>
                              <OPTION value="0 384" <?php if (!(strcmp("0 384", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 384</OPTION>
                              <OPTION value="0 386" <?php if (!(strcmp("0 386", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 386</OPTION>
                              <OPTION value="0 388" <?php if (!(strcmp("0 388", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 388</OPTION>
                              <OPTION value="0 412" <?php if (!(strcmp("0 412", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 412</OPTION>
                              <OPTION value="0 414" <?php if (!(strcmp("0 414", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 414</OPTION>
                              <OPTION  value="0 416" <?php if (!(strcmp("0 416", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 416</OPTION>
                              <OPTION value="0 422" <?php if (!(strcmp("0 422", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 422</OPTION>
                              <OPTION value="0 424" <?php if (!(strcmp("0 424", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 424</OPTION>
                              <OPTION value="0 426" <?php if (!(strcmp("0 426", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 426</OPTION>
                              <OPTION value="0 428" <?php if (!(strcmp("0 428", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 428</OPTION>
                              <OPTION value="0 432" <?php if (!(strcmp("0 432", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 432</OPTION>
                              <OPTION value="0 434" <?php if (!(strcmp("0 434", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 434</OPTION>
                              <OPTION value="0 436" <?php if (!(strcmp("0 436", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 436</OPTION>
                              <OPTION value="0 438" <?php if (!(strcmp("0 438", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 438</OPTION>
                              <OPTION value="0 442" <?php if (!(strcmp("0 442", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 442</OPTION>
                              <OPTION value="0 446" <?php if (!(strcmp("0 446", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 446</OPTION>
                              <OPTION value="0 452" <?php if (!(strcmp("0 452", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 452</OPTION>
                              <OPTION value="0 454" <?php if (!(strcmp("0 454", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 454</OPTION>
                              <OPTION value="0 456" <?php if (!(strcmp("0 456", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 456</OPTION>
                              <OPTION value="0 458" <?php if (!(strcmp("0 458", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 458</OPTION>
                              <OPTION value="0 462" <?php if (!(strcmp("0 462", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 462</OPTION>
                              <OPTION value="0 464" <?php if (!(strcmp("0 464", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 464</OPTION>
                              <OPTION value="0 466" <?php if (!(strcmp("0 466", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 466</OPTION>
                              <OPTION value="0 472" <?php if (!(strcmp("0 472", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 472</OPTION>
                              <OPTION value="0 474" <?php if (!(strcmp("0 474", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 474</OPTION>
                              <OPTION value="0 476" <?php if (!(strcmp("0 476", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 476</OPTION>
                              <OPTION value="0 478" <?php if (!(strcmp("0 478", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 478</OPTION>
                              <OPTION value="0 482" <?php if (!(strcmp("0 482", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 482</OPTION>
                              <OPTION value="0 484" <?php if (!(strcmp("0 484", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 484</OPTION>
                              <OPTION value="0 486" <?php if (!(strcmp("0 486", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                                 486</OPTION>
                              <OPTION value="0 488" <?php if (!(strcmp("0 488", $veri->kod1))) {echo "selected=\"selected\"";} ?>>0                               488</OPTION></SELECT> </TD>
                            <TD>&nbsp;&nbsp;&nbsp;</TD>
                            <TD width="80%"><INPUT class=input value="<?php echo $veri->tel1; ?>" 
                              maxLength=8 size=10 name=telefon> 
                        </TD></TR></TBODY></TABLE></TD></TR>
                    <TR>
                      <TD vAlign=top><STRONG>Cep:</STRONG></TD>
                      <TD>
                        <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" 
                        align=center>
                          <TBODY>
                          <TR>
                            <TD width="20%"><SELECT class=input size=1 
                              name=handy_areacode>
                              <OPTION selected 
                                value="0 505" <?php if (!(strcmp("0 505", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 505</OPTION>
                              <OPTION 
                                value="0 506" <?php if (!(strcmp("0 506", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 506</OPTION>
                              <OPTION 
                                value="0 507" <?php if (!(strcmp("0 507", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 507</OPTION>
                              <OPTION 
                                value="0 530" <?php if (!(strcmp("0 530", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 530</OPTION><OPTION 
                                value="0 531" <?php if (!(strcmp("0 531", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 531</OPTION>
                              <OPTION 
                                value="0 532" <?php if (!(strcmp("0 532", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 532</OPTION>
                              <OPTION 
                                value="0 533" <?php if (!(strcmp("0 533", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 533</OPTION>
                              <OPTION 
                                value="0 534" <?php if (!(strcmp("0 534", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 534</OPTION>
                              <OPTION 
                                value="0 535" <?php if (!(strcmp("0 535", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 535</OPTION>
                              <OPTION 
                                value="0 536" <?php if (!(strcmp("0 536", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 536</OPTION>
                              <OPTION 
                                value="0 537" <?php if (!(strcmp("0 537", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 537</OPTION>
                              <OPTION 
                                value="0 538" <?php if (!(strcmp("0 538", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 538</OPTION><OPTION 
                                value="0 539" <?php if (!(strcmp("0 539", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 539</OPTION><OPTION 
                                value="0 541" <?php if (!(strcmp("0 541", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 541</OPTION><OPTION 
                                value="0 542" <?php if (!(strcmp("0 542", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 542</OPTION>
                              <OPTION 
                                value="0 543" <?php if (!(strcmp("0 543", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 543</OPTION>
                              <OPTION 
                                value="0 544" <?php if (!(strcmp("0 544", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 544</OPTION>
                              <OPTION 
                                value="0 545" <?php if (!(strcmp("0 545", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 545</OPTION>
                              <OPTION 
                                value="0 546" <?php if (!(strcmp("0 546", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 546</OPTION><OPTION 
                                value="0 549" <?php if (!(strcmp("0 549", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 549</OPTION>
                              <OPTION 
                                value="0 551" <?php if (!(strcmp("0 551", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 551</OPTION>
                              <OPTION 
                                value="0 552" <?php if (!(strcmp("0 552", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 552</OPTION>
                              <OPTION 
                                value="0 553" <?php if (!(strcmp("0 553", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 553</OPTION>
                              <OPTION 
                                value="0 554" <?php if (!(strcmp("0 554", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 554</OPTION>
                              <OPTION 
                                value="0 555" <?php if (!(strcmp("0 555", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 555</OPTION>
                              <OPTION 
                                value="0 556" <?php if (!(strcmp("0 556", $veri->kod3))) {echo "selected=\"selected\"";} ?>>0 556</OPTION></SELECT> </TD>
                            <TD>&nbsp;&nbsp;&nbsp;</TD>
                            <TD width="80%"><INPUT class=input value="<?php echo $veri->ceptel; ?>" 
                              maxLength=8 size=10 name=handy> 
                        </TD></TR></TBODY></TABLE></TD></TR>
                    <TR>
                      <TD colSpan=2><BR></TD></TR>
                    <TR>
                      <TD><STRONG>Onay Durumu:</STRONG></TD>
                      <TD align="left" valign="top">
                        <label>
                          <select name="onay" id="onay">
                            <option value="0" <?php if (!(strcmp(0, "$veri->onay"))) {echo "selected=\"selected\"";} ?>>Onayl&#305;</option>
                            <option value="1" <?php if (!(strcmp(1, "$veri->onay"))) {echo "selected=\"selected\"";} ?>>Onays&#305;z</option>
                          </select>
                      </label></TD></TR>
                    <TR>
                      <TD colSpan=2>&nbsp;</TD></TR>
                    <TR>
                      <TD colSpan=2>
                        <DIV align=center><INPUT class=input value=G�ncelle type=submit name=submit> 
                       
                        <BR>Doldurulmas� gereken alanlar�n tamam� zorunlu 
                        alanlard�r.</DIV></TD></TR></TBODY></TABLE></FORM></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
<?php
}
?>