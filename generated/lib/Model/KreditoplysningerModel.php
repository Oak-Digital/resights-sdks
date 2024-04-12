<?php
/**
 * KreditoplysningerModel
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
 * KreditoplysningerModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class KreditoplysningerModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'KreditoplysningerModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'kredit_omkostninger' => '\OpenAPI\Client\Model\BeloebModel',
        'aarlige_omkostninger_procent' => 'mixed',
        'andre_omkostninger' => '\OpenAPI\Client\Model\BeloebModel',
        'samlet_beloeb' => '\OpenAPI\Client\Model\BeloebModel',
        'antal_ydelser' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'kredit_omkostninger' => null,
        'aarlige_omkostninger_procent' => null,
        'andre_omkostninger' => null,
        'samlet_beloeb' => null,
        'antal_ydelser' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'kredit_omkostninger' => false,
		'aarlige_omkostninger_procent' => true,
		'andre_omkostninger' => false,
		'samlet_beloeb' => false,
		'antal_ydelser' => true
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
        'kredit_omkostninger' => 'KreditOmkostninger',
        'aarlige_omkostninger_procent' => 'AarligeOmkostningerProcent',
        'andre_omkostninger' => 'AndreOmkostninger',
        'samlet_beloeb' => 'SamletBeloeb',
        'antal_ydelser' => 'AntalYdelser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kredit_omkostninger' => 'setKreditOmkostninger',
        'aarlige_omkostninger_procent' => 'setAarligeOmkostningerProcent',
        'andre_omkostninger' => 'setAndreOmkostninger',
        'samlet_beloeb' => 'setSamletBeloeb',
        'antal_ydelser' => 'setAntalYdelser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kredit_omkostninger' => 'getKreditOmkostninger',
        'aarlige_omkostninger_procent' => 'getAarligeOmkostningerProcent',
        'andre_omkostninger' => 'getAndreOmkostninger',
        'samlet_beloeb' => 'getSamletBeloeb',
        'antal_ydelser' => 'getAntalYdelser'
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
        $this->setIfExists('kredit_omkostninger', $data ?? [], null);
        $this->setIfExists('aarlige_omkostninger_procent', $data ?? [], null);
        $this->setIfExists('andre_omkostninger', $data ?? [], null);
        $this->setIfExists('samlet_beloeb', $data ?? [], null);
        $this->setIfExists('antal_ydelser', $data ?? [], null);
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

        if ($this->container['kredit_omkostninger'] === null) {
            $invalidProperties[] = "'kredit_omkostninger' can't be null";
        }
        if ($this->container['aarlige_omkostninger_procent'] === null) {
            $invalidProperties[] = "'aarlige_omkostninger_procent' can't be null";
        }
        if ($this->container['andre_omkostninger'] === null) {
            $invalidProperties[] = "'andre_omkostninger' can't be null";
        }
        if ($this->container['samlet_beloeb'] === null) {
            $invalidProperties[] = "'samlet_beloeb' can't be null";
        }
        if ($this->container['antal_ydelser'] === null) {
            $invalidProperties[] = "'antal_ydelser' can't be null";
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
     * Gets kredit_omkostninger
     *
     * @return \OpenAPI\Client\Model\BeloebModel
     */
    public function getKreditOmkostninger()
    {
        return $this->container['kredit_omkostninger'];
    }

    /**
     * Sets kredit_omkostninger
     *
     * @param \OpenAPI\Client\Model\BeloebModel $kredit_omkostninger kredit_omkostninger
     *
     * @return self
     */
    public function setKreditOmkostninger($kredit_omkostninger)
    {
        if (is_null($kredit_omkostninger)) {
            throw new \InvalidArgumentException('non-nullable kredit_omkostninger cannot be null');
        }
        $this->container['kredit_omkostninger'] = $kredit_omkostninger;

        return $this;
    }

    /**
     * Gets aarlige_omkostninger_procent
     *
     * @return mixed
     */
    public function getAarligeOmkostningerProcent()
    {
        return $this->container['aarlige_omkostninger_procent'];
    }

    /**
     * Sets aarlige_omkostninger_procent
     *
     * @param mixed $aarlige_omkostninger_procent AarligeOmkostningerProcent
     *
     * @return self
     */
    public function setAarligeOmkostningerProcent($aarlige_omkostninger_procent)
    {
        if (is_null($aarlige_omkostninger_procent)) {
            array_push($this->openAPINullablesSetToNull, 'aarlige_omkostninger_procent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aarlige_omkostninger_procent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aarlige_omkostninger_procent'] = $aarlige_omkostninger_procent;

        return $this;
    }

    /**
     * Gets andre_omkostninger
     *
     * @return \OpenAPI\Client\Model\BeloebModel
     */
    public function getAndreOmkostninger()
    {
        return $this->container['andre_omkostninger'];
    }

    /**
     * Sets andre_omkostninger
     *
     * @param \OpenAPI\Client\Model\BeloebModel $andre_omkostninger andre_omkostninger
     *
     * @return self
     */
    public function setAndreOmkostninger($andre_omkostninger)
    {
        if (is_null($andre_omkostninger)) {
            throw new \InvalidArgumentException('non-nullable andre_omkostninger cannot be null');
        }
        $this->container['andre_omkostninger'] = $andre_omkostninger;

        return $this;
    }

    /**
     * Gets samlet_beloeb
     *
     * @return \OpenAPI\Client\Model\BeloebModel
     */
    public function getSamletBeloeb()
    {
        return $this->container['samlet_beloeb'];
    }

    /**
     * Sets samlet_beloeb
     *
     * @param \OpenAPI\Client\Model\BeloebModel $samlet_beloeb samlet_beloeb
     *
     * @return self
     */
    public function setSamletBeloeb($samlet_beloeb)
    {
        if (is_null($samlet_beloeb)) {
            throw new \InvalidArgumentException('non-nullable samlet_beloeb cannot be null');
        }
        $this->container['samlet_beloeb'] = $samlet_beloeb;

        return $this;
    }

    /**
     * Gets antal_ydelser
     *
     * @return mixed
     */
    public function getAntalYdelser()
    {
        return $this->container['antal_ydelser'];
    }

    /**
     * Sets antal_ydelser
     *
     * @param mixed $antal_ydelser AarligeOmkostningerProcent
     *
     * @return self
     */
    public function setAntalYdelser($antal_ydelser)
    {
        if (is_null($antal_ydelser)) {
            array_push($this->openAPINullablesSetToNull, 'antal_ydelser');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('antal_ydelser', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['antal_ydelser'] = $antal_ydelser;

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


