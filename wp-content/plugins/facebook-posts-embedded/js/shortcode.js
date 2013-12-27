(function ($) {
	tinymce.create('tinymce.plugins.fb_embed_post', {  
        init : function(ed, url) {
            ed.addButton('fb_embed_post', {  
                title : 'Embed a Facebook Post',  
                image : url+'/icon.png',  
				onclick : function() {
					var uri = prompt ("Copy/Paste the URL of a Facebook post", "http://facebook.com/..");
					if (uri !== 'undefined' && uri !== '') {
						ed.selection.setContent('[fb_embed_post href="'+uri+'"/]');  
					}
					
					return false;
				}
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('fb_embed_post', tinymce.plugins.fb_embed_post);  
})(jQuery);
