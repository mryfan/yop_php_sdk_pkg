<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class WechatConfigAdd0Request extends BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $tradeAuthDirList;
    /**
     * @var string
     */
    private $appIdList;

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
     * @return WechatConfigAdd0Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
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
     * @return WechatConfigAdd0Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets tradeAuthDirList
     *
     * @return string
     */
    public function getTradeAuthDirList()
    {
        return $this->tradeAuthDirList;
    }

    /**
     * Sets tradeAuthDirList
     *
     * @param string $tradeAuthDirList
     * @return WechatConfigAdd0Request
     */
    public function setTradeAuthDirList($tradeAuthDirList)
    {
        $this->tradeAuthDirList = $tradeAuthDirList;
        return $this;
    }
    /**
     * Gets appIdList
     *
     * @return string
     */
    public function getAppIdList()
    {
        return $this->appIdList;
    }

    /**
     * Sets appIdList
     *
     * @param string $appIdList
     * @return WechatConfigAdd0Request
     */
    public function setAppIdList($appIdList)
    {
        $this->appIdList = $appIdList;
        return $this;
    }

    public static function getOperationId()
    {
        return 'wechatConfigAdd_0';
    }


}
