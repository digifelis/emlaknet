<html>

<HEAD>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />







<title><?php echo $title; 
?></title>

<meta name="description" content="<?php echo $aciklama; ?>" /> 

<meta name="keywords" content="<?php echo $anahtar_kelime; ?>" /> 



   <link rel="stylesheet" type="text/css" href="tema6/gs960.css" media="all" />



    <link rel="stylesheet" type="text/css" href="gs960.css" media="all" />

    <script type="text/javascript" src="tema6/jquery.js"></script>

	<script src="http://jqueryui.com/jquery-1.7.2.js"></script>

	<script src="http://jqueryui.com/ui/jquery.ui.core.js"></script>

	<script src="http://jqueryui.com/ui/jquery.ui.widget.js"></script>



   	<script type="text/javascript" src="yalniz_sayi.js"></script> 

	<script type="text/javascript" src="getirici.js"></script>

   

   











	<link rel="stylesheet" href="http://jqueryui.com/themes/base/jquery.ui.all.css"> 

    

    

	<script src="http://jqueryui.com/ui/jquery.ui.datepicker.js"></script>

  

	

    

  

    

      

    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

		<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>

        

        

  

        

        

	<script>

	$(function() {

		$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd', altFormat: 'yy-mm-dd' });

	});

	</script>



       



      

        





        





 <script type="text/javascript">  

 function onde() {

 $("div#tabs-1").show(100);

 $("div#tabs-2").hide(100);

 $("div#tabs-3").hide(100);

 }

 function goster1() { 

 $("div#tabs-1").show(100); 

 $("div#tabs-2").hide(100);

 $("div#tabs-3").hide(100); 

 }  

 function goster2() { 

 $("div#tabs-2").show(100); 

 $("div#tabs-1").hide(100);

 $("div#tabs-3").hide(100); 

 }  

  function goster3() { 

 $("div#tabs-3").show(100); 

 $("div#tabs-2").hide(100);

 $("div#tabs-1").hide(100); 

 }  



 

 </script>



<!--	<script>

	$(function() {

		$( "#tabs" ).tabs();

	});

	</script>

 -->









<LINK rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

<LINK rel="stylesheet" type="text/css" href="tema6/lacivert.css">







<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



<LINK type="text/css" rel="stylesheet"  href="tema/css/emlak.css">

<LINK type="text/css" rel="stylesheet" href="tema1/css/tema1.css">



</HEAD>





<BODY bottomMargin="0" leftMargin="0" rightMargin="0" topMargin="0" onLoad="onde()">





 

 

 

 

<div class="container_100 tumu">







































<!-- �st b�l�m ba�lang�c� -->

<div class="grid_100 ust">

























<div class="grid_32 ">



 <A href="index.php"><IMG 

                  id="ctl00_imghs" border="0" src="tema6/logo.jpg"></A>

 </div>

 <div class="grid_50">    <DIV align="center"> 

                  <DIV id="ctl00_banner1"><EMBED height="150" type="application/x-shockwave-flash" 

                  pluginspage="http://www.macromedia.com/go/getflashplayer" 

                  width="680" src="http://emlak.yerel.tv/yukleme_klasoru/userfiles/flash/top_banner.swf" 

                  menu="true" loop="true" 

            play="true"></EMBED></DIV></DIV>

            

            </div>



</div>



<!--�st b�l�m biti�i -->



