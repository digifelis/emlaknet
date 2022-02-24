    <div id="footer">
    	<div style="float:left; width:100%; border:1px solid #CCC; padding:10px 0px 10px 0px; margin-top:10px;">
        
  <?php
	$vt->sql("SELECT uyeler.temiz_ad , uyeler.sirket , sehir.sehiradiUpper , count(ilan_ticari.id) as sayi  FROM  uyeler , sehir , ilan_ticari WHERE uyeler.il =  sehir.plaka and uyeler.uye_tipi='1' group by uyeler.id ORDER BY RAND() LIMIT 0,15  ")->sor();
	$veriler = $vt->alHepsi();
	foreach($veriler as $veri) {
		echo '<div class="iller"><a title="'.$veri->sirket.''.$veri->sehiradiUpper.' "  href="http://'.$veri->temiz_ad.'.'.$site.'" target="_blank" style=\'color:#333;\'>'.$veri->sirket.'</a>&nbsp;&nbsp;&nbsp;<A style=\'color:#333;\' title="'.$veri->sehiradiUpper.' " href="http://'.$veri->temiz_ad.'.'.$site.'" >'.$veri->sehiradiUpper.'&nbsp;</a></div>';
	}
	
	?>        
        
        
        
  
  </div>
  
  
  
<div align="right" style="float:left; width:100%; margin-top:10px; padding-top:10px; padding-bottom:10px; border-top:1px solid #CCC;">
<a href='index.php' style='color:#333;' title="Ana Sayfa">Anasayfa</a> | 
<a href='index.php?action=iletisim' title="iletiþim" style='color:#333;'>&#304;leti&#351;im</a> | 
<a href='index.php?action=uyeol' title="üye ol" style='color:#333;'>&Uuml;ye Ol</a> |
<a href='http://www.digifelis.com' title="Digifelis" style='color:#333;'>Tasar&#305;m ve Kodlama DigiFelis</a> 

</div>    </div>

</div>

</body>
</html>
