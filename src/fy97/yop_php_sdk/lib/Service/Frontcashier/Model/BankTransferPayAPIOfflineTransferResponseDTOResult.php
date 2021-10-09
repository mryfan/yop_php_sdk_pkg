<?php
/**
 * BankTransferPayAPIOfflineTransferResponseDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Fy\Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 前置收银台
 *
 * <p>前置收银台</p>
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use \ArrayAccess;
use Fy\Yeepay\Yop\Sdk\Model\ModelInterface;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * BankTransferPayAPIOfflineTransferResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Fy\Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankTransferPayAPIOfflineTransferResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BankTransferPayAPIOfflineTransferResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'msg' => 'string',
        'payStatus' => 'string',
        'remitRemarkCode' => 'string',
        'receiveName' => 'string',
        'receiveAccountNo' => 'string',
        'accountName' => 'string',
        'areaInfo' => 'string',
        'amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'msg' => null,
        'payStatus' => null,
        'remitRemarkCode' => null,
        'receiveName' => null,
        'receiveAccountNo' => null,
        'accountName' => null,
        'areaInfo' => null,
        'amount' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'code' => 'code',
        'msg' => 'msg',
        'payStatus' => 'payStatus',
        'remitRemarkCode' => 'remitRemarkCode',
        'receiveName' => 'receiveName',
        'receiveAccountNo' => 'receiveAccountNo',
        'accountName' => 'accountName',
        'areaInfo' => 'areaInfo',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'msg' => 'setMsg',
        'payStatus' => 'setPayStatus',
        'remitRemarkCode' => 'setRemitRemarkCode',
        'receiveName' => 'setReceiveName',
        'receiveAccountNo' => 'setReceiveAccountNo',
        'accountName' => 'setAccountName',
        'areaInfo' => 'setAreaInfo',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'msg' => 'getMsg',
        'payStatus' => 'getPayStatus',
        'remitRemarkCode' => 'getRemitRemarkCode',
        'receiveName' => 'getReceiveName',
        'receiveAccountNo' => 'getReceiveAccountNo',
        'accountName' => 'getAccountName',
        'areaInfo' => 'getAreaInfo',
        'amount' => 'getAmount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
        $this->container['payStatus'] = isset($data['payStatus']) ? $data['payStatus'] : null;
        $this->container['remitRemarkCode'] = isset($data['remitRemarkCode']) ? $data['remitRemarkCode'] : null;
        $this->container['receiveName'] = isset($data['receiveName']) ? $data['receiveName'] : null;
        $this->container['receiveAccountNo'] = isset($data['receiveAccountNo']) ? $data['receiveAccountNo'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['areaInfo'] = isset($data['areaInfo']) ? $data['areaInfo'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 返回码
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets msg
     *
     * @return string
     */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param string $msg 返回信息
     *
     * @return $this
     */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;

        return $this;
    }

    /**
     * Gets payStatus
     *
     * @return string
     */
    public function getPayStatus()
    {
        return $this->container['payStatus'];
    }

    /**
     * Sets payStatus
     *
     * @param string $payStatus 支付状态
     *
     * @return $this
     */
    public function setPayStatus($payStatus)
    {
        $this->container['payStatus'] = $payStatus;

        return $this;
    }

    /**
     * Gets remitRemarkCode
     *
     * @return string
     */
    public function getRemitRemarkCode()
    {
        return $this->container['remitRemarkCode'];
    }

    /**
     * Sets remitRemarkCode
     *
     * @param string $remitRemarkCode 附言
     *
     * @return $this
     */
    public function setRemitRemarkCode($remitRemarkCode)
    {
        $this->container['remitRemarkCode'] = $remitRemarkCode;

        return $this;
    }

    /**
     * Gets receiveName
     *
     * @return string
     */
    public function getReceiveName()
    {
        return $this->container['receiveName'];
    }

    /**
     * Sets receiveName
     *
     * @param string $receiveName 收款方名称
     *
     * @return $this
     */
    public function setReceiveName($receiveName)
    {
        $this->container['receiveName'] = $receiveName;

        return $this;
    }

    /**
     * Gets receiveAccountNo
     *
     * @return string
     */
    public function getReceiveAccountNo()
    {
        return $this->container['receiveAccountNo'];
    }

    /**
     * Sets receiveAccountNo
     *
     * @param string $receiveAccountNo 收款方账号
     *
     * @return $this
     */
    public function setReceiveAccountNo($receiveAccountNo)
    {
        $this->container['receiveAccountNo'] = $receiveAccountNo;

        return $this;
    }

    /**
     * Gets accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
     * Sets accountName
     *
     * @param string $accountName 收款方开户行
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets areaInfo
     *
     * @return string
     */
    public function getAreaInfo()
    {
        return $this->container['areaInfo'];
    }

    /**
     * Sets areaInfo
     *
     * @param string $areaInfo 省市／地区
     *
     * @return $this
     */
    public function setAreaInfo($areaInfo)
    {
        $this->container['areaInfo'] = $areaInfo;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount 转账金额
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


