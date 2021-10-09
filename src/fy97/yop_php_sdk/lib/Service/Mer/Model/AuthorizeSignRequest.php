<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class AuthorizeSignRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $authorizeMerchantNo;
    /**
     * @var string
     */
    private $bizType;
    /**
     * @var string
     */
    private $notifyUrl;

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
     * @return AuthorizeSignRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets authorizeMerchantNo
     *
     * @return string
     */
    public function getAuthorizeMerchantNo()
    {
        return $this->authorizeMerchantNo;
    }

    /**
     * Sets authorizeMerchantNo
     *
     * @param string $authorizeMerchantNo
     * @return AuthorizeSignRequest
     */
    public function setAuthorizeMerchantNo($authorizeMerchantNo)
    {
        $this->authorizeMerchantNo = $authorizeMerchantNo;
        return $this;
    }
    /**
     * Gets bizType
     *
     * @return string
     */
    public function getBizType()
    {
        return $this->bizType;
    }

    /**
     * Sets bizType
     *
     * @param string $bizType
     * @return AuthorizeSignRequest
     */
    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return AuthorizeSignRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'authorizeSign';
    }


}
