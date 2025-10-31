<style>
	body{background:#222;color:#eee}
</style>
<?php
require_once './vendor/autoload.php';

use Kanxpack\EnglandCountyCouncilsNamesAPIClient\EnglandCountyCouncilsNamesAPIClient;

$result = EnglandCountyCouncilsNamesAPIClient::all('4b33ed8ca5msh7ad0ca38aaee2cfp1b41f2jsn522a6c310273');

if (!$result::getMessage()) {
 $response = $result::getResponse();
 foreach ($response as $item) {
 	echo $item['id'] .' '. $item['name'] .'<br>';
 }
} else {
	echo $result::getMessage();
}
