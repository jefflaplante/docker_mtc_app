/**
 * @author waindigo
 */

/** @param {jQuery} $ jQuery Object */
!function($, window, document, _undefined)
{
	//TODO: Enable jQuery plugin and compressor in editor template.

	/**
	 * Enables quick reply for a message form
	 * @param $form
	 */
	XenForo.QuickReply = function($form)
	{
		if ($('#messageList').length == 0)
		{
			return console.error('Quick Reply not possible for %o, no #messageList found.', $form);
		}

		var submitEnableCallback = XenForo.MultiSubmitFix($form);

		/**
		 * Scrolls QuickReply into view and focuses the editor
		 */
		this.scrollAndFocus = function()
		{
			$(document).scrollTop($form.offset().top);

			if (window.tinyMCE)
			{
				window.tinyMCE.editors['ctrl_message_html'].focus();
			}
			else
			{
				$('#QuickReply').find('textarea:first').get(0).focus();
			}

			return this;
		};

		$form.data('QuickReply', this).bind(
		{
			/**
			 * Fires just before the form would be AJAX submitted,
			 * to detect whether or not the 'more options' button was clicked,
			 * and to abort AJAX submission if it was.
			 *
			 * @param event e
			 * @return
			 */
			AutoValidationBeforeSubmit: function(e)
			{
				if ($(e.clickedSubmitButton).is('input[name="more_options"]'))
				{
					e.preventDefault();
					e.returnValue = true;
				}
			},

			/**
			 * Fires after the AutoValidator form has successfully validated the AJAX submission
			 *
			 * @param event e
			 */
			AutoValidationComplete: function(e)
			{
				if (e.ajaxData._redirectTarget)
				{
					window.location = e.ajaxData._redirectTarget;
				}

				$('input[name="last_position"]', $form).val(e.ajaxData.lastPosition);
				$('input[name="last_date"]', $form).val(e.ajaxData.lastDate);

				if (submitEnableCallback)
				{
					submitEnableCallback();
				}

				$form.find('input:submit').blur();

				new XenForo.ExtLoader(e.ajaxData, function()
				{
					$(e.ajaxData.templateHtml).each(function()
					{
						if (this.tagName)
						{
							$(this).xfInsert('prependTo', $('#messageList'));
						}
					});
				});

				var $textarea = $('#QuickReply').find('textarea');
				$textarea.val('');
				var ed = $textarea.data('XenForo.BbCodeWysiwygEditor');
				if (ed)
				{
					ed.resetEditor();
				}
				if (window.tinyMCE)
				{
					window.tinyMCE.editors['ctrl_message_html'].setContent('');
				}

				if (window.sessionStorage)
				{
					window.sessionStorage.quickReplyText = null;
				}

				$form.trigger('QuickReplyComplete');

				return false;
			}
		});
	};
}
(jQuery, this, document);
