var LiveUpdate = {};

!function($, window, document, _undefined)
{
	LiveUpdate.SetupAutoPolling = function()
	{
		if (!$('html').hasClass('LoggedIn'))
		{
			return;
		}

		LiveUpdate.displayType = $('html').data('displaytype');
		if (!LiveUpdate.displayType)
		{
			return;
		}

		LiveUpdate.pollInterval = $('html').data('pollinterval') * 1000;
		if (!LiveUpdate.pollInterval)
		{
			LiveUpdate.pollInterval = 10000;
			$('html').data('pollinterval', 10)
		}

		$(document).bind('XFAjaxSuccess', LiveUpdate.AjaxSuccess);

		LiveUpdate.AjaxSuccess();
		setInterval(LiveUpdate.PollServer, LiveUpdate.pollInterval / 2);
	}

	LiveUpdate.PollServer = function()
	{
		if (!LiveUpdate.xhr && new Date().getTime() - LiveUpdate.lastAjaxCompleted > LiveUpdate.pollInterval)
    	{
    		var ajaxStart = $(document).data('events').ajaxStart[0].handler;
    		$(document).unbind('ajaxStart', ajaxStart);
    		LiveUpdate.xhr = XenForo.ajax('index.php?liveupdate', {}, function(){},
			{
    			error: function(xhr, responseText, errorThrown)
    			{
    				delete(LiveUpdate.xhr);
    				switch (responseText)
					{
						case 'timeout':
						{
							console.warn(XenForo.phrases.server_did_not_respond_in_time_try_again);
							break;
						}
						case 'parsererror':
						{
							console.error('PHP ' + xhr.responseText);
							break;
						}
					}
					return false;
    			},
    			timeout: LiveUpdate.pollInterval
    		});
    		$(document).bind('ajaxStart', ajaxStart);
    	}
	}

	LiveUpdate.AjaxSuccess = function(ajaxData)
	{
		var count = parseInt($('#ConversationsMenu_Counter span.Total').text()) + parseInt($('#AlertsMenu_Counter span.Total').text());

		if (LiveUpdate.displayType == 'both' || LiveUpdate.displayType == 'tab_icon')
		{
			Tinycon.setBubble(count);
		}

		if (LiveUpdate.displayType == 'both' || LiveUpdate.displayType == 'tab_title')
		{
			LiveUpdate.SetTabTitle(count);
		}

  		LiveUpdate.lastAjaxCompleted = new Date().getTime();

  		delete(LiveUpdate.xhr);
	}

	pageTitleCache = '';

	LiveUpdate.SetTabTitle = function(count)
	{
		pageTitle = document.title;
		if (pageTitleCache.length == 0)
		{
			pageTitleCache = pageTitle;
		}
		if (pageTitle.charAt(0) === '(')
		{
			pageTitle = pageTitleCache;
		}

		if (count > 0)
		{
			document.title = '(' + count + ') ' + pageTitle;
		}
		else
		{
			document.title = pageTitle;
		}
	}

	$(document).ready(LiveUpdate.SetupAutoPolling);
}
(jQuery, this, document);