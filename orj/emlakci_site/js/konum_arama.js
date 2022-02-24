function iller()
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
				document.getElementById("il").innerHTML = self.xmlHttpReq.responseText;
			}
		}
	}
	
	self.xmlHttpReq.open("GET", "betikler/iller.php", true);
	self.xmlHttpReq.send(null);
}



function ilceler()
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
				document.getElementById("ilce").innerHTML = self.xmlHttpReq.responseText;
			}
		}
	}
	
	var il = document.arama.il.value;
	self.xmlHttpReq.open("GET", "betikler/ilceler.php?no="+il, true);
	self.xmlHttpReq.send(null);
}