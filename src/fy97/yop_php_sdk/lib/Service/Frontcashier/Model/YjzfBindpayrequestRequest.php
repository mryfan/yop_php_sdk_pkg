<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class YjzfBindpayrequestRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $bindId;
    /**
     * @var string
     */
    private $userNo;
    /**
     * @var string
     */
    private $userType;
    /**
     * @var string
     */
    private $userIp;
    /**
     * @var string
     */
    private $paymentExt;
    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $version;

    /**
     * Gets bindId
     *
     * @return string
     */
    public function getBindId()
    {
        return $this->bindId;
    }

    /**
     * Sets bindId
     *
     * @param string $bindId
     * @return YjzfBindpayrequestRequest
     */
    public function setBindId($bindId)
    {
        $this->bindId = $bindId;
        return $this;
    }
    /**
     * Gets userNo
     *
     * @return string
     */
    public function getUserNo()
    {
        return $this->userNo;
    }

    /**
     * Sets userNo
     *
     * @param string $userNo
     * @return YjzfBindpayrequestRequest
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
        return $this;
    }
    /**
     * Gets userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Sets userType
     *
     * @param string $userType
     * @return YjzfBindpayrequestRequest
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }
    /**
     * Gets userIp
     *
     * @return string
     */
    public function getUserIp()
    {
        return $this->userIp;
    }

    /**
     * Sets userIp
     *
     * @param string $userIp
     * @return YjzfBindpayrequestRequest
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
        return $this;
    }
    /**
     * Gets paymentExt
     *
     * @return string
     */
    public function getPaymentExt()
    {
        return $this->paymentExt;
    }

    /**
     * Sets paymentExt
     *
     * @param string $paymentExt
     * @return YjzfBindpayrequestRequest
     */
    public function setPaymentExt($paymentExt)
    {
        $this->paymentExt = $paymentExt;
        return $this;
    }
    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets token
     *
     * @param string $token
     * @return YjzfBindpayrequestRequest
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets version
     *
     * @param string $version
     * @return YjzfBindpayrequestRequest
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    public static function getOperationId()
    {
        return 'yjzfBindpayrequest';
    }


}
