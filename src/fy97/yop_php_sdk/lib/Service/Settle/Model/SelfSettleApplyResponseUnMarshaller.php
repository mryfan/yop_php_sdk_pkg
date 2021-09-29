<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SelfSettleApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SelfSettleApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SelfSettleApplyResponseUnMarshaller();
    }

    /**
     * @return SelfSettleApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SelfSettleApplyResponse
     */
    protected function getResponseInstance()
    {
        return new SelfSettleApplyResponse();
    }
}

SelfSettleApplyResponseUnMarshaller::__init();
