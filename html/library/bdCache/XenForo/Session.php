<?php

class bdCache_XenForo_Session extends XFCP_bdCache_XenForo_Session
{
    public function sessionExists()
    {
        return true;
    }

    public function getSessionFromSource($sessionId)
    {
        return false;
    }

    public function save()
    {
        // do nothing
    }

    public function saveSessionToSource($sessionId, $isUpdate)
    {
        // do nothing
    }

    public function delete()
    {
        // do nothing
    }

    public function deleteSessionFromSource($sessionId)
    {
        // do nothing
    }
}