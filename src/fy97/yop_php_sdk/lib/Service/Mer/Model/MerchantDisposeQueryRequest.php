<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class MerchantDisposeQueryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $applicationNo;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return MerchantDisposeQueryRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets applicationNo
     *
     * @return string
     */
    public function getApplicationNo()
    {
        return $this->applicationNo;
    }

    /**
     * Sets applicationNo
     *
     * @param string $applicationNo
     * @return MerchantDisposeQueryRequest
     */
    public function setApplicationNo($applicationNo)
    {
        $this->applicationNo = $applicationNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantDisposeQuery';
    }


}
