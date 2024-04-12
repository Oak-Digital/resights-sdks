<?php
/**
 * BBRFloorAggs
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
 * BBRFloorAggs Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BBRFloorAggs implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BBRFloorAggs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'area_unused_attic' => 'mixed',
        'eta020_area_total_floor' => 'mixed',
        'eta021_area_utilized_attic' => 'mixed',
        'eta022_area_basement' => 'mixed',
        'eta022_area_basement_calculated' => 'mixed',
        'eta023_area_legal_residential_basement' => 'mixed',
        'eta026_basement_commercial' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'area_unused_attic' => null,
        'eta020_area_total_floor' => null,
        'eta021_area_utilized_attic' => null,
        'eta022_area_basement' => null,
        'eta022_area_basement_calculated' => null,
        'eta023_area_legal_residential_basement' => null,
        'eta026_basement_commercial' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'area_unused_attic' => true,
		'eta020_area_total_floor' => true,
		'eta021_area_utilized_attic' => true,
		'eta022_area_basement' => true,
		'eta022_area_basement_calculated' => true,
		'eta023_area_legal_residential_basement' => true,
		'eta026_basement_commercial' => true
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
        'area_unused_attic' => 'area_unused_attic',
        'eta020_area_total_floor' => 'eta020_area_total_floor',
        'eta021_area_utilized_attic' => 'eta021_area_utilized_attic',
        'eta022_area_basement' => 'eta022_area_basement',
        'eta022_area_basement_calculated' => 'eta022_area_basement_calculated',
        'eta023_area_legal_residential_basement' => 'eta023_area_legal_residential_basement',
        'eta026_basement_commercial' => 'eta026_basement_commercial'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area_unused_attic' => 'setAreaUnusedAttic',
        'eta020_area_total_floor' => 'setEta020AreaTotalFloor',
        'eta021_area_utilized_attic' => 'setEta021AreaUtilizedAttic',
        'eta022_area_basement' => 'setEta022AreaBasement',
        'eta022_area_basement_calculated' => 'setEta022AreaBasementCalculated',
        'eta023_area_legal_residential_basement' => 'setEta023AreaLegalResidentialBasement',
        'eta026_basement_commercial' => 'setEta026BasementCommercial'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area_unused_attic' => 'getAreaUnusedAttic',
        'eta020_area_total_floor' => 'getEta020AreaTotalFloor',
        'eta021_area_utilized_attic' => 'getEta021AreaUtilizedAttic',
        'eta022_area_basement' => 'getEta022AreaBasement',
        'eta022_area_basement_calculated' => 'getEta022AreaBasementCalculated',
        'eta023_area_legal_residential_basement' => 'getEta023AreaLegalResidentialBasement',
        'eta026_basement_commercial' => 'getEta026BasementCommercial'
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
        $this->setIfExists('area_unused_attic', $data ?? [], null);
        $this->setIfExists('eta020_area_total_floor', $data ?? [], null);
        $this->setIfExists('eta021_area_utilized_attic', $data ?? [], null);
        $this->setIfExists('eta022_area_basement', $data ?? [], null);
        $this->setIfExists('eta022_area_basement_calculated', $data ?? [], null);
        $this->setIfExists('eta023_area_legal_residential_basement', $data ?? [], null);
        $this->setIfExists('eta026_basement_commercial', $data ?? [], null);
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
     * Gets area_unused_attic
     *
     * @return mixed|null
     */
    public function getAreaUnusedAttic()
    {
        return $this->container['area_unused_attic'];
    }

    /**
     * Sets area_unused_attic
     *
     * @param mixed|null $area_unused_attic A derived sum from `eta020_area_total_floor` - `eta021_area_utilized_attic` when `eta025_floor_type == 1`
     *
     * @return self
     */
    public function setAreaUnusedAttic($area_unused_attic)
    {
        if (is_null($area_unused_attic)) {
            array_push($this->openAPINullablesSetToNull, 'area_unused_attic');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('area_unused_attic', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['area_unused_attic'] = $area_unused_attic;

        return $this;
    }

    /**
     * Gets eta020_area_total_floor
     *
     * @return mixed|null
     */
    public function getEta020AreaTotalFloor()
    {
        return $this->container['eta020_area_total_floor'];
    }

    /**
     * Sets eta020_area_total_floor
     *
     * @param mixed|null $eta020_area_total_floor eta020_area_total_floor
     *
     * @return self
     */
    public function setEta020AreaTotalFloor($eta020_area_total_floor)
    {
        if (is_null($eta020_area_total_floor)) {
            array_push($this->openAPINullablesSetToNull, 'eta020_area_total_floor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eta020_area_total_floor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eta020_area_total_floor'] = $eta020_area_total_floor;

        return $this;
    }

    /**
     * Gets eta021_area_utilized_attic
     *
     * @return mixed|null
     */
    public function getEta021AreaUtilizedAttic()
    {
        return $this->container['eta021_area_utilized_attic'];
    }

    /**
     * Sets eta021_area_utilized_attic
     *
     * @param mixed|null $eta021_area_utilized_attic eta021_area_utilized_attic
     *
     * @return self
     */
    public function setEta021AreaUtilizedAttic($eta021_area_utilized_attic)
    {
        if (is_null($eta021_area_utilized_attic)) {
            array_push($this->openAPINullablesSetToNull, 'eta021_area_utilized_attic');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eta021_area_utilized_attic', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eta021_area_utilized_attic'] = $eta021_area_utilized_attic;

        return $this;
    }

    /**
     * Gets eta022_area_basement
     *
     * @return mixed|null
     */
    public function getEta022AreaBasement()
    {
        return $this->container['eta022_area_basement'];
    }

    /**
     * Sets eta022_area_basement
     *
     * @param mixed|null $eta022_area_basement eta022_area_basement
     *
     * @return self
     */
    public function setEta022AreaBasement($eta022_area_basement)
    {
        if (is_null($eta022_area_basement)) {
            array_push($this->openAPINullablesSetToNull, 'eta022_area_basement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eta022_area_basement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eta022_area_basement'] = $eta022_area_basement;

        return $this;
    }

    /**
     * Gets eta022_area_basement_calculated
     *
     * @return mixed|null
     */
    public function getEta022AreaBasementCalculated()
    {
        return $this->container['eta022_area_basement_calculated'];
    }

    /**
     * Sets eta022_area_basement_calculated
     *
     * @param mixed|null $eta022_area_basement_calculated A derived sum by Resights from `eta020_area_total_floor` when `eta006_floor_name_building` starts with `k`
     *
     * @return self
     */
    public function setEta022AreaBasementCalculated($eta022_area_basement_calculated)
    {
        if (is_null($eta022_area_basement_calculated)) {
            array_push($this->openAPINullablesSetToNull, 'eta022_area_basement_calculated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eta022_area_basement_calculated', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eta022_area_basement_calculated'] = $eta022_area_basement_calculated;

        return $this;
    }

    /**
     * Gets eta023_area_legal_residential_basement
     *
     * @return mixed|null
     */
    public function getEta023AreaLegalResidentialBasement()
    {
        return $this->container['eta023_area_legal_residential_basement'];
    }

    /**
     * Sets eta023_area_legal_residential_basement
     *
     * @param mixed|null $eta023_area_legal_residential_basement eta023_area_legal_residential_basement
     *
     * @return self
     */
    public function setEta023AreaLegalResidentialBasement($eta023_area_legal_residential_basement)
    {
        if (is_null($eta023_area_legal_residential_basement)) {
            array_push($this->openAPINullablesSetToNull, 'eta023_area_legal_residential_basement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eta023_area_legal_residential_basement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eta023_area_legal_residential_basement'] = $eta023_area_legal_residential_basement;

        return $this;
    }

    /**
     * Gets eta026_basement_commercial
     *
     * @return mixed|null
     */
    public function getEta026BasementCommercial()
    {
        return $this->container['eta026_basement_commercial'];
    }

    /**
     * Sets eta026_basement_commercial
     *
     * @param mixed|null $eta026_basement_commercial eta026_basement_commercial
     *
     * @return self
     */
    public function setEta026BasementCommercial($eta026_basement_commercial)
    {
        if (is_null($eta026_basement_commercial)) {
            array_push($this->openAPINullablesSetToNull, 'eta026_basement_commercial');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eta026_basement_commercial', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eta026_basement_commercial'] = $eta026_basement_commercial;

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

