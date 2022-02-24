$(function(){
$("ul#navigation li").hover(function(){
$(this).addClass("hover");
$('ul:first',this).css('visibility', 'visible');
}, function(){
$(this).removeClass("hover");
$('ul:first',this).css('visibility', 'hidden');
});
$("ul#navigation li ul li:has(ul)").find("a:first").append(" &raquo; ");
});	



$(document).ready(function() {
$('.tooltip_south').tipsy({gravity: 's'});
$('.tooltip_west').tipsy({gravity: 'w'});
});


$(document).ready(function() {
$("a#donanimpop").fancybox({
'overlayShow'		: true,
'overlayColor'		: '#000',
'overlayOpacity'	: 0.5,	
'opacity'			: false,
'transitionIn'		: 'elastic',
'transitionOut'		: 'elastic',
'titlePosition'		: 'outside',
'padding'			: 0,
'autoScale'			: false,
'type'				: 'inline'
});
});	


$(document).ready(function() {	
// TAB-NAVIGATION 1 NUR AUF STARTSEITE LADEN!
			
		$(".tabs_content").hide(); //Hide all content
		$("ul.tabnav1 a:first").addClass("active").show(); //Activate first tab
		$(".tabs_content:first").show(); //Show first tab content
	
		//On Click Event
		$("ul.tabnav1 a").click(function() {
	
			$("ul.tabnav1 a").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tabs_content").hide(); //Hide all tab content
	
			var activeTab = $(this).attr("href"); //Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});	
		
// TAB-NAVIGATION 2 NUR AUF STARTSEITE LADEN!
			
		$(".tabs_content2").hide(); //Hide all content
		$("ul.tabnav2 a:first").addClass("active").show(); //Activate first tab
		$(".tabs_content2:first").show(); //Show first tab content
	
		//On Click Event
		$("ul.tabnav2 a").click(function() {
	
			$("ul.tabnav2 a").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tabs_content2").hide(); //Hide all tab content
	
			var activeTab = $(this).attr("href"); //Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});
		
});


$(document).ready(function() {	
$('#poplink_1').hover(function() {
$('#pop_1').stop(true, true).delay(1500).slideDown('fast');
}, function() {
$('#pop_1').stop(true, true).delay(500).slideUp('fast');
});
$('#poplink_2').hover(function() {
$('#pop_2').stop(true, true).delay(1500).slideDown('fast');
}, function() {
$('#pop_2').stop(true, true).delay(500).slideUp('fast');
});
$('#poplink_3').hover(function() {
$('#pop_3').stop(true, true).delay(1500).slideDown('fast');
}, function() {
$('#pop_3').stop(true, true).delay(500).slideUp('fast');
});
$('#poplink_4').hover(function() {
$('#pop_4').stop(true, true).delay(1500).slideDown('fast');
}, function() {
$('#pop_4').stop(true, true).delay(500).slideUp('fast');
});
$('#poplink_5').hover(function() {
$('#pop_5').stop(true, true).delay(1500).slideDown('fast');
}, function() {
$('#pop_5').stop(true, true).delay(500).slideUp('fast');
});
$('#poplink_6').hover(function() {
$('#pop_6').stop(true, true).delay(1500).slideDown('fast');
}, function() {
$('#pop_6').stop(true, true).delay(500).slideUp('fast');
});
});

$(document).ready(function()
{
	$('#country').chainSelect('#state','/ajax/ilce.php',
	{ 
		before:function (target)
		{
			$(target).css("display","none");
		},
		after:function (target)
		{
			$(target).css("display","inline");
		}
	});
	$('#state').chainSelect('#city','/ajax/koy.php',
	{ 
		before:function (target) 
		{
			$(target).css("display","none");
		},
		after:function (target) 
		{
			$(target).css("display","inline");
		}
	});
});

/*
 $().ready(function() {
	$("#keyword1").autocomplete("/ajax/keywords.php", {
		width: 250,
		matchContains: true,
		minChars: 2,
		selectFirst: false
	});	
});
$().ready(function() {
	$("#keyword2").autocomplete("/ajax/keywords.php", {
		width: 250,
		matchContains: true,
		minChars: 2,
		selectFirst: false
	});	
});
*/