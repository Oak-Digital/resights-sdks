<?php
/**
 * SkoedeModel
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
 * SkoedeModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SkoedeModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SkoedeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ejendom_kategori' => '\OpenAPI\Client\Model\EjendomKategoriModel',
        'bygningsforhold_kode' => '\OpenAPI\Client\Model\BygningsforholdKodeEnum',
        'valuta_kode' => 'mixed',
        'handel_kode' => '\OpenAPI\Client\Model\HandelKodeEnum',
        'information' => '\OpenAPI\Client\Model\AdkomstInformationModel',
        'skoede_overtagelses_dato' => 'mixed',
        'skoede_koebsaftale_dato' => 'mixed',
        'skoede_koebsaftale_reference' => 'mixed',
        'skoede_koebesum' => '\OpenAPI\Client\Model\SkoedeKoebesumModel',
        'skoede_udenfor_koebesum' => '\OpenAPI\Client\Model\SkoedeUdenforKoebesumModel',
        'fuldmagt_anmeldt_samling' => 'mixed',
        'virksomhed_overdragelse_indikator' => 'mixed',
        'skoede_handelsbetingelser' => '\OpenAPI\Client\Model\SkoedeHandelsbetingelserModel',
        'skoede_tekst' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ejendom_kategori' => null,
        'bygningsforhold_kode' => null,
        'valuta_kode' => null,
        'handel_kode' => null,
        'information' => null,
        'skoede_overtagelses_dato' => 'date',
        'skoede_koebsaftale_dato' => 'date',
        'skoede_koebsaftale_reference' => null,
        'skoede_koebesum' => null,
        'skoede_udenfor_koebesum' => null,
        'fuldmagt_anmeldt_samling' => null,
        'virksomhed_overdragelse_indikator' => null,
        'skoede_handelsbetingelser' => null,
        'skoede_tekst' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ejendom_kategori' => false,
		'bygningsforhold_kode' => false,
		'valuta_kode' => true,
		'handel_kode' => false,
		'information' => false,
		'skoede_overtagelses_dato' => true,
		'skoede_koebsaftale_dato' => true,
		'skoede_koebsaftale_reference' => true,
		'skoede_koebesum' => false,
		'skoede_udenfor_koebesum' => false,
		'fuldmagt_anmeldt_samling' => true,
		'virksomhed_overdragelse_indikator' => true,
		'skoede_handelsbetingelser' => false,
		'skoede_tekst' => true
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
        'ejendom_kategori' => 'EjendomKategori',
        'bygningsforhold_kode' => 'BygningsforholdKode',
        'valuta_kode' => 'ValutaKode',
        'handel_kode' => 'HandelKode',
        'information' => 'Information',
        'skoede_overtagelses_dato' => 'SkoedeOvertagelsesDato',
        'skoede_koebsaftale_dato' => 'SkoedeKoebsaftaleDato',
        'skoede_koebsaftale_reference' => 'SkoedeKoebsaftaleReference',
        'skoede_koebesum' => 'SkoedeKoebesum',
        'skoede_udenfor_koebesum' => 'SkoedeUdenforKoebesum',
        'fuldmagt_anmeldt_samling' => 'FuldmagtAnmeldtSamling',
        'virksomhed_overdragelse_indikator' => 'VirksomhedOverdragelseIndikator',
        'skoede_handelsbetingelser' => 'SkoedeHandelsbetingelser',
        'skoede_tekst' => 'SkoedeTekst'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ejendom_kategori' => 'setEjendomKategori',
        'bygningsforhold_kode' => 'setBygningsforholdKode',
        'valuta_kode' => 'setValutaKode',
        'handel_kode' => 'setHandelKode',
        'information' => 'setInformation',
        'skoede_overtagelses_dato' => 'setSkoedeOvertagelsesDato',
        'skoede_koebsaftale_dato' => 'setSkoedeKoebsaftaleDato',
        'skoede_koebsaftale_reference' => 'setSkoedeKoebsaftaleReference',
        'skoede_koebesum' => 'setSkoedeKoebesum',
        'skoede_udenfor_koebesum' => 'setSkoedeUdenforKoebesum',
        'fuldmagt_anmeldt_samling' => 'setFuldmagtAnmeldtSamling',
        'virksomhed_overdragelse_indikator' => 'setVirksomhedOverdragelseIndikator',
        'skoede_handelsbetingelser' => 'setSkoedeHandelsbetingelser',
        'skoede_tekst' => 'setSkoedeTekst'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ejendom_kategori' => 'getEjendomKategori',
        'bygningsforhold_kode' => 'getBygningsforholdKode',
        'valuta_kode' => 'getValutaKode',
        'handel_kode' => 'getHandelKode',
        'information' => 'getInformation',
        'skoede_overtagelses_dato' => 'getSkoedeOvertagelsesDato',
        'skoede_koebsaftale_dato' => 'getSkoedeKoebsaftaleDato',
        'skoede_koebsaftale_reference' => 'getSkoedeKoebsaftaleReference',
        'skoede_koebesum' => 'getSkoedeKoebesum',
        'skoede_udenfor_koebesum' => 'getSkoedeUdenforKoebesum',
        'fuldmagt_anmeldt_samling' => 'getFuldmagtAnmeldtSamling',
        'virksomhed_overdragelse_indikator' => 'getVirksomhedOverdragelseIndikator',
        'skoede_handelsbetingelser' => 'getSkoedeHandelsbetingelser',
        'skoede_tekst' => 'getSkoedeTekst'
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
        $this->setIfExists('ejendom_kategori', $data ?? [], null);
        $this->setIfExists('bygningsforhold_kode', $data ?? [], null);
        $this->setIfExists('valuta_kode', $data ?? [], null);
        $this->setIfExists('handel_kode', $data ?? [], null);
        $this->setIfExists('information', $data ?? [], null);
        $this->setIfExists('skoede_overtagelses_dato', $data ?? [], null);
        $this->setIfExists('skoede_koebsaftale_dato', $data ?? [], null);
        $this->setIfExists('skoede_koebsaftale_reference', $data ?? [], null);
        $this->setIfExists('skoede_koebesum', $data ?? [], null);
        $this->setIfExists('skoede_udenfor_koebesum', $data ?? [], null);
        $this->setIfExists('fuldmagt_anmeldt_samling', $data ?? [], null);
        $this->setIfExists('virksomhed_overdragelse_indikator', $data ?? [], null);
        $this->setIfExists('skoede_handelsbetingelser', $data ?? [], null);
        $this->setIfExists('skoede_tekst', $data ?? [], null);
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

        if ($this->container['ejendom_kategori'] === null) {
            $invalidProperties[] = "'ejendom_kategori' can't be null";
        }
        if ($this->container['handel_kode'] === null) {
            $invalidProperties[] = "'handel_kode' can't be null";
        }
        if ($this->container['skoede_overtagelses_dato'] === null) {
            $invalidProperties[] = "'skoede_overtagelses_dato' can't be null";
        }
        if ($this->container['skoede_koebesum'] === null) {
            $invalidProperties[] = "'skoede_koebesum' can't be null";
        }
        if ($this->container['virksomhed_overdragelse_indikator'] === null) {
            $invalidProperties[] = "'virksomhed_overdragelse_indikator' can't be null";
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
     * Gets ejendom_kategori
     *
     * @return \OpenAPI\Client\Model\EjendomKategoriModel
     */
    public function getEjendomKategori()
    {
        return $this->container['ejendom_kategori'];
    }

    /**
     * Sets ejendom_kategori
     *
     * @param \OpenAPI\Client\Model\EjendomKategoriModel $ejendom_kategori ejendom_kategori
     *
     * @return self
     */
    public function setEjendomKategori($ejendom_kategori)
    {
        if (is_null($ejendom_kategori)) {
            throw new \InvalidArgumentException('non-nullable ejendom_kategori cannot be null');
        }
        $this->container['ejendom_kategori'] = $ejendom_kategori;

        return $this;
    }

    /**
     * Gets bygningsforhold_kode
     *
     * @return \OpenAPI\Client\Model\BygningsforholdKodeEnum|null
     */
    public function getBygningsforholdKode()
    {
        return $this->container['bygningsforhold_kode'];
    }

    /**
     * Sets bygningsforhold_kode
     *
     * @param \OpenAPI\Client\Model\BygningsforholdKodeEnum|null $bygningsforhold_kode bygningsforhold_kode
     *
     * @return self
     */
    public function setBygningsforholdKode($bygningsforhold_kode)
    {
        if (is_null($bygningsforhold_kode)) {
            throw new \InvalidArgumentException('non-nullable bygningsforhold_kode cannot be null');
        }
        $this->container['bygningsforhold_kode'] = $bygningsforhold_kode;

        return $this;
    }

    /**
     * Gets valuta_kode
     *
     * @return mixed|null
     */
    public function getValutaKode()
    {
        return $this->container['valuta_kode'];
    }

    /**
     * Sets valuta_kode
     *
     * @param mixed|null $valuta_kode ISO 4217 valutakode.
     *
     * @return self
     */
    public function setValutaKode($valuta_kode)
    {
        if (is_null($valuta_kode)) {
            array_push($this->openAPINullablesSetToNull, 'valuta_kode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('valuta_kode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['valuta_kode'] = $valuta_kode;

        return $this;
    }

    /**
     * Gets handel_kode
     *
     * @return \OpenAPI\Client\Model\HandelKodeEnum
     */
    public function getHandelKode()
    {
        return $this->container['handel_kode'];
    }

    /**
     * Sets handel_kode
     *
     * @param \OpenAPI\Client\Model\HandelKodeEnum $handel_kode handel_kode
     *
     * @return self
     */
    public function setHandelKode($handel_kode)
    {
        if (is_null($handel_kode)) {
            throw new \InvalidArgumentException('non-nullable handel_kode cannot be null');
        }
        $this->container['handel_kode'] = $handel_kode;

        return $this;
    }

    /**
     * Gets information
     *
     * @return \OpenAPI\Client\Model\AdkomstInformationModel|null
     */
    public function getInformation()
    {
        return $this->container['information'];
    }

    /**
     * Sets information
     *
     * @param \OpenAPI\Client\Model\AdkomstInformationModel|null $information information
     *
     * @return self
     */
    public function setInformation($information)
    {
        if (is_null($information)) {
            throw new \InvalidArgumentException('non-nullable information cannot be null');
        }
        $this->container['information'] = $information;

        return $this;
    }

    /**
     * Gets skoede_overtagelses_dato
     *
     * @return mixed
     */
    public function getSkoedeOvertagelsesDato()
    {
        return $this->container['skoede_overtagelses_dato'];
    }

    /**
     * Sets skoede_overtagelses_dato
     *
     * @param mixed $skoede_overtagelses_dato SkoedeOvertagelsesDato.
     *
     * @return self
     */
    public function setSkoedeOvertagelsesDato($skoede_overtagelses_dato)
    {
        if (is_null($skoede_overtagelses_dato)) {
            array_push($this->openAPINullablesSetToNull, 'skoede_overtagelses_dato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('skoede_overtagelses_dato', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['skoede_overtagelses_dato'] = $skoede_overtagelses_dato;

        return $this;
    }

    /**
     * Gets skoede_koebsaftale_dato
     *
     * @return mixed|null
     */
    public function getSkoedeKoebsaftaleDato()
    {
        return $this->container['skoede_koebsaftale_dato'];
    }

    /**
     * Sets skoede_koebsaftale_dato
     *
     * @param mixed|null $skoede_koebsaftale_dato SkoedeKoebsaftaleDato.
     *
     * @return self
     */
    public function setSkoedeKoebsaftaleDato($skoede_koebsaftale_dato)
    {
        if (is_null($skoede_koebsaftale_dato)) {
            array_push($this->openAPINullablesSetToNull, 'skoede_koebsaftale_dato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('skoede_koebsaftale_dato', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['skoede_koebsaftale_dato'] = $skoede_koebsaftale_dato;

        return $this;
    }

    /**
     * Gets skoede_koebsaftale_reference
     *
     * @return mixed|null
     */
    public function getSkoedeKoebsaftaleReference()
    {
        return $this->container['skoede_koebsaftale_reference'];
    }

    /**
     * Sets skoede_koebsaftale_reference
     *
     * @param mixed|null $skoede_koebsaftale_reference Angiver et eventuelt internt referencenummer hos brugeren for købsaftalen..
     *
     * @return self
     */
    public function setSkoedeKoebsaftaleReference($skoede_koebsaftale_reference)
    {
        if (is_null($skoede_koebsaftale_reference)) {
            array_push($this->openAPINullablesSetToNull, 'skoede_koebsaftale_reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('skoede_koebsaftale_reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['skoede_koebsaftale_reference'] = $skoede_koebsaftale_reference;

        return $this;
    }

    /**
     * Gets skoede_koebesum
     *
     * @return \OpenAPI\Client\Model\SkoedeKoebesumModel
     */
    public function getSkoedeKoebesum()
    {
        return $this->container['skoede_koebesum'];
    }

    /**
     * Sets skoede_koebesum
     *
     * @param \OpenAPI\Client\Model\SkoedeKoebesumModel $skoede_koebesum skoede_koebesum
     *
     * @return self
     */
    public function setSkoedeKoebesum($skoede_koebesum)
    {
        if (is_null($skoede_koebesum)) {
            throw new \InvalidArgumentException('non-nullable skoede_koebesum cannot be null');
        }
        $this->container['skoede_koebesum'] = $skoede_koebesum;

        return $this;
    }

    /**
     * Gets skoede_udenfor_koebesum
     *
     * @return \OpenAPI\Client\Model\SkoedeUdenforKoebesumModel|null
     */
    public function getSkoedeUdenforKoebesum()
    {
        return $this->container['skoede_udenfor_koebesum'];
    }

    /**
     * Sets skoede_udenfor_koebesum
     *
     * @param \OpenAPI\Client\Model\SkoedeUdenforKoebesumModel|null $skoede_udenfor_koebesum skoede_udenfor_koebesum
     *
     * @return self
     */
    public function setSkoedeUdenforKoebesum($skoede_udenfor_koebesum)
    {
        if (is_null($skoede_udenfor_koebesum)) {
            throw new \InvalidArgumentException('non-nullable skoede_udenfor_koebesum cannot be null');
        }
        $this->container['skoede_udenfor_koebesum'] = $skoede_udenfor_koebesum;

        return $this;
    }

    /**
     * Gets fuldmagt_anmeldt_samling
     *
     * @return mixed|null
     */
    public function getFuldmagtAnmeldtSamling()
    {
        return $this->container['fuldmagt_anmeldt_samling'];
    }

    /**
     * Sets fuldmagt_anmeldt_samling
     *
     * @param mixed|null $fuldmagt_anmeldt_samling Samling af anmeldte fuldmagter.
     *
     * @return self
     */
    public function setFuldmagtAnmeldtSamling($fuldmagt_anmeldt_samling)
    {
        if (is_null($fuldmagt_anmeldt_samling)) {
            array_push($this->openAPINullablesSetToNull, 'fuldmagt_anmeldt_samling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fuldmagt_anmeldt_samling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fuldmagt_anmeldt_samling'] = $fuldmagt_anmeldt_samling;

        return $this;
    }

    /**
     * Gets virksomhed_overdragelse_indikator
     *
     * @return mixed
     */
    public function getVirksomhedOverdragelseIndikator()
    {
        return $this->container['virksomhed_overdragelse_indikator'];
    }

    /**
     * Sets virksomhed_overdragelse_indikator
     *
     * @param mixed $virksomhed_overdragelse_indikator True angiver at ejendommen overdrages som led i en virksomhedsoverdragelse. False angiver at ejendommen ikke overdrages som led i en virksomhedsoverdragelse.
     *
     * @return self
     */
    public function setVirksomhedOverdragelseIndikator($virksomhed_overdragelse_indikator)
    {
        if (is_null($virksomhed_overdragelse_indikator)) {
            array_push($this->openAPINullablesSetToNull, 'virksomhed_overdragelse_indikator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('virksomhed_overdragelse_indikator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['virksomhed_overdragelse_indikator'] = $virksomhed_overdragelse_indikator;

        return $this;
    }

    /**
     * Gets skoede_handelsbetingelser
     *
     * @return \OpenAPI\Client\Model\SkoedeHandelsbetingelserModel|null
     */
    public function getSkoedeHandelsbetingelser()
    {
        return $this->container['skoede_handelsbetingelser'];
    }

    /**
     * Sets skoede_handelsbetingelser
     *
     * @param \OpenAPI\Client\Model\SkoedeHandelsbetingelserModel|null $skoede_handelsbetingelser skoede_handelsbetingelser
     *
     * @return self
     */
    public function setSkoedeHandelsbetingelser($skoede_handelsbetingelser)
    {
        if (is_null($skoede_handelsbetingelser)) {
            throw new \InvalidArgumentException('non-nullable skoede_handelsbetingelser cannot be null');
        }
        $this->container['skoede_handelsbetingelser'] = $skoede_handelsbetingelser;

        return $this;
    }

    /**
     * Gets skoede_tekst
     *
     * @return mixed|null
     */
    public function getSkoedeTekst()
    {
        return $this->container['skoede_tekst'];
    }

    /**
     * Sets skoede_tekst
     *
     * @param mixed|null $skoede_tekst Skødetekst
     *
     * @return self
     */
    public function setSkoedeTekst($skoede_tekst)
    {
        if (is_null($skoede_tekst)) {
            array_push($this->openAPINullablesSetToNull, 'skoede_tekst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('skoede_tekst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['skoede_tekst'] = $skoede_tekst;

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


