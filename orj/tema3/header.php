<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<link rel="stylesheet" type="text/css" href="tema3/gs960.css" media="all" />
<link rel="stylesheet" type="text/css" href="tema3/genel.css" media="all" />
<title><?php echo $title; 
?></title>
<meta name="description" content="<?php echo $aciklama; ?>" /> 
<meta name="keywords" content="<?php echo $anahtar_kelime; ?>" /> 

<script type="text/javascript" src="yalniz_sayi.js"></script> 
<script type="text/javascript" src="getirici.js"></script>

	<link rel="stylesheet" href="http://jqueryui.com/themes/base/jquery.ui.all.css">
	<script src="http://jqueryui.com/jquery-1.5.1.js"></script>
	<script src="http://jqueryui.com/ui/jquery.ui.core.js"></script>
	<script src="http://jqueryui.com/ui/jquery.ui.widget.js"></script>
	<script src="http://jqueryui.com/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="http://jqueryui.com/demos/demos.css">
	<script>
	$(function() {
		$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd', altFormat: 'yy-mm-dd' });
	});
	</script>
<script type="text/javascript" src="tema3/esitle.js"></script>
<script type="text/javascript">
    $(function(){

        // kutuların yüksekliklerini eşitle
        $('div.kutu').yukseklikEsitle();

    });
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11140047-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	

</head>

<body>

<div class="container_100">
<div class="tumu grid_100">
<div class="banner grid_100">

<div class="grid_70 logo">EmlakNetT&uuml;rkiye</div>

<div class="grid_77 istatistik">
		  <div class="grid_25 x1"> 
            <div><img src="tema3/images/ev1.jpg" alt="konut emlak ilanları" align="left" title="konut emlak ilanları" />
            Sat&#305;l&#305;k :<?php 
		/* select count(ilan_ticari.id)  from ilan_ticari where ilan_ticari.ilan_tipi_id between 1 and 9 and ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '1' and '9' and ilan_grup='1' and  onay != '1' and onay !='3' ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?><br />
            Kiral&#305;k :<?php 
		/* select count(ilan_ticari.id)  from ilan_ticari where ilan_ticari.ilan_tipi_id between 10 and 19 and ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '10' and '19' and ilan_grup='1' and  onay != '1' and onay !='3' ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?><br />
            T&uuml;m 
                Konutlar :  <?php 
				 /* select count(ilan_ticari.id)  from ilan_ticari where  ilan_ticari.ilan_grup=1 and  ilan_ticari.onay not in (1,3) */
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='1' and  onay != '1' and onay !='3'  ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>     <br />
            </div>
            
          </div>
			<div class="grid_25 x1">
           <div><img src="tema3/images/ev2.jpg" alt="ticari emlak ilanları" align="left" title="ticari emlak ilanları" />
            Sat&#305;l&#305;k 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '34' and '56' and ilan_grup='2' and  onay != '1' and onay !='3' ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  <br />
            Kiral&#305;k
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '57' and '79' and ilan_grup='2' and  onay != '1' and onay !='3'  ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?> <br />
            T&uuml;m Ticari 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='2' and  onay != '1' and onay !='3'  ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?> <br />
            </div> 
            
            
            
            </div>
			<div class="grid_25 x1">
            <div><img src="tema3/images/ev3.jpg" alt="arsa tarla ilanları" align="left" title="arsa tarla ilanları" />
            Sat&#305;l&#305;k
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '20' and '27' and ilan_grup='3'  and  onay != '1' and onay !='3'  ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  <br />
           Kiral&#305;k 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_tipi_id between '28' and '33' and ilan_grup='3' and  onay != '1' and onay !='3'   ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?>  <br />
           T&uuml;m Arsalar 
         <?php 
		$vt->sql("select count(id)  from ilan_ticari where ilan_grup='3'  and  onay != '1' and onay !='3'   ")->sor(15);
      echo '&nbsp;('.$vt->alTek().')';   
      ?> <br />
            </div>
            
            
            
            </div>
			

	  </div>

<a href="index.php?action=giris" title="üye girişi"><div class="giris grid_20"></div></a>

</div>
		


<div class="clear"></div>
<div class="grid_100" style="height:55px">
<div class="m1 grid_1"></div>
<div class="m2 grid_98">

<ul class="menu">




<li><a href="index.php" title="" <?php if(temizle($_GET["action"]) == "") { echo 'class="current"';} ?> >Ana Sayfa</a></li>
	
    <li><a href="index.php?action=emlakci_liste" <?php if(temizle($_GET["action"]) == "emlakci_liste") { echo 'class="current"';} ?> >Emlak&ccedil;&#305; Listesi</a></li>
     <li><a href="index.php?action=mutahit_liste" <?php if(temizle($_GET["action"]) == "mutahit_liste") { echo 'class="current"';} ?> >M&uuml;tahit Listesi</a></li>
    <li><a href="?action=duyuru" <?php if(temizle($_GET["action"]) == "duyuru") { echo 'class="current"';} ?> >Duyurular</a></li>
	
    <li><a href="?action=uyeol" title="" <?php if(temizle($_GET["action"]) == "uyeol") { echo 'class="current"'; }?> >&Uuml;ye Ol</a></li> 
    <li><a href="index.php?action=iletisim" title="" <?php if(temizle($_GET["action"]) == "iletisim") { echo 'class="current"';} ?> >&#304;leti&#351;im</a></li> 









</ul>

</div>
<div class="m3 grid_1"></div>
</div>





<div class="clear"></div>