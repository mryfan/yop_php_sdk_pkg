<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountinfosQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountinfosQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountinfosQueryResponseUnMarshaller();
    }

    /**
     * @return AccountinfosQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountinfosQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountinfosQueryResponse();
    }
}

AccountinfosQueryResponseUnMarshaller::__init();
