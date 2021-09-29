<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class FacepayProxyCheckLogonSmscodeRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $orderToken;
    /**
     * @var string
     */
    private $faceRequestNo;
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
     * Gets orderToken
     *
     * @return string
     */
    public function getOrderToken()
    {
        return $this->orderToken;
    }

    /**
     * Sets orderToken
     *
     * @param string $orderToken
     * @return FacepayProxyCheckLogonSmscodeRequest
     */
    public function setOrderToken($orderToken)
    {
        $this->orderToken = $orderToken;
        return $this;
    }
    /**
     * Gets faceRequestNo
     *
     * @return string
     */
    public function getFaceRequestNo()
    {
        return $this->faceRequestNo;
    }

    /**
     * Sets faceRequestNo
     *
     * @param string $faceRequestNo
     * @return FacepayProxyCheckLogonSmscodeRequest
     */
    public function setFaceRequestNo($faceRequestNo)
    {
        $this->faceRequestNo = $faceRequestNo;
        return $this;
    }
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
     * @return FacepayProxyCheckLogonSmscodeRequest
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
     * @return FacepayProxyCheckLogonSmscodeRequest
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
     * @return FacepayProxyCheckLogonSmscodeRequest
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
     * @return FacepayProxyCheckLogonSmscodeRequest
     */
    public function setMemberNo($memberNo)
    {
        $this->memberNo = $memberNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'facepayProxyCheckLogonSmscode';
    }


}
