function dovizler()
{
	var xmlHttpReq = false;
	var self = this;
	
	if(window.XMLHttpRequest)
	{
		self.xmlHttpReq	= new XMLHttpRequest();
	}
	else if(window.ActiveXObject)
	{
		self.xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	
	self.xmlHttpReq.onreadystatechange=function()
	{
		if(self.xmlHttpReq.readyState==4)
		{
			if(self.xmlHttpReq.status==200)
			{
				document.getElementById("doviz_sonuc").style.display = 'block';
				document.getElementById("doviz_sonuc").innerHTML = self.xmlHttpReq.responseText;
			}
		}
	}
	
	var from = document.doviz.from.value;
	var to = document.doviz.to.value;
	var deger = document.doviz.deger.value;
	
	self.xmlHttpReq.open("GET", "betikler/dovizler.php?from="+from+"&to="+to+"&deger="+deger, true);
	self.xmlHttpReq.send(null);
}