<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayCancelResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayCancelResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayCancelResponseUnMarshaller();
    }

    /**
     * @return PayCancelResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayCancelResponse
     */
    protected function getResponseInstance()
    {
        return new PayCancelResponse();
    }
}

PayCancelResponseUnMarshaller::__init();
