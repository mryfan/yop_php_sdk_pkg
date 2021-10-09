<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Std\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillFundbillApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillFundbillApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillFundbillApplyResponseUnMarshaller();
    }

    /**
     * @return BillFundbillApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillFundbillApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BillFundbillApplyResponse();
    }
}

BillFundbillApplyResponseUnMarshaller::__init();
