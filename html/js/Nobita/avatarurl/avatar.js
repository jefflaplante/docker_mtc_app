/** @param {jQuery} $ jQuery Object */
!function($, window, document, _undefined)
{
	$(document).on('click', '.importProxy', function(e) {
		e.preventDefault();
		
		var $button = $(e.target)
			ajaxurl = $button.data('fetchurl'),
			url = $($button.data('url')).val(),
			$testErr = $($button.data('error'));

		if (!ajaxurl)
		{
			console.warn('No fetching URL!');
			return;
		}

		$button.prop('disabled', true);

		XenForo.ajax(
			ajaxurl, 
			{ url: url },
			function(ajaxData, textStatus)
			{
				$button.removeAttr('disabled');

				if (typeof ajaxData == 'object')
				{
					if (ajaxData.error)
					{
						$testErr.hide().html(ajaxData.error[0]).xfFadeDown(XenForo.speed.fast);
						return false;
					}
					else
					{
						$testErr.slideUp(XenForo.speed.fast);
					}

					if (ajaxData.user_id)
					{
						XenForo.updateUserAvatars(ajaxData.user_id, ajaxData.urls, $('#ctrl_useGravatar_0').is(':checked'));
						return true; // break here
					}

					if (ajaxData.resource_id)
					{
						if ($button.parents('.xenOverlay').length)
						{
							$button.parents('.xenOverlay').data('overlay').close();
						}

						window.location.href = ajaxData.redirectUrl;
						// good
						return true;
					}
				}
			}
		);

	});
}
(jQuery, this, document);