<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($firstUnshownPost)
{
$__output .= '
	<li class="newMessagesNotice">' . 'There are more posts to display.' . ' <a href="' . XenForo_Template_Helper_Core::link('posts', $firstUnshownPost, array()) . '#post-' . htmlspecialchars($firstUnshownPost['post_id'], ENT_QUOTES, 'UTF-8') . '">' . 'View them?' . '</a></li>
';
}
$__output .= '

';
foreach ($posts AS $post)
{
$__output .= '
	';
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
		
		';
if ($post['canInlineMod'])
{
$__compilerVar6 .= '<input type="checkbox" name="posts[]" value="' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '" class="InlineModCheck item" data-target="#post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '" title="' . 'Select this post by ' . htmlspecialchars($post['username'], ENT_QUOTES, 'UTF-8') . '' . '" />';
}
$__compilerVar6 .= '
		
		<a href="' . XenForo_Template_Helper_Core::link('posts', $post, array()) . '" title="' . 'Permalink' . '" class="item muted postNumber hashPermalink OverlayTrigger" data-href="' . XenForo_Template_Helper_Core::link('posts/permalink', $post, array()) . '">#' . ($post['position'] + 1) . '</a>
		
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
$__compilerVar8 = '';
$__compilerVar8 .= '
		
			';
$__compilerVar9 = '';
$__compilerVar9 .= '
			
				';
if (XenForo_Template_Helper_Core::styleProperty('uix_postbit_privateControlsMenu') != ('100%'))
{
$__compilerVar9 .= '
				';
$__compilerVar10 = '';
$__compilerVar10 .= '
				
					';
if ($post['canEdit'])
{
$__compilerVar10 .= '
						<a href="' . XenForo_Template_Helper_Core::link('posts/edit', $post, array()) . '" class="item control edit ' . (($xenOptions['messageInlineEdit']) ? ('OverlayTrigger') : ('')) . '"
							data-href="' . XenForo_Template_Helper_Core::link('posts/edit-inline', $post, array()) . '" data-overlayOptions="{&quot;fixed&quot;:false}"
							data-messageSelector="#post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span>' . 'Edit' . '</a>
						';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar10 .= '
					';
}
$__compilerVar10 .= '
					';
if ($post['edit_count'] && $post['canViewHistory'])
{
$__compilerVar10 .= '<a href="' . XenForo_Template_Helper_Core::link('posts/history', $post, array()) . '" class="item control history ' . ((XenForo_Template_Helper_Core::styleProperty('uix_postbit_privateControlsMenu')) ? ('OverlayTrigger') : ('ToggleTrigger')) . '"><span></span>' . 'History' . '</a>';
}
$__compilerVar10 .= '
					';
if ($post['canDelete'])
{
$__compilerVar10 .= '<a href="' . XenForo_Template_Helper_Core::link('posts/delete', $post, array()) . '" class="item control delete OverlayTrigger"><span></span>' . 'Delete' . '</a>';
}
$__compilerVar10 .= '
					';
if ($post['canCleanSpam'])
{
$__compilerVar10 .= '<a href="' . XenForo_Template_Helper_Core::link('spam-cleaner', $post, array()) . '" class="item control deleteSpam OverlayTrigger"><span></span>' . 'Spam' . '</a>';
}
$__compilerVar10 .= '
					';
if ($canViewIps AND $post['ip_id'])
{
$__compilerVar10 .= '<a href="' . XenForo_Template_Helper_Core::link('posts/ip', $post, array()) . '" class="item control ip OverlayTrigger"><span></span>' . 'IP' . '</a>';
}
$__compilerVar10 .= '
					
					';
if ($post['canWarn'])
{
$__compilerVar10 .= '
						<a href="' . XenForo_Template_Helper_Core::link('members/warn', $post, array(
'content_type' => 'post',
'content_id' => $post['post_id']
)) . '" class="item control warn"><span></span>' . 'Warn' . '</a>
					';
}
else if ($post['warning_id'] && $canViewWarnings)
{
$__compilerVar10 .= '
						<a href="' . XenForo_Template_Helper_Core::link('warnings', $post, array()) . '" class="OverlayTrigger item control viewWarning"><span></span>' . 'View Warning' . '</a>
					';
}
$__compilerVar10 .= '
				';
if ($post['canReport'])
{
$__compilerVar10 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts/report', $post, array()) . '" class="OverlayTrigger item control report" data-cacheOverlay="false"><span></span>' . 'Report' . '</a>
				';
}
$__compilerVar10 .= '
				
				';
$__compilerVar9 .= $this->callTemplateHook('post_private_controls', $__compilerVar10, array(
'post' => $post
));
unset($__compilerVar10);
$__compilerVar9 .= '
				';
}
$__compilerVar9 .= '
			
			';
