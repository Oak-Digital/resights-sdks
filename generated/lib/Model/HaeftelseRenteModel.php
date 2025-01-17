<?php
/**
 * HaeftelseRenteModel
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
 * HaeftelseRenteModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HaeftelseRenteModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HaeftelseRenteModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'mixed',
        'paalydende_sats' => 'mixed',
        'nominel_sats' => 'mixed',
        'sats_foreloebig_indikator' => 'mixed',
        'minimum_rente_sats' => 'mixed',
        'maksimum_rente_sats' => 'mixed',
        'reference_rente' => '\OpenAPI\Client\Model\ReferenceRenteModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'paalydende_sats' => null,
        'nominel_sats' => null,
        'sats_foreloebig_indikator' => null,
        'minimum_rente_sats' => null,
        'maksimum_rente_sats' => null,
        'reference_rente' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => true,
		'paalydende_sats' => true,
		'nominel_sats' => true,
		'sats_foreloebig_indikator' => true,
		'minimum_rente_sats' => true,
		'maksimum_rente_sats' => true,
		'reference_rente' => false
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
        'type' => 'Type',
        'paalydende_sats' => 'PaalydendeSats',
        'nominel_sats' => 'NominelSats',
        'sats_foreloebig_indikator' => 'SatsForeloebigIndikator',
        'minimum_rente_sats' => 'MinimumRenteSats',
        'maksimum_rente_sats' => 'MaksimumRenteSats',
        'reference_rente' => 'ReferenceRente'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'paalydende_sats' => 'setPaalydendeSats',
        'nominel_sats' => 'setNominelSats',
        'sats_foreloebig_indikator' => 'setSatsForeloebigIndikator',
        'minimum_rente_sats' => 'setMinimumRenteSats',
        'maksimum_rente_sats' => 'setMaksimumRenteSats',
        'reference_rente' => 'setReferenceRente'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'paalydende_sats' => 'getPaalydendeSats',
        'nominel_sats' => 'getNominelSats',
        'sats_foreloebig_indikator' => 'getSatsForeloebigIndikator',
        'minimum_rente_sats' => 'getMinimumRenteSats',
        'maksimum_rente_sats' => 'getMaksimumRenteSats',
        'reference_rente' => 'getReferenceRente'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('paalydende_sats', $data ?? [], null);
        $this->setIfExists('nominel_sats', $data ?? [], null);
        $this->setIfExists('sats_foreloebig_indikator', $data ?? [], null);
        $this->setIfExists('minimum_rente_sats', $data ?? [], null);
        $this->setIfExists('maksimum_rente_sats', $data ?? [], null);
        $this->setIfExists('reference_rente', $data ?? [], null);
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
     * Gets type
     *
     * @return mixed|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param mixed|null $type Angiver rentetypen. Fast eller Variabel.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets paalydende_sats
     *
     * @return mixed|null
     */
    public function getPaalydendeSats()
    {
        return $this->container['paalydende_sats'];
    }

    /**
     * Sets paalydende_sats
     *
     * @param mixed|null $paalydende_sats Haeftelsens paalydende aarlige rentesats.
     *
     * @return self
     */
    public function setPaalydendeSats($paalydende_sats)
    {
        if (is_null($paalydende_sats)) {
            array_push($this->openAPINullablesSetToNull, 'paalydende_sats');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paalydende_sats', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paalydende_sats'] = $paalydende_sats;

        return $this;
    }

    /**
     * Gets nominel_sats
     *
     * @return mixed|null
     */
    public function getNominelSats()
    {
        return $this->container['nominel_sats'];
    }

    /**
     * Sets nominel_sats
     *
     * @param mixed|null $nominel_sats Haeftelsens aarlige rente inkl. renters rente.
     *
     * @return self
     */
    public function setNominelSats($nominel_sats)
    {
        if (is_null($nominel_sats)) {
            array_push($this->openAPINullablesSetToNull, 'nominel_sats');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nominel_sats', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nominel_sats'] = $nominel_sats;

        return $this;
    }

    /**
     * Gets sats_foreloebig_indikator
     *
     * @return mixed|null
     */
    public function getSatsForeloebigIndikator()
    {
        return $this->container['sats_foreloebig_indikator'];
    }

    /**
     * Sets sats_foreloebig_indikator
     *
     * @param mixed|null $sats_foreloebig_indikator True angiver at rentesats er foreløbig fastsat. False angiver at rentesats er endelig fastsat.
     *
     * @return self
     */
    public function setSatsForeloebigIndikator($sats_foreloebig_indikator)
    {
        if (is_null($sats_foreloebig_indikator)) {
            array_push($this->openAPINullablesSetToNull, 'sats_foreloebig_indikator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sats_foreloebig_indikator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sats_foreloebig_indikator'] = $sats_foreloebig_indikator;

        return $this;
    }

    /**
     * Gets minimum_rente_sats
     *
     * @return mixed|null
     */
    public function getMinimumRenteSats()
    {
        return $this->container['minimum_rente_sats'];
    }

    /**
     * Sets minimum_rente_sats
     *
     * @param mixed|null $minimum_rente_sats Definerer eventuel minimumsrentesatser for lånet.
     *
     * @return self
     */
    public function setMinimumRenteSats($minimum_rente_sats)
    {
        if (is_null($minimum_rente_sats)) {
            array_push($this->openAPINullablesSetToNull, 'minimum_rente_sats');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('minimum_rente_sats', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['minimum_rente_sats'] = $minimum_rente_sats;

        return $this;
    }

    /**
     * Gets maksimum_rente_sats
     *
     * @return mixed|null
     */
    public function getMaksimumRenteSats()
    {
        return $this->container['maksimum_rente_sats'];
    }

    /**
     * Sets maksimum_rente_sats
     *
     * @param mixed|null $maksimum_rente_sats Definerer eventuel maksimumsrentesatser for lånet.
     *
     * @return self
     */
    public function setMaksimumRenteSats($maksimum_rente_sats)
    {
        if (is_null($maksimum_rente_sats)) {
            array_push($this->openAPINullablesSetToNull, 'maksimum_rente_sats');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('maksimum_rente_sats', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['maksimum_rente_sats'] = $maksimum_rente_sats;

        return $this;
    }

    /**
     * Gets reference_rente
     *
     * @return \OpenAPI\Client\Model\ReferenceRenteModel|null
     */
    public function getReferenceRente()
    {
        return $this->container['reference_rente'];
    }

    /**
     * Sets reference_rente
     *
     * @param \OpenAPI\Client\Model\ReferenceRenteModel|null $reference_rente reference_rente
     *
     * @return self
     */
    public function setReferenceRente($reference_rente)
    {
        if (is_null($reference_rente)) {
            throw new \InvalidArgumentException('non-nullable reference_rente cannot be null');
        }
        $this->container['reference_rente'] = $reference_rente;

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


