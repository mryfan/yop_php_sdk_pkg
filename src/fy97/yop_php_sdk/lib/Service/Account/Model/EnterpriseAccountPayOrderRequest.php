<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class EnterpriseAccountPayOrderRequest extends BaseRequest
{
    /**
     * @var 
     */
    private $body;

    /**
     * Gets body
     *
     * @return 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets body
     *
     * @param  $body
     * @return EnterpriseAccountPayOrderRequest
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public static function getOperationId()
    {
        return 'enterpriseAccountPayOrder';
    }


}
