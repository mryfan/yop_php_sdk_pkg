<?php
/**
 * YjzfBindpayrequestAPIYJZFBindPaymentResponseDTOResult
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
 * OpenAPI spec version: 1.0.0
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
 * YjzfBindpayrequestAPIYJZFBindPaymentResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Fy\Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class YjzfBindpayrequestAPIYJZFBindPaymentResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'YjzfBindpayrequestAPIYJZFBindPaymentResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'merchantNo' => 'string',
        'token' => 'string',
        'recordId' => 'string',
        'verifyCodeType' => 'string',
        'needItemScene' => 'string',
        'needItems' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'merchantNo' => null,
        'token' => null,
        'recordId' => null,
        'verifyCodeType' => null,
        'needItemScene' => null,
        'needItems' => null
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
        'message' => 'message',
        'merchantNo' => 'merchantNo',
        'token' => 'token',
        'recordId' => 'recordId',
        'verifyCodeType' => 'verifyCodeType',
        'needItemScene' => 'needItemScene',
        'needItems' => 'needItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'merchantNo' => 'setMerchantNo',
        'token' => 'setToken',
        'recordId' => 'setRecordId',
        'verifyCodeType' => 'setVerifyCodeType',
        'needItemScene' => 'setNeedItemScene',
        'needItems' => 'setNeedItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'merchantNo' => 'getMerchantNo',
        'token' => 'getToken',
        'recordId' => 'getRecordId',
        'verifyCodeType' => 'getVerifyCodeType',
        'needItemScene' => 'getNeedItemScene',
        'needItems' => 'getNeedItems'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['verifyCodeType'] = isset($data['verifyCodeType']) ? $data['verifyCodeType'] : null;
        $this->container['needItemScene'] = isset($data['needItemScene']) ? $data['needItemScene'] : null;
        $this->container['needItems'] = isset($data['needItems']) ? $data['needItems'] : null;
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
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 返回信息
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->container['merchantNo'];
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo 商编
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token 订单token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets recordId
     *
     * @return string
     */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
     * Sets recordId
     *
     * @param string $recordId 支付记录流水号
     *
     * @return $this
     */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;

        return $this;
    }

    /**
     * Gets verifyCodeType
     *
     * @return string
     */
    public function getVerifyCodeType()
    {
        return $this->container['verifyCodeType'];
    }

    /**
     * Sets verifyCodeType
     *
     * @param string $verifyCodeType 验证码类型
     *
     * @return $this
     */
    public function setVerifyCodeType($verifyCodeType)
    {
        $this->container['verifyCodeType'] = $verifyCodeType;

        return $this;
    }

    /**
     * Gets needItemScene
     *
     * @return string
     */
    public function getNeedItemScene()
    {
        return $this->container['needItemScene'];
    }

    /**
     * Sets needItemScene
     *
     * @param string $needItemScene 补充银行密码场景
     *
     * @return $this
     */
    public function setNeedItemScene($needItemScene)
    {
        $this->container['needItemScene'] = $needItemScene;

        return $this;
    }

    /**
     * Gets needItems
     *
     * @return string
     */
    public function getNeedItems()
    {
        return $this->container['needItems'];
    }

    /**
     * Sets needItems
     *
     * @param string $needItems 需补充项名称的集合
     *
     * @return $this
     */
    public function setNeedItems($needItems)
    {
        $this->container['needItems'] = $needItems;

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


