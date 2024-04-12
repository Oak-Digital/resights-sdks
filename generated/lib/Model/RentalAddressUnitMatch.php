<?php
/**
 * RentalAddressUnitMatch
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
 * RentalAddressUnitMatch Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RentalAddressUnitMatch implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RentalAddressUnitMatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'mixed',
        'name' => 'mixed',
        'type' => '\OpenAPI\Client\Model\AddressTypeEnum',
        'category' => '\OpenAPI\Client\Model\AddressMatchCategoryEnum',
        'street_name' => 'mixed',
        'house_number' => 'mixed',
        'floor' => 'mixed',
        'door' => 'mixed',
        'zip_code' => 'mixed',
        'zip_name' => 'mixed',
        'municipality_code' => 'mixed',
        'lng' => 'mixed',
        'lat' => 'mixed',
        'units' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'category' => null,
        'street_name' => null,
        'house_number' => null,
        'floor' => null,
        'door' => null,
        'zip_code' => null,
        'zip_name' => null,
        'municipality_code' => null,
        'lng' => null,
        'lat' => null,
        'units' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'name' => true,
		'type' => false,
		'category' => false,
		'street_name' => true,
		'house_number' => true,
		'floor' => true,
		'door' => true,
		'zip_code' => true,
		'zip_name' => true,
		'municipality_code' => true,
		'lng' => true,
		'lat' => true,
		'units' => true
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
        'id' => 'id',
        'name' => 'name',
        'type' => 'type',
        'category' => 'category',
        'street_name' => 'street_name',
        'house_number' => 'house_number',
        'floor' => 'floor',
        'door' => 'door',
        'zip_code' => 'zip_code',
        'zip_name' => 'zip_name',
        'municipality_code' => 'municipality_code',
        'lng' => 'lng',
        'lat' => 'lat',
        'units' => 'units'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'category' => 'setCategory',
        'street_name' => 'setStreetName',
        'house_number' => 'setHouseNumber',
        'floor' => 'setFloor',
        'door' => 'setDoor',
        'zip_code' => 'setZipCode',
        'zip_name' => 'setZipName',
        'municipality_code' => 'setMunicipalityCode',
        'lng' => 'setLng',
        'lat' => 'setLat',
        'units' => 'setUnits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'category' => 'getCategory',
        'street_name' => 'getStreetName',
        'house_number' => 'getHouseNumber',
        'floor' => 'getFloor',
        'door' => 'getDoor',
        'zip_code' => 'getZipCode',
        'zip_name' => 'getZipName',
        'municipality_code' => 'getMunicipalityCode',
        'lng' => 'getLng',
        'lat' => 'getLat',
        'units' => 'getUnits'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('street_name', $data ?? [], null);
        $this->setIfExists('house_number', $data ?? [], null);
        $this->setIfExists('floor', $data ?? [], null);
        $this->setIfExists('door', $data ?? [], null);
        $this->setIfExists('zip_code', $data ?? [], null);
        $this->setIfExists('zip_name', $data ?? [], null);
        $this->setIfExists('municipality_code', $data ?? [], null);
        $this->setIfExists('lng', $data ?? [], null);
        $this->setIfExists('lat', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['street_name'] === null) {
            $invalidProperties[] = "'street_name' can't be null";
        }
        if ($this->container['house_number'] === null) {
            $invalidProperties[] = "'house_number' can't be null";
        }
        if ($this->container['zip_code'] === null) {
            $invalidProperties[] = "'zip_code' can't be null";
        }
        if ($this->container['zip_name'] === null) {
            $invalidProperties[] = "'zip_name' can't be null";
        }
        if ($this->container['lng'] === null) {
            $invalidProperties[] = "'lng' can't be null";
        }
        if ($this->container['lat'] === null) {
            $invalidProperties[] = "'lat' can't be null";
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
     * Gets id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param mixed $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param mixed $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\AddressTypeEnum
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\AddressTypeEnum $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \OpenAPI\Client\Model\AddressMatchCategoryEnum
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \OpenAPI\Client\Model\AddressMatchCategoryEnum $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return mixed
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param mixed $street_name street_name
     *
     * @return self
     */
    public function setStreetName($street_name)
    {
        if (is_null($street_name)) {
            array_push($this->openAPINullablesSetToNull, 'street_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('street_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return mixed
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param mixed $house_number house_number
     *
     * @return self
     */
    public function setHouseNumber($house_number)
    {
        if (is_null($house_number)) {
            array_push($this->openAPINullablesSetToNull, 'house_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('house_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets floor
     *
     * @return mixed|null
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor
     *
     * @param mixed|null $floor floor
     *
     * @return self
     */
    public function setFloor($floor)
    {
        if (is_null($floor)) {
            array_push($this->openAPINullablesSetToNull, 'floor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('floor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['floor'] = $floor;

        return $this;
    }

    /**
     * Gets door
     *
     * @return mixed|null
     */
    public function getDoor()
    {
        return $this->container['door'];
    }

    /**
     * Sets door
     *
     * @param mixed|null $door door
     *
     * @return self
     */
    public function setDoor($door)
    {
        if (is_null($door)) {
            array_push($this->openAPINullablesSetToNull, 'door');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('door', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['door'] = $door;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param mixed $zip_code zip_code
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        if (is_null($zip_code)) {
            array_push($this->openAPINullablesSetToNull, 'zip_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('zip_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets zip_name
     *
     * @return mixed
     */
    public function getZipName()
    {
        return $this->container['zip_name'];
    }

    /**
     * Sets zip_name
     *
     * @param mixed $zip_name zip_name
     *
     * @return self
     */
    public function setZipName($zip_name)
    {
        if (is_null($zip_name)) {
            array_push($this->openAPINullablesSetToNull, 'zip_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('zip_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['zip_name'] = $zip_name;

        return $this;
    }

    /**
     * Gets municipality_code
     *
     * @return mixed|null
     */
    public function getMunicipalityCode()
    {
        return $this->container['municipality_code'];
    }

    /**
     * Sets municipality_code
     *
     * @param mixed|null $municipality_code municipality_code
     *
     * @return self
     */
    public function setMunicipalityCode($municipality_code)
    {
        if (is_null($municipality_code)) {
            array_push($this->openAPINullablesSetToNull, 'municipality_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('municipality_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['municipality_code'] = $municipality_code;

        return $this;
    }

    /**
     * Gets lng
     *
     * @return mixed
     */
    public function getLng()
    {
        return $this->container['lng'];
    }

    /**
     * Sets lng
     *
     * @param mixed $lng lng
     *
     * @return self
     */
    public function setLng($lng)
    {
        if (is_null($lng)) {
            array_push($this->openAPINullablesSetToNull, 'lng');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lng', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lng'] = $lng;

        return $this;
    }

    /**
     * Gets lat
     *
     * @return mixed
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param mixed $lat lat
     *
     * @return self
     */
    public function setLat($lat)
    {
        if (is_null($lat)) {
            array_push($this->openAPINullablesSetToNull, 'lat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lat', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets units
     *
     * @return mixed|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param mixed|null $units units
     *
     * @return self
     */
    public function setUnits($units)
    {
        if (is_null($units)) {
            array_push($this->openAPINullablesSetToNull, 'units');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('units', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['units'] = $units;

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


