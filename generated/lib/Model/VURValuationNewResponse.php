<?php
/**
 * VURValuationNewResponse
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
 * VURValuationNewResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VURValuationNewResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VURValuationNewResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ice_number' => 'mixed',
        'esr_number' => 'mixed',
        'type' => '\OpenAPI\Client\Model\CommercialValuationSourceEnum',
        'land_value' => 'mixed',
        'land_value_residential' => 'mixed',
        'land_value_production_land' => 'mixed',
        'land_value_other_land' => 'mixed',
        'property_value' => 'mixed',
        'property_value_taxable' => 'mixed',
        'property_value_not_taxable' => 'mixed',
        'year' => 'mixed',
        'tax_property' => 'mixed',
        'tax_land' => 'mixed',
        'tax_total' => 'mixed',
        'legal_category_text' => 'mixed',
        'legal_subcategory_text' => 'mixed',
        'preliminary' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ice_number' => null,
        'esr_number' => null,
        'type' => null,
        'land_value' => null,
        'land_value_residential' => null,
        'land_value_production_land' => null,
        'land_value_other_land' => null,
        'property_value' => null,
        'property_value_taxable' => null,
        'property_value_not_taxable' => null,
        'year' => null,
        'tax_property' => null,
        'tax_land' => null,
        'tax_total' => null,
        'legal_category_text' => null,
        'legal_subcategory_text' => null,
        'preliminary' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ice_number' => true,
		'esr_number' => true,
		'type' => false,
		'land_value' => true,
		'land_value_residential' => true,
		'land_value_production_land' => true,
		'land_value_other_land' => true,
		'property_value' => true,
		'property_value_taxable' => true,
		'property_value_not_taxable' => true,
		'year' => true,
		'tax_property' => true,
		'tax_land' => true,
		'tax_total' => true,
		'legal_category_text' => true,
		'legal_subcategory_text' => true,
		'preliminary' => true
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
        'ice_number' => 'ice_number',
        'esr_number' => 'esr_number',
        'type' => 'type',
        'land_value' => 'land_value',
        'land_value_residential' => 'land_value_residential',
        'land_value_production_land' => 'land_value_production_land',
        'land_value_other_land' => 'land_value_other_land',
        'property_value' => 'property_value',
        'property_value_taxable' => 'property_value_taxable',
        'property_value_not_taxable' => 'property_value_not_taxable',
        'year' => 'year',
        'tax_property' => 'tax_property',
        'tax_land' => 'tax_land',
        'tax_total' => 'tax_total',
        'legal_category_text' => 'legal_category_text',
        'legal_subcategory_text' => 'legal_subcategory_text',
        'preliminary' => 'preliminary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ice_number' => 'setIceNumber',
        'esr_number' => 'setEsrNumber',
        'type' => 'setType',
        'land_value' => 'setLandValue',
        'land_value_residential' => 'setLandValueResidential',
        'land_value_production_land' => 'setLandValueProductionLand',
        'land_value_other_land' => 'setLandValueOtherLand',
        'property_value' => 'setPropertyValue',
        'property_value_taxable' => 'setPropertyValueTaxable',
        'property_value_not_taxable' => 'setPropertyValueNotTaxable',
        'year' => 'setYear',
        'tax_property' => 'setTaxProperty',
        'tax_land' => 'setTaxLand',
        'tax_total' => 'setTaxTotal',
        'legal_category_text' => 'setLegalCategoryText',
        'legal_subcategory_text' => 'setLegalSubcategoryText',
        'preliminary' => 'setPreliminary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ice_number' => 'getIceNumber',
        'esr_number' => 'getEsrNumber',
        'type' => 'getType',
        'land_value' => 'getLandValue',
        'land_value_residential' => 'getLandValueResidential',
        'land_value_production_land' => 'getLandValueProductionLand',
        'land_value_other_land' => 'getLandValueOtherLand',
        'property_value' => 'getPropertyValue',
        'property_value_taxable' => 'getPropertyValueTaxable',
        'property_value_not_taxable' => 'getPropertyValueNotTaxable',
        'year' => 'getYear',
        'tax_property' => 'getTaxProperty',
        'tax_land' => 'getTaxLand',
        'tax_total' => 'getTaxTotal',
        'legal_category_text' => 'getLegalCategoryText',
        'legal_subcategory_text' => 'getLegalSubcategoryText',
        'preliminary' => 'getPreliminary'
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
        $this->setIfExists('ice_number', $data ?? [], null);
        $this->setIfExists('esr_number', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('land_value', $data ?? [], null);
        $this->setIfExists('land_value_residential', $data ?? [], null);
        $this->setIfExists('land_value_production_land', $data ?? [], null);
        $this->setIfExists('land_value_other_land', $data ?? [], null);
        $this->setIfExists('property_value', $data ?? [], null);
        $this->setIfExists('property_value_taxable', $data ?? [], null);
        $this->setIfExists('property_value_not_taxable', $data ?? [], null);
        $this->setIfExists('year', $data ?? [], null);
        $this->setIfExists('tax_property', $data ?? [], null);
        $this->setIfExists('tax_land', $data ?? [], null);
        $this->setIfExists('tax_total', $data ?? [], null);
        $this->setIfExists('legal_category_text', $data ?? [], null);
        $this->setIfExists('legal_subcategory_text', $data ?? [], null);
        $this->setIfExists('preliminary', $data ?? [], null);
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

        if ($this->container['land_value'] === null) {
            $invalidProperties[] = "'land_value' can't be null";
        }
        if ($this->container['year'] === null) {
            $invalidProperties[] = "'year' can't be null";
        }
        if ($this->container['preliminary'] === null) {
            $invalidProperties[] = "'preliminary' can't be null";
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
     * Gets ice_number
     *
     * @return mixed|null
     */
    public function getIceNumber()
    {
        return $this->container['ice_number'];
    }

    /**
     * Sets ice_number
     *
     * @param mixed|null $ice_number ice_number
     *
     * @return self
     */
    public function setIceNumber($ice_number)
    {
        if (is_null($ice_number)) {
            array_push($this->openAPINullablesSetToNull, 'ice_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ice_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ice_number'] = $ice_number;

        return $this;
    }

    /**
     * Gets esr_number
     *
     * @return mixed|null
     */
    public function getEsrNumber()
    {
        return $this->container['esr_number'];
    }

    /**
     * Sets esr_number
     *
     * @param mixed|null $esr_number esr_number
     *
     * @return self
     */
    public function setEsrNumber($esr_number)
    {
        if (is_null($esr_number)) {
            array_push($this->openAPINullablesSetToNull, 'esr_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('esr_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['esr_number'] = $esr_number;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\CommercialValuationSourceEnum|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\CommercialValuationSourceEnum|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets land_value
     *
     * @return mixed
     */
    public function getLandValue()
    {
        return $this->container['land_value'];
    }

    /**
     * Sets land_value
     *
     * @param mixed $land_value land_value
     *
     * @return self
     */
    public function setLandValue($land_value)
    {
        if (is_null($land_value)) {
            array_push($this->openAPINullablesSetToNull, 'land_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('land_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['land_value'] = $land_value;

        return $this;
    }

    /**
     * Gets land_value_residential
     *
     * @return mixed|null
     */
    public function getLandValueResidential()
    {
        return $this->container['land_value_residential'];
    }

    /**
     * Sets land_value_residential
     *
     * @param mixed|null $land_value_residential land_value_residential
     *
     * @return self
     */
    public function setLandValueResidential($land_value_residential)
    {
        if (is_null($land_value_residential)) {
            array_push($this->openAPINullablesSetToNull, 'land_value_residential');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('land_value_residential', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['land_value_residential'] = $land_value_residential;

        return $this;
    }

    /**
     * Gets land_value_production_land
     *
     * @return mixed|null
     */
    public function getLandValueProductionLand()
    {
        return $this->container['land_value_production_land'];
    }

    /**
     * Sets land_value_production_land
     *
     * @param mixed|null $land_value_production_land land_value_production_land
     *
     * @return self
     */
    public function setLandValueProductionLand($land_value_production_land)
    {
        if (is_null($land_value_production_land)) {
            array_push($this->openAPINullablesSetToNull, 'land_value_production_land');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('land_value_production_land', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['land_value_production_land'] = $land_value_production_land;

        return $this;
    }

    /**
     * Gets land_value_other_land
     *
     * @return mixed|null
     */
    public function getLandValueOtherLand()
    {
        return $this->container['land_value_other_land'];
    }

    /**
     * Sets land_value_other_land
     *
     * @param mixed|null $land_value_other_land land_value_other_land
     *
     * @return self
     */
    public function setLandValueOtherLand($land_value_other_land)
    {
        if (is_null($land_value_other_land)) {
            array_push($this->openAPINullablesSetToNull, 'land_value_other_land');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('land_value_other_land', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['land_value_other_land'] = $land_value_other_land;

        return $this;
    }

    /**
     * Gets property_value
     *
     * @return mixed|null
     */
    public function getPropertyValue()
    {
        return $this->container['property_value'];
    }

    /**
     * Sets property_value
     *
     * @param mixed|null $property_value property_value
     *
     * @return self
     */
    public function setPropertyValue($property_value)
    {
        if (is_null($property_value)) {
            array_push($this->openAPINullablesSetToNull, 'property_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('property_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['property_value'] = $property_value;

        return $this;
    }

    /**
     * Gets property_value_taxable
     *
     * @return mixed|null
     */
    public function getPropertyValueTaxable()
    {
        return $this->container['property_value_taxable'];
    }

    /**
     * Sets property_value_taxable
     *
     * @param mixed|null $property_value_taxable property_value_taxable
     *
     * @return self
     */
    public function setPropertyValueTaxable($property_value_taxable)
    {
        if (is_null($property_value_taxable)) {
            array_push($this->openAPINullablesSetToNull, 'property_value_taxable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('property_value_taxable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['property_value_taxable'] = $property_value_taxable;

        return $this;
    }

    /**
     * Gets property_value_not_taxable
     *
     * @return mixed|null
     */
    public function getPropertyValueNotTaxable()
    {
        return $this->container['property_value_not_taxable'];
    }

    /**
     * Sets property_value_not_taxable
     *
     * @param mixed|null $property_value_not_taxable property_value_not_taxable
     *
     * @return self
     */
    public function setPropertyValueNotTaxable($property_value_not_taxable)
    {
        if (is_null($property_value_not_taxable)) {
            array_push($this->openAPINullablesSetToNull, 'property_value_not_taxable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('property_value_not_taxable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['property_value_not_taxable'] = $property_value_not_taxable;

        return $this;
    }

    /**
     * Gets year
     *
     * @return mixed
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param mixed $year year
     *
     * @return self
     */
    public function setYear($year)
    {
        if (is_null($year)) {
            array_push($this->openAPINullablesSetToNull, 'year');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('year', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets tax_property
     *
     * @return mixed|null
     */
    public function getTaxProperty()
    {
        return $this->container['tax_property'];
    }

    /**
     * Sets tax_property
     *
     * @param mixed|null $tax_property tax_property
     *
     * @return self
     */
    public function setTaxProperty($tax_property)
    {
        if (is_null($tax_property)) {
            array_push($this->openAPINullablesSetToNull, 'tax_property');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tax_property', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tax_property'] = $tax_property;

        return $this;
    }

    /**
     * Gets tax_land
     *
     * @return mixed|null
     */
    public function getTaxLand()
    {
        return $this->container['tax_land'];
    }

    /**
     * Sets tax_land
     *
     * @param mixed|null $tax_land tax_land
     *
     * @return self
     */
    public function setTaxLand($tax_land)
    {
        if (is_null($tax_land)) {
            array_push($this->openAPINullablesSetToNull, 'tax_land');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tax_land', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tax_land'] = $tax_land;

        return $this;
    }

    /**
     * Gets tax_total
     *
     * @return mixed|null
     */
    public function getTaxTotal()
    {
        return $this->container['tax_total'];
    }

    /**
     * Sets tax_total
     *
     * @param mixed|null $tax_total tax_total
     *
     * @return self
     */
    public function setTaxTotal($tax_total)
    {
        if (is_null($tax_total)) {
            array_push($this->openAPINullablesSetToNull, 'tax_total');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tax_total', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tax_total'] = $tax_total;

        return $this;
    }

    /**
     * Gets legal_category_text
     *
     * @return mixed|null
     */
    public function getLegalCategoryText()
    {
        return $this->container['legal_category_text'];
    }

    /**
     * Sets legal_category_text
     *
     * @param mixed|null $legal_category_text legal_category_text
     *
     * @return self
     */
    public function setLegalCategoryText($legal_category_text)
    {
        if (is_null($legal_category_text)) {
            array_push($this->openAPINullablesSetToNull, 'legal_category_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('legal_category_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['legal_category_text'] = $legal_category_text;

        return $this;
    }

    /**
     * Gets legal_subcategory_text
     *
     * @return mixed|null
     */
    public function getLegalSubcategoryText()
    {
        return $this->container['legal_subcategory_text'];
    }

    /**
     * Sets legal_subcategory_text
     *
     * @param mixed|null $legal_subcategory_text legal_subcategory_text
     *
     * @return self
     */
    public function setLegalSubcategoryText($legal_subcategory_text)
    {
        if (is_null($legal_subcategory_text)) {
            array_push($this->openAPINullablesSetToNull, 'legal_subcategory_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('legal_subcategory_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['legal_subcategory_text'] = $legal_subcategory_text;

        return $this;
    }

    /**
     * Gets preliminary
     *
     * @return mixed
     */
    public function getPreliminary()
    {
        return $this->container['preliminary'];
    }

    /**
     * Sets preliminary
     *
     * @param mixed $preliminary preliminary
     *
     * @return self
     */
    public function setPreliminary($preliminary)
    {
        if (is_null($preliminary)) {
            array_push($this->openAPINullablesSetToNull, 'preliminary');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('preliminary', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['preliminary'] = $preliminary;

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


