<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YjzfSendsmsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YjzfSendsmsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YjzfSendsmsResponseUnMarshaller();
    }

    /**
     * @return YjzfSendsmsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YjzfSendsmsResponse
     */
    protected function getResponseInstance()
    {
        return new YjzfSendsmsResponse();
    }
}

YjzfSendsmsResponseUnMarshaller::__init();
