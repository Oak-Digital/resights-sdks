<?php
/**
 * CVRAddress
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
 * CVRAddress Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CVRAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CVRAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'mixed',
        'name' => 'mixed',
        'period_from' => 'mixed',
        'period_to' => 'mixed',
        'last_updated' => 'mixed',
        'last_validated' => 'mixed',
        'text' => 'mixed',
        'co_name' => 'mixed',
        'street_code' => 'mixed',
        'street_name' => 'mixed',
        'house_number_from' => 'mixed',
        'house_number_to' => 'mixed',
        'letter_from' => 'mixed',
        'letter_to' => 'mixed',
        'floor' => 'mixed',
        'door' => 'mixed',
        'zip_name' => 'mixed',
        'zip_code' => 'mixed',
        'municipality_name' => 'mixed',
        'municipality_code' => 'mixed',
        'city_name' => 'mixed',
        'post_box' => 'mixed',
        'country_code' => 'mixed'
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
        'period_from' => 'date',
        'period_to' => 'date',
        'last_updated' => 'date-time',
        'last_validated' => 'date-time',
        'text' => null,
        'co_name' => null,
        'street_code' => null,
        'street_name' => null,
        'house_number_from' => null,
        'house_number_to' => null,
        'letter_from' => null,
        'letter_to' => null,
        'floor' => null,
        'door' => null,
        'zip_name' => null,
        'zip_code' => null,
        'municipality_name' => null,
        'municipality_code' => null,
        'city_name' => null,
        'post_box' => null,
        'country_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'name' => true,
		'period_from' => true,
		'period_to' => true,
		'last_updated' => true,
		'last_validated' => true,
		'text' => true,
		'co_name' => true,
		'street_code' => true,
		'street_name' => true,
		'house_number_from' => true,
		'house_number_to' => true,
		'letter_from' => true,
		'letter_to' => true,
		'floor' => true,
		'door' => true,
		'zip_name' => true,
		'zip_code' => true,
		'municipality_name' => true,
		'municipality_code' => true,
		'city_name' => true,
		'post_box' => true,
		'country_code' => true
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
        'period_from' => 'period_from',
        'period_to' => 'period_to',
        'last_updated' => 'last_updated',
        'last_validated' => 'last_validated',
        'text' => 'text',
        'co_name' => 'co_name',
        'street_code' => 'street_code',
        'street_name' => 'street_name',
        'house_number_from' => 'house_number_from',
        'house_number_to' => 'house_number_to',
        'letter_from' => 'letter_from',
        'letter_to' => 'letter_to',
        'floor' => 'floor',
        'door' => 'door',
        'zip_name' => 'zip_name',
        'zip_code' => 'zip_code',
        'municipality_name' => 'municipality_name',
        'municipality_code' => 'municipality_code',
        'city_name' => 'city_name',
        'post_box' => 'post_box',
        'country_code' => 'country_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'period_from' => 'setPeriodFrom',
        'period_to' => 'setPeriodTo',
        'last_updated' => 'setLastUpdated',
        'last_validated' => 'setLastValidated',
        'text' => 'setText',
        'co_name' => 'setCoName',
        'street_code' => 'setStreetCode',
        'street_name' => 'setStreetName',
        'house_number_from' => 'setHouseNumberFrom',
        'house_number_to' => 'setHouseNumberTo',
        'letter_from' => 'setLetterFrom',
        'letter_to' => 'setLetterTo',
        'floor' => 'setFloor',
        'door' => 'setDoor',
        'zip_name' => 'setZipName',
        'zip_code' => 'setZipCode',
        'municipality_name' => 'setMunicipalityName',
        'municipality_code' => 'setMunicipalityCode',
        'city_name' => 'setCityName',
        'post_box' => 'setPostBox',
        'country_code' => 'setCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'period_from' => 'getPeriodFrom',
        'period_to' => 'getPeriodTo',
        'last_updated' => 'getLastUpdated',
        'last_validated' => 'getLastValidated',
        'text' => 'getText',
        'co_name' => 'getCoName',
        'street_code' => 'getStreetCode',
        'street_name' => 'getStreetName',
        'house_number_from' => 'getHouseNumberFrom',
        'house_number_to' => 'getHouseNumberTo',
        'letter_from' => 'getLetterFrom',
        'letter_to' => 'getLetterTo',
        'floor' => 'getFloor',
        'door' => 'getDoor',
        'zip_name' => 'getZipName',
        'zip_code' => 'getZipCode',
        'municipality_name' => 'getMunicipalityName',
        'municipality_code' => 'getMunicipalityCode',
        'city_name' => 'getCityName',
        'post_box' => 'getPostBox',
        'country_code' => 'getCountryCode'
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
        $this->setIfExists('period_from', $data ?? [], null);
        $this->setIfExists('period_to', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
        $this->setIfExists('last_validated', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('co_name', $data ?? [], null);
        $this->setIfExists('street_code', $data ?? [], null);
        $this->setIfExists('street_name', $data ?? [], null);
        $this->setIfExists('house_number_from', $data ?? [], null);
        $this->setIfExists('house_number_to', $data ?? [], null);
        $this->setIfExists('letter_from', $data ?? [], null);
        $this->setIfExists('letter_to', $data ?? [], null);
        $this->setIfExists('floor', $data ?? [], null);
        $this->setIfExists('door', $data ?? [], null);
        $this->setIfExists('zip_name', $data ?? [], null);
        $this->setIfExists('zip_code', $data ?? [], null);
        $this->setIfExists('municipality_name', $data ?? [], null);
        $this->setIfExists('municipality_code', $data ?? [], null);
        $this->setIfExists('city_name', $data ?? [], null);
        $this->setIfExists('post_box', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
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

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
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
     * @return mixed|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param mixed|null $id id
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
     * @return mixed|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param mixed|null $name name
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
     * Gets period_from
     *
     * @return mixed|null
     */
    public function getPeriodFrom()
    {
        return $this->container['period_from'];
    }

    /**
     * Sets period_from
     *
     * @param mixed|null $period_from period_from
     *
     * @return self
     */
    public function setPeriodFrom($period_from)
    {
        if (is_null($period_from)) {
            array_push($this->openAPINullablesSetToNull, 'period_from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('period_from', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['period_from'] = $period_from;

        return $this;
    }

    /**
     * Gets period_to
     *
     * @return mixed|null
     */
    public function getPeriodTo()
    {
        return $this->container['period_to'];
    }

    /**
     * Sets period_to
     *
     * @param mixed|null $period_to period_to
     *
     * @return self
     */
    public function setPeriodTo($period_to)
    {
        if (is_null($period_to)) {
            array_push($this->openAPINullablesSetToNull, 'period_to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('period_to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['period_to'] = $period_to;

        return $this;
    }

    /**
     * Gets last_updated
     *
     * @return mixed|null
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param mixed|null $last_updated last_updated
     *
     * @return self
     */
    public function setLastUpdated($last_updated)
    {
        if (is_null($last_updated)) {
            array_push($this->openAPINullablesSetToNull, 'last_updated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_updated', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets last_validated
     *
     * @return mixed|null
     */
    public function getLastValidated()
    {
        return $this->container['last_validated'];
    }

    /**
     * Sets last_validated
     *
     * @param mixed|null $last_validated last_validated
     *
     * @return self
     */
    public function setLastValidated($last_validated)
    {
        if (is_null($last_validated)) {
            array_push($this->openAPINullablesSetToNull, 'last_validated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_validated', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_validated'] = $last_validated;

        return $this;
    }

    /**
     * Gets text
     *
     * @return mixed|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param mixed|null $text text
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            array_push($this->openAPINullablesSetToNull, 'text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets co_name
     *
     * @return mixed|null
     */
    public function getCoName()
    {
        return $this->container['co_name'];
    }

    /**
     * Sets co_name
     *
     * @param mixed|null $co_name co_name
     *
     * @return self
     */
    public function setCoName($co_name)
    {
        if (is_null($co_name)) {
            array_push($this->openAPINullablesSetToNull, 'co_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('co_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['co_name'] = $co_name;

        return $this;
    }

    /**
     * Gets street_code
     *
     * @return mixed|null
     */
    public function getStreetCode()
    {
        return $this->container['street_code'];
    }

    /**
     * Sets street_code
     *
     * @param mixed|null $street_code street_code
     *
     * @return self
     */
    public function setStreetCode($street_code)
    {
        if (is_null($street_code)) {
            array_push($this->openAPINullablesSetToNull, 'street_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('street_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['street_code'] = $street_code;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return mixed|null
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param mixed|null $street_name street_name
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
     * Gets house_number_from
     *
     * @return mixed|null
     */
    public function getHouseNumberFrom()
    {
        return $this->container['house_number_from'];
    }

    /**
     * Sets house_number_from
     *
     * @param mixed|null $house_number_from house_number_from
     *
     * @return self
     */
    public function setHouseNumberFrom($house_number_from)
    {
        if (is_null($house_number_from)) {
            array_push($this->openAPINullablesSetToNull, 'house_number_from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('house_number_from', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['house_number_from'] = $house_number_from;

        return $this;
    }

    /**
     * Gets house_number_to
     *
     * @return mixed|null
     */
    public function getHouseNumberTo()
    {
        return $this->container['house_number_to'];
    }

    /**
     * Sets house_number_to
     *
     * @param mixed|null $house_number_to house_number_to
     *
     * @return self
     */
    public function setHouseNumberTo($house_number_to)
    {
        if (is_null($house_number_to)) {
            array_push($this->openAPINullablesSetToNull, 'house_number_to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('house_number_to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['house_number_to'] = $house_number_to;

        return $this;
    }

    /**
     * Gets letter_from
     *
     * @return mixed|null
     */
    public function getLetterFrom()
    {
        return $this->container['letter_from'];
    }

    /**
     * Sets letter_from
     *
     * @param mixed|null $letter_from letter_from
     *
     * @return self
     */
    public function setLetterFrom($letter_from)
    {
        if (is_null($letter_from)) {
            array_push($this->openAPINullablesSetToNull, 'letter_from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('letter_from', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['letter_from'] = $letter_from;

        return $this;
    }

    /**
     * Gets letter_to
     *
     * @return mixed|null
     */
    public function getLetterTo()
    {
        return $this->container['letter_to'];
    }

    /**
     * Sets letter_to
     *
     * @param mixed|null $letter_to letter_to
     *
     * @return self
     */
    public function setLetterTo($letter_to)
    {
        if (is_null($letter_to)) {
            array_push($this->openAPINullablesSetToNull, 'letter_to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('letter_to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['letter_to'] = $letter_to;

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
     * Gets zip_name
     *
     * @return mixed|null
     */
    public function getZipName()
    {
        return $this->container['zip_name'];
    }

    /**
     * Sets zip_name
     *
     * @param mixed|null $zip_name zip_name
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
     * Gets zip_code
     *
     * @return mixed|null
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param mixed|null $zip_code zip_code
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
     * Gets municipality_name
     *
     * @return mixed|null
     */
    public function getMunicipalityName()
    {
        return $this->container['municipality_name'];
    }

    /**
     * Sets municipality_name
     *
     * @param mixed|null $municipality_name municipality_name
     *
     * @return self
     */
    public function setMunicipalityName($municipality_name)
    {
        if (is_null($municipality_name)) {
            array_push($this->openAPINullablesSetToNull, 'municipality_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('municipality_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['municipality_name'] = $municipality_name;

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
     * Gets city_name
     *
     * @return mixed|null
     */
    public function getCityName()
    {
        return $this->container['city_name'];
    }

    /**
     * Sets city_name
     *
     * @param mixed|null $city_name city_name
     *
     * @return self
     */
    public function setCityName($city_name)
    {
        if (is_null($city_name)) {
            array_push($this->openAPINullablesSetToNull, 'city_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['city_name'] = $city_name;

        return $this;
    }

    /**
     * Gets post_box
     *
     * @return mixed|null
     */
    public function getPostBox()
    {
        return $this->container['post_box'];
    }

    /**
     * Sets post_box
     *
     * @param mixed|null $post_box post_box
     *
     * @return self
     */
    public function setPostBox($post_box)
    {
        if (is_null($post_box)) {
            array_push($this->openAPINullablesSetToNull, 'post_box');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('post_box', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['post_box'] = $post_box;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param mixed $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            array_push($this->openAPINullablesSetToNull, 'country_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['country_code'] = $country_code;

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


