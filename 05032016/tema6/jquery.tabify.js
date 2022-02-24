/*
 * jQuery Tabify v0.7.0 - http://tranqulitybase.biz
 *
 * Copyright © 2011 Joe Baldwin
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 * EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 * GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 * NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/
(function($){
$.fn.extend({ 
	tabify: function(option) {

	// version
	var _version = "0.7.0"; // plugin version
	this.version = function(){return _version;};
	// handles
	var contentContainerList = null,
		headerContainer = null,
		headerTabList = null,
		selectedTab=null;
	// parameters
	var	transitionMethod = transitionWithSlideIn,
		useTheme = true,
		debugMode = true,
		contentWidth = 'auto',
		contentHeight = 'auto',
		speedIn=700, speedOut=350;
	// CSS Color Theme
	var	headerBG = '#c5d5ee',
		headerBGFrom = '#c5d5ee',
		headerBGTo = '#a5b5ce',
		headerColor = 'brown',
		headerColorHover = '#dd3333',
		contentBG = '#dddddd',
		contentBGFrom = '#dddddd',
		contentBGTo = '#ffffff',
		contentColor = 'brown',
		border = "#bbbbbb";
	// default parameters
	var defaultList = {
		'contentClass': 'tabifyContent', // content
		'contentHeight': 'auto',
		'contentWidth': 'auto',
		'debugMode': false, // turn on debug messages
		'theme': 'BarneyFife', // none, BarneyFife, TheDarlings, OpieTaylor
		'themeDef': null,
		'transition': 'fadeIn', // none, fadeIn, slideIn
		'speed': 600 // transition speed
	}
	var option = $.extend(defaultList, option);

	// initialize Tabify instance
	function init(container)
	{
		// instance variables
		headerContainer = container; // tab header
		headerTabList = container.children('div'); // tab list
		selectedTab = headerTabList.first(); // select first tab
		contentContainerList = $("." + option['contentClass']); // content list
		useTheme = (option['theme'] == 'none' ? false:true); // use preset CSS themes
		debugMode = option['debugMode'];
		contentHeight = option['contentHeight'];
		contentWidth = option['contentWidth'];
		speedIn = option['speed'];
		speedOut = Math.round(speedIn/2);

		// CSS layout
		styleTabLayout();
		styleContentLayout();

		// CSS theme
		if(option['themeDef'] != null)
		{
			toTheme(option['themeDef']);
			styleWithColorTheme();
		}
		else
			initThemeWithName(option['theme']);

		initTransitionMethodWithName(option['transition']);

		initTabBehavior();
		initContent();
	};

	// Tab Behavior
	function initTabBehavior()
	{
		headerTabList.click(transitionContent);
	};

	// initialize transition method
	function initTransitionMethodWithName(transitionName)
	{
		switch(transitionName)
		{
			case 'fadeIn':
				transitionMethod = transitionWithFadeIn;
				break;
			case 'slideIn':
				transitionMethod = transitionWithSlideIn;
				break;
			case 'none':
				transitionMethod = transitionWithShow;
				break;
			default:
				transitionMethod = transitionWithSlideIn;
				debug('Error: transition "' + transitionName + '" not found');
		}
	};
	this.setTransition = initTransitionMethodWithName;

	// select tab
	function initContent(tab)
	{
		selectTab(headerTabList.first()); // first tab
		var content = toContentContainer(selectedTab);
		content.show();
	};

	// select tab
	function selectTab(tab)
	{
		selectedTab = tab;
		styleSelectedTab(selectedTab);
	};

	// convenience method for browser gradient best-fit
	function styleBackgroundGradient(handle, from, to, background)
	{
		if(background != null)
			handle.css('background', background); // no gradient
		if(from != null && to != null)
		{
			handle.css('background', '-webkit-gradient(linear, left top, left bottom, from(' + to + '), to(' + from + '))'); // webkit
			handle.css('background','-moz-linear-gradient(top, ' + to + ', ' + from + ')'); // mozilla
			handle.css('background','-o-linear-gradient(' + to + ', ' + from + ')'); // opera
			handle.css('filter',"progid:DXImageTransform.Microsoft.gradient(startColorstr='" + to + "', endColorstr='" + from + "'); zoom:1;"); // IE9
		}
	};

	// convenience method to style the selected tab
	function styleSelectedTab(tab)
	{
		if(!useTheme)
			return;

		headerTabList.each(function(){
			var headerTab = $(this);

			if(headerTab.attr('rel') == tab.attr('rel')) // select
			{
				tab.css({'color':contentColor,'border-bottom':'none'});
				var bg = (contentBGTo == null ? contentBG:contentBGTo);
				styleBackgroundGradient(tab, null, null, bg);
			}
			else // deselect
			{
				headerTab.css({'color':headerColor,'border-bottom':('1px solid ' + border)});
				styleBackgroundGradient(headerTab, headerBGFrom, headerBGTo, headerBG);
			}
		});

	};


	// Tab Style
	function styleTabLayout()
	{
		headerContainer.css('text-align','left');
		headerTabList.css({
			'display':'inline',
			'padding':'3px 6px 1px',
			'vertical-align':'middle',
			'border-radius':'6px 6px 0 0',
			'margin':'0px 0px'
		});
		// DEBUG - wrap tabs
	};

	// Content Style
	function styleContentLayout()
	{
		contentContainerList.css({
			'display':'none',
			'height': contentHeight,
			'margin':'0',
			'padding':'10px 25px',
			'text-align':'left',
			'white-space':'normal',
			'width': contentWidth //'width':'inherit'
		});
	};

	// style
	function styleWithColorTheme()
	{
		// Header Style
		headerTabList.css('border',('1px solid ' + border));

		if(useTheme)
		{
			headerTabList.css('color',headerColor);
			styleBackgroundGradient(headerTabList, headerBGFrom, headerBGTo, headerBG);
			styleSelectedTab(selectedTab);
		}
		// hover style
		headerTabList.hover(function(){ // hover
			//alert($(this).attr('rel'));
			$(this).css('cursor', 'pointer');
			if($(this).attr('rel') == selectedTab.attr('rel'))
				return;
			if(useTheme)
			{
				$(this).css('color', headerColorHover);
				styleBackgroundGradient($(this), headerBGTo, headerBGFrom, headerBG);
			}
		},function(){ // unhover
			if($(this).attr('rel') == selectedTab.attr('rel'))
				return;

			if(useTheme)
			{
				$(this).css('color', headerColor);
				styleBackgroundGradient($(this), headerBGFrom, headerBGTo, headerBG);
			}
		});

		// Content Style
		if(useTheme)
		{
			contentContainerList.css('color', contentColor);
			contentContainerList.css('border', ('1px solid ' + border));
			styleBackgroundGradient(contentContainerList, contentBGFrom, contentBGTo, contentBG);
		}
	};

	function initThemeWithName(themeName)
	{
		switch (themeName)
		{
			case 'none':
				break;
			case 'AuntBee':
				toTheme(themeAuntBee);
				break;
			case 'BarneyFife':
				toTheme(themeBarneyFife);
				break;
			case 'HelenCrump':
				toTheme(themeHelenCrump);
				break;
			case 'OpieTaylor':
				toTheme(themeOpieTaylor);
				break;
			case 'TheDarlings':
				toTheme(themeTheDarlings);
				break;
			default:
				toTheme(themeBarneyFife);
				debug('Error: theme "' + themeName + '" not found');
				break;
		}

		styleWithColorTheme();
	};
	this.setTheme = initThemeWithName; // localize method

	function debug(str)
	{
		if(!debugMode)
			return;
		alert('DEBUG\n' + str);
	};

	// Themes
	var themeAuntBee = {'headerBG':'#6c9219','headerBGFrom':'#3a542e','headerBGTo':'#6c9219','headerColor':'#e7ffd5','headerColorHover':'#ddffdd','contentBG':'#c4d2ae','contentBGFrom':'#c4d2ae','contentBGTo':'#ffffff','contentColor':'#142207','border':"#c4b29e"};
	var themeBarneyFife = {'headerBG':'#dddddd','headerBGFrom':'#ffffff','headerBGTo':'#dddddd','headerColor':'#503333','headerColorHover':'#605555','contentBG':'#f3f3f3','contentBGFrom':'#dddddd','contentBGTo':'#ffffff','contentColor':'#464444','border':"#bbbbbb"};
	var themeHelenCrump = {'headerBG':'#eecccc','headerBGFrom':'#ffffff','headerBGTo':'#eecccc','headerColor':'#881111','headerColorHover':'#992211','contentBG':'#ffeeee','contentBGFrom':'#ffeeee','contentBGTo':'#ffffff','contentColor':'#776666','border':"#ccbbbb"};
	var themeOpieTaylor = {'headerBG':'#f9f7a1','headerBGFrom':'#f9f7a1','headerBGTo':'#e3c16a','headerColor':'#661111','headerColorHover':'#ffffff','contentBG':'#f5dcbe','contentBGFrom':'#f5dcbe','contentBGTo':'#ffffff','contentColor':'#665555','border':"#ccbbbb"};
	var themeTheDarlings = {'headerBG':'#d5e5ff','headerBGFrom':'#ffffff','headerBGTo':'#d5e5ff','headerColor':'#223366','headerColorHover':'#666666','contentBG':'#d5e5ff','contentBGFrom':'#d5e5ff','contentBGTo':'#ffffff','contentColor':'#333355','border':"#bbccee"};

	function toContentContainer(tab){return $('#' + tab.attr('rel'));};

	// store theme
	function toTheme(themeArray)
	{
		headerBG = themeArray['headerBG'];
		headerBGFrom = themeArray['headerBGFrom'];
		headerBGTo = themeArray['headerBGTo'];
		headerColor = themeArray['headerColor'];
		headerColorHover = themeArray['headerColorHover'];
		contentBG = themeArray['contentBG'];
		contentBGFrom = themeArray['contentBGFrom'];
		contentBGTo = themeArray['contentBGTo'];
		contentColor = themeArray['contentColor'];
		border = themeArray['border'];
	};

	function toDescr()
	{
		var t4 = '    ';
		var t8 = t4 + t4;
	
		var str = "{\n" +
			t4 + "headerID: " + headerContainer.attr('id') + '\n' +
			t4 + 'contentWidth: ' + contentWidth + '\n' +
			t4 + 'contentHeight: ' + contentHeight + '\n';
	
		contentContainerList.each(function(){
			var container = $(this);
			var id = container.attr('id');
	
			str += (t4 + id + (container.is(":visible") ? '  VISIBLE':'') + '\n' +
				t4 + '{\n' +
				t8 + 'height: ' + container.height() + '\n' +
				t8 + 'width: ' + container.width() + '\n' +
				t4 + '}\n');
		});
		str += "}\n";
		return str;
	};

	// Tab Callback: replace content with slide effect
	function transitionContent()
	{
		// return if tab is selected
		if($(this).attr('rel') == $(selectedTab).attr('rel'))
			return;

		var contentContainerFrom = toContentContainer(selectedTab); // current content
		selectTab($(this)); // select tab
		var contentContainerTo = toContentContainer(selectedTab); // selected content

		// transition content
		transitionMethod(contentContainerFrom, contentContainerTo);
	};
	function transitionWithFadeIn(contentContainerFrom, contentContainerTo)
	{
		contentContainerFrom.fadeOut(speedOut,function() {
			contentContainerTo.fadeIn(speedIn, function() {
//				contentContainerTo.css('width', contentWidth); // set new width
			});
		});
	};
	function transitionWithSlideIn(contentContainerFrom, contentContainerTo)
	{
		contentContainerFrom.slideUp(speedOut,function() {
			contentContainerTo.slideDown(speedIn).fadeIn(speedIn, function() {
//				contentContainerTo.css('width', contentWidth); // set new width
			});
		});
	};
	function transitionWithShow(contentContainerFrom, contentContainerTo)
	{
		contentContainerFrom.hide(1,function() {
			contentContainerTo.show(1, function() {
//				contentContainerTo.css('width', contentWidth); // set new width - seems to headoff width problems
			});
		});
	};


	// Iterate over the current set of matched elements
	return this.each(function() {
		init($(this));
		// debug(toDescr());
	});

	}

});
})(jQuery);
