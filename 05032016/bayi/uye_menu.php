<!--üye menü baþlangýcý -->
      <TABLE border=0 cellSpacing=0 cellPadding=0 width=190>
        <TBODY>
        <TR>
          <TD height=30 
          background=tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" 
            width=129 height=1><BR><STRONG><FONT color=#ffffff>&Uuml;ye  
            Bilgileriniz</FONT></STRONG></DIV></TD>
          <TD 
          background=tema/img/bg_fahne.gif 
          width="99%" align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 
            height=2><BR></DIV></TD>
          <TD vAlign=top 
          background=tema/img/bg_fahne.gif 
          width=10 align=left><IMG border=0 alt="" 
            src="tema/img/spacer.gif" 
            width=11 height=30></TD></TR></TBODY></TABLE>
      <TABLE 
      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
      border=0 cellSpacing=0 cellPadding=4 width="100%" align=center>
        <TBODY>
        <TR>
          <TD><IMG border=0 alt="" 
            src="tema/img/spacer.gif" 
            width=180 height=1><BR>Firma Üye ID: <FONT color=#cc0000 
            face=Verdana,Geneva,Arial><B><?php echo $_SESSION["id"]; ?></B></FONT><BR>
          Firman&#305;z: <FONT 
            color=#cc0000 face=Verdana,Geneva,Arial><B><?php echo $_SESSION["firma"]; ?></B></FONT><BR>
          &#304;sminiz: <FONT color=#cc0000 
            face=Verdana,Geneva,Arial><B><?php echo $_SESSION["isim_soyad"]; ?></B></FONT><BR></TD></TR></TBODY></TABLE><BR>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width=190>
        <TBODY>
        <TR>
          <TD height=30 
          background=tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" 
            width=129 height=1><BR><STRONG><FONT color=#ffffff><A 
            style="COLOR: #ffffff; TEXT-DECORATION: none" 
            href="#">&Uuml;ye 
          Linkleri</A></FONT></STRONG></DIV></TD>
          <TD 
          background=tema/img/bg_fahne.gif 
          width="99%" align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 
            height=2><BR></DIV></TD>
          <TD vAlign=top 
          background=tema/img/bg_fahne.gif 
          width=10 align=left><IMG border=0 alt="" 
            src="tema/img/spacer.gif" 
            width=11 height=30></TD></TR></TBODY></TABLE>
      <TABLE 
      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
      border=0 cellSpacing=0 cellPadding=4 width="100%" align=center>
        <TBODY>
        <TR>
          <TD><IMG border=0 alt="" 
            src="tema/img/spacer.gif" 
            width=180 height=1><BR>
            <TABLE border=0 cellSpacing=1 cellPadding=1 width="100%"><!--- <tr>
	<td><img src="/gfx/ilan_tv.gif" width="16" height="16" alt="" border="0"></td>
	<td>&nbsp;<strong><a href="?action=ilantv_info">Ilan TV Tanitim</a></strong></td>
</tr>
<tr>
    <td colspan="2"><hr width="100%" size="1" color="#C1DAD7" noshade></td>