if (trim($__compilerVar9) !== '')
{
$__compilerVar8 .= ' 
			
			<div class="privateControls">
		
			' . $__compilerVar9 . '
			
			</div>
				
			';
}
unset($__compilerVar9);
$__compilerVar8 .= ' 
			
			
			';
$__compilerVar11 = '';
$__compilerVar11 .= '
				
				';
$__compilerVar12 = '';
$__compilerVar12 .= '

									';
if (XenForo_Template_Helper_Core::styleProperty('uix_postbit_privateControlsMenu') != 0)
{
$__compilerVar12 .= '
										
										';
$__compilerVar13 = '';
$__compilerVar13 .= '
										
										';
if ($post['canEdit'])
{
$__compilerVar13 .= '
											<a href="' . XenForo_Template_Helper_Core::link('posts/edit', $post, array()) . '" class="item control edit ' . (($xenOptions['messageInlineEdit']) ? ('OverlayTrigger') : ('')) . '"
												data-href="' . XenForo_Template_Helper_Core::link('posts/edit-inline', $post, array()) . '" data-overlayOptions="{&quot;fixed&quot;:false}"
												data-messageSelector="#post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span>' . 'Edit' . '</a>
											';
$this->addRequiredExternal('js', 'js/xenforo/discussion.js');
$__compilerVar13 .= '
										';
}
$__compilerVar13 .= '
										';
if ($post['edit_count'] && $post['canViewHistory'])
{
$__compilerVar13 .= '<a href="' . XenForo_Template_Helper_Core::link('posts/history', $post, array()) . '" class="item control history ' . ((XenForo_Template_Helper_Core::styleProperty('uix_postbit_privateControlsMenu')) ? ('OverlayTrigger') : ('ToggleTrigger')) . '"><span></span>' . 'History' . '</a>';
}
$__compilerVar13 .= '
										';
if ($post['canDelete'])
{
$__compilerVar13 .= '<a href="' . XenForo_Template_Helper_Core::link('posts/delete', $post, array()) . '" class="item control delete OverlayTrigger"><span></span>' . 'Delete' . '</a>';
}
$__compilerVar13 .= '
										';
if ($post['canCleanSpam'])
{
$__compilerVar13 .= '<a href="' . XenForo_Template_Helper_Core::link('spam-cleaner', $post, array()) . '" class="item control deleteSpam OverlayTrigger"><span></span>' . 'Spam' . '</a>';
}
$__compilerVar13 .= '
										';
if ($canViewIps AND $post['ip_id'])
{
$__compilerVar13 .= '<a href="' . XenForo_Template_Helper_Core::link('posts/ip', $post, array()) . '" class="item control ip OverlayTrigger"><span></span>' . 'IP' . '</a>';
}
$__compilerVar13 .= '
					
										';
if ($post['canWarn'])
{
$__compilerVar13 .= '
											<a href="' . XenForo_Template_Helper_Core::link('members/warn', $post, array(
'content_type' => 'post',
'content_id' => $post['post_id']
)) . '" class="item control warn"><span></span>' . 'Warn' . '</a>
										';
}
else if ($post['warning_id'] && $canViewWarnings)
{
$__compilerVar13 .= '
											<a href="' . XenForo_Template_Helper_Core::link('warnings', $post, array()) . '" class="OverlayTrigger item control viewWarning"><span></span>' . 'View Warning' . '</a>
										';
}
$__compilerVar13 .= '
										';
if ($post['canReport'])
{
$__compilerVar13 .= '
											<a href="' . XenForo_Template_Helper_Core::link('posts/report', $post, array()) . '" class="OverlayTrigger item control report" data-cacheOverlay="false"><span></span>' . 'Report' . '</a>
										';
}
$__compilerVar13 .= '
					
										';
$__compilerVar12 .= $this->callTemplateHook('post_private_controls', $__compilerVar13, array(
'post' => $post
));
unset($__compilerVar13);
$__compilerVar12 .= '

									';
}
$__compilerVar12 .= '
				
									';
if (trim($__compilerVar12) !== '')
{
$__compilerVar11 .= ' 
				
					<div class="Popup PopupControl PopupClosed uix_postbit_privateControlsMenu">
						<a rel="Menu" class="NoPopupGadget"><i class="uix_icon"></i>' . 'Tools' . '</a>
						<div class="Menu">
							<ul class="secondaryContent blockLinksList">
								<li>
										
									' . $__compilerVar12 . '
															
								</li>
							</ul>
						</div>
					</div>
				
				';
}
unset($__compilerVar12);
$__compilerVar11 .= '
				
				';
$__compilerVar14 = '';
$__compilerVar14 .= '
			
				';
