<?php
/**
 * ClustersTemplate
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
 * ClustersTemplate Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClustersTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClustersTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'template_name' => 'mixed',
        'field' => 'mixed',
        'top_left' => 'mixed',
        'bottom_right' => 'mixed',
        'precision' => 'mixed',
        'size' => 'mixed',
        'aggs' => 'array<string,mixed>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'template_name' => null,
        'field' => null,
        'top_left' => null,
        'bottom_right' => null,
        'precision' => null,
        'size' => null,
        'aggs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'template_name' => true,
		'field' => true,
		'top_left' => true,
		'bottom_right' => true,
		'precision' => true,
		'size' => true,
		'aggs' => true
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
        'template_name' => 'template_name',
        'field' => 'field',
        'top_left' => 'top_left',
        'bottom_right' => 'bottom_right',
        'precision' => 'precision',
        'size' => 'size',
        'aggs' => 'aggs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'template_name' => 'setTemplateName',
        'field' => 'setField',
        'top_left' => 'setTopLeft',
        'bottom_right' => 'setBottomRight',
        'precision' => 'setPrecision',
        'size' => 'setSize',
        'aggs' => 'setAggs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'template_name' => 'getTemplateName',
        'field' => 'getField',
        'top_left' => 'getTopLeft',
        'bottom_right' => 'getBottomRight',
        'precision' => 'getPrecision',
        'size' => 'getSize',
        'aggs' => 'getAggs'
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

    public const TEMPLATE_NAME_CLUSTERS = 'clusters';
    public const PRECISION__1 = '1';
    public const PRECISION__2 = '2';
    public const PRECISION__3 = '3';
    public const PRECISION__4 = '4';
    public const PRECISION__5 = '5';
    public const PRECISION__6 = '6';
    public const PRECISION__7 = '7';
    public const PRECISION__8 = '8';
    public const PRECISION__9 = '9';
    public const PRECISION__10 = '10';
    public const PRECISION__11 = '11';
    public const PRECISION__12 = '12';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTemplateNameAllowableValues()
    {
        return [
            self::TEMPLATE_NAME_CLUSTERS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrecisionAllowableValues()
    {
        return [
            self::PRECISION__1,
            self::PRECISION__2,
            self::PRECISION__3,
            self::PRECISION__4,
            self::PRECISION__5,
            self::PRECISION__6,
            self::PRECISION__7,
            self::PRECISION__8,
            self::PRECISION__9,
            self::PRECISION__10,
            self::PRECISION__11,
            self::PRECISION__12,
        ];
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
        $this->setIfExists('template_name', $data ?? [], null);
        $this->setIfExists('field', $data ?? [], null);
        $this->setIfExists('top_left', $data ?? [], null);
        $this->setIfExists('bottom_right', $data ?? [], null);
        $this->setIfExists('precision', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('aggs', $data ?? [], null);
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

        if ($this->container['template_name'] === null) {
            $invalidProperties[] = "'template_name' can't be null";
        }
        $allowedValues = $this->getTemplateNameAllowableValues();
        if (!is_null($this->container['template_name']) && !in_array($this->container['template_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'template_name', must be one of '%s'",
                $this->container['template_name'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
        if (!is_null($this->container['top_left']) && (count($this->container['top_left']) > 2)) {
            $invalidProperties[] = "invalid value for 'top_left', number of items must be less than or equal to 2.";
        }

        if (!is_null($this->container['top_left']) && (count($this->container['top_left']) < 2)) {
            $invalidProperties[] = "invalid value for 'top_left', number of items must be greater than or equal to 2.";
        }

        if (!is_null($this->container['bottom_right']) && (count($this->container['bottom_right']) > 2)) {
            $invalidProperties[] = "invalid value for 'bottom_right', number of items must be less than or equal to 2.";
        }

        if (!is_null($this->container['bottom_right']) && (count($this->container['bottom_right']) < 2)) {
            $invalidProperties[] = "invalid value for 'bottom_right', number of items must be greater than or equal to 2.";
        }

        $allowedValues = $this->getPrecisionAllowableValues();
        if (!is_null($this->container['precision']) && !in_array($this->container['precision'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'precision', must be one of '%s'",
                $this->container['precision'],
                implode("', '", $allowedValues)
            );
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
     * Gets template_name
     *
     * @return mixed
     */
    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    /**
     * Sets template_name
     *
     * @param mixed $template_name template_name
     *
     * @return self
     */
    public function setTemplateName($template_name)
    {
        if (is_null($template_name)) {
            array_push($this->openAPINullablesSetToNull, 'template_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('template_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getTemplateNameAllowableValues();
        if (!is_null($template_name) && !in_array($template_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'template_name', must be one of '%s'",
                    $template_name,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['template_name'] = $template_name;

        return $this;
    }

    /**
     * Gets field
     *
     * @return mixed
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param mixed $field field
     *
     * @return self
     */
    public function setField($field)
    {
        if (is_null($field)) {
            array_push($this->openAPINullablesSetToNull, 'field');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('field', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['field'] = $field;

        return $this;
    }

    /**
     * Gets top_left
     *
     * @return mixed|null
     */
    public function getTopLeft()
    {
        return $this->container['top_left'];
    }

    /**
     * Sets top_left
     *
     * @param mixed|null $top_left top_left
     *
     * @return self
     */
    public function setTopLeft($top_left)
    {
        if (is_null($top_left)) {
            array_push($this->openAPINullablesSetToNull, 'top_left');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('top_left', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($top_left) && (count($top_left) > 2)) {
            throw new \InvalidArgumentException('invalid value for $top_left when calling ClustersTemplate., number of items must be less than or equal to 2.');
        }
        if (!is_null($top_left) && (count($top_left) < 2)) {
            throw new \InvalidArgumentException('invalid length for $top_left when calling ClustersTemplate., number of items must be greater than or equal to 2.');
        }
        $this->container['top_left'] = $top_left;

        return $this;
    }

    /**
     * Gets bottom_right
     *
     * @return mixed|null
     */
    public function getBottomRight()
    {
        return $this->container['bottom_right'];
    }

    /**
     * Sets bottom_right
     *
     * @param mixed|null $bottom_right bottom_right
     *
     * @return self
     */
    public function setBottomRight($bottom_right)
    {
        if (is_null($bottom_right)) {
            array_push($this->openAPINullablesSetToNull, 'bottom_right');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bottom_right', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($bottom_right) && (count($bottom_right) > 2)) {
            throw new \InvalidArgumentException('invalid value for $bottom_right when calling ClustersTemplate., number of items must be less than or equal to 2.');
        }
        if (!is_null($bottom_right) && (count($bottom_right) < 2)) {
            throw new \InvalidArgumentException('invalid length for $bottom_right when calling ClustersTemplate., number of items must be greater than or equal to 2.');
        }
        $this->container['bottom_right'] = $bottom_right;

        return $this;
    }

    /**
     * Gets precision
     *
     * @return mixed|null
     */
    public function getPrecision()
    {
        return $this->container['precision'];
    }

    /**
     * Sets precision
     *
     * @param mixed|null $precision precision
     *
     * @return self
     */
    public function setPrecision($precision)
    {
        if (is_null($precision)) {
            array_push($this->openAPINullablesSetToNull, 'precision');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('precision', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getPrecisionAllowableValues();
        if (!is_null($precision) && !in_array($precision, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'precision', must be one of '%s'",
                    $precision,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['precision'] = $precision;

        return $this;
    }

    /**
     * Gets size
     *
     * @return mixed|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param mixed|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            array_push($this->openAPINullablesSetToNull, 'size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('size', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets aggs
     *
     * @return array<string,mixed>|null
     */
    public function getAggs()
    {
        return $this->container['aggs'];
    }

    /**
     * Sets aggs
     *
     * @param array<string,mixed>|null $aggs aggs
     *
     * @return self
     */
    public function setAggs($aggs)
    {
        if (is_null($aggs)) {
            array_push($this->openAPINullablesSetToNull, 'aggs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aggs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aggs'] = $aggs;

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