</tr>
 --->
              <TBODY>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/comment_yellow.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=ilanpano">&#304;lan 
                  Takip Listem</A></STRONG></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/newspaper.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=haberler">Site Y&ouml;netimden Haberler</A></STRONG></TD></TR>
            
              
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/add.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=ana_form">Yeni 
                  &#304;lan Olu&#351;tur</A></STRONG></TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/kurallar.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=ilan_kurallari">&#304;lan 
                  Kurallar&#305;</A></STRONG></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/page_text.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=benimilanlar&amp;sortorder=desc">B&uuml;t&uuml;n 
                  &#304;lanlar&#305;m&#305; G&ouml;ster</A></STRONG><BR>
                  <TABLE border=0 cellSpacing=1 cellPadding=0 width="100%">
                    <TBODY>
                    <TR>
                      <TD height=16 width=16><IMG border=0 alt="" 
                        src="tema/img/flag_green.gif" width=16 
                        height=16></TD>
                      <TD>&nbsp;<A 
                        href="?action=benimilanlar&amp;showstatus=2&amp;sortorder=desc">Aktif &#304;lanlar&#305;m</A></TD></TR>
                    <TR>
                      <TD height=16 width=16><IMG border=0 alt="" 
                        src="tema/img/flag_orange.gif" 
                        width=16 height=16></TD>
                      <TD>&nbsp;<A 
                        href="?action=benimilanlar&amp;showstatus=0&amp;sortorder=desc">Kontrol 
                      a&#351;amas&#305;ndakiler</A></TD></TR>
                    <TR>
                      <TD height=16 width=16><IMG border=0 alt="" 
                        src="tema/img/flag_red.gif" width=16 
                        height=16></TD>
                      <TD>&nbsp;<A 
                        href="?action=benimilanlar&amp;showstatus=1&amp;sortorder=desc">Blokeli &#304;lanlar&#305;m</A></TD></TR>
                    <TR>
                      <TD height=16 width=16><IMG border=0 alt="" 
                        src="tema/img/flag_white.gif" width=16 
                        height=16></TD>
                      <TD>&nbsp;<A 
                        href="?action=benimilanlar&amp;showstatus=3&amp;sortorder=desc">S&uuml;resi 
                      Dolmu&#351; &#304;lanlar&#305;m</A></TD></TR>
                    <TR>
                      <TD height=16 width=16><IMG border=0 alt="" 
                        src="tema/img/award_star_bronze_1.gif" 
                        width=16 height=16></TD>
                      <TD>&nbsp;<A 
                        href="?action=benimilanlar&amp;showstatus=4&amp;sortorder=desc">Vitrindeki 
                      ilanlar&#305;m</A></TD></TR>
                    <TR>
                      <TD height=16></TD>
                      <TD><form action="start.php?action=edit" method="get">
                        &#304;lan No &#304;le Bul<br />
                        
                        <input name="oid" type="text" size="5" />

                        <input name="ddd" type="submit" id="ddd" value="Getir" />
                        <input name="action" type="hidden" id="action" value="edit" />
                      </form></TD>
                    </TR>
                    </TBODY>
                  </TABLE></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/page_user.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=iletisim">Firma 
                  Bilgileriniz</A></STRONG><BR>
                  <TABLE border=0 cellSpacing=1 cellPadding=0 width="100%">
                    <TBODY>
                    <TR>
                      <TD height=16 width=16><IMG border=0 alt="" 
                        src="tema/img/page_edit3.gif" 
                        width=16 height=16></TD>
                      <TD>&nbsp;<A 
                        href="?action=iletisim">&#304;leti&#351;im 
                        Bilgileriniz</A></TD></TR>
                    
                    </TBODY></TABLE></TD></TR>
        
              
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/page_edit.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG>Firma G&ouml;rselleri</STRONG><BR>
                  <TABLE border=0 cellSpacing=1 cellPadding=0 width="100%">
                    <TBODY>
                    <TR>
                      <TD height=16 width=16><IMG border=0 alt="" 
                        src="tema/img/image_add.gif" 
                        width=16 height=16></TD>
                      <TD>&nbsp;<A 
                        href="?action=firma_logo">Firma 
                        Logonuz</A></TD></TR>                    

                    <TR>
                      <TD height=16 width=16><IMG border=0 alt="" 
                        src="tema/img/map_add.gif" 
                        width=16 height=16></TD>
                <TD>&nbsp;<a href="?action=kroki">Krokiniz</a></TD></TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/icon_user.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=eleman_listesi">Sat&#305;&#351; 
                Eleman Listeniz</A></STRONG></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/page_key.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=arama_kriter">Arama 
                  Kriterler Listeniz</A></STRONG></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
<?php
if($_SESSION["id"] == 1)
{
?>
<TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/page_key.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=goc">g&ouml;&ccedil; arac&#305;</A></STRONG></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>

<?php
}
?>


              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/page_link.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=ilan_takip">&#304;lan 
                  Takip Listesi</A></STRONG></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/action_stop.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=cikis">&Ccedil;&#305;k&#305;&#351; / 
                  Logout</A></STRONG></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
      <DIV></DIV>
    



    
      
     <!-- üye menü bitiþi -->
    