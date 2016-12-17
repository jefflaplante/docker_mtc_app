/** @param {jQuery} $ jQuery Object */
!function($, window, document, _undefined)
{
	/**
	 * Loads and displays the next batch of bookmark feed items from the server.
	 *
	 * @param jQuery Link to click in order to initiate loading
	 */
	XenForo.BookmarksFeedLoader = function($link) { this.__construct($link); };
	XenForo.BookmarksFeedLoader.prototype =
	{
		__construct: function($link)
		{
			this.$link = $link.click($.context(this, 'load'));

			this.xhr = null;
		},

		/**
		 * Loads up the next x bookmark feed items from the server
		 *
		 * @param Event e
		 *
		 * @return boolean false
		 */
		load: function(e)
		{
			e.preventDefault();
			e.target.blur();

			if (this.xhr === null && this.$link.attr('href'))
			{
				this.xhr = XenForo.ajax(
					this.$link.attr('href'),
					{ cutOffDate: this.$link.data('cutoffdate'), skipIds: this.$link.data('skipids'), totalChecked: this.$link.data('totalchecked') },
					$.context(this, 'display')
				);
			}

			return false;
		},

		/**
		 * Handles the AJAX response from load() and displays any returned bookmark feed items.
		 *
		 * @param object JSON data from AJAX
		 * @param string textStatus
		 */
		display: function(ajaxData, textStatus)
		{
			this.xhr = null;

			if (XenForo.hasResponseError(ajaxData))
			{
				return false;
			}

			if (XenForo.hasTemplateHtml(ajaxData))
			{
				var $html = $(ajaxData.templateHtml);

				if ($html.length)
				{
					$html.find('.event:first').addClass('forceBorder');

					$html.xfInsert('insertBefore', this.$link.closest('.BookmarksFeedEnd'), 'xfSlideDown', XenForo.speed.slow);
				}
			}

			this.$link.closest('.BookmarksFeedEnd').xfFadeOut();
		}
	};

	// *********************************************************************

	XenForo.register('a.BookmarksFeedLoader', 'XenForo.BookmarksFeedLoader');
}
(jQuery, this, document);