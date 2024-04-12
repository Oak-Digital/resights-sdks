<?php
/**
 * EnergyLabelProposal
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
 * EnergyLabelProposal Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EnergyLabelProposal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EnergyLabelProposal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'energy_label_id' => 'mixed',
        'id' => 'mixed',
        'investment' => 'mixed',
        'profitable' => 'mixed',
        'proposal_headline' => 'mixed',
        'recommended' => 'mixed',
        'savings' => 'mixed',
        'seeb_classification' => 'mixed',
        'seeb_classification_description' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'energy_label_id' => null,
        'id' => null,
        'investment' => null,
        'profitable' => null,
        'proposal_headline' => null,
        'recommended' => null,
        'savings' => null,
        'seeb_classification' => null,
        'seeb_classification_description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'energy_label_id' => true,
		'id' => true,
		'investment' => true,
		'profitable' => true,
		'proposal_headline' => true,
		'recommended' => true,
		'savings' => true,
		'seeb_classification' => true,
		'seeb_classification_description' => true
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
        'energy_label_id' => 'energy_label_id',
        'id' => 'id',
        'investment' => 'investment',
        'profitable' => 'profitable',
        'proposal_headline' => 'proposal_headline',
        'recommended' => 'recommended',
        'savings' => 'savings',
        'seeb_classification' => 'seeb_classification',
        'seeb_classification_description' => 'seeb_classification_description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'energy_label_id' => 'setEnergyLabelId',
        'id' => 'setId',
        'investment' => 'setInvestment',
        'profitable' => 'setProfitable',
        'proposal_headline' => 'setProposalHeadline',
        'recommended' => 'setRecommended',
        'savings' => 'setSavings',
        'seeb_classification' => 'setSeebClassification',
        'seeb_classification_description' => 'setSeebClassificationDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'energy_label_id' => 'getEnergyLabelId',
        'id' => 'getId',
        'investment' => 'getInvestment',
        'profitable' => 'getProfitable',
        'proposal_headline' => 'getProposalHeadline',
        'recommended' => 'getRecommended',
        'savings' => 'getSavings',
        'seeb_classification' => 'getSeebClassification',
        'seeb_classification_description' => 'getSeebClassificationDescription'
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
        $this->setIfExists('energy_label_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('investment', $data ?? [], null);
        $this->setIfExists('profitable', $data ?? [], null);
        $this->setIfExists('proposal_headline', $data ?? [], null);
        $this->setIfExists('recommended', $data ?? [], null);
        $this->setIfExists('savings', $data ?? [], null);
        $this->setIfExists('seeb_classification', $data ?? [], null);
        $this->setIfExists('seeb_classification_description', $data ?? [], null);
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

        if ($this->container['energy_label_id'] === null) {
            $invalidProperties[] = "'energy_label_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['profitable'] === null) {
            $invalidProperties[] = "'profitable' can't be null";
        }
        if ($this->container['recommended'] === null) {
            $invalidProperties[] = "'recommended' can't be null";
        }
        if ($this->container['seeb_classification'] === null) {
            $invalidProperties[] = "'seeb_classification' can't be null";
        }
        if ($this->container['seeb_classification_description'] === null) {
            $invalidProperties[] = "'seeb_classification_description' can't be null";
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
     * Gets energy_label_id
     *
     * @return mixed
     */
    public function getEnergyLabelId()
    {
        return $this->container['energy_label_id'];
    }

    /**
     * Sets energy_label_id
     *
     * @param mixed $energy_label_id Energimærkningsnummer
     *
     * @return self
     */
    public function setEnergyLabelId($energy_label_id)
    {
        if (is_null($energy_label_id)) {
            array_push($this->openAPINullablesSetToNull, 'energy_label_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('energy_label_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['energy_label_id'] = $energy_label_id;

        return $this;
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
     * @param mixed $id Intern reference til forbedringsforslag i indberettet Xml.
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
     * Gets investment
     *
     * @return mixed|null
     */
    public function getInvestment()
    {
        return $this->container['investment'];
    }

    /**
     * Sets investment
     *
     * @param mixed|null $investment Investering.
     *
     * @return self
     */
    public function setInvestment($investment)
    {
        if (is_null($investment)) {
            array_push($this->openAPINullablesSetToNull, 'investment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('investment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['investment'] = $investment;

        return $this;
    }

    /**
     * Gets profitable
     *
     * @return mixed
     */
    public function getProfitable()
    {
        return $this->container['profitable'];
    }

    /**
     * Sets profitable
     *
     * @param mixed $profitable True/False : indikation om forbedringsforslag er profitabel.
     *
     * @return self
     */
    public function setProfitable($profitable)
    {
        if (is_null($profitable)) {
            array_push($this->openAPINullablesSetToNull, 'profitable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('profitable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['profitable'] = $profitable;

        return $this;
    }

    /**
     * Gets proposal_headline
     *
     * @return mixed|null
     */
    public function getProposalHeadline()
    {
        return $this->container['proposal_headline'];
    }

    /**
     * Sets proposal_headline
     *
     * @param mixed|null $proposal_headline Kort beskrivelse af forbedringsforslag.
     *
     * @return self
     */
    public function setProposalHeadline($proposal_headline)
    {
        if (is_null($proposal_headline)) {
            array_push($this->openAPINullablesSetToNull, 'proposal_headline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('proposal_headline', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['proposal_headline'] = $proposal_headline;

        return $this;
    }

    /**
     * Gets recommended
     *
     * @return mixed
     */
    public function getRecommended()
    {
        return $this->container['recommended'];
    }

    /**
     * Sets recommended
     *
     * @param mixed $recommended True/False: indikation om forbedringsforslag er anbefalet af energikonsulent.
     *
     * @return self
     */
    public function setRecommended($recommended)
    {
        if (is_null($recommended)) {
            array_push($this->openAPINullablesSetToNull, 'recommended');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recommended', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['recommended'] = $recommended;

        return $this;
    }

    /**
     * Gets savings
     *
     * @return mixed|null
     */
    public function getSavings()
    {
        return $this->container['savings'];
    }

    /**
     * Sets savings
     *
     * @param mixed|null $savings Besparelse.
     *
     * @return self
     */
    public function setSavings($savings)
    {
        if (is_null($savings)) {
            array_push($this->openAPINullablesSetToNull, 'savings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('savings', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['savings'] = $savings;

        return $this;
    }

    /**
     * Gets seeb_classification
     *
     * @return mixed
     */
    public function getSeebClassification()
    {
        return $this->container['seeb_classification'];
    }

    /**
     * Sets seeb_classification
     *
     * @param mixed $seeb_classification Klassifikation på forbedring.
     *
     * @return self
     */
    public function setSeebClassification($seeb_classification)
    {
        if (is_null($seeb_classification)) {
            array_push($this->openAPINullablesSetToNull, 'seeb_classification');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('seeb_classification', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['seeb_classification'] = $seeb_classification;

        return $this;
    }

    /**
     * Gets seeb_classification_description
     *
     * @return mixed
     */
    public function getSeebClassificationDescription()
    {
        return $this->container['seeb_classification_description'];
    }

    /**
     * Sets seeb_classification_description
     *
     * @param mixed $seeb_classification_description Deskription på seeb_classification
     *
     * @return self
     */
    public function setSeebClassificationDescription($seeb_classification_description)
    {
        if (is_null($seeb_classification_description)) {
            array_push($this->openAPINullablesSetToNull, 'seeb_classification_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('seeb_classification_description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['seeb_classification_description'] = $seeb_classification_description;

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

