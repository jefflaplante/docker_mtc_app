<?php

class Andy_Statistics_CronEntry_Statistics
{
	public static function runHourlyStatistics()
	{
		// get database
		$db = XenForo_Application::get('db');
		
		//########################################
		// truncate xf_statistics		
		
		$db->query('
			TRUNCATE TABLE xf_statistics
		');
		
		//########################################
		// members
		
		$field_id = 'total_members';
			
		$totalMembers = $db->fetchOne('
		SELECT COUNT(user_id) AS total
		FROM xf_user
		');
		
		$db->query('
			INSERT INTO xf_statistics
				(field_id, field_value)
			VALUES
				(?, ?)
		', array($field_id, $totalMembers));
		
		//########################################
		// members last 30 days
		
		$field_id = 'total_active_members';		
		
		$pastMonth = time() - (3600 * 24 * 31);
				
		$totalActiveMembers = $db->fetchOne('
		SELECT COUNT(user_id) AS total
		FROM xf_user
		WHERE last_activity >= ' . $pastMonth . '
		');	
		
		$db->query('
			INSERT INTO xf_statistics
				(field_id, field_value)
			VALUES
				(?, ?)
		', array($field_id, $totalActiveMembers));
		
		//########################################
		// threads
		
		$field_id = 'total_threads';	
				
		$totalThreads = $db->fetchOne('
		SELECT COUNT(thread_id) AS total
		FROM xf_thread
		');
		
		$db->query('
			INSERT INTO xf_statistics
				(field_id, field_value)
			VALUES
				(?, ?)
		', array($field_id, $totalThreads));
		
		//########################################
		// threads last 24 hours
		
		$field_id = 'total_threads_last_day';		

		$lastDay = time() - (3600 * 24);
		
		$totalThreadsLastDay = $db->fetchOne('
		SELECT COUNT(thread_id) AS total
		FROM xf_thread
		WHERE post_date > ' . $lastDay . '
		');
		
		$db->query('
			INSERT INTO xf_statistics
				(field_id, field_value)
			VALUES
				(?, ?)
		', array($field_id, $totalThreadsLastDay));		
		
		//########################################
		// posts
		
		$field_id = 'total_posts';
		
		$totalPosts = $db->fetchOne('
		SELECT COUNT(post_id) AS total
		FROM xf_post
		');	
		
		$db->query('
			INSERT INTO xf_statistics
				(field_id, field_value)
			VALUES
				(?, ?)
		', array($field_id, $totalPosts));
		
		//########################################
		// posts last 24 hours
		
		$field_id = 'total_posts_last_day';		

		$totalPostsLastDay = $db->fetchOne('
		SELECT COUNT(post_id) AS total
		FROM xf_post
		WHERE post_date > ' . $lastDay . '
		');
		
		$db->query('
			INSERT INTO xf_statistics
				(field_id, field_value)
			VALUES
				(?, ?)
		', array($field_id, $totalPostsLastDay));
	}
}