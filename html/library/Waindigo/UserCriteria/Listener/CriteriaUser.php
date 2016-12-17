<?php

class Waindigo_UserCriteria_Listener_CriteriaUser
{

    protected static $_waindigo_UserFieldPrefix = 'waindigo__userField_';

    protected static $_waindigoUserFieldPrefixLength = 20;

    public static function criteriaUser($rule, array $data, array $user, &$returnValue)
    {
        if (!isset($user['customFields'])) {
            $user['customFields'] = ! empty($user['custom_fields']) ? @unserialize($user['custom_fields']) : array();
        }
        // checks for non-empty custom fields
        if (strpos($rule, self::$_waindigo_UserFieldPrefix) === 0) {
            $userFieldId = substr($rule, self::$_waindigoUserFieldPrefixLength);

            if (!empty($user['customFields'][$userFieldId])) {
                $returnValue =  true;
            } else {
                $returnValue = false;
            }
        }

        switch ($rule) {
            case 'friends':
                if (isset($user['friend_count']) && $user['friend_count'] >= $data['friend_count']) {
                    $returnValue = true;
                }
                break;

            case 'personal_friends':
                if (isset($user['personal_friend_count']) && $user['personal_friend_count'] >= $data['personal_friend_count']) {
                    $returnValue = true;
                }
                break;

            case 'age':
				/* @var $userProfileModel XenForo_Model_UserProfile */
				$userProfileModel = XenForo_Model::create('XenForo_Model_UserProfile');
                $userAge = $userProfileModel->getUserAge($user, true);

                if ($userAge >= $data['years']) {
                    $returnValue = true;
                }
                break;

            case 'age_younger':
			    /* @var $userProfileModel XenForo_Model_UserProfile */
			    $userProfileModel = XenForo_Model::create('XenForo_Model_UserProfile');
                $userAge = $userProfileModel->getUserAge($user, true);

                if ($userAge && $userAge <= $data['years']) {
                    $returnValue = true;
                }
                break;

            case 'likes_given':
		        /* @var $likeModel XenForo_Model_Like */
		        $likeModel = XenForo_Model::create('XenForo_Model_Like');
                $likesGivenCount = $likeModel->countLikesFromUser($user['user_id']);
                if ($likesGivenCount >= $data['count']) {
                    $returnValue = true;
                }
                break;

            case 'warnings':
				/* @var $warningModel XenForo_Model_Warning */
				$warningModel = XenForo_Model::create('XenForo_Model_Warning');
                $warnings = $warningModel->countWarningsByUser($user['user_id']);
                if ($warnings >= $data['warnings']) {
                    $returnValue = true;
                }
                break;

            case 'warnings_maximum':
                /* @var $warningModel XenForo_Model_Warning */
                $warningModel = XenForo_Model::create('XenForo_Model_Warning');
                $warnings = $warningModel->countWarningsByUser($user['user_id']);
                if ($warnings <= $data['warnings']) {
                    $returnValue = true;
                }
                break;

            case 'warning_points':
                if (isset($user['warning_points']) && $user['warning_points'] >= $data['warning_points']) {
                    $returnValue = true;
                }
                break;

            case 'warning_points_maximum':
                if (isset($user['warning_points']) && $user['warning_points'] <= $data['warning_points']) {
                    $returnValue = true;
                }
                break;

            case 'discussions_started':
                /* @var $threadModel XenForo_Model_Thread */
                $threadModel = XenForo_Model::create('XenForo_Model_Thread');
                $conditions = array(
                    'user_id' => $user['user_id']
                );
                $discussionCount = $threadModel->countThreads($conditions);
                if ($discussionCount >= $data['discussion_count']) {
                    $returnValue = true;
                }
                break;

            case 'posts_in_thread':
                /* @var $postModel XenForo_Model_Post */
                $postModel = XenForo_Model::create('XenForo_Model_Post');
                $postCount = $postModel->getPostCountInThread($data['thread_id'], $user['user_id']);
                if ($postCount >= $data['post_count']) {
                    $returnValue = true;
                }
                break;

            case 'posts_in_node':
                /* @var $postModel XenForo_Model_Post */
                $postModel = XenForo_Model::create('XenForo_Model_Post');
                $postCount = $postModel->getPostCountInNode($data['node_id'], $user['user_id']);
                if ($postCount >= $data['post_count']) {
                    $returnValue = true;
                }
                break;

            case 'threads_in_node':
                /* @var $threadModel XenForo_Model_Thread */
                $threadModel = XenForo_Model::create('XenForo_Model_Thread');
                $conditions = array(
                    'user_id' => $user['user_id'],
                    'node_id' => explode(',', $data['node_id'])
                );
                $discussionCount = $threadModel->countThreads($conditions);
                if ($discussionCount >= $data['thread_count']) {
                    $returnValue = true;
                }
                break;

            case 'occupation':
                if (empty($user['occupation'])) {
                    $returnValue = true;
                }
                break;

            case 'about_you':
                if (empty($user['about'])) {
                    $returnValue = true;
                }
                break;

            case 'custom_title':
                if (empty($user['custom_title'])) {
                    $returnValue = true;
                }
                break;

            case 'social_forums_created':
                if (isset($user['social_forums_created']) && $user['social_forums_created'] >= $data['social_forums_created']) {
                    $returnValue = true;
                }
                break;

            case 'social_forums_joined':
                if (isset($user['social_forums_joined']) && $user['social_forums_joined'] >= $data['social_forums_joined']) {
                    $returnValue = true;
                }
                break;

            case 'registered_days_more':
                if (isset($user['register_date'])) {
                    $daysRegistered = floor((XenForo_Application::$time - $user['register_date']) / 86400);
                    if ($daysRegistered <= $data['days']) {
                        $returnValue = true;
                    }
                }
                break;

            // user has not posted for at least X days
            case 'last_post_days':
                /* @var $postModel XenForo_Model_Post */
                $postModel = XenForo_Model::create('XenForo_Model_Post');
                $lastPostDate = $postModel->getLastPostTimeByUser($user['user_id']);
                if (empty($lastPostDate)) {
                    return false;
                }
                $daysSinceLastPost = floor((XenForo_Application::$time - $lastPostDate) / 86400);
                if ($daysSinceLastPost > $data['days']) {
                    $returnValue = true;
                }
                break;

            // user has posted X times in the last Y days
            case 'posts_in_days':
                $postDate = XenForo_Application::$time - ($data['days'] * 86400);
                /* @var $postModel XenForo_Model_Post */
                $postModel = XenForo_Model::create('XenForo_Model_Post');
                $postCountSinceYDay = $postModel->getPostCountSinceDate($postDate, $user['user_id']);
                if (empty($postCountSinceYDay)) {
                    return false;
                }
                if ($postCountSinceYDay >= $data['posts']) {
                    $returnValue = true;
                }
                break;
        }
    }
}