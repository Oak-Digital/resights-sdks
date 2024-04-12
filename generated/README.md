# OpenAPIClient-php


<img src=\"static/resights/resights-logo.png\" alt=\"Resights Logo\" style=\"position: absolute; top: 52px; right: 36px\" align=\"right\" width=\"240\">
<a href=\"/docs\">Swagger</a> | <a href=\"/redoc\">Redoc</a>
<br>
<br>
<div><b>Welcome API 👋</b></div>
<br>

<br>



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Oak-Digital/resights-php.git"
    }
  ],
  "require": {
    "Oak-Digital/resights-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = NULL; // mixed
$sfe_number = NULL; // mixed
$esr_number = NULL; // mixed
$municipality_code = NULL; // mixed
$property_number = NULL; // mixed
$land_lot_code = NULL; // mixed
$cadastre_number = NULL; // mixed
$address = NULL; // mixed
$x = NULL; // mixed | Longitude. Example: 12.5494
$y = NULL; // mixed | Latitute. Example: 55.6722
$distance = 100m; // mixed | Distance from x, y
$page = NULL; // mixed | Page id for pagination
$size = NULL; // mixed
$offset = NULL; // mixed
$sort = NULL; // mixed
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder(); // \OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getProperties($bfe_number, $sfe_number, $esr_number, $municipality_code, $property_number, $land_lot_code, $cadastre_number, $address, $x, $y, $distance, $page, $size, $offset, $sort, $order, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getProperties: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BFEBestemtFastEjendomApi* | [**getProperties**](docs/Api/BFEBestemtFastEjendomApi.md#getproperties) | **GET** /api/v2/properties | Get Properties
*BFEBestemtFastEjendomApi* | [**getPropertiesAdvanced**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertiesadvanced) | **POST** /api/v2/properties | Get Properties Advanced
*BFEBestemtFastEjendomApi* | [**getPropertyByBfeNumber**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertybybfenumber) | **GET** /api/v2/properties/{bfe_number} | Get Property By Bfe Number
*BFEBestemtFastEjendomApi* | [**getPropertyDetailsBbr**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertydetailsbbr) | **GET** /api/v2/properties/{bfe_number}/bbr | Get Property Details
*BFEBestemtFastEjendomApi* | [**getPropertyDetailsEbr**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertydetailsebr) | **GET** /api/v2/properties/{bfe_number}/ebr | Get Property Details
*BFEBestemtFastEjendomApi* | [**getPropertyDetailsOverview**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertydetailsoverview) | **GET** /api/v2/properties/{bfe_number}/overview | Get Property Details
*BFEBestemtFastEjendomApi* | [**getPropertyDetailsOwners**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertydetailsowners) | **GET** /api/v2/properties/{bfe_number}/owners | Get Property Details
*BFEBestemtFastEjendomApi* | [**getPropertyDetailsTax**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertydetailstax) | **GET** /api/v2/properties/{bfe_number}/tax | Get Property Details
*BFEBestemtFastEjendomApi* | [**getPropertyIndicators**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertyindicators) | **GET** /api/v2/properties/{bfe_number}/indicators | Get Property Indicators
*BFEBestemtFastEjendomApi* | [**getPropertyTrades**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertytrades) | **GET** /api/v2/properties/{bfe_number}/trades | Get Property Trades
*BFEBestemtFastEjendomApi* | [**getPropertyTradesLatest**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertytradeslatest) | **GET** /api/v2/properties/{bfe_number}/trades/latest | Get Property Trades
*BFEBestemtFastEjendomApi* | [**getPropertyValuationLatest**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertyvaluationlatest) | **GET** /api/v2/properties/{bfe_number}/valuations/latest | Get Property Valuation Latest
*BFEBestemtFastEjendomApi* | [**getPropertyValuationNew**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertyvaluationnew) | **GET** /api/v2/properties/{bfe_number}/valuations/new | Get Property Valuation New
*BFEBestemtFastEjendomApi* | [**getPropertyValuations**](docs/Api/BFEBestemtFastEjendomApi.md#getpropertyvaluations) | **GET** /api/v2/properties/{bfe_number}/valuations | Get Property Valuations
*CVRDetCentraleVirksomhedsregisterApi* | [**expandNetwork**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#expandnetwork) | **GET** /api/v2/cvr/{id}/expand-network | Expand Network
*CVRDetCentraleVirksomhedsregisterApi* | [**getCompanyFinancials**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcompanyfinancials) | **GET** /api/v2/cvr/companies/{cvr_number}/financials | Get Company Financials
*CVRDetCentraleVirksomhedsregisterApi* | [**getCompanyFinancialsLatest**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcompanyfinancialslatest) | **GET** /api/v2/cvr/companies/{cvr_number}/financials/latest | Get Company Financials Latest
*CVRDetCentraleVirksomhedsregisterApi* | [**getCompanyTimeline**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcompanytimeline) | **GET** /api/v2/cvr/companies/{cvr_number}/timeline | Get Company Timeline
*CVRDetCentraleVirksomhedsregisterApi* | [**getConnectionsBetweenPair**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getconnectionsbetweenpair) | **GET** /api/v2/cvr/network/pair | Get Connections Between Pair
*CVRDetCentraleVirksomhedsregisterApi* | [**getCvrCompanies**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcvrcompanies) | **GET** /api/v2/cvr/companies | Get Cvr Companies
*CVRDetCentraleVirksomhedsregisterApi* | [**getCvrCompaniesAdvanced**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcvrcompaniesadvanced) | **POST** /api/v2/cvr/companies | Get Cvr Companies Advanced
*CVRDetCentraleVirksomhedsregisterApi* | [**getCvrCompany**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcvrcompany) | **GET** /api/v2/cvr/companies/{cvr_number} | Get Cvr Company
*CVRDetCentraleVirksomhedsregisterApi* | [**getCvrMember**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcvrmember) | **GET** /api/v2/cvr/members/{unit_number} | Get Cvr Member
*CVRDetCentraleVirksomhedsregisterApi* | [**getCvrMembers**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcvrmembers) | **GET** /api/v2/cvr/members | Get Cvr Members
*CVRDetCentraleVirksomhedsregisterApi* | [**getCvrMembersAdvanced**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcvrmembersadvanced) | **POST** /api/v2/cvr/members | Get Cvr Members Advanced
*CVRDetCentraleVirksomhedsregisterApi* | [**getCvrNetwork**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcvrnetwork) | **GET** /api/v2/cvr/{id}/network | Get Cvr Network
*CVRDetCentraleVirksomhedsregisterApi* | [**getCvrPUnit**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcvrpunit) | **GET** /api/v2/cvr/p-units/{p_number} | Get Cvr P Unit
*CVRDetCentraleVirksomhedsregisterApi* | [**getCvrPUnits**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcvrpunits) | **GET** /api/v2/cvr/p-units | Get Cvr P Units
*CVRDetCentraleVirksomhedsregisterApi* | [**getCvrPUnitsAdvanced**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getcvrpunitsadvanced) | **POST** /api/v2/cvr/p-units | Get Cvr P Units Advanced
*CVRDetCentraleVirksomhedsregisterApi* | [**getMemberTimeline**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getmembertimeline) | **GET** /api/v2/cvr/members/{cvr_number}/timeline | Get Member Timeline
*CVRDetCentraleVirksomhedsregisterApi* | [**getPartnersInCrime**](docs/Api/CVRDetCentraleVirksomhedsregisterApi.md#getpartnersincrime) | **GET** /api/v2/cvr/{id}/partners-in-crime | Get Partners In Crime
*CadastresMatriklerJordstykkerApi* | [**getCadastreById**](docs/Api/CadastresMatriklerJordstykkerApi.md#getcadastrebyid) | **GET** /api/v2/cadastres/{id} | Get Cadastre By Id
*CadastresMatriklerJordstykkerApi* | [**getCadastres**](docs/Api/CadastresMatriklerJordstykkerApi.md#getcadastres) | **GET** /api/v2/cadastres | Get Cadastres
*CadastresMatriklerJordstykkerApi* | [**getCadastresAdvanced**](docs/Api/CadastresMatriklerJordstykkerApi.md#getcadastresadvanced) | **POST** /api/v2/cadastres | Get Cadastres Advanced
*EMOEnergimrkeordningenApi* | [**getEnergyLabelByBfeNumber**](docs/Api/EMOEnergimrkeordningenApi.md#getenergylabelbybfenumber) | **GET** /api/v2/emo/energy | Get Energy Label By Bfe Number
*EMOEnergimrkeordningenApi* | [**getEnergyLabelById**](docs/Api/EMOEnergimrkeordningenApi.md#getenergylabelbyid) | **GET** /api/v2/emo/energy/{id} | Get Energy Label By Id
*FinancialsRegnskaberForVirksomhederApi* | [**getFinancials**](docs/Api/FinancialsRegnskaberForVirksomhederApi.md#getfinancials) | **GET** /api/v2/cvr/financials | Get Financials
*FinancialsRegnskaberForVirksomhederApi* | [**getFinancialsAdvanced**](docs/Api/FinancialsRegnskaberForVirksomhederApi.md#getfinancialsadvanced) | **POST** /api/v2/cvr/financials | Get Financials Advanced
*FinancialsRegnskaberForVirksomhederApi* | [**getFinancialsById**](docs/Api/FinancialsRegnskaberForVirksomhederApi.md#getfinancialsbyid) | **GET** /api/v2/cvr/financials/{id} | Get Financials By Id
*GIGrundejernesInvesteringsfondApi* | [**getGiDocuments**](docs/Api/GIGrundejernesInvesteringsfondApi.md#getgidocuments) | **GET** /api/v2/gi/{bfe_number} | Get Gi Documents
*GISGeospatialInformationSystemsApi* | [**convertGisFileToGeojson**](docs/Api/GISGeospatialInformationSystemsApi.md#convertgisfiletogeojson) | **POST** /api/v2/gis/convert | Convert Gis File To Geojson
*GISGeospatialInformationSystemsApi* | [**exportLayers**](docs/Api/GISGeospatialInformationSystemsApi.md#exportlayers) | **POST** /api/v2/gis/export/{xmin}/{ymin}/{xmax}/{ymax} | Export Layers
*GISGeospatialInformationSystemsApi* | [**geoserviceProxy**](docs/Api/GISGeospatialInformationSystemsApi.md#geoserviceproxy) | **GET** /api/v2/gis/proxy | Geoservice Proxy
*GISGeospatialInformationSystemsApi* | [**getGeodanmarkBuildings**](docs/Api/GISGeospatialInformationSystemsApi.md#getgeodanmarkbuildings) | **GET** /api/v2/gis/geodanmark/buildings | Get Geodanmark Buildings
*GISGeospatialInformationSystemsApi* | [**getGeojsonLayer**](docs/Api/GISGeospatialInformationSystemsApi.md#getgeojsonlayer) | **GET** /api/v2/gis/geojson | Get Geojson Layer
*GISGeospatialInformationSystemsApi* | [**getVectorLayer**](docs/Api/GISGeospatialInformationSystemsApi.md#getvectorlayer) | **GET** /api/v2/gis/mvt/{layer}/{z}/{x}/{y}.pbf | Get Vector Layer
*HealthcheckApi* | [**healthcheck**](docs/Api/HealthcheckApi.md#healthcheck) | **GET** /healthcheck | Healthcheck
*PersonsPersonerEjerfortegnelsenApi* | [**getEjfOtherById**](docs/Api/PersonsPersonerEjerfortegnelsenApi.md#getejfotherbyid) | **GET** /api/v2/ejf/others/{id} | Get Ejf Other By Id
*PersonsPersonerEjerfortegnelsenApi* | [**getEjfOthers**](docs/Api/PersonsPersonerEjerfortegnelsenApi.md#getejfothers) | **GET** /api/v2/ejf/others | Get Ejf Others
*PersonsPersonerEjerfortegnelsenApi* | [**getEjfOthersAdvanced**](docs/Api/PersonsPersonerEjerfortegnelsenApi.md#getejfothersadvanced) | **POST** /api/v2/ejf/others | Get Ejf Others Advanced
*PersonsPersonerEjerfortegnelsenApi* | [**getEjfPersonById**](docs/Api/PersonsPersonerEjerfortegnelsenApi.md#getejfpersonbyid) | **GET** /api/v2/ejf/persons/{id} | Get Ejf Person By Id
*PersonsPersonerEjerfortegnelsenApi* | [**getEjfPersonPortfolioById**](docs/Api/PersonsPersonerEjerfortegnelsenApi.md#getejfpersonportfoliobyid) | **GET** /api/v2/ejf/persons/{id}/portfolio | Get Ejf Person Portfolio By Id
*PersonsPersonerEjerfortegnelsenApi* | [**getEjfPersons**](docs/Api/PersonsPersonerEjerfortegnelsenApi.md#getejfpersons) | **GET** /api/v2/ejf/persons | Get Ejf Persons
*PersonsPersonerEjerfortegnelsenApi* | [**getEjfPersonsAdvanced**](docs/Api/PersonsPersonerEjerfortegnelsenApi.md#getejfpersonsadvanced) | **POST** /api/v2/ejf/persons | Get Ejf Persons Advanced
*PlandataApi* | [**getPlandata**](docs/Api/PlandataApi.md#getplandata) | **GET** /api/v2/plandata | Get Plandata
*TinglysningAktueltTinglystDokumentATDApi* | [**getAtdByAliasId**](docs/Api/TinglysningAktueltTinglystDokumentATDApi.md#getatdbyaliasid) | **GET** /api/v2/tinglysning/atd/aliasid/{alias_id} | Get Atd By Alias Id
*TinglysningAktueltTinglystDokumentATDApi* | [**getAtdByUuid**](docs/Api/TinglysningAktueltTinglystDokumentATDApi.md#getatdbyuuid) | **GET** /api/v2/tinglysning/atd/uuid/{uuid} | Get Atd By Uuid
*TinglysningAndelsboligApi* | [**getAndelsboligattestByUuid**](docs/Api/TinglysningAndelsboligApi.md#getandelsboligattestbyuuid) | **GET** /api/v2/tinglysning/andelsbolig/attest/{uuid} | Get Andelsboligattest By Uuid
*TinglysningAndelsboligApi* | [**searchAndelsboligByAddress**](docs/Api/TinglysningAndelsboligApi.md#searchandelsboligbyaddress) | **GET** /api/v2/tinglysning/andelsbolig/search/address | Search Andelsbolig By Address
*TinglysningAndelsboligApi* | [**searchAndelsboligByCvrNumber**](docs/Api/TinglysningAndelsboligApi.md#searchandelsboligbycvrnumber) | **GET** /api/v2/tinglysning/andelsbolig/search/cvr-number/{cvr_number} | Search Andelsbolig By Cvr Number
*TinglysningAndelsboligApi* | [**searchAndelsboligByMunicipality**](docs/Api/TinglysningAndelsboligApi.md#searchandelsboligbymunicipality) | **GET** /api/v2/tinglysning/andelsbolig/search/municipality | Search Andelsbolig By Municipality
*TinglysningAndelsboligApi* | [**searchAndelsboligByPerson**](docs/Api/TinglysningAndelsboligApi.md#searchandelsboligbyperson) | **GET** /api/v2/tinglysning/andelsbolig/search/person | Search Andelsbolig By Person
*TinglysningAndelsboligApi* | [**searchAndelsboligByZipCode**](docs/Api/TinglysningAndelsboligApi.md#searchandelsboligbyzipcode) | **GET** /api/v2/tinglysning/andelsbolig/search/zip_code | Search Andelsbolig By Zip Code
*TinglysningDownloadDocumentsApi* | [**convertPdfIdToAktUuid**](docs/Api/TinglysningDownloadDocumentsApi.md#convertpdfidtoaktuuid) | **GET** /api/v2/tinglysning/convert/{pdf_id} | Convert Pdf Id To Akt Uuid
*TinglysningDownloadDocumentsApi* | [**downloadAktByUuid**](docs/Api/TinglysningDownloadDocumentsApi.md#downloadaktbyuuid) | **GET** /api/v2/tinglysning/download/akt/{uuid} | Download Akt By Uuid
*TinglysningDownloadDocumentsApi* | [**downloadAnnexByUuid**](docs/Api/TinglysningDownloadDocumentsApi.md#downloadannexbyuuid) | **GET** /api/v2/tinglysning/download/annex/{uuid} | Download Annex By Uuid
*TinglysningDownloadDocumentsApi* | [**downloadAtdByUuid**](docs/Api/TinglysningDownloadDocumentsApi.md#downloadatdbyuuid) | **GET** /api/v2/tinglysning/download/atd/{uuid} | Download Atd By Uuid
*TinglysningDownloadDocumentsApi* | [**downloadDokumentanmeldelseByUuid**](docs/Api/TinglysningDownloadDocumentsApi.md#downloaddokumentanmeldelsebyuuid) | **GET** /api/v2/tinglysning/download/dokumentanmeldelse/{document_uuid}/{report_uuid} | Download Dokumentanmeldelse By Uuid
*TinglysningDownloadDocumentsApi* | [**downloadTingbogsattestByUuid**](docs/Api/TinglysningDownloadDocumentsApi.md#downloadtingbogsattestbyuuid) | **GET** /api/v2/tinglysning/download/tingbogsattest/{uuid} | Download Tingbogsattest By Uuid
*TinglysningEjendomApi* | [**getHistoricClaimsByUuid**](docs/Api/TinglysningEjendomApi.md#gethistoricclaimsbyuuid) | **GET** /api/v2/tinglysning/tingbogsattest/historic/{uuid} | Get Historic Claims By Uuid
*TinglysningEjendomApi* | [**getOgsaaLystPaa**](docs/Api/TinglysningEjendomApi.md#getogsaalystpaa) | **GET** /api/v2/tinglysning/ogsaalystpaa | Get Ogsaa Lyst Paa
*TinglysningEjendomApi* | [**getTingbogsattestByUuid**](docs/Api/TinglysningEjendomApi.md#gettingbogsattestbyuuid) | **GET** /api/v2/tinglysning/tingbogsattest/{uuid} | Get Tingbogsattest By Uuid
*TinglysningEjendomApi* | [**searchTinglysningByAddress**](docs/Api/TinglysningEjendomApi.md#searchtinglysningbyaddress) | **GET** /api/v2/tinglysning/property/search/address | Search Tinglysning By Address
*TinglysningEjendomApi* | [**searchTinglysningByAddressLimited**](docs/Api/TinglysningEjendomApi.md#searchtinglysningbyaddresslimited) | **GET** /api/v2/tinglysning/property/search/address-limited | Search Tinglysning By Address Limited
*TinglysningEjendomApi* | [**searchTinglysningByBfeNumber**](docs/Api/TinglysningEjendomApi.md#searchtinglysningbybfenumber) | **GET** /api/v2/tinglysning/property/search/bfe-number/{bfe_number} | Search Tinglysning By Bfe Number
*TinglysningEjendomApi* | [**searchTinglysningByCadastre**](docs/Api/TinglysningEjendomApi.md#searchtinglysningbycadastre) | **GET** /api/v2/tinglysning/property/search/cadastre/{land_lot}/{cadastre_number} | Search Tinglysning By Cadastre
*TinglysningEjendomApi* | [**searchTinglysningByMunicipality**](docs/Api/TinglysningEjendomApi.md#searchtinglysningbymunicipality) | **GET** /api/v2/tinglysning/property/search/esr-number/{municipality_code}/{property_number} | Search Tinglysning By Municipality
*TinglysningEjendomApi* | [**searchTinglysningByUmatrikuleretAreal**](docs/Api/TinglysningEjendomApi.md#searchtinglysningbyumatrikuleretareal) | **GET** /api/v2/tinglysning/property/search/uma/{uma} | Search Tinglysning By Umatrikuleret Areal
*TinglysningKretjApi* | [**getBilbogsattestByUuid**](docs/Api/TinglysningKretjApi.md#getbilbogsattestbyuuid) | **GET** /api/v2/tinglysning/bilbogsattest/{uuid} | Get Bilbogsattest By Uuid
*TinglysningKretjApi* | [**searchVehicleByCvrNumber**](docs/Api/TinglysningKretjApi.md#searchvehiclebycvrnumber) | **GET** /api/v2/tinglysning/vehicle/search/cvr-number/{cvr_number} | Search Vehicle By Cvr Number
*TinglysningKretjApi* | [**searchVehicleById**](docs/Api/TinglysningKretjApi.md#searchvehiclebyid) | **GET** /api/v2/tinglysning/vehicle/search/id/{id} | Search Vehicle By Id
*TinglysningKretjApi* | [**searchVehicleByPerson**](docs/Api/TinglysningKretjApi.md#searchvehiclebyperson) | **GET** /api/v2/tinglysning/vehicle/search/person | Search Vehicle By Person
*TinglysningNdringerApi* | [**getChangesFromToAndelsbolig**](docs/Api/TinglysningNdringerApi.md#getchangesfromtoandelsbolig) | **GET** /api/v2/tinglysning/changes/andelsbolig | Get Changes From To Andelsbolig
*TinglysningNdringerApi* | [**getChangesFromToPersonCompany**](docs/Api/TinglysningNdringerApi.md#getchangesfromtopersoncompany) | **GET** /api/v2/tinglysning/changes/person-company | Get Changes From To Person Company
*TinglysningNdringerApi* | [**getChangesFromToProperties**](docs/Api/TinglysningNdringerApi.md#getchangesfromtoproperties) | **GET** /api/v2/tinglysning/changes/properties | Get Changes From To Properties
*TinglysningNdringerApi* | [**getChangesFromToVehicles**](docs/Api/TinglysningNdringerApi.md#getchangesfromtovehicles) | **GET** /api/v2/tinglysning/changes/vehicles | Get Changes From To Vehicles
*TinglysningNdringerApi* | [**getChangesLatest**](docs/Api/TinglysningNdringerApi.md#getchangeslatest) | **GET** /api/v2/tinglysning/changes/latest | Get Changes Latest
*TinglysningPersonVirksomhedApi* | [**getPersonCompanyByUuid**](docs/Api/TinglysningPersonVirksomhedApi.md#getpersoncompanybyuuid) | **GET** /api/v2/tinglysning/person-company/{uuid} | Get Person Company By Uuid
*TinglysningPersonVirksomhedApi* | [**searchCompanyByCvrNumber**](docs/Api/TinglysningPersonVirksomhedApi.md#searchcompanybycvrnumber) | **GET** /api/v2/tinglysning/company/search/cvr-number/{cvr_number} | Search Company By Cvr Number
*TinglysningPersonVirksomhedApi* | [**searchPersonByCprNumber**](docs/Api/TinglysningPersonVirksomhedApi.md#searchpersonbycprnumber) | **GET** /api/v2/tinglysning/person/search/cpr-number/{cpr_number} | Search Person By Cpr Number
*TinglysningPersonVirksomhedApi* | [**searchPersonByName**](docs/Api/TinglysningPersonVirksomhedApi.md#searchpersonbyname) | **GET** /api/v2/tinglysning/person/search/name | Search Person By Name
*TinglysningPtegningApi* | [**getPaategningerByAliasId**](docs/Api/TinglysningPtegningApi.md#getpaategningerbyaliasid) | **GET** /api/v2/tinglysning/paategning/aliasid/{alias_id} | Get Paategninger By Alias Id
*TinglysningPtegningApi* | [**getPaategningerByUuid**](docs/Api/TinglysningPtegningApi.md#getpaategningerbyuuid) | **GET** /api/v2/tinglysning/paategning/uuid/{uuid} | Get Paategninger By Uuid
*TinglysningVirksomhedApi* | [**searchCompanyDocuments**](docs/Api/TinglysningVirksomhedApi.md#searchcompanydocuments) | **GET** /api/v2/tinglysning/companies/documents/{cvr_number} | Search Company Documents
*TinglysningVirksomhedApi* | [**searchCompanyRegistrations**](docs/Api/TinglysningVirksomhedApi.md#searchcompanyregistrations) | **GET** /api/v2/tinglysning/companies/registrations/{cvr_number} | Search Company Registrations
*TokenApi* | [**token**](docs/Api/TokenApi.md#token) | **GET** /token | Token
*TradesRealEstateTransactionsTinglysteApi* | [**getPortfolioTrades**](docs/Api/TradesRealEstateTransactionsTinglysteApi.md#getportfoliotrades) | **GET** /api/v2/trades/portfolio/{type}/{id} | Get Portfolio Trades
*TradesRealEstateTransactionsTinglysteApi* | [**getTradeById**](docs/Api/TradesRealEstateTransactionsTinglysteApi.md#gettradebyid) | **GET** /api/v2/trades/{id} | Get Trade By Id
*TradesRealEstateTransactionsTinglysteApi* | [**getTrades**](docs/Api/TradesRealEstateTransactionsTinglysteApi.md#gettrades) | **GET** /api/v2/trades | Get Trades
*TradesRealEstateTransactionsTinglysteApi* | [**getTradesAdvanced**](docs/Api/TradesRealEstateTransactionsTinglysteApi.md#gettradesadvanced) | **POST** /api/v2/trades | Get Trades Advanced

## Models

- [ATDModel](docs/Model/ATDModel.md)
- [AVMNearestNeighbors](docs/Model/AVMNearestNeighbors.md)
- [AVMResponse](docs/Model/AVMResponse.md)
- [AbestemEnum](docs/Model/AbestemEnum.md)
- [AcquisitionMethodEnum](docs/Model/AcquisitionMethodEnum.md)
- [AddressMatchCategoryEnum](docs/Model/AddressMatchCategoryEnum.md)
- [AddressTypeEnum](docs/Model/AddressTypeEnum.md)
- [AdkomstHandelBeskrivelseSubEnum](docs/Model/AdkomstHandelBeskrivelseSubEnum.md)
- [AdkomstHandelKodeSubEnum](docs/Model/AdkomstHandelKodeSubEnum.md)
- [AdkomstInformationModel](docs/Model/AdkomstInformationModel.md)
- [AdkomstModel](docs/Model/AdkomstModel.md)
- [AdkomstSkifteretsAttestKodeEnum](docs/Model/AdkomstSkifteretsAttestKodeEnum.md)
- [AdkomstStrukturModel](docs/Model/AdkomstStrukturModel.md)
- [AdkomstTypeEnum](docs/Model/AdkomstTypeEnum.md)
- [AdkomsthaverBase](docs/Model/AdkomsthaverBase.md)
- [AdkomsthaverModel](docs/Model/AdkomsthaverModel.md)
- [AdkomsthaverTypeEnum](docs/Model/AdkomsthaverTypeEnum.md)
- [AdresseModel](docs/Model/AdresseModel.md)
- [AendringspaategningModel](docs/Model/AendringspaategningModel.md)
- [AfdragsfrihedModel](docs/Model/AfdragsfrihedModel.md)
- [AfgiftOplysningerModel](docs/Model/AfgiftOplysningerModel.md)
- [AnalysisDimensionTypeEnum](docs/Model/AnalysisDimensionTypeEnum.md)
- [AnalysisMetadataDimensionModel](docs/Model/AnalysisMetadataDimensionModel.md)
- [AnalysisMetadataFilterModel](docs/Model/AnalysisMetadataFilterModel.md)
- [AnalysisMetadataFilterValueModel](docs/Model/AnalysisMetadataFilterValueModel.md)
- [AnalysisMetadataResponse](docs/Model/AnalysisMetadataResponse.md)
- [AnalysisSourceModel](docs/Model/AnalysisSourceModel.md)
- [AnalysisStatsBucketResponse](docs/Model/AnalysisStatsBucketResponse.md)
- [AnalysisStatsMeasureResponse](docs/Model/AnalysisStatsMeasureResponse.md)
- [AnalysisStatsResponse](docs/Model/AnalysisStatsResponse.md)
- [AnalysisTablesEnum](docs/Model/AnalysisTablesEnum.md)
- [AndelIdentifikatorModel](docs/Model/AndelIdentifikatorModel.md)
- [AndelsboligAendringModel](docs/Model/AndelsboligAendringModel.md)
- [AndelsboligattestModel](docs/Model/AndelsboligattestModel.md)
- [AndenHaeftelseFastEjendomModel](docs/Model/AndenHaeftelseFastEjendomModel.md)
- [AnmaerkningModel](docs/Model/AnmaerkningModel.md)
- [AnmeldelseInformationModel](docs/Model/AnmeldelseInformationModel.md)
- [AnmelderBilagReferenceModel](docs/Model/AnmelderBilagReferenceModel.md)
- [AnmelderModel](docs/Model/AnmelderModel.md)
- [AnmelderRolleModel](docs/Model/AnmelderRolleModel.md)
- [AnmelderTypeEnum](docs/Model/AnmelderTypeEnum.md)
- [AnnualReportChange](docs/Model/AnnualReportChange.md)
- [AnnualReportComplete](docs/Model/AnnualReportComplete.md)
- [AnnualReportSimple](docs/Model/AnnualReportSimple.md)
- [ArrestFastEjendomModel](docs/Model/ArrestFastEjendomModel.md)
- [ArticleResponse](docs/Model/ArticleResponse.md)
- [AuditsResponse](docs/Model/AuditsResponse.md)
- [AutocompleteResponse](docs/Model/AutocompleteResponse.md)
- [AutocompleteResult](docs/Model/AutocompleteResult.md)
- [AutocompleteTypeEnum](docs/Model/AutocompleteTypeEnum.md)
- [AvgAgg](docs/Model/AvgAgg.md)
- [BBRBUILDINGSDimensionBBRBUILDINGSEnum](docs/Model/BBRBUILDINGSDimensionBBRBUILDINGSEnum.md)
- [BBRBUILDINGSMeasureBBRBUILDINGSEnum](docs/Model/BBRBUILDINGSMeasureBBRBUILDINGSEnum.md)
- [BBRBuildingAggsActive](docs/Model/BBRBuildingAggsActive.md)
- [BBRBuildingAggsBs](docs/Model/BBRBuildingAggsBs.md)
- [BBRBuildingResponse](docs/Model/BBRBuildingResponse.md)
- [BBRCase](docs/Model/BBRCase.md)
- [BBRCaseLevelResponse](docs/Model/BBRCaseLevelResponse.md)
- [BBRFloorAggs](docs/Model/BBRFloorAggs.md)
- [BBRFloorResponse](docs/Model/BBRFloorResponse.md)
- [BBRPlotResponse](docs/Model/BBRPlotResponse.md)
- [BBRPropertyRelation](docs/Model/BBRPropertyRelation.md)
- [BBRResponse](docs/Model/BBRResponse.md)
- [BBRStaircaseResponse](docs/Model/BBRStaircaseResponse.md)
- [BBRTechnicalInstallationResponse](docs/Model/BBRTechnicalInstallationResponse.md)
- [BBRUNITSDimensionBBRUNITSEnum](docs/Model/BBRUNITSDimensionBBRUNITSEnum.md)
- [BBRUNITSMeasureBBRUNITSEnum](docs/Model/BBRUNITSMeasureBBRUNITSEnum.md)
- [BBRUnitAggsActive](docs/Model/BBRUnitAggsActive.md)
- [BBRUnitAggsBs](docs/Model/BBRUnitAggsBs.md)
- [BBRUnitResponse](docs/Model/BBRUnitResponse.md)
- [BFENumberESRNumber](docs/Model/BFENumberESRNumber.md)
- [BFENumberOverview](docs/Model/BFENumberOverview.md)
- [BFENumberPropertyResponse](docs/Model/BFENumberPropertyResponse.md)
- [BaseNodeResponse](docs/Model/BaseNodeResponse.md)
- [BeloebModel](docs/Model/BeloebModel.md)
- [BemaerkningModel](docs/Model/BemaerkningModel.md)
- [BetalingTerminModel](docs/Model/BetalingTerminModel.md)
- [BetingetMatrikulaerAendringEnum](docs/Model/BetingetMatrikulaerAendringEnum.md)
- [BilIdentifikatorModel](docs/Model/BilIdentifikatorModel.md)
- [BilMaerkeModel](docs/Model/BilMaerkeModel.md)
- [BilStrukturModel](docs/Model/BilStrukturModel.md)
- [BilagReferenceModel](docs/Model/BilagReferenceModel.md)
- [BilbogsattestModel](docs/Model/BilbogsattestModel.md)
- [BoardMemberResponse](docs/Model/BoardMemberResponse.md)
- [BodyAddDomusproFilesApiV2DomusproFilesDomusproIdPost](docs/Model/BodyAddDomusproFilesApiV2DomusproFilesDomusproIdPost.md)
- [BodyConvertFileApiV2ConvertPost](docs/Model/BodyConvertFileApiV2ConvertPost.md)
- [BodyConvertFileApiV2FilesConvertPost](docs/Model/BodyConvertFileApiV2FilesConvertPost.md)
- [BodyConvertIsochroneToGeojsonApiV2IsochroneConvertPost](docs/Model/BodyConvertIsochroneToGeojsonApiV2IsochroneConvertPost.md)
- [BodyCreateProspectusApiV2TransactionsProspectusPost](docs/Model/BodyCreateProspectusApiV2TransactionsProspectusPost.md)
- [BodyMergeDocxToPdfBackgroundTaskApiV2FilesPdfMergePost](docs/Model/BodyMergeDocxToPdfBackgroundTaskApiV2FilesPdfMergePost.md)
- [BodySubmitDocxToPdfBackgroundTaskApiV2FilesPdfSubmitPost](docs/Model/BodySubmitDocxToPdfBackgroundTaskApiV2FilesPdfSubmitPost.md)
- [BodyUpdateProspectusFileApiV2TransactionsProspectusIdFilePut](docs/Model/BodyUpdateProspectusFileApiV2TransactionsProspectusIdFilePut.md)
- [BodyUploadToS3ApiV2FilesPost](docs/Model/BodyUploadToS3ApiV2FilesPost.md)
- [BoligsidenAddress](docs/Model/BoligsidenAddress.md)
- [BookEnum](docs/Model/BookEnum.md)
- [BooleanQueryNode](docs/Model/BooleanQueryNode.md)
- [Bound](docs/Model/Bound.md)
- [BraendeovnsOplysningerEnum](docs/Model/BraendeovnsOplysningerEnum.md)
- [BroekModel](docs/Model/BroekModel.md)
- [BuildingMapGeoJSON](docs/Model/BuildingMapGeoJSON.md)
- [BuildingsIncludedEnum](docs/Model/BuildingsIncludedEnum.md)
- [BygningsforholdKodeEnum](docs/Model/BygningsforholdKodeEnum.md)
- [CEOResponse](docs/Model/CEOResponse.md)
- [CVRAddress](docs/Model/CVRAddress.md)
- [CVRAttribute](docs/Model/CVRAttribute.md)
- [CVRBankruptcyStats](docs/Model/CVRBankruptcyStats.md)
- [CVRCOMPANIESDimensionCVRCOMPANIESEnum](docs/Model/CVRCOMPANIESDimensionCVRCOMPANIESEnum.md)
- [CVRCOMPANIESMeasureCVRCOMPANIESEnum](docs/Model/CVRCOMPANIESMeasureCVRCOMPANIESEnum.md)
- [CVRCompany](docs/Model/CVRCompany.md)
- [CVRCompanyRelation](docs/Model/CVRCompanyRelation.md)
- [CVRCompanyRelationAttribute](docs/Model/CVRCompanyRelationAttribute.md)
- [CVRCompanyStats](docs/Model/CVRCompanyStats.md)
- [CVRCompanyStatusAttribute](docs/Model/CVRCompanyStatusAttribute.md)
- [CVRCompanyStatusEnum](docs/Model/CVRCompanyStatusEnum.md)
- [CVRCompanyTypeAttribute](docs/Model/CVRCompanyTypeAttribute.md)
- [CVRCompanyTypeEnum](docs/Model/CVRCompanyTypeEnum.md)
- [CVRCompanyUnitTypeEnum](docs/Model/CVRCompanyUnitTypeEnum.md)
- [CVRContactInfoAttribute](docs/Model/CVRContactInfoAttribute.md)
- [CVRCreditInformationTextEnum](docs/Model/CVRCreditInformationTextEnum.md)
- [CVREffectActorEnum](docs/Model/CVREffectActorEnum.md)
- [CVREmployeeStats](docs/Model/CVREmployeeStats.md)
- [CVREmployeesMonth](docs/Model/CVREmployeesMonth.md)
- [CVREmployeesQuarter](docs/Model/CVREmployeesQuarter.md)
- [CVREmployeesYear](docs/Model/CVREmployeesYear.md)
- [CVRIndustryAttribute](docs/Model/CVRIndustryAttribute.md)
- [CVRIndustryTypeEnum](docs/Model/CVRIndustryTypeEnum.md)
- [CVRKeyCompanyRelation](docs/Model/CVRKeyCompanyRelation.md)
- [CVRKeyRelation](docs/Model/CVRKeyRelation.md)
- [CVRMemberRelation](docs/Model/CVRMemberRelation.md)
- [CVRMemberStats](docs/Model/CVRMemberStats.md)
- [CVRMerger](docs/Model/CVRMerger.md)
- [CVRNameAttribute](docs/Model/CVRNameAttribute.md)
- [CVRNetwork](docs/Model/CVRNetwork.md)
- [CVRNetworkEdge](docs/Model/CVRNetworkEdge.md)
- [CVRNetworkNode](docs/Model/CVRNetworkNode.md)
- [CVRNetworkNodeBase](docs/Model/CVRNetworkNodeBase.md)
- [CVRNetworkResponse](docs/Model/CVRNetworkResponse.md)
- [CVRNetworkShare](docs/Model/CVRNetworkShare.md)
- [CVRNetworkStats](docs/Model/CVRNetworkStats.md)
- [CVRNodeBase](docs/Model/CVRNodeBase.md)
- [CVRNumberEmployeesEnum](docs/Model/CVRNumberEmployeesEnum.md)
- [CVROffice](docs/Model/CVROffice.md)
- [CVROrganisation](docs/Model/CVROrganisation.md)
- [CVROrganisationMainTypeEnum](docs/Model/CVROrganisationMainTypeEnum.md)
- [CVROwnershipEdgeResponse](docs/Model/CVROwnershipEdgeResponse.md)
- [CVROwnershipNetworkResponse](docs/Model/CVROwnershipNetworkResponse.md)
- [CVROwnershipNodeResponse](docs/Model/CVROwnershipNodeResponse.md)
- [CVRPUNITSDimensionCVRPUNITSEnum](docs/Model/CVRPUNITSDimensionCVRPUNITSEnum.md)
- [CVRPUNITSMeasureCVRPUNITSEnum](docs/Model/CVRPUNITSMeasureCVRPUNITSEnum.md)
- [CVRPUnit](docs/Model/CVRPUnit.md)
- [CVRPUnitAttribute](docs/Model/CVRPUnitAttribute.md)
- [CVRRegistrationNumberAttribute](docs/Model/CVRRegistrationNumberAttribute.md)
- [CVRRelationCompany](docs/Model/CVRRelationCompany.md)
- [CVRResponsibleDataProviderEnum](docs/Model/CVRResponsibleDataProviderEnum.md)
- [CVRSequence](docs/Model/CVRSequence.md)
- [CVRSequenceCompanyAttributes](docs/Model/CVRSequenceCompanyAttributes.md)
- [CVRSequenceCompanyAttributesTypesEnum](docs/Model/CVRSequenceCompanyAttributesTypesEnum.md)
- [CVRSequenceMemberAttributes](docs/Model/CVRSequenceMemberAttributes.md)
- [CVRSequenceMemberAttributesTypesEnum](docs/Model/CVRSequenceMemberAttributesTypesEnum.md)
- [CVRSequenceMemberRelationTypesEnum](docs/Model/CVRSequenceMemberRelationTypesEnum.md)
- [CVRSequenceMemberRelations](docs/Model/CVRSequenceMemberRelations.md)
- [CVRSequenceMerger](docs/Model/CVRSequenceMerger.md)
- [CVRSequenceMergerTypesEnum](docs/Model/CVRSequenceMergerTypesEnum.md)
- [CVRSequenceMergerValuesEnum](docs/Model/CVRSequenceMergerValuesEnum.md)
- [CVRSequenceOrganisationTypesEnum](docs/Model/CVRSequenceOrganisationTypesEnum.md)
- [CVRSequenceOrganisations](docs/Model/CVRSequenceOrganisations.md)
- [CVRSequencePUnitAttributes](docs/Model/CVRSequencePUnitAttributes.md)
- [CVRSequencePUnitAttributesTypesEnum](docs/Model/CVRSequencePUnitAttributesTypesEnum.md)
- [CVRSequenceTypesEnum](docs/Model/CVRSequenceTypesEnum.md)
- [CVRSequenceValueTypesEnum](docs/Model/CVRSequenceValueTypesEnum.md)
- [CVRShare](docs/Model/CVRShare.md)
- [CVRStatusAttribute](docs/Model/CVRStatusAttribute.md)
- [CVRStatusTextEnum](docs/Model/CVRStatusTextEnum.md)
- [CVRUnitTypeEnum](docs/Model/CVRUnitTypeEnum.md)
- [CVRValueAttribute](docs/Model/CVRValueAttribute.md)
- [CVRValueMerger](docs/Model/CVRValueMerger.md)
- [CadastreMap](docs/Model/CadastreMap.md)
- [CadastreMapGeoJSON](docs/Model/CadastreMapGeoJSON.md)
- [ChatGPTInputModel](docs/Model/ChatGPTInputModel.md)
- [ChatGPTResponseModel](docs/Model/ChatGPTResponseModel.md)
- [ClustersTemplate](docs/Model/ClustersTemplate.md)
- [CommercialValuationSourceEnum](docs/Model/CommercialValuationSourceEnum.md)
- [CompanyTradeDetails](docs/Model/CompanyTradeDetails.md)
- [CompanyTradeEntity](docs/Model/CompanyTradeEntity.md)
- [CompanyTradeResponse](docs/Model/CompanyTradeResponse.md)
- [CompanyTradeTarget](docs/Model/CompanyTradeTarget.md)
- [ContactName](docs/Model/ContactName.md)
- [CoordinateReferenceSystem](docs/Model/CoordinateReferenceSystem.md)
- [CostingTypeEnum](docs/Model/CostingTypeEnum.md)
- [CountryEnum](docs/Model/CountryEnum.md)
- [CurrencyEnum](docs/Model/CurrencyEnum.md)
- [DARAccessAddress](docs/Model/DARAccessAddress.md)
- [DARAddress](docs/Model/DARAddress.md)
- [DK118DirectoryTypeEnum](docs/Model/DK118DirectoryTypeEnum.md)
- [DK118GenderEnum](docs/Model/DK118GenderEnum.md)
- [DK118ListingModel](docs/Model/DK118ListingModel.md)
- [DK118OperatorAuthorizationEnum](docs/Model/DK118OperatorAuthorizationEnum.md)
- [DK118SecretEnum](docs/Model/DK118SecretEnum.md)
- [DK118SubscriberModel](docs/Model/DK118SubscriberModel.md)
- [DK118SubscriberTypeEnum](docs/Model/DK118SubscriberTypeEnum.md)
- [DK118TelephoneTypeEnum](docs/Model/DK118TelephoneTypeEnum.md)
- [DSTDimensionBIL800Enum](docs/Model/DSTDimensionBIL800Enum.md)
- [DSTDimensionDSTADDRESSESEnum](docs/Model/DSTDimensionDSTADDRESSESEnum.md)
- [DSTDimensionFLY66Enum](docs/Model/DSTDimensionFLY66Enum.md)
- [DSTDimensionFOLK1AEnum](docs/Model/DSTDimensionFOLK1AEnum.md)
- [DSTDimensionFRKM123Enum](docs/Model/DSTDimensionFRKM123Enum.md)
- [DSTDimensionHFUDD16Enum](docs/Model/DSTDimensionHFUDD16Enum.md)
- [DSTDimensionINDKP222Enum](docs/Model/DSTDimensionINDKP222Enum.md)
- [DSTDimensionUDB030Enum](docs/Model/DSTDimensionUDB030Enum.md)
- [DSTMeasureBIL800Enum](docs/Model/DSTMeasureBIL800Enum.md)
- [DSTMeasureDSTADDRESSESEnum](docs/Model/DSTMeasureDSTADDRESSESEnum.md)
- [DSTMeasureFLY66Enum](docs/Model/DSTMeasureFLY66Enum.md)
- [DSTMeasureFOLK1AEnum](docs/Model/DSTMeasureFOLK1AEnum.md)
- [DSTMeasureFRKM123Enum](docs/Model/DSTMeasureFRKM123Enum.md)
- [DSTMeasureHFUDD16Enum](docs/Model/DSTMeasureHFUDD16Enum.md)
- [DSTMeasureINDKP222Enum](docs/Model/DSTMeasureINDKP222Enum.md)
- [DSTMeasureUDB030Enum](docs/Model/DSTMeasureUDB030Enum.md)
- [DataroomCategoryType](docs/Model/DataroomCategoryType.md)
- [DataroomCollectionType](docs/Model/DataroomCollectionType.md)
- [DataroomCompany](docs/Model/DataroomCompany.md)
- [DataroomContentCollectionIn](docs/Model/DataroomContentCollectionIn.md)
- [DataroomContentCollectionOut](docs/Model/DataroomContentCollectionOut.md)
- [DataroomContentCompanyDataroomDocumentIn](docs/Model/DataroomContentCompanyDataroomDocumentIn.md)
- [DataroomContentCompanyDataroomDocumentOut](docs/Model/DataroomContentCompanyDataroomDocumentOut.md)
- [DataroomContentPropertyDataroomDocumentIn](docs/Model/DataroomContentPropertyDataroomDocumentIn.md)
- [DataroomContentPropertyDataroomDocumentOut](docs/Model/DataroomContentPropertyDataroomDocumentOut.md)
- [DataroomDocumentIn](docs/Model/DataroomDocumentIn.md)
- [DataroomDocumentOut](docs/Model/DataroomDocumentOut.md)
- [DataroomDocumentState](docs/Model/DataroomDocumentState.md)
- [DataroomDocumentStateEnum](docs/Model/DataroomDocumentStateEnum.md)
- [DataroomModelIn](docs/Model/DataroomModelIn.md)
- [DataroomModelOut](docs/Model/DataroomModelOut.md)
- [DataroomStateEnum](docs/Model/DataroomStateEnum.md)
- [DataroomStateSourceEnum](docs/Model/DataroomStateSourceEnum.md)
- [DataroomTemplate](docs/Model/DataroomTemplate.md)
- [DataroomUser](docs/Model/DataroomUser.md)
- [DelarealModel](docs/Model/DelarealModel.md)
- [DerivedLegalOwnershipResponse](docs/Model/DerivedLegalOwnershipResponse.md)
- [DerivedRealOwnershipResponse](docs/Model/DerivedRealOwnershipResponse.md)
- [DimensionFieldEnum](docs/Model/DimensionFieldEnum.md)
- [DirectorResponse](docs/Model/DirectorResponse.md)
- [DiscoverExportType](docs/Model/DiscoverExportType.md)
- [DokTypeEnum](docs/Model/DokTypeEnum.md)
- [DokumentFastEjendomModel](docs/Model/DokumentFastEjendomModel.md)
- [DokumentInformationOverfoertModel](docs/Model/DokumentInformationOverfoertModel.md)
- [DokumentRettighedModel](docs/Model/DokumentRettighedModel.md)
- [DokumentTypeEnum](docs/Model/DokumentTypeEnum.md)
- [DomusProAccountantModel](docs/Model/DomusProAccountantModel.md)
- [DomusProAddressModel](docs/Model/DomusProAddressModel.md)
- [DomusProAdministratorModel](docs/Model/DomusProAdministratorModel.md)
- [DomusProAnnualReportModel](docs/Model/DomusProAnnualReportModel.md)
- [DomusProAssociationDetailAssessmentResponse](docs/Model/DomusProAssociationDetailAssessmentResponse.md)
- [DomusProAssociationDetailAssessmentUpdateModel](docs/Model/DomusProAssociationDetailAssessmentUpdateModel.md)
- [DomusProAssociationDetailCommentCreateModel](docs/Model/DomusProAssociationDetailCommentCreateModel.md)
- [DomusProAssociationDetailCommentResponse](docs/Model/DomusProAssociationDetailCommentResponse.md)
- [DomusProAssociationDetailCommentTypeEnum](docs/Model/DomusProAssociationDetailCommentTypeEnum.md)
- [DomusProAssociationDetailResponse](docs/Model/DomusProAssociationDetailResponse.md)
- [DomusProAssociationResponse](docs/Model/DomusProAssociationResponse.md)
- [DomusProBudgetModel](docs/Model/DomusProBudgetModel.md)
- [DomusProBuildingModel](docs/Model/DomusProBuildingModel.md)
- [DomusProCadastreModel](docs/Model/DomusProCadastreModel.md)
- [DomusProClientModel](docs/Model/DomusProClientModel.md)
- [DomusProCompanyModel](docs/Model/DomusProCompanyModel.md)
- [DomusProContaminationModel](docs/Model/DomusProContaminationModel.md)
- [DomusProDocumentModel](docs/Model/DomusProDocumentModel.md)
- [DomusProFileResponse](docs/Model/DomusProFileResponse.md)
- [DomusProFileTokenModel](docs/Model/DomusProFileTokenModel.md)
- [DomusProFiscalYearModel](docs/Model/DomusProFiscalYearModel.md)
- [DomusProLoanModel](docs/Model/DomusProLoanModel.md)
- [DomusProLoginModel](docs/Model/DomusProLoginModel.md)
- [DomusProPackageConstrainModel](docs/Model/DomusProPackageConstrainModel.md)
- [DomusProPackageIdEnum](docs/Model/DomusProPackageIdEnum.md)
- [DomusProPackageResponse](docs/Model/DomusProPackageResponse.md)
- [DomusProPackageTabelModel](docs/Model/DomusProPackageTabelModel.md)
- [DomusProPartnerCompleteModel](docs/Model/DomusProPartnerCompleteModel.md)
- [DomusProPartnerModel](docs/Model/DomusProPartnerModel.md)
- [DomusProPartnerPackageEnum](docs/Model/DomusProPartnerPackageEnum.md)
- [DomusProPingResponse](docs/Model/DomusProPingResponse.md)
- [DomusProPropertyModel](docs/Model/DomusProPropertyModel.md)
- [DomusProRatingDescriptionModel](docs/Model/DomusProRatingDescriptionModel.md)
- [DomusProRatingFormatModel](docs/Model/DomusProRatingFormatModel.md)
- [DomusProRatingResponse](docs/Model/DomusProRatingResponse.md)
- [DomusProRenovationPlanModel](docs/Model/DomusProRenovationPlanModel.md)
- [DomusProSearchResponse](docs/Model/DomusProSearchResponse.md)
- [DomusProSuccessResponse](docs/Model/DomusProSuccessResponse.md)
- [DomusProUnitModel](docs/Model/DomusProUnitModel.md)
- [DomusProUserModel](docs/Model/DomusProUserModel.md)
- [DomusProUserRoleEnum](docs/Model/DomusProUserRoleEnum.md)
- [DomusProUserUpdateModel](docs/Model/DomusProUserUpdateModel.md)
- [DomusProValueExplanationModel](docs/Model/DomusProValueExplanationModel.md)
- [DomusProVersionResponse](docs/Model/DomusProVersionResponse.md)
- [EBRPropertyLocationResponse](docs/Model/EBRPropertyLocationResponse.md)
- [EBRStatusEnum](docs/Model/EBRStatusEnum.md)
- [EJFAdministratorResponse](docs/Model/EJFAdministratorResponse.md)
- [EJFBusinessAreaEnum](docs/Model/EJFBusinessAreaEnum.md)
- [EJFBusinessEventEnum](docs/Model/EJFBusinessEventEnum.md)
- [EJFBusinessProcessEnum](docs/Model/EJFBusinessProcessEnum.md)
- [EJFCompany](docs/Model/EJFCompany.md)
- [EJFOwnerChangeResponse](docs/Model/EJFOwnerChangeResponse.md)
- [EJFOwnerOtherResponse](docs/Model/EJFOwnerOtherResponse.md)
- [EJFOwnerPersonResponse](docs/Model/EJFOwnerPersonResponse.md)
- [EJFOwnerTypeEnum](docs/Model/EJFOwnerTypeEnum.md)
- [EJFOwnerchangeTypeEnum](docs/Model/EJFOwnerchangeTypeEnum.md)
- [EJFOwnershipChangeResponse](docs/Model/EJFOwnershipChangeResponse.md)
- [EJFOwnershipResponse](docs/Model/EJFOwnershipResponse.md)
- [EJFPUnit](docs/Model/EJFPUnit.md)
- [EJFPerson](docs/Model/EJFPerson.md)
- [EJFPersonCompanyInfo](docs/Model/EJFPersonCompanyInfo.md)
- [EJFPrimaryOwnerCollection](docs/Model/EJFPrimaryOwnerCollection.md)
- [EJFStatusEnum](docs/Model/EJFStatusEnum.md)
- [EJFTradeResponse](docs/Model/EJFTradeResponse.md)
- [ESResponseModelAnnualReportSimple](docs/Model/ESResponseModelAnnualReportSimple.md)
- [ESResponseModelBFENumberPropertyResponse](docs/Model/ESResponseModelBFENumberPropertyResponse.md)
- [ESResponseModelCVRCompany](docs/Model/ESResponseModelCVRCompany.md)
- [ESResponseModelCVRMember](docs/Model/ESResponseModelCVRMember.md)
- [ESResponseModelCVRPUnit](docs/Model/ESResponseModelCVRPUnit.md)
- [ESResponseModelEJFOwnerOtherResponse](docs/Model/ESResponseModelEJFOwnerOtherResponse.md)
- [ESResponseModelEJFOwnerPersonResponse](docs/Model/ESResponseModelEJFOwnerPersonResponse.md)
- [ESResponseModelEJFTradeResponse](docs/Model/ESResponseModelEJFTradeResponse.md)
- [ESResponseModelListingsModel](docs/Model/ESResponseModelListingsModel.md)
- [ESResponseModelRentalResponseModel](docs/Model/ESResponseModelRentalResponseModel.md)
- [ESResponseModelTransactionResponse](docs/Model/ESResponseModelTransactionResponse.md)
- [EconomicsCustomerGroupModel](docs/Model/EconomicsCustomerGroupModel.md)
- [EconomicsCustomerModel](docs/Model/EconomicsCustomerModel.md)
- [EconomicsInvoiceModel](docs/Model/EconomicsInvoiceModel.md)
- [EconomicsLayoutModel](docs/Model/EconomicsLayoutModel.md)
- [EconomicsLinesModel](docs/Model/EconomicsLinesModel.md)
- [EconomicsNotesModel](docs/Model/EconomicsNotesModel.md)
- [EconomicsPaymentTermsModel](docs/Model/EconomicsPaymentTermsModel.md)
- [EconomicsProductModel](docs/Model/EconomicsProductModel.md)
- [EconomicsRecipientModel](docs/Model/EconomicsRecipientModel.md)
- [EconomicsSubscriptionModel](docs/Model/EconomicsSubscriptionModel.md)
- [EconomicsVatZoneModel](docs/Model/EconomicsVatZoneModel.md)
- [EjendomIdentifikatorAendringModel](docs/Model/EjendomIdentifikatorAendringModel.md)
- [EjendomIdentifikatorModel](docs/Model/EjendomIdentifikatorModel.md)
- [EjendomKategoriEnum](docs/Model/EjendomKategoriEnum.md)
- [EjendomKategoriModel](docs/Model/EjendomKategoriModel.md)
- [EjendomStamoplysningerModel](docs/Model/EjendomStamoplysningerModel.md)
- [EjendomTypeEnum](docs/Model/EjendomTypeEnum.md)
- [EjendomVurderingModel](docs/Model/EjendomVurderingModel.md)
- [EjendomstypeSubModel](docs/Model/EjendomstypeSubModel.md)
- [EjerpantebrevFastEjendomModel](docs/Model/EjerpantebrevFastEjendomModel.md)
- [EkspeditionSubtypeEnum](docs/Model/EkspeditionSubtypeEnum.md)
- [EkspeditionTypeEnum](docs/Model/EkspeditionTypeEnum.md)
- [EmailModel](docs/Model/EmailModel.md)
- [EnergyLabelCalculation](docs/Model/EnergyLabelCalculation.md)
- [EnergyLabelOverviewResponse](docs/Model/EnergyLabelOverviewResponse.md)
- [EnergyLabelProposal](docs/Model/EnergyLabelProposal.md)
- [EnergyLabelResponse](docs/Model/EnergyLabelResponse.md)
- [EnergyLabelSimple](docs/Model/EnergyLabelSimple.md)
- [ErhvervsoejemedKodeEnum](docs/Model/ErhvervsoejemedKodeEnum.md)
- [ErklaeringKodeModel](docs/Model/ErklaeringKodeModel.md)
- [ErklaeringModel](docs/Model/ErklaeringModel.md)
- [ExistsQ](docs/Model/ExistsQ.md)
- [ExportFormatEnum](docs/Model/ExportFormatEnum.md)
- [FastEjendomMedRettighederModel](docs/Model/FastEjendomMedRettighederModel.md)
- [FastEjendomModel](docs/Model/FastEjendomModel.md)
- [FieldTypeEnum](docs/Model/FieldTypeEnum.md)
- [FilesConvertResponseModel](docs/Model/FilesConvertResponseModel.md)
- [FilesDefaultAddressModel](docs/Model/FilesDefaultAddressModel.md)
- [FilesDownloadModel](docs/Model/FilesDownloadModel.md)
- [FilesListResponseModel](docs/Model/FilesListResponseModel.md)
- [FilesMergeResponseModel](docs/Model/FilesMergeResponseModel.md)
- [FilesMetaResponseModel](docs/Model/FilesMetaResponseModel.md)
- [FilesPriceResponseModel](docs/Model/FilesPriceResponseModel.md)
- [FilesRenameResponseModel](docs/Model/FilesRenameResponseModel.md)
- [FilesValidateModel](docs/Model/FilesValidateModel.md)
- [FilesValidationResponseModel](docs/Model/FilesValidationResponseModel.md)
- [FiltersShortenerRequest](docs/Model/FiltersShortenerRequest.md)
- [FiltersShortenerResponse](docs/Model/FiltersShortenerResponse.md)
- [FiltersType](docs/Model/FiltersType.md)
- [FinancialReportMimeTypeEnum](docs/Model/FinancialReportMimeTypeEnum.md)
- [FinancialReportTypeEnum](docs/Model/FinancialReportTypeEnum.md)
- [FolderTypeEnum](docs/Model/FolderTypeEnum.md)
- [FounderResponse](docs/Model/FounderResponse.md)
- [FraseModel](docs/Model/FraseModel.md)
- [FristInformationModel](docs/Model/FristInformationModel.md)
- [FuldmagtAnmeldtModel](docs/Model/FuldmagtAnmeldtModel.md)
- [FuldmagtOmfangTekstEnum](docs/Model/FuldmagtOmfangTekstEnum.md)
- [GIAccountResponse](docs/Model/GIAccountResponse.md)
- [GIAccountTypeEnum](docs/Model/GIAccountTypeEnum.md)
- [GIMaintenanceAccountResponse](docs/Model/GIMaintenanceAccountResponse.md)
- [GISGeoBuilding](docs/Model/GISGeoBuilding.md)
- [GISOPSMatrixAPIResponseModel](docs/Model/GISOPSMatrixAPIResponseModel.md)
- [GenericPageResponseModelPortfolioTradeResponse](docs/Model/GenericPageResponseModelPortfolioTradeResponse.md)
- [GeoBBox](docs/Model/GeoBBox.md)
- [GeoBBoxPairs](docs/Model/GeoBBoxPairs.md)
- [GeoBBoxQ](docs/Model/GeoBBoxQ.md)
- [GeoBottomRight](docs/Model/GeoBottomRight.md)
- [GeoDistanceQ](docs/Model/GeoDistanceQ.md)
- [GeoDistanceType](docs/Model/GeoDistanceType.md)
- [GeoDistanceValue](docs/Model/GeoDistanceValue.md)
- [GeoJSON](docs/Model/GeoJSON.md)
- [GeoJSONBbox](docs/Model/GeoJSONBbox.md)
- [GeoJSONCRS](docs/Model/GeoJSONCRS.md)
- [GeoJSONCoordinateModel](docs/Model/GeoJSONCoordinateModel.md)
- [GeoJSONFeatureCollectionBuildingMapGeoJSON](docs/Model/GeoJSONFeatureCollectionBuildingMapGeoJSON.md)
- [GeoJSONFeatureCollectionCadastreMapGeoJSON](docs/Model/GeoJSONFeatureCollectionCadastreMapGeoJSON.md)
- [GeoJSONFeatureModel](docs/Model/GeoJSONFeatureModel.md)
- [GeoJSONGeometryModel](docs/Model/GeoJSONGeometryModel.md)
- [GeoJSONLayerResponse](docs/Model/GeoJSONLayerResponse.md)
- [GeoJSONPolygon](docs/Model/GeoJSONPolygon.md)
- [GeoJSONPolygon3D](docs/Model/GeoJSONPolygon3D.md)
- [GeoJSONPropertiesModel](docs/Model/GeoJSONPropertiesModel.md)
- [GeoJSONResponseModel](docs/Model/GeoJSONResponseModel.md)
- [GeoJSONTypes](docs/Model/GeoJSONTypes.md)
- [GeoPoint](docs/Model/GeoPoint.md)
- [GeoRelation](docs/Model/GeoRelation.md)
- [GeoShapeQ](docs/Model/GeoShapeQ.md)
- [GeoTopLeft](docs/Model/GeoTopLeft.md)
- [GisExportLayers](docs/Model/GisExportLayers.md)
- [GisFormat](docs/Model/GisFormat.md)
- [GisLayers](docs/Model/GisLayers.md)
- [GraphNodeEnum](docs/Model/GraphNodeEnum.md)
- [GraphRelationEnum](docs/Model/GraphRelationEnum.md)
- [GrundejernesInvesteringsfondResponse](docs/Model/GrundejernesInvesteringsfondResponse.md)
- [HaeftelseBidragGrundlagEnum](docs/Model/HaeftelseBidragGrundlagEnum.md)
- [HaeftelseBidragModel](docs/Model/HaeftelseBidragModel.md)
- [HaeftelseCompleteTypeEnum](docs/Model/HaeftelseCompleteTypeEnum.md)
- [HaeftelseLaantypeKodeEnum](docs/Model/HaeftelseLaantypeKodeEnum.md)
- [HaeftelseModel](docs/Model/HaeftelseModel.md)
- [HaeftelsePantebrevFormularLovpligtigKodeEnum](docs/Model/HaeftelsePantebrevFormularLovpligtigKodeEnum.md)
- [HaeftelseRenteEnum](docs/Model/HaeftelseRenteEnum.md)
- [HaeftelseRenteModel](docs/Model/HaeftelseRenteModel.md)
- [HaeftelseRettighedInformationModel](docs/Model/HaeftelseRettighedInformationModel.md)
- [HaeftelseStrukturModel](docs/Model/HaeftelseStrukturModel.md)
- [HaeftelseTypeEnum](docs/Model/HaeftelseTypeEnum.md)
- [HaeftelseVilkaarRenteModel](docs/Model/HaeftelseVilkaarRenteModel.md)
- [HandelKodeEnum](docs/Model/HandelKodeEnum.md)
- [HealthcheckResponse](docs/Model/HealthcheckResponse.md)
- [HistoriskAdkomsthaverDokumentTypeEnum](docs/Model/HistoriskAdkomsthaverDokumentTypeEnum.md)
- [HistoriskAdkomsthaverModel](docs/Model/HistoriskAdkomsthaverModel.md)
- [HovedNoteringEnum](docs/Model/HovedNoteringEnum.md)
- [ImplicitFuldmagtModel](docs/Model/ImplicitFuldmagtModel.md)
- [IndekspantebrevFastEjendomModel](docs/Model/IndekspantebrevFastEjendomModel.md)
- [IndicatorResponse](docs/Model/IndicatorResponse.md)
- [IndicatorThemeEnum](docs/Model/IndicatorThemeEnum.md)
- [IsochroneExportResponse](docs/Model/IsochroneExportResponse.md)
- [KoretojerAendringModel](docs/Model/KoretojerAendringModel.md)
- [KreditoplysningerModel](docs/Model/KreditoplysningerModel.md)
- [KreditorModel](docs/Model/KreditorModel.md)
- [KursOplysningerModel](docs/Model/KursOplysningerModel.md)
- [KursTypeEnum](docs/Model/KursTypeEnum.md)
- [KursVaerdiModel](docs/Model/KursVaerdiModel.md)
- [LanguageEnum](docs/Model/LanguageEnum.md)
- [LatestTradeResponse](docs/Model/LatestTradeResponse.md)
- [LatestTradeTypeEnum](docs/Model/LatestTradeTypeEnum.md)
- [LegalOwnershipResponse](docs/Model/LegalOwnershipResponse.md)
- [LettersMethodEnum](docs/Model/LettersMethodEnum.md)
- [LettersModel](docs/Model/LettersModel.md)
- [LettersTypeEnum](docs/Model/LettersTypeEnum.md)
- [LiquidatorResponse](docs/Model/LiquidatorResponse.md)
- [ListingsModel](docs/Model/ListingsModel.md)
- [ListingsUnitTypeEnum](docs/Model/ListingsUnitTypeEnum.md)
- [LocalPlan](docs/Model/LocalPlan.md)
- [LocaleEnum](docs/Model/LocaleEnum.md)
- [LoebetidModel](docs/Model/LoebetidModel.md)
- [LoebetidNestedModel](docs/Model/LoebetidNestedModel.md)
- [LoesoreStamoplysningerModel](docs/Model/LoesoreStamoplysningerModel.md)
- [LovOmKreditaftalerModel](docs/Model/LovOmKreditaftalerModel.md)
- [MATBPFGPoint](docs/Model/MATBPFGPoint.md)
- [MATCondominium](docs/Model/MATCondominium.md)
- [MATLand](docs/Model/MATLand.md)
- [MATLandAggs](docs/Model/MATLandAggs.md)
- [MATLandSimple](docs/Model/MATLandSimple.md)
- [MATSFEResponse](docs/Model/MATSFEResponse.md)
- [MATStatusEnum](docs/Model/MATStatusEnum.md)
- [MatchQ](docs/Model/MatchQ.md)
- [MatchQueryType](docs/Model/MatchQueryType.md)
- [MatrikelModel](docs/Model/MatrikelModel.md)
- [MatrikelStrukturModel](docs/Model/MatrikelStrukturModel.md)
- [MaxAgg](docs/Model/MaxAgg.md)
- [MeddelelseLoesoereModel](docs/Model/MeddelelseLoesoereModel.md)
- [MeddelelseOffentligModel](docs/Model/MeddelelseOffentligModel.md)
- [MeddelelseTypeTekstEnum](docs/Model/MeddelelseTypeTekstEnum.md)
- [MedtagneEjendommeModel](docs/Model/MedtagneEjendommeModel.md)
- [MinAgg](docs/Model/MinAgg.md)
- [MorarenteModel](docs/Model/MorarenteModel.md)
- [MunicipalityPlan](docs/Model/MunicipalityPlan.md)
- [NewRelicCompanyResponse](docs/Model/NewRelicCompanyResponse.md)
- [NewRelicHealthScoreCompanyWithUsersModel](docs/Model/NewRelicHealthScoreCompanyWithUsersModel.md)
- [NewRelicHealthScoreFieldModel](docs/Model/NewRelicHealthScoreFieldModel.md)
- [NewRelicHealthScoreUserModel](docs/Model/NewRelicHealthScoreUserModel.md)
- [NewRelicIndexCompanyModel](docs/Model/NewRelicIndexCompanyModel.md)
- [NewRelicIndexStatsModel](docs/Model/NewRelicIndexStatsModel.md)
- [NewRelicIndexUserModel](docs/Model/NewRelicIndexUserModel.md)
- [NewRelicStatsModel](docs/Model/NewRelicStatsModel.md)
- [NewRelicStatsResponse](docs/Model/NewRelicStatsResponse.md)
- [NewRelicUsersResponse](docs/Model/NewRelicUsersResponse.md)
- [NominelModel](docs/Model/NominelModel.md)
- [ObjectcodeEnum](docs/Model/ObjectcodeEnum.md)
- [ObservationProcessEnum](docs/Model/ObservationProcessEnum.md)
- [ObservationTypeEnum](docs/Model/ObservationTypeEnum.md)
- [OgsaaLystPaa](docs/Model/OgsaaLystPaa.md)
- [OgsaaLystPaaItem](docs/Model/OgsaaLystPaaItem.md)
- [OgsaaLystPaaModel](docs/Model/OgsaaLystPaaModel.md)
- [OplysningspligtKodeEnum](docs/Model/OplysningspligtKodeEnum.md)
- [OverfoertHovedstolModel](docs/Model/OverfoertHovedstolModel.md)
- [Owner](docs/Model/Owner.md)
- [OwnerTypeEnum](docs/Model/OwnerTypeEnum.md)
- [OwnershipCodeEnum](docs/Model/OwnershipCodeEnum.md)
- [PEPFATFRCATypeEnum](docs/Model/PEPFATFRCATypeEnum.md)
- [PEPRCAResponse](docs/Model/PEPRCAResponse.md)
- [PROPERTIESDimensionPROPERTIESEnum](docs/Model/PROPERTIESDimensionPROPERTIESEnum.md)
- [PROPERTIESMeasurePROPERTIESEnum](docs/Model/PROPERTIESMeasurePROPERTIESEnum.md)
- [PaataleberettigetModel](docs/Model/PaataleberettigetModel.md)
- [PaataleberettigetTypeEnum](docs/Model/PaataleberettigetTypeEnum.md)
- [PantebrevFastEjendomModel](docs/Model/PantebrevFastEjendomModel.md)
- [PantsaetningsforbudTypeEnum](docs/Model/PantsaetningsforbudTypeEnum.md)
- [PercentilesAgg](docs/Model/PercentilesAgg.md)
- [PersonVirksomhedAendringModel](docs/Model/PersonVirksomhedAendringModel.md)
- [PersonVirksomhedEnum](docs/Model/PersonVirksomhedEnum.md)
- [PersonbogsattestModel](docs/Model/PersonbogsattestModel.md)
- [PersondokumentModel](docs/Model/PersondokumentModel.md)
- [PersondokumentTypeEnum](docs/Model/PersondokumentTypeEnum.md)
- [PlanStatusEnum](docs/Model/PlanStatusEnum.md)
- [PlantypeEnum](docs/Model/PlantypeEnum.md)
- [PortfolioAggs](docs/Model/PortfolioAggs.md)
- [PortfolioTradeResponse](docs/Model/PortfolioTradeResponse.md)
- [PostgresDatabaseSizeResponse](docs/Model/PostgresDatabaseSizeResponse.md)
- [PostgresTableCountResponse](docs/Model/PostgresTableCountResponse.md)
- [PropertyMeta](docs/Model/PropertyMeta.md)
- [PropertySubTypeEnum](docs/Model/PropertySubTypeEnum.md)
- [PropertyTypeEnum](docs/Model/PropertyTypeEnum.md)
- [ProspectusBrokerCreateModel](docs/Model/ProspectusBrokerCreateModel.md)
- [ProspectusBrokerResponseModel](docs/Model/ProspectusBrokerResponseModel.md)
- [ProspectusBrokerUpdateModel](docs/Model/ProspectusBrokerUpdateModel.md)
- [ProxyPathEnum](docs/Model/ProxyPathEnum.md)
- [QuerySort](docs/Model/QuerySort.md)
- [QueryWithTemplate](docs/Model/QueryWithTemplate.md)
- [RCASourceTarget](docs/Model/RCASourceTarget.md)
- [RCAVia](docs/Model/RCAVia.md)
- [RENTALDimensionRENTALEnum](docs/Model/RENTALDimensionRENTALEnum.md)
- [RENTALMeasureRENTALEnum](docs/Model/RENTALMeasureRENTALEnum.md)
- [RaadgiverModel](docs/Model/RaadgiverModel.md)
- [RaadgiverOpretTypeEnum](docs/Model/RaadgiverOpretTypeEnum.md)
- [RaadighedsindskraenkningEnum](docs/Model/RaadighedsindskraenkningEnum.md)
- [RaadighedsindskraenkningModel](docs/Model/RaadighedsindskraenkningModel.md)
- [RangeFromTo](docs/Model/RangeFromTo.md)
- [RangeQ](docs/Model/RangeQ.md)
- [RealOwnershipResponse](docs/Model/RealOwnershipResponse.md)
- [RealkreditpantebrevModel](docs/Model/RealkreditpantebrevModel.md)
- [Realtor](docs/Model/Realtor.md)
- [RecaptchaRequest](docs/Model/RecaptchaRequest.md)
- [RecaptchaResponse](docs/Model/RecaptchaResponse.md)
- [ReferenceRenteEnum](docs/Model/ReferenceRenteEnum.md)
- [ReferenceRenteModel](docs/Model/ReferenceRenteModel.md)
- [RefinansieringEnum](docs/Model/RefinansieringEnum.md)
- [RefinansieringModel](docs/Model/RefinansieringModel.md)
- [RelatedToResponse](docs/Model/RelatedToResponse.md)
- [RentCategoryEnum](docs/Model/RentCategoryEnum.md)
- [RentEstimateType](docs/Model/RentEstimateType.md)
- [RentalAddress](docs/Model/RentalAddress.md)
- [RentalAddressUnitMatch](docs/Model/RentalAddressUnitMatch.md)
- [RentalResponseModel](docs/Model/RentalResponseModel.md)
- [RentalUnit](docs/Model/RentalUnit.md)
- [ReportDocuments](docs/Model/ReportDocuments.md)
- [ReportFieldAuditor](docs/Model/ReportFieldAuditor.md)
- [ReportFigures](docs/Model/ReportFigures.md)
- [ReportRatio](docs/Model/ReportRatio.md)
- [ResidesAtResponse](docs/Model/ResidesAtResponse.md)
- [ResightsApiModelsAnalysisAnalysisIntervalFieldEnum](docs/Model/ResightsApiModelsAnalysisAnalysisIntervalFieldEnum.md)
- [ResightsApiModelsAnalysisAnalysisMeasureFieldEnum](docs/Model/ResightsApiModelsAnalysisAnalysisMeasureFieldEnum.md)
- [ResightsApiModelsAnalysisAnalysisSortFieldEnum](docs/Model/ResightsApiModelsAnalysisAnalysisSortFieldEnum.md)
- [ResightsApiModelsResponseSortOrder](docs/Model/ResightsApiModelsResponseSortOrder.md)
- [ResightsApiModelsTransactionsStatsIntervalFieldEnum](docs/Model/ResightsApiModelsTransactionsStatsIntervalFieldEnum.md)
- [ResightsApiModelsTransactionsStatsMeasureFieldEnum](docs/Model/ResightsApiModelsTransactionsStatsMeasureFieldEnum.md)
- [ResightsApiModelsTransactionsStatsSortFieldEnum](docs/Model/ResightsApiModelsTransactionsStatsSortFieldEnum.md)
- [ResightsApiQueryDslQuerySortOrder](docs/Model/ResightsApiQueryDslQuerySortOrder.md)
- [ResightsCoreModelsListingsListingsElasticSearchCoordinateModel](docs/Model/ResightsCoreModelsListingsListingsElasticSearchCoordinateModel.md)
- [ResightsCoreModelsRentalRentalElasticSearchCoordinateModel](docs/Model/ResightsCoreModelsRentalRentalElasticSearchCoordinateModel.md)
- [ResightsErrorModel](docs/Model/ResightsErrorModel.md)
- [ResightsModelsEnumsPlandataZoneEnum](docs/Model/ResightsModelsEnumsPlandataZoneEnum.md)
- [ResightsModelsEnumsPropertyZoneEnum](docs/Model/ResightsModelsEnumsPropertyZoneEnum.md)
- [ResightsModelsTablesCvrCompanyMemberRelationCVRMember](docs/Model/ResightsModelsTablesCvrCompanyMemberRelationCVRMember.md)
- [ResightsModelsTablesCvrMemberMemberCVRMember](docs/Model/ResightsModelsTablesCvrMemberMemberCVRMember.md)
- [ResightsResponseModel](docs/Model/ResightsResponseModel.md)
- [RespektHaeftelseFremtidigModel](docs/Model/RespektHaeftelseFremtidigModel.md)
- [RespektModel](docs/Model/RespektModel.md)
- [RettighedModelSimpel](docs/Model/RettighedModelSimpel.md)
- [RettighedTypeEnum](docs/Model/RettighedTypeEnum.md)
- [RettighedsspaltningStatusEnum](docs/Model/RettighedsspaltningStatusEnum.md)
- [RolleAdresseModel](docs/Model/RolleAdresseModel.md)
- [RolleInformationModel](docs/Model/RolleInformationModel.md)
- [RolleModel](docs/Model/RolleModel.md)
- [RolleTypeEnum](docs/Model/RolleTypeEnum.md)
- [RolleTypeIdentifikatorEnum](docs/Model/RolleTypeIdentifikatorEnum.md)
- [SKATRate](docs/Model/SKATRate.md)
- [SKATTaxResponse](docs/Model/SKATTaxResponse.md)
- [SLKSFBB](docs/Model/SLKSFBB.md)
- [SaerligLovgivningModel](docs/Model/SaerligLovgivningModel.md)
- [SaerligeLaanevilkaarEnum](docs/Model/SaerligeLaanevilkaarEnum.md)
- [SearchAndelsboligModel](docs/Model/SearchAndelsboligModel.md)
- [SearchBilbogModel](docs/Model/SearchBilbogModel.md)
- [SearchEjendomModel](docs/Model/SearchEjendomModel.md)
- [SearchPropertyArticleResponse](docs/Model/SearchPropertyArticleResponse.md)
- [SenesteAnmeldelseSvarModel](docs/Model/SenesteAnmeldelseSvarModel.md)
- [ServitutAndetEnum](docs/Model/ServitutAndetEnum.md)
- [ServitutAnvendelseEnum](docs/Model/ServitutAnvendelseEnum.md)
- [ServitutBebyggelseEnum](docs/Model/ServitutBebyggelseEnum.md)
- [ServitutBrugsLejeForholdEnum](docs/Model/ServitutBrugsLejeForholdEnum.md)
- [ServitutEjendomsforholdEnum](docs/Model/ServitutEjendomsforholdEnum.md)
- [ServitutFaerdselEnum](docs/Model/ServitutFaerdselEnum.md)
- [ServitutForsyningEnum](docs/Model/ServitutForsyningEnum.md)
- [ServitutInformationModel](docs/Model/ServitutInformationModel.md)
- [ServitutKoebSalgEnum](docs/Model/ServitutKoebSalgEnum.md)
- [ServitutLedningerEnum](docs/Model/ServitutLedningerEnum.md)
- [ServitutModel](docs/Model/ServitutModel.md)
- [ServitutStrukturModel](docs/Model/ServitutStrukturModel.md)
- [ServitutTekniskeAnlaegEnum](docs/Model/ServitutTekniskeAnlaegEnum.md)
- [ServitutTypeEnum](docs/Model/ServitutTypeEnum.md)
- [SkadesloesbrevFastEjendomModel](docs/Model/SkadesloesbrevFastEjendomModel.md)
- [SkifteformKodeEnum](docs/Model/SkifteformKodeEnum.md)
- [SkifteretsattestModel](docs/Model/SkifteretsattestModel.md)
- [SkoedeAuktionModel](docs/Model/SkoedeAuktionModel.md)
- [SkoedeHandelsbetingelserModel](docs/Model/SkoedeHandelsbetingelserModel.md)
- [SkoedeKoebesumModel](docs/Model/SkoedeKoebesumModel.md)
- [SkoedeModel](docs/Model/SkoedeModel.md)
- [SkoedeUdenforKoebesumModel](docs/Model/SkoedeUdenforKoebesumModel.md)
- [SlksTypeEnum](docs/Model/SlksTypeEnum.md)
- [SnapshotModel](docs/Model/SnapshotModel.md)
- [SoegPdfIdModel](docs/Model/SoegPdfIdModel.md)
- [SoegPersonModel](docs/Model/SoegPersonModel.md)
- [SoegVirksomhedModel](docs/Model/SoegVirksomhedModel.md)
- [SortMode](docs/Model/SortMode.md)
- [SourceDetail](docs/Model/SourceDetail.md)
- [StakeholderResponse](docs/Model/StakeholderResponse.md)
- [StatstidendeListValue](docs/Model/StatstidendeListValue.md)
- [StatstidendeMessage](docs/Model/StatstidendeMessage.md)
- [StatstidendeMessageField](docs/Model/StatstidendeMessageField.md)
- [StatstidendeMessageFieldgroup](docs/Model/StatstidendeMessageFieldgroup.md)
- [StatstidendeMessageTypeAdvanced](docs/Model/StatstidendeMessageTypeAdvanced.md)
- [StatstidendeMessageTypeFieldAdvanced](docs/Model/StatstidendeMessageTypeFieldAdvanced.md)
- [StatstidendeMessageTypeFieldgroupAdvanced](docs/Model/StatstidendeMessageTypeFieldgroupAdvanced.md)
- [StatstidendeMessageTypeSimple](docs/Model/StatstidendeMessageTypeSimple.md)
- [StatstidendeSection](docs/Model/StatstidendeSection.md)
- [StatstidendeSectionType](docs/Model/StatstidendeSectionType.md)
- [StatstidendeStandard](docs/Model/StatstidendeStandard.md)
- [SubareaPlan](docs/Model/SubareaPlan.md)
- [SubscriptionIntervalEnum](docs/Model/SubscriptionIntervalEnum.md)
- [SuccessResponse](docs/Model/SuccessResponse.md)
- [SumAgg](docs/Model/SumAgg.md)
- [SupplerendeAdresseModel](docs/Model/SupplerendeAdresseModel.md)
- [TRANSACTIONSDimensionTRANSACTIONSEnum](docs/Model/TRANSACTIONSDimensionTRANSACTIONSEnum.md)
- [TRANSACTIONSMeasureTRANSACTIONSEnum](docs/Model/TRANSACTIONSMeasureTRANSACTIONSEnum.md)
- [TekstGruppeDateModel](docs/Model/TekstGruppeDateModel.md)
- [TekstGruppeModel](docs/Model/TekstGruppeModel.md)
- [TekstGruppeNestedModel](docs/Model/TekstGruppeNestedModel.md)
- [TenantCompanyResponse](docs/Model/TenantCompanyResponse.md)
- [TenantCompanyTypeEnum](docs/Model/TenantCompanyTypeEnum.md)
- [TenantPersonResponse](docs/Model/TenantPersonResponse.md)
- [TenantPersonTypeEnum](docs/Model/TenantPersonTypeEnum.md)
- [TenantsResponse](docs/Model/TenantsResponse.md)
- [TermsQ](docs/Model/TermsQ.md)
- [TermsTemplate](docs/Model/TermsTemplate.md)
- [TestamenteTypeEnum](docs/Model/TestamenteTypeEnum.md)
- [TilbagebetalingsmaadeKodeEnum](docs/Model/TilbagebetalingsmaadeKodeEnum.md)
- [TillaegFradragEnum](docs/Model/TillaegFradragEnum.md)
- [TimelineDate](docs/Model/TimelineDate.md)
- [TimelineEvent](docs/Model/TimelineEvent.md)
- [TimelineEventTypeEnum](docs/Model/TimelineEventTypeEnum.md)
- [TimelineItem](docs/Model/TimelineItem.md)
- [TimelineItemTypeEnum](docs/Model/TimelineItemTypeEnum.md)
- [TimelineMember](docs/Model/TimelineMember.md)
- [TimelineMemberTypeEnum](docs/Model/TimelineMemberTypeEnum.md)
- [TimelineModel](docs/Model/TimelineModel.md)
- [TimelinePriceChangeModel](docs/Model/TimelinePriceChangeModel.md)
- [TimelineStatusEnum](docs/Model/TimelineStatusEnum.md)
- [TimelineTradeTypeEnum](docs/Model/TimelineTradeTypeEnum.md)
- [TingbogsattestModel](docs/Model/TingbogsattestModel.md)
- [TinglysningAfgiftBeregnetModel](docs/Model/TinglysningAfgiftBeregnetModel.md)
- [TinglysningAfgiftModel](docs/Model/TinglysningAfgiftModel.md)
- [TinglysningChangeLatestResponse](docs/Model/TinglysningChangeLatestResponse.md)
- [TinglysningExportType](docs/Model/TinglysningExportType.md)
- [TinglysningObjektIdentifikatorModel](docs/Model/TinglysningObjektIdentifikatorModel.md)
- [TinglysningStatusEnum](docs/Model/TinglysningStatusEnum.md)
- [TinglysningspaategningModel](docs/Model/TinglysningspaategningModel.md)
- [TokenResponse](docs/Model/TokenResponse.md)
- [TradeNotification](docs/Model/TradeNotification.md)
- [TradeParametersArea](docs/Model/TradeParametersArea.md)
- [TradeParametersSqm](docs/Model/TradeParametersSqm.md)
- [TransactionActorCreateModel](docs/Model/TransactionActorCreateModel.md)
- [TransactionActorResponse](docs/Model/TransactionActorResponse.md)
- [TransactionActorResponseModelWithSubsidiaries](docs/Model/TransactionActorResponseModelWithSubsidiaries.md)
- [TransactionActorTypeEnum](docs/Model/TransactionActorTypeEnum.md)
- [TransactionActorUpdateModel](docs/Model/TransactionActorUpdateModel.md)
- [TransactionAdvisor](docs/Model/TransactionAdvisor.md)
- [TransactionAdvisorResponse](docs/Model/TransactionAdvisorResponse.md)
- [TransactionAdvisorRoleEnum](docs/Model/TransactionAdvisorRoleEnum.md)
- [TransactionAssetStageEnum](docs/Model/TransactionAssetStageEnum.md)
- [TransactionAssetTypeEnum](docs/Model/TransactionAssetTypeEnum.md)
- [TransactionBrokerESModel](docs/Model/TransactionBrokerESModel.md)
- [TransactionBuyerSeller](docs/Model/TransactionBuyerSeller.md)
- [TransactionCapRateSourceEnum](docs/Model/TransactionCapRateSourceEnum.md)
- [TransactionComment](docs/Model/TransactionComment.md)
- [TransactionCreateModel](docs/Model/TransactionCreateModel.md)
- [TransactionGraphStatsBucketResponse](docs/Model/TransactionGraphStatsBucketResponse.md)
- [TransactionGraphStatsResponse](docs/Model/TransactionGraphStatsResponse.md)
- [TransactionMeasureCapRateResponse](docs/Model/TransactionMeasureCapRateResponse.md)
- [TransactionMeasurePriceResponse](docs/Model/TransactionMeasurePriceResponse.md)
- [TransactionMeasureResponse](docs/Model/TransactionMeasureResponse.md)
- [TransactionMeasureSqmResponse](docs/Model/TransactionMeasureSqmResponse.md)
- [TransactionPaginationModel](docs/Model/TransactionPaginationModel.md)
- [TransactionPriceSourceEnum](docs/Model/TransactionPriceSourceEnum.md)
- [TransactionPropertiesOverviewResponse](docs/Model/TransactionPropertiesOverviewResponse.md)
- [TransactionPropertiesResponse](docs/Model/TransactionPropertiesResponse.md)
- [TransactionPropertiesValuationResponse](docs/Model/TransactionPropertiesValuationResponse.md)
- [TransactionProspectusESModel](docs/Model/TransactionProspectusESModel.md)
- [TransactionProspectusResponseModel](docs/Model/TransactionProspectusResponseModel.md)
- [TransactionProspectusUpdateModel](docs/Model/TransactionProspectusUpdateModel.md)
- [TransactionQualityEnum](docs/Model/TransactionQualityEnum.md)
- [TransactionResponse](docs/Model/TransactionResponse.md)
- [TransactionResponseWrapperProspectusBrokerResponseModel](docs/Model/TransactionResponseWrapperProspectusBrokerResponseModel.md)
- [TransactionResponseWrapperTransactionActorResponseModelWithSubsidiaries](docs/Model/TransactionResponseWrapperTransactionActorResponseModelWithSubsidiaries.md)
- [TransactionResponseWrapperTransactionProspectusResponseModel](docs/Model/TransactionResponseWrapperTransactionProspectusResponseModel.md)
- [TransactionResponseWrapperTransactionSourceResponseModel](docs/Model/TransactionResponseWrapperTransactionSourceResponseModel.md)
- [TransactionSourceCreateModel](docs/Model/TransactionSourceCreateModel.md)
- [TransactionSourceResponse](docs/Model/TransactionSourceResponse.md)
- [TransactionSourceResponseModel](docs/Model/TransactionSourceResponseModel.md)
- [TransactionSourceUpdateModel](docs/Model/TransactionSourceUpdateModel.md)
- [TransactionStatsResponse](docs/Model/TransactionStatsResponse.md)
- [TransactionSubsidiaryCreateModel](docs/Model/TransactionSubsidiaryCreateModel.md)
- [TransactionTradeTypeEnum](docs/Model/TransactionTradeTypeEnum.md)
- [TransactionTypeEnum](docs/Model/TransactionTypeEnum.md)
- [TransactionUpdateModel](docs/Model/TransactionUpdateModel.md)
- [TypeEnum](docs/Model/TypeEnum.md)
- [UdlaegFastEjendomModel](docs/Model/UdlaegFastEjendomModel.md)
- [UdledtBilagEnum](docs/Model/UdledtBilagEnum.md)
- [UdledtBilagModel](docs/Model/UdledtBilagModel.md)
- [UmatrikuleretArealModel](docs/Model/UmatrikuleretArealModel.md)
- [UmatrikuleretTypeEnum](docs/Model/UmatrikuleretTypeEnum.md)
- [UnderpantrettighedModel](docs/Model/UnderpantrettighedModel.md)
- [UnitCategoryEnum](docs/Model/UnitCategoryEnum.md)
- [UnitTypeEnum](docs/Model/UnitTypeEnum.md)
- [UsageAggs](docs/Model/UsageAggs.md)
- [VURCeilingDeductionForImprovement](docs/Model/VURCeilingDeductionForImprovement.md)
- [VURCeilingDeductionForImprovementOverallResponse](docs/Model/VURCeilingDeductionForImprovementOverallResponse.md)
- [VURCeilingResponse](docs/Model/VURCeilingResponse.md)
- [VURDeductionForImprovement](docs/Model/VURDeductionForImprovement.md)
- [VURDeductionForImprovementOverallResponse](docs/Model/VURDeductionForImprovementOverallResponse.md)
- [VURDistribution](docs/Model/VURDistribution.md)
- [VURExemption](docs/Model/VURExemption.md)
- [VURLandValueSpecification](docs/Model/VURLandValueSpecification.md)
- [VURValuationNewResponse](docs/Model/VURValuationNewResponse.md)
- [VURValuationOverviewResponse](docs/Model/VURValuationOverviewResponse.md)
- [VURValuationProperty](docs/Model/VURValuationProperty.md)
- [VURValuationResponse](docs/Model/VURValuationResponse.md)
- [ValueCountAgg](docs/Model/ValueCountAgg.md)
- [VilkaarBetalingModel](docs/Model/VilkaarBetalingModel.md)
- [VilkaarOpsigelseModel](docs/Model/VilkaarOpsigelseModel.md)
- [VilkaarOpskrivningModel](docs/Model/VilkaarOpskrivningModel.md)
- [VirksomhedRolleEnum](docs/Model/VirksomhedRolleEnum.md)
- [VirksomhedSoegningInformationSamling](docs/Model/VirksomhedSoegningInformationSamling.md)
- [VirksomhedSoegningRegistreringerModel](docs/Model/VirksomhedSoegningRegistreringerModel.md)
- [YdelsestypeModel](docs/Model/YdelsestypeModel.md)
- [ZonestatusEnum](docs/Model/ZonestatusEnum.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

mikkel@resights.dk

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0`
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
