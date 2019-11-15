# Unoffical DHL Express PHP SDK

This *unoffical* library is wrapping some functions of the **DHL Express** JSON/REST API (called MyDHL_API).

To get a SDK for **standard DHL** shipping, please have a look at the great SDK from [Petschko](https://github.com/Petschko/dhl-php-sdk) i've used for inspiration.


## Requirements

- test (and live) credentials from the DHL Express Tech Contact
- PHP-Version 5.5 or higher _(It may work on older Versions, but I don't offer Support for these)_
- [Guzzle](http://docs.guzzlephp.org/en/stable/) installed

## Compatibility

This Project is written for the MyDHL API  **v1**.

## Install

You can use [Composer](https://getcomposer.org/) to install the package to your project:

`composer require alex-le/dhl-express-php-sdk`

## Supported API Operations

| Operation | supported |
|---|---|
| RateRequest | no |
| ShipmentRequest | yes |
| TrackingRequest | no |
| DocumentRetrieve | no |
| updateShipment | no |
| requestPickup | no |


## Usage

see [examples](/examples) for basic examples and scripts to generate test labels (see below)

## Request Access to live API

To get the credentials for the live account, DHL requested test labels for some scenarios:

The test scripts can be found in the [examples](/examples) folder:

1. National shipping with saturday delivery - [test_1.php](/examples/test_1.php)
2. National shipping time option and 2 packages - [test_2.php](/examples/test_2.php)
3. International shipping not liable to duty - [test_3.php](/examples/test_3.php)
4. International shipping liable to duty - [test_4.php](/examples/test_4.php)
5. International shipping liable to duty with service DDP - [test_5.php](/examples/test_5.php)
6. International shipping liable to duty with different payment account - [test_6.php](/examples/test_6.php)


## Things i've learned during testing the API

- The "InternationalDetail" part is mandatory even if its national package
- StreetName and StreetNumber in der Address don't have any effect right now, the "StreetLines" field is always used
- Company Name in the Recipient address is the name on the package (first line)
- Package Dimensions are mandatory, but they don't have to be exact (DHL will check them anyway) - so it is possible to always use the smallest package size you have
- "StreetLine" could **not** be used for any additional name - use "StreetLines2" for this - always use it for street name and number


More details will follow soon. This package is WIP.