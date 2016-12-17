/** @param {jQuery} $ jQuery Object */
!function ($, window, document, _undefined) {

    XenForo.KeywordAlert_DuplicateSelfEditor = function ($element) {
        this.__construct($element);
    };

    XenForo.KeywordAlert_DuplicateSelfEditor.prototype = {
        __construct: function ($element) {
            if ($element.find('input[type=text]').length > 0) {
                $element.one('keyup', $.context(this, 'createChoice'));
            } else {
                $element.one('change', $.context(this, 'createChoice'));
            }

            this.$element = $element;

            if (!this.$base) {
                this.$base = $element.clone();
            }
        },

        createChoice: function () {
            var $new = this.$base.clone(),
                nextCounter = this.$element.parent().children().length;

            $new.find('input[name], select[name]').each(function () {
                var $this = $(this);
                $this.attr('name', $this.attr('name').replace(/\[(\d+)\]/, '[' + nextCounter + ']'));
            });

            $new.find('*[id]').each(function () {
                var $this = $(this);
                $this.removeAttr('id');
                XenForo.uniqueId($this);

                if (XenForo.formCtrl) XenForo.formCtrl.clean($this);
            });

            $new.xfInsert('insertAfter', this.$element);

            this.__construct($new);
        }
    };

    // *********************************************************************

    XenForo.KeywordAlert_KeywordList = function ($list) {
        this.__construct($list);
    };

    XenForo.KeywordAlert_KeywordList.prototype = {
        __construct: function ($list) {
            this.$list = $list;

            $('a.EditControl', this.$form).live('click', $.context(this, 'editControlClick'));

            this.$editor = null;
            this.loaderXhr = null;
        },

        editControlClick: function (e) {
            if (this.loaderXhr) {
                return false;
            }

            var $editControl = $(e.target),
                $listItem = $editControl.closest('.KeywordAlert_KeywordListItem');

            if (this.$editor) {
                if (this.$editor.is(':animated')) {
                    return false;
                } else {
                    this.$editor.xfRemove('xfSlideUp');
                }
            }

            $listItem.addClass('AjaxProgress');

            this.loaderXhr = XenForo.ajax(
                $editControl.attr('href'),
                '',
                $.context(this, 'editorLoaded')
            );

            return false;
        },

        editorLoaded: function (ajaxData, textStatus) {
            this.loaderXhr = null;

            var $listItem = $('#keyword-' + ajaxData.keywordId + '.KeywordAlert_KeywordListItem');
            $listItem.removeClass('AjaxProgress');

            if (XenForo.hasResponseError(ajaxData)) {
                return false;
            }

            new XenForo.ExtLoader(ajaxData, $.context(function () {
                this.$editor = $(ajaxData.templateHtml)
                    .data('target', $listItem.attr('id'))
                    .xfInsert('insertAfter', $listItem, 'xfSlideDown', XenForo.speed.fast);
            }, this));
        }
    };

    // *********************************************************************

    XenForo.KeywordAlert_InlineKeywordEditor = function ($editor) {
        this.__construct($editor);
    };

    XenForo.KeywordAlert_InlineKeywordEditor.prototype = {
        __construct: function ($editor) {
            this.$editor = $editor;
            this.$form = $editor;
            this.$cancelButton = $('input:reset', this.$editor).click($.context(this, 'cancel'));
            this.$parentParent = $editor.parent().parent();

            if (this.$form.hasClass('KeywordAlert_InlineKeywordEditorAdding')) {
                this.isAdding = true;
                if (!this.$base) {
                    this.$base = $editor.parent().clone();
                }
            } else {
                this.isAdding = false;
            }

            this.$form.bind({
                'AutoValidationComplete': $.context(this, 'AutoValidationComplete')
            });
        },

        cancel: function (e) {
            this.removeEditor();

            return false;
        },

        AutoValidationComplete: function (e) {
            this.removeEditor();

            var ajaxData = e.ajaxData;

            if (this.isAdding) {
                console.log('isAdding', this.$parentParent);
                $(ajaxData.templateHtml).xfInsert('appendTo', this.$parentParent, 'xfFadeIn', XenForo.speed.normal);

                var $new = this.$base.clone();

                $new.xfInsert('appendTo', this.$parentParent, 'xfFadeIn', XenForo.speed.fast);

                // this.__construct($new.find(''));
            } else {
                console.log('normal');
                var $oldListItem = $('#keyword-' + ajaxData.keywordId);

                $oldListItem.fadeOut(XenForo.speed.normal, function () {
                    $(ajaxData.templateHtml).xfInsert('insertBefore', $oldListItem, 'xfFadeIn', XenForo.speed.normal);

                    $oldListItem.remove();
                });
            }
        },

        removeEditor: function () {
            this.$editor.parent().xfRemove('xfSlideUp', function () {
            }, XenForo.speed.slow, 'easeOutBounce');
            this.$editor = null;
        }
    };

    // *********************************************************************

    XenForo.KeywordAlert_ForumModeSelector = function ($element) {
        var $select = $element;
        if (!$select.is('select')) {
            $select = $element.find('select');
        }

        var $siblings = $element.siblings($element.data('siblings'));

        var selectionChange = function () {
            if ($select.val() == 'all') {
                $siblings.hide();
            } else {
                $siblings.show();
            }
        };

        $select.change(selectionChange);
        selectionChange();
    }

    // *********************************************************************

    XenForo.KeywordAlert_HelpTooltip = function ($element) {
        setTimeout(function () {
            var $next = $element.next(),
                offsetX = 9,
                offsetY = $next.innerHeight() / 2 - 9;

            $element.data('tooltip').getConf().offset = XenForo.switchOffsetRTL([offsetY, offsetX]);
            console.log(offsetX, offsetY);
        }, 500);

        $element.tooltip(XenForo.configureTooltipRtl(
            {
                delay: 0,
                relative: true,
                position: ['center', 'right']
            }));
    };

    // *********************************************************************

    XenForo.register('.KeywordAlert_KeywordEditor', 'XenForo.KeywordAlert_DuplicateSelfEditor');
    XenForo.register('.KeywordAlert_ForumSelector', 'XenForo.KeywordAlert_DuplicateSelfEditor');
    XenForo.register('.KeywordAlert_ExcludedRuleEditor', 'XenForo.KeywordAlert_DuplicateSelfEditor');
    XenForo.register('.KeywordAlert_KeywordList', 'XenForo.KeywordAlert_KeywordList');
    XenForo.register('.KeywordAlert_KeywordListItem.inlineCtrlGroup', 'XenForo.KeywordAlert_InlineKeywordEditor');
    XenForo.register('.KeywordAlert_ForumModeSelector', 'XenForo.KeywordAlert_ForumModeSelector');
    XenForo.register('.KeywordAlert_HelpTooltip', 'XenForo.KeywordAlert_HelpTooltip');

}
(jQuery, this, document);