<?php
/**
 * TransactionProspectusUpdateModel
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
 * TransactionProspectusUpdateModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionProspectusUpdateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionProspectusUpdateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'mixed',
        'prospectus_id' => 'mixed',
        'published_at' => 'mixed',
        'source' => 'mixed',
        'bfe_numbers' => 'mixed',
        'asking_price' => 'mixed',
        'rent_income_actual_yearly' => 'mixed',
        'rent_income_estimated_yearly' => 'mixed',
        'operating_expenses_yearly' => 'mixed',
        'capital_requirement' => 'mixed',
        'comment_public' => 'mixed',
        'comment_private' => 'mixed',
        'brokers' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'prospectus_id' => null,
        'published_at' => 'date',
        'source' => null,
        'bfe_numbers' => null,
        'asking_price' => null,
        'rent_income_actual_yearly' => null,
        'rent_income_estimated_yearly' => null,
        'operating_expenses_yearly' => null,
        'capital_requirement' => null,
        'comment_public' => null,
        'comment_private' => null,
        'brokers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'prospectus_id' => true,
		'published_at' => true,
		'source' => true,
		'bfe_numbers' => true,
		'asking_price' => true,
		'rent_income_actual_yearly' => true,
		'rent_income_estimated_yearly' => true,
		'operating_expenses_yearly' => true,
		'capital_requirement' => true,
		'comment_public' => true,
		'comment_private' => true,
		'brokers' => true
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
        'name' => 'name',
        'prospectus_id' => 'prospectus_id',
        'published_at' => 'published_at',
        'source' => 'source',
        'bfe_numbers' => 'bfe_numbers',
        'asking_price' => 'asking_price',
        'rent_income_actual_yearly' => 'rent_income_actual_yearly',
        'rent_income_estimated_yearly' => 'rent_income_estimated_yearly',
        'operating_expenses_yearly' => 'operating_expenses_yearly',
        'capital_requirement' => 'capital_requirement',
        'comment_public' => 'comment_public',
        'comment_private' => 'comment_private',
        'brokers' => 'brokers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'prospectus_id' => 'setProspectusId',
        'published_at' => 'setPublishedAt',
        'source' => 'setSource',
        'bfe_numbers' => 'setBfeNumbers',
        'asking_price' => 'setAskingPrice',
        'rent_income_actual_yearly' => 'setRentIncomeActualYearly',
        'rent_income_estimated_yearly' => 'setRentIncomeEstimatedYearly',
        'operating_expenses_yearly' => 'setOperatingExpensesYearly',
        'capital_requirement' => 'setCapitalRequirement',
        'comment_public' => 'setCommentPublic',
        'comment_private' => 'setCommentPrivate',
        'brokers' => 'setBrokers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'prospectus_id' => 'getProspectusId',
        'published_at' => 'getPublishedAt',
        'source' => 'getSource',
        'bfe_numbers' => 'getBfeNumbers',
        'asking_price' => 'getAskingPrice',
        'rent_income_actual_yearly' => 'getRentIncomeActualYearly',
        'rent_income_estimated_yearly' => 'getRentIncomeEstimatedYearly',
        'operating_expenses_yearly' => 'getOperatingExpensesYearly',
        'capital_requirement' => 'getCapitalRequirement',
        'comment_public' => 'getCommentPublic',
        'comment_private' => 'getCommentPrivate',
        'brokers' => 'getBrokers'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('prospectus_id', $data ?? [], null);
        $this->setIfExists('published_at', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('bfe_numbers', $data ?? [], null);
        $this->setIfExists('asking_price', $data ?? [], null);
        $this->setIfExists('rent_income_actual_yearly', $data ?? [], null);
        $this->setIfExists('rent_income_estimated_yearly', $data ?? [], null);
        $this->setIfExists('operating_expenses_yearly', $data ?? [], null);
        $this->setIfExists('capital_requirement', $data ?? [], null);
        $this->setIfExists('comment_public', $data ?? [], null);
        $this->setIfExists('comment_private', $data ?? [], null);
        $this->setIfExists('brokers', $data ?? [], null);
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

        if (!is_null($this->container['bfe_numbers']) && (count($this->container['bfe_numbers']) < 1)) {
            $invalidProperties[] = "invalid value for 'bfe_numbers', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['asking_price']) && ($this->container['asking_price'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'asking_price', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['rent_income_actual_yearly']) && ($this->container['rent_income_actual_yearly'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'rent_income_actual_yearly', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['rent_income_estimated_yearly']) && ($this->container['rent_income_estimated_yearly'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'rent_income_estimated_yearly', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['operating_expenses_yearly']) && ($this->container['operating_expenses_yearly'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'operating_expenses_yearly', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['capital_requirement']) && ($this->container['capital_requirement'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'capital_requirement', must be bigger than or equal to 0.0.";
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
     * Gets name
     *
     * @return mixed|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param mixed|null $name name
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
     * Gets prospectus_id
     *
     * @return mixed|null
     */
    public function getProspectusId()
    {
        return $this->container['prospectus_id'];
    }

    /**
     * Sets prospectus_id
     *
     * @param mixed|null $prospectus_id prospectus_id
     *
     * @return self
     */
    public function setProspectusId($prospectus_id)
    {
        if (is_null($prospectus_id)) {
            array_push($this->openAPINullablesSetToNull, 'prospectus_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prospectus_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['prospectus_id'] = $prospectus_id;

        return $this;
    }

    /**
     * Gets published_at
     *
     * @return mixed|null
     */
    public function getPublishedAt()
    {
        return $this->container['published_at'];
    }

    /**
     * Sets published_at
     *
     * @param mixed|null $published_at published_at
     *
     * @return self
     */
    public function setPublishedAt($published_at)
    {
        if (is_null($published_at)) {
            array_push($this->openAPINullablesSetToNull, 'published_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('published_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['published_at'] = $published_at;

        return $this;
    }

    /**
     * Gets source
     *
     * @return mixed|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param mixed|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            array_push($this->openAPINullablesSetToNull, 'source');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets bfe_numbers
     *
     * @return mixed|null
     */
    public function getBfeNumbers()
    {
        return $this->container['bfe_numbers'];
    }

    /**
     * Sets bfe_numbers
     *
     * @param mixed|null $bfe_numbers bfe_numbers
     *
     * @return self
     */
    public function setBfeNumbers($bfe_numbers)
    {
        if (is_null($bfe_numbers)) {
            array_push($this->openAPINullablesSetToNull, 'bfe_numbers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bfe_numbers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($bfe_numbers) && (count($bfe_numbers) < 1)) {
            throw new \InvalidArgumentException('invalid length for $bfe_numbers when calling TransactionProspectusUpdateModel., number of items must be greater than or equal to 1.');
        }
        $this->container['bfe_numbers'] = $bfe_numbers;

        return $this;
    }

    /**
     * Gets asking_price
     *
     * @return mixed|null
     */
    public function getAskingPrice()
    {
        return $this->container['asking_price'];
    }

    /**
     * Sets asking_price
     *
     * @param mixed|null $asking_price asking_price
     *
     * @return self
     */
    public function setAskingPrice($asking_price)
    {
        if (is_null($asking_price)) {
            array_push($this->openAPINullablesSetToNull, 'asking_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('asking_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($asking_price) && ($asking_price < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $asking_price when calling TransactionProspectusUpdateModel., must be bigger than or equal to 0.0.');
        }

        $this->container['asking_price'] = $asking_price;

        return $this;
    }

    /**
     * Gets rent_income_actual_yearly
     *
     * @return mixed|null
     */
    public function getRentIncomeActualYearly()
    {
        return $this->container['rent_income_actual_yearly'];
    }

    /**
     * Sets rent_income_actual_yearly
     *
     * @param mixed|null $rent_income_actual_yearly rent_income_actual_yearly
     *
     * @return self
     */
    public function setRentIncomeActualYearly($rent_income_actual_yearly)
    {
        if (is_null($rent_income_actual_yearly)) {
            array_push($this->openAPINullablesSetToNull, 'rent_income_actual_yearly');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rent_income_actual_yearly', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($rent_income_actual_yearly) && ($rent_income_actual_yearly < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $rent_income_actual_yearly when calling TransactionProspectusUpdateModel., must be bigger than or equal to 0.0.');
        }

        $this->container['rent_income_actual_yearly'] = $rent_income_actual_yearly;

        return $this;
    }

    /**
     * Gets rent_income_estimated_yearly
     *
     * @return mixed|null
     */
    public function getRentIncomeEstimatedYearly()
    {
        return $this->container['rent_income_estimated_yearly'];
    }

    /**
     * Sets rent_income_estimated_yearly
     *
     * @param mixed|null $rent_income_estimated_yearly rent_income_estimated_yearly
     *
     * @return self
     */
    public function setRentIncomeEstimatedYearly($rent_income_estimated_yearly)
    {
        if (is_null($rent_income_estimated_yearly)) {
            array_push($this->openAPINullablesSetToNull, 'rent_income_estimated_yearly');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rent_income_estimated_yearly', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($rent_income_estimated_yearly) && ($rent_income_estimated_yearly < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $rent_income_estimated_yearly when calling TransactionProspectusUpdateModel., must be bigger than or equal to 0.0.');
        }

        $this->container['rent_income_estimated_yearly'] = $rent_income_estimated_yearly;

        return $this;
    }

    /**
     * Gets operating_expenses_yearly
     *
     * @return mixed|null
     */
    public function getOperatingExpensesYearly()
    {
        return $this->container['operating_expenses_yearly'];
    }

    /**
     * Sets operating_expenses_yearly
     *
     * @param mixed|null $operating_expenses_yearly operating_expenses_yearly
     *
     * @return self
     */
    public function setOperatingExpensesYearly($operating_expenses_yearly)
    {
        if (is_null($operating_expenses_yearly)) {
            array_push($this->openAPINullablesSetToNull, 'operating_expenses_yearly');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('operating_expenses_yearly', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($operating_expenses_yearly) && ($operating_expenses_yearly < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $operating_expenses_yearly when calling TransactionProspectusUpdateModel., must be bigger than or equal to 0.0.');
        }

        $this->container['operating_expenses_yearly'] = $operating_expenses_yearly;

        return $this;
    }

    /**
     * Gets capital_requirement
     *
     * @return mixed|null
     */
    public function getCapitalRequirement()
    {
        return $this->container['capital_requirement'];
    }

    /**
     * Sets capital_requirement
     *
     * @param mixed|null $capital_requirement capital_requirement
     *
     * @return self
     */
    public function setCapitalRequirement($capital_requirement)
    {
        if (is_null($capital_requirement)) {
            array_push($this->openAPINullablesSetToNull, 'capital_requirement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('capital_requirement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($capital_requirement) && ($capital_requirement < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $capital_requirement when calling TransactionProspectusUpdateModel., must be bigger than or equal to 0.0.');
        }

        $this->container['capital_requirement'] = $capital_requirement;

        return $this;
    }

    /**
     * Gets comment_public
     *
     * @return mixed|null
     */
    public function getCommentPublic()
    {
        return $this->container['comment_public'];
    }

    /**
     * Sets comment_public
     *
     * @param mixed|null $comment_public comment_public
     *
     * @return self
     */
    public function setCommentPublic($comment_public)
    {
        if (is_null($comment_public)) {
            array_push($this->openAPINullablesSetToNull, 'comment_public');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comment_public', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comment_public'] = $comment_public;

        return $this;
    }

    /**
     * Gets comment_private
     *
     * @return mixed|null
     */
    public function getCommentPrivate()
    {
        return $this->container['comment_private'];
    }

    /**
     * Sets comment_private
     *
     * @param mixed|null $comment_private comment_private
     *
     * @return self
     */
    public function setCommentPrivate($comment_private)
    {
        if (is_null($comment_private)) {
            array_push($this->openAPINullablesSetToNull, 'comment_private');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comment_private', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comment_private'] = $comment_private;

        return $this;
    }

    /**
     * Gets brokers
     *
     * @return mixed|null
     */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
     * Sets brokers
     *
     * @param mixed|null $brokers brokers
     *
     * @return self
     */
    public function setBrokers($brokers)
    {
        if (is_null($brokers)) {
            array_push($this->openAPINullablesSetToNull, 'brokers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brokers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['brokers'] = $brokers;

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


