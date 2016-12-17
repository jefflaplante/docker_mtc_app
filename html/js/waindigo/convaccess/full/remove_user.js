/**
 * @author waindigo
 */

/** @param {jQuery} $ jQuery Object */
!function($, window, document, _undefined)
{
	XenForo.RemoveUserTabIcon = function($span)
	{
		$span.click(function(e)
		{
			e.preventDefault();
			
			XenForo.ajax($span.data('href'), '', function(ajaxData, textStatus)
			{
				if (!ajaxData)
				{
					return false;
				}
				
				$li = $span.closest('li');
				if ($li.hasClass("active"))
				{
					if (ajaxData._redirectStatus && ajaxData._redirectTarget)
					{
						XenForo.redirect(ajaxData._redirectTarget);
					}
				}
				else
				{
					$li.remove();
				}
			});
		});
	};

	// Register remove user icons
	XenForo.register('span.RemoveUserTabIcon', 'XenForo.RemoveUserTabIcon');

}
(jQuery, this, document);
