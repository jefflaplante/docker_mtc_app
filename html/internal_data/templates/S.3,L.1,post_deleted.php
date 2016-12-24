<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__compilerVar1 = '';
$__compilerVar2 = '';
$__compilerVar2 .= 'post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8');
$__compilerVar3 = '';
$__compilerVar3 .= XenForo_Template_Helper_Core::link('posts/likes', $post, array());
$__compilerVar4 = '';
if ($post['attachments'])
{
$__compilerVar5 = '';
$this->addRequiredExternal('css', 'attached_files');
$__compilerVar5 .= '

<div class="attachedFiles">
	<h4 class="attachedFilesHeader">' . 'Attached Files' . ':</h4>
	<ul class="attachmentList SquareThumbs"
		data-thumb-height="' . (min(100, $xenOptions['attachmentThumbnailDimensions'] / 2)) . '"
		data-thumb-selector="div.thumbnail > a">
		';
foreach ($post['attachments'] AS $attachment)
{
$__compilerVar5 .= '
			<li class="attachment' . (($attachment['thumbnailUrl']) ? (' image') : ('')) . '" title="' . htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8') . '">
				<div class="boxModelFixer primaryContent">
					
					<div class="thumbnail">
						';
if ($attachment['thumbnailUrl'] AND $canViewAttachments)
{
$__compilerVar5 .= '
							<a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank" class="LbTrigger"
								data-href="' . XenForo_Template_Helper_Core::link('misc/lightbox', false, array()) . '"><img 
								src="' . htmlspecialchars($attachment['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . (($xenOptions['BRME_defaultPostImageAltTag']) ? (htmlspecialchars($xenOptions['BRME_defaultPostImageAltTag'], ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8'))) . '" class="LbImage" /></a>
						';
}
else if ($attachment['thumbnailUrl'])
{
$__compilerVar5 .= '
							<a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank"><img
								src="' . htmlspecialchars($attachment['thumbnailUrl'], ENT_QUOTES, 'UTF-8') . '" alt="' . (($xenOptions['BRME_defaultPostImageAltTag']) ? (htmlspecialchars($xenOptions['BRME_defaultPostImageAltTag'], ENT_QUOTES, 'UTF-8')) : (htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8'))) . '" /></a>
						';
}
else
{
$__compilerVar5 .= '
							<a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank" class="genericAttachment"></a>
						';
}
$__compilerVar5 .= '
					</div>
					
					<div class="attachmentInfo pairsJustified">
						<h6 class="filename"><a href="' . XenForo_Template_Helper_Core::link('attachments', $attachment, array()) . '" target="_blank">' . htmlspecialchars($attachment['filename'], ENT_QUOTES, 'UTF-8') . '</a></h6>
						<dl><dt>' . 'File size' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($attachment['file_size'], 'size') . '</dd></dl>
						<dl><dt>' . 'Views' . ':</dt> <dd>' . XenForo_Template_Helper_Core::numberFormat($attachment['view_count'], '0') . '</dd></dl>
					</div>
				</div>
			</li>
		';
}
$__compilerVar5 .= '
	</ul>
</div>

';
$__compilerVar4 .= $__compilerVar5;
unset($__compilerVar5);
}
$__compilerVar6 = '';
$__compilerVar6 .= '
				
		<div class="messageMeta ToggleTriggerAnchor">
			
			<div class="privateControls">
				';
if ($post['canInlineMod'])
{
$__compilerVar6 .= '<input type="checkbox" name="posts[]" value="' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck item" data-target="#post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select this post by ' . htmlspecialchars($post['username'], ENT_QUOTES, 'UTF-8') . '' . '" />';
}
$__compilerVar6 .= '
				<span class="item muted">
					<span class="authorEnd">' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($post,'',false,array(
'class' => 'author'
))) . ',</span>
					<a href="' . XenForo_Template_Helper_Core::link('posts', $post, array()) . '" title="' . 'Permalink' . '" class="datePermalink">' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($post['post_date'],array(
'time' => '$post.post_date'
))) . '</a>
				</span>
				';
