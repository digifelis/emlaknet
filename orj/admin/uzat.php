<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>Firma Kroki</FONT></STRONG></DIV></TD>
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
    <td width="99%">
      <?php
$vt->sql('select ilan_suresi from ilan_ticari where id = "'.temizle($_GET["id"]).'"  ')->sor();	
	if($vt->numRows() == 1) {
		$yeni_sure = $vt->alTek() + temizle($_POST["RadioGroup1"]) ;
	$vt->sql('update ilan_ticari set ilan_suresi = "'.$yeni_sure.'" , onay = 3  where id = "'.temizle($_GET["id"]).'"   ')->sor();	
	if($vt->affRows() > 0) { echo "Ylan Süresi Uzatylmy?tyr"; } else {  echo "Y?lemde Hata Olu?tu"; }	
	
	
	}
	
	
	?> 
      
      <br />
      </td>
  </tr>
  <tr>
    <td> </td>
    </tr>
</table>
             
              
                
                
                
   <!--             
        iç kisim bitisi   -->      
                
                
                
                
                
                </TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>