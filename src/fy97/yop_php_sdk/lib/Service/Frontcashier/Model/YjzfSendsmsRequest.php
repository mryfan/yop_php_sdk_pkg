<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class YjzfSendsmsRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $recordId;
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
    private $bankPWD;
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
     * Gets recordId
     *
     * @return string
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * Sets recordId
     *
     * @param string $recordId
     * @return YjzfSendsmsRequest
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;
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
     * @return YjzfSendsmsRequest
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
     * @return YjzfSendsmsRequest
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
     * @return YjzfSendsmsRequest
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
     * @return YjzfSendsmsRequest
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
     * @return YjzfSendsmsRequest
     */
    public function setAvlidDate($avlidDate)
    {
        $this->avlidDate = $avlidDate;
        return $this;
    }
    /**
     * Gets bankPWD
     *
     * @return string
     */
    public function getBankPWD()
    {
        return $this->bankPWD;
    }

    /**
     * Sets bankPWD
     *
     * @param string $bankPWD
     * @return YjzfSendsmsRequest
     */
    public function setBankPWD($bankPWD)
    {
        $this->bankPWD = $bankPWD;
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
     * @return YjzfSendsmsRequest
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
     * @return YjzfSendsmsRequest
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
     * @return YjzfSendsmsRequest
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    public static function getOperationId()
    {
        return 'yjzfSendsms';
    }


}
