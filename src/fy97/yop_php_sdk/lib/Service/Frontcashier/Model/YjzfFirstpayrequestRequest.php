<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class YjzfFirstpayrequestRequest extends BaseRequest
{
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
    private $cardNo;
    /**
     * @var string
     */
    private $owner;
    /**
     * @var string
     */
    private $idNo;
    /**
     * @var string
     */
    private $phoneNo;
    /**
     * @var string
     */
    private $cvv;
    /**
     * @var string
     */
    private $avlidDate;
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
     * @return YjzfFirstpayrequestRequest
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
     * @return YjzfFirstpayrequestRequest
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
     * @return YjzfFirstpayrequestRequest
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
        return $this;
    }
    /**
     * Gets cardNo
     *
     * @return string
     */
    public function getCardNo()
    {
        return $this->cardNo;
    }

    /**
     * Sets cardNo
     *
     * @param string $cardNo
     * @return YjzfFirstpayrequestRequest
     */
    public function setCardNo($cardNo)
    {
        $this->cardNo = $cardNo;
        return $this;
    }
    /**
     * Gets owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets owner
     *
     * @param string $owner
     * @return YjzfFirstpayrequestRequest
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * Gets idNo
     *
     * @return string
     */
    public function getIdNo()
    {
        return $this->idNo;
    }

    /**
     * Sets idNo
     *
     * @param string $idNo
     * @return YjzfFirstpayrequestRequest
     */
    public function setIdNo($idNo)
    {
        $this->idNo = $idNo;
        return $this;
    }
    /**
     * Gets phoneNo
     *
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }

    /**
     * Sets phoneNo
     *
     * @param string $phoneNo
     * @return YjzfFirstpayrequestRequest
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;
        return $this;
    }
    /**
     * Gets cvv
     *
     * @return string
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Sets cvv
     *
     * @param string $cvv
     * @return YjzfFirstpayrequestRequest
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
        return $this;
    }
    /**
     * Gets avlidDate
     *
     * @return string
     */
    public function getAvlidDate()
    {
        return $this->avlidDate;
    }

    /**
     * Sets avlidDate
     *
     * @param string $avlidDate
     * @return YjzfFirstpayrequestRequest
     */
    public function setAvlidDate($avlidDate)
    {
        $this->avlidDate = $avlidDate;
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
     * @return YjzfFirstpayrequestRequest
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
     * @return YjzfFirstpayrequestRequest
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
     * @return YjzfFirstpayrequestRequest
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    public static function getOperationId()
    {
        return 'yjzfFirstpayrequest';
    }


}
