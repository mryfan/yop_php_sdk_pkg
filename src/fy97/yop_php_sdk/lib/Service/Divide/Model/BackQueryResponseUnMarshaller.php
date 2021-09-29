<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Divide\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BackQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BackQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BackQueryResponseUnMarshaller();
    }

    /**
     * @return BackQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BackQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BackQueryResponse();
    }
}

BackQueryResponseUnMarshaller::__init();
