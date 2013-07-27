window.scrollTo(0, 1);

(function($) {
	// testar transitions
	/*
	Modernizr.load({
		test : Modernizr.transition,
		yep  : '',
		nope : ['polyfillfortransition.js']
	});
	*/
	
	function _main() {
		setLangBrowser();
	}

	function callCSSTransitions() {
		$('#xm-bt-home').hover(function () {
			CSSTransitions(this, '#ED2525');
		});
		
		$('#xm-bt-contact').hover(function () {
			CSSTransitions(this, 'limegreen');
		});
		
		$('#xm-bt-work').hover(function () {
			CSSTransitions(this, 'dodgerblue');
		});
		
		$('#xm-bt-bio').hover(function () {
			CSSTransitions(this, 'darkorange');
		});
	}
	
	function CSSTransitions(element, color) {
		console.log(color);
		$(element).animate({
			opacity: 1,
			background: color
		});
	}
	
	function setLangBrowser() {
		var lang = navigator.language.toLowerCase();
		var langCookie = getLangCookie();
		
		if (langCookie) {
			lang = langCookie;
		}
		
		if (lang == 'en-us' || lang == 'en-gb') {
			changeToEN();
		} else if (lang == 'es') {
			changeToES();
		} else if (lang == 'pt-br') {
			changeToPTBR();
		} else if (lang == 'tlh') {
			console.log('vida longa e prospera!! =))')
		} else {
			changeToEN();
		}
	}
	
	function changeToEN() {
		var lang = 'en-us';
		//getJsonLanguage(lang);
		setLangCookie(lang);
		
		$('#bt-en').hide();
		$('#bt-es').show();
		$('#bt-ptbr').show();
	}
	
	function changeToES() {
		var lang = 'es';
		getJsonLanguage(lang);
		setLangCookie(lang);
		
		$('#bt-es').hide();
		$('#bt-en').show();
		$('#bt-ptbr').show();
	}
	
	function changeToPTBR() {
		var lang = 'pt-br';
		getJsonLanguage(lang);
		setLangCookie(lang);
		
		$('#bt-ptbr').hide();
		$('#bt-es').show();
		$('#bt-en').show();
	}
	
	function getJsonLanguage(lang) {
		$.get('/js/lib/lang_'+lang+'.json', function (data) {setLanguage(data);});
	}
	
	function setLanguage(data){
		$('#bio-content').html(data.pagebio);
	}
	
	function setLangCookie(lang){
		setCookie('lang', lang, 360);
	}
	
	function getLangCookie(){
		return getCookie('lang');
	}
	
	function setCookie(key, value, expdays){
		if (expdays) {
			var date = new Date();
			date.setTime(date.getTime() + (expdays * 24 * 60 * 60 * 1000));
			
			var expires = "; expires=" + date.toGMTString();
		}	else {
			var expires = "";
		}
		
		document.cookie = key + "=" + value + expires + "; path=/";
	}
	
	function getCookie(key) {
		if (document.cookie.length > 0) {
			keyIndex = document.cookie.indexOf(key + "=");
			
			if (keyIndex != -1) {
				keyIndex = keyIndex + key.length + 1;
				keyEnd = document.cookie.indexOf(";", keyIndex);
				
				if (keyEnd == -1) {
					keyEnd = document.cookie.length;
				}
				
				return unescape(document.cookie.substring(keyIndex, keyEnd));
			}
		}
		
		return "";
	}
	
	_main();
	
	$('#bt-es').click(function () {
		changeToES();
	});
	
	$('#bt-en').click(function () {
		changeToEN();
	});
	
	$('#bt-ptbr').click(function () {
		changeToPTBR();
	});
})(jQuery);