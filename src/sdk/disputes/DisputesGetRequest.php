<?php

namespace PayPalSdk\disputes;

//use app\controller\paypal\http\HttpRequest;
use PayPalHttp\HttpRequest;


class DisputesGetRequest extends HttpRequest
{
    //function __construct($params = null)
    function __construct()
    {

    	//parent::__construct("/v1/customer/disputes?page_size=1", "GET");

    	parent::__construct("/v1/customer/disputes", "GET");
    	/*
    	if (!is_null($params))
    		{
    			$this->path = $this->path.http_build_query($params, '', '&', PHP_QUERY_RFC3986);
			}
		*/
    	$this->headers["Content-Type"] = "application/json";

    	/*

    	if (is_null($disputedTransactionId))
    	{

        	parent::__construct("/v1/customer/disputes?", "GET");
        
        }

        else

        {

        	parent::__construct("/v1/customer/disputes?{disputed_transaction_id}", "GET");
        	$this->path = str_replace("{disputed_transaction_id}", urlencode($disputedTransactionId), $this->path);

        }

        $this->headers["Content-Type"] = "application/json";

        */
    }

}
