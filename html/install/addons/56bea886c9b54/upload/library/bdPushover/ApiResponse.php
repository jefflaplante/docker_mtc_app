<?php

class bdPushover_ApiResponse
{
	protected $_message;

	public function __construct($message = '', $logError = false)
	{
		if (!empty($message))
		{
			$exception = $message;

			if ($message instanceof Exception)
			{
				$message = strval($message);
			}
			else
			{
				$exception = new XenForo_Exception($message);
			}

			if ($logError OR XenForo_Application::debugMode())
			{
				XenForo_Error::logException($exception, false);
			}

			$this->_message = $message;
		}
	}

	public function getMessage()
	{
		return $this->_message;
	}

	public static function error($message, $logError = false)
	{
		return new bdPushover_ApiResponse_Error($message, $logError);
	}

	public static function retry($message = '', $logError = false)
	{
		return new bdPushover_ApiResponse_Retry($message, $logError);
	}

}
