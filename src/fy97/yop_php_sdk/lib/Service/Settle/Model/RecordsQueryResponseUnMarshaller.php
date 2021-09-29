<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RecordsQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RecordsQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RecordsQueryResponseUnMarshaller();
    }

    /**
     * @return RecordsQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RecordsQueryResponse
     */
    protected function getResponseInstance()
    {
        return new RecordsQueryResponse();
    }
}

RecordsQueryResponseUnMarshaller::__init();
