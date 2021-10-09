<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardConfirm0ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardConfirm0ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardConfirm0ResponseUnMarshaller();
    }

    /**
     * @return BindcardConfirm0ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardConfirm0Response
     */
    protected function getResponseInstance()
    {
        return new BindcardConfirm0Response();
    }
}

BindcardConfirm0ResponseUnMarshaller::__init();
