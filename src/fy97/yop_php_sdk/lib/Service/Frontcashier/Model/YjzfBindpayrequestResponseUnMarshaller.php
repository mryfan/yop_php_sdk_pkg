<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YjzfBindpayrequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YjzfBindpayrequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YjzfBindpayrequestResponseUnMarshaller();
    }

    /**
     * @return YjzfBindpayrequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YjzfBindpayrequestResponse
     */
    protected function getResponseInstance()
    {
        return new YjzfBindpayrequestResponse();
    }
}

YjzfBindpayrequestResponseUnMarshaller::__init();
