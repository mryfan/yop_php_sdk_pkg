<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class FacepayProxyCreateOrderRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $orderToken;
    /**
     * @var string
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $uniquePayNo;
    /**
     * @var string
     */
    private $bindBizNo;
    /**
     * @var string
     */
    private $expireDate;
    /**
     * @var string
     */
    private $cvv2;
    /**
     * @var string
     */
    private $smsCode;
    /**
     * @var string
     */
    private $bizNo;
    /**
     * @var string
     */
    private $bizToken;
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
     * @return FacepayProxyCreateOrderRequest
     */
    public function setOrderToken($orderToken)
    {
        $this->orderToken = $orderToken;
        return $this;
    }
    /**
     * Gets orderAmount
     *
     * @return string
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets orderAmount
     *
     * @param string $orderAmount
     * @return FacepayProxyCreateOrderRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets uniquePayNo
     *
     * @return string
     */
    public function getUniquePayNo()
    {
        return $this->uniquePayNo;
    }

    /**
     * Sets uniquePayNo
     *
     * @param string $uniquePayNo
     * @return FacepayProxyCreateOrderRequest
     */
    public function setUniquePayNo($uniquePayNo)
    {
        $this->uniquePayNo = $uniquePayNo;
        return $this;
    }
    /**
     * Gets bindBizNo
     *
     * @return string
     */
    public function getBindBizNo()
    {
        return $this->bindBizNo;
    }

    /**
     * Sets bindBizNo
     *
     * @param string $bindBizNo
     * @return FacepayProxyCreateOrderRequest
     */
    public function setBindBizNo($bindBizNo)
    {
        $this->bindBizNo = $bindBizNo;
        return $this;
    }
    /**
     * Gets expireDate
     *
     * @return string
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets expireDate
     *
     * @param string $expireDate
     * @return FacepayProxyCreateOrderRequest
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }
    /**
     * Gets cvv2
     *
     * @return string
     */
    public function getCvv2()
    {
        return $this->cvv2;
    }

    /**
     * Sets cvv2
     *
     * @param string $cvv2
     * @return FacepayProxyCreateOrderRequest
     */
    public function setCvv2($cvv2)
    {
        $this->cvv2 = $cvv2;
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
     * @return FacepayProxyCreateOrderRequest
     */
    public function setSmsCode($smsCode)
    {
        $this->smsCode = $smsCode;
        return $this;
    }
    /**
     * Gets bizNo
     *
     * @return string
     */
    public function getBizNo()
    {
        return $this->bizNo;
    }

    /**
     * Sets bizNo
     *
     * @param string $bizNo
     * @return FacepayProxyCreateOrderRequest
     */
    public function setBizNo($bizNo)
    {
        $this->bizNo = $bizNo;
        return $this;
    }
    /**
     * Gets bizToken
     *
     * @return string
     */
    public function getBizToken()
    {
        return $this->bizToken;
    }

    /**
     * Sets bizToken
     *
     * @param string $bizToken
     * @return FacepayProxyCreateOrderRequest
     */
    public function setBizToken($bizToken)
    {
        $this->bizToken = $bizToken;
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
     * @return FacepayProxyCreateOrderRequest
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
     * @return FacepayProxyCreateOrderRequest
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
     * @return FacepayProxyCreateOrderRequest
     */
    public function setMemberNo($memberNo)
    {
        $this->memberNo = $memberNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'facepayProxyCreateOrder';
    }


}
