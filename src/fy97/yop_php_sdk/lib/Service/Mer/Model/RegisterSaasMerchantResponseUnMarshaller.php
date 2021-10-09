<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterSaasMerchantResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterSaasMerchantResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterSaasMerchantResponseUnMarshaller();
    }

    /**
     * @return RegisterSaasMerchantResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterSaasMerchantResponse
     */
    protected function getResponseInstance()
    {
        return new RegisterSaasMerchantResponse();
    }
}

RegisterSaasMerchantResponseUnMarshaller::__init();
