<?php
/**
 * DokumentRettighedModel
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
 * DokumentRettighedModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DokumentRettighedModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DokumentRettighedModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'mixed',
        'revision_nummer' => 'mixed',
        'alias_akt_historisk_id' => 'mixed',
        'adkomst_type' => '\OpenAPI\Client\Model\AdkomstTypeEnum',
        'haeftelse_type' => '\OpenAPI\Client\Model\HaeftelseTypeEnum',
        'servitut_type' => '\OpenAPI\Client\Model\ServitutTypeEnum',
        'rettighed_samling' => 'mixed'
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
        'revision_nummer' => null,
        'alias_akt_historisk_id' => null,
        'adkomst_type' => null,
        'haeftelse_type' => null,
        'servitut_type' => null,
        'rettighed_samling' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'revision_nummer' => true,
		'alias_akt_historisk_id' => true,
		'adkomst_type' => false,
		'haeftelse_type' => false,
		'servitut_type' => false,
		'rettighed_samling' => true
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
        'id' => 'Id',
        'revision_nummer' => 'RevisionNummer',
        'alias_akt_historisk_id' => 'AliasAktHistoriskId',
        'adkomst_type' => 'AdkomstType',
        'haeftelse_type' => 'HaeftelseType',
        'servitut_type' => 'ServitutType',
        'rettighed_samling' => 'RettighedSamling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'revision_nummer' => 'setRevisionNummer',
        'alias_akt_historisk_id' => 'setAliasAktHistoriskId',
        'adkomst_type' => 'setAdkomstType',
        'haeftelse_type' => 'setHaeftelseType',
        'servitut_type' => 'setServitutType',
        'rettighed_samling' => 'setRettighedSamling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'revision_nummer' => 'getRevisionNummer',
        'alias_akt_historisk_id' => 'getAliasAktHistoriskId',
        'adkomst_type' => 'getAdkomstType',
        'haeftelse_type' => 'getHaeftelseType',
        'servitut_type' => 'getServitutType',
        'rettighed_samling' => 'getRettighedSamling'
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
        $this->setIfExists('revision_nummer', $data ?? [], null);
        $this->setIfExists('alias_akt_historisk_id', $data ?? [], null);
        $this->setIfExists('adkomst_type', $data ?? [], null);
        $this->setIfExists('haeftelse_type', $data ?? [], null);
        $this->setIfExists('servitut_type', $data ?? [], null);
        $this->setIfExists('rettighed_samling', $data ?? [], null);
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
        if ($this->container['revision_nummer'] === null) {
            $invalidProperties[] = "'revision_nummer' can't be null";
        }
        if ($this->container['rettighed_samling'] === null) {
            $invalidProperties[] = "'rettighed_samling' can't be null";
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
     * @param mixed $id Identifikation af et dokument, som kan være et adkomst-, hæftelses- eller servitutdokument.
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
     * Gets revision_nummer
     *
     * @return mixed
     */
    public function getRevisionNummer()
    {
        return $this->container['revision_nummer'];
    }

    /**
     * Sets revision_nummer
     *
     * @param mixed $revision_nummer Revisionsnummer for rettighedsdokument.
     *
     * @return self
     */
    public function setRevisionNummer($revision_nummer)
    {
        if (is_null($revision_nummer)) {
            array_push($this->openAPINullablesSetToNull, 'revision_nummer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('revision_nummer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['revision_nummer'] = $revision_nummer;

        return $this;
    }

    /**
     * Gets alias_akt_historisk_id
     *
     * @return mixed|null
     */
    public function getAliasAktHistoriskId()
    {
        return $this->container['alias_akt_historisk_id'];
    }

    /**
     * Sets alias_akt_historisk_id
     *
     * @param mixed|null $alias_akt_historisk_id For konverterede data er dokument-alias dato, løbenummer og retskreds for det konverterede dokument. Elementet er opbygget af dato der består af 8 tal på formen yyyymmdd, herefter kommer bindestreg. Løbenummer indeholder 1 til 6 tal. Der er ikke foranstillede nuller. Herefter kommer en bindestreg. Retskreds består af 2 tal, f. eks. 01 eller 19. Hvis der findes flere konverteret dokumenter med samme dato/løbenummer, får disse tilføjet et suffix på fem tegn: [-][ét tegns dokumenttype][trecifret løbenr]. Dokumentypen er enten A (adkomstdokument), H (hæftelsesdokument) eller S (servitutdokument). Eksempler: 20060304-123456-19, 19950507-12345-04, 19981209-1234-21-H0001 og 11111111-0-10-H0054
     *
     * @return self
     */
    public function setAliasAktHistoriskId($alias_akt_historisk_id)
    {
        if (is_null($alias_akt_historisk_id)) {
            array_push($this->openAPINullablesSetToNull, 'alias_akt_historisk_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('alias_akt_historisk_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['alias_akt_historisk_id'] = $alias_akt_historisk_id;

        return $this;
    }

    /**
     * Gets adkomst_type
     *
     * @return \OpenAPI\Client\Model\AdkomstTypeEnum|null
     */
    public function getAdkomstType()
    {
        return $this->container['adkomst_type'];
    }

    /**
     * Sets adkomst_type
     *
     * @param \OpenAPI\Client\Model\AdkomstTypeEnum|null $adkomst_type adkomst_type
     *
     * @return self
     */
    public function setAdkomstType($adkomst_type)
    {
        if (is_null($adkomst_type)) {
            throw new \InvalidArgumentException('non-nullable adkomst_type cannot be null');
        }
        $this->container['adkomst_type'] = $adkomst_type;

        return $this;
    }

    /**
     * Gets haeftelse_type
     *
     * @return \OpenAPI\Client\Model\HaeftelseTypeEnum|null
     */
    public function getHaeftelseType()
    {
        return $this->container['haeftelse_type'];
    }

    /**
     * Sets haeftelse_type
     *
     * @param \OpenAPI\Client\Model\HaeftelseTypeEnum|null $haeftelse_type haeftelse_type
     *
     * @return self
     */
    public function setHaeftelseType($haeftelse_type)
    {
        if (is_null($haeftelse_type)) {
            throw new \InvalidArgumentException('non-nullable haeftelse_type cannot be null');
        }
        $this->container['haeftelse_type'] = $haeftelse_type;

        return $this;
    }

    /**
     * Gets servitut_type
     *
     * @return \OpenAPI\Client\Model\ServitutTypeEnum|null
     */
    public function getServitutType()
    {
        return $this->container['servitut_type'];
    }

    /**
     * Sets servitut_type
     *
     * @param \OpenAPI\Client\Model\ServitutTypeEnum|null $servitut_type servitut_type
     *
     * @return self
     */
    public function setServitutType($servitut_type)
    {
        if (is_null($servitut_type)) {
            throw new \InvalidArgumentException('non-nullable servitut_type cannot be null');
        }
        $this->container['servitut_type'] = $servitut_type;

        return $this;
    }

    /**
     * Gets rettighed_samling
     *
     * @return mixed
     */
    public function getRettighedSamling()
    {
        return $this->container['rettighed_samling'];
    }

    /**
     * Sets rettighed_samling
     *
     * @param mixed $rettighed_samling rettighed_samling
     *
     * @return self
     */
    public function setRettighedSamling($rettighed_samling)
    {
        if (is_null($rettighed_samling)) {
            array_push($this->openAPINullablesSetToNull, 'rettighed_samling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rettighed_samling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rettighed_samling'] = $rettighed_samling;

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


