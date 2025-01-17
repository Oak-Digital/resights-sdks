<?php
/**
 * LoebetidNestedModel
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
 * LoebetidNestedModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoebetidNestedModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoebetidNestedModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'maksimal_loebetid_maaneder' => 'mixed',
        'loebetid_maaneder' => 'mixed',
        'fast_variabel_indikator' => '\OpenAPI\Client\Model\HaeftelseRenteEnum'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'maksimal_loebetid_maaneder' => null,
        'loebetid_maaneder' => null,
        'fast_variabel_indikator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'maksimal_loebetid_maaneder' => true,
		'loebetid_maaneder' => true,
		'fast_variabel_indikator' => false
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
        'maksimal_loebetid_maaneder' => 'MaksimalLoebetidMaaneder',
        'loebetid_maaneder' => 'LoebetidMaaneder',
        'fast_variabel_indikator' => 'FastVariabelIndikator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'maksimal_loebetid_maaneder' => 'setMaksimalLoebetidMaaneder',
        'loebetid_maaneder' => 'setLoebetidMaaneder',
        'fast_variabel_indikator' => 'setFastVariabelIndikator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'maksimal_loebetid_maaneder' => 'getMaksimalLoebetidMaaneder',
        'loebetid_maaneder' => 'getLoebetidMaaneder',
        'fast_variabel_indikator' => 'getFastVariabelIndikator'
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
        $this->setIfExists('maksimal_loebetid_maaneder', $data ?? [], null);
        $this->setIfExists('loebetid_maaneder', $data ?? [], null);
        $this->setIfExists('fast_variabel_indikator', $data ?? [], null);
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

        if ($this->container['loebetid_maaneder'] === null) {
            $invalidProperties[] = "'loebetid_maaneder' can't be null";
        }
        if ($this->container['fast_variabel_indikator'] === null) {
            $invalidProperties[] = "'fast_variabel_indikator' can't be null";
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
     * Gets maksimal_loebetid_maaneder
     *
     * @return mixed|null
     */
    public function getMaksimalLoebetidMaaneder()
    {
        return $this->container['maksimal_loebetid_maaneder'];
    }

    /**
     * Sets maksimal_loebetid_maaneder
     *
     * @param mixed|null $maksimal_loebetid_maaneder Skal angives for realkredit. Maksimal løbetid i antal måneder uanset den på nuværende tidspunkt aftalte løbetid. Eksempelvis hvis afviklingsperioden på lånet er aftalt til 360 månder (30 år) og der er mulighed for 240 månders (20 år) afdragsfrihed, skal værdien angives til 600 måneder (50 år).
     *
     * @return self
     */
    public function setMaksimalLoebetidMaaneder($maksimal_loebetid_maaneder)
    {
        if (is_null($maksimal_loebetid_maaneder)) {
            array_push($this->openAPINullablesSetToNull, 'maksimal_loebetid_maaneder');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('maksimal_loebetid_maaneder', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['maksimal_loebetid_maaneder'] = $maksimal_loebetid_maaneder;

        return $this;
    }

    /**
     * Gets loebetid_maaneder
     *
     * @return mixed
     */
    public function getLoebetidMaaneder()
    {
        return $this->container['loebetid_maaneder'];
    }

    /**
     * Sets loebetid_maaneder
     *
     * @param mixed $loebetid_maaneder Aftalt løbetid i antal måneder.
     *
     * @return self
     */
    public function setLoebetidMaaneder($loebetid_maaneder)
    {
        if (is_null($loebetid_maaneder)) {
            array_push($this->openAPINullablesSetToNull, 'loebetid_maaneder');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('loebetid_maaneder', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['loebetid_maaneder'] = $loebetid_maaneder;

        return $this;
    }

    /**
     * Gets fast_variabel_indikator
     *
     * @return \OpenAPI\Client\Model\HaeftelseRenteEnum
     */
    public function getFastVariabelIndikator()
    {
        return $this->container['fast_variabel_indikator'];
    }

    /**
     * Sets fast_variabel_indikator
     *
     * @param \OpenAPI\Client\Model\HaeftelseRenteEnum $fast_variabel_indikator fast_variabel_indikator
     *
     * @return self
     */
    public function setFastVariabelIndikator($fast_variabel_indikator)
    {
        if (is_null($fast_variabel_indikator)) {
            throw new \InvalidArgumentException('non-nullable fast_variabel_indikator cannot be null');
        }
        $this->container['fast_variabel_indikator'] = $fast_variabel_indikator;

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


