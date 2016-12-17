<?php

class Waindigo_Trophies_Listener_TemplatePostRender extends Waindigo_Listener_TemplatePostRender
{
    protected function _getTemplates()
    {
        return array(
            'waindigo_help_trophies_trophies',
            'member_trophies',
            'trophy_edit',
        );
    }

    public static function templatePostRender($templateName, &$content, array &$containerData, XenForo_Template_Abstract $template)
    {
        $templatePostRender = new Waindigo_Trophies_Listener_TemplatePostRender($templateName, $content, $containerData, $template);
        list($content, $containerData) = $templatePostRender->run();
    }

    protected function _waindigoHelpTrophiesTrophies()
    {
        $viewParams = $this->_fetchViewParams();
        $parentTrophyCategories = $viewParams['parentTrophyCategories'];
        $pointsPhrase = new XenForo_Phrase('points');
        foreach ($parentTrophyCategories as $parentTrophyCategory) {
            if (isset($parentTrophyCategory['trophy_categories'])) {
                foreach ($parentTrophyCategory['trophy_categories'] as $trophyCategory) {
                    if (isset($trophyCategory['trophies'])) {
                        foreach ($trophyCategory['trophies'] as $trophyId => $trophy) {
                            if ($trophy['icon_url']) {
                                $pattern = '#(<div class="trophy" id="trophy-' . $trophyId . '">\s*<div class="points">)[0-9]*(</div>.*)(<p class="description">)#Us';
                                $replacement = '${1}<img style="width:48px;" src="' . $trophy['icon_url'] . '" title="' . $trophy['title'] . '" alt="' . $trophy['title'] . '" />${2}<p class="description">' . $pointsPhrase . ': ' . $trophy['trophy_points'] . '</p>${3}';
                                $this->_patternReplace($pattern, $replacement);
                            }
                        }
                    }
                }
            }
        }
    }

    protected function _memberTrophies()
    {
        $viewParams = $this->_fetchViewParams();
        $trophies = $viewParams['trophies'];
        $pointsPhrase = new XenForo_Phrase('points');
        foreach ($trophies as $trophyId => $trophy) {
            if ($trophy['icon_url']) {
                $pattern = '#(<div class="trophy" id="trophy-' . $trophyId . '">\s*<div class="points">)[0-9]*(</div>.*)(<p class="description">)#Us';
                $replacement = '${1}<img src="' . $trophy['icon_url'] . '" title="' . $trophy['title'] . '" alt="' . $trophy['title'] . '" />${2}<p class="description">' . $pointsPhrase . ': ' . $trophy['trophy_points'] . '</p>${3}';
                $this->_patternReplace($pattern, $replacement);
            }
        }
    }

    protected function _trophyEdit()
    {
        $pattern = '#(<ul id="trophyPanes">\s*<li>.*)(</li>)#Us';
        $replacement =  '${1}' . $this->_render('waindigo_trophy_edit_trophies') . '${2}';
        $this->_patternReplace($pattern,$replacement);
    }
}