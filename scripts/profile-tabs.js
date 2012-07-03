(function(jQuery){
		  
	  
  jQuery.fn.tabify = function(){
    jQuery('#your-profile').prepend('<div id="tabs"/>');
	jQuery('#tabs').prepend('<ul id="tabs-nav"/>');
	
	 return this.each(function(i){
		
        var tabList = jQuery('#tabs-nav');
       
		var panelContents = jQuery(this).next().detach();

		var tabName = jQuery(this).detach();
        jQuery(tabList).append('<li><a href="#tabs-' + i +'">' + tabName.text() + '</a></li>');
		  
		  
        var thisPanel = jQuery('<div id="tabs-' + i + '" />');
        jQuery(thisPanel).prepend(panelContents.outerHTML());
        
        jQuery('#tabs').append(thisPanel);
        jQuery('#tabs').prepend(tabList);
      
      });
  
  };
})(jQuery);

jQuery.fn.outerHTML = function() {
    return jQuery('<div>').append( this.eq(0).clone() ).html();
};

jQuery(document).ready(function(){  
   jQuery('h3').tabify();
  jQuery('#tabs').tabs();
});