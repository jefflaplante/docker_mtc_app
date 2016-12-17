<?php
if (false) {

    class XFCP_Waindigo_Trophies_Extend_XenForo_Model_Post extends XenForo_Model_Post
    {
    }
}

class Waindigo_Trophies_Extend_XenForo_Model_Post extends XFCP_Waindigo_Trophies_Extend_XenForo_Model_Post
{

    const FETCH_TROPHY_COMBINATION = 0x01;

    /**
     * @see XenForo_Model_Post::preparePostJoinOptions()
     */
    public function preparePostJoinOptions(array $fetchOptions)
    {
        $joinOptions = parent::preparePostJoinOptions($fetchOptions);
        $selectFields = $joinOptions['selectFields'];
        $joinTables = $joinOptions['joinTables'];

        if (!empty($fetchOptions['waindigo_join'])) {
            if ($fetchOptions['waindigo_join'] & self::FETCH_TROPHY_COMBINATION) {
                $selectFields .= ',
					trophy_combination.cache_value AS trophy_combination_cache_value';
                $joinTables .= '
					LEFT JOIN xf_trophy_combination AS trophy_combination ON
						(trophy_combination.trophy_combination_id = user_profile.trophy_combination_id)';
            }
        }

        return array(
            'selectFields' => $selectFields,
            'joinTables' => $joinTables
        );
    }
}