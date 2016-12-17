$(document).ready(function() {
	
	function checkThreadUpdate(){
		$BRLastKnownDate = $('input[name="last_known_date"]').val();
		$BRLastDate = $('input[name="last_date"]').val();
		
		$BRlastIdli = $(".messageList > li:last-child").attr("id");

		if($BRLastKnownDate>$BRLastDate){
			$BRLastDate = $BRLastKnownDate;
		}
		
		$BRThreadId = $('input[name="BR_thread_id"]').val();
		
		XenForo.ajax(
				"index.php?threads/thread-update.json", 
				{
					last_date: $BRLastDate,
					thread_id: $BRThreadId,
					xfToken: $('#ctrl_xfToken').val()
				}, 
				
				function(json){
					if(XenForo.hasResponseError(json) !== false){				
						return true;
					}
					var $messageList = $('#messageList');
					
					new XenForo.ExtLoader(json, function()
					{
						$messageList.find('.messagesSinceReplyingNotice').remove();

						$(json.templateHtml).each(function()
						{
							if (this.tagName)
							{
								$id = $(this).attr('id');
								
								if(!$messageList.find('#'+$id).length){
									$(this).xfInsert('appendTo', $messageList);
								}
								
							}
						});
					});
					
					if(json.lastDate){
						$('input[name="last_date"]').val(json.lastDate);

						if($('input[name="br_post_jump"]').attr('checked')){
							 $('html, body').animate({
			                        scrollTop: $("#"+$BRlastIdli).offset().top
			                    }, 1000);
						}
					}
					XenForo.activate(document);
				},
				{cache: false}
			);
	}
	
	$brTimeUpdate = $('input[name="BR_timeupdate"]').val()*1000;
	setInterval(checkThreadUpdate,$brTimeUpdate);
});

