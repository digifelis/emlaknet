<br />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<meta name="google-site-verification" content="vTKlMhvS7n7RBTmAhrcHRFRlqH7-U1exkXOUfHP6kwA" />
<title><?php echo $title; ?></title>

<meta name="description" content="<?php echo $aciklama; ?>" /> 
<meta name="keywords" content="<?php echo $anahtar_kelime; ?>" />

<LINK type="text/css" rel="stylesheet"  href="tema/css/emlak.css">
<LINK type="text/css" rel="stylesheet" href="tema1/css/tema1.css">
<link type="text/css" rel="stylesheet" href="tema1/menu_img/style.css" />

<script type="text/javascript" src="yalniz_sayi.js"></script> 
<script type="text/javascript" src="getirici.js"></script>





<style type="text/css">
body{margin-top:0;}
.stil1{font-size:14px;}
.stil2{font-size:14px;font-family:"Times New Roman", Times, serif;color:#000;}
.stil3{color:#009;}
.stil8{font-size:12px;}
.stil9{color:#006;}
</style>
</head>

<body>


<div id="tamami">

<!-- <img src="tema1/img/emlaknet11.jpg" width="803" height="133" /> -->
<img src="http://emlaknetturkiye.com/tema7/yeni_logo.png" width="276" height="91" />
<div id="menu">
  
	
			<div id="menucase">
			
	<div id="stylefour">
	<ul>
	<li><a href="index.php" title="" <?php if(temizle($_GET["action"]) == "") { echo 'class="current"';} 
?> >Ana Sayfa</a></li>
	<li><a href="index.php?action=arama&amp;grup=1&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama" and temizle($_GET["grup"]) == "1" ) { echo 'class="current"';} ?> >Konut İlanları</a></li>
	<li><a href="index.php?action=arama&amp;grup=2&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "2" ) { echo 'class="current"';} ?> >İşyeri İlanları</a></li>
	<li><a href="index.php?action=arama&amp;grup=3&amp;liste=1" title="" <?php if(temizle($_GET["action"]) == "arama"  and temizle($_GET["grup"]) == "3" ) { echo 'class="current"';} ?> >Arsa İlanları</a></li>
    <li><a href="?action=emlakci_liste" <?php if(temizle($_GET["action"]) == "emlakci_liste") { echo 'class="current"';} ?> >Emlakçı Listesi</a></li>
    <li><a href="?action=duyuru" <?php if(temizle($_GET["action"]) == "duyuru") { echo 'class="current"';} ?> >Duyurular</a></li>
	<li><a href="?action=giris" title="" <?php if(temizle($_GET["action"]) == "giris") { echo 'class="current"'; } ?> >Üye Girişi</a></li>
    <li><a href="?action=uyeol" title="" <?php if(temizle($_GET["action"]) == "uyeol") { echo 'class="current"'; }?> >Üye Ol</a></li> 
    <li><a href="?action=iletisim" title="" <?php if(temizle($_GET["action"]) == "iletisim") { echo 'class="current"';} ?> >İletişim</a></li> 
	</ul>
	</div>

  </div>

    
  </div>
  <script type="text/javascript">
function bookmarksite(title, url){
if (document.all)
window.external.AddFavorite(url, title);
else if (window.sidebar)
window.sidebar.addPanel(title, url, "")
}
</script>


<div id="ana">