<?php
/**
 * TransactionStatsResponse
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
 * TransactionStatsResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionStatsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionStatsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'number_properties' => 'mixed',
        'number_buildings' => 'mixed',
        'number_units' => 'mixed',
        'number_lands' => 'mixed',
        'number_sellers' => 'mixed',
        'number_buyers' => 'mixed',
        'number_trades' => 'mixed',
        'trade_ids' => 'mixed',
        'factor' => 'mixed',
        'released_share' => 'mixed',
        'received_share' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'number_properties' => null,
        'number_buildings' => null,
        'number_units' => null,
        'number_lands' => null,
        'number_sellers' => null,
        'number_buyers' => null,
        'number_trades' => null,
        'trade_ids' => null,
        'factor' => null,
        'released_share' => null,
        'received_share' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'number_properties' => true,
		'number_buildings' => true,
		'number_units' => true,
		'number_lands' => true,
		'number_sellers' => true,
		'number_buyers' => true,
		'number_trades' => true,
		'trade_ids' => true,
		'factor' => true,
		'released_share' => true,
		'received_share' => true
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
        'number_properties' => 'number_properties',
        'number_buildings' => 'number_buildings',
        'number_units' => 'number_units',
        'number_lands' => 'number_lands',
        'number_sellers' => 'number_sellers',
        'number_buyers' => 'number_buyers',
        'number_trades' => 'number_trades',
        'trade_ids' => 'trade_ids',
        'factor' => 'factor',
        'released_share' => 'released_share',
        'received_share' => 'received_share'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number_properties' => 'setNumberProperties',
        'number_buildings' => 'setNumberBuildings',
        'number_units' => 'setNumberUnits',
        'number_lands' => 'setNumberLands',
        'number_sellers' => 'setNumberSellers',
        'number_buyers' => 'setNumberBuyers',
        'number_trades' => 'setNumberTrades',
        'trade_ids' => 'setTradeIds',
        'factor' => 'setFactor',
        'released_share' => 'setReleasedShare',
        'received_share' => 'setReceivedShare'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number_properties' => 'getNumberProperties',
        'number_buildings' => 'getNumberBuildings',
        'number_units' => 'getNumberUnits',
        'number_lands' => 'getNumberLands',
        'number_sellers' => 'getNumberSellers',
        'number_buyers' => 'getNumberBuyers',
        'number_trades' => 'getNumberTrades',
        'trade_ids' => 'getTradeIds',
        'factor' => 'getFactor',
        'released_share' => 'getReleasedShare',
        'received_share' => 'getReceivedShare'
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
        $this->setIfExists('number_properties', $data ?? [], null);
        $this->setIfExists('number_buildings', $data ?? [], null);
        $this->setIfExists('number_units', $data ?? [], null);
        $this->setIfExists('number_lands', $data ?? [], null);
        $this->setIfExists('number_sellers', $data ?? [], null);
        $this->setIfExists('number_buyers', $data ?? [], null);
        $this->setIfExists('number_trades', $data ?? [], null);
        $this->setIfExists('trade_ids', $data ?? [], null);
        $this->setIfExists('factor', $data ?? [], null);
        $this->setIfExists('released_share', $data ?? [], null);
        $this->setIfExists('received_share', $data ?? [], null);
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

        if ($this->container['number_properties'] === null) {
            $invalidProperties[] = "'number_properties' can't be null";
        }
        if ($this->container['number_buildings'] === null) {
            $invalidProperties[] = "'number_buildings' can't be null";
        }
        if ($this->container['number_units'] === null) {
            $invalidProperties[] = "'number_units' can't be null";
        }
        if ($this->container['number_lands'] === null) {
            $invalidProperties[] = "'number_lands' can't be null";
        }
        if ($this->container['number_sellers'] === null) {
            $invalidProperties[] = "'number_sellers' can't be null";
        }
        if ($this->container['number_buyers'] === null) {
            $invalidProperties[] = "'number_buyers' can't be null";
        }
        if ($this->container['number_trades'] === null) {
            $invalidProperties[] = "'number_trades' can't be null";
        }
        if ($this->container['trade_ids'] === null) {
            $invalidProperties[] = "'trade_ids' can't be null";
        }
        if ($this->container['factor'] === null) {
            $invalidProperties[] = "'factor' can't be null";
        }
        if ($this->container['released_share'] === null) {
            $invalidProperties[] = "'released_share' can't be null";
        }
        if ($this->container['received_share'] === null) {
            $invalidProperties[] = "'received_share' can't be null";
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
     * Gets number_properties
     *
     * @return mixed
     */
    public function getNumberProperties()
    {
        return $this->container['number_properties'];
    }

    /**
     * Sets number_properties
     *
     * @param mixed $number_properties number_properties
     *
     * @return self
     */
    public function setNumberProperties($number_properties)
    {
        if (is_null($number_properties)) {
            array_push($this->openAPINullablesSetToNull, 'number_properties');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_properties', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['number_properties'] = $number_properties;

        return $this;
    }

    /**
     * Gets number_buildings
     *
     * @return mixed
     */
    public function getNumberBuildings()
    {
        return $this->container['number_buildings'];
    }

    /**
     * Sets number_buildings
     *
     * @param mixed $number_buildings number_buildings
     *
     * @return self
     */
    public function setNumberBuildings($number_buildings)
    {
        if (is_null($number_buildings)) {
            array_push($this->openAPINullablesSetToNull, 'number_buildings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_buildings', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['number_buildings'] = $number_buildings;

        return $this;
    }

    /**
     * Gets number_units
     *
     * @return mixed
     */
    public function getNumberUnits()
    {
        return $this->container['number_units'];
    }

    /**
     * Sets number_units
     *
     * @param mixed $number_units number_units
     *
     * @return self
     */
    public function setNumberUnits($number_units)
    {
        if (is_null($number_units)) {
            array_push($this->openAPINullablesSetToNull, 'number_units');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_units', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['number_units'] = $number_units;

        return $this;
    }

    /**
     * Gets number_lands
     *
     * @return mixed
     */
    public function getNumberLands()
    {
        return $this->container['number_lands'];
    }

    /**
     * Sets number_lands
     *
     * @param mixed $number_lands number_lands
     *
     * @return self
     */
    public function setNumberLands($number_lands)
    {
        if (is_null($number_lands)) {
            array_push($this->openAPINullablesSetToNull, 'number_lands');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_lands', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['number_lands'] = $number_lands;

        return $this;
    }

    /**
     * Gets number_sellers
     *
     * @return mixed
     */
    public function getNumberSellers()
    {
        return $this->container['number_sellers'];
    }

    /**
     * Sets number_sellers
     *
     * @param mixed $number_sellers number_sellers
     *
     * @return self
     */
    public function setNumberSellers($number_sellers)
    {
        if (is_null($number_sellers)) {
            array_push($this->openAPINullablesSetToNull, 'number_sellers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_sellers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['number_sellers'] = $number_sellers;

        return $this;
    }

    /**
     * Gets number_buyers
     *
     * @return mixed
     */
    public function getNumberBuyers()
    {
        return $this->container['number_buyers'];
    }

    /**
     * Sets number_buyers
     *
     * @param mixed $number_buyers number_buyers
     *
     * @return self
     */
    public function setNumberBuyers($number_buyers)
    {
        if (is_null($number_buyers)) {
            array_push($this->openAPINullablesSetToNull, 'number_buyers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_buyers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['number_buyers'] = $number_buyers;

        return $this;
    }

    /**
     * Gets number_trades
     *
     * @return mixed
     */
    public function getNumberTrades()
    {
        return $this->container['number_trades'];
    }

    /**
     * Sets number_trades
     *
     * @param mixed $number_trades number_trades
     *
     * @return self
     */
    public function setNumberTrades($number_trades)
    {
        if (is_null($number_trades)) {
            array_push($this->openAPINullablesSetToNull, 'number_trades');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_trades', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['number_trades'] = $number_trades;

        return $this;
    }

    /**
     * Gets trade_ids
     *
     * @return mixed
     */
    public function getTradeIds()
    {
        return $this->container['trade_ids'];
    }

    /**
     * Sets trade_ids
     *
     * @param mixed $trade_ids trade_ids
     *
     * @return self
     */
    public function setTradeIds($trade_ids)
    {
        if (is_null($trade_ids)) {
            array_push($this->openAPINullablesSetToNull, 'trade_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trade_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trade_ids'] = $trade_ids;

        return $this;
    }

    /**
     * Gets factor
     *
     * @return mixed
     */
    public function getFactor()
    {
        return $this->container['factor'];
    }

    /**
     * Sets factor
     *
     * @param mixed $factor factor
     *
     * @return self
     */
    public function setFactor($factor)
    {
        if (is_null($factor)) {
            array_push($this->openAPINullablesSetToNull, 'factor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('factor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['factor'] = $factor;

        return $this;
    }

    /**
     * Gets released_share
     *
     * @return mixed
     */
    public function getReleasedShare()
    {
        return $this->container['released_share'];
    }

    /**
     * Sets released_share
     *
     * @param mixed $released_share released_share
     *
     * @return self
     */
    public function setReleasedShare($released_share)
    {
        if (is_null($released_share)) {
            array_push($this->openAPINullablesSetToNull, 'released_share');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('released_share', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['released_share'] = $released_share;

        return $this;
    }

    /**
     * Gets received_share
     *
     * @return mixed
     */
    public function getReceivedShare()
    {
        return $this->container['received_share'];
    }

    /**
     * Sets received_share
     *
     * @param mixed $received_share received_share
     *
     * @return self
     */
    public function setReceivedShare($received_share)
    {
        if (is_null($received_share)) {
            array_push($this->openAPINullablesSetToNull, 'received_share');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('received_share', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['received_share'] = $received_share;

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


