<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class BindcardRequest0Request extends BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantFlowId;
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
    private $bankCardNo;
    /**
     * @var string
     */
    private $userName;
    /**
     * @var string
     */
    private $idCardNo;
    /**
     * @var string
     */
    private $phone;
    /**
     * @var string
     */
    private $cvv2;
    /**
     * @var string
     */
    private $validthru;
    /**
     * @var int
     */
    private $orderValidate;
    /**
     * @var string
     */
    private $authType;
    /**
     * @var string
     */
    private $cardType;
    /**
     * @var string
     */
    private $isSMS;

    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return BindcardRequest0Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets merchantFlowId
     *
     * @return string
     */
    public function getMerchantFlowId()
    {
        return $this->merchantFlowId;
    }

    /**
     * Sets merchantFlowId
     *
     * @param string $merchantFlowId
     * @return BindcardRequest0Request
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
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
     * @return BindcardRequest0Request
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
     * @return BindcardRequest0Request
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }
    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->bankCardNo;
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo
     * @return BindcardRequest0Request
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }
    /**
     * Gets userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets userName
     *
     * @param string $userName
     * @return BindcardRequest0Request
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }
    /**
     * Gets idCardNo
     *
     * @return string
     */
    public function getIdCardNo()
    {
        return $this->idCardNo;
    }

    /**
     * Sets idCardNo
     *
     * @param string $idCardNo
     * @return BindcardRequest0Request
     */
    public function setIdCardNo($idCardNo)
    {
        $this->idCardNo = $idCardNo;
        return $this;
    }
    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets phone
     *
     * @param string $phone
     * @return BindcardRequest0Request
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
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
     * @return BindcardRequest0Request
     */
    public function setCvv2($cvv2)
    {
        $this->cvv2 = $cvv2;
        return $this;
    }
    /**
     * Gets validthru
     *
     * @return string
     */
    public function getValidthru()
    {
        return $this->validthru;
    }

    /**
     * Sets validthru
     *
     * @param string $validthru
     * @return BindcardRequest0Request
     */
    public function setValidthru($validthru)
    {
        $this->validthru = $validthru;
        return $this;
    }
    /**
     * Gets orderValidate
     *
     * @return int
     */
    public function getOrderValidate()
    {
        return $this->orderValidate;
    }

    /**
     * Sets orderValidate
     *
     * @param int $orderValidate
     * @return BindcardRequest0Request
     */
    public function setOrderValidate($orderValidate)
    {
        $this->orderValidate = $orderValidate;
        return $this;
    }
    /**
     * Gets authType
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->authType;
    }

    /**
     * Sets authType
     *
     * @param string $authType
     * @return BindcardRequest0Request
     */
    public function setAuthType($authType)
    {
        $this->authType = $authType;
        return $this;
    }
    /**
     * Gets cardType
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Sets cardType
     *
     * @param string $cardType
     * @return BindcardRequest0Request
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
        return $this;
    }
    /**
     * Gets isSMS
     *
     * @return string
     */
    public function getIsSMS()
    {
        return $this->isSMS;
    }

    /**
     * Sets isSMS
     *
     * @param string $isSMS
     * @return BindcardRequest0Request
     */
    public function setIsSMS($isSMS)
    {
        $this->isSMS = $isSMS;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bindcardRequest_0';
    }


}
