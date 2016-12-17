/** @param {jQuery} $ jQuery Object */
!function($, window, document, _undefined)
{
	/**
	 * Wrapper for the jQuery Tools Tabs system
	 *
	 * @param jQuery .Tabs
	 */
	XenForo.BookmarkTabs = function($tabContainer) { this.__construct($tabContainer); };
	XenForo.BookmarkTabs.prototype =
	{
		__construct: function($tabContainer)
		{
			// var useHistory = XenForo.isPositive($tabContainer.data('history'));
			// TODO: disabled until base tag issues are resolved
			var useHistory = false;

			this.$tabContainer = $tabContainer;
			this.$panes = $($tabContainer.data('panes'));

			$tabContainer.tabs(this.$panes, {
				current: 'active',
				history: useHistory,
				onBeforeClick: $.context(this, 'onBeforeClick')
			});
			this.api = $tabContainer.data('tabs');
			
			$types = $tabContainer.data('types');
			$pos = 0;
			
			// select correct tab
			if ($tabContainer.data('tab') == 'profile_posts') // select the profile_posts tab when there are no thread_posts but there are some profile_posts
			{
				$('li[id="thread_posts"]').xfHide(); // hide the thread_posts tab contents
				$('li[id="resources"]').xfHide(); // hide the resources tab contents
				$('li[id="showcase_items"]').xfHide(); // hide the showcase_items tab contents
				this.api.click(1); // second tab - profile_posts
			}
			else if ($tabContainer.data('tab') == 'resources') // select the resources tab when there are no thread_posts or profile_posts but there are some resources
			{
				$('li[id="thread_posts"]').xfHide(); // hide the thread_posts tab contents
				$('li[id="profile_posts"]').xfHide(); // hide the profile_posts tab contents
				$('li[id="showcase_items"]').xfHide(); // hide the showcase_items tab contents
				
				if ($types == 'post_resource' || $types == 'post_resource_showcase')
				{
					$pos = 1;
				}
				else if ($types == 'post_profile_resource' || $types == 'post_profile_resource_showcase')
				{
					$pos = 2;
				}
				
				this.api.click($pos); // third tab - resources
			}
			else if ($tabContainer.data('tab') == 'showcase_items') // select the showcase_items tab when there are no thread_posts or profile_posts but there are some showcase_items
			{
				$('li[id="thread_posts"]').xfHide(); // hide the thread_posts tab contents
				$('li[id="profile_posts"]').xfHide(); // hide the profile_posts tab contents
				$('li[id="resources"]').xfHide(); // hide the resources tab contents
				
				if ($types == 'post_showcase')
				{
					$pos = 1;
				}
				else if ($types == 'post_profile_showcase' || $types == 'post_resource_showcase')
				{
					$pos = 2;
				}
				else if ($types == 'post_profile_resource_showcase')
				{
					$pos = 3;
				}
				
				this.api.click($pos); // fourth tab - showcase_items
			}
		},

		onBeforeClick: function(e, index)
		{
			this.$tabContainer.children().each(function(i)
			{
				if (index == i)
				{
					$(this).addClass('active');
				}
				else
				{
					$(this).removeClass('active');
				}
			});
		}
	};
	
	// *********************************************************************
	
	XenForo.register('.BookmarkTabs', 'XenForo.BookmarkTabs');

	// *********************************************************************	
	// removes an item from view when deleted
	XenForo.BookmarksForm = function($form)
	{
		$form.bind('AutoValidationComplete', function(e)
		{
			if (e.ajaxData)
			{
				if (e.ajaxData.bookmarkDeleteId)
				{
					$('li[name="item_'+e.ajaxData.bookmarkDeleteId+'"]').xfRemove('xfSlideUp');
				}
			}
		});
	};

	// *********************************************************************

	XenForo.register('#BookmarksForm', 'XenForo.BookmarksForm');
	
	// *********************************************************************
	// flips the private/public button to correct text
	XenForo.BookmarksFlipForm = function($form)
	{
		$form.bind('AutoValidationComplete', function(e)
		{
			if (e.ajaxData)
			{
				if (e.ajaxData.flipped)
				{
					$('input[name="fliptext'+e.ajaxData.bookmarkId+'"]').val(e.ajaxData.flipped);
				}
			}
		});
	};

	// *********************************************************************

	XenForo.register('#BookmarksFlipForm', 'XenForo.BookmarksFlipForm');
	
	// *********************************************************************
	/**
	 * Initializes various controls for discussion listings
	 *
	 * @param jQuery $('form.BookmarksList')
	 */
	XenForo.BookmarksList = function($form) { this.__construct($form); };
	XenForo.BookmarksList.prototype =
	{
		__construct: function($form)
		{
			this.$form = $form;

			$('a.EditControl', this.$form).live('click', $.context(this, 'editControlClick'));

			this.$editor = null;
			this.loaderXhr = null;
		},

		/**
		 * Handles clicks on the 'Edit' control
		 *
		 * @param event e
		 *
		 * @return boolean
		 */
		editControlClick: function(e)
		{
			if (this.loaderXhr)
			{
				return false;
			}

			var $editControl = $(e.target),
				$bookmarksListItem = $editControl.closest('.bookmarksListItem');

			if (this.$editor)
			{
				if (this.$editor.is(':animated'))
				{
					return false;
				}

				this.$editor.xfRemove('xfSlideUp');
			}

			$bookmarksListItem.addClass('AjaxProgress');

			this.loaderXhr = XenForo.ajax(
				$editControl.attr('href'),
				'',
				$.context(this, 'editorLoaded')
			);

			return false;
		},

		/**
		 * Runs when the ajax editor loader returns its data, initializes the new editor
		 *
		 * @param object ajaxData
		 * @param string textStatus
		 */
		editorLoaded: function(ajaxData, textStatus)
		{
			this.loaderXhr = null;

			var $bookmarksListItem = $('#item_' + ajaxData.bookmarkId + '.bookmarksListItem');

			if (XenForo.hasResponseError(ajaxData))
			{
				$bookmarksListItem.removeClass('AjaxProgress');
				return false;
			}

			new XenForo.ExtLoader(ajaxData, $.context(function()
			{
				this.$editor = $(ajaxData.templateHtml)
					.data('bookmarkslistitem', $bookmarksListItem.attr('id'))
					.xfInsert('insertAfter', $bookmarksListItem, 'xfSlideDown', XenForo.speed.fast, function()
					{
						$bookmarksListItem.removeClass('AjaxProgress');
					});
			}, this));
		}
	};
	
	/**
	 * Handler for the inline thread editor on thread lists
	 *
	 * @param jQuery .bookmarksListItemEdit
	 */
	XenForo.BookmarksListItemEditor = function($editor) { this.__construct($editor); };
	XenForo.BookmarksListItemEditor.prototype =
	{
		__construct: function($editor)
		{
			this.$editor = $editor;

			this.$saveButton = $('input:submit', this.$editor).click($.context(this, 'save'));
			$('input:submit').css('cursor', 'pointer');
			
			this.$cancelButton = $('input:reset', this.$editor).click($.context(this, 'cancel'));
			$('input:reset').css('cursor', 'pointer');
		},

		/**
		 * Saves the changes made to the inline editor
		 *
		 * @param event e
		 *
		 * @return boolean
		 */
		save: function(e)
		{
			if (!this.saverXhr)
			{
				var ajaxData = this.$editor.closest('form').serializeArray();

				this.$editor.addClass('InProgress');

				this.saverXhr = XenForo.ajax(
					this.$saveButton.data('submiturl'),
					ajaxData,
					$.context(this, 'saveSuccess')
				);
			}

			return false;
		},

		/**
		 * Cancels an edit, removes the editor
		 *
		 * @param event e
		 *
		 * @return boolean false
		 */
		cancel: function(e)
		{
			this.removeEditor();

			return false;
		},

		/**
		 * Handles the save method's returned ajax data
		 *
		 * @param object ajaxData
		 * @param string textStatus
		 */
		saveSuccess: function(ajaxData, textStatus)
		{
			this.saverXhr = null;
			this.$editor.removeClass('InProgress');

			if (XenForo.hasResponseError(ajaxData))
			{
				return false;
			}

			// update fields
			$('span[name="bookmarkNote' + ajaxData.bookmarkId + '"]').text(ajaxData.note);
			$('span[name="bookmarkNoteContainer' + ajaxData.bookmarkId + '"]').attr('style', ajaxData.note ? 'display:block;' : 'display:none;');
			$('input[name="fliptext'+ ajaxData.bookmarkId +'"]').val(ajaxData.public);
			$('span[name="bookmarkTag' + ajaxData.bookmarkId + '"]').text(ajaxData.tag);
			
			$lineBreak = $('span[name="bookmarkLineBreak' + ajaxData.bookmarkId + '"]');
			if (ajaxData.note)
			{
				if (ajaxData.multiplelines)
				{
					$lineBreak.attr('style', 'display:none;');
				}
				else
				{
					if (ajaxData.content_type == 'profile_post')
					{
						$lineBreak.attr('style', 'display:block;');
						$lineBreak.html('<br />');
					}
					else // post
					{
						$lineBreak.attr('style', 'display:none;');
					}
				}
			}
			else
			{
				if (ajaxData.content_type == 'profile_post')
				{
					$lineBreak.attr('style', 'display:block;');
					
					if (ajaxData.multiplelines)
					{
						$lineBreak.html('<br />');
					}
					else
					{
						$lineBreak.html('<br /><br />');
					}
				}
				else // post
				{
					if (!ajaxData.multiplelines)
					{
						$lineBreak.attr('style', 'display:block;');
						$lineBreak.html('<br />');
					}
					else
					{
						$lineBreak.attr('style', 'display:none;');
					}
				}
			}

			if (!ajaxData.sticky && ajaxData.prev_sticky_state)
			{
				// remove sticky icon
				var $sticky = $('span[name="stickyIcon' + ajaxData.bookmarkId + '"]');
				$sticky.removeClass("stickyIcon");
				$sticky.attr('style', 'display:none;');
				
				// remove sticky container, assign normal container
				var $item = $('li[name="item_' + ajaxData.bookmarkId + '"]');
				$item.addClass("itemContainer").removeClass("itemContainerSticky");
			}
			else if (ajaxData.sticky && !ajaxData.prev_sticky_state)
			{
				// insert sticky icon
				var $sticky = $('span[name="stickyIcon' + ajaxData.bookmarkId + '"]');
				$sticky.addClass("stickyIcon");
				$sticky.attr('style', 'display:block;');
				
				// remove normal container, assign sticky container
				var $item = $('li[name="item_' + ajaxData.bookmarkId + '"]');
				$item.addClass("itemContainerSticky").removeClass("itemContainer");
			}
		
			this.removeEditor();
			
			if (ajaxData.redirect)
			{
				window.location = XenForo.canonicalizeUrl(ajaxData.redirect);
				return false;
			}
		},

		/**
		 * Removes the editor from the DOM
		 */
		removeEditor: function()
		{
			// TODO: why doesn't this use xfRemove() ?
			this.$editor.parent().xfSlideUp(
			{
				duration: XenForo.speed.slow,
				easing: 'easeOutBounce',
				complete: function()
				{
					$(this).remove();
				}
			});

			this.$editor = null;
		}
	};

	// *********************************************************************
	XenForo.register('form.BookmarksList', 'XenForo.BookmarksList');
	XenForo.register('.bookmarksListItemEdit', 'XenForo.BookmarksListItemEditor');
}
(jQuery, this, document);