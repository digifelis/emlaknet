<?php
echo "<div align='center'>
	<table border='1' width='176' id='table1' bordercolor='#F3F3F3' cellspacing='1'>
		<tr>
			<td width='16' align='center' height='20'>
			<img border='0' src='img/on.gif' width='16' height='16'></td>
			<td width='75' height='20'>
			<font face='Tahoma'><span style='font-size: 8pt'>Aktif Ziyaretçi</span></font></td>
			<td width='67' height='20'>
			<font face='Tahoma' style='font-size: 8pt'>"; 
#---Aktif Ziyaretçi Sayysy--------------------------------------------------------------------
@$ip = $_SERVER['REMOTE_ADDR']; 
@$past = time()-150; 
/// mysql_query("DELETE FROM online WHERE time < $past"); 
$vt->sql("DELETE FROM online WHERE time < $past")->sor();

//$sil = $db->query("DELETE FROM online WHERE time < $past");
///@$result = mysql_query("SELECT time FROM online WHERE ip='$ip'"); 
$vt->sql("SELECT time FROM online WHERE ip='$ip'")->sor();
@$result= $vt->alTek();

//@$result=$db->row("SELECT time FROM online WHERE ip='$ip'");
@$time = time();

//if($row = $result->time){ 
if($row = $result) {
/// mysql_query("UPDATE online SET time='$time',ip='$ip' WHERE ip='$ip'");
//$guncelle = $db->query("UPDATE online SET time='$time',ip='$ip' WHERE ip='$ip'");
$vt->sql("UPDATE online SET time='$time',ip='$ip' WHERE ip='$ip'")->sor();
}else{ 
///mysql_query("INSERT INTO online (ip,time) VALUES ('$ip','$time')") or die(mysql_error()); 
//$ekle = $db->query("INSERT INTO online (ip,time) VALUES ('$ip','$time')");
$vt->sql("INSERT INTO online (ip,time) VALUES ('$ip','$time')")->sor();
}
/*
if($row = mysql_fetch_array($result)){ 
mysql_query("UPDATE online SET time='$time',ip='$ip' WHERE ip='$ip'");
}else{ 
mysql_query("INSERT INTO online (ip,time) VALUES ('$ip','$time')") or die(mysql_error()); 
} 
*/
/// @$result   = mysql_query("SELECT ip FROM online");
//@$aktifkac = $db->number("SELECT count(ip) FROM online"); 

//echo $db->number("SELECT count(ip) FROM online"); 
$vt->sql("SELECT count(ip) FROM online")->sor();
echo $vt->alTek();
#---Aktif Ziyaretçi Sayysy--------------------------------------------------------------------			
			echo "</font></td>
		</tr>
		<tr>
			<td width='16' align='center' height='20'>
			<img border='0' src='img/user.gif' width='16' height='16'></td>
			<td width='75' height='20'>
			<font face='Tahoma' style='font-size: 8pt'>Dün Ziyaret</font></td>
			<td width='67' height='20'>
			<font face='Tahoma' style='font-size: 8pt'>"; 
#---Dün Tekil Toplam Kaç Ki?i Girmi?----------------------------------------------------------
@$baslat  =date(Y."-".m."-".d);
@$year    =substr($baslat, 0,4);
@$month   =substr($baslat, 5, 2);
@$day     =substr($baslat, 8, 2);
@$bitis   =date("Y-m-d", mktime(0, 0, 0, $month, $day-1, $year));
/// @$sorgula = mysql_query("select tarih from ziyaret where tarih='$bitis'");	
//@$dunku = $db->number("select count(tarih) from ziyaret where tarih='$bitis'");
//echo $db->number("select count(tarih) from ziyaret where tarih='$bitis'");
$vt->sql("select count(tarih) from ziyaret where tarih='$bitis'")->sor();
echo $vt->alTek()*5;
#---Dün Tekil Toplam Kaç Ki?i Girmi?----------------------------------------------------------		
			echo "</font></td>
		</tr>
		<tr>
			<td width='16' align='center' height='20'>
			<img border='0' src='img/user.gif' width='16' height='16'></td>
			<td width='75' height='20'>
			<font face='Tahoma' style='font-size: 8pt'>Bugün Ziyaret</font></td>
			<td width='67' height='20'>
			<font face='Tahoma' style='font-size: 8pt'>"; 