$__compilerVar7 = '';
$__compilerVar7 .= '
				';
if ($post['canEdit'])
{
$__compilerVar7 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts/edit', $post, array()) . '" class="item control edit ' . (($xenOptions['messageInlineEdit']) ? ('OverlayTrigger') : ('')) . '"
						data-href="' . XenForo_Template_Helper_Core::link('posts/edit-inline', $post, array()) . '" data-overlayOptions="{&quot;fixed&quot;:false}"
						data-messageSelector="#post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span>' . 'Edit' . '</a>
					';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar7 .= '
				';
}
$__compilerVar7 .= '
				';
if ($post['edit_count'] && $post['canViewHistory'])
{
$__compilerVar7 .= '<a href="' . XenForo_Template_Helper_Core::link('posts/history', $post, array()) . '" class="item control history ToggleTrigger"><span></span>' . 'History' . '</a>';
}
$__compilerVar7 .= '
				';
if ($post['canDelete'])
{
$__compilerVar7 .= '<a href="' . XenForo_Template_Helper_Core::link('posts/delete', $post, array()) . '" class="item control delete OverlayTrigger"><span></span>' . 'Delete' . '</a>';
}
$__compilerVar7 .= '
				';
if ($post['canCleanSpam'])
{
$__compilerVar7 .= '<a href="' . XenForo_Template_Helper_Core::link('spam-cleaner', $post, array()) . '" class="item control deleteSpam OverlayTrigger"><span></span>' . 'Spam' . '</a>';
}
$__compilerVar7 .= '
				';
if ($canViewIps AND $post['ip_id'])
{
$__compilerVar7 .= '<a href="' . XenForo_Template_Helper_Core::link('posts/ip', $post, array()) . '" class="item control ip OverlayTrigger"><span></span>' . 'IP' . '</a>';
}
$__compilerVar7 .= '
				
				';
if ($post['canWarn'])
{
$__compilerVar7 .= '
					<a href="' . XenForo_Template_Helper_Core::link('members/warn', $post, array(
'content_type' => 'post',
'content_id' => $post['post_id']
)) . '" class="item control warn"><span></span>' . 'Warn' . '</a>
				';
}
else if ($post['warning_id'] && $canViewWarnings)
{
$__compilerVar7 .= '
					<a href="' . XenForo_Template_Helper_Core::link('warnings', $post, array()) . '" class="OverlayTrigger item control viewWarning"><span></span>' . 'View Warning' . '</a>
				';
}
$__compilerVar7 .= '
				';
if ($post['canReport'])
{
$__compilerVar7 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts/report', $post, array()) . '" class="OverlayTrigger item control report" data-cacheOverlay="false"><span></span>' . 'Report' . '</a>
				';
}
$__compilerVar7 .= '
				
				';
$__compilerVar6 .= $this->callTemplateHook('post_private_controls', $__compilerVar7, array(
'post' => $post
));
unset($__compilerVar7);
$__compilerVar6 .= '
			</div>
			
			<div class="publicControls">
				<a href="' . XenForo_Template_Helper_Core::link('posts', $post, array()) . '" title="' . 'Permalink' . '" class="item muted postNumber hashPermalink OverlayTrigger" data-href="' . XenForo_Template_Helper_Core::link('posts/permalink', $post, array()) . '">#' . ($post['position'] + 1) . '</a>
				';
$__compilerVar8 = '';
$__compilerVar8 .= '
				';
if ($post['canLike'])
{
$__compilerVar8 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts/like', $post, array()) . '" class="LikeLink item control ' . (($post['like_date']) ? ('unlike') : ('like')) . '" data-container="#likes-post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span><span class="LikeLabel">' . (($post['like_date']) ? ('Unlike') : ('Like')) . '</span></a>
				';
}
$__compilerVar8 .= '
				';
