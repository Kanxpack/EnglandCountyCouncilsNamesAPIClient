# EnglandCountyCouncilsNamesAPIClient
PHP Rapidapi.com API client for England County Councils names

## Usage

```php
<?php
require_once './vendor/autoload.php';

use Kanxpack\EnglandCountyCouncilsNamesAPIClient\EnglandCountyCouncilsNamesAPIClient;

$result = EnglandCountyCouncilsNamesAPIClient::get('4b33ed8ca5msh7ad0ca38aaee2cfp1b41f2jsn522a6c310273');

if (!$result::getMessage()) {
 $response = $result::getResponse();
 foreach ($response as $item) {
 	echo $item['id'] .' '. $item['name'] .'<br>';
 }
} else {
	echo $result::getMessage();
}

```

## Installation

### With Composer

```
composer require kanxpack/englandcountycouncilsnamesapiclient
```

```
{
    "require": {
        "kanxpack/englandcountycouncilsnamesapiclient": "^1.0"
    }
}
```

```php
<?php
require_once './vendor/autoload.php';

use Kanxpack\EnglandCountyCouncilsNamesAPIClient\EnglandCountyCouncilsNamesAPIClient;

$result = EnglandCountyCouncilsNamesAPIClient::get('4b33ed8ca5msh7ad0ca38aaee2cfp1b41f2jsn522a6c310273');

if (!$result::getMessage()) {
 $response = $result::getResponse();
 foreach ($response as $item) {
 	echo $item['id'] .' '. $item['name'] .'<br>';
 }
} else {
	echo $result::getMessage();
}
```

### Without Composer

Why are you not using [composer](https://getcomposer.org/)? Download the [EnglandCountyCouncilsNamesAPIClient latest release](https://github.com/Kanxpack/EnglandCountyCouncilsNamesAPIClient/releases) and put the contents of the ZIP archive into a directory in your project. Then require the file autoload.php to get all classes and dependencies loaded on need.

```php
<?php
require 'path-to-EnglandCountyCouncilsNamesAPIClient-directory/autoload.php';

use Kanxpack\EnglandCountyCouncilsNamesAPIClient\EnglandCountyCouncilsNamesAPIClient;

$result = EnglandCountyCouncilsNamesAPIClient::get('4b33ed8ca5msh7ad0ca38aaee2cfp1b41f2jsn522a6c310273');

if (!$result::getMessage()) {
 $response = $result::getResponse();
 foreach ($response as $item) {
 	echo $item['id'] .' '. $item['name'] .'<br>';
 }
} else {
	echo $result::getMessage();
}
```
## Credits

This project exists thanks to all the people who contribute.

[Kanxpack](https://github.com/Kanxpack)

## Sponsors

Support this project by becoming a sponsor. Your logo will show up here with a link to your website.

[Become a sponsor via GitHub*](https://github.com/sponsors/Kanxpack)

* This is a donation. No goods or services are expected in return. Any requests for refunds for those purposes will be rejected.

## License
[MIT](https://github.com/Kanxpack/CurlGet?tab=MIT-1-ov-file#readme)