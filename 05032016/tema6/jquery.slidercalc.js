// JavaScript Document
// Requires JQuery

var calcMonths = 1;
var calcValue = 10000;

/* Formats number with , as the decimal separator */
function formatNumber(nStr) {
	
    nStr = Math.round(nStr)+'';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2 + '';
}

/* Updates the labels based on slider values */
function updateCalc() {

var c = jQuery('#interestrate').val().replace(',', '.')/100.0;
var n = calcMonths*1.00;
var L = calcValue*1.00;

if (!isNaN(c)) {
	var P = L * (c * Math.pow((1 + c),n) ) / (Math.pow((1 + c), n) - 1);
	jQuery('#payment').html(formatNumber(P)+' TL');
} else {
	jQuery('#payment').html("Faiz oranı girin");
}
}



jQuery(document).ready(function() {
    jQuery("#sliderPrincipal").slider({
	value:50000,
	min: 10000,
	max: 250000,
	step: 5000,
	slide: function(event, ui) {
	    calcValue = ui.value;
	    jQuery("#principal").html(formatNumber(ui.value)+ ' YTL');
	    updateCalc();
	}
    });

    jQuery("#principal").html(formatNumber(jQuery("#sliderPrincipal").slider("value"))+ ' YTL');

    jQuery("#sliderMonths").slider({
	value:60,
	min: 1,
	max: 240,
	step: 1,
	slide: function(event, ui) {
	    updateMonths(ui.value);
	}
    });

    updateMonths(jQuery("#sliderMonths").slider("value"));

    updateCalc();

});

function updateMonths(value) {

    calcMonths = value;
    var product = jQuery('#product').val();

    if (product) {
	for (var i in products[product]['rate']) {
	    if (i >= value) {
		jQuery('#interestrate').val(products[product]['rate'][i].replace('.',','));
		break;
	    }
	}
    }

    var banksavailable = 0;
    var currentBank = jQuery('#product').val();
    jQuery('#product').html('');
    jQuery('<option>Seçiniz</option>').val('').appendTo(jQuery('#product'));
    for (var i in products) {
	if (products[i]['maxduration'] >= value) {
	    jQuery('<option>'+products[i]['name']+'</option>').val(i).appendTo(jQuery('#product'));
	    banksavailable++;
	    if (i == currentBank)
		jQuery('#product').val(i);
	}
    }
	
    jQuery('#banksavailable').html(banksavailable);

    jQuery("#duration").html(value+' ay');
    updateCalc();
}


/* Changes the products and banks */
function changeProduct(obj) {
// redirect to application page to increase conversion
if ($('#appform')) {
	$('#creditamount').val($('#principal').html()); 
	$('#appform input[type=submit]').trigger('click');
	//return false;
}
	
var val = jQuery(obj).val();
if (!val) {
	jQuery('#sliderMonths').slider('option', 'max', 360);
	jQuery('#interestrate').removeAttr('readonly');
	jQuery('#sliderMonths').slider('value', jQuery('#sliderMonths').slider('value'));
	updateMonths(jQuery('#sliderMonths').slider('value'));
	return;
}

jQuery('#interestrate').attr('readonly', 'readonly');
jQuery('#sliderMonths').slider('option', 'max', products[val]['maxduration']);
jQuery('#sliderMonths').slider('value', jQuery('#sliderMonths').slider('value'));

updateMonths(jQuery('#sliderMonths').slider('value'));
updateCalc();

}
