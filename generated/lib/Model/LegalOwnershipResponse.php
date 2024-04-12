<?php
/**
 * LegalOwnershipResponse
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
 * LegalOwnershipResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LegalOwnershipResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LegalOwnershipResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'source' => '\OpenAPI\Client\Model\BaseNodeResponse',
        'target' => '\OpenAPI\Client\Model\BaseNodeResponse',
        'relationship_type' => '\OpenAPI\Client\Model\GraphRelationEnum',
        'valid_from' => 'mixed',
        'valid_to' => 'mixed',
        'value' => 'mixed',
        'share' => '\OpenAPI\Client\Model\CVRShare',
        'unadjusted_share' => '\OpenAPI\Client\Model\CVRShare'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'source' => null,
        'target' => null,
        'relationship_type' => null,
        'valid_from' => 'date-time',
        'valid_to' => 'date-time',
        'value' => null,
        'share' => null,
        'unadjusted_share' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'source' => false,
		'target' => false,
		'relationship_type' => false,
		'valid_from' => true,
		'valid_to' => true,
		'value' => true,
		'share' => false,
		'unadjusted_share' => false
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
        'source' => 'source',
        'target' => 'target',
        'relationship_type' => 'relationship_type',
        'valid_from' => 'valid_from',
        'valid_to' => 'valid_to',
        'value' => 'value',
        'share' => 'share',
        'unadjusted_share' => 'unadjusted_share'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source' => 'setSource',
        'target' => 'setTarget',
        'relationship_type' => 'setRelationshipType',
        'valid_from' => 'setValidFrom',
        'valid_to' => 'setValidTo',
        'value' => 'setValue',
        'share' => 'setShare',
        'unadjusted_share' => 'setUnadjustedShare'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source' => 'getSource',
        'target' => 'getTarget',
        'relationship_type' => 'getRelationshipType',
        'valid_from' => 'getValidFrom',
        'valid_to' => 'getValidTo',
        'value' => 'getValue',
        'share' => 'getShare',
        'unadjusted_share' => 'getUnadjustedShare'
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
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('target', $data ?? [], null);
        $this->setIfExists('relationship_type', $data ?? [], null);
        $this->setIfExists('valid_from', $data ?? [], null);
        $this->setIfExists('valid_to', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('share', $data ?? [], null);
        $this->setIfExists('unadjusted_share', $data ?? [], null);
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

        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        if ($this->container['relationship_type'] === null) {
            $invalidProperties[] = "'relationship_type' can't be null";
        }
        if ($this->container['share'] === null) {
            $invalidProperties[] = "'share' can't be null";
        }
        if ($this->container['unadjusted_share'] === null) {
            $invalidProperties[] = "'unadjusted_share' can't be null";
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
     * Gets source
     *
     * @return \OpenAPI\Client\Model\BaseNodeResponse
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\BaseNodeResponse $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets target
     *
     * @return \OpenAPI\Client\Model\BaseNodeResponse
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param \OpenAPI\Client\Model\BaseNodeResponse $target target
     *
     * @return self
     */
    public function setTarget($target)
    {
        if (is_null($target)) {
            throw new \InvalidArgumentException('non-nullable target cannot be null');
        }
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets relationship_type
     *
     * @return \OpenAPI\Client\Model\GraphRelationEnum
     */
    public function getRelationshipType()
    {
        return $this->container['relationship_type'];
    }

    /**
     * Sets relationship_type
     *
     * @param \OpenAPI\Client\Model\GraphRelationEnum $relationship_type relationship_type
     *
     * @return self
     */
    public function setRelationshipType($relationship_type)
    {
        if (is_null($relationship_type)) {
            throw new \InvalidArgumentException('non-nullable relationship_type cannot be null');
        }
        $this->container['relationship_type'] = $relationship_type;

        return $this;
    }

    /**
     * Gets valid_from
     *
     * @return mixed|null
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param mixed|null $valid_from valid_from
     *
     * @return self
     */
    public function setValidFrom($valid_from)
    {
        if (is_null($valid_from)) {
            array_push($this->openAPINullablesSetToNull, 'valid_from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('valid_from', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_to
     *
     * @return mixed|null
     */
    public function getValidTo()
    {
        return $this->container['valid_to'];
    }

    /**
     * Sets valid_to
     *
     * @param mixed|null $valid_to valid_to
     *
     * @return self
     */
    public function setValidTo($valid_to)
    {
        if (is_null($valid_to)) {
            array_push($this->openAPINullablesSetToNull, 'valid_to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('valid_to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['valid_to'] = $valid_to;

        return $this;
    }

    /**
     * Gets value
     *
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param mixed|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            array_push($this->openAPINullablesSetToNull, 'value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets share
     *
     * @return \OpenAPI\Client\Model\CVRShare
     */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
     * Sets share
     *
     * @param \OpenAPI\Client\Model\CVRShare $share share
     *
     * @return self
     */
    public function setShare($share)
    {
        if (is_null($share)) {
            throw new \InvalidArgumentException('non-nullable share cannot be null');
        }
        $this->container['share'] = $share;

        return $this;
    }

    /**
     * Gets unadjusted_share
     *
     * @return \OpenAPI\Client\Model\CVRShare
     */
    public function getUnadjustedShare()
    {
        return $this->container['unadjusted_share'];
    }

    /**
     * Sets unadjusted_share
     *
     * @param \OpenAPI\Client\Model\CVRShare $unadjusted_share unadjusted_share
     *
     * @return self
     */
    public function setUnadjustedShare($unadjusted_share)
    {
        if (is_null($unadjusted_share)) {
            throw new \InvalidArgumentException('non-nullable unadjusted_share cannot be null');
        }
        $this->container['unadjusted_share'] = $unadjusted_share;

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

