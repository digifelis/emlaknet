<html>
<head>
<link href="etc/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="etc/jquery-latest.js"></script>
<script type="text/javascript" src="etc/jquery.min.js"></script>



 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
 <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> -->
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script src="http://jquery-ui.googlecode.com/svn/trunk/ui/i18n/jquery.ui.datepicker-tr.js"></script>
  <script>
  $(document).ready(function() {
$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd', altFormat: 'yy-mm-dd' });
});
  
    $(document).ready(function() {
    $( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd', altFormat: 'yy-mm-dd' });
  });
  </script>



<script type="text/javascript"> 
	$(document).ready(function(){
		$('form').submit( postgonder )
	});
	
	function postgonder()
	{		 
		$.post('onay_degistir.php', $(this).serialize(),function(veri){$('#sonuc').html(veri)});
	}
	
	
	

	
	
	</script>
    
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title> Admin Sayfasý</title>
</head>
<body>


<ul class="solidblockmenu">
<li><a href="index.php" class="current">Ana Sayfa</a></li>
<li><a href="index.php?action=uye" >&Uuml;ye Ýþlemleri</a></li>
<li><a href="index.php?action=ilan&subaction=ilan_listeg&sortorder=desc&id=">Ýlan Ýþlemleri</a></li>
<li><a href="index.php?action=haber">Haber Ýþlemleri</a></li>
<li><a href="index.php?action=duyuru">Duyuru Ýþlemleri</a></li>
<li><a href="index.php?action=vitrin">Vitrin Ýstekleri</a></li>
<li><a href="index.php?action=mesajlar">Mesajlar</a></li>
<li><a href="index.php?action=reklamlar">Reklamlar</a></li>
<li><a href="index.php?action=ayar">Ayarlar</a></li>
<li><a href="cikis.php">Çýkýþ</a></li>
</ul>
<br style="clear: left" />



