# # AdresseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kommunekode** | **mixed** | The code of a municipality. The plain text of a municipality is to be found by reference to the authority-data in the civilregistrationsystem. The code will always be unique. |
**vejkode** | **mixed** | Declares a named street, road, square, path or the like in code. Streetcode in combination with municipalitycode constitutes an unique code for a road in Denmark. |
**vejnavn** | **mixed** | The approved name of a road, a street, a square, a path and the like. Further more street names can be connected to other particularly limited areas like garden associations or summer residence areas without road network, large commercial or institutional areas with a large number of buildings, smaller islands without road network, larger sporting facilities and the like. |
**husnummer** | **mixed** | Numeric identification (da: house number ~ husnummer) including an optional letter, which identifies a certain access to a building, a plot/piece of land or a plant etc. based on the named road or street which gives access hereto. The identifier is determined in increasing numerical and letter order along the road, normally with even numbers on the right side and odd numbers on the left side of the road. |
**etage** | **mixed** | Identification which describes the floor or level on which a specific entrance door, appartment or suite is placed, in the staircase refered to. | [optional]
**doer** | **mixed** | Identification which describes the location of a specific entrance door on a floor or level (repos) in the staircase referred to. | [optional]
**postnummer** | **mixed** | The postal departments nationwide postal code. |
**postnummernavn** | **mixed** | Declares the name of a postal district in plain text. |
**supplerende_bynavn** | **mixed** | Name of a village, city or subdivision of a city or district, which is determined as a part of the official address specification for a certain street or specific parts of a street, defined by intervals of street building identifiers | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
