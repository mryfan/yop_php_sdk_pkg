<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardRequest0ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardRequest0ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardRequest0ResponseUnMarshaller();
    }

    /**
     * @return BindcardRequest0ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardRequest0Response
     */
    protected function getResponseInstance()
    {
        return new BindcardRequest0Response();
    }
}

BindcardRequest0ResponseUnMarshaller::__init();
