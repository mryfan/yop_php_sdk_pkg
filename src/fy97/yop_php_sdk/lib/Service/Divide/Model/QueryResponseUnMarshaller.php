<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Divide\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryResponseUnMarshaller();
    }

    /**
     * @return QueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryResponse
     */
    protected function getResponseInstance()
    {
        return new QueryResponse();
    }
}

QueryResponseUnMarshaller::__init();
