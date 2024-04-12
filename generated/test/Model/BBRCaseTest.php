<?php
/**
 * BBRCaseTest
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
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * BBRCaseTest Class Doc Comment
 *
 * @category    Class
 * @description Byggesag indeholder oplysninger om byggesager og fremdriften i disse samt andre sager, som kan medføre en opdatering af BBR. Der findes to typer: anmeldelses- og tilladelsessager. I BBR 2.0 tilføjes en ny type der anvendes til at gennemføre foreløbige registreringer.  Beskrivelse: Byggesag  har til formål at modtage oplysninger om ændringer i bygnings- og boligbestanden, som opstår gennem byggesagsbehandlingen, samt at vedligeholde en aktuel beskrivelse af de ændringer, der er under udførelse, men som ikke er fuldført endnu (verserende byggesager).  En Byggesag skal normalt være relateret til en Bygning eller et Teknisk anlæg. Undtaget er sager som alene indeholder objekter, som ikke ligger under en Bygning eller et Teknisk anlæg, dvs. ændringer til grunde eller ændringer eller nyopførelse af Teknisk anlæg som ikke ligger i en Bygning.  Bemærkninger: Når en Byggesag oprettes oprettes data som foreløbige. Når en verserende Byggesag afsluttes, overføres oplysningerne som gældende i stamdata. Når andre sager afsluttes med en afgørelse ”Godkendt”, overføres sagsdata automatisk til de tilhørende objekter. Ved nedrivning gøres bygningen historisk.
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class BBRCaseTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "BBRCase"
     */
    public function testBBRCase()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "namespace"
     */
    public function testPropertyNamespace()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "business_process"
     */
    public function testPropertyBusinessProcess()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "business_area"
     */
    public function testPropertyBusinessArea()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "business_event"
     */
    public function testPropertyBusinessEvent()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "registration_from"
     */
    public function testPropertyRegistrationFrom()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "registration_to"
     */
    public function testPropertyRegistrationTo()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "registration_actor"
     */
    public function testPropertyRegistrationActor()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "effect_from"
     */
    public function testPropertyEffectFrom()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "effect_to"
     */
    public function testPropertyEffectTo()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "effect_actor"
     */
    public function testPropertyEffectActor()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "municipality_code"
     */
    public function testPropertyMunicipalityCode()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag001_building_project_number"
     */
    public function testPropertySag001BuildingProjectNumber()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag002_building_project_date"
     */
    public function testPropertySag002BuildingProjectDate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag003_building_permission_date"
     */
    public function testPropertySag003BuildingPermissionDate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag004_start_date_expected"
     */
    public function testPropertySag004StartDateExpected()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag005_start_date"
     */
    public function testPropertySag005StartDate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag006_commissioning_permit"
     */
    public function testPropertySag006CommissioningPermit()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag007_closure"
     */
    public function testPropertySag007Closure()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag008_completed_building_area"
     */
    public function testPropertySag008CompletedBuildingArea()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag009_expected_finish_date"
     */
    public function testPropertySag009ExpectedFinishDate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag010_completion_project"
     */
    public function testPropertySag010CompletionProject()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag012_building_project_code"
     */
    public function testPropertySag012BuildingProjectCode()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag013_notification_construction_work_date"
     */
    public function testPropertySag013NotificationConstructionWorkDate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag016_commissioning_permit_partial"
     */
    public function testPropertySag016CommissioningPermitPartial()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag017_provisionally_completed_building_area"
     */
    public function testPropertySag017ProvisionallyCompletedBuildingArea()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag018_provisionally_completed_apartments"
     */
    public function testPropertySag018ProvisionallyCompletedApartments()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag019_developer_relationship"
     */
    public function testPropertySag019DeveloperRelationship()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag024_received_application_building_project_date"
     */
    public function testPropertySag024ReceivedApplicationBuildingProjectDate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag025_adequate_application_date"
     */
    public function testPropertySag025AdequateApplicationDate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag026_neighbor_orientation_date"
     */
    public function testPropertySag026NeighborOrientationDate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag027_neighbor_orientation_completion_date"
     */
    public function testPropertySag027NeighborOrientationCompletionDate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag032_letter"
     */
    public function testPropertySag032Letter()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sag033_provisionally_completed_apartments_without_kitchen"
     */
    public function testPropertySag033ProvisionallyCompletedApartmentsWithoutKitchen()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
