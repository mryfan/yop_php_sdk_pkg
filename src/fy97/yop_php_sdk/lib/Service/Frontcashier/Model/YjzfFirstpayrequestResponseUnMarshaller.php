<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YjzfFirstpayrequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YjzfFirstpayrequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YjzfFirstpayrequestResponseUnMarshaller();
    }

    /**
     * @return YjzfFirstpayrequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YjzfFirstpayrequestResponse
     */
    protected function getResponseInstance()
    {
        return new YjzfFirstpayrequestResponse();
    }
}

YjzfFirstpayrequestResponseUnMarshaller::__init();