if ($post['canLike'])
{
$__compilerVar14 .= '
					<a href="' . XenForo_Template_Helper_Core::link('posts/like', $post, array()) . '" class="LikeLink item control ' . (($post['like_date']) ? ('unlike') : ('like')) . '" data-container="#likes-post-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"><span></span><span class="LikeLabel">' . (($post['like_date']) ? ('Unlike') : ('Like')) . '</span></a>
				';
}
$__compilerVar14 .= '
				';
if ($canReply)
{
$__compilerVar14 .= '
					';
if ($xenOptions['multiQuote'])
{
$__compilerVar14 .= '<a href="' . XenForo_Template_Helper_Core::link('threads/reply', $thread, array(
'quote' => $post['post_id']
)) . '"
						data-messageid="' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"
						class="MultiQuoteControl JsOnly item control"
						title="' . 'Toggle Multi-Quote' . '"><span></span><span class="symbol">' . '+ Quote' . '</span></a>';
}
$__compilerVar14 .= '
					<a href="' . XenForo_Template_Helper_Core::link('threads/reply', $thread, array(
'quote' => $post['post_id']
)) . '"
						data-postUrl="' . XenForo_Template_Helper_Core::link('posts/quote', $post, array()) . '"
						data-tip="#MQ-' . htmlspecialchars($post['post_id'], ENT_QUOTES, 'UTF-8') . '"
						class="ReplyQuote item control reply"
						title="' . 'Reply, quoting this message' . '"><span></span>' . 'Reply' . '</a>
				';
}
$__compilerVar14 .= '
				
				';
$__compilerVar11 .= $this->callTemplateHook('post_public_controls', $__compilerVar14, array(
'post' => $post
));
unset($__compilerVar14);
$__compilerVar11 .= '
			
			';
if (trim($__compilerVar11) !== '')
{
$__compilerVar8 .= ' 
			
			<div class="publicControls">
			
			' . $__compilerVar11 . '
			
			</div>
			
			';
}
unset($__compilerVar11);
$__compilerVar8 .= ' 
			
			
		';
if (trim($__compilerVar8) !== '')
{
$__compilerVar7 .= ' 	
			
		<div class="messageMeta ToggleTriggerAnchor"> 
		
		' . $__compilerVar8 . '
		
		</div>
		
		';
}
unset($__compilerVar8);
$__compilerVar7 .= ' 
	
	';
$__compilerVar15 = '';
$this->addRequiredExternal('css', 'message');
$__compilerVar15 .= '
';
$this->addRequiredExternal('css', 'bb_code');
$__compilerVar15 .= '

<li id="' . htmlspecialchars($__compilerVar2, ENT_QUOTES, 'UTF-8') . '" class="sectionMain message ' . (($post['isDeleted']) ? ('deleted') : ('')) . ' ' . (($post['is_staff']) ? ('staff') : ('')) . ' ' . (($post['isIgnored']) ? ('ignored') : ('')) . ' ' . (($post['isNew']) ? ('new') : ('')) . ' ' . ((!$post['uix_can_collapse'] || ($xenOptions['uix_noCollapseStaffPost'] && $post['is_staff'])) ? ('uix_noCollapseMessage') : ('')) . '" data-author="' . htmlspecialchars($post['username'], ENT_QUOTES, 'UTF-8') . '">

	<div class="uix_message ' . ((XenForo_Template_Helper_Core::styleProperty('uix_classicPostbit')) ? ('uix_classicMessage') : ('')) . '">
	
		';
$__compilerVar16 = '';
$this->addRequiredExternal('css', 'message_user_info');
$__compilerVar16 .= '

<div class="messageUserInfo" itemscope="itemscope" itemtype="http://data-vocabulary.org/Person">	
<div class="messageUserBlock ' . (($post['isOnline']) ? ('online') : ('')) . '">	
	';
$__compilerVar17 = '';
$__compilerVar17 .= '
		<div class="avatarHolder">
			<div class="uix_avatarHolderInner">
			<span class="helper"></span>
			' . XenForo_Template_Helper_Core::callHelper('avatarhtml', array($post,(true),array(
'user' => '$user',
'size' => XenForo_Template_Helper_Core::styleProperty('uix_postbit_avatarSize'),
'img' => 'true'
),'')) . '
			
			';
if ($post['isOnline'])
{
$__compilerVar17 .= '<span class="Tooltip onlineMarker" title="' . 'Online Now' . '" data-offsetX="-22" data-offsetY="-8">';
if (XenForo_Template_Helper_Core::styleProperty('uix_messageOnlineMarker_circlePulse'))
{
$__compilerVar17 .= '<span class="onlineMarker_pulse"></span>';
}
$__compilerVar17 .= '</span>';
}
$__compilerVar17 .= '
			<!-- slot: message_user_info_avatar -->
			</div>
		</div>
	';
