<?php
/*
*
*
*/
namespace Miva\Provisioning;

/**
* Client
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class Client
{
	
	/** @var string */
	protected $uri;

	/** @var string */
	protected $token;

	/** @var SoapClient */
	protected $client;

	/**
	* Constructor
	* 
	* @param string $uri - The Entry Point to the API
	* @param string $token - The Access Token to the API
	*/
	public function __construct($uri, $token)
	{
		
	}

	public function doRequest(RequestInterface $request)
	{
		
	}
}