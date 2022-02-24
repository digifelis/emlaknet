<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 
          background=../tema/img/fahne1.gif 
            width=129><DIV align=center><IMG border=0 alt="" 
            src="../tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>&Yacute;lan Silme</FONT></STRONG></DIV></TD>
          <TD background=../tema/img/bg_fahne.gif 
          width="100%" align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="../tema/img/spacer.gif" width=1 
            height=2><BR></DIV></TD>
          <TD vAlign=top 
          background=../tema/img/bg_fahne.gif width=10 
          align=left><IMG border=0 alt="" 
            src="../tema/img/spacer.gif" width=11 
            height=30></TD></TR>
        <TR>
          <TD colSpan=3 valign="top">
            <TABLE border=0 cellSpacing=0 cellPadding=4 width="100%" 
            bgColor=#f7f7f7 align=center>
              <TBODY>
              <TR>
                <TD align="center" valign="top" 
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid"><FONT 
                  color=#cc0000 size=4><STRONG>
                  <?php 
		$vt->sql("delete from uyeler where id = '".temizle($_GET["id"])."' ")->sor();		  
	
 if($vt->affRows()>0) { 
 echo "ÜYE BAÞARILI BÝR ÞEKÝLDE SÝLÝNDÝ"; 
 /// üyenin logolarinin silinmesi
  $vt->sql('select * from logolar where user_id="'.temizle($_GET["id"]).'"  ')->sor();
 $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ 
@unlink("../resimler/".$veri->firma_logo."");
@unlink("../resimler/".$veri->sirket_logo."");
@unlink("../resimler/".$veri->kroki."");
$vt->sql("delete from logolar where user_id = '".temizle($_GET["id"])."' ")->sor();
}
/// üyenin ilanlarinin silinmesi
$vt->sql('select * from ilan_ticari where uye_id = "'.temizle($_GET["id"]).'"')->sor();
 $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ 

$vt->sql('select * from ilan_foto where ilan_id = "'.$veri->id.'"')->sor();
 $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{ 
$dosyaAdi 	= substr($veri->foto_adi, 0, strrpos($veri->foto_adi, '.'));
$uzanti 	= substr($veri->foto_adi, strrpos($veri->foto_adi, '.'));
@unlink("../resimler/".$veri->foto_adi."");
@unlink("../resimler/".$dosyaAdi."_w85_h64".$uzanti."");
@unlink("../resimler/".$dosyaAdi."_w100_h75".$uzanti."");
@unlink("../resimler/".$dosyaAdi."_w510_h400".$uzanti."");
}
$vt->sql("delete from ilan_foto where ilan_id = '".$veri->id."' ")->sor();
}

$vt->sql("delete from ilan_ticari where uye_id = '".temizle($_GET["id"])."' ")->sor();
/////////////

 } else { echo "<h3> Hata Olustu . Hata Kodu AUS1200.<br>Hata devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>"; }
				  ?>
                  
                  
                 </STRONG></FONT><BR><BR></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>