<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetcardbinResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetcardbinResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetcardbinResponseUnMarshaller();
    }

    /**
     * @return GetcardbinResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetcardbinResponse
     */
    protected function getResponseInstance()
    {
        return new GetcardbinResponse();
    }
}

GetcardbinResponseUnMarshaller::__init();
