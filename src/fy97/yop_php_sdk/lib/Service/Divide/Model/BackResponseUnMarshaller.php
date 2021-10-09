<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Divide\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BackResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BackResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BackResponseUnMarshaller();
    }

    /**
     * @return BackResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BackResponse
     */
    protected function getResponseInstance()
    {
        return new BackResponse();
    }
}

BackResponseUnMarshaller::__init();
