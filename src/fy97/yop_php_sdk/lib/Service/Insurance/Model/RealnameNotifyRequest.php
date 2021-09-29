<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Insurance\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class RealnameNotifyRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $queryNo;
    /**
     * @var string
     */
    private $customrNo;
    /**
     * @var string
     */
    private $code;
    /**
     * @var string
     */
    private $amount;
    /**
     * @var string
     */
    private $cardNo;
    /**
     * @var string
     */
    private $tradeNo;
    /**
     * @var string
     */
    private $date;
    /**
     * @var string
     */
    private $systemNo;
    /**
     * @var string
     */
    private $terminalNo;
    /**
     * @var string
     */
    private $paNo;
    /**
     * @var string
     */
    private $validateSequenceNo;
    /**
     * @var string
     */
    private $requestType;
    /**
     * @var string
     */
    private $warrantBank;
    /**
     * @var string
     */
    private $aesKey;
    /**
     * @var string
     */
    private $user;
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $prodId;
    /**
     * @var string
     */
    private $reqType;
    /**
     * @var string
     */
    private $sysId;
    /**
     * @var string
     */
    private $requestUrl;
    /**
     * @var string
     */
    private $macKey;
    /**
     * @var string
     */
    private $environment;
    /**
     * @var string
     */
    private $tpdu;

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
     * @return RealnameNotifyRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets queryNo
     *
     * @return string
     */
    public function getQueryNo()
    {
        return $this->queryNo;
    }

    /**
     * Sets queryNo
     *
     * @param string $queryNo
     * @return RealnameNotifyRequest
     */
    public function setQueryNo($queryNo)
    {
        $this->queryNo = $queryNo;
        return $this;
    }
    /**
     * Gets customrNo
     *
     * @return string
     */
    public function getCustomrNo()
    {
        return $this->customrNo;
    }

    /**
     * Sets customrNo
     *
     * @param string $customrNo
     * @return RealnameNotifyRequest
     */
    public function setCustomrNo($customrNo)
    {
        $this->customrNo = $customrNo;
        return $this;
    }
    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets code
     *
     * @param string $code
     * @return RealnameNotifyRequest
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets amount
     *
     * @param string $amount
     * @return RealnameNotifyRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
     * @return RealnameNotifyRequest
     */
    public function setCardNo($cardNo)
    {
        $this->cardNo = $cardNo;
        return $this;
    }
    /**
     * Gets tradeNo
     *
     * @return string
     */
    public function getTradeNo()
    {
        return $this->tradeNo;
    }

    /**
     * Sets tradeNo
     *
     * @param string $tradeNo
     * @return RealnameNotifyRequest
     */
    public function setTradeNo($tradeNo)
    {
        $this->tradeNo = $tradeNo;
        return $this;
    }
    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets date
     *
     * @param string $date
     * @return RealnameNotifyRequest
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
    /**
     * Gets systemNo
     *
     * @return string
     */
    public function getSystemNo()
    {
        return $this->systemNo;
    }

    /**
     * Sets systemNo
     *
     * @param string $systemNo
     * @return RealnameNotifyRequest
     */
    public function setSystemNo($systemNo)
    {
        $this->systemNo = $systemNo;
        return $this;
    }
    /**
     * Gets terminalNo
     *
     * @return string
     */
    public function getTerminalNo()
    {
        return $this->terminalNo;
    }

    /**
     * Sets terminalNo
     *
     * @param string $terminalNo
     * @return RealnameNotifyRequest
     */
    public function setTerminalNo($terminalNo)
    {
        $this->terminalNo = $terminalNo;
        return $this;
    }
    /**
     * Gets paNo
     *
     * @return string
     */
    public function getPaNo()
    {
        return $this->paNo;
    }

    /**
     * Sets paNo
     *
     * @param string $paNo
     * @return RealnameNotifyRequest
     */
    public function setPaNo($paNo)
    {
        $this->paNo = $paNo;
        return $this;
    }
    /**
     * Gets validateSequenceNo
     *
     * @return string
     */
    public function getValidateSequenceNo()
    {
        return $this->validateSequenceNo;
    }

    /**
     * Sets validateSequenceNo
     *
     * @param string $validateSequenceNo
     * @return RealnameNotifyRequest
     */
    public function setValidateSequenceNo($validateSequenceNo)
    {
        $this->validateSequenceNo = $validateSequenceNo;
        return $this;
    }
    /**
     * Gets requestType
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Sets requestType
     *
     * @param string $requestType
     * @return RealnameNotifyRequest
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
        return $this;
    }
    /**
     * Gets warrantBank
     *
     * @return string
     */
    public function getWarrantBank()
    {
        return $this->warrantBank;
    }

    /**
     * Sets warrantBank
     *
     * @param string $warrantBank
     * @return RealnameNotifyRequest
     */
    public function setWarrantBank($warrantBank)
    {
        $this->warrantBank = $warrantBank;
        return $this;
    }
    /**
     * Gets aesKey
     *
     * @return string
     */
    public function getAesKey()
    {
        return $this->aesKey;
    }

    /**
     * Sets aesKey
     *
     * @param string $aesKey
     * @return RealnameNotifyRequest
     */
    public function setAesKey($aesKey)
    {
        $this->aesKey = $aesKey;
        return $this;
    }
    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets user
     *
     * @param string $user
     * @return RealnameNotifyRequest
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets password
     *
     * @param string $password
     * @return RealnameNotifyRequest
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    /**
     * Gets prodId
     *
     * @return string
     */
    public function getProdId()
    {
        return $this->prodId;
    }

    /**
     * Sets prodId
     *
     * @param string $prodId
     * @return RealnameNotifyRequest
     */
    public function setProdId($prodId)
    {
        $this->prodId = $prodId;
        return $this;
    }
    /**
     * Gets reqType
     *
     * @return string
     */
    public function getReqType()
    {
        return $this->reqType;
    }

    /**
     * Sets reqType
     *
     * @param string $reqType
     * @return RealnameNotifyRequest
     */
    public function setReqType($reqType)
    {
        $this->reqType = $reqType;
        return $this;
    }
    /**
     * Gets sysId
     *
     * @return string
     */
    public function getSysId()
    {
        return $this->sysId;
    }

    /**
     * Sets sysId
     *
     * @param string $sysId
     * @return RealnameNotifyRequest
     */
    public function setSysId($sysId)
    {
        $this->sysId = $sysId;
        return $this;
    }
    /**
     * Gets requestUrl
     *
     * @return string
     */
    public function getRequestUrl()
    {
        return $this->requestUrl;
    }

    /**
     * Sets requestUrl
     *
     * @param string $requestUrl
     * @return RealnameNotifyRequest
     */
    public function setRequestUrl($requestUrl)
    {
        $this->requestUrl = $requestUrl;
        return $this;
    }
    /**
     * Gets macKey
     *
     * @return string
     */
    public function getMacKey()
    {
        return $this->macKey;
    }

    /**
     * Sets macKey
     *
     * @param string $macKey
     * @return RealnameNotifyRequest
     */
    public function setMacKey($macKey)
    {
        $this->macKey = $macKey;
        return $this;
    }
    /**
     * Gets environment
     *
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Sets environment
     *
     * @param string $environment
     * @return RealnameNotifyRequest
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
        return $this;
    }
    /**
     * Gets tpdu
     *
     * @return string
     */
    public function getTpdu()
    {
        return $this->tpdu;
    }

    /**
     * Sets tpdu
     *
     * @param string $tpdu
     * @return RealnameNotifyRequest
     */
    public function setTpdu($tpdu)
    {
        $this->tpdu = $tpdu;
        return $this;
    }

    public static function getOperationId()
    {
        return 'realnameNotify';
    }


}
