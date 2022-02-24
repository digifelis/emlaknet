<br />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<meta name="google-site-verification" content="vTKlMhvS7n7RBTmAhrcHRFRlqH7-U1exkXOUfHP6kwA" />
<title>EMLAKNET.NET EMLAK VE GAYRIMENKUL ARAMA SİTESİ</title>


<style type="text/css">

</style>
<LINK rel=STYLESHEET href="tema/css/emlak.css">
<LINK rel=STYLESHEET href="tema1/css/tema1.css">
   <SCRIPT type=text/javascript> 
<!--
function numbersonly(myfield, e, dec)
{
var key;
var keychar;
if (window.event)
   key = window.event.keyCode;
else if (e)
   key = e.which;
else
   return true;
keychar = String.fromCharCode(key);
if ((key==null) || (key==0) || (key==8) || 
    (key==9) || (key==13) || (key==27) )
   return true;
else if ((("0123456789").indexOf(keychar) > -1))
   return true;
else if (dec && (keychar == "."))
   {
   myfield.form.elements[dec].focus();
   return false;
   }
else
   return false;
}
//-->
</SCRIPT>

<script language="javascript"  type="text/javascript">
var http = getHTTPObject(); // HTTP Nesnesi Oluşturuluyor
//Sonuçları Alan Fonksiyon
function handleHttpResponse()
{
  if (http.readyState == 1)
        {
          document.getElementById('mesaj').innerHTML = 'Sorgu Tamamlanıyor ...';
        } else if (http.readyState == 4) {
    if (http.status == 200)
    {
      //XML Verileri Alınıyor
      var xmlDocument = http.responseXML;
      var etiketadi          = xmlDocument.getElementsByTagName('ilce');
      //XML İlçeler Sayısını Alıyoruz
      var ilce_sayi   = etiketadi.length;
      if (ilce_sayi>0)
      {
        var ilce_secim_kutusu = document.getElementById("ilceler");

        var ilce_no;
        var ilce_adi;
        var i;
        ilce_kutu_temizle(ilce_secim_kutusu);
        ilce_kutu_olustur(ilce_secim_kutusu,'Tüm İlçeler','');

        for (i=0; i< ilce_sayi; i++)
        {
          ilce_adi  = etiketadi.item(i).getAttribute('ilceadi');
          ilce_no   = etiketadi.item(i).getAttribute('ilceno');
		
          ilce_kutu_olustur(ilce_secim_kutusu,ilce_adi,ilce_no);
        }
      }
                        document.getElementById('mesaj').innerHTML = '';
    } else {
      document.getElementById('mesaj').innerHTML = 'Hata Oluştu';
    }
  }
}
//XML Sayfasından Gelen İlçeleri Seçim Kutusuna Gönderen Fonksiyon
function ilce_kutu_olustur(ilce_secim_kutusu,isim,deger)
{
  var new_option   = document.createElement('option');
  new_option.text  = isim;
  new_option.value = deger;

  try {
    ilce_secim_kutusu.add(new_option, null);
  }
  catch(ex) {
    ilce_secim_kutusu.add(new_option);
  }
}

function ilce_kutu_temizle(xmlkok_etiket)
{
  while (xmlkok_etiket.length > 0)
  {
    xmlkok_etiket.remove(0);
  }
}

//İstekte Bulunan Fonksiyon
//İl Numarası XML Sayfasına Gönderiliyor
function ilceleri_getir()
{
  var iller = document.getElementById("iller");
        var ilno  = iller.options[iller.selectedIndex].value;
  http.open("POST", 'ilce_xml.php', true);
  http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=iso-8859-9');
  http.onreadystatechange = handleHttpResponse;
  http.send("ilno="+ilno);
}

function getHTTPObject()
{
  var retval=null;
  try
  {
    retval=new ActiveXObject("Msxml2.XMLHTTP");
  }
  catch(e)
  {
    try
    {
      retval=new ActiveXObject("Microsoft.XMLHTTP");
    }
    catch(oc)
    {
      retval=null;
    }
  }

  if(!retval && typeof XMLHttpRequest != "undefined")
  {
    retval=new XMLHttpRequest();
  }
  return retval;
}






