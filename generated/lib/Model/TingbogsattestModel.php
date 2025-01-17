<?php
/**
 * TingbogsattestModel
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
 * TingbogsattestModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TingbogsattestModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TingbogsattestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ejendom_stamoplysninger' => '\OpenAPI\Client\Model\EjendomStamoplysningerModel',
        'adkomst_samling' => 'mixed',
        'haeftelse_samling' => 'mixed',
        'servitut_samling' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ejendom_stamoplysninger' => null,
        'adkomst_samling' => null,
        'haeftelse_samling' => null,
        'servitut_samling' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ejendom_stamoplysninger' => false,
		'adkomst_samling' => true,
		'haeftelse_samling' => true,
		'servitut_samling' => true
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
        'ejendom_stamoplysninger' => 'EjendomStamoplysninger',
        'adkomst_samling' => 'AdkomstSamling',
        'haeftelse_samling' => 'HaeftelseSamling',
        'servitut_samling' => 'ServitutSamling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ejendom_stamoplysninger' => 'setEjendomStamoplysninger',
        'adkomst_samling' => 'setAdkomstSamling',
        'haeftelse_samling' => 'setHaeftelseSamling',
        'servitut_samling' => 'setServitutSamling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ejendom_stamoplysninger' => 'getEjendomStamoplysninger',
        'adkomst_samling' => 'getAdkomstSamling',
        'haeftelse_samling' => 'getHaeftelseSamling',
        'servitut_samling' => 'getServitutSamling'
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
        $this->setIfExists('ejendom_stamoplysninger', $data ?? [], null);
        $this->setIfExists('adkomst_samling', $data ?? [], null);
        $this->setIfExists('haeftelse_samling', $data ?? [], null);
        $this->setIfExists('servitut_samling', $data ?? [], null);
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

        if ($this->container['ejendom_stamoplysninger'] === null) {
            $invalidProperties[] = "'ejendom_stamoplysninger' can't be null";
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
     * Gets ejendom_stamoplysninger
     *
     * @return \OpenAPI\Client\Model\EjendomStamoplysningerModel
     */
    public function getEjendomStamoplysninger()
    {
        return $this->container['ejendom_stamoplysninger'];
    }

    /**
     * Sets ejendom_stamoplysninger
     *
     * @param \OpenAPI\Client\Model\EjendomStamoplysningerModel $ejendom_stamoplysninger ejendom_stamoplysninger
     *
     * @return self
     */
    public function setEjendomStamoplysninger($ejendom_stamoplysninger)
    {
        if (is_null($ejendom_stamoplysninger)) {
            throw new \InvalidArgumentException('non-nullable ejendom_stamoplysninger cannot be null');
        }
        $this->container['ejendom_stamoplysninger'] = $ejendom_stamoplysninger;

        return $this;
    }

    /**
     * Gets adkomst_samling
     *
     * @return mixed|null
     */
    public function getAdkomstSamling()
    {
        return $this->container['adkomst_samling'];
    }

    /**
     * Sets adkomst_samling
     *
     * @param mixed|null $adkomst_samling Summariske oplysninger for en adkomst. En adkomst har en AndelIdeel og en eller flere adkomsthavere til denne.
     *
     * @return self
     */
    public function setAdkomstSamling($adkomst_samling)
    {
        if (is_null($adkomst_samling)) {
            array_push($this->openAPINullablesSetToNull, 'adkomst_samling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('adkomst_samling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['adkomst_samling'] = $adkomst_samling;

        return $this;
    }

    /**
     * Gets haeftelse_samling
     *
     * @return mixed|null
     */
    public function getHaeftelseSamling()
    {
        return $this->container['haeftelse_samling'];
    }

    /**
     * Sets haeftelse_samling
     *
     * @param mixed|null $haeftelse_samling Summariske oplysninger for en hæftelse.
     *
     * @return self
     */
    public function setHaeftelseSamling($haeftelse_samling)
    {
        if (is_null($haeftelse_samling)) {
            array_push($this->openAPINullablesSetToNull, 'haeftelse_samling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('haeftelse_samling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['haeftelse_samling'] = $haeftelse_samling;

        return $this;
    }

    /**
     * Gets servitut_samling
     *
     * @return mixed|null
     */
    public function getServitutSamling()
    {
        return $this->container['servitut_samling'];
    }

    /**
     * Sets servitut_samling
     *
     * @param mixed|null $servitut_samling Summariske oplysninger for en servitut.
     *
     * @return self
     */
    public function setServitutSamling($servitut_samling)
    {
        if (is_null($servitut_samling)) {
            array_push($this->openAPINullablesSetToNull, 'servitut_samling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('servitut_samling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['servitut_samling'] = $servitut_samling;

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


