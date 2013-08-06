(function($) {
// plugin to change element type in real time
	$.fn.changeElementType = function(newType) {
	    var attrs = {};
	
	    $.each(this[0].attributes, function(idx, attr) {
	        attrs[attr.nodeName] = attr.nodeValue;
	    });
	    
	    var ret;
	    
	    this.replaceWith(function() {
	        ret = $("<" + newType + "/>", attrs).append($(this).contents());
	        return ret;
	    });
	    
	    return ret;
	};
})(jQuery);