#---Bugün Tekil Toplam Kaç Ki?i Girmi?--------------------------------------------------------			
@$bugun = date("Y-m-d");
/// @$sorgu = mysql_query("select tarih from ziyaret where tarih='$bugun'");
//@$bugunku = $db->number("select count(tarih) from ziyaret where tarih='$bugun'");
//echo $db->number("select count(tarih) from ziyaret where tarih='$bugun'"); 		
$vt->sql("select count(tarih) from ziyaret where tarih='$bugun'")->sor();
echo $vt->alTek()*5;
#---Bugün Tekil Toplam Kaç Ki?i Girmi?--------------------------------------------------------			
			echo "</font></td>
		</tr>
		<tr>
			<td width='16' align='center' height='20'>
			<img border='0' src='img/users.gif' width='16' height='16'></td>
			<td width='75' height='20'>
			<font face='Tahoma' style='font-size: 8pt'>Toplam Ziyaret</font></td>
			<td width='67' height='20'>
			<font face='Tahoma' style='font-size: 8pt'>"; 
#---Toplam Tekil Kaç Ki?i Girmi?--------------------------------------------------------------			
@$ipsi  = $_SERVER['REMOTE_ADDR'];
@$tarih = date("Y-m-d");
/// @$ipkontrol = mysql_query("select * from ziyaret where ip='$ipsi' order by id desc");
$vt->sql("select * from ziyaret where ip='$ipsi' order by id desc")->sor();
$veriler = $vt->alHepsi();
foreach($veriler as $veri) {
@$vip   = $veri->ip;
@$vtarih= $veri->tarih;	
}
/* @$ipkontrol = $db->row("select * from ziyaret where ip='$ipsi' order by id desc");
@$vip   = $ipkontrol->ip;
@$vtarih= $ipkontrol->tarih; */
//@$bak =  $db->number("select count(ip) from ziyaret where ip='$ipsi' order by id desc");
$vt->sql("select count(ip) from ziyaret where ip='$ipsi' order by id desc")->sor();

if($vt->alTek() >0){
//if($db->number("select count(ip) from ziyaret where ip='$ipsi' order by id desc") >0){  //if-
    if($vtarih<$tarih){
  ///  $kayit_1 = mysql_query("insert into ziyaret (ip,tarih) values ('$ipsi','$tarih')");
//	$kayit_1 = $db->query("insert into ziyaret (ip,tarih) values ('$ipsi','$tarih')");
	$vt->sql("insert into ziyaret (ip,tarih) values ('$ipsi','$tarih')")->sor();
    } 
}//if-
else{
/// @$kayit_2 = mysql_query("insert into ziyaret (ip,tarih) values ('$ipsi','$tarih')");
//@$kayit_2 = $db->query("insert into ziyaret (ip,tarih) values ('$ipsi','$tarih')");
$vt->sql("insert into ziyaret (ip,tarih) values ('$ipsi','$tarih')")->sor();
}
//@$toplamne = mysql_query("select * from ziyaret");
//@$toplamziyaret  = $db->number("select count(ip) from ziyaret");
// echo $db->number("select count(ip) from ziyaret");		
$vt->sql("select count(ip) from ziyaret")->sor();
echo $vt->alTek()+1512970;
#---Toplam Tekil Kaç Ki?i Girmi?--------------------------------------------------------------			
			echo "</font></td>
		</tr>						
		<tr>
			<td width='16' align='center' height='20'>
			<img border='0' src='img/ip.gif' width='16' height='16'></td>
			<td width='142' colspan='2' height='20'>
			<font face='Tahoma' style='font-size: 8pt'>IP $ipsi</font></td>
		</tr>						
	</table>
</div>";

?>

<!-- Sayyac counter START v4.3 -->
<script type="text/javascript">
<!--
document.write(unescape("%3Cscript src='" + (("https:" == document.location.protocol) ? "https://" : "http://")
 + "srv.sayyac.net/sa.js?_salogin=reberezinar&_sav=4.3' type='text/javascript'%3E%3C/script%3E"));
//-->
</script>
<script type="text/javascript">
<!--
sayyac.track('reberezinar','srv.sayyac.net');
//-->
</script>
<noscript><a href="http://www.sayyac.com/" title=""><img src="http://srv.sayyac.net/sa.gif?_salogin=reberezinar&amp;_sav=4.3" border="0" alt="" /></a></noscript>
<!-- Sayyac counter END v4.3 -->