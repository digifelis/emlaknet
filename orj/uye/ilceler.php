
  <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR>
            <STRONG><FONT color=#ffffff>&#304;lan B&ouml;lge</FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif width="100%" 
            align=left><DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 height=2><BR></DIV></TD>
          <TD vAlign=top background=tema/img/bg_fahne.gif width=10 
          align=left><IMG border=0 alt="" src="tema/img/spacer.gif" 
            width=11 height=30></TD></TR>
        <TR>
          <TD colSpan=3>
            <TABLE border=0 cellSpacing=0 cellPadding=4 width="100%" 
            bgColor=#f7f7f7 align=center>
              <TBODY>
              <TR>
                <TD 
                style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid">
                  <DIV align=center>
<STRONG><FONT size=4>L&uuml;tfen il&ccedil;e se&ccedil;iniz
                  </FONT></STRONG>
                  </DIV>
                 
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                 
                  <TABLE border=0 cellSpacing=3 cellPadding=3 width="100%" 
                  align=center>
                    <TBODY>
                    <TR>
                      <TD vAlign=top width="22%" noWrap>
                                                       <?php 
					  $vt->sql('select * from ilce where sehirID="'.temizle($_GET["b"]).'" and ilceAdi != "" limit 0,10  ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=koylar&amp;c='.$veri->ilceID.'&amp;a='.temizle($_GET["a"]).'&amp;b='.temizle($_GET["b"]).'&amp;s='.temizle($_GET["s"]).'">'.$veri->ilceAdi.'</A><BR>
	';
}
 ?></TD>
                      <TD width="25%" valign="top">
                      
                                                           <?php 
					  $vt->sql('select * from ilce where sehirID="'.temizle($_GET["b"]).'" and ilceAdi != "" limit 10,10  ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=koylar&amp;c='.$veri->ilceID.'&amp;a='.temizle($_GET["a"]).'&amp;b='.temizle($_GET["b"]).'&amp;s='.temizle($_GET["s"]).'">'.$veri->ilceAdi.'</A><BR>
	';
}
 ?>
                      
                      </TD>
                      <TD vAlign=top width="32%" noWrap>
                                                                                                                             <?php 
					  $vt->sql('select * from ilce where sehirID="'.temizle($_GET["b"]).'" and ilceAdi != "" limit 20,10  ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=koylar&amp;c='.$veri->ilceID.'&amp;a='.temizle($_GET["a"]).'&amp;b='.temizle($_GET["b"]).'&amp;s='.temizle($_GET["s"]).'">'.$veri->ilceAdi.'</A><BR>
	';
}
 ?></TD>
                      <TD vAlign=top width="21%" noWrap>
                                                                                                                             <?php 
					  $vt->sql('select * from ilce where sehirID="'.temizle($_GET["b"]).'" and ilceAdi != "" limit 30,10  ')->sor();
					  $veriler = $vt->alHepsi();
 foreach( $veriler as $veri )
{
	echo ' 
	<A class=f2  href="start.php?action=koylar&amp;c='.$veri->ilceID.'&amp;a='.temizle($_GET["a"]).'&amp;b='.temizle($_GET["b"]).'&amp;s='.temizle($_GET["s"]).'">'.$veri->ilceAdi.'</A><BR>
	';
}
 ?>     
                      
                      
                      
                      </TD>
                    </TR>
                    </TBODY></TABLE><BR><BR><BR><BR><BR></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>