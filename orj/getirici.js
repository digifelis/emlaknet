var http=getHTTPObject()
function handleHttpResponse(){
if(http.readyState==1){
document.getElementById('mesaj').innerHTML='Sorgu Tamamlanıyor ...'
}else if(http.readyState==4){
if(http.status==200){
var xmlDocument=http.responseXML
var etiketadi=xmlDocument.getElementsByTagName('ilce')
var ilce_sayi=etiketadi.length
if(ilce_sayi>0){
var ilce_secim_kutusu=document.getElementById("ilceler")
var ilce_no
var ilce_adi
var i
ilce_kutu_temizle(ilce_secim_kutusu)
ilce_kutu_olustur(ilce_secim_kutusu,'ilcelerin hepsini listele','')
for(i=0;i<ilce_sayi;i++){
ilce_adi=etiketadi.item(i).getAttribute('ilceadi')
ilce_no=etiketadi.item(i).getAttribute('ilceno')
ilce_kutu_olustur(ilce_secim_kutusu,ilce_adi,ilce_no)}}
document.getElementById('mesaj').innerHTML=''
}else{
document.getElementById('mesaj').innerHTML='Hata Oluştu'}}}
function ilce_kutu_olustur(ilce_secim_kutusu,isim,deger){
var new_option=document.createElement('option')
new_option.text=isim
new_option.value=deger
try{
ilce_secim_kutusu.add(new_option,null)}
catch(ex){
ilce_secim_kutusu.add(new_option)}}
function ilce_kutu_temizle(xmlkok_etiket){
while(xmlkok_etiket.length>0){
xmlkok_etiket.remove(0)}}
function ilceleri_getir(){
var iller=document.getElementById("iller")
var ilno=iller.options[iller.selectedIndex].value
http.open("POST",'ilce_xml.php',true)
http.setRequestHeader('Content-type','application/x-www-form-urlencoded; charset=iso-8859-9')
http.onreadystatechange=handleHttpResponse
http.send("ilno="+ilno)}
function getHTTPObject(){
var retval=null
try{
retval=new ActiveXObject("Msxml2.XMLHTTP")}
catch(e){
try{
retval=new ActiveXObject("Microsoft.XMLHTTP")}
catch(oc){
retval=null}}
if(!retval&&typeof XMLHttpRequest !="undefined"){
retval=new XMLHttpRequest()}
return retval}
var http=getHTTPObject1()
function handleHttpResponse1(){
if(http.readyState==1){
document.getElementById('mesaj1').innerHTML='Sorgu Tamamlanıyor ...'
}else if(http.readyState==4){
if(http.status==200){
var xmlDocument=http.responseXML
var etiketadi=xmlDocument.getElementsByTagName('koy')
var koy_sayi=etiketadi.length
if(koy_sayi>0){
var koy_secim_kutusu=document.getElementById("koyler")
var koy_no
var koy_adi
var k
koy_kutu_temizle(koy_secim_kutusu)
koy_kutu_olustur(koy_secim_kutusu,'Mahallelerin hepsini listele','')
for(k=0;k<koy_sayi;k++){
koy_adi=etiketadi.item(k).getAttribute('koyadi')
koy_no=etiketadi.item(k).getAttribute('koyno')
koy_kutu_olustur(koy_secim_kutusu,koy_adi,koy_no)}}
document.getElementById('mesaj1').innerHTML=''
}else{
document.getElementById('mesaj1').innerHTML='Hata Oluştu'}}}
function koy_kutu_olustur(koy_secim_kutusu,isim,deger){
var new_option=document.createElement('option')
new_option.text=isim
new_option.value=deger
try{
koy_secim_kutusu.add(new_option,null)}
catch(ex){
koy_secim_kutusu.add(new_option)}}
function koy_kutu_temizle(xmlkok_etiket){
while(xmlkok_etiket.length>0){
xmlkok_etiket.remove(0)}}
function koyleri_getir(){
var ilceler=document.getElementById("ilceler")
var ilceno=ilceler.options[ilceler.selectedIndex].value
http.open("POST",'koy_xml.php',true)
http.setRequestHeader('Content-type','application/x-www-form-urlencoded; charset=iso-8859-9')
http.onreadystatechange=handleHttpResponse1
http.send("ilceno="+ilceno)}
function getHTTPObject1(){
var retval=null
try{
retval=new ActiveXObject("Msxml2.XMLHTTP")}
catch(e){
try{
retval=new ActiveXObject("Microsoft.XMLHTTP")}
catch(oc){
retval=null}}
if(!retval&&typeof XMLHttpRequest !="undefined"){
retval=new XMLHttpRequest()}
return retval}
