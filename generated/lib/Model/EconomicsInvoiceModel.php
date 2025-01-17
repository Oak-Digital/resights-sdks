<?php
/**
 * EconomicsInvoiceModel
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
 * EconomicsInvoiceModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EconomicsInvoiceModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EconomicsInvoiceModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'self' => 'mixed',
        'booked_invoice_number' => 'mixed',
        'order_number' => 'mixed',
        'exchange_rate' => 'mixed',
        'date' => 'mixed',
        'currency' => 'mixed',
        'net_amount' => 'mixed',
        'net_amount_in_base_currency' => 'mixed',
        'gross_amount' => 'mixed',
        'gross_amount_in_base_currency' => 'mixed',
        'vat_amount' => 'mixed',
        'rounding_amount' => 'mixed',
        'remainder' => 'mixed',
        'remainder_in_base_currency' => 'mixed',
        'due_date' => 'mixed',
        'payment_terms' => '\OpenAPI\Client\Model\EconomicsPaymentTermsModel',
        'recipient' => '\OpenAPI\Client\Model\EconomicsRecipientModel',
        'layout' => '\OpenAPI\Client\Model\EconomicsLayoutModel',
        'customer' => '\OpenAPI\Client\Model\EconomicsCustomerModel',
        'lines' => 'mixed',
        'notes' => '\OpenAPI\Client\Model\EconomicsNotesModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'self' => null,
        'booked_invoice_number' => null,
        'order_number' => null,
        'exchange_rate' => null,
        'date' => 'date',
        'currency' => null,
        'net_amount' => null,
        'net_amount_in_base_currency' => null,
        'gross_amount' => null,
        'gross_amount_in_base_currency' => null,
        'vat_amount' => null,
        'rounding_amount' => null,
        'remainder' => null,
        'remainder_in_base_currency' => null,
        'due_date' => 'date',
        'payment_terms' => null,
        'recipient' => null,
        'layout' => null,
        'customer' => null,
        'lines' => null,
        'notes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'self' => true,
		'booked_invoice_number' => true,
		'order_number' => true,
		'exchange_rate' => true,
		'date' => true,
		'currency' => true,
		'net_amount' => true,
		'net_amount_in_base_currency' => true,
		'gross_amount' => true,
		'gross_amount_in_base_currency' => true,
		'vat_amount' => true,
		'rounding_amount' => true,
		'remainder' => true,
		'remainder_in_base_currency' => true,
		'due_date' => true,
		'payment_terms' => false,
		'recipient' => false,
		'layout' => false,
		'customer' => false,
		'lines' => true,
		'notes' => false
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
        'self' => 'self',
        'booked_invoice_number' => 'booked_invoice_number',
        'order_number' => 'order_number',
        'exchange_rate' => 'exchange_rate',
        'date' => 'date',
        'currency' => 'currency',
        'net_amount' => 'net_amount',
        'net_amount_in_base_currency' => 'net_amount_in_base_currency',
        'gross_amount' => 'gross_amount',
        'gross_amount_in_base_currency' => 'gross_amount_in_base_currency',
        'vat_amount' => 'vat_amount',
        'rounding_amount' => 'rounding_amount',
        'remainder' => 'remainder',
        'remainder_in_base_currency' => 'remainder_in_base_currency',
        'due_date' => 'due_date',
        'payment_terms' => 'payment_terms',
        'recipient' => 'recipient',
        'layout' => 'layout',
        'customer' => 'customer',
        'lines' => 'lines',
        'notes' => 'notes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'booked_invoice_number' => 'setBookedInvoiceNumber',
        'order_number' => 'setOrderNumber',
        'exchange_rate' => 'setExchangeRate',
        'date' => 'setDate',
        'currency' => 'setCurrency',
        'net_amount' => 'setNetAmount',
        'net_amount_in_base_currency' => 'setNetAmountInBaseCurrency',
        'gross_amount' => 'setGrossAmount',
        'gross_amount_in_base_currency' => 'setGrossAmountInBaseCurrency',
        'vat_amount' => 'setVatAmount',
        'rounding_amount' => 'setRoundingAmount',
        'remainder' => 'setRemainder',
        'remainder_in_base_currency' => 'setRemainderInBaseCurrency',
        'due_date' => 'setDueDate',
        'payment_terms' => 'setPaymentTerms',
        'recipient' => 'setRecipient',
        'layout' => 'setLayout',
        'customer' => 'setCustomer',
        'lines' => 'setLines',
        'notes' => 'setNotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'booked_invoice_number' => 'getBookedInvoiceNumber',
        'order_number' => 'getOrderNumber',
        'exchange_rate' => 'getExchangeRate',
        'date' => 'getDate',
        'currency' => 'getCurrency',
        'net_amount' => 'getNetAmount',
        'net_amount_in_base_currency' => 'getNetAmountInBaseCurrency',
        'gross_amount' => 'getGrossAmount',
        'gross_amount_in_base_currency' => 'getGrossAmountInBaseCurrency',
        'vat_amount' => 'getVatAmount',
        'rounding_amount' => 'getRoundingAmount',
        'remainder' => 'getRemainder',
        'remainder_in_base_currency' => 'getRemainderInBaseCurrency',
        'due_date' => 'getDueDate',
        'payment_terms' => 'getPaymentTerms',
        'recipient' => 'getRecipient',
        'layout' => 'getLayout',
        'customer' => 'getCustomer',
        'lines' => 'getLines',
        'notes' => 'getNotes'
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
        $this->setIfExists('self', $data ?? [], null);
        $this->setIfExists('booked_invoice_number', $data ?? [], null);
        $this->setIfExists('order_number', $data ?? [], null);
        $this->setIfExists('exchange_rate', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('net_amount', $data ?? [], null);
        $this->setIfExists('net_amount_in_base_currency', $data ?? [], null);
        $this->setIfExists('gross_amount', $data ?? [], null);
        $this->setIfExists('gross_amount_in_base_currency', $data ?? [], null);
        $this->setIfExists('vat_amount', $data ?? [], null);
        $this->setIfExists('rounding_amount', $data ?? [], null);
        $this->setIfExists('remainder', $data ?? [], null);
        $this->setIfExists('remainder_in_base_currency', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('payment_terms', $data ?? [], null);
        $this->setIfExists('recipient', $data ?? [], null);
        $this->setIfExists('layout', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('lines', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
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

        if ($this->container['exchange_rate'] === null) {
            $invalidProperties[] = "'exchange_rate' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['net_amount'] === null) {
            $invalidProperties[] = "'net_amount' can't be null";
        }
        if ($this->container['net_amount_in_base_currency'] === null) {
            $invalidProperties[] = "'net_amount_in_base_currency' can't be null";
        }
        if ($this->container['gross_amount'] === null) {
            $invalidProperties[] = "'gross_amount' can't be null";
        }
        if ($this->container['gross_amount_in_base_currency'] === null) {
            $invalidProperties[] = "'gross_amount_in_base_currency' can't be null";
        }
        if ($this->container['vat_amount'] === null) {
            $invalidProperties[] = "'vat_amount' can't be null";
        }
        if ($this->container['rounding_amount'] === null) {
            $invalidProperties[] = "'rounding_amount' can't be null";
        }
        if ($this->container['remainder'] === null) {
            $invalidProperties[] = "'remainder' can't be null";
        }
        if ($this->container['remainder_in_base_currency'] === null) {
            $invalidProperties[] = "'remainder_in_base_currency' can't be null";
        }
        if ($this->container['due_date'] === null) {
            $invalidProperties[] = "'due_date' can't be null";
        }
        if ($this->container['payment_terms'] === null) {
            $invalidProperties[] = "'payment_terms' can't be null";
        }
        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
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
     * Gets self
     *
     * @return mixed|null
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param mixed|null $self self
     *
     * @return self
     */
    public function setSelf($self)
    {
        if (is_null($self)) {
            array_push($this->openAPINullablesSetToNull, 'self');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('self', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets booked_invoice_number
     *
     * @return mixed|null
     */
    public function getBookedInvoiceNumber()
    {
        return $this->container['booked_invoice_number'];
    }

    /**
     * Sets booked_invoice_number
     *
     * @param mixed|null $booked_invoice_number booked_invoice_number
     *
     * @return self
     */
    public function setBookedInvoiceNumber($booked_invoice_number)
    {
        if (is_null($booked_invoice_number)) {
            array_push($this->openAPINullablesSetToNull, 'booked_invoice_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('booked_invoice_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['booked_invoice_number'] = $booked_invoice_number;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return mixed|null
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param mixed|null $order_number order_number
     *
     * @return self
     */
    public function setOrderNumber($order_number)
    {
        if (is_null($order_number)) {
            array_push($this->openAPINullablesSetToNull, 'order_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return mixed
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param mixed $exchange_rate exchange_rate
     *
     * @return self
     */
    public function setExchangeRate($exchange_rate)
    {
        if (is_null($exchange_rate)) {
            array_push($this->openAPINullablesSetToNull, 'exchange_rate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('exchange_rate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['exchange_rate'] = $exchange_rate;

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
     * Gets currency
     *
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param mixed $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            array_push($this->openAPINullablesSetToNull, 'currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return mixed
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param mixed $net_amount net_amount
     *
     * @return self
     */
    public function setNetAmount($net_amount)
    {
        if (is_null($net_amount)) {
            array_push($this->openAPINullablesSetToNull, 'net_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('net_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets net_amount_in_base_currency
     *
     * @return mixed
     */
    public function getNetAmountInBaseCurrency()
    {
        return $this->container['net_amount_in_base_currency'];
    }

    /**
     * Sets net_amount_in_base_currency
     *
     * @param mixed $net_amount_in_base_currency net_amount_in_base_currency
     *
     * @return self
     */
    public function setNetAmountInBaseCurrency($net_amount_in_base_currency)
    {
        if (is_null($net_amount_in_base_currency)) {
            array_push($this->openAPINullablesSetToNull, 'net_amount_in_base_currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('net_amount_in_base_currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['net_amount_in_base_currency'] = $net_amount_in_base_currency;

        return $this;
    }

    /**
     * Gets gross_amount
     *
     * @return mixed
     */
    public function getGrossAmount()
    {
        return $this->container['gross_amount'];
    }

    /**
     * Sets gross_amount
     *
     * @param mixed $gross_amount gross_amount
     *
     * @return self
     */
    public function setGrossAmount($gross_amount)
    {
        if (is_null($gross_amount)) {
            array_push($this->openAPINullablesSetToNull, 'gross_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gross_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gross_amount'] = $gross_amount;

        return $this;
    }

    /**
     * Gets gross_amount_in_base_currency
     *
     * @return mixed
     */
    public function getGrossAmountInBaseCurrency()
    {
        return $this->container['gross_amount_in_base_currency'];
    }

    /**
     * Sets gross_amount_in_base_currency
     *
     * @param mixed $gross_amount_in_base_currency gross_amount_in_base_currency
     *
     * @return self
     */
    public function setGrossAmountInBaseCurrency($gross_amount_in_base_currency)
    {
        if (is_null($gross_amount_in_base_currency)) {
            array_push($this->openAPINullablesSetToNull, 'gross_amount_in_base_currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gross_amount_in_base_currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gross_amount_in_base_currency'] = $gross_amount_in_base_currency;

        return $this;
    }

    /**
     * Gets vat_amount
     *
     * @return mixed
     */
    public function getVatAmount()
    {
        return $this->container['vat_amount'];
    }

    /**
     * Sets vat_amount
     *
     * @param mixed $vat_amount vat_amount
     *
     * @return self
     */
    public function setVatAmount($vat_amount)
    {
        if (is_null($vat_amount)) {
            array_push($this->openAPINullablesSetToNull, 'vat_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vat_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vat_amount'] = $vat_amount;

        return $this;
    }

    /**
     * Gets rounding_amount
     *
     * @return mixed
     */
    public function getRoundingAmount()
    {
        return $this->container['rounding_amount'];
    }

    /**
     * Sets rounding_amount
     *
     * @param mixed $rounding_amount rounding_amount
     *
     * @return self
     */
    public function setRoundingAmount($rounding_amount)
    {
        if (is_null($rounding_amount)) {
            array_push($this->openAPINullablesSetToNull, 'rounding_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rounding_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rounding_amount'] = $rounding_amount;

        return $this;
    }

    /**
     * Gets remainder
     *
     * @return mixed
     */
    public function getRemainder()
    {
        return $this->container['remainder'];
    }

    /**
     * Sets remainder
     *
     * @param mixed $remainder remainder
     *
     * @return self
     */
    public function setRemainder($remainder)
    {
        if (is_null($remainder)) {
            array_push($this->openAPINullablesSetToNull, 'remainder');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remainder', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['remainder'] = $remainder;

        return $this;
    }

    /**
     * Gets remainder_in_base_currency
     *
     * @return mixed
     */
    public function getRemainderInBaseCurrency()
    {
        return $this->container['remainder_in_base_currency'];
    }

    /**
     * Sets remainder_in_base_currency
     *
     * @param mixed $remainder_in_base_currency remainder_in_base_currency
     *
     * @return self
     */
    public function setRemainderInBaseCurrency($remainder_in_base_currency)
    {
        if (is_null($remainder_in_base_currency)) {
            array_push($this->openAPINullablesSetToNull, 'remainder_in_base_currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remainder_in_base_currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['remainder_in_base_currency'] = $remainder_in_base_currency;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param mixed $due_date due_date
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            array_push($this->openAPINullablesSetToNull, 'due_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('due_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets payment_terms
     *
     * @return \OpenAPI\Client\Model\EconomicsPaymentTermsModel
     */
    public function getPaymentTerms()
    {
        return $this->container['payment_terms'];
    }

    /**
     * Sets payment_terms
     *
     * @param \OpenAPI\Client\Model\EconomicsPaymentTermsModel $payment_terms payment_terms
     *
     * @return self
     */
    public function setPaymentTerms($payment_terms)
    {
        if (is_null($payment_terms)) {
            throw new \InvalidArgumentException('non-nullable payment_terms cannot be null');
        }
        $this->container['payment_terms'] = $payment_terms;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return \OpenAPI\Client\Model\EconomicsRecipientModel
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \OpenAPI\Client\Model\EconomicsRecipientModel $recipient recipient
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        if (is_null($recipient)) {
            throw new \InvalidArgumentException('non-nullable recipient cannot be null');
        }
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets layout
     *
     * @return \OpenAPI\Client\Model\EconomicsLayoutModel|null
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
     * Sets layout
     *
     * @param \OpenAPI\Client\Model\EconomicsLayoutModel|null $layout layout
     *
     * @return self
     */
    public function setLayout($layout)
    {
        if (is_null($layout)) {
            throw new \InvalidArgumentException('non-nullable layout cannot be null');
        }
        $this->container['layout'] = $layout;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\EconomicsCustomerModel|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\EconomicsCustomerModel|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return mixed
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param mixed $lines lines
     *
     * @return self
     */
    public function setLines($lines)
    {
        if (is_null($lines)) {
            array_push($this->openAPINullablesSetToNull, 'lines');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lines', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \OpenAPI\Client\Model\EconomicsNotesModel|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \OpenAPI\Client\Model\EconomicsNotesModel|null $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

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


