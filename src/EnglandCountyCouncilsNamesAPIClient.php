<?php
namespace Kanxpack\EnglandCountyCouncilsNamesAPIClient;


use Kanxpack\RapidAPIClient\RapidAPIClient;

class EnglandCountyCouncilsNamesAPIClient {

	private static $instance;
	protected static $rapidapiUrl = 'https://kanxpack-england-county-councils-names-list-api.p.rapidapi.com/open_data/uk/england/counties/county_councils/names/all.json';
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