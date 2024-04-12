<?php
/**
 * UsageAggs
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Resights API
 *
 * <img src=\"static/resights/resights-logo.png\" alt=\"Resights Logo\" style=\"position: absolute; top: 52px; right: 36px\" align=\"right\" width=\"240\"> <a href=\"/docs\">Swagger</a> | <a href=\"/redoc\">Redoc</a> <br> <br> <div><b>Welcome API 👋</b></div> <br>  <br>
 *
 * The version of the OpenAPI document: 2.0
 * Contact: mikkel@resights.dk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * UsageAggs Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UsageAggs implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UsageAggs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'usage_code' => 'mixed',
        'count' => '\OpenAPI\Client\Model\Bound',
        'area' => '\OpenAPI\Client\Model\Bound',
        'share' => '\OpenAPI\Client\Model\Bound',
        'count_bs' => '\OpenAPI\Client\Model\Bound',
        'area_bs' => '\OpenAPI\Client\Model\Bound',
        'share_bs' => '\OpenAPI\Client\Model\Bound'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'usage_code' => null,
        'count' => null,
        'area' => null,
        'share' => null,
        'count_bs' => null,
        'area_bs' => null,
        'share_bs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'usage_code' => true,
		'count' => false,
		'area' => false,
		'share' => false,
		'count_bs' => false,
		'area_bs' => false,
		'share_bs' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'usage_code' => 'usage_code',
        'count' => 'count',
        'area' => 'area',
        'share' => 'share',
        'count_bs' => 'count_bs',
        'area_bs' => 'area_bs',
        'share_bs' => 'share_bs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'usage_code' => 'setUsageCode',
        'count' => 'setCount',
        'area' => 'setArea',
        'share' => 'setShare',
        'count_bs' => 'setCountBs',
        'area_bs' => 'setAreaBs',
        'share_bs' => 'setShareBs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'usage_code' => 'getUsageCode',
        'count' => 'getCount',
        'area' => 'getArea',
        'share' => 'getShare',
        'count_bs' => 'getCountBs',
        'area_bs' => 'getAreaBs',
        'share_bs' => 'getShareBs'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('usage_code', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('area', $data ?? [], null);
        $this->setIfExists('share', $data ?? [], null);
        $this->setIfExists('count_bs', $data ?? [], null);
        $this->setIfExists('area_bs', $data ?? [], null);
        $this->setIfExists('share_bs', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['area'] === null) {
            $invalidProperties[] = "'area' can't be null";
        }
        if ($this->container['share'] === null) {
            $invalidProperties[] = "'share' can't be null";
        }
        if ($this->container['count_bs'] === null) {
            $invalidProperties[] = "'count_bs' can't be null";
        }
        if ($this->container['area_bs'] === null) {
            $invalidProperties[] = "'area_bs' can't be null";
        }
        if ($this->container['share_bs'] === null) {
            $invalidProperties[] = "'share_bs' can't be null";
        }
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
     * Gets usage_code
     *
     * @return mixed|null
     */
    public function getUsageCode()
    {
        return $this->container['usage_code'];
    }

    /**
     * Sets usage_code
     *
     * @param mixed|null $usage_code usage_code
     *
     * @return self
     */
    public function setUsageCode($usage_code)
    {
        if (is_null($usage_code)) {
            array_push($this->openAPINullablesSetToNull, 'usage_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('usage_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['usage_code'] = $usage_code;

        return $this;
    }

    /**
     * Gets count
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param \OpenAPI\Client\Model\Bound $count count
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets area
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param \OpenAPI\Client\Model\Bound $area area
     *
     * @return self
     */
    public function setArea($area)
    {
        if (is_null($area)) {
            throw new \InvalidArgumentException('non-nullable area cannot be null');
        }
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets share
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
     * Sets share
     *
     * @param \OpenAPI\Client\Model\Bound $share share
     *
     * @return self
     */
    public function setShare($share)
    {
        if (is_null($share)) {
            throw new \InvalidArgumentException('non-nullable share cannot be null');
        }
        $this->container['share'] = $share;

        return $this;
    }

    /**
     * Gets count_bs
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getCountBs()
    {
        return $this->container['count_bs'];
    }

    /**
     * Sets count_bs
     *
     * @param \OpenAPI\Client\Model\Bound $count_bs count_bs
     *
     * @return self
     */
    public function setCountBs($count_bs)
    {
        if (is_null($count_bs)) {
            throw new \InvalidArgumentException('non-nullable count_bs cannot be null');
        }
        $this->container['count_bs'] = $count_bs;

        return $this;
    }

    /**
     * Gets area_bs
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getAreaBs()
    {
        return $this->container['area_bs'];
    }

    /**
     * Sets area_bs
     *
     * @param \OpenAPI\Client\Model\Bound $area_bs area_bs
     *
     * @return self
     */
    public function setAreaBs($area_bs)
    {
        if (is_null($area_bs)) {
            throw new \InvalidArgumentException('non-nullable area_bs cannot be null');
        }
        $this->container['area_bs'] = $area_bs;

        return $this;
    }

    /**
     * Gets share_bs
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getShareBs()
    {
        return $this->container['share_bs'];
    }

    /**
     * Sets share_bs
     *
     * @param \OpenAPI\Client\Model\Bound $share_bs share_bs
     *
     * @return self
     */
    public function setShareBs($share_bs)
    {
        if (is_null($share_bs)) {
            throw new \InvalidArgumentException('non-nullable share_bs cannot be null');
        }
        $this->container['share_bs'] = $share_bs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

