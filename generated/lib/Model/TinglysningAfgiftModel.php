<?php
/**
 * TinglysningAfgiftModel
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
 * TinglysningAfgiftModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TinglysningAfgiftModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TinglysningAfgiftModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cvr_nummer' => 'mixed',
        'beloeb' => 'mixed',
        'erklaering_samling' => 'mixed',
        'oplysninger' => '\OpenAPI\Client\Model\AfgiftOplysningerModel',
        'afvigelsesaarsag_tekst' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cvr_nummer' => null,
        'beloeb' => null,
        'erklaering_samling' => null,
        'oplysninger' => null,
        'afvigelsesaarsag_tekst' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cvr_nummer' => true,
		'beloeb' => true,
		'erklaering_samling' => true,
		'oplysninger' => false,
		'afvigelsesaarsag_tekst' => true
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
        'cvr_nummer' => 'CvrNummer',
        'beloeb' => 'Beloeb',
        'erklaering_samling' => 'ErklaeringSamling',
        'oplysninger' => 'Oplysninger',
        'afvigelsesaarsag_tekst' => 'AfvigelsesaarsagTekst'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cvr_nummer' => 'setCvrNummer',
        'beloeb' => 'setBeloeb',
        'erklaering_samling' => 'setErklaeringSamling',
        'oplysninger' => 'setOplysninger',
        'afvigelsesaarsag_tekst' => 'setAfvigelsesaarsagTekst'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cvr_nummer' => 'getCvrNummer',
        'beloeb' => 'getBeloeb',
        'erklaering_samling' => 'getErklaeringSamling',
        'oplysninger' => 'getOplysninger',
        'afvigelsesaarsag_tekst' => 'getAfvigelsesaarsagTekst'
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
        $this->setIfExists('cvr_nummer', $data ?? [], null);
        $this->setIfExists('beloeb', $data ?? [], null);
        $this->setIfExists('erklaering_samling', $data ?? [], null);
        $this->setIfExists('oplysninger', $data ?? [], null);
        $this->setIfExists('afvigelsesaarsag_tekst', $data ?? [], null);
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

        if ($this->container['beloeb'] === null) {
            $invalidProperties[] = "'beloeb' can't be null";
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
     * Gets cvr_nummer
     *
     * @return mixed|null
     */
    public function getCvrNummer()
    {
        return $this->container['cvr_nummer'];
    }

    /**
     * Sets cvr_nummer
     *
     * @param mixed|null $cvr_nummer Identifikation af en storkunde.
     *
     * @return self
     */
    public function setCvrNummer($cvr_nummer)
    {
        if (is_null($cvr_nummer)) {
            array_push($this->openAPINullablesSetToNull, 'cvr_nummer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cvr_nummer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cvr_nummer'] = $cvr_nummer;

        return $this;
    }

    /**
     * Gets beloeb
     *
     * @return mixed
     */
    public function getBeloeb()
    {
        return $this->container['beloeb'];
    }

    /**
     * Sets beloeb
     *
     * @param mixed $beloeb Angiver det beløb i DKK, som man agter at betale i afgift.
     *
     * @return self
     */
    public function setBeloeb($beloeb)
    {
        if (is_null($beloeb)) {
            array_push($this->openAPINullablesSetToNull, 'beloeb');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('beloeb', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['beloeb'] = $beloeb;

        return $this;
    }

    /**
     * Gets erklaering_samling
     *
     * @return mixed|null
     */
    public function getErklaeringSamling()
    {
        return $this->container['erklaering_samling'];
    }

    /**
     * Sets erklaering_samling
     *
     * @param mixed|null $erklaering_samling Samling af erklaeringer.
     *
     * @return self
     */
    public function setErklaeringSamling($erklaering_samling)
    {
        if (is_null($erklaering_samling)) {
            array_push($this->openAPINullablesSetToNull, 'erklaering_samling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('erklaering_samling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['erklaering_samling'] = $erklaering_samling;

        return $this;
    }

    /**
     * Gets oplysninger
     *
     * @return \OpenAPI\Client\Model\AfgiftOplysningerModel|null
     */
    public function getOplysninger()
    {
        return $this->container['oplysninger'];
    }

    /**
     * Sets oplysninger
     *
     * @param \OpenAPI\Client\Model\AfgiftOplysningerModel|null $oplysninger oplysninger
     *
     * @return self
     */
    public function setOplysninger($oplysninger)
    {
        if (is_null($oplysninger)) {
            throw new \InvalidArgumentException('non-nullable oplysninger cannot be null');
        }
        $this->container['oplysninger'] = $oplysninger;

        return $this;
    }

    /**
     * Gets afvigelsesaarsag_tekst
     *
     * @return mixed|null
     */
    public function getAfvigelsesaarsagTekst()
    {
        return $this->container['afvigelsesaarsag_tekst'];
    }

    /**
     * Sets afvigelsesaarsag_tekst
     *
     * @param mixed|null $afvigelsesaarsag_tekst Angiver en årsag for en afvigelse i forhold til normalt afgiftsbeløb. Hvis årsagen fremgår af en fastsat erklæringstekst skal feltet ikke anvendes.
     *
     * @return self
     */
    public function setAfvigelsesaarsagTekst($afvigelsesaarsag_tekst)
    {
        if (is_null($afvigelsesaarsag_tekst)) {
            array_push($this->openAPINullablesSetToNull, 'afvigelsesaarsag_tekst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('afvigelsesaarsag_tekst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['afvigelsesaarsag_tekst'] = $afvigelsesaarsag_tekst;

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


