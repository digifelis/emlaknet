<style type="text/css">
<!--
.stil1 {
	font-size: 12px;
	color: #666666;
}
.stil3 {
	font-size: 14px
}
.stil5 {color: #A71335}
.stil6 {color: #006600}
.stil7 {color: #A40E31}
.stil10 {color: #AE2543}
.stil11 {
	color: #A22340;
	font-weight: bold;
}
.stil15 {font-weight: bold}
.stil16 {font-weight: bold}
.stil17 {font-weight: bold}
.stil18 {font-weight: bold}
.stil19 {font-weight: bold}
.stil21 {font-weight: bold}
.stil24 {font-weight: bold}
.stil26 {font-weight: bold}
.stil27 {color: #A22340}
.stil29 {color: #009933}
.stil30 {color: #0000CC}
.stil33 {color: #FF9933}
.stil44 {color: #000000}
.stil55 {color: #FFFFFF}
-->
</style>
<table width="100%" border="0">
  <tr>
    <td>
    <div class="baslik">
      <div class="baslik_sol"></div>
      <div class="baslik_sag"><br />
         <span class="stil55">Duyurular</span></div>
      </div>
      </td>
  </tr>
  <?php 
  $vt->sql("select * from duyuru where gorunme = 'EVET' order by id DESC")->sor();
  $veriler = $vt->alHepsi();
  foreach ($veriler as $veri) {
	  echo '
  <tr>
    <td>
 <h3>'.$veri->baslik.'</h3>   
'.$veri->icerik.'<br><br>
<div aling="right">'.$veri->tarih.'</div>
    
    
    </td>
  </tr>
  <tr>
    <td><hr /></td>
  </tr>	  
	  
	  
	  ';
  }
  ?>
  
  

  
  
  
</table>
