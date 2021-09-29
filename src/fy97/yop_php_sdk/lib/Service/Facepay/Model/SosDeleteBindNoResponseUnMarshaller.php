<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SosDeleteBindNoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SosDeleteBindNoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SosDeleteBindNoResponseUnMarshaller();
    }

    /**
     * @return SosDeleteBindNoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SosDeleteBindNoResponse
     */
    protected function getResponseInstance()
    {
        return new SosDeleteBindNoResponse();
    }
}

SosDeleteBindNoResponseUnMarshaller::__init();
