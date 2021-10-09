<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class AuthorizeRelieveRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $authorizeMerchantNo;
    /**
     * @var string
     */
    private $bizType;

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
     * @return AuthorizeRelieveRequest
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
     * @return AuthorizeRelieveRequest
     */
    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'authorizeRelieve';
    }


}
