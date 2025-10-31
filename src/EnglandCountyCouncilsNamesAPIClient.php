<?php
namespace Kanxpack\EnglandCountyCouncilsNamesAPIClient;


use Kanxpack\RapidAPIClient\RapidAPIClient;

class EnglandCountyCouncilsNamesAPIClient {

	private static $instance;
	protected static $rapidapiUrl = 'https://kanxpack-england-county-councils-names-list-api.p.rapidapi.com/Kanxpack/EnglandCountyCouncilsNamesAPIData/refs/tags/v1.0.2/data/all.json';
	protected static $rapidapiHost = 'kanxpack-england-county-councils-names-list-api.p.rapidapi.com';

    public static function getInstance() : self
    { 
    	return empty(self::$instance) ? (new self()) : self::$instance; 
    }

	public static function all($key) : \Kanxpack\RapidAPIClient\RapidAPIClient
	{
        return RapidAPIClient::setUrl(self::$rapidapiUrl)->setHost(self::$rapidapiHost)->setKey($key)->get();
	}

}