if ($canReply)
{
$__compilerVar8 .= '
					';
if ($xenOptions['multiQuote'])
{
$__compilerVar8 .= '<a href="' . XenForo_Template_Helper_Core::link('threads/reply', $thread, array(
'quote' => $post['post_id']
)) . '"
						data-messageid="' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"
						class="MultiQuoteControl JsOnly item control"
						title="' . 'Toggle Multi-Quote' . '"><span></span><span class="symbol">' . '+ Quote' . '</span></a>';
}
$__compilerVar8 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/reply', $thread, array(
'quote' => $post['post_id']
)) . '"
						data-postUrl="' . XenForo_Template_Helper_Core::link('posts/quote', $post, array()) . '"
						data-tip="#MQ-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"
						class="ReplyQuote item control reply"
						title="' . 'Reply, quoting this message' . '"><span></span>' . 'Reply' . '</a>
				';
}
$__compilerVar8 .= '
				';
$__compilerVar6 .= $this->callTemplateHook('post_public_controls', $__compilerVar8, array(
'post' => $post
));
unset($__compilerVar8);
$__compilerVar6 .= '
			</div>
		</div>
	';
$__compilerVar9 = '';
$this->addRequiredExternal('css', 'message');
$__compilerVar9 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar9 .= '

<li id="' . htmlspecialchars($__compilerVar2, ENT_QUOTES, 'UTF-8') . '" class="message ' . (($post['isDeleted']) ? ('deleted') : ('')) . ' ' . (($post['is_staff']) ? ('staff') : ('')) . ' ' . (($post['isIgnored']) ? ('ignored') : ('')) . '" data-author="' . htmlspecialchars($post['username'], ENT_QUOTES, 'UTF-8') . '">

	';
$__compilerVar10 = '';
$this->addRequiredExternal('css', 'message_user_info');
$__compilerVar10 .= '

<div class="messageUserInfo" itemscope="itemscope" itemtype="http://data-vocabulary.org/Person">	
<div class="messageUserBlock ' . (($post['isOnline']) ? ('online') : ('')) . '">
	';
$__compilerVar11 = '';
$__compilerVar11 .= '
		<div class="avatarHolder">
			<span class="helper"></span>
			' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($post,(true),array(
'user' => '$user',
'size' => 'm',
'img' => 'true'
),'')) . '
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar11 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_avatar');
$__compilerVar11 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuainfoa'))
{
$__compilerVar11 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $post['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar11 .= '
    <dl class="convButtonInfoA convButtonInfoAM"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $post['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar11 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar11 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar11 .= ' >' . 'Contact' . '</a></dl>
';
}
$__compilerVar11 .= '
';
}
$__compilerVar11 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaAvatarInfoM'))
{
$__compilerVar11 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar11 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonInfoAM {
        display: none;
    }
}
';
}
$__compilerVar11 .= '
</style>
';
}
$__compilerVar11 .= '
';
}
else
{
$__compilerVar11 .= '

';
}
$__compilerVar11 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar11 .= '
<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
\'height=\'+h+\',width=\'+w+\',top=\'+TopPosition+\',left=\'+LeftPosition+\',scrollbars=\'+scroll+\',resizable\'
popupWindow = window.open(url,winName,settings)
}
</script>
';
}
$__compilerVar11 .= '
			';
if ($post['isOnline'])
{
$__compilerVar11 .= '<span class="Tooltip onlineMarker" title="' . 'Online Now' . '" data-offsetX="-22" data-offsetY="-8"></span>';
}
$__compilerVar11 .= '
			<!-- slot: message_user_info_avatar -->
		</div>
	';
$__compilerVar10 .= $this->callTemplateHook('message_user_info_avatar', $__compilerVar11, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar11);
$__compilerVar10 .= '