<div class="grid_100">









   <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" >

  <tr>

    <td id="menu"><div class="menu_bg">

      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">

        <tr>

          <td width="235">

          <table border="0" cellpadding="0" cellspacing="0">

            <tr>

            

            

            

            

            <td><DIV id="ctl00_d2"  <?php if(temizle($_GET["action"]) == "") { echo 'class="menu_active"';} else { echo 'class="menu"'; } ?>>

                        <DIV align="center"><a href="index.php" title="" <?php if(temizle($_GET["action"]) == "") { echo 'class="menu_link_active"';} else { echo 'class="menu_link"'; } ?> >Ana Sayfa</a></DIV></DIV></td>

                        

                        

                        

	<td><DIV id="ctl00_d2"  <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "1") { echo 'class="menu_active"';} else { echo 'class="menu"'; } ?>>

                        <DIV align="center"><a href="index.php?action=arama&amp;grup=1&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama" and temizle($_GET["grup"]) == "1" ) { echo 'class="menu_link_active"';} else { echo 'class="menu_link"'; } ?> >Konut �lanlar�</a></DIV></DIV></td>

                        

                        

                        

	<td><DIV id="ctl00_d2"  <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "2") { echo 'class="menu_active"';} else { echo 'class="menu"'; } ?>>

                        <DIV align="center"><a href="index.php?action=arama&amp;grup=2&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "2" ) { echo 'class="menu_link_active"';} else { echo 'class="menu_link"'; } ?> >��yeri �lanlar�</a></DIV></DIV></td>

                        

                        

                        

	<td><DIV id="ctl00_d2"  <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "3") { echo 'class="menu_active"';} else { echo 'class="menu"'; } ?>>

              <DIV align="center"><a href="index.php?action=arama&amp;grup=3&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "3" ) { echo 'class="menu_link_active"';} else { echo 'class="menu_link"'; } ?> >Arsa/Tarla �lanlar�</a></DIV></DIV></td>

              

              

              

    <td><DIV id="ctl00_d2"  <?php if(temizle($_GET["action"]) == "emlakci_liste") { echo 'class="menu_active"';} else { echo 'class="menu"'; } ?>>

                        <DIV align="center"><a href="index.php?action=emlakci_liste" <?php if(temizle($_GET["action"]) == "emlakci_liste") { echo 'class="menu_link_active"';}  else { echo 'class="menu_link"'; } ?> >Emlak&ccedil;� Listesi</a></DIV></DIV></td>

                        

                        

     <td><DIV id="ctl00_d2"  <?php if(temizle($_GET["action"]) == "mutahit_liste") { echo 'class="menu_active"';} else { echo 'class="menu"'; } ?>>

                        <DIV align="center"><a href="index.php?action=mutahit_liste" <?php if(temizle($_GET["action"]) == "mutahit_liste") { echo 'class="menu_link_active"';} else { echo 'class="menu_link"'; } ?> >Proje Listesi</a></DIV></DIV></td>

                        

                        

    <td><DIV id="ctl00_d2"  <?php if(temizle($_GET["action"]) == "duyuru") { echo 'class="menu_active"';} else { echo 'class="menu"'; } ?>>

                        <DIV align="center"><a href="index.php?action=duyuru" <?php if(temizle($_GET["action"]) == "duyuru") { echo 'class="menu_link_active"';} else { echo 'class="menu_link"'; } ?> >Duyurular</a></DIV></DIV></td>

                        

                        

	<td><DIV id="ctl00_d2"  <?php if(temizle($_GET["action"]) == "giris") { echo 'class="menu_active"';} else { echo 'class="menu"'; } ?>>

                        <DIV align="center"><a href="index.php?action=giris" title="" <?php if(temizle($_GET["action"]) == "giris") { echo 'class="menu_link_active"'; } else { echo 'class="menu_link"'; } ?> >&Uuml;ye Giri�i</a></DIV></DIV></td>

                        

                        

    <td><DIV id="ctl00_d2"  <?php if(temizle($_GET["action"]) == "uyeol") { echo 'class="menu_active"';} else { echo 'class="menu"'; } ?>>

                        <DIV align="center"><a href="index.php?action=uyeol" title="" <?php if(temizle($_GET["action"]) == "uyeol") { echo 'class="menu_link_active"'; } else { echo 'class="menu_link"'; } ?> >&Uuml;ye Ol</a></DIV></DIV></td> 

                        

                        

    <td><DIV id="ctl00_d2"  <?php if(temizle($_GET["action"]) == "iletisim") { echo 'class="menu_active"';} else { echo 'class="menu"'; } ?>>

                        <DIV align="center"><a href="index.php?action=iletisim" title="" <?php if(temizle($_GET["action"]) == "iletisim") { echo 'class="menu_link_active"';} else { echo 'class="menu_link"'; } ?> >�leti�im</a></DIV></DIV></td> 

	           

                  

            

            

            

            

            </tr>

          </table></td>

          </tr>

      </table>

    </div></td>

  </tr>

</table>











</div>





<!--menu biti�i -->



<div class="grid_100">





































 

 

 

 

 

 

 

 

 

 

   

   



   

   

   

   

   

   

   

                  

                  

  