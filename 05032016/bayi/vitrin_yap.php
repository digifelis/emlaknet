<?php 
date_default_timezone_set('Europe/Istanbul');
if (temizle($_GET["oid"])!="")
{

$vt->sql("select onay from ilan_ticari  where uye_id= '".$_SESSION["id"]."' and id='".$_GET["oid"]."'      ")->sor();


if($vt->alTek() ==2 ) { $yeni_durum = 4; 
$tarih = date("Y-m-d");
$vt->sql("insert into vitrin_istek (ilan_id,onay,istek_tarihi) values ('".$_GET["oid"]."','HAYIR' , '".$tarih."') ");

}
if($vt->alTek() ==4 ) { $yeni_durum = 2;
$vt->sql("delete from vitrin_istek where ilan_id='".$_GET["oid"]."' ");
$vt->sql("update ilan_ticari set onay = '".$yeni_durum."'  where uye_id= '".$_SESSION["id"]."' and id='".$_GET["oid"]."'  ");
 }


if($vt->alTek() ==4 or $vt->alTek() ==2 ) {

//	$vt->sql("update ilan_ticari set onay = '".$yeni_durum."'  where uye_id= '".$_SESSION["id"]."' and id='".$_GET["oid"]."'  ");
	if($vt->sor()==0) 
{$sonuc = "<h3>Ilan Kaydinda Hata Olustu . Hata Kodu VITRIN1100.&lt;br&gt;Hata devam ederse L&uuml;tfen Site Y&ouml;neticisine Bildiriniz.</h3>;
";
} else { 
$sonuc =  "<h3> &#304;lan&#305;n&#305;z i&#351;leme al&#305;nm&#305;&#351;t&#305;r.</h3>
";
}

} else { $sonuc = "<h3>&#304;&#351;lem Yap&#305;lmad&#305; </h3>";  }

}
				
?>
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>Vitrin Yap</FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif width="100%" 
          align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 
            height=2><BR></DIV></TD>
          <TD vAlign=top background=tema/img/bg_fahne.gif 
          width=10 align=left><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=11 
        height=30></TD></TR>
        <TR>
          <TD colSpan=3>
            <TABLE border=0 cellSpacing=0 cellPadding=4 width="100%" 
            bgColor=#f7f7f7 align=center>
              <TBODY>
              <TR>
                <TD 
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid">
                
        <!-- iç kisim baslangici    -->    
                
                
                
                
              

   <table width="100%" border="0">
  
  <tr>
    <td colspan="2"> 

<?php echo $sonuc; ?>  <br />
<a href="javascript:history.back(-1)">Geri</a>

</td>
    </tr>
 
</table>
             
               
                
                
                
   <!--             
        iç kisim bitisi   -->      
                
                
                
                
                
                </TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>