';
if (!$isQuickReply)
{
$__compilerVar10 .= '
	';
$__compilerVar12 = '';
$__compilerVar12 .= '
		<h3 class="userText">
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar12 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_username_icon');
$__compilerVar12 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaUserIcon') AND $xenOptions['cxf_fas'])
{
$__compilerVar12 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $post['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar12 .= '
    <dl class="convButtonUI"><span class="Tooltip" title="' . 'Start a Conversation' . '"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $post['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar12 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar12 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar12 .= ' title="' . 'Start a Conversation' . '" ><i class="fa fa-envelope Tooltip"></i></a></span></dl>
';
}
$__compilerVar12 .= '
';
}
$__compilerVar12 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaUserIconM'))
{
$__compilerVar12 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar12 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonUI {
        display: none;
    }
}
';
}
$__compilerVar12 .= '
</style>
';
}
$__compilerVar12 .= '
';
}
$__compilerVar12 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar12 .= '
<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
\'height=\'+h+\',width=\'+w+\',top=\'+TopPosition+\',left=\'+LeftPosition+\',scrollbars=\'+scroll+\',resizable\'
popupWindow = window.open(url,winName,settings)
}
</script>
';
}
$__compilerVar12 .= '
			' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($post,'',(true),array(
'itemprop' => 'name'
))) . '
			';
$__compilerVar13 = '';
$__compilerVar13 .= XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $post,
'1' => '1',
'2' => '1'
));
if (trim($__compilerVar13) !== '')
{
$__compilerVar12 .= '<em class="userTitle" itemprop="title">' . $__compilerVar13 . '</em>';
}
unset($__compilerVar13);
$__compilerVar12 .= '
			' . XenForo_Template_Helper_Core::callHelper('userBanner', array(
'0' => $post,
'1' => 'wrapped'
)) . '
			<!-- slot: message_user_info_text -->
		</h3>
	';
