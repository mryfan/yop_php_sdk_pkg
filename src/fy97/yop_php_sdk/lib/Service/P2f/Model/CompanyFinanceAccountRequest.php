<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class CompanyFinanceAccountRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $compName;
    /**
     * @var string
     */
    private $compNo;
    /**
     * @var string
     */
    private $customerCertExpiry;
    /**
     * @var string
     */
    private $regSerialNoExpired;
    /**
     * @var string
     */
    private $compTelephone;
    /**
     * @var string
     */
    private $orgSMSMobile;
    /**
     * @var string
     */
    private $uniteCreditCode;
    /**
     * @var string
     */
    private $compEmail;
    /**
     * @var string
     */
    private $compAddr;
    /**
     * @var string
     */
    private $zipCode;
    /**
     * @var string
     */
    private $bizScope;
    /**
     * @var string
     */
    private $legalName;
    /**
     * @var string
     */
    private $legalIdNo;
    /**
     * @var string
     */
    private $legalStartDate;
    /**
     * @var string
     */
    private $legalExpiredDate;
    /**
     * @var string
     */
    private $legalMobile;
    /**
     * @var string
     */
    private $bankCode;
    /**
     * @var string
     */
    private $bankName;
    /**
     * @var string
     */
    private $bankCardNo;
    /**
     * @var string
     */
    private $bindType;
    /**
     * @var string
     */
    private $bindAcctBranch;
    /**
     * @var string
     */
    private $threeInOneFlag;
    /**
     * @var string
     */
    private $uniteCreditCodePath;
    /**
     * @var string
     */
    private $frontPhotoPath;
    /**
     * @var string
     */
    private $backPhotoPath;
    /**
     * @var string
     */
    private $openAcctPermitCodePath;
    /**
     * @var string
     */
    private $channelCode;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets compName
     *
     * @return string
     */
    public function getCompName()
    {
        return $this->compName;
    }

    /**
     * Sets compName
     *
     * @param string $compName
     * @return CompanyFinanceAccountRequest
     */
    public function setCompName($compName)
    {
        $this->compName = $compName;
        return $this;
    }
    /**
     * Gets compNo
     *
     * @return string
     */
    public function getCompNo()
    {
        return $this->compNo;
    }

    /**
     * Sets compNo
     *
     * @param string $compNo
     * @return CompanyFinanceAccountRequest
     */
    public function setCompNo($compNo)
    {
        $this->compNo = $compNo;
        return $this;
    }
    /**
     * Gets customerCertExpiry
     *
     * @return string
     */
    public function getCustomerCertExpiry()
    {
        return $this->customerCertExpiry;
    }

    /**
     * Sets customerCertExpiry
     *
     * @param string $customerCertExpiry
     * @return CompanyFinanceAccountRequest
     */
    public function setCustomerCertExpiry($customerCertExpiry)
    {
        $this->customerCertExpiry = $customerCertExpiry;
        return $this;
    }
    /**
     * Gets regSerialNoExpired
     *
     * @return string
     */
    public function getRegSerialNoExpired()
    {
        return $this->regSerialNoExpired;
    }

    /**
     * Sets regSerialNoExpired
     *
     * @param string $regSerialNoExpired
     * @return CompanyFinanceAccountRequest
     */
    public function setRegSerialNoExpired($regSerialNoExpired)
    {
        $this->regSerialNoExpired = $regSerialNoExpired;
        return $this;
    }
    /**
     * Gets compTelephone
     *
     * @return string
     */
    public function getCompTelephone()
    {
        return $this->compTelephone;
    }

    /**
     * Sets compTelephone
     *
     * @param string $compTelephone
     * @return CompanyFinanceAccountRequest
     */
    public function setCompTelephone($compTelephone)
    {
        $this->compTelephone = $compTelephone;
        return $this;
    }
    /**
     * Gets orgSMSMobile
     *
     * @return string
     */
    public function getOrgSMSMobile()
    {
        return $this->orgSMSMobile;
    }

    /**
     * Sets orgSMSMobile
     *
     * @param string $orgSMSMobile
     * @return CompanyFinanceAccountRequest
     */
    public function setOrgSMSMobile($orgSMSMobile)
    {
        $this->orgSMSMobile = $orgSMSMobile;
        return $this;
    }
    /**
     * Gets uniteCreditCode
     *
     * @return string
     */
    public function getUniteCreditCode()
    {
        return $this->uniteCreditCode;
    }

    /**
     * Sets uniteCreditCode
     *
     * @param string $uniteCreditCode
     * @return CompanyFinanceAccountRequest
     */
    public function setUniteCreditCode($uniteCreditCode)
    {
        $this->uniteCreditCode = $uniteCreditCode;
        return $this;
    }
    /**
     * Gets compEmail
     *
     * @return string
     */
    public function getCompEmail()
    {
        return $this->compEmail;
    }

    /**
     * Sets compEmail
     *
     * @param string $compEmail
     * @return CompanyFinanceAccountRequest
     */
    public function setCompEmail($compEmail)
    {
        $this->compEmail = $compEmail;
        return $this;
    }
    /**
     * Gets compAddr
     *
     * @return string
     */
    public function getCompAddr()
    {
        return $this->compAddr;
    }

    /**
     * Sets compAddr
     *
     * @param string $compAddr
     * @return CompanyFinanceAccountRequest
     */
    public function setCompAddr($compAddr)
    {
        $this->compAddr = $compAddr;
        return $this;
    }
    /**
     * Gets zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Sets zipCode
     *
     * @param string $zipCode
     * @return CompanyFinanceAccountRequest
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * Gets bizScope
     *
     * @return string
     */
    public function getBizScope()
    {
        return $this->bizScope;
    }

    /**
     * Sets bizScope
     *
     * @param string $bizScope
     * @return CompanyFinanceAccountRequest
     */
    public function setBizScope($bizScope)
    {
        $this->bizScope = $bizScope;
        return $this;
    }
    /**
     * Gets legalName
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    /**
     * Sets legalName
     *
     * @param string $legalName
     * @return CompanyFinanceAccountRequest
     */
    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;
        return $this;
    }
    /**
     * Gets legalIdNo
     *
     * @return string
     */
    public function getLegalIdNo()
    {
        return $this->legalIdNo;
    }

    /**
     * Sets legalIdNo
     *
     * @param string $legalIdNo
     * @return CompanyFinanceAccountRequest
     */
    public function setLegalIdNo($legalIdNo)
    {
        $this->legalIdNo = $legalIdNo;
        return $this;
    }
    /**
     * Gets legalStartDate
     *
     * @return string
     */
    public function getLegalStartDate()
    {
        return $this->legalStartDate;
    }

    /**
     * Sets legalStartDate
     *
     * @param string $legalStartDate
     * @return CompanyFinanceAccountRequest
     */
    public function setLegalStartDate($legalStartDate)
    {
        $this->legalStartDate = $legalStartDate;
        return $this;
    }
    /**
     * Gets legalExpiredDate
     *
     * @return string
     */
    public function getLegalExpiredDate()
    {
        return $this->legalExpiredDate;
    }

    /**
     * Sets legalExpiredDate
     *
     * @param string $legalExpiredDate
     * @return CompanyFinanceAccountRequest
     */
    public function setLegalExpiredDate($legalExpiredDate)
    {
        $this->legalExpiredDate = $legalExpiredDate;
        return $this;
    }
    /**
     * Gets legalMobile
     *
     * @return string
     */
    public function getLegalMobile()
    {
        return $this->legalMobile;
    }

    /**
     * Sets legalMobile
     *
     * @param string $legalMobile
     * @return CompanyFinanceAccountRequest
     */
    public function setLegalMobile($legalMobile)
    {
        $this->legalMobile = $legalMobile;
        return $this;
    }
    /**
     * Gets bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets bankCode
     *
     * @param string $bankCode
     * @return CompanyFinanceAccountRequest
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * Gets bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Sets bankName
     *
     * @param string $bankName
     * @return CompanyFinanceAccountRequest
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
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
     * @return CompanyFinanceAccountRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }
    /**
     * Gets bindType
     *
     * @return string
     */
    public function getBindType()
    {
        return $this->bindType;
    }

    /**
     * Sets bindType
     *
     * @param string $bindType
     * @return CompanyFinanceAccountRequest
     */
    public function setBindType($bindType)
    {
        $this->bindType = $bindType;
        return $this;
    }
    /**
     * Gets bindAcctBranch
     *
     * @return string
     */
    public function getBindAcctBranch()
    {
        return $this->bindAcctBranch;
    }

    /**
     * Sets bindAcctBranch
     *
     * @param string $bindAcctBranch
     * @return CompanyFinanceAccountRequest
     */
    public function setBindAcctBranch($bindAcctBranch)
    {
        $this->bindAcctBranch = $bindAcctBranch;
        return $this;
    }
    /**
     * Gets threeInOneFlag
     *
     * @return string
     */
    public function getThreeInOneFlag()
    {
        return $this->threeInOneFlag;
    }

    /**
     * Sets threeInOneFlag
     *
     * @param string $threeInOneFlag
     * @return CompanyFinanceAccountRequest
     */
    public function setThreeInOneFlag($threeInOneFlag)
    {
        $this->threeInOneFlag = $threeInOneFlag;
        return $this;
    }
    /**
     * Gets uniteCreditCodePath
     *
     * @return string
     */
    public function getUniteCreditCodePath()
    {
        return $this->uniteCreditCodePath;
    }

    /**
     * Sets uniteCreditCodePath
     *
     * @param string $uniteCreditCodePath
     * @return CompanyFinanceAccountRequest
     */
    public function setUniteCreditCodePath($uniteCreditCodePath)
    {
        $this->uniteCreditCodePath = $uniteCreditCodePath;
        return $this;
    }
    /**
     * Gets frontPhotoPath
     *
     * @return string
     */
    public function getFrontPhotoPath()
    {
        return $this->frontPhotoPath;
    }

    /**
     * Sets frontPhotoPath
     *
     * @param string $frontPhotoPath
     * @return CompanyFinanceAccountRequest
     */
    public function setFrontPhotoPath($frontPhotoPath)
    {
        $this->frontPhotoPath = $frontPhotoPath;
        return $this;
    }
    /**
     * Gets backPhotoPath
     *
     * @return string
     */
    public function getBackPhotoPath()
    {
        return $this->backPhotoPath;
    }

    /**
     * Sets backPhotoPath
     *
     * @param string $backPhotoPath
     * @return CompanyFinanceAccountRequest
     */
    public function setBackPhotoPath($backPhotoPath)
    {
        $this->backPhotoPath = $backPhotoPath;
        return $this;
    }
    /**
     * Gets openAcctPermitCodePath
     *
     * @return string
     */
    public function getOpenAcctPermitCodePath()
    {
        return $this->openAcctPermitCodePath;
    }

    /**
     * Sets openAcctPermitCodePath
     *
     * @param string $openAcctPermitCodePath
     * @return CompanyFinanceAccountRequest
     */
    public function setOpenAcctPermitCodePath($openAcctPermitCodePath)
    {
        $this->openAcctPermitCodePath = $openAcctPermitCodePath;
        return $this;
    }
    /**
     * Gets channelCode
     *
     * @return string
     */
    public function getChannelCode()
    {
        return $this->channelCode;
    }

    /**
     * Sets channelCode
     *
     * @param string $channelCode
     * @return CompanyFinanceAccountRequest
     */
    public function setChannelCode($channelCode)
    {
        $this->channelCode = $channelCode;
        return $this;
    }
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
     * @return CompanyFinanceAccountRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return CompanyFinanceAccountRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'companyFinanceAccount';
    }


}
