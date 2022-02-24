<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="129" height="30" background="tema/img/fahne1.gif"><div align="center"><img src="tema/img/spacer.gif" width="129" height="1" alt="" border="0"><br><strong><font color="#FFFFFF">Haber</font></strong></div></td>
    <td width="100%" align="left" background="tema/img/bg_fahne.gif"><div align="right"><img src="tema/img/spacer.gif" width="1" height="2" alt="" border="0"><br></div></td>
    <td width="10" align="left" valign="top" background="tema/img/bg_fahne.gif"><img src="tema/img/spacer.gif" width="11" height="30" alt="" border="0"></td>
  </tr>
</table>

<table width="50%" border="0" cellspacing="0" cellpadding="4" align="center" style="border: 1px solid #CCCCCC;">
<tr>
	<td>
    
                               <?php 
							   
//// sayfalama bölümü
$kayit_sayisi =3;
$vt->sql("select count(id) from haberler where gorunme = 'EVET' order by id DESC ")->sor();

if(temizle($_GET["sayfa"]) == "") { $sayfa = 0; } else { $sayfa = temizle($_GET["sayfa"])-1; }							   
							   
							   
$vt->sql('select * from haberler where gorunme = "EVET" order by id DESC limit '.$sayfa*$kayit_sayisi .','. $kayit_sayisi .'   ')->sor();
$veriler = $vt->alHepsi();

 foreach( $veriler as $veri ) {	
 
	 
 
 ?>     
    
    <table width="100%" border="0" cellspacing="2" cellpadding="2" align="center">
<tr>
    <td width="99%" nowrap><font face="Verdana" color="#CC0000"><strong><?php echo $veri->baslik; ?></strong></font></td>
    <td width="1%" nowrap><div align="right"><font face="Verdana" color="#000000">+++ <?php echo $veri->tarih; ?> +++</font></div></td>
</tr>
<tr>
    <td colspan="2" >
    <?php echo $veri->icerik; ?>	

	</td>
</tr>
</table>

<?php } 


echo "<center><h5>".PagePrint($sayfa+1,$vt->alTek(),$kayit_sayisi,"","haberler")."</h5></center>";
//////////////////
?>



	<!--- Seiten Support oben ende --->
	
	</td>
</tr>
</table>

</td>
</tr>
</table>