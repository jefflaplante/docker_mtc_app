<?php

class WdbExtraStats_ControllerAdmin_Stats extends XenForo_ControllerAdmin_Abstract
{
	protected function _preDispatch($action)
	{
		$this->assertAdminPermission('viewStatistics');
	}

	public function actionIndex()
	{

		$queryId="";
		if (isset($_GET['id'])) $queryId=$_GET['id'];

		$statsModel = $this->_getStatsModel();
		$table = $statsModel->getStatsData($queryId);
		$queries = $statsModel->getQueries();

		$viewParams = array(
				'data'=>$table['data'],
				'cols'=>$table['cols'],
				'id'=>$table['id'],
				'queries'=>$queries
		);
		return $this->responseView('XenForo_ViewAdmin_Extra_Stats', 'wdb_extrastats_index', $viewParams);
	}

	/**
	 * @return WdbExtraStats_Model_Stats
	 */
	protected function _getStatsModel()
	{
		return $this->getModelFromCache('WdbExtraStats_Model_Stats');
	}
}