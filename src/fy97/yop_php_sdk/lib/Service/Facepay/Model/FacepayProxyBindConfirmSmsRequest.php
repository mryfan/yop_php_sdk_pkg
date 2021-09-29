<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class FacepayProxyBindConfirmSmsRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $bindBizNo;
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
     * @return FacepayProxyBindConfirmSmsRequest
     */
    public function setBindBizNo($bindBizNo)
    {
        $this->bindBizNo = $bindBizNo;
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
     * @return FacepayProxyBindConfirmSmsRequest
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
     * @return FacepayProxyBindConfirmSmsRequest
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
     * @return FacepayProxyBindConfirmSmsRequest
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
     * @return FacepayProxyBindConfirmSmsRequest
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
     * @return FacepayProxyBindConfirmSmsRequest
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
     * @return FacepayProxyBindConfirmSmsRequest
     */
    public function setMemberNo($memberNo)
    {
        $this->memberNo = $memberNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'facepayProxyBindConfirmSms';
    }


}
