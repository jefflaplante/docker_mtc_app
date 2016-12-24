<?php if (!class_exists('XenForo_Application', false)) die(); $__output = '';
$__output .= '<select name="month" class="textCtrl autoSize">
	<option value="0" ' . (($datetime['month'] == 0) ? ' selected="selected"' : '') . '>&nbsp;</option>
	<option value="1" ' . (($datetime['month'] == 1) ? ' selected="selected"' : '') . '>' . 'January' . '</option>
	<option value="2" ' . (($datetime['month'] == 2) ? ' selected="selected"' : '') . '>' . 'February' . '</option>
	<option value="3" ' . (($datetime['month'] == 3) ? ' selected="selected"' : '') . '>' . 'March' . '</option>
	<option value="4" ' . (($datetime['month'] == 4) ? ' selected="selected"' : '') . '>' . 'April' . '</option>
	<option value="5" ' . (($datetime['month'] == 5) ? ' selected="selected"' : '') . '>' . 'May' . '</option>
	<option value="6" ' . (($datetime['month'] == 6) ? ' selected="selected"' : '') . '>' . 'June' . '</option>
	<option value="7" ' . (($datetime['month'] == 7) ? ' selected="selected"' : '') . '>' . 'July' . '</option>
	<option value="8" ' . (($datetime['month'] == 8) ? ' selected="selected"' : '') . '>' . 'August' . '</option>
	<option value="9" ' . (($datetime['month'] == 9) ? ' selected="selected"' : '') . '>' . 'September' . '</option>
	<option value="10" ' . (($datetime['month'] == 10) ? ' selected="selected"' : '') . '>' . 'October' . '</option>
	<option value="11" ' . (($datetime['month'] == 11) ? ' selected="selected"' : '') . '>' . 'November' . '</option>
	<option value="12" ' . (($datetime['month'] == 12) ? ' selected="selected"' : '') . '>' . 'December' . '</option>
</select>
	<input type="text" name="day" value="' . (($datetime['day']) ? (htmlspecialchars($datetime['day'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl autoSize" placeholder="' . 'Day' . '" size="2" maxlength="2" />
	<input type="text" name="year" value="' . (($datetime['year']) ? (htmlspecialchars($datetime['year'], ENT_QUOTES, 'UTF-8')) : ('')) . '" class="textCtrl autoSize" placeholder="' . 'Year' . '" size="4" maxlength="4" />	
<select name="hour" class="textCtrl autoSize">
	<option value="00" ' . htmlspecialchars($datetime['hour']['00'], ENT_QUOTES, 'UTF-8') . '>00</option>
	<option value="01" ' . htmlspecialchars($datetime['hour']['01'], ENT_QUOTES, 'UTF-8') . '>01</option>
	<option value="02" ' . htmlspecialchars($datetime['hour']['02'], ENT_QUOTES, 'UTF-8') . '>02</option>
	<option value="03" ' . htmlspecialchars($datetime['hour']['03'], ENT_QUOTES, 'UTF-8') . '>03</option>
	<option value="04" ' . htmlspecialchars($datetime['hour']['04'], ENT_QUOTES, 'UTF-8') . '>04</option>
	<option value="05" ' . htmlspecialchars($datetime['hour']['05'], ENT_QUOTES, 'UTF-8') . '>05</option>
	<option value="06" ' . htmlspecialchars($datetime['hour']['06'], ENT_QUOTES, 'UTF-8') . '>06</option>
	<option value="07" ' . htmlspecialchars($datetime['hour']['07'], ENT_QUOTES, 'UTF-8') . '>07</option>
	<option value="08" ' . htmlspecialchars($datetime['hour']['08'], ENT_QUOTES, 'UTF-8') . '>08</option>
	<option value="09" ' . htmlspecialchars($datetime['hour']['09'], ENT_QUOTES, 'UTF-8') . '>09</option>
	<option value="10" ' . htmlspecialchars($datetime['hour']['10'], ENT_QUOTES, 'UTF-8') . '>10</option>
	<option value="11" ' . htmlspecialchars($datetime['hour']['11'], ENT_QUOTES, 'UTF-8') . '>11</option>
	<option value="12" ' . htmlspecialchars($datetime['hour']['12'], ENT_QUOTES, 'UTF-8') . '>12</option>
	<option value="13" ' . htmlspecialchars($datetime['hour']['13'], ENT_QUOTES, 'UTF-8') . '>13</option>
	<option value="14" ' . htmlspecialchars($datetime['hour']['14'], ENT_QUOTES, 'UTF-8') . '>14</option>
	<option value="15" ' . htmlspecialchars($datetime['hour']['15'], ENT_QUOTES, 'UTF-8') . '>15</option>
	<option value="16" ' . htmlspecialchars($datetime['hour']['16'], ENT_QUOTES, 'UTF-8') . '>16</option>
	<option value="17" ' . htmlspecialchars($datetime['hour']['17'], ENT_QUOTES, 'UTF-8') . '>17</option>
	<option value="18" ' . htmlspecialchars($datetime['hour']['18'], ENT_QUOTES, 'UTF-8') . '>18</option>
	<option value="19" ' . htmlspecialchars($datetime['hour']['19'], ENT_QUOTES, 'UTF-8') . '>19</option>
	<option value="20" ' . htmlspecialchars($datetime['hour']['20'], ENT_QUOTES, 'UTF-8') . '>20</option>
	<option value="21" ' . htmlspecialchars($datetime['hour']['21'], ENT_QUOTES, 'UTF-8') . '>21</option>
	<option value="22" ' . htmlspecialchars($datetime['hour']['22'], ENT_QUOTES, 'UTF-8') . '>22</option>
	<option value="23" ' . htmlspecialchars($datetime['hour']['23'], ENT_QUOTES, 'UTF-8') . '>23</option>
</select>
	:
<select name="min" class="textCtrl autoSize">
	<option value="00" ' . htmlspecialchars($datetime['min']['00'], ENT_QUOTES, 'UTF-8') . '>00</option>
	<option value="05" ' . htmlspecialchars($datetime['min']['05'], ENT_QUOTES, 'UTF-8') . '>05</option>
	<option value="10" ' . htmlspecialchars($datetime['min']['10'], ENT_QUOTES, 'UTF-8') . '>10</option>
	<option value="15" ' . htmlspecialchars($datetime['min']['15'], ENT_QUOTES, 'UTF-8') . '>15</option>
	<option value="20" ' . htmlspecialchars($datetime['min']['20'], ENT_QUOTES, 'UTF-8') . '>20</option>
	<option value="25" ' . htmlspecialchars($datetime['min']['25'], ENT_QUOTES, 'UTF-8') . '>25</option>
	<option value="30" ' . htmlspecialchars($datetime['min']['30'], ENT_QUOTES, 'UTF-8') . '>30</option>
	<option value="35" ' . htmlspecialchars($datetime['min']['35'], ENT_QUOTES, 'UTF-8') . '>35</option>
	<option value="40" ' . htmlspecialchars($datetime['min']['40'], ENT_QUOTES, 'UTF-8') . '>40</option>
	<option value="45" ' . htmlspecialchars($datetime['min']['45'], ENT_QUOTES, 'UTF-8') . '>45</option>
	<option value="50" ' . htmlspecialchars($datetime['min']['50'], ENT_QUOTES, 'UTF-8') . '>50</option>
	<option value="55" ' . htmlspecialchars($datetime['min']['55'], ENT_QUOTES, 'UTF-8') . '>55</option>
</select>';