var http = getHTTPObject1(); // HTTP Nesnesi Oluşturuluyor...   mahalle ve köyler için
//Sonuçları Alan Fonksiyon
function handleHttpResponse1()
{
  if (http.readyState == 1)
        {
          document.getElementById('mesaj1').innerHTML = 'Sorgu Tamamlanıyor ...';
        } else if (http.readyState == 4) {
    if (http.status == 200)
    {
      //XML Verileri Alınıyor
      var xmlDocument = http.responseXML;
      var etiketadi          = xmlDocument.getElementsByTagName('koy');
      //XML İlçeler Sayısını Alıyoruz
      var koy_sayi   = etiketadi.length;
      if (koy_sayi>0)
      {
        var koy_secim_kutusu = document.getElementById("koyler");

        var koy_no;
        var koy_adi;
        var k;
        koy_kutu_temizle(koy_secim_kutusu);
        koy_kutu_olustur(koy_secim_kutusu,'Tüm Köyler','');

        for (k=0; k< koy_sayi; k++)
        {
          koy_adi  = etiketadi.item(k).getAttribute('koyadi');
          koy_no   = etiketadi.item(k).getAttribute('koyno');
          koy_kutu_olustur(koy_secim_kutusu,koy_adi,koy_no);
        }
      }
                        document.getElementById('mesaj1').innerHTML = '';
    } else {
      document.getElementById('mesaj1').innerHTML = 'Hata Oluştu';
    }
  }
}
//XML Sayfasından Gelen Köyleri Seçim Kutusuna Gönderen Fonksiyon
function koy_kutu_olustur(koy_secim_kutusu,isim,deger)
{
  var new_option   = document.createElement('option');
  new_option.text  = isim;
  new_option.value = deger;

  try {
    koy_secim_kutusu.add(new_option, null);
  }
  catch(ex) {
    koy_secim_kutusu.add(new_option);
  }
}

function koy_kutu_temizle(xmlkok_etiket)
{
  while (xmlkok_etiket.length > 0)
  {
    xmlkok_etiket.remove(0);
  }
}

//İstekte Bulunan Fonksiyon
//İlçe Numarası XML Sayfasına Gönderiliyor
function koyleri_getir()
{
  		var ilceler = document.getElementById("ilceler");
        var ilceno  = ilceler.options[ilceler.selectedIndex].value;
  http.open("POST", 'koy_xml.php', true);
  http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=iso-8859-9');
  http.onreadystatechange = handleHttpResponse1;
  http.send("ilceno="+ilceno);
}

function getHTTPObject1()
{
  var retval=null;
  try
  {
    retval=new ActiveXObject("Msxml2.XMLHTTP");
  }
  catch(e)
  {
    try
    {
      retval=new ActiveXObject("Microsoft.XMLHTTP");
    }
    catch(oc)
    {
      retval=null;
    }
  }

  if(!retval && typeof XMLHttpRequest != "undefined")
  {
    retval=new XMLHttpRequest();
  }
  return retval;
}







</script>

 

<link rel="stylesheet" href="tema1/menu_img/style.css" type="text/css" />




</head>

<body>


<div id="tamami">

<div id="logo">
<!--    <div id="logo1">Content for  id "logo1" Goes Here</div> -->
  <div id="banner"><img src="tema1/img/emlaknet11.jpg" width="950" height="162" /></div>
  </div>
<div id="menu">
  
	
			<div id="menucase">
			
	<div id="stylefour">
	<ul>
	<li><a href="index.php" title="" <?php if(temizle($_GET["action"]) == "") { echo 'class="current"';} ?> >Ana Sayfa</a></li>
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

<div align="right"> <A style="COLOR: #000000; TEXT-DECORATION: none" 
      onclick="this.style.behavior='url(#default #homepage)';this.setHomePage('http://www.emlaknet.net');" 
      href="http://www.emlaknet.net/">Ana Sayfa Yap</A> 
        &nbsp;&nbsp;|&nbsp;&nbsp;
        <a tyle="COLOR: #000000; TEXT-DECORATION: none" href="javascript:bookmarksite('EmlakNet.Net - Gayrimenkul İlan Sitesi', 'http://www.emlaknet.net')">Sık Kullanılanlara Ekle</a>

      
      </div>
<div id="ana">