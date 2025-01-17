<?php
/**
 * SkifteretsattestModel
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
 * SkifteretsattestModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SkifteretsattestModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkifteretsattestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'doeds_dato' => 'mixed',
        'skifteform_kode' => '\OpenAPI\Client\Model\SkifteformKodeEnum',
        'adkomst_skifterets_attest_kode' => '\OpenAPI\Client\Model\AdkomstSkifteretsAttestKodeEnum',
        'fuldmagt_anmeldt_samling' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'doeds_dato' => 'date',
        'skifteform_kode' => null,
        'adkomst_skifterets_attest_kode' => null,
        'fuldmagt_anmeldt_samling' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'doeds_dato' => true,
		'skifteform_kode' => false,
		'adkomst_skifterets_attest_kode' => false,
		'fuldmagt_anmeldt_samling' => true
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
        'doeds_dato' => 'DoedsDato',
        'skifteform_kode' => 'SkifteformKode',
        'adkomst_skifterets_attest_kode' => 'AdkomstSkifteretsAttestKode',
        'fuldmagt_anmeldt_samling' => 'FuldmagtAnmeldtSamling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'doeds_dato' => 'setDoedsDato',
        'skifteform_kode' => 'setSkifteformKode',
        'adkomst_skifterets_attest_kode' => 'setAdkomstSkifteretsAttestKode',
        'fuldmagt_anmeldt_samling' => 'setFuldmagtAnmeldtSamling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'doeds_dato' => 'getDoedsDato',
        'skifteform_kode' => 'getSkifteformKode',
        'adkomst_skifterets_attest_kode' => 'getAdkomstSkifteretsAttestKode',
        'fuldmagt_anmeldt_samling' => 'getFuldmagtAnmeldtSamling'
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
        $this->setIfExists('doeds_dato', $data ?? [], null);
        $this->setIfExists('skifteform_kode', $data ?? [], null);
        $this->setIfExists('adkomst_skifterets_attest_kode', $data ?? [], null);
        $this->setIfExists('fuldmagt_anmeldt_samling', $data ?? [], null);
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
     * Gets doeds_dato
     *
     * @return mixed|null
     */
    public function getDoedsDato()
    {
        return $this->container['doeds_dato'];
    }

    /**
     * Sets doeds_dato
     *
     * @param mixed|null $doeds_dato Angiver dødsdato.
     *
     * @return self
     */
    public function setDoedsDato($doeds_dato)
    {
        if (is_null($doeds_dato)) {
            array_push($this->openAPINullablesSetToNull, 'doeds_dato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('doeds_dato', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['doeds_dato'] = $doeds_dato;

        return $this;
    }

    /**
     * Gets skifteform_kode
     *
     * @return \OpenAPI\Client\Model\SkifteformKodeEnum|null
     */
    public function getSkifteformKode()
    {
        return $this->container['skifteform_kode'];
    }

    /**
     * Sets skifteform_kode
     *
     * @param \OpenAPI\Client\Model\SkifteformKodeEnum|null $skifteform_kode skifteform_kode
     *
     * @return self
     */
    public function setSkifteformKode($skifteform_kode)
    {
        if (is_null($skifteform_kode)) {
            throw new \InvalidArgumentException('non-nullable skifteform_kode cannot be null');
        }
        $this->container['skifteform_kode'] = $skifteform_kode;

        return $this;
    }

    /**
     * Gets adkomst_skifterets_attest_kode
     *
     * @return \OpenAPI\Client\Model\AdkomstSkifteretsAttestKodeEnum|null
     */
    public function getAdkomstSkifteretsAttestKode()
    {
        return $this->container['adkomst_skifterets_attest_kode'];
    }

    /**
     * Sets adkomst_skifterets_attest_kode
     *
     * @param \OpenAPI\Client\Model\AdkomstSkifteretsAttestKodeEnum|null $adkomst_skifterets_attest_kode adkomst_skifterets_attest_kode
     *
     * @return self
     */
    public function setAdkomstSkifteretsAttestKode($adkomst_skifterets_attest_kode)
    {
        if (is_null($adkomst_skifterets_attest_kode)) {
            throw new \InvalidArgumentException('non-nullable adkomst_skifterets_attest_kode cannot be null');
        }
        $this->container['adkomst_skifterets_attest_kode'] = $adkomst_skifterets_attest_kode;

        return $this;
    }

    /**
     * Gets fuldmagt_anmeldt_samling
     *
     * @return mixed|null
     */
    public function getFuldmagtAnmeldtSamling()
    {
        return $this->container['fuldmagt_anmeldt_samling'];
    }

    /**
     * Sets fuldmagt_anmeldt_samling
     *
     * @param mixed|null $fuldmagt_anmeldt_samling Samling af anmeldte fuldmagter.
     *
     * @return self
     */
    public function setFuldmagtAnmeldtSamling($fuldmagt_anmeldt_samling)
    {
        if (is_null($fuldmagt_anmeldt_samling)) {
            array_push($this->openAPINullablesSetToNull, 'fuldmagt_anmeldt_samling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fuldmagt_anmeldt_samling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fuldmagt_anmeldt_samling'] = $fuldmagt_anmeldt_samling;

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


