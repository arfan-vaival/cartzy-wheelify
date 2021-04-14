<?php
namespace PHPCartzy\Discount;

use PHPCartzy\CartzySDK;
use PHPCartzy\CurlRequest;
use PHPCartzy\Exception\SdkException;
use PHPCartzy\HttpRequest;

class DiscountCode
{


    public function __construct()
    {
    }

    /**
     * Get List Of Discount Codes
     * @return mixed
     * @throws SdkException
     */
    public function get()
    {
        try {
            $request = new HttpRequest();
            return $request->get('discount/list');
        }
        catch (SdkException $ex) {
            throw $ex;
        }
    }
	public  function get_discount(){

		try {
			$config = CartzySDK::$config;
			$request = new CurlRequest();
			return $request->get($config['ApiUrl'].'discount');
		}
		catch (SdkException $ex) {
			throw $ex;
		}
	}

}
