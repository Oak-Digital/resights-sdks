<?php
/**
 * AdkomstModel
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
 * AdkomstModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdkomstModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdkomstModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'mixed',
        'revision_nummer' => 'mixed',
        'alias_id' => 'mixed',
        'alias_akt_historisk_id' => 'mixed',
        'overfoert' => 'mixed',
        'type' => '\OpenAPI\Client\Model\AdkomstTypeEnum',
        'tinglysning_dato' => 'mixed',
        'skoede_overtagelse_dato' => 'mixed',
        'senest_paategnet_dato' => 'mixed',
        'information_overfoert' => '\OpenAPI\Client\Model\DokumentInformationOverfoertModel',
        'valuta_kode' => 'mixed',
        'skoede_koebesum' => '\OpenAPI\Client\Model\SkoedeKoebesumModel',
        'tinglysning_afgift_betalt' => 'mixed',
        'adkomsthaver_samling' => 'mixed',
        'ogsaa_lyst_paa' => '\OpenAPI\Client\Model\OgsaaLystPaaModel',
        'anmaerkning_samling' => 'mixed',
        'tillaegstekst_samling' => 'mixed',
        'frist_information_samling' => 'mixed'
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
        'revision_nummer' => null,
        'alias_id' => null,
        'alias_akt_historisk_id' => null,
        'overfoert' => null,
        'type' => null,
        'tinglysning_dato' => 'date-time',
        'skoede_overtagelse_dato' => 'date',
        'senest_paategnet_dato' => 'date-time',
        'information_overfoert' => null,
        'valuta_kode' => null,
        'skoede_koebesum' => null,
        'tinglysning_afgift_betalt' => null,
        'adkomsthaver_samling' => null,
        'ogsaa_lyst_paa' => null,
        'anmaerkning_samling' => null,
        'tillaegstekst_samling' => null,
        'frist_information_samling' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'revision_nummer' => true,
		'alias_id' => true,
		'alias_akt_historisk_id' => true,
		'overfoert' => true,
		'type' => false,
		'tinglysning_dato' => true,
		'skoede_overtagelse_dato' => true,
		'senest_paategnet_dato' => true,
		'information_overfoert' => false,
		'valuta_kode' => true,
		'skoede_koebesum' => false,
		'tinglysning_afgift_betalt' => true,
		'adkomsthaver_samling' => true,
		'ogsaa_lyst_paa' => false,
		'anmaerkning_samling' => true,
		'tillaegstekst_samling' => true,
		'frist_information_samling' => true
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
        'id' => 'Id',
        'revision_nummer' => 'RevisionNummer',
        'alias_id' => 'AliasId',
        'alias_akt_historisk_id' => 'AliasAktHistoriskId',
        'overfoert' => 'Overfoert',
        'type' => 'Type',
        'tinglysning_dato' => 'TinglysningDato',
        'skoede_overtagelse_dato' => 'SkoedeOvertagelseDato',
        'senest_paategnet_dato' => 'SenestPaategnetDato',
        'information_overfoert' => 'InformationOverfoert',
        'valuta_kode' => 'ValutaKode',
        'skoede_koebesum' => 'SkoedeKoebesum',
        'tinglysning_afgift_betalt' => 'TinglysningAfgiftBetalt',
        'adkomsthaver_samling' => 'AdkomsthaverSamling',
        'ogsaa_lyst_paa' => 'OgsaaLystPaa',
        'anmaerkning_samling' => 'AnmaerkningSamling',
        'tillaegstekst_samling' => 'TillaegstekstSamling',
        'frist_information_samling' => 'FristInformationSamling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'revision_nummer' => 'setRevisionNummer',
        'alias_id' => 'setAliasId',
        'alias_akt_historisk_id' => 'setAliasAktHistoriskId',
        'overfoert' => 'setOverfoert',
        'type' => 'setType',
        'tinglysning_dato' => 'setTinglysningDato',
        'skoede_overtagelse_dato' => 'setSkoedeOvertagelseDato',
        'senest_paategnet_dato' => 'setSenestPaategnetDato',
        'information_overfoert' => 'setInformationOverfoert',
        'valuta_kode' => 'setValutaKode',
        'skoede_koebesum' => 'setSkoedeKoebesum',
        'tinglysning_afgift_betalt' => 'setTinglysningAfgiftBetalt',
        'adkomsthaver_samling' => 'setAdkomsthaverSamling',
        'ogsaa_lyst_paa' => 'setOgsaaLystPaa',
        'anmaerkning_samling' => 'setAnmaerkningSamling',
        'tillaegstekst_samling' => 'setTillaegstekstSamling',
        'frist_information_samling' => 'setFristInformationSamling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'revision_nummer' => 'getRevisionNummer',
        'alias_id' => 'getAliasId',
        'alias_akt_historisk_id' => 'getAliasAktHistoriskId',
        'overfoert' => 'getOverfoert',
        'type' => 'getType',
        'tinglysning_dato' => 'getTinglysningDato',
        'skoede_overtagelse_dato' => 'getSkoedeOvertagelseDato',
        'senest_paategnet_dato' => 'getSenestPaategnetDato',
        'information_overfoert' => 'getInformationOverfoert',
        'valuta_kode' => 'getValutaKode',
        'skoede_koebesum' => 'getSkoedeKoebesum',
        'tinglysning_afgift_betalt' => 'getTinglysningAfgiftBetalt',
        'adkomsthaver_samling' => 'getAdkomsthaverSamling',
        'ogsaa_lyst_paa' => 'getOgsaaLystPaa',
        'anmaerkning_samling' => 'getAnmaerkningSamling',
        'tillaegstekst_samling' => 'getTillaegstekstSamling',
        'frist_information_samling' => 'getFristInformationSamling'
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
        $this->setIfExists('revision_nummer', $data ?? [], null);
        $this->setIfExists('alias_id', $data ?? [], null);
        $this->setIfExists('alias_akt_historisk_id', $data ?? [], null);
        $this->setIfExists('overfoert', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('tinglysning_dato', $data ?? [], null);
        $this->setIfExists('skoede_overtagelse_dato', $data ?? [], null);
        $this->setIfExists('senest_paategnet_dato', $data ?? [], null);
        $this->setIfExists('information_overfoert', $data ?? [], null);
        $this->setIfExists('valuta_kode', $data ?? [], null);
        $this->setIfExists('skoede_koebesum', $data ?? [], null);
        $this->setIfExists('tinglysning_afgift_betalt', $data ?? [], null);
        $this->setIfExists('adkomsthaver_samling', $data ?? [], null);
        $this->setIfExists('ogsaa_lyst_paa', $data ?? [], null);
        $this->setIfExists('anmaerkning_samling', $data ?? [], null);
        $this->setIfExists('tillaegstekst_samling', $data ?? [], null);
        $this->setIfExists('frist_information_samling', $data ?? [], null);
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
        if ($this->container['revision_nummer'] === null) {
            $invalidProperties[] = "'revision_nummer' can't be null";
        }
        if ($this->container['overfoert'] === null) {
            $invalidProperties[] = "'overfoert' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['tinglysning_dato'] === null) {
            $invalidProperties[] = "'tinglysning_dato' can't be null";
        }
        if ($this->container['adkomsthaver_samling'] === null) {
            $invalidProperties[] = "'adkomsthaver_samling' can't be null";
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
     * @param mixed $id Identifikation af et dokument, som kan være et adkomst-, hæftelses- eller servitutdokument.
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
     * Gets revision_nummer
     *
     * @return mixed
     */
    public function getRevisionNummer()
    {
        return $this->container['revision_nummer'];
    }

    /**
     * Sets revision_nummer
     *
     * @param mixed $revision_nummer Revisionsnummer for rettighedsdokument.
     *
     * @return self
     */
    public function setRevisionNummer($revision_nummer)
    {
        if (is_null($revision_nummer)) {
            array_push($this->openAPINullablesSetToNull, 'revision_nummer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('revision_nummer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['revision_nummer'] = $revision_nummer;

        return $this;
    }

    /**
     * Gets alias_id
     *
     * @return mixed|null
     */
    public function getAliasId()
    {
        return $this->container['alias_id'];
    }

    /**
     * Sets alias_id
     *
     * @param mixed|null $alias_id Unikt dokument-alias bestående af dags dato og et løbenummer. F.eks. 20080304-1234567890
     *
     * @return self
     */
    public function setAliasId($alias_id)
    {
        if (is_null($alias_id)) {
            array_push($this->openAPINullablesSetToNull, 'alias_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('alias_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['alias_id'] = $alias_id;

        return $this;
    }

    /**
     * Gets alias_akt_historisk_id
     *
     * @return mixed|null
     */
    public function getAliasAktHistoriskId()
    {
        return $this->container['alias_akt_historisk_id'];
    }

    /**
     * Sets alias_akt_historisk_id
     *
     * @param mixed|null $alias_akt_historisk_id For konverterede data er dokument-alias dato, løbenummer og retskreds for det konverterede dokument. Elementet er opbygget af dato der består af 8 tal på formen yyyymmdd, herefter kommer bindestreg. Løbenummer indeholder 1 til 6 tal. Der er ikke foranstillede nuller. Herefter kommer en bindestreg. Retskreds består af 2 tal, f. eks. 01 eller 19. Hvis der findes flere konverteret dokumenter med samme dato/løbenummer, får disse tilføjet et suffix på fem tegn: [-][ét tegns dokumenttype][trecifret løbenr]. Dokumentypen er enten A (adkomstdokument), H (hæftelsesdokument) eller S (servitutdokument). Eksempler: 20060304-123456-19, 19950507-12345-04, 19981209-1234-21-H0001 og 11111111-0-10-H0054
     *
     * @return self
     */
    public function setAliasAktHistoriskId($alias_akt_historisk_id)
    {
        if (is_null($alias_akt_historisk_id)) {
            array_push($this->openAPINullablesSetToNull, 'alias_akt_historisk_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('alias_akt_historisk_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['alias_akt_historisk_id'] = $alias_akt_historisk_id;

        return $this;
    }

    /**
     * Gets overfoert
     *
     * @return mixed
     */
    public function getOverfoert()
    {
        return $this->container['overfoert'];
    }

    /**
     * Sets overfoert
     *
     * @param mixed $overfoert Angiver om dokumentet oprindeligt blev oprettet i e-akten som resultat af overførslen fra TLS. True angiver at dokumentet blev oprettet i e-akten ifm. overførslen. False angiver at dokumentet ikke blev oprettet i e-akten ifm. overførslen.
     *
     * @return self
     */
    public function setOverfoert($overfoert)
    {
        if (is_null($overfoert)) {
            array_push($this->openAPINullablesSetToNull, 'overfoert');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('overfoert', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['overfoert'] = $overfoert;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\AdkomstTypeEnum
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\AdkomstTypeEnum $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets tinglysning_dato
     *
     * @return mixed
     */
    public function getTinglysningDato()
    {
        return $this->container['tinglysning_dato'];
    }

    /**
     * Sets tinglysning_dato
     *
     * @param mixed $tinglysning_dato Tinglysningsdatoen er tidspunktet for modtagelsen af en anmeldelse, der indeholder oprettende ekspeditionstype. Tinglysningsdatoen viser altid datoen for den oprindelige tinglysning. Datoen for eventuelle påtegninger kan udelukkende ses i akten via revisionssporet.
     *
     * @return self
     */
    public function setTinglysningDato($tinglysning_dato)
    {
        if (is_null($tinglysning_dato)) {
            array_push($this->openAPINullablesSetToNull, 'tinglysning_dato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tinglysning_dato', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tinglysning_dato'] = $tinglysning_dato;

        return $this;
    }

    /**
     * Gets skoede_overtagelse_dato
     *
     * @return mixed|null
     */
    public function getSkoedeOvertagelseDato()
    {
        return $this->container['skoede_overtagelse_dato'];
    }

    /**
     * Sets skoede_overtagelse_dato
     *
     * @param mixed|null $skoede_overtagelse_dato SkoedeOvertagelsesDato.
     *
     * @return self
     */
    public function setSkoedeOvertagelseDato($skoede_overtagelse_dato)
    {
        if (is_null($skoede_overtagelse_dato)) {
            array_push($this->openAPINullablesSetToNull, 'skoede_overtagelse_dato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('skoede_overtagelse_dato', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['skoede_overtagelse_dato'] = $skoede_overtagelse_dato;

        return $this;
    }

    /**
     * Gets senest_paategnet_dato
     *
     * @return mixed|null
     */
    public function getSenestPaategnetDato()
    {
        return $this->container['senest_paategnet_dato'];
    }

    /**
     * Sets senest_paategnet_dato
     *
     * @param mixed|null $senest_paategnet_dato Dato for seneste påtegning
     *
     * @return self
     */
    public function setSenestPaategnetDato($senest_paategnet_dato)
    {
        if (is_null($senest_paategnet_dato)) {
            array_push($this->openAPINullablesSetToNull, 'senest_paategnet_dato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('senest_paategnet_dato', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['senest_paategnet_dato'] = $senest_paategnet_dato;

        return $this;
    }

    /**
     * Gets information_overfoert
     *
     * @return \OpenAPI\Client\Model\DokumentInformationOverfoertModel|null
     */
    public function getInformationOverfoert()
    {
        return $this->container['information_overfoert'];
    }

    /**
     * Sets information_overfoert
     *
     * @param \OpenAPI\Client\Model\DokumentInformationOverfoertModel|null $information_overfoert information_overfoert
     *
     * @return self
     */
    public function setInformationOverfoert($information_overfoert)
    {
        if (is_null($information_overfoert)) {
            throw new \InvalidArgumentException('non-nullable information_overfoert cannot be null');
        }
        $this->container['information_overfoert'] = $information_overfoert;

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
     * Gets skoede_koebesum
     *
     * @return \OpenAPI\Client\Model\SkoedeKoebesumModel|null
     */
    public function getSkoedeKoebesum()
    {
        return $this->container['skoede_koebesum'];
    }

    /**
     * Sets skoede_koebesum
     *
     * @param \OpenAPI\Client\Model\SkoedeKoebesumModel|null $skoede_koebesum skoede_koebesum
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
     * Gets tinglysning_afgift_betalt
     *
     * @return mixed|null
     */
    public function getTinglysningAfgiftBetalt()
    {
        return $this->container['tinglysning_afgift_betalt'];
    }

    /**
     * Sets tinglysning_afgift_betalt
     *
     * @param mixed|null $tinglysning_afgift_betalt Det totale tinglysningsbeløb i danske kroner, der er betalt for anmeldelsen, der berørte det pågældende dokument. Beløbet kan dække flere dokumenter, hvis behandlingen af anmeldelsen har resulteret i flere dokumenter eller dokumentrevisioner.
     *
     * @return self
     */
    public function setTinglysningAfgiftBetalt($tinglysning_afgift_betalt)
    {
        if (is_null($tinglysning_afgift_betalt)) {
            array_push($this->openAPINullablesSetToNull, 'tinglysning_afgift_betalt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tinglysning_afgift_betalt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tinglysning_afgift_betalt'] = $tinglysning_afgift_betalt;

        return $this;
    }

    /**
     * Gets adkomsthaver_samling
     *
     * @return mixed
     */
    public function getAdkomsthaverSamling()
    {
        return $this->container['adkomsthaver_samling'];
    }

    /**
     * Sets adkomsthaver_samling
     *
     * @param mixed $adkomsthaver_samling Adkomsthaver oplysninger.
     *
     * @return self
     */
    public function setAdkomsthaverSamling($adkomsthaver_samling)
    {
        if (is_null($adkomsthaver_samling)) {
            array_push($this->openAPINullablesSetToNull, 'adkomsthaver_samling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('adkomsthaver_samling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['adkomsthaver_samling'] = $adkomsthaver_samling;

        return $this;
    }

    /**
     * Gets ogsaa_lyst_paa
     *
     * @return \OpenAPI\Client\Model\OgsaaLystPaaModel|null
     */
    public function getOgsaaLystPaa()
    {
        return $this->container['ogsaa_lyst_paa'];
    }

    /**
     * Sets ogsaa_lyst_paa
     *
     * @param \OpenAPI\Client\Model\OgsaaLystPaaModel|null $ogsaa_lyst_paa ogsaa_lyst_paa
     *
     * @return self
     */
    public function setOgsaaLystPaa($ogsaa_lyst_paa)
    {
        if (is_null($ogsaa_lyst_paa)) {
            throw new \InvalidArgumentException('non-nullable ogsaa_lyst_paa cannot be null');
        }
        $this->container['ogsaa_lyst_paa'] = $ogsaa_lyst_paa;

        return $this;
    }

    /**
     * Gets anmaerkning_samling
     *
     * @return mixed|null
     */
    public function getAnmaerkningSamling()
    {
        return $this->container['anmaerkning_samling'];
    }

    /**
     * Sets anmaerkning_samling
     *
     * @param mixed|null $anmaerkning_samling Samling af anmaerkninger. Det kan være anmaerkninger om servitutter og hæftelser angivet ved nummer. Anmærkninger vedrører altid respekter. Mangler der i en anmeldelse respekt for en eller flere hæftelser eller servitutter, giver sagsbehandlingen anledning til anmærkninger herom. Anmærkning for servitutter indeholder kode for yderligere oplysninger om servitutten.
     *
     * @return self
     */
    public function setAnmaerkningSamling($anmaerkning_samling)
    {
        if (is_null($anmaerkning_samling)) {
            array_push($this->openAPINullablesSetToNull, 'anmaerkning_samling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('anmaerkning_samling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['anmaerkning_samling'] = $anmaerkning_samling;

        return $this;
    }

    /**
     * Gets tillaegstekst_samling
     *
     * @return mixed|null
     */
    public function getTillaegstekstSamling()
    {
        return $this->container['tillaegstekst_samling'];
    }

    /**
     * Sets tillaegstekst_samling
     *
     * @param mixed|null $tillaegstekst_samling Samling af TekstAngivelse.
     *
     * @return self
     */
    public function setTillaegstekstSamling($tillaegstekst_samling)
    {
        if (is_null($tillaegstekst_samling)) {
            array_push($this->openAPINullablesSetToNull, 'tillaegstekst_samling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tillaegstekst_samling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tillaegstekst_samling'] = $tillaegstekst_samling;

        return $this;
    }

    /**
     * Gets frist_information_samling
     *
     * @return mixed|null
     */
    public function getFristInformationSamling()
    {
        return $this->container['frist_information_samling'];
    }

    /**
     * Sets frist_information_samling
     *
     * @param mixed|null $frist_information_samling FristInformation ved tinglysning med frist. Her oplyses årsag og fristdato.
     *
     * @return self
     */
    public function setFristInformationSamling($frist_information_samling)
    {
        if (is_null($frist_information_samling)) {
            array_push($this->openAPINullablesSetToNull, 'frist_information_samling');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('frist_information_samling', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['frist_information_samling'] = $frist_information_samling;

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


