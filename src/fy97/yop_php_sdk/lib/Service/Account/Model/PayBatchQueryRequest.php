<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class PayBatchQueryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $batchNo;

    /**
     * Gets batchNo
     *
     * @return string
     */
    public function getBatchNo()
    {
        return $this->batchNo;
    }

    /**
     * Sets batchNo
     *
     * @param string $batchNo
     * @return PayBatchQueryRequest
     */
    public function setBatchNo($batchNo)
    {
        $this->batchNo = $batchNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'payBatchQuery';
    }


}
