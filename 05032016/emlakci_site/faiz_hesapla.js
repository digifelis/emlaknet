
function calculate() {
    var principal = document.loandata.principal.value;
	principal = principal.replace(".","");
    var interest = document.loandata.interest.value / 100;
    var payments = document.loandata.years.value;
    var x = Math.pow(1 + interest, payments);
    var monthly = (principal*x*interest)/(x-1);
    if (!isNaN(monthly) && 
        (monthly != Number.POSITIVE_INFINITY) &&
        (monthly != Number.NEGATIVE_INFINITY)) {
 
        document.loandata.payment.value = formatNumber(round(monthly),0,'.','','','','-','');
		document.loandata.principal.value = formatNumber(principal,0,'.','','','','-','');
        document.loandata.total.value = round(monthly * payments);
		document.loandata.totalinterest.value =  round((monthly * payments) - principal);
			
    }
    else {
        document.loandata.payment.value = "";
        // document.loandata.total.value = "";
        // document.loandata.totalinterest.value = "";
    }
}
 
function formatNumber(num,dec,thou,pnt,curr1,curr2,n1,n2) {
	var x = Math.round(num * Math.pow(10,dec));
	if (x >= 0) n1=n2='';
    var y = (''+Math.abs(x)).split('');
    var z = y.length - dec; 
    if (z<0) z--; 
    for(var i = z; i < 0; i++) 
    	y.unshift('0'); 
    	if (z<0) z = 1; 
    	y.splice(z, 0, pnt); 
    	if(y[0] == pnt) y.unshift('0'); 
        	while (z > 3) {
            	z-=3; 
	            y.splice(z,0,thou);
    	    }
    var r = curr1+n1+y.join('')+n2+curr2;
    return r;
 }
 
function round(x) {
  return Math.round(x*1)/1;
}