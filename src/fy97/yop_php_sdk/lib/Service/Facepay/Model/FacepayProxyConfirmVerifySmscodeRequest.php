<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class FacepayProxyConfirmVerifySmscodeRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $smsCode;
    /**
     * @var string
     */
    private $bizSystem;
    /**
     * @var string
     */
    private $mtToken;
    /**
     * @var string
     */
    private $memberNo;

    /**
     * Gets smsCode
     *
     * @return string
     */
    public function getSmsCode()
    {
        return $this->smsCode;
    }

    /**
     * Sets smsCode
     *
     * @param string $smsCode
     * @return FacepayProxyConfirmVerifySmscodeRequest
     */
    public function setSmsCode($smsCode)
    {
        $this->smsCode = $smsCode;
        return $this;
    }
    /**
     * Gets bizSystem
     *
     * @return string
     */
    public function getBizSystem()
    {
        return $this->bizSystem;
    }

    /**
     * Sets bizSystem
     *
     * @param string $bizSystem
     * @return FacepayProxyConfirmVerifySmscodeRequest
     */
    public function setBizSystem($bizSystem)
    {
        $this->bizSystem = $bizSystem;
        return $this;
    }
    /**
     * Gets mtToken
     *
     * @return string
     */
    public function getMtToken()
    {
        return $this->mtToken;
    }

    /**
     * Sets mtToken
     *
     * @param string $mtToken
     * @return FacepayProxyConfirmVerifySmscodeRequest
     */
    public function setMtToken($mtToken)
    {
        $this->mtToken = $mtToken;
        return $this;
    }
    /**
     * Gets memberNo
     *
     * @return string
     */
    public function getMemberNo()
    {
        return $this->memberNo;
    }

    /**
     * Sets memberNo
     *
     * @param string $memberNo
     * @return FacepayProxyConfirmVerifySmscodeRequest
     */
    public function setMemberNo($memberNo)
    {
        $this->memberNo = $memberNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'facepayProxyConfirmVerifySmscode';
    }


}
