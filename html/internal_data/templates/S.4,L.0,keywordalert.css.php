<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '/* keyword list */
.KeywordAlert_KeywordList {
}
	.KeywordAlert_KeywordList dt, .KeywordAlert_KeywordList dd, .KeywordAlert_KeywordList .listBlock {
		padding: 5px;
	}
	
	.KeywordAlert_KeywordList .keywordName {
		width: 200px;
	}
	.KeywordAlert_KeywordList .keywordKeywords {
		width: auto;
	}
	.KeywordAlert_KeywordList .keywordForumMode {
		width: 200px;
	}
		.KeywordAlert_KeywordList .keywordForumMode .KeywordAlert_ForumSelector select {
			max-width: 185px;
		}
	.KeywordAlert_KeywordList .keywordExcludedRules {
		width: 200px;
	}

	.KeywordAlert_KeywordList sup {
		vertical-align: super;
	}

.KeywordAlert_KeywordList .keywordName          { *width: 9.97%; }
.KeywordAlert_KeywordList .keywordKeywords      { *width: 49.97%; }
.KeywordAlert_KeywordList .keywordForumMode     { *width: 19.97%; }
.KeywordAlert_KeywordList .keywordExcludedRules { *width: 19.97%; }

/* inline editor */
.KeywordAlert_KeywordListItem.inlineCtrlGroup {
}
	.inlineCtrlGroup .keywordName,
	.inlineCtrlGroup .keywordKeywords,
	.inlineCtrlGroup .keywordForumMode,
	.inlineCtrlGroup .keywordExcludedRules {
		vertical-align: top;
	}


.KeywordAlert_KeywordListItem .formValidationInlineError { z-index: -1; }

/* inlinde editor tooltip */
.KeywordAlert_KeywordListItem .xenTooltip {
	max-width: 200px;
}
.KeywordAlert_KeywordListItem .xenTooltip .arrow {
	border-right: 6px solid ' . XenForo_Template_Helper_Core::styleProperty('tooltipBackground') . ';
	border-top: 6px solid transparent;
	border-left: 1px none black;
	border-bottom: 6px solid transparent;
	left: -6px;
	bottom: auto;
}

@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveWideWidth') . ') {
	
	.KeywordAlert_KeywordList .sectionHeaders {
		display: none;
	}
	
	.KeywordAlert_KeywordListItem {
		border-bottom: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLight') . ';
		display: block;
		margin-bottom: 5px;
	}

	.KeywordAlert_KeywordListItem .listBlock {
		display: block;
		width: auto;
	}
	
}';