$__compilerVar16 .= $this->callTemplateHook('message_user_info_avatar', $__compilerVar17, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar17);
$__compilerVar16 .= '	
';
if (!$isQuickReply)
{
$__compilerVar16 .= '
	';
$__compilerVar18 = '';
$__compilerVar18 .= '
		<h3 class="userText">
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar18 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_username_icon');
$__compilerVar18 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaUserIcon') AND $xenOptions['cxf_fas'])
{
$__compilerVar18 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $post['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar18 .= '
    <dl class="convButtonUI"><span class="Tooltip" title="' . 'Start a Conversation' . '"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $post['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar18 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar18 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar18 .= ' title="' . 'Start a Conversation' . '" ><i class="fa fa-envelope Tooltip"></i></a></span></dl>
';
}
$__compilerVar18 .= '
';
}
$__compilerVar18 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaUserIconM'))
{
$__compilerVar18 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar18 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonUI {
        display: none;
    }
}
';
}
$__compilerVar18 .= '
</style>
';
}
$__compilerVar18 .= '
';
}
$__compilerVar18 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar18 .= '
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
$__compilerVar18 .= '
			<div class="uix_userTextInner">
				<div class="uix_usernameWrapper">
					' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($post,'',(true),array(
'itemprop' => 'name'
))) . '
					<div class="uix_threadSlide">
						<span class="uix_threadSlideToggle Tooltip" title="' . 'Toggle' . '">
							<span class="uix_threadSlideToggleExpand">
								<i class="uix_icon uix_icon-expand"></i> 
								<span class="uix_threadSlidePhrase">' . 'Expand' . '</span>
							</span>
							<span class="uix_threadSlideToggleCollapse">
								<i class="uix_icon uix_icon-collapse"></i> 
								<span class="uix_threadSlidePhrase">' . 'Collapse' . '</span>
							</span>
						</span>
					</div>
				</div>
				';
$__compilerVar19 = '';
$__compilerVar19 .= XenForo_Template_Helper_Core::callHelper('userTitle', array(
'0' => $post,
'1' => '1',
'2' => '1'
));
if (trim($__compilerVar19) !== '')
{
$__compilerVar18 .= '<em class="userTitle" itemprop="title">' . $__compilerVar19 . '</em>';
}
unset($__compilerVar19);
$__compilerVar18 .= '
			</div>
			' . XenForo_Template_Helper_Core::callHelper('userBanner', array(
'0' => $post,
'1' => 'wrapped'
)) . '
			
			<!-- slot: message_user_info_text -->
		</h3>
	';
