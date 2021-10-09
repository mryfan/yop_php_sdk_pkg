<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class NotifyRepeatResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var NotifyRepeatResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new NotifyRepeatResponseUnMarshaller();
    }

    /**
     * @return NotifyRepeatResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return NotifyRepeatResponse
     */
    protected function getResponseInstance()
    {
        return new NotifyRepeatResponse();
    }
}

NotifyRepeatResponseUnMarshaller::__init();
