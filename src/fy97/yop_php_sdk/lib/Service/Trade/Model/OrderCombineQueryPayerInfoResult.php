<?php
/**
 * OrderCombineQueryPayerInfoResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Fy\Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 标准交易
 *
 * <p>名称（中文）：新交易下单接口<br />名称（英文，xx.war）：opr-hessian.war<br />简介：合单支付下单与标准收款内部下单接口合并<br />wiki文档地址：http://wiki.yeepay.com/pages/viewpage.action?pageId=122095805(4.新api分组相关接口规划)<br />预计项目上线时间：2020年6月9日<br />归属/拟申请的sp编码（可选）：opr<br />期望api分组编码、名称（可选）：trade(标准交易)<br />涉及的接口：申请下单、订单查询、申请退款、退款查询</p>
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

namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;

use \ArrayAccess;
use Fy\Yeepay\Yop\Sdk\Model\ModelInterface;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * OrderCombineQueryPayerInfoResult Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Fy\Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderCombineQueryPayerInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderCombineQueryPayerInfoResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bankId' => 'string',
        'accountName' => 'string',
        'bankCardNo' => 'string',
        'mobilePhoneNo' => 'string',
        'cardType' => 'string',
        'userID' => 'string',
        'unionID' => 'string',
        'buyerLogonId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bankId' => null,
        'accountName' => null,
        'bankCardNo' => null,
        'mobilePhoneNo' => null,
        'cardType' => null,
        'userID' => null,
        'unionID' => null,
        'buyerLogonId' => null
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
        'bankId' => 'bankId',
        'accountName' => 'accountName',
        'bankCardNo' => 'bankCardNo',
        'mobilePhoneNo' => 'mobilePhoneNo',
        'cardType' => 'cardType',
        'userID' => 'userID',
        'unionID' => 'unionID',
        'buyerLogonId' => 'buyerLogonId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bankId' => 'setBankId',
        'accountName' => 'setAccountName',
        'bankCardNo' => 'setBankCardNo',
        'mobilePhoneNo' => 'setMobilePhoneNo',
        'cardType' => 'setCardType',
        'userID' => 'setUserID',
        'unionID' => 'setUnionID',
        'buyerLogonId' => 'setBuyerLogonId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bankId' => 'getBankId',
        'accountName' => 'getAccountName',
        'bankCardNo' => 'getBankCardNo',
        'mobilePhoneNo' => 'getMobilePhoneNo',
        'cardType' => 'getCardType',
        'userID' => 'getUserID',
        'unionID' => 'getUnionID',
        'buyerLogonId' => 'getBuyerLogonId'
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
        $this->container['bankId'] = isset($data['bankId']) ? $data['bankId'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['bankCardNo'] = isset($data['bankCardNo']) ? $data['bankCardNo'] : null;
        $this->container['mobilePhoneNo'] = isset($data['mobilePhoneNo']) ? $data['mobilePhoneNo'] : null;
        $this->container['cardType'] = isset($data['cardType']) ? $data['cardType'] : null;
        $this->container['userID'] = isset($data['userID']) ? $data['userID'] : null;
        $this->container['unionID'] = isset($data['unionID']) ? $data['unionID'] : null;
        $this->container['buyerLogonId'] = isset($data['buyerLogonId']) ? $data['buyerLogonId'] : null;
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
     * Gets bankId
     *
     * @return string
     */
    public function getBankId()
    {
        return $this->container['bankId'];
    }

    /**
     * Sets bankId
     *
     * @param string $bankId 银行编号
     *
     * @return $this
     */
    public function setBankId($bankId)
    {
        $this->container['bankId'] = $bankId;

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
     * @param string $accountName 账户名称
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->container['bankCardNo'];
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo 银行卡号
     *
     * @return $this
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->container['bankCardNo'] = $bankCardNo;

        return $this;
    }

    /**
     * Gets mobilePhoneNo
     *
     * @return string
     */
    public function getMobilePhoneNo()
    {
        return $this->container['mobilePhoneNo'];
    }

    /**
     * Sets mobilePhoneNo
     *
     * @param string $mobilePhoneNo 手机号
     *
     * @return $this
     */
    public function setMobilePhoneNo($mobilePhoneNo)
    {
        $this->container['mobilePhoneNo'] = $mobilePhoneNo;

        return $this;
    }

    /**
     * Gets cardType
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['cardType'];
    }

    /**
     * Sets cardType
     *
     * @param string $cardType 卡类型
     *
     * @return $this
     */
    public function setCardType($cardType)
    {
        $this->container['cardType'] = $cardType;

        return $this;
    }

    /**
     * Gets userID
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->container['userID'];
    }

    /**
     * Sets userID
     *
     * @param string $userID 用户id
     *
     * @return $this
     */
    public function setUserID($userID)
    {
        $this->container['userID'] = $userID;

        return $this;
    }

    /**
     * Gets unionID
     *
     * @return string
     */
    public function getUnionID()
    {
        return $this->container['unionID'];
    }

    /**
     * Sets unionID
     *
     * @param string $unionID unionID
     *
     * @return $this
     */
    public function setUnionID($unionID)
    {
        $this->container['unionID'] = $unionID;

        return $this;
    }

    /**
     * Gets buyerLogonId
     *
     * @return string
     */
    public function getBuyerLogonId()
    {
        return $this->container['buyerLogonId'];
    }

    /**
     * Sets buyerLogonId
     *
     * @param string $buyerLogonId 支付宝买家登录账号
     *
     * @return $this
     */
    public function setBuyerLogonId($buyerLogonId)
    {
        $this->container['buyerLogonId'] = $buyerLogonId;

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


