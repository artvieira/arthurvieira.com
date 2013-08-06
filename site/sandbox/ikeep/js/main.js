window.scrollTo(0, 1);

(function($) {
	$('#new-note-content').autogrow();
	
	$('#new-note').click(function(){
		$('#new-note-section-before').hide();
		$('#new-note-section-after').show();
	});
	
	$('#new-note-submit').click(function(){
		$('#new-note-section-after').hide();
		$('#new-note-section-before').show();	
	});
})(jQuery);