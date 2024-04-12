<?php
/**
 * EjendomKategoriModel
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
 * EjendomKategoriModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EjendomKategoriModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EjendomKategoriModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'kategori' => '\OpenAPI\Client\Model\EjendomKategoriEnum',
        'byggemodningsomkostning_indikator' => 'mixed',
        'antal_beboelseslejligheder' => 'mixed',
        'udlejningsgrad_indikator' => 'mixed',
        'momspligtigeformaal_indikator' => 'mixed',
        'udlejningsejendom_indikator' => 'mixed',
        'antal_beboelseslejemaal' => 'mixed',
        'antal_erhvervslejemaal' => 'mixed',
        'tekst' => 'mixed',
        'beskrivelse' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'kategori' => null,
        'byggemodningsomkostning_indikator' => null,
        'antal_beboelseslejligheder' => null,
        'udlejningsgrad_indikator' => null,
        'momspligtigeformaal_indikator' => null,
        'udlejningsejendom_indikator' => null,
        'antal_beboelseslejemaal' => null,
        'antal_erhvervslejemaal' => null,
        'tekst' => null,
        'beskrivelse' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'kategori' => false,
		'byggemodningsomkostning_indikator' => true,
		'antal_beboelseslejligheder' => true,
		'udlejningsgrad_indikator' => true,
		'momspligtigeformaal_indikator' => true,
		'udlejningsejendom_indikator' => true,
		'antal_beboelseslejemaal' => true,
		'antal_erhvervslejemaal' => true,
		'tekst' => true,
		'beskrivelse' => true
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
        'kategori' => 'Kategori',
        'byggemodningsomkostning_indikator' => 'ByggemodningsomkostningIndikator',
        'antal_beboelseslejligheder' => 'AntalBeboelseslejligheder',
        'udlejningsgrad_indikator' => 'UdlejningsgradIndikator',
        'momspligtigeformaal_indikator' => 'MomspligtigeformaalIndikator',
        'udlejningsejendom_indikator' => 'UdlejningsejendomIndikator',
        'antal_beboelseslejemaal' => 'AntalBeboelseslejemaal',
        'antal_erhvervslejemaal' => 'AntalErhvervslejemaal',
        'tekst' => 'Tekst',
        'beskrivelse' => 'Beskrivelse'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kategori' => 'setKategori',
        'byggemodningsomkostning_indikator' => 'setByggemodningsomkostningIndikator',
        'antal_beboelseslejligheder' => 'setAntalBeboelseslejligheder',
        'udlejningsgrad_indikator' => 'setUdlejningsgradIndikator',
        'momspligtigeformaal_indikator' => 'setMomspligtigeformaalIndikator',
        'udlejningsejendom_indikator' => 'setUdlejningsejendomIndikator',
        'antal_beboelseslejemaal' => 'setAntalBeboelseslejemaal',
        'antal_erhvervslejemaal' => 'setAntalErhvervslejemaal',
        'tekst' => 'setTekst',
        'beskrivelse' => 'setBeskrivelse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kategori' => 'getKategori',
        'byggemodningsomkostning_indikator' => 'getByggemodningsomkostningIndikator',
        'antal_beboelseslejligheder' => 'getAntalBeboelseslejligheder',
        'udlejningsgrad_indikator' => 'getUdlejningsgradIndikator',
        'momspligtigeformaal_indikator' => 'getMomspligtigeformaalIndikator',
        'udlejningsejendom_indikator' => 'getUdlejningsejendomIndikator',
        'antal_beboelseslejemaal' => 'getAntalBeboelseslejemaal',
        'antal_erhvervslejemaal' => 'getAntalErhvervslejemaal',
        'tekst' => 'getTekst',
        'beskrivelse' => 'getBeskrivelse'
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
        $this->setIfExists('kategori', $data ?? [], null);
        $this->setIfExists('byggemodningsomkostning_indikator', $data ?? [], null);
        $this->setIfExists('antal_beboelseslejligheder', $data ?? [], null);
        $this->setIfExists('udlejningsgrad_indikator', $data ?? [], null);
        $this->setIfExists('momspligtigeformaal_indikator', $data ?? [], null);
        $this->setIfExists('udlejningsejendom_indikator', $data ?? [], null);
        $this->setIfExists('antal_beboelseslejemaal', $data ?? [], null);
        $this->setIfExists('antal_erhvervslejemaal', $data ?? [], null);
        $this->setIfExists('tekst', $data ?? [], null);
        $this->setIfExists('beskrivelse', $data ?? [], null);
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
     * Gets kategori
     *
     * @return \OpenAPI\Client\Model\EjendomKategoriEnum|null
     */
    public function getKategori()
    {
        return $this->container['kategori'];
    }

    /**
     * Sets kategori
     *
     * @param \OpenAPI\Client\Model\EjendomKategoriEnum|null $kategori kategori
     *
     * @return self
     */
    public function setKategori($kategori)
    {
        if (is_null($kategori)) {
            throw new \InvalidArgumentException('non-nullable kategori cannot be null');
        }
        $this->container['kategori'] = $kategori;

        return $this;
    }

    /**
     * Gets byggemodningsomkostning_indikator
     *
     * @return mixed|null
     */
    public function getByggemodningsomkostningIndikator()
    {
        return $this->container['byggemodningsomkostning_indikator'];
    }

    /**
     * Sets byggemodningsomkostning_indikator
     *
     * @param mixed|null $byggemodningsomkostning_indikator Anvendes ikke efter 18.06.2016 iht VUA028 True angiver at koebesummen omfatter alle omkostninger til byggemodning. False angiver at koebesummen ikke omfatter disse omkostninge
     *
     * @return self
     */
    public function setByggemodningsomkostningIndikator($byggemodningsomkostning_indikator)
    {
        if (is_null($byggemodningsomkostning_indikator)) {
            array_push($this->openAPINullablesSetToNull, 'byggemodningsomkostning_indikator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('byggemodningsomkostning_indikator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['byggemodningsomkostning_indikator'] = $byggemodningsomkostning_indikator;

        return $this;
    }

    /**
     * Gets antal_beboelseslejligheder
     *
     * @return mixed|null
     */
    public function getAntalBeboelseslejligheder()
    {
        return $this->container['antal_beboelseslejligheder'];
    }

    /**
     * Sets antal_beboelseslejligheder
     *
     * @param mixed|null $antal_beboelseslejligheder Hvis antallet er 2 eller mere skal der vaere afgivet erklaering T13-21.
     *
     * @return self
     */
    public function setAntalBeboelseslejligheder($antal_beboelseslejligheder)
    {
        if (is_null($antal_beboelseslejligheder)) {
            array_push($this->openAPINullablesSetToNull, 'antal_beboelseslejligheder');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('antal_beboelseslejligheder', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['antal_beboelseslejligheder'] = $antal_beboelseslejligheder;

        return $this;
    }

    /**
     * Gets udlejningsgrad_indikator
     *
     * @return mixed|null
     */
    public function getUdlejningsgradIndikator()
    {
        return $this->container['udlejningsgrad_indikator'];
    }

    /**
     * Sets udlejningsgrad_indikator
     *
     * @param mixed|null $udlejningsgrad_indikator True angiver at mere end 50 procent af erhvervs- og boligarealerne har vaeret udlejet i seneste kalenderaar. False angiver at mindre end eller lig med 50 procent af erhvervs- og boligarealerne har vaeret udlejet i seneste kalenderaar.
     *
     * @return self
     */
    public function setUdlejningsgradIndikator($udlejningsgrad_indikator)
    {
        if (is_null($udlejningsgrad_indikator)) {
            array_push($this->openAPINullablesSetToNull, 'udlejningsgrad_indikator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('udlejningsgrad_indikator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['udlejningsgrad_indikator'] = $udlejningsgrad_indikator;

        return $this;
    }

    /**
     * Gets momspligtigeformaal_indikator
     *
     * @return mixed|null
     */
    public function getMomspligtigeformaalIndikator()
    {
        return $this->container['momspligtigeformaal_indikator'];
    }

    /**
     * Sets momspligtigeformaal_indikator
     *
     * @param mixed|null $momspligtigeformaal_indikator True angiver at ejendommen har vaeret anvendt til momspligtige formaal. False angiver at ejendommen ikke har vaeret anvendt til momspligtige formaal. En ejendom har vaeret anvendt til momspligtige formål, når en momsregistreret virksomhed har anvendt ejendommen til sine momspligtige aktiviteter, f.eks. som administrationsbygning, fabrikationsbygning, lagerbygning m.m. Der kan også være tale om, at overdrageren har opnået tilladelse til frivillig momsregistrering for udlejning, bortforpagtning eller salg af ejendommen, og ejendommen har været anvendt til disse formål.
     *
     * @return self
     */
    public function setMomspligtigeformaalIndikator($momspligtigeformaal_indikator)
    {
        if (is_null($momspligtigeformaal_indikator)) {
            array_push($this->openAPINullablesSetToNull, 'momspligtigeformaal_indikator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('momspligtigeformaal_indikator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['momspligtigeformaal_indikator'] = $momspligtigeformaal_indikator;

        return $this;
    }

    /**
     * Gets udlejningsejendom_indikator
     *
     * @return mixed|null
     */
    public function getUdlejningsejendomIndikator()
    {
        return $this->container['udlejningsejendom_indikator'];
    }

    /**
     * Sets udlejningsejendom_indikator
     *
     * @param mixed|null $udlejningsejendom_indikator True angiver at der er tale om en udlejningsejendom og der skal angives antallet af beboelseslejemaal og antallet af erhvervslejemaal med tilhoerende erklaering T22-30. False angiver at der ikke er tale om en udlejningsejendom.
     *
     * @return self
     */
    public function setUdlejningsejendomIndikator($udlejningsejendom_indikator)
    {
        if (is_null($udlejningsejendom_indikator)) {
            array_push($this->openAPINullablesSetToNull, 'udlejningsejendom_indikator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('udlejningsejendom_indikator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['udlejningsejendom_indikator'] = $udlejningsejendom_indikator;

        return $this;
    }

    /**
     * Gets antal_beboelseslejemaal
     *
     * @return mixed|null
     */
    public function getAntalBeboelseslejemaal()
    {
        return $this->container['antal_beboelseslejemaal'];
    }

    /**
     * Sets antal_beboelseslejemaal
     *
     * @param mixed|null $antal_beboelseslejemaal Hvis der er tale om en udlejningsejendom skal antallet af beboelseslejemaal angives. Hvis antallet er større end 5 skal der laves en tilhoerende erklæring T22-30.
     *
     * @return self
     */
    public function setAntalBeboelseslejemaal($antal_beboelseslejemaal)
    {
        if (is_null($antal_beboelseslejemaal)) {
            array_push($this->openAPINullablesSetToNull, 'antal_beboelseslejemaal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('antal_beboelseslejemaal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['antal_beboelseslejemaal'] = $antal_beboelseslejemaal;

        return $this;
    }

    /**
     * Gets antal_erhvervslejemaal
     *
     * @return mixed|null
     */
    public function getAntalErhvervslejemaal()
    {
        return $this->container['antal_erhvervslejemaal'];
    }

    /**
     * Sets antal_erhvervslejemaal
     *
     * @param mixed|null $antal_erhvervslejemaal Hvis der er tale om en udlejningsejendom skal antallet af erhvervslejemaal angives. Hvis antallet af beboelseslejemaal og erhvervslejemaal er stoeere end 12 skal der afgives en tilhoerende erklaering T22-30
     *
     * @return self
     */
    public function setAntalErhvervslejemaal($antal_erhvervslejemaal)
    {
        if (is_null($antal_erhvervslejemaal)) {
            array_push($this->openAPINullablesSetToNull, 'antal_erhvervslejemaal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('antal_erhvervslejemaal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['antal_erhvervslejemaal'] = $antal_erhvervslejemaal;

        return $this;
    }

    /**
     * Gets tekst
     *
     * @return mixed|null
     */
    public function getTekst()
    {
        return $this->container['tekst'];
    }

    /**
     * Sets tekst
     *
     * @param mixed|null $tekst EjendomKategoriTekst
     *
     * @return self
     */
    public function setTekst($tekst)
    {
        if (is_null($tekst)) {
            array_push($this->openAPINullablesSetToNull, 'tekst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tekst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tekst'] = $tekst;

        return $this;
    }

    /**
     * Gets beskrivelse
     *
     * @return mixed|null
     */
    public function getBeskrivelse()
    {
        return $this->container['beskrivelse'];
    }

    /**
     * Sets beskrivelse
     *
     * @param mixed|null $beskrivelse EjendomKategoriBeskrivelse for valg EjendomKategoriAnden i EjendomKategori
     *
     * @return self
     */
    public function setBeskrivelse($beskrivelse)
    {
        if (is_null($beskrivelse)) {
            array_push($this->openAPINullablesSetToNull, 'beskrivelse');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('beskrivelse', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['beskrivelse'] = $beskrivelse;

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


