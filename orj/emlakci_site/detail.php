             <style type="text/css">
<!--
div.scroll1 {
height: 175px;
width: 730px;
overflow: auto;
border: 1px solid #666;

padding: 0px;
}
-->
</style>  
             
         <style type="text/css">
<!--
#secili {
	font-weight: bold;
	color: #F00;
	font-size: 14px;
}


-->
</style>










<table width="100%" border="0">
  <tr>
    <td colspan="2" align="left" valign="top">
    
    
    
    <!--hyzly arama bölümü ba?alngyç -->



<?php include("hizli_arama2.php"); ?>

  <!--hyzly arama biti? -->


    
    
    
    
    </td>
    <td width="80%" align="left" valign="top"><?php 
$vt->sql("select * from ilan_ticari where id= '".temizle($_GET["id"])."'")->sor();
 if($vt->numRows() == 0) {
	 echo "<h3>Uyari ! Uyari Kodu D0100.<br>
	 Belirttiginiz Ilan Bulunamamistir.<br>
	 
	 Uyari devam ederse Lütfen Site Yöneticisine Bildiriniz.</h3>";
	 
	 } else {
 
$veriler = $vt->alHepsi();
foreach($veriler as $veri){
	
if($veri->ilan_grup == 1 ) { include("detail1.php"); } 
if($veri->ilan_grup == 2 ) { include("detail2.php"); } 
if($veri->ilan_grup == 3 ) { include("detail3.php"); } 
}
	 }
?></td>
  </tr>

</table>