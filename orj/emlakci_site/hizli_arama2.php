<div class="sol_item">
	<div class="sol_item_ust">KATEGORÝLER</div>
	<div class="sol_item_orta">
    
     <!-- @Start : Konut -->
      <DIV class="realType h100 float marRight10px h150px">
        <TABLE width=194>
          <TBODY>
            <TR>
              <TD class=padLeft10px width=70><IMG src="res/konut.jpg" width="50" height="50" 
            align=center class=pointer "></TD>
              <TD><SPAN class=pointer stil29 id=title_green "><B>KONUT</B></SPAN></TD></TR></TBODY></TABLE><IMG 
      src="res/line_green_173px.gif" width="150"> 
        <UL class=advertise_list>
          <LI><IMG src="res/arrow_green.gif" height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=1&amp;grup=1&amp;liste=1">Sat&#305;l&#305;k</A>
        
        <?php 
		/* select count(ilan_ticari.id)  from ilan_ticari where ilan_ticari.ilan_tipi_id between 1 and 9 and ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '1' and '9' and ilan_grup='1' and  onay != '1' and onay !='3' and uye_id='".$_SESSION["emlakci"]."' ")->sor();
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
            <LI><IMG src="res/arrow_green.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=0&amp;grup=1&amp;liste=1">Kiral&#305;k</A> 
        <?php 
		/* select count(ilan_ticari.id)  from ilan_ticari where ilan_ticari.ilan_tipi_id between 10 and 19 and ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '10' and '19' and ilan_grup='1' and  onay != '1' and onay !='3' and uye_id='".$_SESSION["emlakci"]."'  ")->sor();
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
              <LI><IMG src="res/arrow_green.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;grup=1&amp;liste=1">T&uuml;m 
                Konutlar</A>  
                 <?php 
				 /* select count(ilan_ticari.id)  from ilan_ticari where  ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='1' and  onay != '1' and onay !='3' and uye_id='".$_SESSION["emlakci"]."'  ")->sor();
      echo '&nbsp;('.$vt->alTek().')';   
      ?>         
            </UL><IMG class="marTop10px marBottom10px" 
      src="res/line_greenbar_173px.gif" width="150"> </DIV><!-- @Start : Ticari -->  
    
    
     <!-- @Start : Ticari -->
      <DIV class="realType h100 float marRight10px h150px">
        <TABLE width=190>
          <TBODY>
            <TR>
              <TD class=padLeft10px width=70><IMG src="res/main_ev2.jpg" width="50" height="50" 
            align=center class=pointer 
            "></TD>
              <TD><SPAN class=pointer stil30 id=title_blue 
            "><B>T&#304;CARI</B></SPAN></TD></TR></TBODY></TABLE><IMG 
      class="marTop10px marBottom10px" 
      src="res/line_blue_173px.gif" width="150"> 
        <UL class=advertise_list>
          <LI><IMG src="res/arrow_blue.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=1&amp;grup=2&amp;liste=1">Sat&#305;l&#305;k</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '34' and '56' and ilan_grup='2' and  onay != '1' and onay !='3' and uye_id='".$_SESSION["emlakci"]."' ")->sor();
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
            <LI><IMG src="res/arrow_blue.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=0&amp;grup=2&amp;liste=1">Kiral&#305;k</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '57' and '79' and ilan_grup='2' and  onay != '1' and onay !='3' and uye_id='".$_SESSION["emlakci"]."' ")->sor();
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
              <LI><IMG src="res/arrow_blue.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;grup=2&amp;liste=1">T&uuml;m Ticari</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='2' and  onay != '1' and onay !='3' and uye_id='".$_SESSION["emlakci"]."'  ")->sor();
      echo '&nbsp;('.$vt->alTek().')';   
      ?> 
            </UL><IMG class="marTop10px marBottom10px" 
      src="res/line_bluebar_173px.gif" width="150">      </DIV>
      <!-- @Start : Yeni Projeler --> 
    
    
    
    
    <DIV 
      style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BORDER-TOP: medium none; BORDER-RIGHT: medium none" 
      class="realType h100 float marRight5px h150px">
        <TABLE width=193>
          <TBODY>
            <TR>
              <TD class=padLeft10px width=70><IMG src="res/main_ev3.jpg" width="50" height="50" 
            align=center class=pointer 
           "></TD>
              <TD><SPAN class=pointer stil33 id=title_orange 
            "><B>ARSA</B></SPAN></TD></TR></TBODY></TABLE><IMG 
      class="marTop10px marBottom10px" 
      src="res/line_yellow_173px.gif" width="150"> 
        <UL class=advertise_list>
          <LI><IMG src="res/arrow_yellow.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;tip=1&amp;grup=3&amp;liste=1">Sat&#305;l&#305;k</A>
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '20' and '27' and ilan_grup='3'  and  onay != '1' and onay !='3' and uye_id='".$_SESSION["emlakci"]."' ")->sor();
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
            <LI><IMG src="res/arrow_yellow.gif"  height="5" width="4"> <A 
        style="LETTER-SPACING: 0.05em" 
        href="index.php?action=arama&amp;tip=0&amp;grup=3&amp;liste=1">Kiral&#305;k</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '28' and '33' and ilan_grup='3' and  onay != '1' and onay !='3' and uye_id='".$_SESSION["emlakci"]."'  ")->sor();
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  
              <LI><IMG src="res/arrow_yellow.gif"  height="5" width="4"> <A 
        href="index.php?action=arama&amp;grup=3&amp;liste=1">T&uuml;m Arsalar</A> 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='3'  and  onay != '1' and onay !='3' and uye_id='".$_SESSION["emlakci"]."'  ")->sor();
      echo '&nbsp;('.$vt->alTek().')';   
      ?>    
            </UL><IMG class="marTop10px marBottom10px" 
      src="res/line_yellowbar_173px.gif" width="150">      </DIV>
    
    
    
    
    </div>
	<div class="sol_item_alt"></div>
</div></div>