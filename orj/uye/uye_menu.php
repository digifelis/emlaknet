<!--üye menü baþlangýcý -->
      <TABLE border=0 cellSpacing=0 cellPadding=0 width=180>
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff>&Uuml;ye 
            Bilgileriniz</FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif width="99%" 
          align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 
            height=2><BR></DIV></TD>
          <TD vAlign=top background=tema/img/bg_fahne.gif 
          width=10 align=left><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=11 
        height=30></TD></TR></TBODY></TABLE>
      <TABLE 
      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
      border=0 cellSpacing=0 cellPadding=4 width="100%" align=center>
        <TBODY>
        <TR>
          <TD>&Uuml;ye ÝD: <FONT color=#cc0000 
            face=Verdana,Geneva,Arial><B><?php echo $_SESSION["id"]; ?></B></FONT><BR>
          &#304;sminiz: <FONT 
            color=#cc0000 face=Verdana,Geneva,Arial><B><?php echo $_SESSION["isim_soyad"]; ?></B></FONT><BR></TD></TR></TBODY></TABLE><BR>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width=180>
        <TBODY>
        <TR>
          <TD height=30 background=tema/img/fahne1.gif 
          width=129>
            <DIV align=center><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=129 
            height=1><BR><STRONG><FONT color=#ffffff><A 
            style="COLOR: #ffffff; TEXT-DECORATION: none" 
            href="#">&Uuml;ye 
          Linkleri</A></FONT></STRONG></DIV></TD>
          <TD background=tema/img/bg_fahne.gif width="99%" 
          align=left>
            <DIV align=right><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=1 
            height=2><BR></DIV></TD>
          <TD vAlign=top background=tema/img/bg_fahne.gif 
          width=10 align=left><IMG border=0 alt="" 
            src="tema/img/spacer.gif" width=11 
        height=30></TD></TR></TBODY></TABLE>
      <TABLE 
      style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
      border=0 cellSpacing=0 cellPadding=4 width="100%" align=center>
        <TBODY>
        <TR>
          <TD><IMG border=0 alt="" src="tema/img/spacer.gif" 
            width=180 height=1><BR><BR>
            <TABLE border=0 cellSpacing=3 cellPadding=0 width="100%">
              <TBODY>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/comment_yellow.gif" 
                  width=16 height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=ilanpano">&#304;lan 
                  Takip Listem</A></STRONG></TD></TR>              
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/add.gif" width=16 
height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=ana_form">Yeni 
                Ýlan Oluþtur</A></STRONG></TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/kurallar.gif" width=16 
                  height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=ilan_kurallari">Ýlan 
                Kurallarý</A></STRONG></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/page_text.gif" width=16 
                  height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=benimilanlar&amp;sortorder=desc">Kayýtlý 
                  Ýlanlarýnýz</A></STRONG><BR>
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
                      Aþamasýndakiler</A></TD></TR>
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
                      Dolmu&#351;lar</A></TD></TR>
                    <TR>
                      <TD height=16 width=16><IMG border=0 alt="" 
                        src="tema/img/award_star_bronze_1.gif" 
                        width=16 height=16></TD>
                      <TD>&nbsp;<A 
                        href="?action=benimilanlar&amp;showstatus=4&amp;sortorder=desc">Vitrindeki 
                      Ýlanlar&#305;m</A></TD></TR>
                    </TBODY></TABLE></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/page_user.gif" width=16 
                  height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=uyebilgileri">&Uuml;ye 
                Bilgileriniz</A></STRONG><BR></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/page_key.gif" width=16 
                  height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=arama_kriter">Arama 
                Kriterler Listeniz</A></STRONG></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/page_link.gif" width=16 
                  height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=ilan_takip">Ýlan 
                Takip Listesi</A></STRONG></TD></TR>
              <TR>
                <TD colSpan=2>
                  <HR color=#c1dad7 SIZE=1 width="100%" noShade>
                </TD></TR>
              <TR>
                <TD vAlign=top><IMG border=0 alt="" 
                  src="tema/img/action_stop.gif" width=16 
                  height=16></TD>
                <TD>&nbsp;<STRONG><A 
                  href="?action=cikis">&Ccedil;ýkýþ / 
                Logout</A></STRONG></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
      <DIV></DIV>
      
     <!-- üye menü bitiþi -->
    