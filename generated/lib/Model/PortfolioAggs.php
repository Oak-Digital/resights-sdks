<?php
/**
 * PortfolioAggs
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
 * PortfolioAggs Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PortfolioAggs implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PortfolioAggs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'properties' => 'mixed',
        'sfe' => '\OpenAPI\Client\Model\Bound',
        'bpfg' => '\OpenAPI\Client\Model\Bound',
        'condominium' => '\OpenAPI\Client\Model\Bound',
        'valuation_properties' => '\OpenAPI\Client\Model\Bound',
        'number_properties' => '\OpenAPI\Client\Model\Bound',
        'number_lands' => '\OpenAPI\Client\Model\Bound',
        'property_value_amount' => '\OpenAPI\Client\Model\Bound',
        'land_value_amount' => '\OpenAPI\Client\Model\Bound',
        'enh027_area_residential' => '\OpenAPI\Client\Model\Bound',
        'enh027_area_residential_bs' => '\OpenAPI\Client\Model\Bound',
        'enh028_area_commercial' => '\OpenAPI\Client\Model\Bound',
        'enh028_area_commercial_bs' => '\OpenAPI\Client\Model\Bound',
        'unit_area' => '\OpenAPI\Client\Model\Bound',
        'land_area' => '\OpenAPI\Client\Model\Bound',
        'units_commercial' => '\OpenAPI\Client\Model\Bound',
        'units_commercial_bs' => '\OpenAPI\Client\Model\Bound',
        'units_residential' => '\OpenAPI\Client\Model\Bound',
        'units_residential_bs' => '\OpenAPI\Client\Model\Bound',
        'units' => '\OpenAPI\Client\Model\Bound',
        'usage' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'properties' => null,
        'sfe' => null,
        'bpfg' => null,
        'condominium' => null,
        'valuation_properties' => null,
        'number_properties' => null,
        'number_lands' => null,
        'property_value_amount' => null,
        'land_value_amount' => null,
        'enh027_area_residential' => null,
        'enh027_area_residential_bs' => null,
        'enh028_area_commercial' => null,
        'enh028_area_commercial_bs' => null,
        'unit_area' => null,
        'land_area' => null,
        'units_commercial' => null,
        'units_commercial_bs' => null,
        'units_residential' => null,
        'units_residential_bs' => null,
        'units' => null,
        'usage' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'properties' => true,
		'sfe' => false,
		'bpfg' => false,
		'condominium' => false,
		'valuation_properties' => false,
		'number_properties' => false,
		'number_lands' => false,
		'property_value_amount' => false,
		'land_value_amount' => false,
		'enh027_area_residential' => false,
		'enh027_area_residential_bs' => false,
		'enh028_area_commercial' => false,
		'enh028_area_commercial_bs' => false,
		'unit_area' => false,
		'land_area' => false,
		'units_commercial' => false,
		'units_commercial_bs' => false,
		'units_residential' => false,
		'units_residential_bs' => false,
		'units' => false,
		'usage' => true
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
        'properties' => 'properties',
        'sfe' => 'sfe',
        'bpfg' => 'bpfg',
        'condominium' => 'condominium',
        'valuation_properties' => 'valuation_properties',
        'number_properties' => 'number_properties',
        'number_lands' => 'number_lands',
        'property_value_amount' => 'property_value_amount',
        'land_value_amount' => 'land_value_amount',
        'enh027_area_residential' => 'enh027_area_residential',
        'enh027_area_residential_bs' => 'enh027_area_residential_bs',
        'enh028_area_commercial' => 'enh028_area_commercial',
        'enh028_area_commercial_bs' => 'enh028_area_commercial_bs',
        'unit_area' => 'unit_area',
        'land_area' => 'land_area',
        'units_commercial' => 'units_commercial',
        'units_commercial_bs' => 'units_commercial_bs',
        'units_residential' => 'units_residential',
        'units_residential_bs' => 'units_residential_bs',
        'units' => 'units',
        'usage' => 'usage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'properties' => 'setProperties',
        'sfe' => 'setSfe',
        'bpfg' => 'setBpfg',
        'condominium' => 'setCondominium',
        'valuation_properties' => 'setValuationProperties',
        'number_properties' => 'setNumberProperties',
        'number_lands' => 'setNumberLands',
        'property_value_amount' => 'setPropertyValueAmount',
        'land_value_amount' => 'setLandValueAmount',
        'enh027_area_residential' => 'setEnh027AreaResidential',
        'enh027_area_residential_bs' => 'setEnh027AreaResidentialBs',
        'enh028_area_commercial' => 'setEnh028AreaCommercial',
        'enh028_area_commercial_bs' => 'setEnh028AreaCommercialBs',
        'unit_area' => 'setUnitArea',
        'land_area' => 'setLandArea',
        'units_commercial' => 'setUnitsCommercial',
        'units_commercial_bs' => 'setUnitsCommercialBs',
        'units_residential' => 'setUnitsResidential',
        'units_residential_bs' => 'setUnitsResidentialBs',
        'units' => 'setUnits',
        'usage' => 'setUsage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'properties' => 'getProperties',
        'sfe' => 'getSfe',
        'bpfg' => 'getBpfg',
        'condominium' => 'getCondominium',
        'valuation_properties' => 'getValuationProperties',
        'number_properties' => 'getNumberProperties',
        'number_lands' => 'getNumberLands',
        'property_value_amount' => 'getPropertyValueAmount',
        'land_value_amount' => 'getLandValueAmount',
        'enh027_area_residential' => 'getEnh027AreaResidential',
        'enh027_area_residential_bs' => 'getEnh027AreaResidentialBs',
        'enh028_area_commercial' => 'getEnh028AreaCommercial',
        'enh028_area_commercial_bs' => 'getEnh028AreaCommercialBs',
        'unit_area' => 'getUnitArea',
        'land_area' => 'getLandArea',
        'units_commercial' => 'getUnitsCommercial',
        'units_commercial_bs' => 'getUnitsCommercialBs',
        'units_residential' => 'getUnitsResidential',
        'units_residential_bs' => 'getUnitsResidentialBs',
        'units' => 'getUnits',
        'usage' => 'getUsage'
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
        $this->setIfExists('properties', $data ?? [], null);
        $this->setIfExists('sfe', $data ?? [], null);
        $this->setIfExists('bpfg', $data ?? [], null);
        $this->setIfExists('condominium', $data ?? [], null);
        $this->setIfExists('valuation_properties', $data ?? [], null);
        $this->setIfExists('number_properties', $data ?? [], null);
        $this->setIfExists('number_lands', $data ?? [], null);
        $this->setIfExists('property_value_amount', $data ?? [], null);
        $this->setIfExists('land_value_amount', $data ?? [], null);
        $this->setIfExists('enh027_area_residential', $data ?? [], null);
        $this->setIfExists('enh027_area_residential_bs', $data ?? [], null);
        $this->setIfExists('enh028_area_commercial', $data ?? [], null);
        $this->setIfExists('enh028_area_commercial_bs', $data ?? [], null);
        $this->setIfExists('unit_area', $data ?? [], null);
        $this->setIfExists('land_area', $data ?? [], null);
        $this->setIfExists('units_commercial', $data ?? [], null);
        $this->setIfExists('units_commercial_bs', $data ?? [], null);
        $this->setIfExists('units_residential', $data ?? [], null);
        $this->setIfExists('units_residential_bs', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
        $this->setIfExists('usage', $data ?? [], null);
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

        if ($this->container['sfe'] === null) {
            $invalidProperties[] = "'sfe' can't be null";
        }
        if ($this->container['bpfg'] === null) {
            $invalidProperties[] = "'bpfg' can't be null";
        }
        if ($this->container['condominium'] === null) {
            $invalidProperties[] = "'condominium' can't be null";
        }
        if ($this->container['valuation_properties'] === null) {
            $invalidProperties[] = "'valuation_properties' can't be null";
        }
        if ($this->container['number_properties'] === null) {
            $invalidProperties[] = "'number_properties' can't be null";
        }
        if ($this->container['number_lands'] === null) {
            $invalidProperties[] = "'number_lands' can't be null";
        }
        if ($this->container['property_value_amount'] === null) {
            $invalidProperties[] = "'property_value_amount' can't be null";
        }
        if ($this->container['land_value_amount'] === null) {
            $invalidProperties[] = "'land_value_amount' can't be null";
        }
        if ($this->container['enh027_area_residential'] === null) {
            $invalidProperties[] = "'enh027_area_residential' can't be null";
        }
        if ($this->container['enh027_area_residential_bs'] === null) {
            $invalidProperties[] = "'enh027_area_residential_bs' can't be null";
        }
        if ($this->container['enh028_area_commercial'] === null) {
            $invalidProperties[] = "'enh028_area_commercial' can't be null";
        }
        if ($this->container['enh028_area_commercial_bs'] === null) {
            $invalidProperties[] = "'enh028_area_commercial_bs' can't be null";
        }
        if ($this->container['unit_area'] === null) {
            $invalidProperties[] = "'unit_area' can't be null";
        }
        if ($this->container['land_area'] === null) {
            $invalidProperties[] = "'land_area' can't be null";
        }
        if ($this->container['units_commercial'] === null) {
            $invalidProperties[] = "'units_commercial' can't be null";
        }
        if ($this->container['units_commercial_bs'] === null) {
            $invalidProperties[] = "'units_commercial_bs' can't be null";
        }
        if ($this->container['units_residential'] === null) {
            $invalidProperties[] = "'units_residential' can't be null";
        }
        if ($this->container['units_residential_bs'] === null) {
            $invalidProperties[] = "'units_residential_bs' can't be null";
        }
        if ($this->container['units'] === null) {
            $invalidProperties[] = "'units' can't be null";
        }
        if ($this->container['usage'] === null) {
            $invalidProperties[] = "'usage' can't be null";
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
     * Gets properties
     *
     * @return mixed|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param mixed|null $properties properties
     *
     * @return self
     */
    public function setProperties($properties)
    {
        if (is_null($properties)) {
            array_push($this->openAPINullablesSetToNull, 'properties');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('properties', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets sfe
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getSfe()
    {
        return $this->container['sfe'];
    }

    /**
     * Sets sfe
     *
     * @param \OpenAPI\Client\Model\Bound $sfe sfe
     *
     * @return self
     */
    public function setSfe($sfe)
    {
        if (is_null($sfe)) {
            throw new \InvalidArgumentException('non-nullable sfe cannot be null');
        }
        $this->container['sfe'] = $sfe;

        return $this;
    }

    /**
     * Gets bpfg
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getBpfg()
    {
        return $this->container['bpfg'];
    }

    /**
     * Sets bpfg
     *
     * @param \OpenAPI\Client\Model\Bound $bpfg bpfg
     *
     * @return self
     */
    public function setBpfg($bpfg)
    {
        if (is_null($bpfg)) {
            throw new \InvalidArgumentException('non-nullable bpfg cannot be null');
        }
        $this->container['bpfg'] = $bpfg;

        return $this;
    }

    /**
     * Gets condominium
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getCondominium()
    {
        return $this->container['condominium'];
    }

    /**
     * Sets condominium
     *
     * @param \OpenAPI\Client\Model\Bound $condominium condominium
     *
     * @return self
     */
    public function setCondominium($condominium)
    {
        if (is_null($condominium)) {
            throw new \InvalidArgumentException('non-nullable condominium cannot be null');
        }
        $this->container['condominium'] = $condominium;

        return $this;
    }

    /**
     * Gets valuation_properties
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getValuationProperties()
    {
        return $this->container['valuation_properties'];
    }

    /**
     * Sets valuation_properties
     *
     * @param \OpenAPI\Client\Model\Bound $valuation_properties valuation_properties
     *
     * @return self
     */
    public function setValuationProperties($valuation_properties)
    {
        if (is_null($valuation_properties)) {
            throw new \InvalidArgumentException('non-nullable valuation_properties cannot be null');
        }
        $this->container['valuation_properties'] = $valuation_properties;

        return $this;
    }

    /**
     * Gets number_properties
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getNumberProperties()
    {
        return $this->container['number_properties'];
    }

    /**
     * Sets number_properties
     *
     * @param \OpenAPI\Client\Model\Bound $number_properties number_properties
     *
     * @return self
     */
    public function setNumberProperties($number_properties)
    {
        if (is_null($number_properties)) {
            throw new \InvalidArgumentException('non-nullable number_properties cannot be null');
        }
        $this->container['number_properties'] = $number_properties;

        return $this;
    }

    /**
     * Gets number_lands
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getNumberLands()
    {
        return $this->container['number_lands'];
    }

    /**
     * Sets number_lands
     *
     * @param \OpenAPI\Client\Model\Bound $number_lands number_lands
     *
     * @return self
     */
    public function setNumberLands($number_lands)
    {
        if (is_null($number_lands)) {
            throw new \InvalidArgumentException('non-nullable number_lands cannot be null');
        }
        $this->container['number_lands'] = $number_lands;

        return $this;
    }

    /**
     * Gets property_value_amount
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getPropertyValueAmount()
    {
        return $this->container['property_value_amount'];
    }

    /**
     * Sets property_value_amount
     *
     * @param \OpenAPI\Client\Model\Bound $property_value_amount property_value_amount
     *
     * @return self
     */
    public function setPropertyValueAmount($property_value_amount)
    {
        if (is_null($property_value_amount)) {
            throw new \InvalidArgumentException('non-nullable property_value_amount cannot be null');
        }
        $this->container['property_value_amount'] = $property_value_amount;

        return $this;
    }

    /**
     * Gets land_value_amount
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getLandValueAmount()
    {
        return $this->container['land_value_amount'];
    }

    /**
     * Sets land_value_amount
     *
     * @param \OpenAPI\Client\Model\Bound $land_value_amount land_value_amount
     *
     * @return self
     */
    public function setLandValueAmount($land_value_amount)
    {
        if (is_null($land_value_amount)) {
            throw new \InvalidArgumentException('non-nullable land_value_amount cannot be null');
        }
        $this->container['land_value_amount'] = $land_value_amount;

        return $this;
    }

    /**
     * Gets enh027_area_residential
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getEnh027AreaResidential()
    {
        return $this->container['enh027_area_residential'];
    }

    /**
     * Sets enh027_area_residential
     *
     * @param \OpenAPI\Client\Model\Bound $enh027_area_residential enh027_area_residential
     *
     * @return self
     */
    public function setEnh027AreaResidential($enh027_area_residential)
    {
        if (is_null($enh027_area_residential)) {
            throw new \InvalidArgumentException('non-nullable enh027_area_residential cannot be null');
        }
        $this->container['enh027_area_residential'] = $enh027_area_residential;

        return $this;
    }

    /**
     * Gets enh027_area_residential_bs
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getEnh027AreaResidentialBs()
    {
        return $this->container['enh027_area_residential_bs'];
    }

    /**
     * Sets enh027_area_residential_bs
     *
     * @param \OpenAPI\Client\Model\Bound $enh027_area_residential_bs enh027_area_residential_bs
     *
     * @return self
     */
    public function setEnh027AreaResidentialBs($enh027_area_residential_bs)
    {
        if (is_null($enh027_area_residential_bs)) {
            throw new \InvalidArgumentException('non-nullable enh027_area_residential_bs cannot be null');
        }
        $this->container['enh027_area_residential_bs'] = $enh027_area_residential_bs;

        return $this;
    }

    /**
     * Gets enh028_area_commercial
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getEnh028AreaCommercial()
    {
        return $this->container['enh028_area_commercial'];
    }

    /**
     * Sets enh028_area_commercial
     *
     * @param \OpenAPI\Client\Model\Bound $enh028_area_commercial enh028_area_commercial
     *
     * @return self
     */
    public function setEnh028AreaCommercial($enh028_area_commercial)
    {
        if (is_null($enh028_area_commercial)) {
            throw new \InvalidArgumentException('non-nullable enh028_area_commercial cannot be null');
        }
        $this->container['enh028_area_commercial'] = $enh028_area_commercial;

        return $this;
    }

    /**
     * Gets enh028_area_commercial_bs
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getEnh028AreaCommercialBs()
    {
        return $this->container['enh028_area_commercial_bs'];
    }

    /**
     * Sets enh028_area_commercial_bs
     *
     * @param \OpenAPI\Client\Model\Bound $enh028_area_commercial_bs enh028_area_commercial_bs
     *
     * @return self
     */
    public function setEnh028AreaCommercialBs($enh028_area_commercial_bs)
    {
        if (is_null($enh028_area_commercial_bs)) {
            throw new \InvalidArgumentException('non-nullable enh028_area_commercial_bs cannot be null');
        }
        $this->container['enh028_area_commercial_bs'] = $enh028_area_commercial_bs;

        return $this;
    }

    /**
     * Gets unit_area
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getUnitArea()
    {
        return $this->container['unit_area'];
    }

    /**
     * Sets unit_area
     *
     * @param \OpenAPI\Client\Model\Bound $unit_area unit_area
     *
     * @return self
     */
    public function setUnitArea($unit_area)
    {
        if (is_null($unit_area)) {
            throw new \InvalidArgumentException('non-nullable unit_area cannot be null');
        }
        $this->container['unit_area'] = $unit_area;

        return $this;
    }

    /**
     * Gets land_area
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getLandArea()
    {
        return $this->container['land_area'];
    }

    /**
     * Sets land_area
     *
     * @param \OpenAPI\Client\Model\Bound $land_area land_area
     *
     * @return self
     */
    public function setLandArea($land_area)
    {
        if (is_null($land_area)) {
            throw new \InvalidArgumentException('non-nullable land_area cannot be null');
        }
        $this->container['land_area'] = $land_area;

        return $this;
    }

    /**
     * Gets units_commercial
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getUnitsCommercial()
    {
        return $this->container['units_commercial'];
    }

    /**
     * Sets units_commercial
     *
     * @param \OpenAPI\Client\Model\Bound $units_commercial units_commercial
     *
     * @return self
     */
    public function setUnitsCommercial($units_commercial)
    {
        if (is_null($units_commercial)) {
            throw new \InvalidArgumentException('non-nullable units_commercial cannot be null');
        }
        $this->container['units_commercial'] = $units_commercial;

        return $this;
    }

    /**
     * Gets units_commercial_bs
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getUnitsCommercialBs()
    {
        return $this->container['units_commercial_bs'];
    }

    /**
     * Sets units_commercial_bs
     *
     * @param \OpenAPI\Client\Model\Bound $units_commercial_bs units_commercial_bs
     *
     * @return self
     */
    public function setUnitsCommercialBs($units_commercial_bs)
    {
        if (is_null($units_commercial_bs)) {
            throw new \InvalidArgumentException('non-nullable units_commercial_bs cannot be null');
        }
        $this->container['units_commercial_bs'] = $units_commercial_bs;

        return $this;
    }

    /**
     * Gets units_residential
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getUnitsResidential()
    {
        return $this->container['units_residential'];
    }

    /**
     * Sets units_residential
     *
     * @param \OpenAPI\Client\Model\Bound $units_residential units_residential
     *
     * @return self
     */
    public function setUnitsResidential($units_residential)
    {
        if (is_null($units_residential)) {
            throw new \InvalidArgumentException('non-nullable units_residential cannot be null');
        }
        $this->container['units_residential'] = $units_residential;

        return $this;
    }

    /**
     * Gets units_residential_bs
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getUnitsResidentialBs()
    {
        return $this->container['units_residential_bs'];
    }

    /**
     * Sets units_residential_bs
     *
     * @param \OpenAPI\Client\Model\Bound $units_residential_bs units_residential_bs
     *
     * @return self
     */
    public function setUnitsResidentialBs($units_residential_bs)
    {
        if (is_null($units_residential_bs)) {
            throw new \InvalidArgumentException('non-nullable units_residential_bs cannot be null');
        }
        $this->container['units_residential_bs'] = $units_residential_bs;

        return $this;
    }

    /**
     * Gets units
     *
     * @return \OpenAPI\Client\Model\Bound
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param \OpenAPI\Client\Model\Bound $units units
     *
     * @return self
     */
    public function setUnits($units)
    {
        if (is_null($units)) {
            throw new \InvalidArgumentException('non-nullable units cannot be null');
        }
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return mixed
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param mixed $usage usage
     *
     * @return self
     */
    public function setUsage($usage)
    {
        if (is_null($usage)) {
            array_push($this->openAPINullablesSetToNull, 'usage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('usage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['usage'] = $usage;

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

