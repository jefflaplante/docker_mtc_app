<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
if ($visitor['permissions']['statisticsGroupID']['statisticsID'])
{
$__output .= '

<div class="section">
<div class="secondaryContent statsList" id="boardStats">
<h3>' . 'Forum Statistics' . '</h3>
<div class="pairsJustified">
    
    ';
if ($xenOptions['showThreads'])
{
$__output .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreads'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreads, '0') . '</dd></dl>
    ';
}
$__output .= '
    
    ';
if ($xenOptions['showPosts'])
{
$__output .= '   
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePosts'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPosts, '0') . '</dd></dl> 
    ';
}
$__output .= '
    
    ';
if ($xenOptions['showMembers'])
{
$__output .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembers'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalMembers, '0') . '</dd></dl>
    ';
}
$__output .= ' 
    
    ';
if ($xenOptions['showThreadsLast24Hours'])
{
$__output .= '    
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleThreadsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalThreadsLastDay, '0') . '</dd></dl>
    ';
}
$__output .= ' 

    ';
if ($xenOptions['showPostsLast24Hours'])
{
$__output .= '    	
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titlePostsLast24Hours'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalPostsLastDay, '0') . '</dd></dl> 
    ';
}
$__output .= '
    
    ';
if ($xenOptions['showMembersLast30Days'])
{
$__output .= '
    <dl class="discussionCount"><dt>' . htmlspecialchars($xenOptions['titleMembersLast30Days'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::numberFormat($totalActiveMembers, '0') . '</dd></dl>
    ';
}
$__output .= '
    
    ';
if ($xenOptions['showLatestMember'])
{
$__output .= '
    <dl><dt>' . htmlspecialchars($xenOptions['titleLatestMember'], ENT_QUOTES, 'UTF-8') . ':</dt>
    <dd>' . XenForo_Template_Helper_Core::callHelper('usernamehtml', array($boardTotals['latestUser'],'',(true),array())) . '</dd></dl>
    ';
}
$__output .= '
               
</div>
</div>
</div>

';
}
