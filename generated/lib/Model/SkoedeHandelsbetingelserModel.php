<?php
/**
 * SkoedeHandelsbetingelserModel
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
 * SkoedeHandelsbetingelserModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SkoedeHandelsbetingelserModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkoedeHandelsbetingelserModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'koebesumbetaling_indikator' => 'mixed',
        'koebesum_betaling_dato' => 'mixed',
        'betingelser_oevrige_indikator' => 'mixed',
        'betingelser_oevrige_tekst' => 'mixed',
        'betinget_matrikulaer_aendring' => '\OpenAPI\Client\Model\BetingetMatrikulaerAendringEnum'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'koebesumbetaling_indikator' => null,
        'koebesum_betaling_dato' => 'date',
        'betingelser_oevrige_indikator' => null,
        'betingelser_oevrige_tekst' => null,
        'betinget_matrikulaer_aendring' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'koebesumbetaling_indikator' => true,
		'koebesum_betaling_dato' => true,
		'betingelser_oevrige_indikator' => true,
		'betingelser_oevrige_tekst' => true,
		'betinget_matrikulaer_aendring' => false
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
        'koebesumbetaling_indikator' => 'KoebesumbetalingIndikator',
        'koebesum_betaling_dato' => 'KoebesumBetalingDato',
        'betingelser_oevrige_indikator' => 'BetingelserOevrigeIndikator',
        'betingelser_oevrige_tekst' => 'BetingelserOevrigeTekst',
        'betinget_matrikulaer_aendring' => 'BetingetMatrikulaerAendring'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'koebesumbetaling_indikator' => 'setKoebesumbetalingIndikator',
        'koebesum_betaling_dato' => 'setKoebesumBetalingDato',
        'betingelser_oevrige_indikator' => 'setBetingelserOevrigeIndikator',
        'betingelser_oevrige_tekst' => 'setBetingelserOevrigeTekst',
        'betinget_matrikulaer_aendring' => 'setBetingetMatrikulaerAendring'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'koebesumbetaling_indikator' => 'getKoebesumbetalingIndikator',
        'koebesum_betaling_dato' => 'getKoebesumBetalingDato',
        'betingelser_oevrige_indikator' => 'getBetingelserOevrigeIndikator',
        'betingelser_oevrige_tekst' => 'getBetingelserOevrigeTekst',
        'betinget_matrikulaer_aendring' => 'getBetingetMatrikulaerAendring'
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
        $this->setIfExists('koebesumbetaling_indikator', $data ?? [], null);
        $this->setIfExists('koebesum_betaling_dato', $data ?? [], null);
        $this->setIfExists('betingelser_oevrige_indikator', $data ?? [], null);
        $this->setIfExists('betingelser_oevrige_tekst', $data ?? [], null);
        $this->setIfExists('betinget_matrikulaer_aendring', $data ?? [], null);
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
     * Gets koebesumbetaling_indikator
     *
     * @return mixed|null
     */
    public function getKoebesumbetalingIndikator()
    {
        return $this->container['koebesumbetaling_indikator'];
    }

    /**
     * Sets koebesumbetaling_indikator
     *
     * @param mixed|null $koebesumbetaling_indikator True angiver at handlen er betinget af købesummens betaling. False angiver at handlen ikke er betinget af købesummens betaling.
     *
     * @return self
     */
    public function setKoebesumbetalingIndikator($koebesumbetaling_indikator)
    {
        if (is_null($koebesumbetaling_indikator)) {
            array_push($this->openAPINullablesSetToNull, 'koebesumbetaling_indikator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('koebesumbetaling_indikator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['koebesumbetaling_indikator'] = $koebesumbetaling_indikator;

        return $this;
    }

    /**
     * Gets koebesum_betaling_dato
     *
     * @return mixed|null
     */
    public function getKoebesumBetalingDato()
    {
        return $this->container['koebesum_betaling_dato'];
    }

    /**
     * Sets koebesum_betaling_dato
     *
     * @param mixed|null $koebesum_betaling_dato Skal angives når handlen er betinget af købesummens betaling.
     *
     * @return self
     */
    public function setKoebesumBetalingDato($koebesum_betaling_dato)
    {
        if (is_null($koebesum_betaling_dato)) {
            array_push($this->openAPINullablesSetToNull, 'koebesum_betaling_dato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('koebesum_betaling_dato', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['koebesum_betaling_dato'] = $koebesum_betaling_dato;

        return $this;
    }

    /**
     * Gets betingelser_oevrige_indikator
     *
     * @return mixed|null
     */
    public function getBetingelserOevrigeIndikator()
    {
        return $this->container['betingelser_oevrige_indikator'];
    }

    /**
     * Sets betingelser_oevrige_indikator
     *
     * @param mixed|null $betingelser_oevrige_indikator True angiver at handlen er betinget af øvrige betingelser. False angiver at handlen ikke er betinget af øvrige betingelser.
     *
     * @return self
     */
    public function setBetingelserOevrigeIndikator($betingelser_oevrige_indikator)
    {
        if (is_null($betingelser_oevrige_indikator)) {
            array_push($this->openAPINullablesSetToNull, 'betingelser_oevrige_indikator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('betingelser_oevrige_indikator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['betingelser_oevrige_indikator'] = $betingelser_oevrige_indikator;

        return $this;
    }

    /**
     * Gets betingelser_oevrige_tekst
     *
     * @return mixed|null
     */
    public function getBetingelserOevrigeTekst()
    {
        return $this->container['betingelser_oevrige_tekst'];
    }

    /**
     * Sets betingelser_oevrige_tekst
     *
     * @param mixed|null $betingelser_oevrige_tekst Skal angives når handlen er betinget af øvrige betingelser.
     *
     * @return self
     */
    public function setBetingelserOevrigeTekst($betingelser_oevrige_tekst)
    {
        if (is_null($betingelser_oevrige_tekst)) {
            array_push($this->openAPINullablesSetToNull, 'betingelser_oevrige_tekst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('betingelser_oevrige_tekst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['betingelser_oevrige_tekst'] = $betingelser_oevrige_tekst;

        return $this;
    }

    /**
     * Gets betinget_matrikulaer_aendring
     *
     * @return \OpenAPI\Client\Model\BetingetMatrikulaerAendringEnum|null
     */
    public function getBetingetMatrikulaerAendring()
    {
        return $this->container['betinget_matrikulaer_aendring'];
    }

    /**
     * Sets betinget_matrikulaer_aendring
     *
     * @param \OpenAPI\Client\Model\BetingetMatrikulaerAendringEnum|null $betinget_matrikulaer_aendring betinget_matrikulaer_aendring
     *
     * @return self
     */
    public function setBetingetMatrikulaerAendring($betinget_matrikulaer_aendring)
    {
        if (is_null($betinget_matrikulaer_aendring)) {
            throw new \InvalidArgumentException('non-nullable betinget_matrikulaer_aendring cannot be null');
        }
        $this->container['betinget_matrikulaer_aendring'] = $betinget_matrikulaer_aendring;

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


