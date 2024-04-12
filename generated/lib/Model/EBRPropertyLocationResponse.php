<?php
/**
 * EBRPropertyLocationResponse
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
 * EBRPropertyLocationResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EBRPropertyLocationResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EBRPropertyLocationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'mixed',
        'namespace' => 'mixed',
        'status' => '\OpenAPI\Client\Model\EBRStatusEnum',
        'business_process' => 'mixed',
        'business_area' => 'mixed',
        'business_event' => 'mixed',
        'registration_from' => 'mixed',
        'registration_to' => 'mixed',
        'registration_actor' => 'mixed',
        'effect_from' => 'mixed',
        'effect_to' => 'mixed',
        'effect_actor' => 'mixed',
        'municipality_code' => 'mixed',
        'bfe_number' => 'mixed',
        'description' => 'mixed',
        'esdh_reference_address' => 'mixed',
        'esdh_reference_municipality_code' => 'mixed',
        'address_manually_entered' => 'mixed',
        'municipality_manually_entered' => 'mixed',
        'address' => '\OpenAPI\Client\Model\DARAddress',
        'access_address' => '\OpenAPI\Client\Model\DARAccessAddress'
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
        'municipality_code' => null,
        'bfe_number' => null,
        'description' => null,
        'esdh_reference_address' => null,
        'esdh_reference_municipality_code' => null,
        'address_manually_entered' => null,
        'municipality_manually_entered' => null,
        'address' => null,
        'access_address' => null
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
		'business_process' => true,
		'business_area' => true,
		'business_event' => true,
		'registration_from' => true,
		'registration_to' => true,
		'registration_actor' => true,
		'effect_from' => true,
		'effect_to' => true,
		'effect_actor' => true,
		'municipality_code' => true,
		'bfe_number' => true,
		'description' => true,
		'esdh_reference_address' => true,
		'esdh_reference_municipality_code' => true,
		'address_manually_entered' => true,
		'municipality_manually_entered' => true,
		'address' => false,
		'access_address' => false
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
        'municipality_code' => 'municipality_code',
        'bfe_number' => 'bfe_number',
        'description' => 'description',
        'esdh_reference_address' => 'esdh_reference_address',
        'esdh_reference_municipality_code' => 'esdh_reference_municipality_code',
        'address_manually_entered' => 'address_manually_entered',
        'municipality_manually_entered' => 'municipality_manually_entered',
        'address' => 'address',
        'access_address' => 'access_address'
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
        'municipality_code' => 'setMunicipalityCode',
        'bfe_number' => 'setBfeNumber',
        'description' => 'setDescription',
        'esdh_reference_address' => 'setEsdhReferenceAddress',
        'esdh_reference_municipality_code' => 'setEsdhReferenceMunicipalityCode',
        'address_manually_entered' => 'setAddressManuallyEntered',
        'municipality_manually_entered' => 'setMunicipalityManuallyEntered',
        'address' => 'setAddress',
        'access_address' => 'setAccessAddress'
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
        'municipality_code' => 'getMunicipalityCode',
        'bfe_number' => 'getBfeNumber',
        'description' => 'getDescription',
        'esdh_reference_address' => 'getEsdhReferenceAddress',
        'esdh_reference_municipality_code' => 'getEsdhReferenceMunicipalityCode',
        'address_manually_entered' => 'getAddressManuallyEntered',
        'municipality_manually_entered' => 'getMunicipalityManuallyEntered',
        'address' => 'getAddress',
        'access_address' => 'getAccessAddress'
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
        $this->setIfExists('municipality_code', $data ?? [], null);
        $this->setIfExists('bfe_number', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('esdh_reference_address', $data ?? [], null);
        $this->setIfExists('esdh_reference_municipality_code', $data ?? [], null);
        $this->setIfExists('address_manually_entered', $data ?? [], null);
        $this->setIfExists('municipality_manually_entered', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('access_address', $data ?? [], null);
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['business_process'] === null) {
            $invalidProperties[] = "'business_process' can't be null";
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
        if ($this->container['bfe_number'] === null) {
            $invalidProperties[] = "'bfe_number' can't be null";
        }
        if ($this->container['address_manually_entered'] === null) {
            $invalidProperties[] = "'address_manually_entered' can't be null";
        }
        if ($this->container['municipality_manually_entered'] === null) {
            $invalidProperties[] = "'municipality_manually_entered' can't be null";
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
     * @return \OpenAPI\Client\Model\EBRStatusEnum
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\EBRStatusEnum $status status
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
     * @return mixed
     */
    public function getBusinessProcess()
    {
        return $this->container['business_process'];
    }

    /**
     * Sets business_process
     *
     * @param mixed $business_process Den manuelle eller IT-understøttede proces hvori forretningsområdet håndterer hændelsen.
     *
     * @return self
     */
    public function setBusinessProcess($business_process)
    {
        if (is_null($business_process)) {
            array_push($this->openAPINullablesSetToNull, 'business_process');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('business_process', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['business_process'] = $business_process;

        return $this;
    }

    /**
     * Gets business_area
     *
     * @return mixed|null
     */
    public function getBusinessArea()
    {
        return $this->container['business_area'];
    }

    /**
     * Sets business_area
     *
     * @param mixed|null $business_area Den del af den offentlige forretning der håndterer hændelsen og derved udvirker ændringen i data.
     *
     * @return self
     */
    public function setBusinessArea($business_area)
    {
        if (is_null($business_area)) {
            array_push($this->openAPINullablesSetToNull, 'business_area');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('business_area', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['business_area'] = $business_area;

        return $this;
    }

    /**
     * Gets business_event
     *
     * @return mixed|null
     */
    public function getBusinessEvent()
    {
        return $this->container['business_event'];
    }

    /**
     * Sets business_event
     *
     * @param mixed|null $business_event Den begivenhed i virkeligheden som udløste ændringen i data.
     *
     * @return self
     */
    public function setBusinessEvent($business_event)
    {
        if (is_null($business_event)) {
            array_push($this->openAPINullablesSetToNull, 'business_event');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('business_event', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * Gets municipality_code
     *
     * @return mixed|null
     */
    public function getMunicipalityCode()
    {
        return $this->container['municipality_code'];
    }

    /**
     * Sets municipality_code
     *
     * @param mixed|null $municipality_code Udpeger den kommune som har det administrative ansvar for den bestemte faste ejendom.
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
     * Gets bfe_number
     *
     * @return mixed
     */
    public function getBfeNumber()
    {
        return $this->container['bfe_number'];
    }

    /**
     * Sets bfe_number
     *
     * @param mixed $bfe_number Udpeger den bestemte faste ejendom der har sin beliggenhed og sin kommune tilhørsforhold angivet ved en ejendomsbeliggenhed.
     *
     * @return self
     */
    public function setBfeNumber($bfe_number)
    {
        if (is_null($bfe_number)) {
            array_push($this->openAPINullablesSetToNull, 'bfe_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bfe_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bfe_number'] = $bfe_number;

        return $this;
    }

    /**
     * Gets description
     *
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param mixed|null $description Tekst der beskriver ejendommens beliggenhed i tilfælde hvor der ikke er en adresse at vælge ved udstilling af beliggenhedsadressen
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets esdh_reference_address
     *
     * @return mixed|null
     */
    public function getEsdhReferenceAddress()
    {
        return $this->container['esdh_reference_address'];
    }

    /**
     * Sets esdh_reference_address
     *
     * @param mixed|null $esdh_reference_address Journalnummer i kommunens ESDH i de tilfælde hvor der er valgt en anden adresse end den automatisk beregnede
     *
     * @return self
     */
    public function setEsdhReferenceAddress($esdh_reference_address)
    {
        if (is_null($esdh_reference_address)) {
            array_push($this->openAPINullablesSetToNull, 'esdh_reference_address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('esdh_reference_address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['esdh_reference_address'] = $esdh_reference_address;

        return $this;
    }

    /**
     * Gets esdh_reference_municipality_code
     *
     * @return mixed|null
     */
    public function getEsdhReferenceMunicipalityCode()
    {
        return $this->container['esdh_reference_municipality_code'];
    }

    /**
     * Sets esdh_reference_municipality_code
     *
     * @param mixed|null $esdh_reference_municipality_code Journalnummer i kommunens ESDH i de tilfælde hvor der er valgt en anden kommune end den automatisk beregnede.
     *
     * @return self
     */
    public function setEsdhReferenceMunicipalityCode($esdh_reference_municipality_code)
    {
        if (is_null($esdh_reference_municipality_code)) {
            array_push($this->openAPINullablesSetToNull, 'esdh_reference_municipality_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('esdh_reference_municipality_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['esdh_reference_municipality_code'] = $esdh_reference_municipality_code;

        return $this;
    }

    /**
     * Gets address_manually_entered
     *
     * @return mixed
     */
    public function getAddressManuallyEntered()
    {
        return $this->container['address_manually_entered'];
    }

    /**
     * Sets address_manually_entered
     *
     * @param mixed $address_manually_entered Markering når der er valgt en anden adresse end den der automatisk er beregnet
     *
     * @return self
     */
    public function setAddressManuallyEntered($address_manually_entered)
    {
        if (is_null($address_manually_entered)) {
            array_push($this->openAPINullablesSetToNull, 'address_manually_entered');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_manually_entered', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_manually_entered'] = $address_manually_entered;

        return $this;
    }

    /**
     * Gets municipality_manually_entered
     *
     * @return mixed
     */
    public function getMunicipalityManuallyEntered()
    {
        return $this->container['municipality_manually_entered'];
    }

    /**
     * Sets municipality_manually_entered
     *
     * @param mixed $municipality_manually_entered Markering når der er valgt en anden kommune end den der automatisk er beregnet
     *
     * @return self
     */
    public function setMunicipalityManuallyEntered($municipality_manually_entered)
    {
        if (is_null($municipality_manually_entered)) {
            array_push($this->openAPINullablesSetToNull, 'municipality_manually_entered');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('municipality_manually_entered', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['municipality_manually_entered'] = $municipality_manually_entered;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \OpenAPI\Client\Model\DARAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\DARAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets access_address
     *
     * @return \OpenAPI\Client\Model\DARAccessAddress|null
     */
    public function getAccessAddress()
    {
        return $this->container['access_address'];
    }

    /**
     * Sets access_address
     *
     * @param \OpenAPI\Client\Model\DARAccessAddress|null $access_address access_address
     *
     * @return self
     */
    public function setAccessAddress($access_address)
    {
        if (is_null($access_address)) {
            throw new \InvalidArgumentException('non-nullable access_address cannot be null');
        }
        $this->container['access_address'] = $access_address;

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

