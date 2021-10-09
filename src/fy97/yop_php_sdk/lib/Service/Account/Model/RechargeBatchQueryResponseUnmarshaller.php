<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeBatchQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeBatchQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeBatchQueryResponseUnMarshaller();
    }

    /**
     * @return RechargeBatchQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeBatchQueryResponse
     */
    protected function getResponseInstance()
    {
        return new RechargeBatchQueryResponse();
    }
}

RechargeBatchQueryResponseUnMarshaller::__init();
