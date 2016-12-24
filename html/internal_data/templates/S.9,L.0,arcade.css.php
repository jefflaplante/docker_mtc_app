<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '/* *** XF ARCADE *** */
/** column style and width **/

.gameList .sectionHeaders,
.gameListItem {
	display: table;
	table-layout: fixed;
	width: 100%;
	word-wrap: normal;
}

	.gameList .sectionHeaders dt,
	.gameList .sectionHeaders dd,
	.gameListItem .listBlock {
		display: table-cell;
		vertical-align: middle;
	}

		.gameList .image {
			width: 48px;
		}
		
		.gameList .theTitle {
			width: auto;
		}
		
		.gameList .champion {
			width: 200px;
			text-align: center;
		}
			.champion .avatarContainer {
				float: left;
				margin-left: 5px;
				margin-top: 5px;
			}
			.champion .infoContainer {
			}
		
		.gameList .personalBest {
			width: 149px;
                        text-align: center;
		}


/* column headers */

.gameList .sectionHeaders {	
	font-size: 11px;
	color: ' . XenForo_Template_Helper_Core::styleProperty('secondaryDarker') . ';
	background: ' . XenForo_Template_Helper_Core::styleProperty('secondaryLighter') . ' url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/gradients/category-23px-light.png\') repeat-x top;
	padding: 5px 10px;
	margin: 1px auto 0;
	/*border-top: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('secondaryLighter') . ';*/
	border-bottom: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('secondaryLight') . ';
	
	padding: 0;
}
	
	.gameList .sectionHeaders span {
		display: block;
		padding: 5px;
	}
		
/** IE <8 **/
.gameList .sectionHeaders,
.gameListItem                { *display: block; _vertical-align: bottom; }
.gameList .sectionHeaders dt,
.gameList .sectionHeaders dd,
.gameListItem .listBlock     { *display: block; *float: left; }
.gameListItem .listBlock     { _height: 52px; *min-height: 52px; } /* todo: should be calculation */
.gameList .image             { *width: 5.98%; }
.gameListItem .image         { *font-size: 0; }	
.gameList .theTitle          { *width: 59.98%; }
.gameList .champion          { *width: 14.97%; }	
.gameList .personalBest      { *width: 14.97%; }
.gameList .sectionHeaders dt,
.gameList .sectionHeaders dd { *padding: 5px 0; }
.gameList .sectionHeaders a,
.gameList .sectionHeaders a span { *display: inline !important; *float: none !important; }

/** main **/

.gameListItem {
	background-color: ' . XenForo_Template_Helper_Core::styleProperty('contentBackground') . ';
	border-bottom: 1px solid ' . XenForo_Template_Helper_Core::styleProperty('primaryLighterStill') . ';
}

	/* sections, section widths */
	
	.gameListItem .image,		
	.gameListItem .champion {
		background: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightest') . ' url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/gradients/category-23px-light.png\') repeat-x top;
	}
	
	.gameListItem .title,
	.gameListItem .personalBest	{
	}
		
	/* title, poster section */
	
	.gameListItem .titleText {
		padding: 5px;
		overflow: hidden; zoom: 1;
	}
	
		/* first row */
		
		/* second row */
		.gameListItem .secondRow {
			font-size: 11px;
			/*clear: both;*/
			margin-top: 5px;
		}
			
			.gameListItem .secondRow .controls {
				float: right;
				padding-left: 20px;
			}
				
				.gameListItem.AjaxProgress .controls {
					background: transparent url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif\') no-repeat left center;
				}

/** bottom summary **/


.gameList .sectionFooter {
	overflow: hidden; zoom: 1;
}

	.gameList .sectionFooter .contentSummary {
		float: left;
		display: block;
	}
	
/* home */

	
/* GameVote */
a.GameVoteLink.GameVoted {
	font-weight: bold;
}

/* dark mods */

.gameListItem .image { line-height: 0; }
.gameListItem .image, .gameListItem .champion { padding: 5px 0; }
.gameListItem .title { font-size: 20px; }
.scores { padding: 5px 0; text-align: center; }
.gameStats { padding: 5px 0; text-align: center; }
.gameListItem .personalBest { background: ' . XenForo_Template_Helper_Core::styleProperty('primaryLightest') . ' url(\'' . XenForo_Template_Helper_Core::styleProperty('imagePath') . '/xenforo/gradients/category-23px-light.png\') repeat-x center top; }

.highscores { list-style: decimal; font-size: 11px; margin: 5px auto; padding: 5px 0; }
.highscores td:first-child { color: #aaa; }
.highscores .name { width: 100px; text-align: right; padding-right: 7px; overflow: hidden; }
.highscores .datscore { text-align: left; }
.gameListItem .secondRow { color: #999; }

.gameList .theTitle { padding-left: 5px; }

.gamePlayer
{
	text-align: center;
}

.championGameList
{
	font-size: 0.9em;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}';
