<?php
/**
 * BBRUnitAggsBs
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
 * BBRUnitAggsBs Class Doc Comment
 *
 * @category Class
 * @description Aggregations for units that are under (de/con)struction (status &lt;&gt; 6)
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BBRUnitAggsBs implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BBRUnitAggsBs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'count' => 'mixed',
        'residential_units' => 'mixed',
        'commercial_units' => 'mixed',
        'unit_area' => 'mixed',
        'enh026_area_unit_total' => 'mixed',
        'enh027_area_residential' => 'mixed',
        'enh028_area_commercial' => 'mixed',
        'enh031_number_rooms' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'count' => null,
        'residential_units' => null,
        'commercial_units' => null,
        'unit_area' => null,
        'enh026_area_unit_total' => null,
        'enh027_area_residential' => null,
        'enh028_area_commercial' => null,
        'enh031_number_rooms' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'count' => true,
		'residential_units' => true,
		'commercial_units' => true,
		'unit_area' => true,
		'enh026_area_unit_total' => true,
		'enh027_area_residential' => true,
		'enh028_area_commercial' => true,
		'enh031_number_rooms' => true
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
        'count' => 'count',
        'residential_units' => 'residential_units',
        'commercial_units' => 'commercial_units',
        'unit_area' => 'unit_area',
        'enh026_area_unit_total' => 'enh026_area_unit_total',
        'enh027_area_residential' => 'enh027_area_residential',
        'enh028_area_commercial' => 'enh028_area_commercial',
        'enh031_number_rooms' => 'enh031_number_rooms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'residential_units' => 'setResidentialUnits',
        'commercial_units' => 'setCommercialUnits',
        'unit_area' => 'setUnitArea',
        'enh026_area_unit_total' => 'setEnh026AreaUnitTotal',
        'enh027_area_residential' => 'setEnh027AreaResidential',
        'enh028_area_commercial' => 'setEnh028AreaCommercial',
        'enh031_number_rooms' => 'setEnh031NumberRooms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'residential_units' => 'getResidentialUnits',
        'commercial_units' => 'getCommercialUnits',
        'unit_area' => 'getUnitArea',
        'enh026_area_unit_total' => 'getEnh026AreaUnitTotal',
        'enh027_area_residential' => 'getEnh027AreaResidential',
        'enh028_area_commercial' => 'getEnh028AreaCommercial',
        'enh031_number_rooms' => 'getEnh031NumberRooms'
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
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('residential_units', $data ?? [], null);
        $this->setIfExists('commercial_units', $data ?? [], null);
        $this->setIfExists('unit_area', $data ?? [], null);
        $this->setIfExists('enh026_area_unit_total', $data ?? [], null);
        $this->setIfExists('enh027_area_residential', $data ?? [], null);
        $this->setIfExists('enh028_area_commercial', $data ?? [], null);
        $this->setIfExists('enh031_number_rooms', $data ?? [], null);
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
     * Gets count
     *
     * @return mixed|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param mixed|null $count count
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            array_push($this->openAPINullablesSetToNull, 'count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets residential_units
     *
     * @return mixed|null
     */
    public function getResidentialUnits()
    {
        return $this->container['residential_units'];
    }

    /**
     * Sets residential_units
     *
     * @param mixed|null $residential_units residential_units
     *
     * @return self
     */
    public function setResidentialUnits($residential_units)
    {
        if (is_null($residential_units)) {
            array_push($this->openAPINullablesSetToNull, 'residential_units');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('residential_units', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['residential_units'] = $residential_units;

        return $this;
    }

    /**
     * Gets commercial_units
     *
     * @return mixed|null
     */
    public function getCommercialUnits()
    {
        return $this->container['commercial_units'];
    }

    /**
     * Sets commercial_units
     *
     * @param mixed|null $commercial_units commercial_units
     *
     * @return self
     */
    public function setCommercialUnits($commercial_units)
    {
        if (is_null($commercial_units)) {
            array_push($this->openAPINullablesSetToNull, 'commercial_units');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('commercial_units', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['commercial_units'] = $commercial_units;

        return $this;
    }

    /**
     * Gets unit_area
     *
     * @return mixed|null
     */
    public function getUnitArea()
    {
        return $this->container['unit_area'];
    }

    /**
     * Sets unit_area
     *
     * @param mixed|null $unit_area unit_area
     *
     * @return self
     */
    public function setUnitArea($unit_area)
    {
        if (is_null($unit_area)) {
            array_push($this->openAPINullablesSetToNull, 'unit_area');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unit_area', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unit_area'] = $unit_area;

        return $this;
    }

    /**
     * Gets enh026_area_unit_total
     *
     * @return mixed|null
     */
    public function getEnh026AreaUnitTotal()
    {
        return $this->container['enh026_area_unit_total'];
    }

    /**
     * Sets enh026_area_unit_total
     *
     * @param mixed|null $enh026_area_unit_total enh026_area_unit_total
     *
     * @return self
     */
    public function setEnh026AreaUnitTotal($enh026_area_unit_total)
    {
        if (is_null($enh026_area_unit_total)) {
            array_push($this->openAPINullablesSetToNull, 'enh026_area_unit_total');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enh026_area_unit_total', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enh026_area_unit_total'] = $enh026_area_unit_total;

        return $this;
    }

    /**
     * Gets enh027_area_residential
     *
     * @return mixed|null
     */
    public function getEnh027AreaResidential()
    {
        return $this->container['enh027_area_residential'];
    }

    /**
     * Sets enh027_area_residential
     *
     * @param mixed|null $enh027_area_residential enh027_area_residential
     *
     * @return self
     */
    public function setEnh027AreaResidential($enh027_area_residential)
    {
        if (is_null($enh027_area_residential)) {
            array_push($this->openAPINullablesSetToNull, 'enh027_area_residential');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enh027_area_residential', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enh027_area_residential'] = $enh027_area_residential;

        return $this;
    }

    /**
     * Gets enh028_area_commercial
     *
     * @return mixed|null
     */
    public function getEnh028AreaCommercial()
    {
        return $this->container['enh028_area_commercial'];
    }

    /**
     * Sets enh028_area_commercial
     *
     * @param mixed|null $enh028_area_commercial enh028_area_commercial
     *
     * @return self
     */
    public function setEnh028AreaCommercial($enh028_area_commercial)
    {
        if (is_null($enh028_area_commercial)) {
            array_push($this->openAPINullablesSetToNull, 'enh028_area_commercial');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enh028_area_commercial', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enh028_area_commercial'] = $enh028_area_commercial;

        return $this;
    }

    /**
     * Gets enh031_number_rooms
     *
     * @return mixed|null
     */
    public function getEnh031NumberRooms()
    {
        return $this->container['enh031_number_rooms'];
    }

    /**
     * Sets enh031_number_rooms
     *
     * @param mixed|null $enh031_number_rooms enh031_number_rooms
     *
     * @return self
     */
    public function setEnh031NumberRooms($enh031_number_rooms)
    {
        if (is_null($enh031_number_rooms)) {
            array_push($this->openAPINullablesSetToNull, 'enh031_number_rooms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enh031_number_rooms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enh031_number_rooms'] = $enh031_number_rooms;

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


