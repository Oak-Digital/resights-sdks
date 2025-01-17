<?php
/**
 * AnnualReportSimple
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
 * AnnualReportSimple Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AnnualReportSimple implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AnnualReportSimple';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'mixed',
        'cvr_number' => 'mixed',
        'reg_number' => 'mixed',
        'case_number' => 'mixed',
        'import_id' => 'mixed',
        'import_date' => 'mixed',
        'accounting_period_start' => 'mixed',
        'accounting_period_end' => 'mixed',
        'chairman' => 'mixed',
        'verification_date' => 'mixed',
        'publication_date' => 'mixed',
        'publication_type' => 'mixed',
        'last_update' => 'mixed',
        'alteration' => 'mixed',
        'documents' => 'mixed',
        'figures' => '\OpenAPI\Client\Model\ReportFigures',
        'ratios' => '\OpenAPI\Client\Model\ReportRatio',
        'auditors' => 'mixed'
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
        'cvr_number' => null,
        'reg_number' => null,
        'case_number' => null,
        'import_id' => null,
        'import_date' => 'date-time',
        'accounting_period_start' => 'date',
        'accounting_period_end' => 'date',
        'chairman' => null,
        'verification_date' => 'date-time',
        'publication_date' => 'date-time',
        'publication_type' => null,
        'last_update' => 'date-time',
        'alteration' => null,
        'documents' => null,
        'figures' => null,
        'ratios' => null,
        'auditors' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'cvr_number' => true,
		'reg_number' => true,
		'case_number' => true,
		'import_id' => true,
		'import_date' => true,
		'accounting_period_start' => true,
		'accounting_period_end' => true,
		'chairman' => true,
		'verification_date' => true,
		'publication_date' => true,
		'publication_type' => true,
		'last_update' => true,
		'alteration' => true,
		'documents' => true,
		'figures' => false,
		'ratios' => false,
		'auditors' => true
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
        'cvr_number' => 'cvr_number',
        'reg_number' => 'reg_number',
        'case_number' => 'case_number',
        'import_id' => 'import_id',
        'import_date' => 'import_date',
        'accounting_period_start' => 'accounting_period_start',
        'accounting_period_end' => 'accounting_period_end',
        'chairman' => 'chairman',
        'verification_date' => 'verification_date',
        'publication_date' => 'publication_date',
        'publication_type' => 'publication_type',
        'last_update' => 'last_update',
        'alteration' => 'alteration',
        'documents' => 'documents',
        'figures' => 'figures',
        'ratios' => 'ratios',
        'auditors' => 'auditors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'cvr_number' => 'setCvrNumber',
        'reg_number' => 'setRegNumber',
        'case_number' => 'setCaseNumber',
        'import_id' => 'setImportId',
        'import_date' => 'setImportDate',
        'accounting_period_start' => 'setAccountingPeriodStart',
        'accounting_period_end' => 'setAccountingPeriodEnd',
        'chairman' => 'setChairman',
        'verification_date' => 'setVerificationDate',
        'publication_date' => 'setPublicationDate',
        'publication_type' => 'setPublicationType',
        'last_update' => 'setLastUpdate',
        'alteration' => 'setAlteration',
        'documents' => 'setDocuments',
        'figures' => 'setFigures',
        'ratios' => 'setRatios',
        'auditors' => 'setAuditors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'cvr_number' => 'getCvrNumber',
        'reg_number' => 'getRegNumber',
        'case_number' => 'getCaseNumber',
        'import_id' => 'getImportId',
        'import_date' => 'getImportDate',
        'accounting_period_start' => 'getAccountingPeriodStart',
        'accounting_period_end' => 'getAccountingPeriodEnd',
        'chairman' => 'getChairman',
        'verification_date' => 'getVerificationDate',
        'publication_date' => 'getPublicationDate',
        'publication_type' => 'getPublicationType',
        'last_update' => 'getLastUpdate',
        'alteration' => 'getAlteration',
        'documents' => 'getDocuments',
        'figures' => 'getFigures',
        'ratios' => 'getRatios',
        'auditors' => 'getAuditors'
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
        $this->setIfExists('cvr_number', $data ?? [], null);
        $this->setIfExists('reg_number', $data ?? [], null);
        $this->setIfExists('case_number', $data ?? [], null);
        $this->setIfExists('import_id', $data ?? [], null);
        $this->setIfExists('import_date', $data ?? [], null);
        $this->setIfExists('accounting_period_start', $data ?? [], null);
        $this->setIfExists('accounting_period_end', $data ?? [], null);
        $this->setIfExists('chairman', $data ?? [], null);
        $this->setIfExists('verification_date', $data ?? [], null);
        $this->setIfExists('publication_date', $data ?? [], null);
        $this->setIfExists('publication_type', $data ?? [], null);
        $this->setIfExists('last_update', $data ?? [], null);
        $this->setIfExists('alteration', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('figures', $data ?? [], null);
        $this->setIfExists('ratios', $data ?? [], null);
        $this->setIfExists('auditors', $data ?? [], null);
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
        if ($this->container['case_number'] === null) {
            $invalidProperties[] = "'case_number' can't be null";
        }
        if ($this->container['import_date'] === null) {
            $invalidProperties[] = "'import_date' can't be null";
        }
        if ($this->container['accounting_period_start'] === null) {
            $invalidProperties[] = "'accounting_period_start' can't be null";
        }
        if ($this->container['accounting_period_end'] === null) {
            $invalidProperties[] = "'accounting_period_end' can't be null";
        }
        if ($this->container['publication_date'] === null) {
            $invalidProperties[] = "'publication_date' can't be null";
        }
        if ($this->container['publication_type'] === null) {
            $invalidProperties[] = "'publication_type' can't be null";
        }
        if ($this->container['last_update'] === null) {
            $invalidProperties[] = "'last_update' can't be null";
        }
        if ($this->container['alteration'] === null) {
            $invalidProperties[] = "'alteration' can't be null";
        }
        if ($this->container['documents'] === null) {
            $invalidProperties[] = "'documents' can't be null";
        }
        if ($this->container['auditors'] === null) {
            $invalidProperties[] = "'auditors' can't be null";
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
     * Gets cvr_number
     *
     * @return mixed|null
     */
    public function getCvrNumber()
    {
        return $this->container['cvr_number'];
    }

    /**
     * Sets cvr_number
     *
     * @param mixed|null $cvr_number cvr_number
     *
     * @return self
     */
    public function setCvrNumber($cvr_number)
    {
        if (is_null($cvr_number)) {
            array_push($this->openAPINullablesSetToNull, 'cvr_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cvr_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cvr_number'] = $cvr_number;

        return $this;
    }

    /**
     * Gets reg_number
     *
     * @return mixed|null
     */
    public function getRegNumber()
    {
        return $this->container['reg_number'];
    }

    /**
     * Sets reg_number
     *
     * @param mixed|null $reg_number reg_number
     *
     * @return self
     */
    public function setRegNumber($reg_number)
    {
        if (is_null($reg_number)) {
            array_push($this->openAPINullablesSetToNull, 'reg_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reg_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reg_number'] = $reg_number;

        return $this;
    }

    /**
     * Gets case_number
     *
     * @return mixed
     */
    public function getCaseNumber()
    {
        return $this->container['case_number'];
    }

    /**
     * Sets case_number
     *
     * @param mixed $case_number case_number
     *
     * @return self
     */
    public function setCaseNumber($case_number)
    {
        if (is_null($case_number)) {
            array_push($this->openAPINullablesSetToNull, 'case_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('case_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['case_number'] = $case_number;

        return $this;
    }

    /**
     * Gets import_id
     *
     * @return mixed|null
     */
    public function getImportId()
    {
        return $this->container['import_id'];
    }

    /**
     * Sets import_id
     *
     * @param mixed|null $import_id import_id
     *
     * @return self
     */
    public function setImportId($import_id)
    {
        if (is_null($import_id)) {
            array_push($this->openAPINullablesSetToNull, 'import_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('import_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['import_id'] = $import_id;

        return $this;
    }

    /**
     * Gets import_date
     *
     * @return mixed
     */
    public function getImportDate()
    {
        return $this->container['import_date'];
    }

    /**
     * Sets import_date
     *
     * @param mixed $import_date import_date
     *
     * @return self
     */
    public function setImportDate($import_date)
    {
        if (is_null($import_date)) {
            array_push($this->openAPINullablesSetToNull, 'import_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('import_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['import_date'] = $import_date;

        return $this;
    }

    /**
     * Gets accounting_period_start
     *
     * @return mixed
     */
    public function getAccountingPeriodStart()
    {
        return $this->container['accounting_period_start'];
    }

    /**
     * Sets accounting_period_start
     *
     * @param mixed $accounting_period_start accounting_period_start
     *
     * @return self
     */
    public function setAccountingPeriodStart($accounting_period_start)
    {
        if (is_null($accounting_period_start)) {
            array_push($this->openAPINullablesSetToNull, 'accounting_period_start');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accounting_period_start', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accounting_period_start'] = $accounting_period_start;

        return $this;
    }

    /**
     * Gets accounting_period_end
     *
     * @return mixed
     */
    public function getAccountingPeriodEnd()
    {
        return $this->container['accounting_period_end'];
    }

    /**
     * Sets accounting_period_end
     *
     * @param mixed $accounting_period_end accounting_period_end
     *
     * @return self
     */
    public function setAccountingPeriodEnd($accounting_period_end)
    {
        if (is_null($accounting_period_end)) {
            array_push($this->openAPINullablesSetToNull, 'accounting_period_end');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accounting_period_end', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accounting_period_end'] = $accounting_period_end;

        return $this;
    }

    /**
     * Gets chairman
     *
     * @return mixed|null
     */
    public function getChairman()
    {
        return $this->container['chairman'];
    }

    /**
     * Sets chairman
     *
     * @param mixed|null $chairman chairman
     *
     * @return self
     */
    public function setChairman($chairman)
    {
        if (is_null($chairman)) {
            array_push($this->openAPINullablesSetToNull, 'chairman');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('chairman', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['chairman'] = $chairman;

        return $this;
    }

    /**
     * Gets verification_date
     *
     * @return mixed|null
     */
    public function getVerificationDate()
    {
        return $this->container['verification_date'];
    }

    /**
     * Sets verification_date
     *
     * @param mixed|null $verification_date verification_date
     *
     * @return self
     */
    public function setVerificationDate($verification_date)
    {
        if (is_null($verification_date)) {
            array_push($this->openAPINullablesSetToNull, 'verification_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('verification_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['verification_date'] = $verification_date;

        return $this;
    }

    /**
     * Gets publication_date
     *
     * @return mixed
     */
    public function getPublicationDate()
    {
        return $this->container['publication_date'];
    }

    /**
     * Sets publication_date
     *
     * @param mixed $publication_date publication_date
     *
     * @return self
     */
    public function setPublicationDate($publication_date)
    {
        if (is_null($publication_date)) {
            array_push($this->openAPINullablesSetToNull, 'publication_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('publication_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['publication_date'] = $publication_date;

        return $this;
    }

    /**
     * Gets publication_type
     *
     * @return mixed
     */
    public function getPublicationType()
    {
        return $this->container['publication_type'];
    }

    /**
     * Sets publication_type
     *
     * @param mixed $publication_type publication_type
     *
     * @return self
     */
    public function setPublicationType($publication_type)
    {
        if (is_null($publication_type)) {
            array_push($this->openAPINullablesSetToNull, 'publication_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('publication_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['publication_type'] = $publication_type;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return mixed
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param mixed $last_update last_update
     *
     * @return self
     */
    public function setLastUpdate($last_update)
    {
        if (is_null($last_update)) {
            array_push($this->openAPINullablesSetToNull, 'last_update');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_update', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_update'] = $last_update;

        return $this;
    }

    /**
     * Gets alteration
     *
     * @return mixed
     */
    public function getAlteration()
    {
        return $this->container['alteration'];
    }

    /**
     * Sets alteration
     *
     * @param mixed $alteration alteration
     *
     * @return self
     */
    public function setAlteration($alteration)
    {
        if (is_null($alteration)) {
            array_push($this->openAPINullablesSetToNull, 'alteration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('alteration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['alteration'] = $alteration;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param mixed $documents documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        if (is_null($documents)) {
            array_push($this->openAPINullablesSetToNull, 'documents');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('documents', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets figures
     *
     * @return \OpenAPI\Client\Model\ReportFigures|null
     */
    public function getFigures()
    {
        return $this->container['figures'];
    }

    /**
     * Sets figures
     *
     * @param \OpenAPI\Client\Model\ReportFigures|null $figures figures
     *
     * @return self
     */
    public function setFigures($figures)
    {
        if (is_null($figures)) {
            throw new \InvalidArgumentException('non-nullable figures cannot be null');
        }
        $this->container['figures'] = $figures;

        return $this;
    }

    /**
     * Gets ratios
     *
     * @return \OpenAPI\Client\Model\ReportRatio|null
     */
    public function getRatios()
    {
        return $this->container['ratios'];
    }

    /**
     * Sets ratios
     *
     * @param \OpenAPI\Client\Model\ReportRatio|null $ratios ratios
     *
     * @return self
     */
    public function setRatios($ratios)
    {
        if (is_null($ratios)) {
            throw new \InvalidArgumentException('non-nullable ratios cannot be null');
        }
        $this->container['ratios'] = $ratios;

        return $this;
    }

    /**
     * Gets auditors
     *
     * @return mixed
     */
    public function getAuditors()
    {
        return $this->container['auditors'];
    }

    /**
     * Sets auditors
     *
     * @param mixed $auditors auditors
     *
     * @return self
     */
    public function setAuditors($auditors)
    {
        if (is_null($auditors)) {
            array_push($this->openAPINullablesSetToNull, 'auditors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('auditors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['auditors'] = $auditors;

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


