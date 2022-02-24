<?php
ob_start(); 
session_start();

require_once("../class/eb.vt.php");
require_once("../class/eb.myArray.php");
require_once("../config.php");

  $vt->sql("select * from ilan_foto where ilan_id = '".temizle($_GET["id"])."' ")->sor();
   $veriler = $vt->alHepsi();  
   $i=0;
   foreach($veriler as $veri) {
	
$data[$i] = '<TABLE 
                  style="BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid" 
                  border=0 cellSpacing=1 cellPadding=4>
                    <TBODY>
                    <TR>
                      <TD> <SPAN 
                        title="cssbody=[boxbody] cssheader=[boxtb] offsetx=[20] offsety=[-225] windowlock=[on] body=[<center><p><img src=thumb.php?p=resimler/'.$veri->foto_adi .'&w=510&h=400></p>] fade=[on] fadespeed=[0.1]"><IMG 
                        border=0 hspace=4 alt="" vspace=4 
                        src="thumb.php?p=resimler/'.$veri->foto_adi .'&w=85&h=64" />
                       </A></SPAN>
					    </TD></TR>
                    <TR>
                      <TD align="center">
					   <a onclick="silme('.$veri->id.');"><STRONG>Fotoğrafı Sil</STRONG></a>
					    
						</TD></TR></TBODY></TABLE>
					   ';
	$i++;
	 } 
 echo resim_listele(5,1,1,$data); 

?>
