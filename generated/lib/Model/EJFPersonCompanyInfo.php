<?php
/**
 * EJFPersonCompanyInfo
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
 * EJFPersonCompanyInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EJFPersonCompanyInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EJFPersonCompanyInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'mixed',
        'namespace' => 'mixed',
        'status' => '\OpenAPI\Client\Model\EJFStatusEnum',
        'business_process' => '\OpenAPI\Client\Model\EJFBusinessProcessEnum',
        'business_area' => '\OpenAPI\Client\Model\EJFBusinessAreaEnum',
        'business_event' => '\OpenAPI\Client\Model\EJFBusinessEventEnum',
        'registration_from' => 'mixed',
        'registration_to' => 'mixed',
        'registration_actor' => 'mixed',
        'effect_from' => 'mixed',
        'effect_to' => 'mixed',
        'effect_actor' => 'mixed',
        'case_id' => 'mixed',
        'name' => 'mixed',
        'pv_number' => 'mixed',
        'municipality_code' => 'mixed',
        'country_code' => 'mixed',
        'address_name' => 'mixed',
        'address_line_1' => 'mixed',
        'address_line_2' => 'mixed',
        'address_line_3' => 'mixed',
        'address_line_4' => 'mixed',
        'address_line_5' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'namespace' => null,
        'status' => null,
        'business_process' => null,
        'business_area' => null,
        'business_event' => null,
        'registration_from' => 'date-time',
        'registration_to' => 'date-time',
        'registration_actor' => null,
        'effect_from' => 'date-time',
        'effect_to' => 'date-time',
        'effect_actor' => null,
        'case_id' => 'uuid',
        'name' => null,
        'pv_number' => null,
        'municipality_code' => null,
        'country_code' => null,
        'address_name' => null,
        'address_line_1' => null,
        'address_line_2' => null,
        'address_line_3' => null,
        'address_line_4' => null,
        'address_line_5' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'namespace' => true,
		'status' => false,
		'business_process' => false,
		'business_area' => false,
		'business_event' => false,
		'registration_from' => true,
		'registration_to' => true,
		'registration_actor' => true,
		'effect_from' => true,
		'effect_to' => true,
		'effect_actor' => true,
		'case_id' => true,
		'name' => true,
		'pv_number' => true,
		'municipality_code' => true,
		'country_code' => true,
		'address_name' => true,
		'address_line_1' => true,
		'address_line_2' => true,
		'address_line_3' => true,
		'address_line_4' => true,
		'address_line_5' => true
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
        'id' => 'id',
        'namespace' => 'namespace',
        'status' => 'status',
        'business_process' => 'business_process',
        'business_area' => 'business_area',
        'business_event' => 'business_event',
        'registration_from' => 'registration_from',
        'registration_to' => 'registration_to',
        'registration_actor' => 'registration_actor',
        'effect_from' => 'effect_from',
        'effect_to' => 'effect_to',
        'effect_actor' => 'effect_actor',
        'case_id' => 'case_id',
        'name' => 'name',
        'pv_number' => 'pv_number',
        'municipality_code' => 'municipality_code',
        'country_code' => 'country_code',
        'address_name' => 'address_name',
        'address_line_1' => 'address_line_1',
        'address_line_2' => 'address_line_2',
        'address_line_3' => 'address_line_3',
        'address_line_4' => 'address_line_4',
        'address_line_5' => 'address_line_5'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'namespace' => 'setNamespace',
        'status' => 'setStatus',
        'business_process' => 'setBusinessProcess',
        'business_area' => 'setBusinessArea',
        'business_event' => 'setBusinessEvent',
        'registration_from' => 'setRegistrationFrom',
        'registration_to' => 'setRegistrationTo',
        'registration_actor' => 'setRegistrationActor',
        'effect_from' => 'setEffectFrom',
        'effect_to' => 'setEffectTo',
        'effect_actor' => 'setEffectActor',
        'case_id' => 'setCaseId',
        'name' => 'setName',
        'pv_number' => 'setPvNumber',
        'municipality_code' => 'setMunicipalityCode',
        'country_code' => 'setCountryCode',
        'address_name' => 'setAddressName',
        'address_line_1' => 'setAddressLine1',
        'address_line_2' => 'setAddressLine2',
        'address_line_3' => 'setAddressLine3',
        'address_line_4' => 'setAddressLine4',
        'address_line_5' => 'setAddressLine5'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'namespace' => 'getNamespace',
        'status' => 'getStatus',
        'business_process' => 'getBusinessProcess',
        'business_area' => 'getBusinessArea',
        'business_event' => 'getBusinessEvent',
        'registration_from' => 'getRegistrationFrom',
        'registration_to' => 'getRegistrationTo',
        'registration_actor' => 'getRegistrationActor',
        'effect_from' => 'getEffectFrom',
        'effect_to' => 'getEffectTo',
        'effect_actor' => 'getEffectActor',
        'case_id' => 'getCaseId',
        'name' => 'getName',
        'pv_number' => 'getPvNumber',
        'municipality_code' => 'getMunicipalityCode',
        'country_code' => 'getCountryCode',
        'address_name' => 'getAddressName',
        'address_line_1' => 'getAddressLine1',
        'address_line_2' => 'getAddressLine2',
        'address_line_3' => 'getAddressLine3',
        'address_line_4' => 'getAddressLine4',
        'address_line_5' => 'getAddressLine5'
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
        $this->setIfExists('namespace', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('business_process', $data ?? [], null);
        $this->setIfExists('business_area', $data ?? [], null);
        $this->setIfExists('business_event', $data ?? [], null);
        $this->setIfExists('registration_from', $data ?? [], null);
        $this->setIfExists('registration_to', $data ?? [], null);
        $this->setIfExists('registration_actor', $data ?? [], null);
        $this->setIfExists('effect_from', $data ?? [], null);
        $this->setIfExists('effect_to', $data ?? [], null);
        $this->setIfExists('effect_actor', $data ?? [], null);
        $this->setIfExists('case_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('pv_number', $data ?? [], null);
        $this->setIfExists('municipality_code', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('address_name', $data ?? [], null);
        $this->setIfExists('address_line_1', $data ?? [], null);
        $this->setIfExists('address_line_2', $data ?? [], null);
        $this->setIfExists('address_line_3', $data ?? [], null);
        $this->setIfExists('address_line_4', $data ?? [], null);
        $this->setIfExists('address_line_5', $data ?? [], null);
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
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['registration_from'] === null) {
            $invalidProperties[] = "'registration_from' can't be null";
        }
        if ($this->container['registration_actor'] === null) {
            $invalidProperties[] = "'registration_actor' can't be null";
        }
        if ($this->container['effect_from'] === null) {
            $invalidProperties[] = "'effect_from' can't be null";
        }
        if ($this->container['effect_actor'] === null) {
            $invalidProperties[] = "'effect_actor' can't be null";
        }
        if ($this->container['case_id'] === null) {
            $invalidProperties[] = "'case_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['municipality_code'] === null) {
            $invalidProperties[] = "'municipality_code' can't be null";
        }
        if ($this->container['address_name'] === null) {
            $invalidProperties[] = "'address_name' can't be null";
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
     * @param mixed $id Persistent unik nøgle.
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
     * Gets namespace
     *
     * @return mixed
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param mixed $namespace namespace
     *
     * @return self
     */
    public function setNamespace($namespace)
    {
        if (is_null($namespace)) {
            array_push($this->openAPINullablesSetToNull, 'namespace');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('namespace', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\EJFStatusEnum|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\EJFStatusEnum|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets business_process
     *
     * @return \OpenAPI\Client\Model\EJFBusinessProcessEnum|null
     */
    public function getBusinessProcess()
    {
        return $this->container['business_process'];
    }

    /**
     * Sets business_process
     *
     * @param \OpenAPI\Client\Model\EJFBusinessProcessEnum|null $business_process business_process
     *
     * @return self
     */
    public function setBusinessProcess($business_process)
    {
        if (is_null($business_process)) {
            throw new \InvalidArgumentException('non-nullable business_process cannot be null');
        }
        $this->container['business_process'] = $business_process;

        return $this;
    }

    /**
     * Gets business_area
     *
     * @return \OpenAPI\Client\Model\EJFBusinessAreaEnum|null
     */
    public function getBusinessArea()
    {
        return $this->container['business_area'];
    }

    /**
     * Sets business_area
     *
     * @param \OpenAPI\Client\Model\EJFBusinessAreaEnum|null $business_area business_area
     *
     * @return self
     */
    public function setBusinessArea($business_area)
    {
        if (is_null($business_area)) {
            throw new \InvalidArgumentException('non-nullable business_area cannot be null');
        }
        $this->container['business_area'] = $business_area;

        return $this;
    }

    /**
     * Gets business_event
     *
     * @return \OpenAPI\Client\Model\EJFBusinessEventEnum|null
     */
    public function getBusinessEvent()
    {
        return $this->container['business_event'];
    }

    /**
     * Sets business_event
     *
     * @param \OpenAPI\Client\Model\EJFBusinessEventEnum|null $business_event business_event
     *
     * @return self
     */
    public function setBusinessEvent($business_event)
    {
        if (is_null($business_event)) {
            throw new \InvalidArgumentException('non-nullable business_event cannot be null');
        }
        $this->container['business_event'] = $business_event;

        return $this;
    }

    /**
     * Gets registration_from
     *
     * @return mixed
     */
    public function getRegistrationFrom()
    {
        return $this->container['registration_from'];
    }

    /**
     * Sets registration_from
     *
     * @param mixed $registration_from Tidspunktet hvor registreringen er foretaget.
     *
     * @return self
     */
    public function setRegistrationFrom($registration_from)
    {
        if (is_null($registration_from)) {
            array_push($this->openAPINullablesSetToNull, 'registration_from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('registration_from', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['registration_from'] = $registration_from;

        return $this;
    }

    /**
     * Gets registration_to
     *
     * @return mixed|null
     */
    public function getRegistrationTo()
    {
        return $this->container['registration_to'];
    }

    /**
     * Sets registration_to
     *
     * @param mixed|null $registration_to Tidspunktet hvor en ny registrering er foretaget på objektet, og hvor denne version således ikke længere er den seneste.
     *
     * @return self
     */
    public function setRegistrationTo($registration_to)
    {
        if (is_null($registration_to)) {
            array_push($this->openAPINullablesSetToNull, 'registration_to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('registration_to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['registration_to'] = $registration_to;

        return $this;
    }

    /**
     * Gets registration_actor
     *
     * @return mixed
     */
    public function getRegistrationActor()
    {
        return $this->container['registration_actor'];
    }

    /**
     * Sets registration_actor
     *
     * @param mixed $registration_actor Den aktør der har foretaget registreringen.
     *
     * @return self
     */
    public function setRegistrationActor($registration_actor)
    {
        if (is_null($registration_actor)) {
            array_push($this->openAPINullablesSetToNull, 'registration_actor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('registration_actor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['registration_actor'] = $registration_actor;

        return $this;
    }

    /**
     * Gets effect_from
     *
     * @return mixed
     */
    public function getEffectFrom()
    {
        return $this->container['effect_from'];
    }

    /**
     * Sets effect_from
     *
     * @param mixed $effect_from Tidspunktet hvorfra objektet har virkning.
     *
     * @return self
     */
    public function setEffectFrom($effect_from)
    {
        if (is_null($effect_from)) {
            array_push($this->openAPINullablesSetToNull, 'effect_from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('effect_from', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['effect_from'] = $effect_from;

        return $this;
    }

    /**
     * Gets effect_to
     *
     * @return mixed|null
     */
    public function getEffectTo()
    {
        return $this->container['effect_to'];
    }

    /**
     * Sets effect_to
     *
     * @param mixed|null $effect_to Tidspunktet hvor objektets virkning ophører.
     *
     * @return self
     */
    public function setEffectTo($effect_to)
    {
        if (is_null($effect_to)) {
            array_push($this->openAPINullablesSetToNull, 'effect_to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('effect_to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['effect_to'] = $effect_to;

        return $this;
    }

    /**
     * Gets effect_actor
     *
     * @return mixed
     */
    public function getEffectActor()
    {
        return $this->container['effect_actor'];
    }

    /**
     * Sets effect_actor
     *
     * @param mixed $effect_actor Den aktør der har afstedkommet objektets virkning.
     *
     * @return self
     */
    public function setEffectActor($effect_actor)
    {
        if (is_null($effect_actor)) {
            array_push($this->openAPINullablesSetToNull, 'effect_actor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('effect_actor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['effect_actor'] = $effect_actor;

        return $this;
    }

    /**
     * Gets case_id
     *
     * @return mixed
     */
    public function getCaseId()
    {
        return $this->container['case_id'];
    }

    /**
     * Sets case_id
     *
     * @param mixed $case_id Persistent unik nøgle for den Ejerskabshændelse behandling eller Person/Virksomhedshændelse behandling, som objektet senest er ændret ved.
     *
     * @return self
     */
    public function setCaseId($case_id)
    {
        if (is_null($case_id)) {
            array_push($this->openAPINullablesSetToNull, 'case_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('case_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['case_id'] = $case_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param mixed $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pv_number
     *
     * @return mixed|null
     */
    public function getPvNumber()
    {
        return $this->container['pv_number'];
    }

    /**
     * Sets pv_number
     *
     * @param mixed|null $pv_number pv_number
     *
     * @return self
     */
    public function setPvNumber($pv_number)
    {
        if (is_null($pv_number)) {
            array_push($this->openAPINullablesSetToNull, 'pv_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pv_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pv_number'] = $pv_number;

        return $this;
    }

    /**
     * Gets municipality_code
     *
     * @return mixed
     */
    public function getMunicipalityCode()
    {
        return $this->container['municipality_code'];
    }

    /**
     * Sets municipality_code
     *
     * @param mixed $municipality_code municipality_code
     *
     * @return self
     */
    public function setMunicipalityCode($municipality_code)
    {
        if (is_null($municipality_code)) {
            array_push($this->openAPINullablesSetToNull, 'municipality_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('municipality_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['municipality_code'] = $municipality_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return mixed|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param mixed|null $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            array_push($this->openAPINullablesSetToNull, 'country_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets address_name
     *
     * @return mixed
     */
    public function getAddressName()
    {
        return $this->container['address_name'];
    }

    /**
     * Sets address_name
     *
     * @param mixed $address_name address_name
     *
     * @return self
     */
    public function setAddressName($address_name)
    {
        if (is_null($address_name)) {
            array_push($this->openAPINullablesSetToNull, 'address_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_name'] = $address_name;

        return $this;
    }

    /**
     * Gets address_line_1
     *
     * @return mixed|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line_1'];
    }

    /**
     * Sets address_line_1
     *
     * @param mixed|null $address_line_1 address_line_1
     *
     * @return self
     */
    public function setAddressLine1($address_line_1)
    {
        if (is_null($address_line_1)) {
            array_push($this->openAPINullablesSetToNull, 'address_line_1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_line_1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_line_1'] = $address_line_1;

        return $this;
    }

    /**
     * Gets address_line_2
     *
     * @return mixed|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line_2'];
    }

    /**
     * Sets address_line_2
     *
     * @param mixed|null $address_line_2 address_line_2
     *
     * @return self
     */
    public function setAddressLine2($address_line_2)
    {
        if (is_null($address_line_2)) {
            array_push($this->openAPINullablesSetToNull, 'address_line_2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_line_2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_line_2'] = $address_line_2;

        return $this;
    }

    /**
     * Gets address_line_3
     *
     * @return mixed|null
     */
    public function getAddressLine3()
    {
        return $this->container['address_line_3'];
    }

    /**
     * Sets address_line_3
     *
     * @param mixed|null $address_line_3 address_line_3
     *
     * @return self
     */
    public function setAddressLine3($address_line_3)
    {
        if (is_null($address_line_3)) {
            array_push($this->openAPINullablesSetToNull, 'address_line_3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_line_3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_line_3'] = $address_line_3;

        return $this;
    }

    /**
     * Gets address_line_4
     *
     * @return mixed|null
     */
    public function getAddressLine4()
    {
        return $this->container['address_line_4'];
    }

    /**
     * Sets address_line_4
     *
     * @param mixed|null $address_line_4 address_line_4
     *
     * @return self
     */
    public function setAddressLine4($address_line_4)
    {
        if (is_null($address_line_4)) {
            array_push($this->openAPINullablesSetToNull, 'address_line_4');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_line_4', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_line_4'] = $address_line_4;

        return $this;
    }

    /**
     * Gets address_line_5
     *
     * @return mixed|null
     */
    public function getAddressLine5()
    {
        return $this->container['address_line_5'];
    }

    /**
     * Sets address_line_5
     *
     * @param mixed|null $address_line_5 address_line_5
     *
     * @return self
     */
    public function setAddressLine5($address_line_5)
    {
        if (is_null($address_line_5)) {
            array_push($this->openAPINullablesSetToNull, 'address_line_5');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_line_5', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_line_5'] = $address_line_5;

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

