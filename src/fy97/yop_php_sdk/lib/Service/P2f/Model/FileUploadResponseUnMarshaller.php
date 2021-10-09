<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FileUploadResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FileUploadResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FileUploadResponseUnMarshaller();
    }

    /**
     * @return FileUploadResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FileUploadResponse
     */
    protected function getResponseInstance()
    {
        return new FileUploadResponse();
    }
}

FileUploadResponseUnMarshaller::__init();
