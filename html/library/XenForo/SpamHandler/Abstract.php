<?php

abstract class XenForo_SpamHandler_Abstract
{
	/**
	 * Standard approach to caching other model objects for the lifetime of the model.
	 *
	 * @var array
	 */
	protected $_modelCache = array();

	/**
	 * Checks the options array for options affecting whether or not to run the cleanUp function
	 *
	 * @param array $user
	 * @param array $options
	 *
	 * @return boolean
	 */
	abstract public function cleanUpConditionCheck(array $user, array $options);

	/**
	 * Cleans up spam of this content type
	 *
	 * @param array Spamming user
	 * @param array Log of actions performed
	 * @param string|array Error phrase key
	 *
	 * @return boolean If false, $errorKey should be populated with an error phrase key
	 */
	abstract public function cleanUp(array $user, array &$log, &$errorKey);

	/**
	 * Undoes whatever the cleanUp function did, based on the contents of the log
	 *
	 * @param array Log generated by cleanUp
	 * @param string|array Error phrase key
	 *
	 * @return boolean
	 */
	abstract public function restore(array $log, &$errorKey = '');

	/**
	 * Gets the specified model object from the cache. If it does not exist,
	 * it will be instantiated.
	 *
	 * @param string $class Name of the class to load
	 *
	 * @return XenForo_Model
	 */
	public function getModelFromCache($class)
	{
		if (!isset($this->_modelCache[$class]))
		{
			$this->_modelCache[$class] = XenForo_Model::create($class);
		}

		return $this->_modelCache[$class];
	}
}