<?php

namespace PayPalSdk\disputes;

use PayPalHttp\HttpRequest;

class DisputeGetRequestById extends HttpRequest
{
    function __construct($disputeId)
    {

    	//parent::__construct("/v1/customer/disputes?page_size=1", "GET");

    	parent::__construct("/v1/customer/disputes/{dispute_id}?", "GET");
		$this->path = str_replace("{dispute_id}", urlencode($disputeId), $this->path);
    	$this->headers["Content-Type"] = "application/json";

    }

}