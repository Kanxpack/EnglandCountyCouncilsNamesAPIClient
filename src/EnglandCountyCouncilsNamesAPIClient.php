<?php
namespace Kanxpack\EnglandCountyCouncilsNamesAPIClient;


use Kanxpack\RapidAPIClient\RapidAPIClient;

class EnglandCountyCouncilsNamesAPIClient {

	private static $instance;
	
    public static function getInstance() : self
    { 
    	return empty(self::$instance) ? (new self()) : self::$instance; 
    }

	public static function get($key) : \Kanxpack\RapidAPIClient\RapidAPIClient
	{
        return RapidAPIClient::setUrl('https://kanxpack-england-county-councils-names-list-api.p.rapidapi.com/Kanxpack/EnglandCountyCouncilsNamesAPIData/refs/tags/v1.0.2/data/all.json')->setHost('kanxpack-england-county-councils-names-list-api.p.rapidapi.com')->setKey($key)->get();
	}

}