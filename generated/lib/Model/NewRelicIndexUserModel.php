<?php
/**
 * NewRelicIndexUserModel
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
 * NewRelicIndexUserModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NewRelicIndexUserModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewRelicIndexUserModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'mixed',
        'user_id' => 'mixed',
        'company_id' => 'mixed',
        'date' => 'mixed',
        'sum_content_length' => 'mixed',
        'count_requests' => 'mixed',
        'count_unique_users' => 'mixed',
        'count_unique_ips' => 'mixed',
        'count_unique_user_agents' => 'mixed',
        'count_unique_sessions' => 'mixed',
        'count_persons' => 'mixed',
        'count_companies' => 'mixed',
        'count_properties' => 'mixed',
        'count_company_reports' => 'mixed',
        'count_conflict_reports' => 'mixed',
        'count_property_reports' => 'mixed',
        'count_exports' => 'mixed',
        'count_sampant_exports' => 'mixed',
        'count_document_packages' => 'mixed',
        'count_map_requests' => 'mixed',
        'count_map_layers' => 'mixed',
        'score' => 'mixed'
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
        'user_id' => 'uuid',
        'company_id' => 'uuid',
        'date' => 'date',
        'sum_content_length' => null,
        'count_requests' => null,
        'count_unique_users' => null,
        'count_unique_ips' => null,
        'count_unique_user_agents' => null,
        'count_unique_sessions' => null,
        'count_persons' => null,
        'count_companies' => null,
        'count_properties' => null,
        'count_company_reports' => null,
        'count_conflict_reports' => null,
        'count_property_reports' => null,
        'count_exports' => null,
        'count_sampant_exports' => null,
        'count_document_packages' => null,
        'count_map_requests' => null,
        'count_map_layers' => null,
        'score' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'user_id' => true,
		'company_id' => true,
		'date' => true,
		'sum_content_length' => true,
		'count_requests' => true,
		'count_unique_users' => true,
		'count_unique_ips' => true,
		'count_unique_user_agents' => true,
		'count_unique_sessions' => true,
		'count_persons' => true,
		'count_companies' => true,
		'count_properties' => true,
		'count_company_reports' => true,
		'count_conflict_reports' => true,
		'count_property_reports' => true,
		'count_exports' => true,
		'count_sampant_exports' => true,
		'count_document_packages' => true,
		'count_map_requests' => true,
		'count_map_layers' => true,
		'score' => true
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
        'user_id' => 'user_id',
        'company_id' => 'company_id',
        'date' => 'date',
        'sum_content_length' => 'sum_content_length',
        'count_requests' => 'count_requests',
        'count_unique_users' => 'count_unique_users',
        'count_unique_ips' => 'count_unique_ips',
        'count_unique_user_agents' => 'count_unique_user_agents',
        'count_unique_sessions' => 'count_unique_sessions',
        'count_persons' => 'count_persons',
        'count_companies' => 'count_companies',
        'count_properties' => 'count_properties',
        'count_company_reports' => 'count_company_reports',
        'count_conflict_reports' => 'count_conflict_reports',
        'count_property_reports' => 'count_property_reports',
        'count_exports' => 'count_exports',
        'count_sampant_exports' => 'count_sampant_exports',
        'count_document_packages' => 'count_document_packages',
        'count_map_requests' => 'count_map_requests',
        'count_map_layers' => 'count_map_layers',
        'score' => 'score'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'company_id' => 'setCompanyId',
        'date' => 'setDate',
        'sum_content_length' => 'setSumContentLength',
        'count_requests' => 'setCountRequests',
        'count_unique_users' => 'setCountUniqueUsers',
        'count_unique_ips' => 'setCountUniqueIps',
        'count_unique_user_agents' => 'setCountUniqueUserAgents',
        'count_unique_sessions' => 'setCountUniqueSessions',
        'count_persons' => 'setCountPersons',
        'count_companies' => 'setCountCompanies',
        'count_properties' => 'setCountProperties',
        'count_company_reports' => 'setCountCompanyReports',
        'count_conflict_reports' => 'setCountConflictReports',
        'count_property_reports' => 'setCountPropertyReports',
        'count_exports' => 'setCountExports',
        'count_sampant_exports' => 'setCountSampantExports',
        'count_document_packages' => 'setCountDocumentPackages',
        'count_map_requests' => 'setCountMapRequests',
        'count_map_layers' => 'setCountMapLayers',
        'score' => 'setScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'company_id' => 'getCompanyId',
        'date' => 'getDate',
        'sum_content_length' => 'getSumContentLength',
        'count_requests' => 'getCountRequests',
        'count_unique_users' => 'getCountUniqueUsers',
        'count_unique_ips' => 'getCountUniqueIps',
        'count_unique_user_agents' => 'getCountUniqueUserAgents',
        'count_unique_sessions' => 'getCountUniqueSessions',
        'count_persons' => 'getCountPersons',
        'count_companies' => 'getCountCompanies',
        'count_properties' => 'getCountProperties',
        'count_company_reports' => 'getCountCompanyReports',
        'count_conflict_reports' => 'getCountConflictReports',
        'count_property_reports' => 'getCountPropertyReports',
        'count_exports' => 'getCountExports',
        'count_sampant_exports' => 'getCountSampantExports',
        'count_document_packages' => 'getCountDocumentPackages',
        'count_map_requests' => 'getCountMapRequests',
        'count_map_layers' => 'getCountMapLayers',
        'score' => 'getScore'
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
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('company_id', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('sum_content_length', $data ?? [], null);
        $this->setIfExists('count_requests', $data ?? [], null);
        $this->setIfExists('count_unique_users', $data ?? [], null);
        $this->setIfExists('count_unique_ips', $data ?? [], null);
        $this->setIfExists('count_unique_user_agents', $data ?? [], null);
        $this->setIfExists('count_unique_sessions', $data ?? [], null);
        $this->setIfExists('count_persons', $data ?? [], null);
        $this->setIfExists('count_companies', $data ?? [], null);
        $this->setIfExists('count_properties', $data ?? [], null);
        $this->setIfExists('count_company_reports', $data ?? [], null);
        $this->setIfExists('count_conflict_reports', $data ?? [], null);
        $this->setIfExists('count_property_reports', $data ?? [], null);
        $this->setIfExists('count_exports', $data ?? [], null);
        $this->setIfExists('count_sampant_exports', $data ?? [], null);
        $this->setIfExists('count_document_packages', $data ?? [], null);
        $this->setIfExists('count_map_requests', $data ?? [], null);
        $this->setIfExists('count_map_layers', $data ?? [], null);
        $this->setIfExists('score', $data ?? [], null);
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
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['sum_content_length'] === null) {
            $invalidProperties[] = "'sum_content_length' can't be null";
        }
        if ($this->container['count_requests'] === null) {
            $invalidProperties[] = "'count_requests' can't be null";
        }
        if ($this->container['count_unique_users'] === null) {
            $invalidProperties[] = "'count_unique_users' can't be null";
        }
        if ($this->container['count_unique_ips'] === null) {
            $invalidProperties[] = "'count_unique_ips' can't be null";
        }
        if ($this->container['count_unique_user_agents'] === null) {
            $invalidProperties[] = "'count_unique_user_agents' can't be null";
        }
        if ($this->container['count_unique_sessions'] === null) {
            $invalidProperties[] = "'count_unique_sessions' can't be null";
        }
        if ($this->container['count_persons'] === null) {
            $invalidProperties[] = "'count_persons' can't be null";
        }
        if ($this->container['count_companies'] === null) {
            $invalidProperties[] = "'count_companies' can't be null";
        }
        if ($this->container['count_properties'] === null) {
            $invalidProperties[] = "'count_properties' can't be null";
        }
        if ($this->container['count_company_reports'] === null) {
            $invalidProperties[] = "'count_company_reports' can't be null";
        }
        if ($this->container['count_conflict_reports'] === null) {
            $invalidProperties[] = "'count_conflict_reports' can't be null";
        }
        if ($this->container['count_property_reports'] === null) {
            $invalidProperties[] = "'count_property_reports' can't be null";
        }
        if ($this->container['count_exports'] === null) {
            $invalidProperties[] = "'count_exports' can't be null";
        }
        if ($this->container['count_sampant_exports'] === null) {
            $invalidProperties[] = "'count_sampant_exports' can't be null";
        }
        if ($this->container['count_document_packages'] === null) {
            $invalidProperties[] = "'count_document_packages' can't be null";
        }
        if ($this->container['count_map_requests'] === null) {
            $invalidProperties[] = "'count_map_requests' can't be null";
        }
        if ($this->container['count_map_layers'] === null) {
            $invalidProperties[] = "'count_map_layers' can't be null";
        }
        if ($this->container['score'] === null) {
            $invalidProperties[] = "'score' can't be null";
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
     * @param mixed $id id
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
     * Gets user_id
     *
     * @return mixed
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param mixed $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            array_push($this->openAPINullablesSetToNull, 'user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return mixed|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param mixed|null $company_id company_id
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        if (is_null($company_id)) {
            array_push($this->openAPINullablesSetToNull, 'company_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param mixed $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            array_push($this->openAPINullablesSetToNull, 'date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets sum_content_length
     *
     * @return mixed
     */
    public function getSumContentLength()
    {
        return $this->container['sum_content_length'];
    }

    /**
     * Sets sum_content_length
     *
     * @param mixed $sum_content_length sum_content_length
     *
     * @return self
     */
    public function setSumContentLength($sum_content_length)
    {
        if (is_null($sum_content_length)) {
            array_push($this->openAPINullablesSetToNull, 'sum_content_length');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sum_content_length', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sum_content_length'] = $sum_content_length;

        return $this;
    }

    /**
     * Gets count_requests
     *
     * @return mixed
     */
    public function getCountRequests()
    {
        return $this->container['count_requests'];
    }

    /**
     * Sets count_requests
     *
     * @param mixed $count_requests count_requests
     *
     * @return self
     */
    public function setCountRequests($count_requests)
    {
        if (is_null($count_requests)) {
            array_push($this->openAPINullablesSetToNull, 'count_requests');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_requests', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_requests'] = $count_requests;

        return $this;
    }

    /**
     * Gets count_unique_users
     *
     * @return mixed
     */
    public function getCountUniqueUsers()
    {
        return $this->container['count_unique_users'];
    }

    /**
     * Sets count_unique_users
     *
     * @param mixed $count_unique_users count_unique_users
     *
     * @return self
     */
    public function setCountUniqueUsers($count_unique_users)
    {
        if (is_null($count_unique_users)) {
            array_push($this->openAPINullablesSetToNull, 'count_unique_users');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_unique_users', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_unique_users'] = $count_unique_users;

        return $this;
    }

    /**
     * Gets count_unique_ips
     *
     * @return mixed
     */
    public function getCountUniqueIps()
    {
        return $this->container['count_unique_ips'];
    }

    /**
     * Sets count_unique_ips
     *
     * @param mixed $count_unique_ips count_unique_ips
     *
     * @return self
     */
    public function setCountUniqueIps($count_unique_ips)
    {
        if (is_null($count_unique_ips)) {
            array_push($this->openAPINullablesSetToNull, 'count_unique_ips');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_unique_ips', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_unique_ips'] = $count_unique_ips;

        return $this;
    }

    /**
     * Gets count_unique_user_agents
     *
     * @return mixed
     */
    public function getCountUniqueUserAgents()
    {
        return $this->container['count_unique_user_agents'];
    }

    /**
     * Sets count_unique_user_agents
     *
     * @param mixed $count_unique_user_agents count_unique_user_agents
     *
     * @return self
     */
    public function setCountUniqueUserAgents($count_unique_user_agents)
    {
        if (is_null($count_unique_user_agents)) {
            array_push($this->openAPINullablesSetToNull, 'count_unique_user_agents');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_unique_user_agents', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_unique_user_agents'] = $count_unique_user_agents;

        return $this;
    }

    /**
     * Gets count_unique_sessions
     *
     * @return mixed
     */
    public function getCountUniqueSessions()
    {
        return $this->container['count_unique_sessions'];
    }

    /**
     * Sets count_unique_sessions
     *
     * @param mixed $count_unique_sessions count_unique_sessions
     *
     * @return self
     */
    public function setCountUniqueSessions($count_unique_sessions)
    {
        if (is_null($count_unique_sessions)) {
            array_push($this->openAPINullablesSetToNull, 'count_unique_sessions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_unique_sessions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_unique_sessions'] = $count_unique_sessions;

        return $this;
    }

    /**
     * Gets count_persons
     *
     * @return mixed
     */
    public function getCountPersons()
    {
        return $this->container['count_persons'];
    }

    /**
     * Sets count_persons
     *
     * @param mixed $count_persons count_persons
     *
     * @return self
     */
    public function setCountPersons($count_persons)
    {
        if (is_null($count_persons)) {
            array_push($this->openAPINullablesSetToNull, 'count_persons');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_persons', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_persons'] = $count_persons;

        return $this;
    }

    /**
     * Gets count_companies
     *
     * @return mixed
     */
    public function getCountCompanies()
    {
        return $this->container['count_companies'];
    }

    /**
     * Sets count_companies
     *
     * @param mixed $count_companies count_companies
     *
     * @return self
     */
    public function setCountCompanies($count_companies)
    {
        if (is_null($count_companies)) {
            array_push($this->openAPINullablesSetToNull, 'count_companies');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_companies', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_companies'] = $count_companies;

        return $this;
    }

    /**
     * Gets count_properties
     *
     * @return mixed
     */
    public function getCountProperties()
    {
        return $this->container['count_properties'];
    }

    /**
     * Sets count_properties
     *
     * @param mixed $count_properties count_properties
     *
     * @return self
     */
    public function setCountProperties($count_properties)
    {
        if (is_null($count_properties)) {
            array_push($this->openAPINullablesSetToNull, 'count_properties');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_properties', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_properties'] = $count_properties;

        return $this;
    }

    /**
     * Gets count_company_reports
     *
     * @return mixed
     */
    public function getCountCompanyReports()
    {
        return $this->container['count_company_reports'];
    }

    /**
     * Sets count_company_reports
     *
     * @param mixed $count_company_reports count_company_reports
     *
     * @return self
     */
    public function setCountCompanyReports($count_company_reports)
    {
        if (is_null($count_company_reports)) {
            array_push($this->openAPINullablesSetToNull, 'count_company_reports');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_company_reports', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_company_reports'] = $count_company_reports;

        return $this;
    }

    /**
     * Gets count_conflict_reports
     *
     * @return mixed
     */
    public function getCountConflictReports()
    {
        return $this->container['count_conflict_reports'];
    }

    /**
     * Sets count_conflict_reports
     *
     * @param mixed $count_conflict_reports count_conflict_reports
     *
     * @return self
     */
    public function setCountConflictReports($count_conflict_reports)
    {
        if (is_null($count_conflict_reports)) {
            array_push($this->openAPINullablesSetToNull, 'count_conflict_reports');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_conflict_reports', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_conflict_reports'] = $count_conflict_reports;

        return $this;
    }

    /**
     * Gets count_property_reports
     *
     * @return mixed
     */
    public function getCountPropertyReports()
    {
        return $this->container['count_property_reports'];
    }

    /**
     * Sets count_property_reports
     *
     * @param mixed $count_property_reports count_property_reports
     *
     * @return self
     */
    public function setCountPropertyReports($count_property_reports)
    {
        if (is_null($count_property_reports)) {
            array_push($this->openAPINullablesSetToNull, 'count_property_reports');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_property_reports', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_property_reports'] = $count_property_reports;

        return $this;
    }

    /**
     * Gets count_exports
     *
     * @return mixed
     */
    public function getCountExports()
    {
        return $this->container['count_exports'];
    }

    /**
     * Sets count_exports
     *
     * @param mixed $count_exports count_exports
     *
     * @return self
     */
    public function setCountExports($count_exports)
    {
        if (is_null($count_exports)) {
            array_push($this->openAPINullablesSetToNull, 'count_exports');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_exports', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_exports'] = $count_exports;

        return $this;
    }

    /**
     * Gets count_sampant_exports
     *
     * @return mixed
     */
    public function getCountSampantExports()
    {
        return $this->container['count_sampant_exports'];
    }

    /**
     * Sets count_sampant_exports
     *
     * @param mixed $count_sampant_exports count_sampant_exports
     *
     * @return self
     */
    public function setCountSampantExports($count_sampant_exports)
    {
        if (is_null($count_sampant_exports)) {
            array_push($this->openAPINullablesSetToNull, 'count_sampant_exports');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_sampant_exports', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_sampant_exports'] = $count_sampant_exports;

        return $this;
    }

    /**
     * Gets count_document_packages
     *
     * @return mixed
     */
    public function getCountDocumentPackages()
    {
        return $this->container['count_document_packages'];
    }

    /**
     * Sets count_document_packages
     *
     * @param mixed $count_document_packages count_document_packages
     *
     * @return self
     */
    public function setCountDocumentPackages($count_document_packages)
    {
        if (is_null($count_document_packages)) {
            array_push($this->openAPINullablesSetToNull, 'count_document_packages');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_document_packages', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_document_packages'] = $count_document_packages;

        return $this;
    }

    /**
     * Gets count_map_requests
     *
     * @return mixed
     */
    public function getCountMapRequests()
    {
        return $this->container['count_map_requests'];
    }

    /**
     * Sets count_map_requests
     *
     * @param mixed $count_map_requests count_map_requests
     *
     * @return self
     */
    public function setCountMapRequests($count_map_requests)
    {
        if (is_null($count_map_requests)) {
            array_push($this->openAPINullablesSetToNull, 'count_map_requests');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_map_requests', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_map_requests'] = $count_map_requests;

        return $this;
    }

    /**
     * Gets count_map_layers
     *
     * @return mixed
     */
    public function getCountMapLayers()
    {
        return $this->container['count_map_layers'];
    }

    /**
     * Sets count_map_layers
     *
     * @param mixed $count_map_layers count_map_layers
     *
     * @return self
     */
    public function setCountMapLayers($count_map_layers)
    {
        if (is_null($count_map_layers)) {
            array_push($this->openAPINullablesSetToNull, 'count_map_layers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('count_map_layers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['count_map_layers'] = $count_map_layers;

        return $this;
    }

    /**
     * Gets score
     *
     * @return mixed
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param mixed $score score
     *
     * @return self
     */
    public function setScore($score)
    {
        if (is_null($score)) {
            array_push($this->openAPINullablesSetToNull, 'score');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('score', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['score'] = $score;

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


