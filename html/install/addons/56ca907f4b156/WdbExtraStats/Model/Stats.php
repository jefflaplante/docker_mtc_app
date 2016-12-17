<?php

class WdbExtraStats_Model_Stats extends XenForo_Model
{
	protected $_queries = array(
			'gender'=>array('title'=>'Gender ratio (blank indicates unspecified)',
					'query'=>'SELECT gender, count(*) count FROM xf_user GROUP BY gender ORDER BY count DESC;'),
			'gender_active'=>array('title'=>'Gender ratio - active in last 3 months',
					'query'=>'SELECT gender, count(*) count FROM xf_user WHERE last_activity > UNIX_TIMESTAMP()- (60*60*24*90) GROUP BY gender ORDER BY count DESC;'),
			'timezone'=>array('title'=>'Time Zone',
					'query'=>'SELECT timezone, count(*) count FROM xf_user GROUP BY timezone ORDER BY count DESC;'),
			'timezone_active'=>array('title'=>'Time Zone - active in last 3 months',
					'query'=>'SELECT timezone, count(*) count FROM xf_user WHERE last_activity > UNIX_TIMESTAMP()- (60*60*24*90) GROUP BY timezone ORDER BY count DESC;'),
			'forum_threads'=>array('title'=>'Threads per forum',
					'query'=>'SELECT t.node_id,n.title,count(*) count FROM xf_thread t join xf_node n on t.node_id=n.node_id group by node_id order by count desc;'),
			'forum_threads_recent'=>array('title'=>'Threads per forum - last 6 months',
					'query'=>'SELECT t.node_id,n.title,count(*) count FROM xf_thread t join xf_node n on t.node_id=n.node_id where post_date > UNIX_TIMESTAMP()-(60*60*24*180) GROUP BY node_id ORDER BY count DESC;'),
			'watched_threads'=>array('title'=>'Most watched threads',
					'query'=>'SELECT t1.thread_id,title,count FROM (SELECT thread_id,count(*) count FROM xf_thread_watch GROUP BY thread_id ORDER BY count DESC LIMIT 50) t1 JOIN xf_thread on t1.thread_id=xf_thread.thread_id;'),
			'watched_threads_recent'=>array('title'=>'Most watched threads - last 6 months',
					'query'=>'SELECT t1.thread_id,title,count FROM (SELECT thread_id,count(*) count FROM xf_thread_watch GROUP BY thread_id ORDER BY count DESC LIMIT 500) t1 JOIN xf_thread on t1.thread_id=xf_thread.thread_id WHERE post_date > UNIX_TIMESTAMP()-(60*60*24*180) LIMIT 50;'),
			'reported_members'=>array('title'=>'Most reported members - last 6 months',
					'query'=>'SELECT user_id,username,count FROM (SELECT content_user_id,count(*) count FROM xf_report WHERE first_report_date > UNIX_TIMESTAMP()-(60*60*24*180) GROUP BY content_user_id ORDER BY count DESC LIMIT 30) t1 JOIN xf_user u on t1.content_user_id=u.user_id;'),
			'followed'=>array('title'=>'Most followed users',
					'query'=>'SELECT follow_user_id user_id,u.username,count FROM (SELECT *,count(*) count FROM xf_user_follow GROUP BY follow_user_id ORDER BY count DESC LIMIT 50) f JOIN xf_user u ON follow_user_id=u.user_id;'),
			'ignored'=>array('title'=>'Most ignored users',
					'query'=>'select username,count from (SELECT ignored_user_id,count(*) count FROM xf_user_ignored GROUP BY ignored_user_id ORDER BY count DESC LIMIT 50) i JOIN xf_user u ON i.ignored_user_id = u.user_id;')
	);




	public function getStatsData($queryId)
	{

		$table=array();
		if (isset($this->_queries[$queryId]['query'])){
			$db = $this->_getDb();
			$data = $db->fetchAll($this->_queries[$queryId]['query']);

			$cols=array();

			// column names
			if (isset($data[0])){
				foreach ($data[0] as $key=>$value){
					array_push($cols, $key);
				}
			}

			// calc percent
			$maxCount=1;
			$totalCount=0;
			foreach ($data as $row){
				if (isset($row['count'])){
					if ($row['count']>$maxCount) $maxCount=$row['count'];
					$totalCount+=$row['count'];
				}
			}
			if ($totalCount==0) $totalCount=1;
			foreach ($data as $key=>$row){
				if (isset($row['count'])){
					$c=array(
							'value'=>$row['count'],
							'width'=>round($row['count']/$maxCount*100,0),
							'percent'=>round($row['count']/$totalCount*100,1)
					);
					$data[$key]['count']=$c;
				}
			}


			$table['data']=$data;
			$table['cols']=$cols;
			$table['id']=$queryId;

		}else{
			$table['data']="";
			$table['cols']="";
			$table['id']="";
		}
		return $table;
	}

	public function getQueries()
	{
		$ids=array();
		foreach ($this->_queries as $key=>$value){
			array_push($ids,array('id'=>$key,'title'=>$value['title']));
		}
		return $ids;
	}
}