$__compilerVar16 .= $this->callTemplateHook('message_user_info_text', $__compilerVar18, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar18);
$__compilerVar16 .= '
';
if ($post['trophyCache'])
{
$__compilerVar16 .= '
<p class="trophies" id="trophyIcons">
	';
foreach ($post['trophyCache'] AS $trophy)
{
$__compilerVar16 .= '
		';
$__compilerVar20 = '';
$this->addRequiredExternal('css', 'waindigo_trophy_icons_trophies');
$__compilerVar20 .= '
<a href="' . XenForo_Template_Helper_Core::link('members/trophies', $post, array()) . '" class="OverlayTrigger">		
<img src="' . htmlspecialchars($trophy['iconUrl'], ENT_QUOTES, 'UTF-8') . '" title="' . htmlspecialchars($trophy['title'], ENT_QUOTES, 'UTF-8') . '" class="trophyIconMini" />
</a>';
$__compilerVar16 .= $__compilerVar20;
unset($__compilerVar20);
$__compilerVar16 .= '
	';
}
$__compilerVar16 .= '
</p>
';
}
$__compilerVar16 .= '	
	';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsActive'))
{
$__compilerVar21 = '';
$__compilerVar21 .= '
';
if (!XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsBadgeCSS'))
{
$__compilerVar21 .= '
    ';
$this->addRequiredExternal('css', 'userrankribbons');
$__compilerVar21 .= '
';
}
$__compilerVar21 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsBadgeCSS'))
{
$__compilerVar21 .= '
    ';
$this->addRequiredExternal('css', 'userrankribbonsbadge');
$__compilerVar21 .= '
';
}
$__compilerVar21 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsSoftResponsiveFix'))
{
$__compilerVar21 .= '
    ';
$this->addRequiredExternal('css', 'UserRankRibbonsSoftResponsiveFix');
$__compilerVar21 .= '
';
}
$__compilerVar21 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsXenMoodsFix'))
{
$__compilerVar21 .= '
    ';
$this->addRequiredExternal('css', 'UserRankRibbonsXenMoodsFix');
$__compilerVar21 .= '
';
}
$__compilerVar21 .= '
    
';
if (XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsActive'))
{
$__compilerVar21 .= '

	<ul class="ribbon">
    
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1'))
{
$__compilerVar21 .= '
			<li class="ribbon1">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon1Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2'))
{
$__compilerVar21 .= '
			<li class="ribbon2">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon2Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3'))
{
$__compilerVar21 .= '
			<li class="ribbon3">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon3Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4'))
{
$__compilerVar21 .= '
			<li class="ribbon4">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon4Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5'))
{
$__compilerVar21 .= '
			<li class="ribbon5">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon5Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6'))
{
$__compilerVar21 .= '
			<li class="ribbon6">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon6Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7'))
{
$__compilerVar21 .= '
			<li class="ribbon7">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon7Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8'))
{
$__compilerVar21 .= '
			<li class="ribbon8">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon8Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9'))
{
$__compilerVar21 .= '
			<li class="ribbon9">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon9Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10'))
{
$__compilerVar21 .= '
			<li class="ribbon10">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon10Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11'))
{
$__compilerVar21 .= '
			<li class="ribbon11">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon11Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12'))
{
$__compilerVar21 .= '
			<li class="ribbon12">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon12Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13'))
{
$__compilerVar21 .= '
			<li class="ribbon13">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon13Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14'))
{
$__compilerVar21 .= '
			<li class="ribbon14">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon14Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15'))
{
$__compilerVar21 .= '
			<li class="ribbon15">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon15Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16'))
{
$__compilerVar21 .= '
			<li class="ribbon16">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon16Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17'))
{
$__compilerVar21 .= '
			<li class="ribbon17">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon17Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18'))
{
$__compilerVar21 .= '
			<li class="ribbon18">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon18Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19'))
{
$__compilerVar21 .= '
			<li class="ribbon19">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon19Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20'))
{
$__compilerVar21 .= '
			<li class="ribbon20">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon20Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21'))
{
$__compilerVar21 .= '
			<li class="ribbon21">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon21Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22'))
{
$__compilerVar21 .= '
			<li class="ribbon22">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon22Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23'))
{
$__compilerVar21 .= '
			<li class="ribbon23">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon23Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24'))
{
$__compilerVar21 .= '
			<li class="ribbon24">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon24Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25'))
{
$__compilerVar21 .= '
			<li class="ribbon25">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon25Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26'))
{
$__compilerVar21 .= '
			<li class="ribbon26">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon26Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27'))
{
$__compilerVar21 .= '
			<li class="ribbon27">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon27Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28'))
{
$__compilerVar21 .= '
			<li class="ribbon28">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon28Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29'))
{
$__compilerVar21 .= '
			<li class="ribbon29">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon29Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30'))
{
$__compilerVar21 .= '
			<li class="ribbon30">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon30Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31'))
{
$__compilerVar21 .= '
			<li class="ribbon31">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon31Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32'))
{
$__compilerVar21 .= '
			<li class="ribbon32">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon32Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33'))
{
$__compilerVar21 .= '
			<li class="ribbon33">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon33Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34'))
{
$__compilerVar21 .= '
			<li class="ribbon34">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon34Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
		';
if (XenForo_Template_Helper_Core::callHelper('ismemberof', array(
'0' => $post,
'1' => XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35UserGroup')
)) AND XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35'))
{
$__compilerVar21 .= '
			<li class="ribbon35">
				<div class="Rleft"></div>
				<div class="Rright"></div>
				' . XenForo_Template_Helper_Core::styleProperty('UserRankRibbonsRibbon35Title') . '
			</li>
		';
}
$__compilerVar21 .= '
		
	</ul>
';
}
$__compilerVar16 .= $__compilerVar21;
unset($__compilerVar21);
}
$__compilerVar16 .= '
    ';
$__compilerVar22 = '';
$__compilerVar22 .= '
			';
$__compilerVar23 = '';
$__compilerVar23 .= '
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowRegisterDate') AND $post['user_id'])
{
$__compilerVar23 .= '
					<dl class="pairsJustified">
						<dt>' . 'Joined' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::date($post['register_date'], '') . '</dd>
					</dl>
				';
}
$__compilerVar23 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowMessageCount') AND $post['user_id'])
{
$__compilerVar23 .= '
					<dl class="pairsJustified">
						<dt>' . 'Messages' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('search/member', '', array(
'user_id' => $post['user_id']
)) . '" class="concealed" rel="nofollow">' . XenForo_Template_Helper_Core::numberFormat($post['message_count'], '0') . '</a></dd>
					</dl>
				';
}
$__compilerVar23 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowTotalLikes') AND $post['user_id'])
{
$__compilerVar23 .= '
					<dl class="pairsJustified">
						<dt>' . 'Likes Received' . ':</dt>
						<dd>' . XenForo_Template_Helper_Core::numberFormat($post['like_count'], '0') . '</dd>
					</dl>
				';
}
$__compilerVar23 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowTrophyPoints') AND $post['user_id'] AND $xenOptions['enableTrophies'])
{
$__compilerVar23 .= '
					<dl class="pairsJustified">
						<dt>' . 'Trophy Points' . ':</dt>
						<dd><a href="' . XenForo_Template_Helper_Core::link('members/trophies', $post, array()) . '" class="OverlayTrigger concealed">' . XenForo_Template_Helper_Core::numberFormat($post['trophy_points'], '0') . '</a></dd>
					</dl>
				';
}
$__compilerVar23 .= '
			
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowGender') AND $post['gender'])
{
$__compilerVar23 .= '
					<dl class="pairsJustified">
						<dt>' . 'Gender' . ':</dt>
						<dd itemprop="gender">';
if ($post['gender'] == ('male'))
{
$__compilerVar23 .= 'Male';
}
else
{
$__compilerVar23 .= 'Female';
}
$__compilerVar23 .= '</dd>
					</dl>
				';
}
$__compilerVar23 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowOccupation') AND $post['occupation'])
{
$__compilerVar23 .= '
					<dl class="pairsJustified">
						<dt>' . 'Occupation' . ':</dt>
						<dd itemprop="role">' . XenForo_Template_Helper_Core::string('censor', array(
'0' => htmlspecialchars($post['occupation'], ENT_QUOTES, 'UTF-8')
)) . '</dd>
					</dl>
				';
}
$__compilerVar23 .= '
				
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowLocation') AND $post['location'])
{
$__compilerVar23 .= '
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
$__compilerVar23 .= '
			
				';
if (XenForo_Template_Helper_Core::styleProperty('messageShowHomepage') AND $post['homepage'])
{
$__compilerVar23 .= '
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
$__compilerVar23 .= '
							
			';
$__compilerVar22 .= $this->callTemplateHook('message_user_info_extra', $__compilerVar23, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar23);
$__compilerVar22 .= '			
			';
if (XenForo_Template_Helper_Core::styleProperty('messageShowCustomFields') AND $post['customFields'])
{
$__compilerVar22 .= '
			';
$__compilerVar24 = '';
$__compilerVar24 .= '
			
				';
foreach ($userFieldsInfo AS $fieldId => $fieldInfo)
{
$__compilerVar24 .= '
					';
if ($fieldInfo['viewable_message'] AND ($fieldInfo['display_group'] != ('contact') OR $post['allow_view_identities'] == ('everyone') OR ($post['allow_view_identities'] == ('members') AND $visitor['user_id'])))
{
$__compilerVar24 .= '
						';
$__compilerVar25 = '';
$__compilerVar25 .= XenForo_Template_Helper_Core::callHelper('userFieldValue', array(
'0' => $fieldInfo,
'1' => $post,
'2' => $post['customFields'][$fieldId]
));
if (trim($__compilerVar25) !== '')
{
$__compilerVar24 .= '
							<dl class="pairsJustified userField_' . htmlspecialchars($fieldId, ENT_QUOTES, 'UTF-8') . '">
								<dt>' . XenForo_Template_Helper_Core::callHelper('userFieldTitle', array(
'0' => $fieldId
)) . ':</dt>
								<dd>' . $__compilerVar25 . '</dd>
							</dl>
						';
}
unset($__compilerVar25);
$__compilerVar24 .= '
					';
}
$__compilerVar24 .= '
				';
}
$__compilerVar24 .= '
				
			';
$__compilerVar22 .= $this->callTemplateHook('message_user_info_custom_fields', $__compilerVar24, array(
'user' => $post,
'isQuickReply' => $isQuickReply
));
unset($__compilerVar24);
$__compilerVar22 .= '
			';
}
$__compilerVar22 .= '
			';
if (trim($__compilerVar22) !== '')
{
$__compilerVar16 .= '
		<div class="extraUserInfo">
			' . $__compilerVar22 . '
		</div>
	';
}
unset($__compilerVar22);
$__compilerVar16 .= '
';
if ($visitor['permissions']['cbuaGroupID']['cbuaID'])
{
$__compilerVar16 .= '
';
$this->addRequiredExternal('css', 'conversationbutton_postbit_user_info');
$__compilerVar16 .= '
';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowInfo'))
{
$__compilerVar16 .= '
';
if ($visitor['permissions']['conversation']['start'] AND $visitor['user_id'] != $post['user_id'] AND !$post['user_id'] == 0)
{
$__compilerVar16 .= '
    <dl class="conversationButtonInfo convButtonMobileInfo"><a href="' . XenForo_Template_Helper_Core::link('conversations/add', '', array(
'to' => $post['username'],
'title' => $thread['title']
)) . '" ';
if (XenForo_Template_Helper_Core::styleProperty('cbuaShowOverlay'))
{
$__compilerVar16 .= 'class="OverlayTrigger" data-cacheOverlay="false"';
}
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar16 .= 'onclick="centeredPopup(this.href,\'myWindow\',\'800\',\'900\',\'yes\');return false"';
}
$__compilerVar16 .= ' >' . 'Start a Conversation' . '</a></dl>
';
}
$__compilerVar16 .= '
';
}
$__compilerVar16 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbuaMobileInfo'))
{
$__compilerVar16 .= '
<style type="text/css">
';
if (XenForo_Template_Helper_Core::styleProperty('enableResponsive'))
{
$__compilerVar16 .= '
@media (max-width:' . XenForo_Template_Helper_Core::styleProperty('maxResponsiveMediumWidth') . ')
{
    .convButtonMobileInfo {
        display: none;
    }
}
';
}
$__compilerVar16 .= '
</style>
';
}
$__compilerVar16 .= '
';
}
$__compilerVar16 .= '

';
if (XenForo_Template_Helper_Core::styleProperty('cbua_newwindow'))
{
$__compilerVar16 .= '
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
$__compilerVar16 .= '
		
';
}
$__compilerVar16 .= '

	<span class="arrow"><span></span></span>
</div>
</div>';
$__compilerVar15 .= $__compilerVar16;
unset($__compilerVar16);
$__compilerVar15 .= '
	
		<div class="messageInfo primaryContent">
			';
$__compilerVar26 = '';
$__compilerVar26 .= '
						';
$__compilerVar27 = '';
$__compilerVar27 .= '
							';
if ($post['warning_message'])
{
$__compilerVar27 .= '
								<li class="warningNotice"><span class="icon Tooltip" title="' . 'Warning' . '" data-tipclass="iconTip flipped"></span>' . htmlspecialchars($post['warning_message'], ENT_QUOTES, 'UTF-8') . '</li>
							';
}
$__compilerVar27 .= '
							';
if ($post['isDeleted'])
{
$__compilerVar27 .= '
								<li class="deletedNotice"><span class="icon Tooltip" title="' . 'Deleted' . '" data-tipclass="iconTip flipped"></span>' . 'This message has been removed from public view.' . '</li>
							';
}
else if ($post['isModerated'])
{
$__compilerVar27 .= '
								<li class="moderatedNotice"><span class="icon Tooltip" title="' . 'Awaiting moderation' . '" data-tipclass="iconTip flipped"></span>' . 'This message is awaiting moderator approval, and is invisible to normal visitors.' . '</li>
							';
}
$__compilerVar27 .= '
							';
if ($post['isIgnored'])
{
$__compilerVar27 .= '
								<li>' . 'You are ignoring content by this member.' . ' <a href="javascript:" class="JsOnly DisplayIgnoredContent">' . 'Show Ignored Content' . '</a></li>
							';
}
$__compilerVar27 .= '
						';
$__compilerVar26 .= $this->callTemplateHook('message_notices', $__compilerVar27, array(
'message' => $post
));
unset($__compilerVar27);
$__compilerVar26 .= '
					';
if (trim($__compilerVar26) !== '')
{
$__compilerVar15 .= '
				<ul class="messageNotices">
					' . $__compilerVar26 . '
				</ul>
			';
}
unset($__compilerVar26);
$__compilerVar15 .= '
			
			';
$__compilerVar28 = '';
$__compilerVar28 .= '
			<div class="messageContent">
				<article>
					<blockquote class="messageText SelectQuoteContainer ugc baseHtml' . (($post['isIgnored']) ? (' ignored') : ('')) . '">
						';
if ($post['isNew'])
{
$__compilerVar28 .= '<strong class="newIndicator">' . 'New' . '</strong>';
}
$__compilerVar28 .= '
						';
$__compilerVar29 = '';
$__compilerVar30 = '';
$__compilerVar30 .= '
	
		';
$__compilerVar31 = '';
$__compilerVar31 .= '
				';
$__compilerVar32 = '';
$__compilerVar31 .= $this->callTemplateHook('ad_message_body', $__compilerVar32, array());
unset($__compilerVar32);
$__compilerVar31 .= '
				
				
				



			';
if (trim($__compilerVar31) !== '')
{
$__compilerVar30 .= '
			' . $__compilerVar31 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar30 .= '
			<div>' . 'Template' . ': ad_message_body</div>
		';
}
unset($__compilerVar31);
$__compilerVar30 .= '
	
	';
if (trim($__compilerVar30) !== '')
{
$__compilerVar29 .= '
	
	<div class="funbox">
	<div class="funboxWrapper">
	' . $__compilerVar30 . '
	</div>
	</div>
	
';
}
unset($__compilerVar30);
$__compilerVar28 .= $__compilerVar29;
unset($__compilerVar29);
$__compilerVar28 .= '
						' . $post['messageHtml'] . '
						<div class="messageTextEndMarker">&nbsp;</div>
					</blockquote>
				</article>
				
				' . $__compilerVar4 . '
			</div>
			';
$__compilerVar15 .= $this->callTemplateHook('message_content', $__compilerVar28, array(
'message' => $post
));
unset($__compilerVar28);
$__compilerVar15 .= '
			
			';
if ($visitor['content_show_signature'] && $post['signature'])
{
$__compilerVar15 .= '
				<div class="baseHtml signature messageText ugc' . (($post['isIgnored']) ? (' ignored') : ('')) . '">
					<div class="uix_signatureWrapper uix_signatureToggleHover">
						<div class="uix_signatureWrapperInner">
							<aside class="uix_signature">
								' . $post['signatureHtml'] . '
							</aside>
						</div>
						<div class="uix_signatureCover">
							<div class="uix_signatureToggle">
								<span class="uix_signatureCollapse">' . 'Collapse Signature' . '</span>
								<span class="uix_signatureExpand">' . 'Expand Signature' . '</span>
							</div>
						</div>
					</div>
				</div>
			';
}
$__compilerVar15 .= '
			
			<div class="messageDetails">
			
				' . $__compilerVar6 . '
			
				';
if ($post['last_edit_date'])
{
$__compilerVar15 .= '
					<div class="editDate item">
					';
if ($post['user_id'] == $post['last_edit_user_id'])
{
$__compilerVar15 .= '
						' . 'Last edited' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($post['last_edit_date'],array(
'time' => htmlspecialchars($post['last_edit_date'], ENT_QUOTES, 'UTF-8')
))) . '
					';
}
else
{
$__compilerVar15 .= '
						' . 'Last edited by a moderator' . ': ' . XenForo_Template_Helper_Core::callHelper('datetimehtml', array($post['last_edit_date'],array(
'time' => htmlspecialchars($post['last_edit_date'], ENT_QUOTES, 'UTF-8')
))) . '
					';
}
$__compilerVar15 .= '
					</div>
				';
}
$__compilerVar15 .= '
				
			</div>
			
			
			' . $__compilerVar7 . '
			
			<div id="likes-' . htmlspecialchars($__compilerVar2, ENT_QUOTES, 'UTF-8') . '">';
if ($post['likes'])
{
$__compilerVar33 = '';
if ($post['likes'])
{
$__compilerVar33 .= '
	';
$this->addRequiredExternal('css', 'likes_summary');
$__compilerVar33 .= '
	<div class="likesSummary secondaryContent">
		<span class="LikeText">
			' . XenForo_Template_Helper_Core::callHelper('likeshtml', array($post['likes'],$__compilerVar3,$post['like_date'],$post['likeUsers'])) . '
		</span>
	</div>
';
}
$__compilerVar15 .= $__compilerVar33;
unset($__compilerVar33);
}
$__compilerVar15 .= '</div>
		</div>
	
	</div> 

	';
$__compilerVar34 = '';
$__compilerVar15 .= $this->callTemplateHook('message_below', $__compilerVar34, array(
'post' => $post,
'message_id' => $__compilerVar2
));
unset($__compilerVar34);
$__compilerVar15 .= '
	
	';
$__compilerVar35 = '';
$__compilerVar36 = '';
$__compilerVar36 .= '
	
		';
$__compilerVar37 = '';
$__compilerVar37 .= '
				';
$__compilerVar38 = '';
$__compilerVar37 .= $this->callTemplateHook('ad_message_below', $__compilerVar38, array());
unset($__compilerVar38);
$__compilerVar37 .= '
				
				



				
			';
if (trim($__compilerVar37) !== '')
{
$__compilerVar36 .= '
			' . $__compilerVar37 . '
		';
}
else if ($visitor['is_admin'] && XenForo_Template_Helper_Core::styleProperty('uix_previewAdPositions'))
{
$__compilerVar36 .= '
			<div>' . 'Template' . ': ad_message_below</div>
		';
}
unset($__compilerVar37);
$__compilerVar36 .= '
	
	';
if (trim($__compilerVar36) !== '')
{
$__compilerVar35 .= '
	
	<div class="funbox">
	<div class="funboxWrapper">
	' . $__compilerVar36 . '
	</div>
	</div>
	
';
}
unset($__compilerVar36);
$__compilerVar15 .= $__compilerVar35;
unset($__compilerVar35);
$__compilerVar15 .= '
	
</li>';
$__compilerVar1 .= $__compilerVar15;
unset($__compilerVar2, $__compilerVar3, $__compilerVar4, $__compilerVar6, $__compilerVar7, $__compilerVar15);
$__output .= $__compilerVar1;
unset($__compilerVar1);
$__output .= '
';
}
