window.scrollTo(0, 1);

(function($) {
	// testar transitions
	// Modernizr.load({
	//  test: Modernizr.csstransitions,
	//  nope: callCSSTransitions()
	// });

	function _main() {
		setLangBrowser();
	}

	function callCSSTransitions() {
		$('#xm-bt-home').hover(function () {
			CSSTransitions(this, 'ED2525');
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
	}
	
	function setLangBrowser() {
		var lang = navigator.language.toLowerCase();
		
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
		getJsonLanguage('en');
		
		$('#bt-en').hide();
		$('#bt-es').show();
		$('#bt-ptbr').show();
	}
	
	function changeToES() {
		getJsonLanguage('es');
		
		$('#bt-es').hide();
		$('#bt-en').show();
		$('#bt-ptbr').show();
	}
	
	function changeToPTBR() {
		getJsonLanguage('ptbr');
		
		$('#bt-ptbr').hide();
		$('#bt-es').show();
		$('#bt-en').show();
	}
	
	function getJsonLanguage(lang) {
		$.get('/js/lib/lang_'+lang+'.json', function (data) {getLanguage(data);});
	}
	
	function getLanguage(data){
		console.log(data);
		
		
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