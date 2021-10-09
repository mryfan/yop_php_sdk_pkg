<?php
/**
 * WechatConfigQueryConfigMerchantDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Fy\Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 聚合支付
 *
 * <p>提供聚合支付相关服务（支付下单、公众号配置等功能</p>
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

namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;

use \ArrayAccess;
use Fy\Yeepay\Yop\Sdk\Model\ModelInterface;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * WechatConfigQueryConfigMerchantDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Fy\Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatConfigQueryConfigMerchantDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WechatConfigQueryConfigMerchantDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reportMerchantNo' => 'string',
        'tradeAuthDirList' => '\Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryTradeAuthDirDTOResult[]',
        'appIdList' => '\Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryAppIdConfigDetailResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reportMerchantNo' => null,
        'tradeAuthDirList' => null,
        'appIdList' => null
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
        'reportMerchantNo' => 'reportMerchantNo',
        'tradeAuthDirList' => 'tradeAuthDirList',
        'appIdList' => 'appIdList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reportMerchantNo' => 'setReportMerchantNo',
        'tradeAuthDirList' => 'setTradeAuthDirList',
        'appIdList' => 'setAppIdList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reportMerchantNo' => 'getReportMerchantNo',
        'tradeAuthDirList' => 'getTradeAuthDirList',
        'appIdList' => 'getAppIdList'
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
        $this->container['reportMerchantNo'] = isset($data['reportMerchantNo']) ? $data['reportMerchantNo'] : null;
        $this->container['tradeAuthDirList'] = isset($data['tradeAuthDirList']) ? $data['tradeAuthDirList'] : null;
        $this->container['appIdList'] = isset($data['appIdList']) ? $data['appIdList'] : null;
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
     * Gets reportMerchantNo
     *
     * @return string
     */
    public function getReportMerchantNo()
    {
        return $this->container['reportMerchantNo'];
    }

    /**
     * Sets reportMerchantNo
     *
     * @param string $reportMerchantNo 报备商户号
     *
     * @return $this
     */
    public function setReportMerchantNo($reportMerchantNo)
    {
        $this->container['reportMerchantNo'] = $reportMerchantNo;

        return $this;
    }

    /**
     * Gets tradeAuthDirList
     *
     * @return \Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryTradeAuthDirDTOResult[]
     */
    public function getTradeAuthDirList()
    {
        return $this->container['tradeAuthDirList'];
    }

    /**
     * Sets tradeAuthDirList
     *
     * @param \Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryTradeAuthDirDTOResult[] $tradeAuthDirList 支付授权目录列表
     *
     * @return $this
     */
    public function setTradeAuthDirList($tradeAuthDirList)
    {
        $this->container['tradeAuthDirList'] = $tradeAuthDirList;

        return $this;
    }

    /**
     * Gets appIdList
     *
     * @return \Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryAppIdConfigDetailResult[]
     */
    public function getAppIdList()
    {
        return $this->container['appIdList'];
    }

    /**
     * Sets appIdList
     *
     * @param \Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryAppIdConfigDetailResult[] $appIdList 支付appId配置列表
     *
     * @return $this
     */
    public function setAppIdList($appIdList)
    {
        $this->container['appIdList'] = $appIdList;

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