$__compilerVar10 .= $this->callTemplateHook('message_user_info_text', $__compilerVar12, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar12);
$__compilerVar10 .= '
';
if ($post['trophyCache'])
{
$__compilerVar10 .= '
<p class="trophies" id="trophyIcons">
	';
foreach ($post['trophyCache'] AS $trophy)
{
$__compilerVar10 .= '
		';
$__compilerVar14 = '';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__compilerVar14 .= '
<a href="' . XenForo_Template_Helper_Core::link('members/trophies', $post, array()) . '" class="OverlayTrigger">		
<img src="' . htmlspecialchars($trophy['iconUrl'], ENT_QUOTES, 'UTF-8') . '" title="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" class="trophyIconMini" />
</a>';
$__compilerVar10 .= $__compilerVar14;
unset($__compilerVar14);
$__compilerVar10 .= '
	';
}
$__compilerVar10 .= '
</p>
';
}
$__compilerVar10 .= '
		
	';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsActive'))
{
$__compilerVar15 = '';
$__compilerVar15 .= '
';
if (!XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsBadgeCSS'))
{
$__compilerVar15 .= '
    ';
$this->addRequiredExternal('css', 'userrankribbons');
$__compilerVar15 .= '
';
}
$__compilerVar15 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsBadgeCSS'))
{
$__compilerVar15 .= '
    ';
$this->addRequiredExternal('css', 'userrankribbonsbadge');
$__compilerVar15 .= '
';
}
$__compilerVar15 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsSoftResponsiveFix'))
{
$__compilerVar15 .= '
    ';
$this->addRequiredExternal('css', 'UserRankRibbonsSoftResponsiveFix');
$__compilerVar15 .= '
';
}
$__compilerVar15 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsXenMoodsFix'))
{
$__compilerVar15 .= '
    ';
$this->addRequiredExternal('css', 'UserRankRibbonsXenMoodsFix');
$__compilerVar15 .= '
';
}
$__compilerVar15 .= '
    
';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsActive'))
{
$__compilerVar15 .= '

	<ul class="ribbon">
    
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1'))
{
$__compilerVar15 .= '
			<li class="ribbon1">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2'))
{
$__compilerVar15 .= '
			<li class="ribbon2">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3'))
{
$__compilerVar15 .= '
			<li class="ribbon3">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4'))
{
$__compilerVar15 .= '
			<li class="ribbon4">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5'))
{
$__compilerVar15 .= '
			<li class="ribbon5">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6'))
{
$__compilerVar15 .= '
			<li class="ribbon6">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7'))
{
$__compilerVar15 .= '
			<li class="ribbon7">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8'))
{
$__compilerVar15 .= '
			<li class="ribbon8">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9'))
{
$__compilerVar15 .= '
			<li class="ribbon9">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10'))
{
$__compilerVar15 .= '
			<li class="ribbon10">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11'))
{
$__compilerVar15 .= '
			<li class="ribbon11">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12'))
{
$__compilerVar15 .= '
			<li class="ribbon12">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13'))
{
$__compilerVar15 .= '
			<li class="ribbon13">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14'))
{
$__compilerVar15 .= '
			<li class="ribbon14">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15'))
{
$__compilerVar15 .= '
			<li class="ribbon15">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16'))
{
$__compilerVar15 .= '
			<li class="ribbon16">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17'))
{
$__compilerVar15 .= '
			<li class="ribbon17">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18'))
{
$__compilerVar15 .= '
			<li class="ribbon18">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19'))
{
$__compilerVar15 .= '
			<li class="ribbon19">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20'))
{
$__compilerVar15 .= '
			<li class="ribbon20">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21'))
{
$__compilerVar15 .= '
			<li class="ribbon21">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22'))
{
$__compilerVar15 .= '
			<li class="ribbon22">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23'))
{
$__compilerVar15 .= '
			<li class="ribbon23">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24'))
{
$__compilerVar15 .= '
			<li class="ribbon24">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25'))
{
$__compilerVar15 .= '
			<li class="ribbon25">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26'))
{
$__compilerVar15 .= '
			<li class="ribbon26">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27'))
{
$__compilerVar15 .= '
			<li class="ribbon27">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28'))
{
$__compilerVar15 .= '
			<li class="ribbon28">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29'))
{
$__compilerVar15 .= '
			<li class="ribbon29">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30'))
{
$__compilerVar15 .= '
			<li class="ribbon30">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31'))
{
$__compilerVar15 .= '
			<li class="ribbon31">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32'))
{
$__compilerVar15 .= '
			<li class="ribbon32">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33'))
{
$__compilerVar15 .= '
			<li class="ribbon33">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34'))
{
$__compilerVar15 .= '
			<li class="ribbon34">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35'))
{
$__compilerVar15 .= '
			<li class="ribbon35">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35Title') . '
			</li>
		';
}
$__compilerVar15 .= '
		
	</ul>
';
}
$__compilerVar10 .= $__compilerVar15;
unset($__compilerVar15);
}
$__compilerVar10 .= '
    ';
$__compilerVar16 = '';
$__compilerVar16 .= '
			
			';
if (XenForo_Template_Helper_Core::styleProperty('xc_info_extra_fa'))
{
$__compilerVar16 .= '
';
$__compilerVar17 = '';
$__compilerVar17 .= '

<dl class="pairsJustified">
<dt><i class="fa fa-comments Tooltip info_extra_fa" title="' . 'Messages' . '"></i></dt>
<dd><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $post['user_id']
)) . '" class="concealed" rel="nofollow">' . XenForo_Template_Helper_Core::numberFormat($post['message_count'], '0') . '</a></dd>
</dl>

<dl class="pairsJustified">
<dt><i class="fa fa-thumbs-up Tooltip info_extra_fa" title="' . 'Likes Received' . '"></i></dt>
<dd>' . XenForo_Template_Helper_Core::numberFormat($post['like_count'], '0') . '</dd>
</dl>

<dl class="pairsJustified">
<dt><i class="fa fa-trophy Tooltip info_extra_fa" title="' . 'Trophy Points' . '"></i></dt>
<dd><a href="' . XenForo_Template_Helper_Core::link('members/trophies', $post, array()) . '" class="OverlayTrigger concealed">' . XenForo_Template_Helper_Core::numberFormat($post['trophy_points'], '0') . '</a></dd>
</dl>

';
$__compilerVar16 .= $this->callTemplateHook('message_user_info_extra', $__compilerVar17, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar17);
$__compilerVar16 .= '
';
}
else
{
$__compilerVar16 .= '
			
			';
$__compilerVar18 = '';
$__compilerVar18 .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowRegisterDate') AND $post['user_id'])
{
$__compilerVar18 .= '
					<dl class="pairsJustified">
						<dt>' . 'Joined' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::date($post['register_date'], '') . '</dd>
					</dl>
				';
}
$__compilerVar18 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowMessageCount') AND $post['user_id'])
{
$__compilerVar18 .= '
					<dl class="pairsJustified">
						<dt>' . 'Messages' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $post['user_id']
)) . '" class="concealed" rel="nofollow">' . XenForo_Template_Helper_Core::numberFormat($post['message_count'], '0') . '</a></dd>
					</dl>
				';
}
$__compilerVar18 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowTotalLikes') AND $post['user_id'])
{
$__compilerVar18 .= '
					<dl class="pairsJustified">
						<dt>' . 'Likes Received' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($post['like_count'], '0') . '</dd>
					</dl>
				';
}
$__compilerVar18 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowTrophyPoints') AND $post['user_id'] AND $xenOptions['enableTrophies'])
{
$__compilerVar18 .= '
					<dl class="pairsJustified">
						<dt>' . 'Trophy Points' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('members/trophies', $post, array()) . '" class="OverlayTrigger concealed">' . XenForo_Template_Helper_Core::numberFormat($post['trophy_points'], '0') . '</a></dd>
					</dl>
				';
}
$__compilerVar18 .= '
			
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowGender') AND $post['gender'])
{
$__compilerVar18 .= '
					<dl class="pairsJustified">
						<dt>' . 'Gender' . ':</dt>
						<dd itemprop="gender">';
if ($post['gender'] == ('male'))
{
$__compilerVar18 .= 'Male';
}
else
{
$__compilerVar18 .= 'Female';
}
$__compilerVar18 .= '</dd>
					</dl>
				';
}
$__compilerVar18 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowOccupation') AND $post['occupation'])
{
$__compilerVar18 .= '
					<dl class="pairsJustified">
						<dt>' . 'Occupation' . ':</dt>
						<dd itemprop="role">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($post['occupation'], ENT_QUOTES, 'UTF-8')
)) . '</dd>
					</dl>
				';
}
$__compilerVar18 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowLocation') AND $post['location'])
{
$__compilerVar18 .= '
					<dl class="pairsJustified">
						<dt>' . 'Location' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('misc/location-info', '', array(
'location' => XenForo_Template_Helper_Core::string('censor', array(
'0' => $post['location'],
'1' => '-'
))
)) . '" target="_blank" rel="nofollow" itemprop="address" class="concealed">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($post['location'], ENT_QUOTES, 'UTF-8')
)) . '</a></dd>
					</dl>
				';
}
$__compilerVar18 .= '
			
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowHomepage') AND $post['homepage'])
{
$__compilerVar18 .= '
					<dl class="pairsJustified">
						<dt>' . 'Home Page' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($post['homepage'], ENT_QUOTES, 'UTF-8'),
'1' => '-'
)) . '" rel="nofollow" target="_blank" itemprop="url">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($post['homepage'], ENT_QUOTES, 'UTF-8')
)) . '</a></dd>
					</dl>
				';
}
$__compilerVar18 .= '
							
			';
$__compilerVar16 .= $this->callTemplateHook('message_user_info_extra', $__compilerVar18, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar18);
$__compilerVar16 .= '
			';
}
$__compilerVar16 .= '			
			';
if (XenForo_Template_Helper_Core::styleProperty('messageShowCustomFields') AND $post['customFields'])
{
$__compilerVar16 .= '
			';
$__compilerVar19 = '';
$__compilerVar19 .= '
			
				';
foreach ($userFieldsInfo AS $fieldId => $fieldInfo)
{
$__compilerVar19 .= '
					';
if ($fieldInfo['viewable_message'] AND ($fieldInfo['display_group'] != ('contact') OR $post['allow_view_identities'] == ('everyone') OR ($post['allow_view_identities'] == ('members') AND $visitor['user_id'])))
{
$__compilerVar19 .= '
						';
$__compilerVar20 = '';
$__compilerVar20 .= XenForo_Template_Helper_Core::callHelper('userFieldValue', array(
'0' => $fieldInfo,
'1' => $post,
'2' => $post['customFields'][$fieldId]
));
if (trim($__compilerVar20) !== '')
{
$__compilerVar19 .= '
							<dl class="pairsJustified userField_' . htmlspecialchars($fieldId, ENT_QUOTES, 'UTF-8') . '">
								<dt>' . XenForo_Template_Helper_Core::callHelper('userFieldTitle', array(
'0' => $fieldId
)) . ':</dt>
								<dd>' . $__compilerVar20 . '</dd>
							</dl>
						';
}
unset($__compilerVar20);
$__compilerVar19 .= '
					';
}
$__compilerVar19 .= '
				';
}
$__compilerVar19 .= '
				
			';
$__compilerVar16 .= $this->callTemplateHook('message_user_info_custom_fields', $__compilerVar19, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar19);
$__compilerVar16 .= '
			';
}
$__compilerVar16 .= '
			';
if (trim($__compilerVar16) !== '')
{
$__compilerVar10 .= '
		<div class="extraUserInfo">
			' . $__compilerVar16 . '
		</div>
	';
}
unset($__compilerVar16);
$__compilerVar10 .= '
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar10 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_user_info');
$__compilerVar10 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowInfo'))
{
$__compilerVar10 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $post['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar10 .= '
    <dl class="conversationButtonInfo convButtonMobileInfo"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $post['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar10 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar10 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar10 .= ' >' . 'Start a Conversation' . '</a></dl>
';
}
$__compilerVar10 .= '
';
}
$__compilerVar10 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaMobileInfo'))
{
$__compilerVar10 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar10 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonMobileInfo {
        display: none;
    }
}
';
}
$__compilerVar10 .= '
</style>
';
}
$__compilerVar10 .= '
';
}
$__compilerVar10 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar10 .= '
<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
\'height=\'+h+\',width=\'+w+\',top=\'+TopPosition+\',left=\'+LeftPosition+\',scrollbars=\'+scroll+\',resizable\'
popupWindow = window.open(url,winName,settings)
}
</script>
';
}
$__compilerVar10 .= '
		
';
}
$__compilerVar10 .= '

	<span class="arrow"><span></span></span>
</div>
</div>';
$__compilerVar9 .= $__compilerVar10;
unset($__compilerVar10);
$__compilerVar9 .= '

	<div class="messageInfo primaryContent">
		';
if ($post['isNew'])
{
$__compilerVar9 .= '<strong class="newIndicator"><span></span>' . 'New' . '</strong>';
}
$__compilerVar9 .= '
		
		';
$__compilerVar21 = '';
$__compilerVar21 .= '
					';
$__compilerVar22 = '';
$__compilerVar22 .= '
						';
if ($post['warning_message'])
{
$__compilerVar22 .= '
							<li class="warningNotice"><span class="icon Tooltip" title="' . 'Warning' . '" data-tipclass="iconTip flipped"></span>' . htmlspecialchars($post['warning_message'], ENT_QUOTES, 'UTF-8') . '</li>
						';
}
$__compilerVar22 .= '
						';
if ($post['isDeleted'])
{
$__compilerVar22 .= '
							<li class="deletedNotice"><span class="icon Tooltip" title="' . 'Deleted' . '" data-tipclass="iconTip flipped"></span>' . 'This message has been removed from public view.' . '</li>
						';
}
else if ($post['isModerated'])
{
$__compilerVar22 .= '
							<li class="moderatedNotice"><span class="icon Tooltip" title="' . 'Awaiting moderation' . '" data-tipclass="iconTip flipped"></span>' . 'This message is awaiting moderator approval, and is invisible to normal visitors.' . '</li>
						';
}
$__compilerVar22 .= '
						';
if ($post['isIgnored'])
{
$__compilerVar22 .= '
							<li>' . 'You are ignoring content by this member.' . ' <a href="javascript:" class="JsOnly DisplayIgnoredContent">' . 'Show Ignored Content' . '</a></li>
						';
}
$__compilerVar22 .= '
					';
$__compilerVar21 .= $this->callTemplateHook('message_notices', $__compilerVar22, array(
'message' => $post
));
unset($__compilerVar22);
$__compilerVar21 .= '
				';
if (trim($__compilerVar21) !== '')
{
$__compilerVar9 .= '
			<ul class="messageNotices">
				' . $__compilerVar21 . '
			</ul>
		';
}
unset($__compilerVar21);
$__compilerVar9 .= '
		
		';
$__compilerVar23 = '';
$__compilerVar23 .= '
		<div class="messageContent">		
			<article>
				<blockquote class="messageText SelectQuoteContainer ugc baseHtml' . (($post['isIgnored']) ? (' ignored') : ('')) . '">
					';
$__compilerVar24 = '';
$__compilerVar25 = '';
$__compilerVar24 .= $this->callTemplateHook('ad_message_body', $__compilerVar25, array());
unset($__compilerVar25);
$__compilerVar23 .= $__compilerVar24;
unset($__compilerVar24);
$__compilerVar23 .= '
					' . $post['messageHtml'] . '
					<div class="messageTextEndMarker">&nbsp;</div>
				</blockquote>
			</article>
			
			' . $__compilerVar4 . '
		</div>
		';
$__compilerVar9 .= $this->callTemplateHook('message_content', $__compilerVar23, array(
'message' => $post
));
unset($__compilerVar23);
$__compilerVar9 .= '
		
		';
if ($post['last_edit_date'])
{
$__compilerVar9 .= '
			<div class="editDate">
			';
if ($post['user_id'] == $post['last_edit_user_id'])
{
$__compilerVar9 .= '
				' . 'Last edited' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($post['last_edit_date'],array(
'time' => htmlspecialchars($post['last_edit_date'], ENT_QUOTES, 'UTF-8')
))) . '
			';
}
else
{
$__compilerVar9 .= '
				' . 'Last edited by a moderator' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($post['last_edit_date'],array(
'time' => htmlspecialchars($post['last_edit_date'], ENT_QUOTES, 'UTF-8')
))) . '
			';
}
$__compilerVar9 .= '
			</div>
		';
}
$__compilerVar9 .= '
		
		';
if ($visitor['content_show_signature'] && $post['signature'])
{
$__compilerVar9 .= '
			<div class="baseHtml signature messageText ugc' . (($post['isIgnored']) ? (' ignored') : ('')) . '"><aside>' . $post['signatureHtml'] . '</aside></div>
		';
}
$__compilerVar9 .= '
		
		' . $__compilerVar6 . '
		
		<div id="likes-' . htmlspecialchars($__compilerVar2, ENT_QUOTES, 'UTF-8') . '">';
if ($post['likes'])
{
$__compilerVar26 = '';
if ($post['likes'])
{
$__compilerVar26 .= '
	';
$this->addRequiredExternal('css', 'likes_summary');
$__compilerVar26 .= '
	<div class="likesSummary secondaryContent">
		<span class="LikeText">
			' . XenForo_Template_Helper_Core::callHelper('likeshtml', array($post['likes'],$__compilerVar3,$post['like_date'],$post['likeUsers'])) . '
		</span>
	</div>
';
}
$__compilerVar9 .= $__compilerVar26;
unset($__compilerVar26);
}
$__compilerVar9 .= '</div>
	</div>

	';
$__compilerVar27 = '';
$__compilerVar9 .= $this->callTemplateHook('message_below', $__compilerVar27, array(
'post' => $post,
'message_id' => $__compilerVar2
));
unset($__compilerVar27);
$__compilerVar9 .= '
	
	';
$__compilerVar28 = '';
$__compilerVar29 = '';
$__compilerVar28 .= $this->callTemplateHook('ad_message_below', $__compilerVar29, array());
unset($__compilerVar29);
$__compilerVar9 .= $__compilerVar28;
unset($__compilerVar28);
$__compilerVar9 .= '
	
</li>';
$__compilerVar1 .= $__compilerVar9;
unset($__compilerVar2, $__compilerVar3, $__compilerVar4, $__compilerVar6, $__compilerVar9);
$__output .= $__compilerVar1;
unset($__compilerVar1);
