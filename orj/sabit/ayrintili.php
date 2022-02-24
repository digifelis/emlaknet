<table width="100%" border="0">
  <tr>
    <td>
      
    <?php
   if(temizle($_GET["grup"]) == 1) { include("ayrinti1.php"); }
   if(temizle($_GET["grup"]) == 2) { include("ayrinti2.php"); }
   if(temizle($_GET["grup"]) == 3) { include("ayrinti3.php"); }
    
	?></td>
  </tr>
</table>
