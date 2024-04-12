<?php
/**
 * BilStrukturModel
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
 * BilStrukturModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BilStrukturModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BilStrukturModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'stelnummer' => 'mixed',
        'kort_stelnummer' => 'mixed',
        'stelnummer_loebenummer' => 'mixed',
        'maerke' => '\OpenAPI\Client\Model\BilMaerkeModel',
        'registreringsnummer' => 'mixed',
        'foerste_registreringsaar' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'stelnummer' => null,
        'kort_stelnummer' => null,
        'stelnummer_loebenummer' => null,
        'maerke' => null,
        'registreringsnummer' => null,
        'foerste_registreringsaar' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'stelnummer' => true,
		'kort_stelnummer' => true,
		'stelnummer_loebenummer' => true,
		'maerke' => false,
		'registreringsnummer' => true,
		'foerste_registreringsaar' => true
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
        'stelnummer' => 'Stelnummer',
        'kort_stelnummer' => 'KortStelnummer',
        'stelnummer_loebenummer' => 'StelnummerLoebenummer',
        'maerke' => 'Maerke',
        'registreringsnummer' => 'Registreringsnummer',
        'foerste_registreringsaar' => 'FoersteRegistreringsaar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stelnummer' => 'setStelnummer',
        'kort_stelnummer' => 'setKortStelnummer',
        'stelnummer_loebenummer' => 'setStelnummerLoebenummer',
        'maerke' => 'setMaerke',
        'registreringsnummer' => 'setRegistreringsnummer',
        'foerste_registreringsaar' => 'setFoersteRegistreringsaar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stelnummer' => 'getStelnummer',
        'kort_stelnummer' => 'getKortStelnummer',
        'stelnummer_loebenummer' => 'getStelnummerLoebenummer',
        'maerke' => 'getMaerke',
        'registreringsnummer' => 'getRegistreringsnummer',
        'foerste_registreringsaar' => 'getFoersteRegistreringsaar'
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
        $this->setIfExists('stelnummer', $data ?? [], null);
        $this->setIfExists('kort_stelnummer', $data ?? [], null);
        $this->setIfExists('stelnummer_loebenummer', $data ?? [], null);
        $this->setIfExists('maerke', $data ?? [], null);
        $this->setIfExists('registreringsnummer', $data ?? [], null);
        $this->setIfExists('foerste_registreringsaar', $data ?? [], null);
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
     * Gets stelnummer
     *
     * @return mixed|null
     */
    public function getStelnummer()
    {
        return $this->container['stelnummer'];
    }

    /**
     * Sets stelnummer
     *
     * @param mixed|null $stelnummer Bilens stelnummer
     *
     * @return self
     */
    public function setStelnummer($stelnummer)
    {
        if (is_null($stelnummer)) {
            array_push($this->openAPINullablesSetToNull, 'stelnummer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stelnummer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stelnummer'] = $stelnummer;

        return $this;
    }

    /**
     * Gets kort_stelnummer
     *
     * @return mixed|null
     */
    public function getKortStelnummer()
    {
        return $this->container['kort_stelnummer'];
    }

    /**
     * Sets kort_stelnummer
     *
     * @param mixed|null $kort_stelnummer Ikke unik stelnummer på mindre en 17 karakter
     *
     * @return self
     */
    public function setKortStelnummer($kort_stelnummer)
    {
        if (is_null($kort_stelnummer)) {
            array_push($this->openAPINullablesSetToNull, 'kort_stelnummer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('kort_stelnummer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['kort_stelnummer'] = $kort_stelnummer;

        return $this;
    }

    /**
     * Gets stelnummer_loebenummer
     *
     * @return mixed|null
     */
    public function getStelnummerLoebenummer()
    {
        return $this->container['stelnummer_loebenummer'];
    }

    /**
     * Sets stelnummer_loebenummer
     *
     * @param mixed|null $stelnummer_loebenummer Løbenummer til at identificere ikke unik stelnummer
     *
     * @return self
     */
    public function setStelnummerLoebenummer($stelnummer_loebenummer)
    {
        if (is_null($stelnummer_loebenummer)) {
            array_push($this->openAPINullablesSetToNull, 'stelnummer_loebenummer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stelnummer_loebenummer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stelnummer_loebenummer'] = $stelnummer_loebenummer;

        return $this;
    }

    /**
     * Gets maerke
     *
     * @return \OpenAPI\Client\Model\BilMaerkeModel|null
     */
    public function getMaerke()
    {
        return $this->container['maerke'];
    }

    /**
     * Sets maerke
     *
     * @param \OpenAPI\Client\Model\BilMaerkeModel|null $maerke maerke
     *
     * @return self
     */
    public function setMaerke($maerke)
    {
        if (is_null($maerke)) {
            throw new \InvalidArgumentException('non-nullable maerke cannot be null');
        }
        $this->container['maerke'] = $maerke;

        return $this;
    }

    /**
     * Gets registreringsnummer
     *
     * @return mixed|null
     */
    public function getRegistreringsnummer()
    {
        return $this->container['registreringsnummer'];
    }

    /**
     * Sets registreringsnummer
     *
     * @param mixed|null $registreringsnummer Registreringnummer
     *
     * @return self
     */
    public function setRegistreringsnummer($registreringsnummer)
    {
        if (is_null($registreringsnummer)) {
            array_push($this->openAPINullablesSetToNull, 'registreringsnummer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('registreringsnummer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['registreringsnummer'] = $registreringsnummer;

        return $this;
    }

    /**
     * Gets foerste_registreringsaar
     *
     * @return mixed|null
     */
    public function getFoersteRegistreringsaar()
    {
        return $this->container['foerste_registreringsaar'];
    }

    /**
     * Sets foerste_registreringsaar
     *
     * @param mixed|null $foerste_registreringsaar År for første registrering af bil i motorregisteret
     *
     * @return self
     */
    public function setFoersteRegistreringsaar($foerste_registreringsaar)
    {
        if (is_null($foerste_registreringsaar)) {
            array_push($this->openAPINullablesSetToNull, 'foerste_registreringsaar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('foerste_registreringsaar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['foerste_registreringsaar'] = $foerste_registreringsaar;

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


