jQuery(document).ready(function($) {                
		$('#wmd-button-bar-help').hide();
		$('pre').not('.wmd-help').addClass('prettyprint');

		var converter2 = new Markdown.getSanitizingConverter();

		var help = function () { 
			$('#wmd-button-bar-help').toggle(300,'swing');
		}

		if($('#bbp_reply_content').length>0){
			id =  "bbp_reply_content";
		}else if($('#bbp_topic_content').length>0){
			id =  "bbp_topic_content";
		}else{
			id =  "comment";
		}

		var editor = new Markdown.Editor(converter2, id, { handler: help });
		editor.run();

		if (typeof prettyPrint == 'function') {
			prettyPrint();
			editor.hooks.chain("onPreviewRefresh", function () {
			        $('.wmd-preview pre').addClass('prettyprint');
				prettyPrint();
   			 });
		}
});
