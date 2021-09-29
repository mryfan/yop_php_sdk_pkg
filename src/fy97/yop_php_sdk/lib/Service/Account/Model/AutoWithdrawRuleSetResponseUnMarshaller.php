<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AutoWithdrawRuleSetResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AutoWithdrawRuleSetResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoWithdrawRuleSetResponseUnMarshaller();
    }

    /**
     * @return AutoWithdrawRuleSetResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AutoWithdrawRuleSetResponse
     */
    protected function getResponseInstance()
    {
        return new AutoWithdrawRuleSetResponse();
    }
}

AutoWithdrawRuleSetResponseUnMarshaller::__init();
