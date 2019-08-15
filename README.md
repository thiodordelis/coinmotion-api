# Composer package for the public API of Coinmotion.com[![Build Status](https://travis-ci.org/thiodordelis/coinmotion-api.svg?branch=master)](https://travis-ci.org/thiodordelis/coinmotion-api)

### How to use
Run 
```
composer require theodoros/coinmotion-api
```
then get the rates with the getRates() method.
```
<?php
namespace Theodoros\Coinmotion;
require_once "vendor/autoload.php";
$rates = Rates::getRates();
var_dump($rates);
```
The output will be like this:
```
{
    "success": true,
    "payload": {
        "btc": {
            "currencyCode": "BTC",
            "buy": "9675.03",
            "sell": "9794.38",
            "fbuy": "9675.03 \u20ac \/ 1 BTC",
            "fsell": "9794.38 \u20ac \/ 1 BTC",
            "fbuy2": "9675.03 \u20ac",
            "fsell2": "9794.38 \u20ac",
            "low": "9327.15",
            "fhigh": "9787.11 \u20ac \/ 1 BTC",
            "fchangep": "+2.39 %",
            "changeSign": true,
            "buyTruncated": 9675,
            "sellTruncated": 9794,
            "changeAmount": 231.24
        },
        "ltc": {
            "currencyCode": "LTC",
            "buy": "85.32",
            "sell": "86.06",
            "fbuy": "85.32 \u20ac \/ 1 LTC",
            "fsell": "86.06 \u20ac \/ 1 LTC",
            "fbuy2": "85.32 \u20ac",
            "fsell2": "86.06 \u20ac",
            "low": "83.56",
            "fhigh": "87.88 \u20ac \/ 1 LTC",
            "fchangep": "-1.91 %",
            "changeSign": false,
            "buyTruncated": 85,
            "sellTruncated": 86,
            "changeAmount": -1.62
        },
        "eth": {
            "currencyCode": "ETH",
            "buy": "200.26",
            "sell": "202.04",
            "fbuy": "200.26 \u20ac \/ 1 ETH",
            "fsell": "202.04 \u20ac \/ 1 ETH",
            "fbuy2": "200.26 \u20ac",
            "fsell2": "202.04 \u20ac",
            "low": "193.45",
            "fhigh": "202.00 \u20ac \/ 1 ETH",
            "fchangep": "+1.21 %",
            "changeSign": true,
            "buyTruncated": 200,
            "sellTruncated": 202,
            "changeAmount": 2.43
        },
        "xrp": {
            "currencyCode": "XRP",
            "buy": "0.28420",
            "sell": "0.28682",
            "fbuy": "0.28420 \u20ac \/ 1 XRP",
            "fsell": "0.28682 \u20ac \/ 1 XRP",
            "fbuy2": "0.28420 \u20ac",
            "fsell2": "0.28682 \u20ac",
            "low": "0.27855",
            "fhigh": "0.28641 \u20ac \/ 1 XRP",
            "fchangep": "+0.25 %",
            "changeSign": true,
            "buyTruncated": 0,
            "sellTruncated": 0,
            "changeAmount": 0.00072
        },
        "xlm": {
            "currencyCode": "XLM",
            "buy": "0.073966",
            "sell": "0.074579",
            "fbuy": "0.073966 \u20ac \/ 1 XLM",
            "fsell": "0.074579 \u20ac \/ 1 XLM",
            "fbuy2": "0.073966 \u20ac",
            "fsell2": "0.074579 \u20ac",
            "low": "0.073670",
            "fhigh": "0.075066 \u20ac \/ 1 XLM",
            "fchangep": "-0.84 %",
            "changeSign": false,
            "buyTruncated": 0,
            "sellTruncated": 0,
            "changeAmount": -0.000621
        },
        "fWithdrawalFee": "0.90 \u20ac",
        "timestamp": 1564839246,
        "version": "1.20.0"
    }
}
```

## Authors
* **Theodoros Deligiannidis** - *Initial work* - [thiodordelis](https://github.com/thiodordelis)

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
