<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterSaasMicroResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterSaasMicroResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterSaasMicroResponseUnMarshaller();
    }

    /**
     * @return RegisterSaasMicroResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterSaasMicroResponse
     */
    protected function getResponseInstance()
    {
        return new RegisterSaasMicroResponse();
    }
}

RegisterSaasMicroResponseUnMarshaller::__init();
